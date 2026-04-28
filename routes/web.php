<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/fix-storage', function () {
    $target = storage_path('app/public');
    $link = public_path('storage');
    
    if (file_exists($link)) {
        return 'Link already exists! If images still fail, delete the "storage" folder inside "public" and run this again.';
    }
    
    if (symlink($target, $link)) {
        return 'Storage link created successfully!';
    } else {
        return 'Failed to create link. Please check folder permissions.';
    }
});

Route::post('/register-lead', [App\Http\Controllers\LeadController::class, 'register']);
