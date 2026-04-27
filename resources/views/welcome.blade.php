<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LMS Pro | The Operating System for Modern Education</title>
    @vite(['resources/css/style.css', 'resources/js/script.js'])
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<body>

    <div class="floaty"
        style="top: 10%; right: 5%; background: radial-gradient(circle, rgba(99, 102, 241, 0.2) 0%, transparent 70%);">
    </div>
    <div class="floaty"
        style="bottom: 20%; left: 5%; background: radial-gradient(circle, rgba(0, 122, 255, 0.2) 0%, transparent 70%);">
    </div>

    <header id="header">
        <nav>
            <a href="#" class="logo">
                <i class="fas fa-cube" style="color: var(--primary);"></i> LMS PRO
            </a>

            <input type="checkbox" id="menu-toggle" style="display: none;">
            <label for="menu-toggle" class="menu-btn">
                <i class="fas fa-bars"></i>
            </label>

            <ul class="nav-links">
                <li><a href="https://task19.com" target="_blank">Task19</a></li>
                <li><a href="#features">Features</a></li>
                <li><a href="#modules">Modules</a></li>
                <li><a href="#courses">Catalog</a></li>
            </ul>
            <div class="auth">
                <a href="#" class="btn btn-glass header-btn">Log In</a>
                <a href="#" class="btn btn-primary header-btn">Join Now</a>
            </div>
        </nav>
    </header>



    <!-- Hero -->
    <section class="hero container">
        <div data-premium-reveal>
            <h1 class="gradient-text">Premium Education,<br> Powered by SaaS.</h1>
            <p>The world's first truly integrated LMS for live batches, multi-tutor sessions, and seamless financial
                management. Built for elite academies.</p>
            <div class="flex" style="justify-content: center; gap: 1.5rem;">
                <a href="#" class="btn btn-primary">Start Building Now</a>
                <a href="#" class="btn btn-glass" id="watch-demo-btn">Watch Demo</a>
            </div>
        </div>
    </section>

    <!-- Interactive Modules Selection -->
    <section class="container" id="modules" style="padding: 100px 0;">
        <div style="text-align: center; margin-bottom: 4rem;" data-premium-reveal>
            <h2 style="font-size: 3rem; margin-bottom: 1rem;">Designed for Every Role.</h2>
            <p style="color: var(--text-muted);">One platform, three tailored digital worlds.</p>
        </div>

        <div class="module-tabs" data-premium-reveal>
            <div class="module-tab active" data-target="admin">Admin</div>
            <div class="module-tab" data-target="tutor">Tutor</div>
            <div class="module-tab" data-target="student">Student</div>
        </div>

        <div class="module-display" data-premium-reveal>
            <div class="module-content active" id="admin">
                <h2 style="font-size: 2.5rem; margin-bottom: 1.5rem;">Academy Control</h2>
                <ul style="list-style: none; margin-bottom: 2rem;">
                    <li style="margin-bottom: 1rem;"><i class="fas fa-check-circle" style="color: var(--primary);"></i>
                        Global Fee & Split Payment Processing</li>
                    <li style="margin-bottom: 1rem;"><i class="fas fa-check-circle" style="color: var(--primary);"></i>
                        Orchestrate Multi-Tutor Assignments</li>
                    <li style="margin-bottom: 1rem;"><i class="fas fa-check-circle" style="color: var(--primary);"></i>
                        Advanced Coupon & Campaign Management</li>
                </ul>
                <a href="#" class="btn btn-primary">Open Admin Console</a>
            </div>
            <div class="module-content" id="tutor">
                <h2 style="font-size: 2.5rem; margin-bottom: 1.5rem;">Teaching Excellence</h2>
                <ul style="list-style: none; margin-bottom: 2rem;">
                    <li style="margin-bottom: 1rem;"><i class="fas fa-check-circle"
                            style="color: var(--secondary);"></i> Real-time Live Class Sync</li>
                    <li style="margin-bottom: 1rem;"><i class="fas fa-check-circle"
                            style="color: var(--secondary);"></i> Automated Attendance Tracking</li>
                    <li style="margin-bottom: 1rem;"><i class="fas fa-check-circle"
                            style="color: var(--secondary);"></i> Content & PDF Asset Management</li>
                </ul>
                <a href="#" class="btn btn-primary" style="background: var(--secondary);">Open Tutor Dashboard</a>
            </div>
            <div class="module-content" id="student">
                <h2 style="font-size: 2.5rem; margin-bottom: 1.5rem;">Learning Reimagined</h2>
                <ul style="list-style: none; margin-bottom: 2rem;">
                    <li style="margin-bottom: 1rem;"><i class="fas fa-check-circle"
                            style="color: var(--accent-green);"></i> High-Def Live & Recorded Content</li>
                    <li style="margin-bottom: 1rem;"><i class="fas fa-check-circle"
                            style="color: var(--accent-green);"></i> Verified LinkedIn Certificate Sync</li>
                    <li style="margin-bottom: 1rem;"><i class="fas fa-check-circle"
                            style="color: var(--accent-green);"></i> Personal Portfolio & Growth Path</li>
                </ul>
                <a href="#" class="btn btn-primary" style="background: var(--accent-green);">Enter Student Hub</a>
            </div>

            <div class="module-visual">
                <div class="visual-bg"
                    style="position: absolute; width: 100%; height: 100%; background: var(--primary); opacity: 0.1; filter: blur(60px); border-radius: 50%;">
                </div>
                <img src="{{ asset('assets/admin_mockup.png') }}"
                    id="module-img" alt="Module Interface"
                    style="width: 100%; border-radius: 20px; box-shadow: 0 20px 50px rgba(0,0,0,0.5); transition: 0.5s ease; position: relative; z-index: 2;">
            </div>
        </div>

    </section>


    <!-- Interactive Bento Features -->
    <section class="container" id="features" style="padding: 100px 0;">
        <div style="text-align: center; margin-bottom: 5rem;" data-premium-reveal>
            <h2 style="font-size: 3rem; margin-bottom: 1rem;">Feature Powerhouse.</h2>
            <p style="color: var(--text-muted);">Unrivaled features organized for maximum efficiency.</p>
        </div>

        <div class="bento-features">
            <div class="bento-card bento-wide" data-premium-reveal>
                <div class="card-glow"></div>
                <div class="icon-box" style="background: var(--primary);"><i class="fas fa-video"></i></div>
                <h3>Live Session Engine</h3>
                <p>Industry-leading real-time integration with ultra-low latency. Built for thousands of concurrent
                    sessions.</p>
            </div>
            <div class="bento-card" data-premium-reveal>
                <div class="card-glow"></div>
                <div class="icon-box" style="background: var(--accent-green);"><i class="fas fa-user-clock"></i></div>
                <h3>Smart Attendance</h3>
                <p>Automated verification for every attendee.</p>
            </div>
            <div class="bento-card bento-tall" data-premium-reveal
                style="display: flex; flex-direction: column; justify-content: space-between;">
                <div class="card-glow"></div>
                <div>
                    <div class="icon-box" style="background: #EC4899;"><i class="fas fa-users-viewfinder"></i></div>
                    <h3>Multi-Tutor Batches</h3>
                    <p>One batch, infinite experts. Scale your teaching power by assigning multiple tutors to a single
                        student group.</p>
                </div>
                <div
                    style="background: var(--glass); padding: 1rem; border-radius: 12px; font-size: 0.8rem; border: 1px solid var(--glass-border);">
                    Collaborative Mode: ON
                </div>
            </div>
            <div class="bento-card" data-premium-reveal>
                <div class="card-glow"></div>
                <div class="icon-box" style="background: var(--secondary);"><i class="fas fa-film"></i></div>
                <h3>Auto-Record</h3>
                <p>Archived instantly after session.</p>
            </div>
            <div class="bento-card bento-wide" data-premium-reveal>
                <div class="card-glow"></div>
                <div class="icon-box" style="background: #0077B5;"><i class="fab fa-linkedin"></i></div>
                <h3>LinkedIn Certificate Sync</h3>
                <p>Empower your students to showcase their verified achievements with one-click LinkedIn integration.
                </p>
            </div>
            <div class="bento-card" data-premium-reveal>
                <div class="card-glow"></div>
                <div class="icon-box" style="background: #F59E0B;"><i class="fas fa-wallet"></i></div>
                <h3>Fee Hub</h3>
                <p>Split fees, coupons, & international flows.</p>
            </div>
            <div class="bento-card" data-premium-reveal>
                <div class="card-glow"></div>
                <div class="icon-box" style="background: #3B82F6;"><i class="fas fa-file-pdf"></i></div>
                <h3>Asset Vault</h3>
                <p>PDF & multimedia management.</p>
            </div>
            <div class="bento-card" data-premium-reveal>
                <div class="card-glow"></div>
                <div class="icon-box" style="background: #10B981;"><i class="fas fa-play-circle"></i></div>
                <h3>LMS Hybrid</h3>
                <p>Live + Pre-recorded in one UI.</p>
            </div>
        </div>
    </section>

    <!-- Scrolling Gallery -->
    <section class="gallery-section">
        <div style="text-align: center; margin-bottom: 3rem;" data-premium-reveal>
            <h2 style="font-size: 2.5rem;">Visualizing Success</h2>
            <p style="color: var(--text-muted);">Empowering learners around the globe.</p>
        </div>
        <div class="gallery-container">
            <div class="gallery-track">
                <div class="gallery-item"><img src="{{ asset('assets/gallery_1.png') }}" alt="Education 1"></div>
                <div class="gallery-item"><img src="{{ asset('assets/gallery_2.png') }}" alt="Education 2"></div>
                <div class="gallery-item"><img src="{{ asset('assets/gallery_3.png') }}" alt="Education 3"></div>
                <div class="gallery-item"><img src="{{ asset('assets/gallery_4.png') }}" alt="Education 4"></div>
                <div class="gallery-item"><img src="{{ asset('assets/gallery_5.png') }}" alt="Education 5"></div>
                <!-- Duplicate for loop -->
                <div class="gallery-item"><img src="{{ asset('assets/gallery_1.png') }}" alt="Education 1"></div>
                <div class="gallery-item"><img src="{{ asset('assets/gallery_2.png') }}" alt="Education 2"></div>
                <div class="gallery-item"><img src="{{ asset('assets/gallery_3.png') }}" alt="Education 3"></div>
                <div class="gallery-item"><img src="{{ asset('assets/gallery_4.png') }}" alt="Education 4"></div>
                <div class="gallery-item"><img src="{{ asset('assets/gallery_5.png') }}" alt="Education 5"></div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer style="margin-top: 100px;">
        <div class="container footer-grid">
            <div class="footer-brand">
                <a href="#" class="logo" style="margin-bottom: 1.5rem;">
                    <i class="fas fa-cube" style="color: var(--primary);"></i> LMS PRO
                </a>
                <p>The premium operating system for modern education. Scale your academy with unrivaled elegance.</p>
                <div class="social-links">
                    <a href="#" class="social-icon"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="social-icon"><i class="fab fa-linkedin-in"></i></a>
                    <a href="#" class="social-icon"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
            <div class="footer-links">
                <h4>Platform</h4>
                <ul>
                    <li><a href="#features">Features</a></li>
                    <li><a href="#modules">Modules</a></li>
                    <li><a href="#">Solutions</a></li>
                    <li><a href="#">Pricing</a></li>
                </ul>
            </div>
            <div class="footer-links">
                <h4>Company</h4>
                <ul>
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Careers</a></li>
                    <li><a href="#">Security</a></li>
                    <li><a href="#">Terms</a></li>
                </ul>
            </div>
            <div class="newsletter">
                <h4>Stay in the loop</h4>
                <p style="color: var(--text-muted); font-size: 0.9rem; margin-bottom: 1.5rem;">The latest SaaS & EduTech
                    trends, delivered weekly.</p>
                <form class="newsletter-form">
                    <input type="email" placeholder="Email@domain.com">
                    <button type="submit">Join</button>
                </form>
            </div>
        </div>
        <div class="container">
            <div class="copyright">
                &copy; {{ date('Y') }} LMS Pro SaaS | Powered by <a href="#"
                    style="color: var(--primary); text-decoration: none;">Task19</a>. All rights reserved.
            </div>
        </div>

    </footer>


    <!-- Watch Demo Modal -->
    <div id="demo-modal" class="modal-overlay">
        <div class="demo-modal">
            <button class="close-modal">&times;</button>
            
            <div id="demo-step-1">
                <h2 style="margin-bottom: 1rem;">Experience the Future.</h2>
                <p style="color: var(--text-muted); margin-bottom: 2.5rem;">Enter your details to unlock the interactive demo.</p>
                <form id="demo-info-form" class="premium-form">
                    <div class="form-row">
                        <div class="form-group">
                            <input type="text" id="inst-name" required placeholder="Institute Name">
                        </div>
                        <div class="form-group">
                            <input type="text" id="inst-location" required placeholder="Location">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group">
                            <input type="tel" id="inst-phone" required placeholder="Phone Number">
                        </div>
                        <div class="form-group">
                            <input type="email" id="inst-email" required placeholder="Email Address">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary" style="width: 100%; margin-top: 1.5rem; justify-content: center;">Continue to Selection <i class="fas fa-arrow-right"></i></button>
                </form>
            </div>

            <div id="demo-step-2" style="display: none;">
                <h2 style="margin-bottom: 2rem;">Choose your experience</h2>
                <div class="role-grid">
                    <div class="role-btn" data-role="admin">
                        <div class="role-icon" style="background: var(--primary);"><i class="fas fa-shield-halved"></i></div>
                        <h3>Admin</h3>
                        <p>Manage academy, fees & tutors</p>
                    </div>
                    <div class="role-btn" data-role="tutor">
                        <div class="role-icon" style="background: var(--secondary);"><i class="fas fa-chalkboard-user"></i></div>
                        <h3>Tutor</h3>
                        <p>Deliver classes & track progress</p>
                    </div>
                    <div class="role-btn" data-role="student">
                        <div class="role-icon" style="background: var(--accent-green);"><i class="fas fa-user-graduate"></i></div>
                        <h3>Student</h3>
                        <p>Access courses & certificates</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>
