<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>LMS Pro | Clean Institutional Learning Management System</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}?v={{ time() }}">
    <script src="{{ asset('js/script.js') }}?v={{ time() }}" defer></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<body>

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
                <li class="dropdown">
                    <a href="#features">Features <i class="fas fa-chevron-down" style="font-size: 0.75rem; margin-left: 0.2rem; vertical-align: middle;"></i></a>
                    <div class="dropdown-content">
                        <a href="{{ url('feature/course-builder') }}">Course Builder</a>
                        <a href="{{ url('feature/quiz-builder') }}">Quiz Builder</a>
                        <a href="{{ url('feature/live-classes') }}">Live Classes</a>
                        <a href="{{ url('feature/course-bundle') }}">Course Bundle</a>
                        <a href="{{ url('feature/smart-attendance') }}">Smart Attendance</a>
                        <a href="{{ url('feature/fee-hub') }}">Fee Hub</a>
                    </div>
                </li>
                <li><a href="#modules">Modules</a></li>
                <li><a href="#courses">Catalog</a></li>
                <li><a href="{{ url('pricing') }}">Pricing</a></li>
            </ul>
            <div class="auth">
                <a href="#" class="btn btn-primary header-btn">Join Now</a>
            </div>
        </nav>
    </header>

    <!-- Hero -->
    <section class="hero container">
        <div data-premium-reveal>

            <h1 class="gradient-text">Everything your academy needs,<br> in one simple platform.</h1>
            <p>Run your classes, manage your teachers, and collect payments without the headache. Built to make online teaching feel natural and effortless.</p>
            <div class="flex" style="justify-content: center; gap: 1.5rem;">
                <a href="#" class="btn btn-primary">Start Building Now</a>
                <a href="#" class="btn btn-glass" id="watch-demo-btn">Watch Demo</a>
            </div>
        </div>

        <!-- Real LMS Dashboard Screen Showcase -->
        <div class="hero-mockup" data-premium-reveal>
            <img src="{{ asset('assets/Demo/demo11.png') }}" alt="LMS Real Platform Dashboard Screen">
        </div>
    </section>

    <!-- Interactive Modules Selection -->
    <section class="container" id="modules" style="padding: 100px 0;">
        <div style="text-align: center; margin-bottom: 4rem;" data-premium-reveal>
            <h2 style="font-size: 3rem; margin-bottom: 1rem; color: #0F172A; font-weight: 800;">Built for everyone involved.</h2>
            <p style="color: var(--text-muted); font-size: 1.1rem;">Clear and simple dashboards for admins, teachers, and students.</p>
        </div>

        <div class="module-tabs" data-premium-reveal>
            <div class="module-tab active" data-target="admin" data-image="{{ asset('assets/Demo/demo1.png') }}">Admin</div>
            <div class="module-tab" data-target="tutor" data-image="{{ asset('assets/Demo/demo6.png') }}">Tutor</div>
            <div class="module-tab" data-target="student" data-image="{{ asset('assets/Demo/demo11.png') }}">Student</div>
        </div>

        <div class="module-display" data-premium-reveal>
            <div class="module-content active" id="admin">
                <h2 style="font-size: 2.5rem; margin-bottom: 1.5rem; font-weight: 800; color: #0F172A;">Academy Control</h2>
                <ul style="list-style: none; margin-bottom: 2rem;">
                    <li style="margin-bottom: 1rem; color: #334155; font-weight: 500;"><i class="fas fa-check-circle" style="color: var(--primary); margin-right: 0.5rem;"></i>
                        Global Fee & Split Payment Processing</li>
                    <li style="margin-bottom: 1rem; color: #334155; font-weight: 500;"><i class="fas fa-check-circle" style="color: var(--primary); margin-right: 0.5rem;"></i>
                        Orchestrate Multi-Tutor Assignments</li>
                    <li style="margin-bottom: 1rem; color: #334155; font-weight: 500;"><i class="fas fa-check-circle" style="color: var(--primary); margin-right: 0.5rem;"></i>
                        Advanced Coupon & Campaign Management</li>
                </ul>
                <a href="{{ url('demo/public/auto-login/admin') }}" target="_blank" class="btn btn-primary role-access-btn" data-role="admin">Open Admin Console</a>
            </div>
            <div class="module-content" id="tutor">
                <h2 style="font-size: 2.5rem; margin-bottom: 1.5rem; font-weight: 800; color: #0F172A;">Teaching Excellence</h2>
                <ul style="list-style: none; margin-bottom: 2rem;">
                    <li style="margin-bottom: 1rem; color: #334155; font-weight: 500;"><i class="fas fa-check-circle"
                            style="color: var(--secondary); margin-right: 0.5rem;"></i> Real-time Live Class Sync</li>
                    <li style="margin-bottom: 1rem; color: #334155; font-weight: 500;"><i class="fas fa-check-circle"
                            style="color: var(--secondary); margin-right: 0.5rem;"></i> Automated Attendance Tracking</li>
                    <li style="margin-bottom: 1rem; color: #334155; font-weight: 500;"><i class="fas fa-check-circle"
                            style="color: var(--secondary); margin-right: 0.5rem;"></i> Content & PDF Asset Management</li>
                </ul>
                <a href="{{ url('demo/public/auto-login/tutor') }}" target="_blank" class="btn btn-primary role-access-btn" data-role="tutor" style="background: var(--secondary);">Open Tutor Dashboard</a>
            </div>
            <div class="module-content" id="student">
                <h2 style="font-size: 2.5rem; margin-bottom: 1.5rem; font-weight: 800; color: #0F172A;">Learning Reimagined</h2>
                <ul style="list-style: none; margin-bottom: 2rem;">
                    <li style="margin-bottom: 1rem; color: #334155; font-weight: 500;"><i class="fas fa-check-circle"
                            style="color: var(--accent-green); margin-right: 0.5rem;"></i> High-Def Live & Recorded Content</li>
                    <li style="margin-bottom: 1rem; color: #334155; font-weight: 500;"><i class="fas fa-check-circle"
                            style="color: var(--accent-green); margin-right: 0.5rem;"></i> Verified LinkedIn Certificate Sync</li>
                    <li style="margin-bottom: 1rem; color: #334155; font-weight: 500;"><i class="fas fa-check-circle"
                            style="color: var(--accent-green); margin-right: 0.5rem;"></i> Personal Portfolio & Growth Path</li>
                </ul>
                <a href="{{ url('demo/public/auto-login/student') }}" target="_blank" class="btn btn-primary role-access-btn" data-role="student" style="background: var(--accent-green);">Enter Student Hub</a>
            </div>

            <div class="module-visual">
                <div class="visual-bg"
                    style="position: absolute; width: 100%; height: 100%; background: var(--primary); opacity: 0.05; filter: blur(60px); border-radius: 50%;">
                </div>
                <img src="{{ asset('assets/Demo/demo1.png') }}" id="module-img" alt="Module Interface"
                    style="width: 100%; border-radius: 20px; box-shadow: 0 15px 40px rgba(0,0,0,0.06); transition: 0.5s ease; position: relative; z-index: 2;">
            </div>
        </div>

    </section>


    <!-- Why Settle For Less - Alternate Layout Features Showcase -->
    <section class="robust-section" id="why-settle">
        <div class="container">
            <div style="text-align: center; margin-bottom: 5rem;" data-premium-reveal>
                <span class="robust-tag">A complete platform for academies</span>
                <h2 style="font-size: 3rem; margin-bottom: 1.5rem; color: #0F172A; font-weight: 800; line-height: 1.15;">Upgrade your teaching experience</h2>
                <p style="color: var(--text-muted); font-size: 1.15rem; max-width: 700px; margin: 0 auto;">Create engaging courses, run tests, and track attendance automatically. Focus on teaching while we handle the heavy lifting.</p>
            </div>

            <!-- Row 1: Course Builder -->
            <div class="robust-row" data-premium-reveal>
                <div class="robust-text">
                    <span class="robust-tag" style="color: var(--primary);">Create Courses</span>
                    <h3>Easy-to-use course builder</h3>
                    <p>Build your courses simply by dragging and dropping. Add videos, PDFs, and text lessons in minutes, and keep your students on track without any technical hassle.</p>
                    <a href="/feature/course-builder" class="btn btn-primary" style="padding: 0.6rem 1.4rem; font-size: 0.9rem;">Explore Course Builder <i class="fas fa-arrow-right"></i></a>
                </div>
                <div class="robust-visual-wrapper">
                    <div class="simulated-card">
                        <div class="card-header">
                            <h4>Course Curriculum Builder</h4>
                            <span style="font-size: 0.75rem; background: rgba(59, 130, 246, 0.1); color: var(--primary); padding: 0.15rem 0.4rem; border-radius: 4px; font-weight: 700;">Drag & Drop</span>
                        </div>
                        <div class="card-body">
                            <div class="builder-item"><i class="fas fa-circle-play" style="color: var(--primary);"></i> 1. Introduction to Web Systems <span style="margin-left: auto; color: var(--text-muted); font-size: 0.75rem;">12:00</span></div>
                            <div class="builder-item"><i class="fas fa-file-invoice" style="color: var(--accent-green);"></i> 2. CSS Grid & Flexbox Masterclass <span style="margin-left: auto; color: var(--text-muted); font-size: 0.75rem;">PDF Doc</span></div>
                            <div class="builder-item"><i class="fas fa-circle-question" style="color: #EC4899;"></i> Quiz 1: Layout Fundamentals <span style="margin-left: auto; color: var(--text-muted); font-size: 0.75rem;">10 Qs</span></div>
                            <div class="builder-item" style="opacity: 0.6;"><i class="fas fa-circle-play" style="color: var(--primary);"></i> 3. Advanced Responsive Tricks <span style="margin-left: auto; color: var(--text-muted); font-size: 0.75rem;">Locked</span></div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Row 2: Sell Online -->
            <div class="robust-row reverse" data-premium-reveal>
                <div class="robust-text">
                    <span class="robust-tag" style="color: var(--secondary);">Sell Online</span>
                    <h3>Get paid without the stress</h3>
                    <p>Collect fees, offer discount codes, and automatically split revenue with your co-teachers. We handle all the math and invoicing so you can focus on growing your business.</p>
                    <a href="/feature/fee-hub" class="btn btn-primary" style="background: var(--secondary); padding: 0.6rem 1.4rem; font-size: 0.9rem;">Explore Fee Hub <i class="fas fa-arrow-right"></i></a>
                </div>
                <div class="robust-visual-wrapper">
                    <div class="simulated-card">
                        <div class="card-header">
                            <h4>Monetization & Revenue Splits</h4>
                            <span style="font-size: 0.75rem; background: rgba(79, 70, 229, 0.1); color: var(--secondary); padding: 0.15rem 0.4rem; border-radius: 4px; font-weight: 700;">Secure Payouts</span>
                        </div>
                        <div class="card-body">
                            <div class="fee-chart">
                                <div class="fee-bar-wrapper">
                                    <div class="fee-bar-labels">
                                        <span>Academy Share (60%)</span>
                                        <span>$7,470.00</span>
                                    </div>
                                    <div class="fee-bar-outer">
                                        <div class="fee-bar-inner" style="width: 60%; background: var(--primary);"></div>
                                    </div>
                                </div>
                                <div class="fee-bar-wrapper">
                                    <div class="fee-bar-labels">
                                        <span>Lead Trainer Share (30%)</span>
                                        <span>$3,735.00</span>
                                    </div>
                                    <div class="fee-bar-outer">
                                        <div class="fee-bar-inner" style="width: 30%; background: var(--secondary);"></div>
                                    </div>
                                </div>
                                <div class="fee-bar-wrapper">
                                    <div class="fee-bar-labels">
                                        <span>Co-tutor Share (10%)</span>
                                        <span>$1,245.00</span>
                                    </div>
                                    <div class="fee-bar-outer">
                                        <div class="fee-bar-inner" style="width: 10%; background: var(--accent-green);"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Row 3: Manage Courses -->
            <div class="robust-row" data-premium-reveal>
                <div class="robust-text">
                    <span class="robust-tag" style="color: var(--accent-green);">Manage Batches</span>
                    <h3>See how your students are doing</h3>
                    <p>Get a clear picture of your students' progress. See who's watching your videos, how they score on quizzes, and step in to help those who might be falling behind.</p>
                    <a href="/feature/live-classes" class="btn btn-primary" style="background: var(--accent-green); padding: 0.6rem 1.4rem; font-size: 0.9rem;">Explore Live Engine <i class="fas fa-arrow-right"></i></a>
                </div>
                <div class="robust-visual-wrapper">
                    <div class="simulated-card">
                        <div class="card-header">
                            <h4>Real-Time Performance Dashboard</h4>
                            <span style="font-size: 0.75rem; background: rgba(16, 185, 129, 0.1); color: var(--accent-green); padding: 0.15rem 0.4rem; border-radius: 4px; font-weight: 700;">Live Feed</span>
                        </div>
                        <div class="card-body">
                            <div class="analytics-grid">
                                <div class="analytic-box">
                                    <span>Active Learners</span>
                                    <strong>1,420</strong>
                                </div>
                                <div class="analytic-box">
                                    <span>Completion Rate</span>
                                    <strong>94.2%</strong>
                                </div>
                                <div class="analytic-box">
                                    <span>Avg Quiz Score</span>
                                    <strong>88%</strong>
                                </div>
                                <div class="analytic-box">
                                    <span>Live Batches</span>
                                    <strong>32</strong>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Row 4: Smart Attendance -->
            <div class="robust-row reverse" data-premium-reveal>
                <div class="robust-text">
                    <span class="robust-tag" style="color: #EC4899;">Smart Tracker</span>
                    <h3>Never take roll call again</h3>
                    <p>We automatically track who shows up to your live classes and how long they stay. Download simple attendance sheets whenever you need them.</p>
                    <a href="/feature/smart-attendance" class="btn btn-primary" style="background: #EC4899; padding: 0.6rem 1.4rem; font-size: 0.9rem;">Explore Smart Attendance <i class="fas fa-arrow-right"></i></a>
                </div>
                <div class="robust-visual-wrapper">
                    <div class="simulated-card">
                        <div class="card-header">
                            <h4>Live Session Attendance Sheet</h4>
                            <span style="font-size: 0.75rem; background: rgba(236, 72, 153, 0.1); color: #EC4899; padding: 0.15rem 0.4rem; border-radius: 4px; font-weight: 700;">Auto-sync</span>
                        </div>
                        <div class="card-body">
                            <div class="attendance-list">
                                <div class="attendance-row">
                                    <div class="student-info">
                                        <div class="student-avatar" style="background: rgba(59, 130, 246, 0.1); color: var(--primary);">AR</div>
                                        <span>Alex Rivers</span>
                                    </div>
                                    <span class="status-badge" style="background: rgba(16, 185, 129, 0.1); color: var(--accent-green);">100% Active</span>
                                </div>
                                <div class="attendance-row">
                                    <div class="student-info">
                                        <div class="student-avatar" style="background: rgba(16, 185, 129, 0.1); color: var(--accent-green);">SJ</div>
                                        <span>Sarah Jenkins</span>
                                    </div>
                                    <span class="status-badge" style="background: rgba(16, 185, 129, 0.1); color: var(--accent-green);">94% Active</span>
                                </div>
                                <div class="attendance-row">
                                    <div class="student-info">
                                        <div class="student-avatar" style="background: rgba(245, 158, 11, 0.1); color: #F59E0B);">MK</div>
                                        <span>Michael K.</span>
                                    </div>
                                    <span class="status-badge" style="background: rgba(245, 158, 11, 0.1); color: #F59E0B;">88% Active</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>


    <!-- Interactive Bento Features -->
    <section class="container" id="features" style="padding: 100px 0; background: #FFFFFF; border-radius: 32px; box-shadow: 0 10px 40px rgba(0,0,0,0.02); margin: 60px auto; border: 1px solid #E2E8F0;">
        <div style="text-align: center; margin-bottom: 5rem;" data-premium-reveal>
            <span style="color: var(--primary); font-weight: 700; text-transform: uppercase; font-size: 0.85rem; letter-spacing: 0.1em; display: block; margin-bottom: 0.5rem;">Everything you need</span>
            <h2 style="font-size: 3rem; margin-bottom: 1rem; color: #0F172A; font-weight: 800;">Tools that actually make sense.</h2>
            <p style="color: var(--text-muted); font-size: 1.1rem; max-width: 600px; margin: 0 auto;">No complicated menus or confusing setups. Just the features you need to teach effectively.</p>
        </div>

        <div class="bento-features">
            <!-- Card 1: Course Builder (Wide) -->
            <div class="bento-card bento-wide grid-layout" data-premium-reveal>
                <div class="card-glow"></div>
                <div>
                    <div class="icon-box" style="background: rgba(59, 130, 246, 0.1); color: var(--primary);"><i class="fas fa-tools"></i></div>
                    <h3>Advanced Course Builder</h3>
                    <p>Drag-and-drop course creation. Build detailed curriculums, organize modular video and text lessons, and release interactive content with ease.</p>
                </div>
                <div class="bento-mini-mockup" style="background: #F8FAFC; border: 1px solid #E2E8F0; border-radius: 12px; padding: 0.8rem; font-size: 0.75rem; color: #475569; box-shadow: 0 4px 12px rgba(0,0,0,0.02);">
                    <div style="font-weight: 700; color: #0F172A; margin-bottom: 0.5rem; display: flex; align-items: center; justify-content: space-between;">
                        <span>Course Builder</span>
                        <span style="font-size: 0.65rem; background: rgba(59, 130, 246, 0.1); color: var(--primary); padding: 0.15rem 0.4rem; border-radius: 4px; font-weight: 700;">Drag & Drop</span>
                    </div>
                    <div style="background: #FFFFFF; border: 1px solid #E2E8F0; padding: 0.45rem; border-radius: 6px; margin-bottom: 0.35rem; display: flex; align-items: center; gap: 0.5rem; font-weight: 600; box-shadow: 0 2px 4px rgba(0,0,0,0.01);">
                        <i class="fas fa-grip-vertical" style="color: #94A3B8; cursor: grab;"></i>
                        <i class="fas fa-circle-play" style="color: var(--primary);"></i> 1. Introduction to Web Systems
                    </div>
                    <div style="background: #FFFFFF; border: 1px solid #E2E8F0; padding: 0.45rem; border-radius: 6px; display: flex; align-items: center; gap: 0.5rem; font-weight: 600; box-shadow: 0 2px 4px rgba(0,0,0,0.01);">
                        <i class="fas fa-grip-vertical" style="color: #94A3B8; cursor: grab;"></i>
                        <i class="fas fa-circle-question" style="color: var(--accent-green);"></i> Quiz 1: Layout Fundamentals
                    </div>
                </div>
            </div>

            <!-- Card 2: Quiz Builder -->
            <div class="bento-card" data-premium-reveal style="display: flex; flex-direction: column; justify-content: space-between;">
                <div class="card-glow"></div>
                <div>
                    <div class="icon-box" style="background: rgba(16, 185, 129, 0.1); color: var(--accent-green);"><i class="fas fa-lightbulb"></i></div>
                    <h3>Quiz Builder</h3>
                    <p>Build custom automated quizzes with diverse question formats, dynamic grading rubrics, and feedback limits.</p>
                </div>
                <div class="bento-mini-mockup" style="background: #F8FAFC; border: 1px solid #E2E8F0; border-radius: 12px; padding: 0.8rem; font-size: 0.75rem; color: #475569; margin-top: 1rem;">
                    <div style="font-weight: 700; color: #0F172A; margin-bottom: 0.4rem;">Question 1: What is CSS?</div>
                    <div style="background: #FFFFFF; border: 1px solid #E2E8F0; padding: 0.35rem 0.6rem; border-radius: 6px; margin-bottom: 0.25rem; display: flex; align-items: center; gap: 0.4rem; font-weight: 600;">
                        <div style="width: 8px; height: 8px; border-radius: 50%; border: 2px solid var(--primary); background: var(--primary);"></div> Cascading Style Sheets
                    </div>
                    <div style="background: #FFFFFF; border: 1px solid #E2E8F0; padding: 0.35rem 0.6rem; border-radius: 6px; display: flex; align-items: center; gap: 0.4rem; font-weight: 600; opacity: 0.7;">
                        <div style="width: 8px; height: 8px; border-radius: 50%; border: 2px solid #CBD5E1;"></div> Database engine
                    </div>
                </div>
            </div>

            <!-- Card 3: Multi-Tutor Batches (Tall) -->
            <div class="bento-card bento-tall" data-premium-reveal>
                <div class="card-glow"></div>
                <div>
                    <div class="icon-box" style="background: rgba(236, 72, 153, 0.1); color: #EC4899;"><i class="fas fa-users"></i></div>
                    <h3>Multi-Tutor Batches</h3>
                    <p>Assign multiple elite tutors to a single batch or group. Enable easy content collaboration and co-teaching control panels.</p>
                    
                    <div class="bento-mini-mockup" style="background: #F8FAFC; border: 1px solid #E2E8F0; border-radius: 12px; padding: 0.8rem; font-size: 0.75rem; color: #475569; margin-top: 1.25rem;">
                        <div style="font-weight: 700; color: #0F172A; margin-bottom: 0.5rem;">Assigned Instructors</div>
                        <div style="display: flex; align-items: center; gap: 0.5rem; margin-bottom: 0.4rem; background: #FFFFFF; border: 1px solid #E2E8F0; padding: 0.4rem; border-radius: 8px; box-shadow: 0 2px 4px rgba(0,0,0,0.01);">
                            <div style="width: 24px; height: 24px; border-radius: 50%; background: rgba(59, 130, 246, 0.1); display: flex; align-items: center; justify-content: center; font-weight: 700; font-size: 0.65rem; color: var(--primary);">AR</div>
                            <div>
                                <div style="font-weight: 700; color: #334155;">Alex Rivers</div>
                                <div style="font-size: 0.6rem; color: var(--text-muted);">Lead Instructor</div>
                            </div>
                        </div>
                        <div style="display: flex; align-items: center; gap: 0.5rem; background: #FFFFFF; border: 1px solid #E2E8F0; padding: 0.4rem; border-radius: 8px; box-shadow: 0 2px 4px rgba(0,0,0,0.01);">
                            <div style="width: 24px; height: 24px; border-radius: 50%; background: rgba(79, 70, 229, 0.1); display: flex; align-items: center; justify-content: center; font-weight: 700; font-size: 0.65rem; color: var(--secondary);">SJ</div>
                            <div>
                                <div style="font-weight: 700; color: #334155;">Sarah J.</div>
                                <div style="font-size: 0.6rem; color: var(--text-muted);">Co-Tutor</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div style="background: #F8FAFC; padding: 0.8rem; border-radius: 12px; font-size: 0.85rem; border: 1px solid #E2E8F0; color: #475569; font-weight: 600; text-align: center; margin-top: 1.25rem;">
                    Collaborative Mode: Active
                </div>
            </div>

            <!-- Card 4: Course Bundle -->
            <div class="bento-card" data-premium-reveal style="display: flex; flex-direction: column; justify-content: space-between;">
                <div class="card-glow"></div>
                <div>
                    <div class="icon-box" style="background: rgba(79, 70, 229, 0.1); color: var(--secondary);"><i class="fas fa-cubes"></i></div>
                    <h3>Course Bundle</h3>
                    <p>Increase purchase sizes by combining multiple training guides and modules into high-converting course bundles.</p>
                </div>
                <div class="bento-mini-mockup" style="background: #F8FAFC; border: 1px solid #E2E8F0; border-radius: 12px; padding: 0.8rem; font-size: 0.75rem; color: #475569; margin-top: 1rem; position: relative; height: 80px; overflow: hidden; display: flex; align-items: flex-end;">
                    <div style="background: var(--primary); color: white; padding: 0.4rem; border-radius: 8px; position: absolute; width: 80px; height: 60px; left: 10px; bottom: -15px; font-weight: 700; box-shadow: 0 4px 10px rgba(0,0,0,0.08); transform: rotate(-5deg);">Web Dev</div>
                    <div style="background: var(--secondary); color: white; padding: 0.4rem; border-radius: 8px; position: absolute; width: 80px; height: 60px; left: 65px; bottom: -10px; font-weight: 700; box-shadow: 0 4px 10px rgba(0,0,0,0.08); transform: rotate(5deg);">UI Design</div>
                    <div style="background: var(--accent-green); color: white; padding: 0.2rem 0.5rem; border-radius: 100px; position: absolute; right: 10px; top: 10px; font-size: 0.65rem; font-weight: 800;">30% SAVINGS</div>
                </div>
            </div>

            <!-- Card 5: Fee Hub & Split Payments (Wide) -->
            <div class="bento-card bento-wide grid-layout" data-premium-reveal>
                <div class="card-glow"></div>
                <div>
                    <div class="icon-box" style="background: rgba(59, 130, 246, 0.1); color: var(--primary);"><i class="fas fa-wallet"></i></div>
                    <h3>Fee Hub & Split Payments</h3>
                    <p>Automate student invoicing, split tutor percentages, launch coupon discount rules, and maintain reliable academy bookkeeping in one hub.</p>
                </div>
                <div class="bento-mini-mockup" style="background: #F8FAFC; border: 1px solid #E2E8F0; border-radius: 12px; padding: 0.8rem; font-size: 0.75rem; color: #475569; box-shadow: 0 4px 12px rgba(0,0,0,0.02);">
                    <div style="font-weight: 700; color: #0F172A; margin-bottom: 0.5rem; display: flex; justify-content: space-between;">
                        <span>Invoicing Engine</span>
                        <span style="color: var(--accent-green); font-weight: 800;">+$4,290.00</span>
                    </div>
                    <div style="background: #FFFFFF; border: 1px solid #E2E8F0; padding: 0.4rem 0.6rem; border-radius: 6px; margin-bottom: 0.3rem; display: flex; justify-content: space-between; font-weight: 600; box-shadow: 0 2px 4px rgba(0,0,0,0.01);">
                        <span>Bootcamp Split Paid</span>
                        <span style="color: #94A3B8; font-size: 0.65rem;">Stripe Sync</span>
                    </div>
                    <div style="background: #FFFFFF; border: 1px solid #E2E8F0; padding: 0.4rem 0.6rem; border-radius: 6px; display: flex; justify-content: space-between; font-weight: 600; box-shadow: 0 2px 4px rgba(0,0,0,0.01);">
                        <span>Active Coupon Codes</span>
                        <span style="color: var(--primary); font-size: 0.65rem;">"EDU20"</span>
                    </div>
                </div>
            </div>

            <!-- Card 6: LinkedIn Sync -->
            <div class="bento-card" data-premium-reveal style="display: flex; flex-direction: column; justify-content: space-between;">
                <div class="card-glow"></div>
                <div>
                    <div class="icon-box" style="background: rgba(245, 158, 11, 0.1); color: #F59E0B;"><i class="fab fa-linkedin"></i></div>
                    <h3>LinkedIn Sync</h3>
                    <p>Sync and post verified digital completion certificates directly to your student's professional LinkedIn profile with one click.</p>
                </div>
                <div class="bento-mini-mockup" style="background: #F8FAFC; border: 1px solid #E2E8F0; border-radius: 12px; padding: 0.8rem; font-size: 0.75rem; color: #475569; margin-top: 1rem; display: flex; align-items: center; justify-content: center; gap: 0.5rem; box-shadow: 0 4px 12px rgba(0,0,0,0.02);">
                    <div style="font-size: 1.6rem; color: #0077B5;"><i class="fab fa-linkedin"></i></div>
                    <div>
                        <div style="font-weight: 700; color: #0F172A;">Verified Credential</div>
                        <div style="font-size: 0.65rem; color: var(--accent-green); font-weight: 700;">Instant Post Active</div>
                    </div>
                </div>
            </div>

            <!-- Card 7: Smart Attendance -->
            <div class="bento-card" data-premium-reveal style="display: flex; flex-direction: column; justify-content: space-between;">
                <div class="card-glow"></div>
                <div>
                    <div class="icon-box" style="background: rgba(16, 185, 129, 0.1); color: var(--accent-green);"><i class="fas fa-clock"></i></div>
                    <h3>Smart Attendance</h3>
                    <p>Real-time session time tracking, activity logs, and auto-generated sheets for classrooms.</p>
                </div>
                <div class="bento-mini-mockup" style="background: #F8FAFC; border: 1px solid #E2E8F0; border-radius: 12px; padding: 0.8rem; font-size: 0.75rem; color: #475569; margin-top: 1rem;">
                    <div style="display: flex; justify-content: space-between; align-items: center; font-weight: 700; color: #0F172A; margin-bottom: 0.4rem;">
                        <span>Attendance Sync</span>
                        <span style="display: inline-flex; align-items: center; gap: 0.25rem; font-size: 0.65rem; color: var(--accent-green);"><i class="fas fa-circle" style="font-size: 0.4rem;"></i> Live Feed</span>
                    </div>
                    <div style="background: #FFFFFF; border: 1px solid #E2E8F0; padding: 0.35rem 0.5rem; border-radius: 6px; font-weight: 600; display: flex; justify-content: space-between; box-shadow: 0 2px 4px rgba(0,0,0,0.01);">
                        <span>Class: Web Systems</span>
                        <span style="color: var(--primary);">98.2% Present</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 6 Pillars Section -->
    <section class="pillars-section" style="padding: 100px 0; background: #F8FAFC;">
        <div class="container">
            <div style="text-align: center; margin-bottom: 4rem;" data-premium-reveal>
                <span style="color: var(--primary); font-weight: 700; text-transform: uppercase; font-size: 0.85rem; letter-spacing: 0.1em; display: block; margin-bottom: 0.5rem;">Core Features</span>
                <h2 style="font-size: 3rem; margin-bottom: 1rem; color: #0F172A; font-weight: 800;">The 6 Pillars of a Premium Academy</h2>
                <p style="color: var(--text-muted); font-size: 1.1rem; max-width: 600px; margin: 0 auto;">Everything you need to deliver an exceptional learning experience.</p>
            </div>
            
            <style>
                .pillars-grid {
                    display: grid;
                    grid-template-columns: repeat(6, 1fr);
                    gap: 1.5rem;
                }
                .pillar-card {
                    background: #FFFFFF;
                    border: 1px solid #E2E8F0;
                    border-radius: 12px;
                    padding: 1.5rem 1rem;
                    text-align: center;
                    box-shadow: 0 4px 12px rgba(0,0,0,0.02);
                    transition: transform 0.3s ease, box-shadow 0.3s ease;
                    display: flex;
                    flex-direction: column;
                    align-items: center;
                }
                .pillar-card:hover {
                    transform: translateY(-5px);
                    box-shadow: 0 10px 25px rgba(0,0,0,0.05);
                    border-color: rgba(59, 130, 246, 0.3);
                }
                .pillar-icon {
                    width: 50px;
                    height: 50px;
                    margin: 0 auto 1rem;
                    border-radius: 12px;
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    font-size: 1.5rem;
                }
                .pillar-title {
                    font-size: 1.1rem;
                    font-weight: 700;
                    color: #0F172A;
                    margin-bottom: 0.5rem;
                }
                .pillar-desc {
                    font-size: 0.85rem;
                    color: var(--text-muted);
                    line-height: 1.4;
                }
                @media (max-width: 992px) {
                    .pillars-grid { grid-template-columns: repeat(3, 1fr); }
                }
                @media (max-width: 768px) {
                    .pillars-grid { grid-template-columns: repeat(2, 1fr); }
                }
                @media (max-width: 480px) {
                    .pillars-grid { grid-template-columns: 1fr; }
                }
            </style>

            <div class="pillars-grid" data-premium-reveal>
                <div class="pillar-card">
                    <div class="pillar-icon" style="background: rgba(59, 130, 246, 0.1); color: #3B82F6;"><i class="fas fa-book-open"></i></div>
                    <div class="pillar-title">Course Builder</div>
                    <div class="pillar-desc">Create modular courses with videos and documents.</div>
                </div>
                <div class="pillar-card">
                    <div class="pillar-icon" style="background: rgba(16, 185, 129, 0.1); color: #10B981;"><i class="fas fa-video"></i></div>
                    <div class="pillar-title">Live Classes</div>
                    <div class="pillar-desc">Host interactive sessions directly with students.</div>
                </div>
                <div class="pillar-card">
                    <div class="pillar-icon" style="background: rgba(245, 158, 11, 0.1); color: #F59E0B;"><i class="fas fa-question-circle"></i></div>
                    <div class="pillar-title">Quizzes & Tests</div>
                    <div class="pillar-desc">Automated assessments to track student progress.</div>
                </div>
                <div class="pillar-card">
                    <div class="pillar-icon" style="background: rgba(236, 72, 153, 0.1); color: #EC4899;"><i class="fas fa-wallet"></i></div>
                    <div class="pillar-title">Fee Management</div>
                    <div class="pillar-desc">Collect payments and split revenues easily.</div>
                </div>
                <div class="pillar-card">
                    <div class="pillar-icon" style="background: rgba(139, 92, 246, 0.1); color: #8B5CF6;"><i class="fas fa-chart-line"></i></div>
                    <div class="pillar-title">Smart Analytics</div>
                    <div class="pillar-desc">Detailed reports on performance and attendance.</div>
                </div>
                <div class="pillar-card">
                    <div class="pillar-icon" style="background: rgba(14, 165, 233, 0.1); color: #0EA5E9;"><i class="fas fa-award"></i></div>
                    <div class="pillar-title">Certifications</div>
                    <div class="pillar-desc">Issue verifiable credentials upon completion.</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Integrations Section -->
    <section class="integrations-section">
        <div class="container">
            <div style="text-align: center; margin-bottom: 2rem;" data-premium-reveal>
                <span style="color: var(--primary); font-weight: 700; text-transform: uppercase; font-size: 0.85rem; letter-spacing: 0.1em; display: block; margin-bottom: 0.5rem;">Seamless Ecosystem</span>
                <h2 style="font-size: 2.5rem; color: #0F172A; font-weight: 800;">Integrated with Your Favorite Tools</h2>
                <p style="color: var(--text-muted); font-size: 1.1rem; max-width: 600px; margin: 0 auto; margin-top: 0.5rem;">Connect instantly to top virtual meeting setups and secure payment processors.</p>
            </div>

            <div class="integrations-grid" data-premium-reveal>
                <div class="integration-item">
                    <i class="fas fa-video" style="color: #2D8CFF;"></i>
                    <span>Zoom</span>
                </div>
                <div class="integration-item">
                    <i class="fas fa-chalkboard" style="color: #4285F4;"></i>
                    <span>Classroom</span>
                </div>
                <div class="integration-item">
                    <i class="fas fa-users-rectangle" style="color: #00897B;"></i>
                    <span>Google Meet</span>
                </div>
                <div class="integration-item">
                    <i class="fab fa-paypal" style="color: #003087;"></i>
                    <span>PayPal</span>
                </div>
                <div class="integration-item">
                    <i class="fas fa-mobile-screen" style="color: #5f259f;"></i>
                    <span>PhonePe</span>
                </div>
                <div class="integration-item">
                    <i class="fas fa-credit-card" style="color: #0b72e7;"></i>
                    <span>Razorpay</span>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="testimonials-section">
        <div style="text-align: center;" data-premium-reveal>
            <span style="color: var(--primary); font-weight: 700; text-transform: uppercase; font-size: 0.85rem; letter-spacing: 0.1em; display: block; margin-bottom: 0.5rem;">Trusted by educators</span>
            <h2 style="font-size: 2.5rem; color: #0F172A; font-weight: 800;">Hear from our community</h2>
            <p style="color: var(--text-muted); font-size: 1.1rem; max-width: 600px; margin: 0 auto; margin-top: 0.5rem;">Join the growing number of academies and tutors who love teaching on our platform.</p>
        </div>

        <div class="testimonials-container" data-premium-reveal>
            <div class="testimonials-track">
                <!-- Testimonial 1 -->
                <div class="testimonial-card">
                    <div>
                        <div class="testimonial-stars">
                            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                        </div>
                        <p class="testimonial-text">"Switching to LMS Pro reduced our operational overhead by 40%. The multi-tutor assignment and automated fee splits changed how we manage our entire coding boot camp."</p>
                    </div>
                    <div class="testimonial-author">
                        <div class="testimonial-avatar" style="background: rgba(59, 130, 246, 0.1); color: var(--primary);">AR</div>
                        <div class="author-info">
                            <h4>Alex Rivers</h4>
                            <p>Founder, DevAcademy</p>
                        </div>
                    </div>
                </div>

                <!-- Testimonial 2 -->
                <div class="testimonial-card">
                    <div>
                        <div class="testimonial-stars">
                            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                        </div>
                        <p class="testimonial-text">"The Course Builder and dynamic Quiz features keep our students highly engaged. Having everything, including low-latency live lectures, in one custom white-labeled app is incredible."</p>
                    </div>
                    <div class="testimonial-author">
                        <div class="testimonial-avatar" style="background: rgba(79, 70, 229, 0.1); color: var(--secondary);">SJ</div>
                        <div class="author-info">
                            <h4>Sarah Jenkins</h4>
                            <p>Head of Education, LinguaSpace</p>
                        </div>
                    </div>
                </div>

                <!-- Testimonial 3 -->
                <div class="testimonial-card">
                    <div>
                        <div class="testimonial-stars">
                            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                        </div>
                        <p class="testimonial-text">"LinkedIn certificate syncing is a huge selling point for our professional certificate programs. Students love showing off their verified accomplishments instantly!"</p>
                    </div>
                    <div class="testimonial-author">
                        <div class="testimonial-avatar" style="background: rgba(16, 185, 129, 0.1); color: var(--accent-green);">MK</div>
                        <div class="author-info">
                            <h4>Michael K.</h4>
                            <p>Director of Tech Programs, Upskill</p>
                        </div>
                    </div>
                </div>

                <!-- Duplicate Testimonial 1 for loop -->
                <div class="testimonial-card">
                    <div>
                        <div class="testimonial-stars">
                            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                        </div>
                        <p class="testimonial-text">"Switching to LMS Pro reduced our operational overhead by 40%. The multi-tutor assignment and automated fee splits changed how we manage our entire coding boot camp."</p>
                    </div>
                    <div class="testimonial-author">
                        <div class="testimonial-avatar" style="background: rgba(59, 130, 246, 0.1); color: var(--primary);">AR</div>
                        <div class="author-info">
                            <h4>Alex Rivers</h4>
                            <p>Founder, DevAcademy</p>
                        </div>
                    </div>
                </div>

                <!-- Duplicate Testimonial 2 for loop -->
                <div class="testimonial-card">
                    <div>
                        <div class="testimonial-stars">
                            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                        </div>
                        <p class="testimonial-text">"The Course Builder and dynamic Quiz features keep our students highly engaged. Having everything, including low-latency live lectures, in one custom white-labeled app is incredible."</p>
                    </div>
                    <div class="testimonial-author">
                        <div class="testimonial-avatar" style="background: rgba(79, 70, 229, 0.1); color: var(--secondary);">SJ</div>
                        <div class="author-info">
                            <h4>Sarah Jenkins</h4>
                            <p>Head of Education, LinguaSpace</p>
                        </div>
                    </div>
                </div>

                <!-- Duplicate Testimonial 3 for loop -->
                <div class="testimonial-card">
                    <div>
                        <div class="testimonial-stars">
                            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                        </div>
                        <p class="testimonial-text">"LinkedIn certificate syncing is a huge selling point for our professional certificate programs. Students love showing off their verified accomplishments instantly!"</p>
                    </div>
                    <div class="testimonial-author">
                        <div class="testimonial-avatar" style="background: rgba(16, 185, 129, 0.1); color: var(--accent-green);">MK</div>
                        <div class="author-info">
                            <h4>Michael K.</h4>
                            <p>Director of Tech Programs, Upskill</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Scrolling Gallery -->
    <section class="gallery-section">
        <div style="text-align: center; margin-bottom: 3rem;" data-premium-reveal>
            <h2 style="font-size: 2.5rem; color: #0F172A; font-weight: 800;">Visualizing Success</h2>
            <p style="color: var(--text-muted); font-size: 1.1rem;">Empowering learners around the globe.</p>
        </div>
        <div class="gallery-container">
            <div class="gallery-grid">
                @php
                    $demoImages = ['demo1.png', 'demo2.png', 'demo3.png', 'demo4.png', 'demo5.png', 'demo6.png', 'demo7.png', 'demo8.png', 'demo9.png', 'demo10.png', 'demo11.png', 'demo12.png'];
                @endphp
                
                @foreach($demoImages as $img)
                    <div class="gallery-item"><img src="{{ asset('assets/Demo/' . $img) }}" alt="Demo Screenshot"></div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Lightbox Modal -->
    <div id="lightbox-modal" class="modal-overlay">
        <div class="lightbox-content">
            <button class="close-lightbox">&times;</button>
            <img id="lightbox-img" src="" alt="Enlarged Preview">
        </div>
    </div>

    <!-- Final Scripts -->
    <footer style="margin-top: 100px;">
        <div class="container footer-grid">
            <div class="footer-brand">
                <a href="#" class="logo" style="margin-bottom: 1.5rem;">
                    <i class="fas fa-cube" style="color: var(--primary);"></i> LMS PRO
                </a>
                <p>The complete platform for modern education. Grow your academy without the stress.</p>
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
                    <li><a href="{{ url('pricing') }}">Pricing</a></li>
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
                <p style="color: var(--text-muted); font-size: 0.9rem; margin-bottom: 1.5rem;">Get the latest education tips and trends delivered to your inbox.</p>
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
                <h2 style="margin-bottom: 1rem; color: #0f172a; font-weight: 800;">See it in action.</h2>
                <p style="color: var(--text-muted); margin-bottom: 2.5rem;">Just a few details to get started with your demo.</p>
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
                            <div class="phone-input-container">
                                <select class="country-code-select" id="country-code" required>
                                    <option value="+91">+91</option>
                                    <option value="+1">+1</option>
                                    <option value="+44">+44</option>
                                    <option value="+971">+971</option>
                                    <option value="+61">+61</option>
                                    <option value="+65">+65</option>
                                </select>
                                <input type="tel" id="inst-phone" required placeholder="Phone Number">
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="email" id="inst-email" required placeholder="Email Address">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary"
                        style="width: 100%; margin-top: 1.5rem; justify-content: center;">Continue to Selection <i
                            class="fas fa-arrow-right"></i></button>
                </form>
            </div>

            <div id="demo-step-2" style="display: none;">
                <h2 style="margin-bottom: 2rem; color: #0F172A; font-weight: 800;">Who are you exploring for?</h2>
                <div class="role-grid">
                    <div class="role-btn" data-role="admin">
                        <div class="role-icon" style="background: var(--primary);"><i class="fas fa-shield-halved"></i>
                        </div>
                        <h3>Admin</h3>
                        <p>Manage the academy</p>
                    </div>
                    <div class="role-btn" data-role="tutor">
                        <div class="role-icon" style="background: var(--secondary);"><i
                                class="fas fa-chalkboard-user"></i></div>
                        <h3>Teacher</h3>
                        <p>Lead classes & track progress</p>
                    </div>
                    <div class="role-btn" data-role="student">
                        <div class="role-icon" style="background: var(--accent-green);"><i
                                class="fas fa-user-graduate"></i></div>
                        <h3>Student</h3>
                        <p>Learn and grow</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>