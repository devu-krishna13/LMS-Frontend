<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Cache;

class PhonePeService
{
    private $clientId;
    private $clientSecret;
    private $clientVersion;
    private $isProd;
    private $basePgUrl;
    private $baseAuthUrl;

    public function __construct()
    {
        $this->clientId = config('services.phonepe.client_id');
        $this->clientSecret = config('services.phonepe.client_secret');
        $this->clientVersion = (string) config('services.phonepe.client_version', '1');
        
        $env = config('services.phonepe.env', 'uat');
        $this->isProd = ($env === 'prod');

        if ($this->isProd) {
            $this->basePgUrl = 'https://api.phonepe.com/apis/pg';
            $this->baseAuthUrl = 'https://api.phonepe.com/apis/identity-manager';
        } else {
            $this->basePgUrl = 'https://api-preprod.phonepe.com/apis/pg-sandbox';
            $this->baseAuthUrl = 'https://api-preprod.phonepe.com/apis/pg-sandbox';
        }
    }

    /**
     * Get OAuth Access Token from PhonePe
     */
    public function getAccessToken()
    {
        return Cache::remember('phonepe_access_token', 3000, function () {
            try {
                $url = $this->baseAuthUrl . '/v1/oauth/token';
                
                $response = Http::withoutVerifying()->asForm()->post($url, [
                    'client_id' => $this->clientId,
                    'client_secret' => $this->clientSecret,
                    'client_version' => $this->clientVersion,
                    'grant_type' => 'client_credentials',
                ]);

                if ($response->successful()) {
                    return $response->json()['access_token'];
                }

                Log::error('PhonePe Auth Error', ['response' => $response->json()]);
                return null;
            } catch (\Exception $e) {
                Log::error('PhonePe Auth Exception', ['error' => $e->getMessage()]);
                return null;
            }
        });
    }

    /**
     * Initiate a payment request using PhonePe v2 API.
     */
    public function initiatePayment($amount, $merchantTransactionId, $userId, $callbackUrl)
    {
        $token = $this->getAccessToken();
        if (!$token) {
            return ['success' => false, 'message' => 'Authentication with Payment Gateway failed'];
        }

        $payload = [
            'merchantOrderId' => $merchantTransactionId,
            'amount' => (int) ($amount * 100), // in paise
            'expireAfter' => 1200,
            'paymentFlow' => [
                'type' => 'PG_CHECKOUT',
                'message' => 'Payment for Course Fee',
                'merchantUrls' => [
                    'redirectUrl' => $callbackUrl
                ]
            ]
        ];

        try {
            Log::info('PhonePe v2: Initiating payment', ['orderId' => $merchantTransactionId]);

            $response = Http::withoutVerifying()->withHeaders([
                'Content-Type' => 'application/json',
                'Authorization' => 'O-Bearer ' . $token,
                'accept' => 'application/json',
            ])->post($this->basePgUrl . '/checkout/v2/pay', $payload);

            $resData = $response->json();

            // v2 Standard Checkout returns redirectUrl at the root, not inside 'data'
            if ($response->successful() && isset($resData['redirectUrl'])) {
                return [
                    'success' => true,
                    'redirect_url' => $resData['redirectUrl'],
                    'merchantTransactionId' => $merchantTransactionId
                ];
            }

            Log::error('PhonePe v2 API Error', ['response' => $resData]);
            return ['success' => false, 'message' => $resData['message'] ?? 'Payment initiation failed'];

        } catch (\Exception $e) {
            Log::error('PhonePe v2 Exception', ['error' => $e->getMessage()]);
            return ['success' => false, 'message' => 'Internal server error during payment initiation'];
        }
    }

    /**
     * Verify the status of a payment using PhonePe v2 API.
     */
    public function verifyStatus($merchantTransactionId)
    {
        $token = $this->getAccessToken();
        if (!$token) return null;

        try {
            // Endpoints for status: /v1/order/status/{merchantId}/{merchantOrderId} 
            // In v2 standard checkout, it often uses Order Status API
            $response = Http::withoutVerifying()->withHeaders([
                'Content-Type' => 'application/json',
                'Authorization' => 'O-Bearer ' . $token,
                'accept' => 'application/json',
            ])->get($this->basePgUrl . "/v1/order/status/{$this->clientId}/{$merchantTransactionId}");

            return $response->json();

        } catch (\Exception $e) {
            Log::error('PhonePe v2 Status Verification Exception', ['error' => $e->getMessage()]);
            return null;
        }
    }
}
