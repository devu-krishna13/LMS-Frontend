<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $feature['title'] }} | LMS Pro Feature</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        .feature-hero {
            padding: 140px 0 60px;
            background: #F8FAFC;
            border-bottom: 1px solid #E2E8F0;
        }

        .back-link {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            color: var(--primary);
            text-decoration: none;
            font-weight: 600;
            font-size: 0.95rem;
            margin-bottom: 2rem;
            transition: var(--transition);
        }

        .back-link:hover {
            transform: translateX(-5px);
        }

        .feature-grid {
            display: grid;
            grid-template-columns: 1.2fr 1fr;
            gap: 4rem;
            align-items: center;
            margin-top: 2rem;
        }

        .feature-badge {
            background: rgba(59, 130, 246, 0.1);
            color: var(--primary);
            padding: 0.5rem 1rem;
            border-radius: 100px;
            font-size: 0.85rem;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 0.05em;
            display: inline-block;
            margin-bottom: 1rem;
        }

        .feature-title {
            font-size: 3.5rem;
            font-weight: 800;
            color: #0F172A;
            line-height: 1.1;
            margin-bottom: 1.5rem;
        }

        .feature-desc {
            font-size: 1.2rem;
            color: var(--text-muted);
            line-height: 1.6;
            margin-bottom: 2rem;
        }

        .feature-image-container img {
            width: 100%;
            border-radius: 24px;
            border: 1px solid #E2E8F0;
            box-shadow: 0 20px 40px rgba(0,0,0,0.05);
        }

        .details-section {
            padding: 80px 0;
            background: #FFFFFF;
        }

        .highlights-list {
            list-style: none;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 2rem;
            margin-top: 3rem;
        }

        .highlight-item {
            display: flex;
            gap: 1rem;
            align-items: flex-start;
        }

        .highlight-icon {
            width: 36px;
            height: 36px;
            border-radius: 50%;
            background: rgba(59, 130, 246, 0.1);
            color: var(--primary);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 0.95rem;
            flex-shrink: 0;
        }

        .highlight-content h4 {
            font-size: 1.1rem;
            color: #0F172A;
            font-weight: 700;
            margin-bottom: 0.4rem;
        }

        .highlight-content p {
            font-size: 0.95rem;
            color: var(--text-muted);
            line-height: 1.5;
        }

        .cta-box {
            background: #F8FAFC;
            border: 1px solid #E2E8F0;
            border-radius: 24px;
            padding: 3.5rem;
            text-align: center;
            margin-top: 5rem;
        }

        .cta-box h3 {
            font-size: 2rem;
            color: #0F172A;
            font-weight: 800;
            margin-bottom: 1rem;
        }

        @media (max-width: 968px) {
            .feature-grid {
                grid-template-columns: 1fr;
                gap: 2.5rem;
            }

            .feature-title {
                font-size: 2.5rem;
            }

            .highlights-list {
                grid-template-columns: 1fr;
                gap: 1.5rem;
            }
        }
    </style>
</head>

<body>

    <header id="header" style="background: #FFFFFF; border-bottom: 1px solid #E2E8F0;">
        <nav>
            <a href="{{ url('/') }}" class="logo">
                <i class="fas fa-cube" style="color: var(--primary);"></i> LMS PRO
            </a>
            <ul class="nav-links">
                <li><a href="{{ url('/') }}" style="color: #475569;">Home</a></li>
                <li><a href="{{ url('/#features') }}" style="color: #475569;">Features</a></li>
                <li><a href="{{ url('/#modules') }}" style="color: #475569;">Modules</a></li>
                <li><a href="{{ url('pricing') }}" style="color: #475569;">Pricing</a></li>
            </ul>
            <div class="auth">
                <a href="/" class="btn btn-primary header-btn">Back to main</a>
            </div>
        </nav>
    </header>

    <section class="feature-hero">
        <div class="container">
            <a href="/#features" class="back-link">
                <i class="fas fa-arrow-left"></i> Back to Features
            </a>
            <div class="feature-grid">
                <div>
                    <span class="feature-badge">LMS Module Spotlight</span>
                    <h1 class="feature-title">{{ $feature['title'] }}</h1>
                    <p class="feature-desc">{{ $feature['desc'] }}</p>
                    <a href="/#features" class="btn btn-primary">Request Custom Demo</a>
                </div>
                <div class="feature-image-container">
                    <img src="{{ $feature['image'] }}" alt="{{ $feature['title'] }}">
                </div>
            </div>
        </div>
    </section>

    <section class="details-section">
        <div class="container">
            <h2 style="font-size: 2.2rem; color: #0F172A; font-weight: 800; text-align: center;">Key Benefits</h2>
            <p style="color: var(--text-muted); text-align: center; max-width: 600px; margin: 0.5rem auto 0;">See how this feature can help your academy run smoother.</p>

            <ul class="highlights-list">
                @foreach($feature['highlights'] as $index => $highlight)
                    <li class="highlight-item">
                        <div class="highlight-icon">
                            <i class="fas fa-check"></i>
                        </div>
                        <div class="highlight-content">
                            <h4>Highlight #{{ $index + 1 }}</h4>
                            <p>{{ $highlight }}</p>
                        </div>
                    </li>
                @endforeach
            </ul>

            <div class="cta-box">
                <h3>Ready to experience it live?</h3>
                <p style="color: var(--text-muted); margin-bottom: 2rem; max-width: 500px; margin-left: auto; margin-right: auto;">Get full access to admin, teacher, and student dashboards in minutes.</p>
                <a href="/#features" class="btn btn-primary" style="display: inline-flex;">Try Interactive Demo <i class="fas fa-arrow-right" style="margin-left: 0.5rem;"></i></a>
            </div>
        </div>
    </section>

    <footer style="border-top: 1px solid #E2E8F0; background: #FFFFFF; padding: 60px 0 40px; text-align: center;">
        <div class="container">
            <a href="/" class="logo" style="display: inline-flex; align-items: center; justify-content: center; gap: 0.5rem; font-size: 1.3rem; margin-bottom: 1.5rem; text-decoration: none; color: #0F172A;">
                <i class="fas fa-cube" style="color: var(--primary);"></i> LMS PRO
            </a>
            <p style="color: var(--text-muted); font-size: 0.9rem; max-width: 400px; margin: 0 auto 2rem;">The complete platform for training centers and academies.</p>
            <div class="copyright" style="border-top: 1px solid #F1F5F9; padding-top: 20px; font-size: 0.85rem; color: var(--text-muted);">
                &copy; {{ date('Y') }} LMS Pro SaaS | Powered by <a href="#" style="color: var(--primary); text-decoration: none;">Task19</a>. All rights reserved.
            </div>
        </div>
    </footer>

</body>

</html>
