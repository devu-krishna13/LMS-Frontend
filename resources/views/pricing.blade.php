<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transparent Pricing Plans | EduLMS SaaS</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<body style="background: #F8FAFC;">

    <!-- Navbar Header -->
    <header id="header" style="background: #FFFFFF; border-bottom: 1px solid #E2E8F0;">
        <nav>
            <a href="{{ url('/') }}" class="logo">
                <i class="fas fa-cube" style="color: var(--primary);"></i> LMS PRO
            </a>
            <input type="checkbox" id="menu-toggle" style="display: none;">
            <label for="menu-toggle" class="menu-btn">
                <i class="fas fa-bars"></i>
            </label>
            <ul class="nav-links">
                <li><a href="{{ url('/') }}" style="color: #475569;">Home</a></li>
                <li><a href="{{ url('/#features') }}" style="color: #475569;">Features</a></li>
                <li><a href="{{ url('/#modules') }}" style="color: #475569;">Modules</a></li>
                <li><a href="{{ url('pricing') }}" style="color: var(--primary); font-weight: 700;">Pricing</a></li>
            </ul>
            <div class="auth">
                <a href="{{ url('/') }}" class="btn btn-primary header-btn">Back to Main</a>
            </div>
        </nav>
    </header>

    <!-- Pricing Hero Section -->
    <section class="pricing-hero">
        <div class="container">
            <div class="pricing-title-area" data-premium-reveal class="active">
                <div style="display: inline-flex; align-items: center; gap: 0.5rem; background: rgba(79, 70, 229, 0.08); padding: 0.5rem 1.25rem; border-radius: 100px; color: #4F46E5; font-weight: 800; font-size: 0.85rem; text-transform: uppercase; margin-bottom: 1.5rem;">
                    <i class="fas fa-cloud"></i> EduLMS SaaS
                </div>
                <h1>Simple, Fair Pricing</h1>
                <p>Pick the plan that works best for your academy. You can always upgrade later.</p>
            </div>

            <!-- Pricing Grid (5 Cards) -->
            <div class="pricing-grid">
                
                <!-- Free Plan -->
                <div class="pricing-card" id="card-free" onclick="selectPlan('Free Forever', 'card-free')">
                    <div>
                        <div class="plan-meta">
                            <span>Free Plan</span>
                        </div>
                        <h3 class="plan-title">Free Forever</h3>
                        <div class="plan-price">
                            $0
                        </div>
                        <ul class="feature-list">
                            <li><i class="fas fa-check-circle"></i> Max 5 Students</li>
                            <li><i class="fas fa-check-circle"></i> 1 Trainer Account</li>
                            <li><i class="fas fa-check-circle"></i> 1 Course Allowed</li>
                            <li><i class="fas fa-check-circle"></i> Core LMS Features</li>
                        </ul>
                    </div>
                    <button class="plan-select-btn">Select Plan</button>
                </div>

                <!-- Starter Plan -->
                <div class="pricing-card" id="card-starter" onclick="selectPlan('Starter', 'card-starter')">
                    <div>
                        <div class="plan-meta">
                            <span>Starter Plan</span>
                        </div>
                        <h3 class="plan-title">Starter</h3>
                        <div class="plan-price">
                            $19<span>/mo</span>
                        </div>
                        <ul class="feature-list">
                            <li><i class="fas fa-check-circle"></i> Max 50 Students</li>
                            <li><i class="fas fa-check-circle"></i> 2 Trainer Accounts</li>
                            <li><i class="fas fa-check-circle"></i> 3 Courses Allowed</li>
                            <li><i class="fas fa-check-circle"></i> Custom Batch Creation</li>
                        </ul>
                    </div>
                    <button class="plan-select-btn">Select Plan</button>
                </div>

                <!-- Growth Plan (Popular Card) -->
                <div class="pricing-card popular-card selected-plan-card" id="card-growth" onclick="selectPlan('Growth', 'card-growth')">
                    <div class="popular-badge">Popular</div>
                    <div>
                        <div class="plan-meta">
                            <span style="color: #6366F1;">Growth Plan</span>
                        </div>
                        <h3 class="plan-title">Growth</h3>
                        <div class="plan-price">
                            $49<span>/mo</span>
                        </div>
                        <ul class="feature-list">
                            <li><i class="fas fa-check-circle" style="color: #6366F1;"></i> Max 200 Students</li>
                            <li><i class="fas fa-check-circle" style="color: #6366F1;"></i> 5 Trainer Accounts</li>
                            <li><i class="fas fa-check-circle" style="color: #6366F1;"></i> 10 Courses Allowed</li>
                            <li><i class="fas fa-check-circle" style="color: #6366F1;"></i> Study Material Storage</li>
                        </ul>
                    </div>
                    <button class="plan-select-btn">Select Plan</button>
                </div>

                <!-- Academy Plan -->
                <div class="pricing-card" id="card-academy" onclick="selectPlan('Academy', 'card-academy')">
                    <div>
                        <div class="plan-meta">
                            <span>Academy Plan</span>
                        </div>
                        <h3 class="plan-title">Academy</h3>
                        <div class="plan-price">
                            $99<span>/mo</span>
                        </div>
                        <ul class="feature-list">
                            <li><i class="fas fa-check-circle"></i> Max 500 Students</li>
                            <li><i class="fas fa-check-circle"></i> Unlimited Trainers</li>
                            <li><i class="fas fa-check-circle"></i> Unlimited Courses</li>
                            <li><i class="fas fa-check-circle"></i> Zoom Integration</li>
                        </ul>
                    </div>
                    <button class="plan-select-btn">Select Plan</button>
                </div>

                <!-- Enterprise Plan (Dark Navy) -->
                <div class="pricing-card enterprise-card" id="card-enterprise" onclick="selectPlan('Enterprise', 'card-enterprise')">
                    <div>
                        <div class="plan-meta">
                            <span>Enterprise Plan</span>
                        </div>
                        <h3 class="plan-title">Enterprise</h3>
                        <div class="plan-price">
                            Custom
                        </div>
                        <ul class="feature-list">
                            <li><i class="fas fa-check-circle"></i> Custom Student Volume</li>
                            <li><i class="fas fa-check-circle"></i> Dedicated Servers</li>
                            <li><i class="fas fa-check-circle"></i> SLA Support</li>
                            <li><i class="fas fa-check-circle"></i> Custom Domain Support</li>
                        </ul>
                    </div>
                    <button class="plan-select-btn">Contact Sales</button>
                </div>

            </div>
        </div>
    </section>

    <!-- Setup Your Institution Profile Form Section -->
    <section class="setup-section" id="setup-form-section">
        <div class="container">
            <div class="setup-box">
                <div class="setup-header">
                    <h2>Set Up Your Institution</h2>
                    <div class="selected-plan-display">
                        Currently Selected: <span id="current-selected-plan-badge" style="font-weight: 800;">GROWTH</span>
                    </div>
                </div>

                <!-- Interactive registration form -->
                <form action="/register-lead" method="POST" id="institution-form">
                    @csrf
                    <input type="hidden" name="selected_plan" id="selected-plan-input" value="Growth">
                    
                    <div class="setup-form-grid">
                        
                        <!-- Institution Profile Field -->
                        <div class="setup-form-group full-width">
                            <label for="inst-profile" style="color: #94A3B8; font-size: 0.75rem;">Institution Profile</label>
                            <hr style="border: 0; border-top: 1px solid #E2E8F0; margin: 0.25rem 0 0.75rem 0;">
                        </div>

                        <div class="setup-form-group">
                            <label for="inst-name">Institution Name</label>
                            <input type="text" id="inst-name" name="institution_name" placeholder="e.g. Elite Academy of Design" required>
                        </div>

                        <div class="setup-form-group">
                            <label for="inst-domain">Preferred Domain Prefix</label>
                            <div class="domain-input-wrapper">
                                <input type="text" id="inst-domain" name="domain_prefix" placeholder="myacademy" required>
                                <span class="domain-suffix">.edulms.saas</span>
                            </div>
                        </div>

                        <!-- Admin Account Details Field -->
                        <div class="setup-form-group full-width" style="margin-top: 1.5rem;">
                            <label for="admin-details" style="color: #94A3B8; font-size: 0.75rem;">Administrator Account</label>
                            <hr style="border: 0; border-top: 1px solid #E2E8F0; margin: 0.25rem 0 0.75rem 0;">
                        </div>

                        <div class="setup-form-group">
                            <label for="admin-name">Full Name</label>
                            <input type="text" id="admin-name" name="admin_name" placeholder="e.g. Alexander Rivers" required>
                        </div>

                        <div class="setup-form-group">
                            <label for="admin-email">Email Address</label>
                            <input type="email" id="admin-email" name="email" placeholder="alex@academy.com" required>
                        </div>

                        <div class="setup-form-group">
                            <label for="admin-phone">Contact Phone</label>
                            <input type="tel" id="admin-phone" name="phone" placeholder="+1 (555) 019-2834" required>
                        </div>

                        <div class="setup-form-group">
                            <label for="payment-cycle">Preferred Billing Cycle</label>
                            <select id="payment-cycle" name="billing_cycle">
                                <option value="monthly">Monthly Billing</option>
                                <option value="annually">Annual Billing (Save 20%!) </option>
                            </select>
                        </div>

                        <button type="submit" class="submit-setup-btn">Complete Setup & Launch Academy</button>

                    </div>
                </form>

            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer style="margin-top: 100px;">
        <div class="container footer-grid">
            <div class="footer-brand">
                <a href="{{ url('/') }}" class="logo" style="margin-bottom: 1.5rem;">
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
                    <li><a href="{{ url('/#features') }}">Features</a></li>
                    <li><a href="{{ url('/#modules') }}">Modules</a></li>
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

    <!-- Interactive script for plan switching -->
    <script>
        function selectPlan(planName, cardId) {
            // Remove selection class from all cards
            document.querySelectorAll('.pricing-card').forEach(card => {
                card.classList.remove('selected-plan-card');
            });
            
            // Add selection class to the target card
            const selectedCard = document.getElementById(cardId);
            if (selectedCard) {
                selectedCard.classList.add('selected-plan-card');
            }
            
            // Update selected plan badge & input
            document.getElementById('current-selected-plan-badge').innerText = planName.toUpperCase();
            document.getElementById('selected-plan-input').value = planName;
            
            // Smoothly scroll to setup form
            const formSection = document.getElementById('setup-form-section');
            if (formSection) {
                formSection.scrollIntoView({ behavior: 'smooth', block: 'center' });
            }
        }
    </script>

</body>

</html>
