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

Route::get('/feature/{slug}', function ($slug) {
    $features = [
        'course-builder' => [
            'title' => 'Advanced Course Builder',
            'icon' => 'fa-tools',
            'color' => '#3B82F6',
            'desc' => 'Drag and drop builder designed for seamless organization. Build detailed curriculums, structure modules, and publish engaging text or video lessons.',
            'highlights' => [
                'Intuitive drag-and-drop hierarchy structural builder',
                'Support for high-definition video, PDF documents, rich text articles, and external web resource links',
                'Advanced course scheduling and content drip automation to control delivery speed',
                'Individual lesson pre-requisites and course completion validation parameters'
            ],
            'image' => 'https://images.unsplash.com/photo-1516321318423-f06f85e504b3?auto=format&fit=crop&w=800&q=80'
        ],
        'quiz-builder' => [
            'title' => 'Interactive Quiz Builder',
            'icon' => 'fa-lightbulb',
            'color' => '#10B981',
            'desc' => 'Create beautiful interactive quizzes with multiple question types, automated grading, customized limits, and review feedback.',
            'highlights' => [
                'Support for multiple choice, open text, matching columns, and file upload questions',
                'Dynamic question pool randomized shuffling options to prevent academic copying',
                'Automated instant grading engine with custom grade boundaries and feedback rules',
                'Strict time limits, single attempt enforcement, and anti-tab-switch tracking'
            ],
            'image' => 'https://images.unsplash.com/photo-1434030216411-0b793f4b4173?auto=format&fit=crop&w=800&q=80'
        ],
        'live-classes' => [
            'title' => 'Live Session Engine',
            'icon' => 'fa-video',
            'color' => '#6366F1',
            'desc' => 'Deliver premium low-latency virtual live classes to thousands of active concurrent students seamlessly.',
            'highlights' => [
                'Full high-definition native real-time broadcasting stream directly inside the browser',
                'Interactive chat, hand-raising, poll questions, and collaborative whiteboards built-in',
                'One-click automated recording sync to cloud storage for asynchronous review',
                'Seamless Google Meet, Zoom, and MS Teams calendar integrations'
            ],
            'image' => 'https://images.unsplash.com/photo-1588196749597-9ff075ee6b5b?auto=format&fit=crop&w=800&q=80'
        ],
        'course-bundle' => [
            'title' => 'High-Converting Course Bundles',
            'icon' => 'fa-cubes',
            'color' => '#F59E0B',
            'desc' => 'Maximize your academy revenue by packaging related training programs, templates, and guides together as exclusive value bundles.',
            'highlights' => [
                'Group relevant courses together for specialized career progression paths',
                'Create time-limited bundle promotion campaigns with unique pricing rules',
                'Unified checkout process for multiple curriculum licenses',
                'Flexible bundle customization for corporate bulk training clients'
            ],
            'image' => 'https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?auto=format&fit=crop&w=800&q=80'
        ],
        'smart-attendance' => [
            'title' => 'Smart Class Attendance',
            'icon' => 'fa-clock',
            'color' => '#10B981',
            'desc' => 'Track student live streaming time, classroom activity metrics, and attendance records instantly with no manual effort.',
            'highlights' => [
                'Passive participant duration measurement down to the second',
                'Instant attendance report sheets exports (CSV, PDF, Excel) for school administrators',
                'Interactive automated student activity triggers to detect idle/away states',
                'Seamless parent tracking reports delivery automation'
            ],
            'image' => 'https://images.unsplash.com/photo-1506784983877-45594efa4cbe?auto=format&fit=crop&w=800&q=80'
        ],
        'fee-hub' => [
            'title' => 'Fee Hub & Automated Split Payments',
            'icon' => 'fa-wallet',
            'color' => '#3B82F6',
            'desc' => 'Manage international student billing pipelines, recurring subscriptions, coupon rules, and automatic co-tutor revenue share payouts.',
            'highlights' => [
                'Complete support for PayPal, PhonePe, Razorpay, and direct wire transfers',
                'Automated co-tutor revenue-split percentages calculations on every sale',
                'Flexible customized subscription payment options (weekly, monthly, annual, custom term)',
                'Localized payment currencies and taxation calculations automations'
            ],
            'image' => 'https://images.unsplash.com/photo-1559526324-4b87b5e36e44?auto=format&fit=crop&w=800&q=80'
        ],
    ];

    if (!isset($features[$slug])) {
        abort(404);
    }

    return view('feature', ['feature' => $features[$slug]]);
});

Route::get('/pricing', function () {
    return view('pricing');
});
