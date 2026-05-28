<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>LMS Pro | Everything Your Academy Needs</title>
<link rel="preconnect" href="https://fonts.googleapis.com" />
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
<link href="https://fonts.googleapis.com/css2?family=Sora:wght@300;400;500;600;700;800&family=DM+Sans:ital,opsz,wght@0,9..40,300;0,9..40,400;0,9..40,500;1,9..40,400&display=swap" rel="stylesheet" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
<style>
  *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }

  :root {
    --bg: #FFFFFF;
    --bg2: #F8FAFC;
    --bg3: #F1F5F9;
    --surface: #FFFFFF;
    --surface2: #F8FAFC;
    --border: rgba(15,23,42,0.06);
    --border2: rgba(15,23,42,0.1);
    --accent: #4F46E5; /* Sophisticated Indigo */
    --accent-hover: #4338CA;
    --accent2: #6366F1;
    --accent-glow: rgba(79,70,229,0.1);
    --teal: #0D9488;
    --teal-dim: rgba(13,148,136,0.06);
    --text: #0F172A; /* Slate 900 */
    --text2: #475569; /* Slate 600 */
    --text3: #94A3B8; /* Slate 400 */
    --radius: 14px;
    --radius-lg: 24px;
    --radius-xl: 32px;
    --font-main: 'DM Sans', sans-serif;
    --font-heading: 'Sora', sans-serif;
  }

  html { scroll-behavior: smooth; }

  body {
    font-family: var(--font-main);
    background: var(--bg);
    color: var(--text);
    overflow-x: hidden;
    line-height: 1.6;
    -webkit-font-smoothing: antialiased;
  }

  h1, h2, h3, h4, h5 {
    font-family: var(--font-heading);
    line-height: 1.1;
    font-weight: 800;
    letter-spacing: -0.03em;
  }

  /* ─── NAV ─── */
  nav {
    position: fixed; top: 0; left: 0; right: 0; z-index: 100;
    display: flex; align-items: center; justify-content: space-between;
    padding: 0 5%;
    height: 72px;
    background: rgba(255,255,255,0.7);
    backdrop-filter: blur(24px);
    -webkit-backdrop-filter: blur(24px);
    border-bottom: 1px solid var(--border);
    transition: all 0.3s ease;
  }
  nav.scrolled {
    height: 64px;
    background: rgba(255,255,255,0.9);
    box-shadow: 0 4px 20px rgba(0,0,0,0.03);
  }
  .nav-logo {
    font-family: var(--font-heading);
    font-weight: 800;
    font-size: 1.4rem;
    color: var(--text);
    text-decoration: none;
    letter-spacing: -0.04em;
    display: flex; align-items: center; gap: 8px;
  }
  .nav-logo span { color: var(--accent); }
  .nav-links {
    display: flex; align-items: center; gap: 40px;
    list-style: none;
  }
  .nav-links a {
    text-decoration: none;
    color: var(--text2);
    font-size: 0.95rem;
    font-weight: 500;
    transition: all 0.2s;
  }
  .nav-links a:hover { color: var(--accent); }
  .nav-actions { display: flex; gap: 16px; align-items: center; }
  .btn-ghost {
    padding: 10px 22px;
    border-radius: 10px;
    background: transparent;
    color: var(--text);
    font-family: var(--font-main);
    font-size: 0.9rem;
    font-weight: 600;
    cursor: pointer;
    text-decoration: none;
    transition: all 0.2s;
  }
  .btn-ghost:hover { background: var(--bg3); }
  .btn-primary {
    padding: 10px 24px;
    border-radius: 10px;
    background: var(--accent);
    color: #fff;
    font-family: var(--font-main);
    font-size: 0.9rem;
    font-weight: 600;
    cursor: pointer;
    text-decoration: none;
    border: none;
    transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    box-shadow: 0 4px 14px rgba(79,70,229,0.25);
  }
  .btn-primary:hover { 
    background: var(--accent-hover); 
    transform: translateY(-2px); 
    box-shadow: 0 6px 20px rgba(79,70,229,0.35); 
  }

  /* ─── HERO ─── */
  .hero {
    min-height: 100vh;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    text-align: center;
    padding: 140px 5% 100px;
    position: relative;
    overflow: hidden;
    background: radial-gradient(circle at 50% -20%, var(--accent-glow) 0%, transparent 50%);
  }
  .hero-grid-bg {
    position: absolute; inset: 0;
    background-image:
      linear-gradient(var(--border) 1px, transparent 1px),
      linear-gradient(90deg, var(--border) 1px, transparent 1px);
    background-size: 50px 50px;
    mask-image: radial-gradient(ellipse 60% 50% at 50% 50%, black 0%, transparent 100%);
    pointer-events: none;
  }
  .hero-badge {
    display: inline-flex; align-items: center; gap: 10px;
    padding: 8px 18px;
    background: #fff;
    border: 1px solid var(--border2);
    box-shadow: 0 4px 12px rgba(0,0,0,0.03);
    border-radius: 100px;
    font-size: 0.85rem;
    font-weight: 600;
    color: var(--text2);
    margin-bottom: 32px;
    position: relative;
    z-index: 2;
  }
  .hero-badge-dot {
    width: 8px; height: 8px;
    background: var(--teal);
    border-radius: 50%;
    display: inline-block;
    position: relative;
  }
  .hero-badge-dot::after {
    content: '';
    position: absolute; inset: -4px;
    border-radius: 50%;
    background: var(--teal);
    opacity: 0.4;
    animation: pulse 2s infinite;
  }
  @keyframes pulse {
    0% { transform: scale(1); opacity: 0.4; }
    100% { transform: scale(2.5); opacity: 0; }
  }
  .hero h1 {
    font-size: clamp(2.8rem, 8vw, 5.2rem);
    max-width: 1000px;
    color: var(--text);
    margin-bottom: 24px;
    letter-spacing: -0.04em;
  }
  .hero h1 .highlight {
    background: linear-gradient(to right, var(--accent), var(--accent2));
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    display: inline-block;
  }
  .hero-sub {
    font-size: 1.25rem;
    color: var(--text2);
    max-width: 640px;
    margin: 0 auto 48px;
    line-height: 1.6;
    font-weight: 450;
  }
  .btn-hero-primary {
    padding: 16px 36px;
    border-radius: 12px;
    background: var(--accent);
    color: #fff;
    font-family: var(--font-main);
    font-size: 1.05rem;
    font-weight: 600;
    cursor: pointer;
    text-decoration: none;
    border: none;
    transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    box-shadow: 0 10px 25px rgba(79,70,229,0.3);
  }
  .btn-hero-primary:hover { 
    background: var(--accent-hover); 
    transform: translateY(-3px); 
    box-shadow: 0 15px 35px rgba(79,70,229,0.4); 
  }
  .btn-hero-ghost {
    padding: 16px 36px;
    border-radius: 12px;
    background: #fff;
    border: 1px solid var(--border2);
    color: var(--text);
    font-family: var(--font-main);
    font-size: 1.05rem;
    font-weight: 600;
    cursor: pointer;
    text-decoration: none;
    transition: all 0.3s;
    display: flex; align-items: center; gap: 12px;
    box-shadow: 0 4px 12px rgba(0,0,0,0.03);
  }
  .btn-hero-ghost:hover { border-color: var(--accent); background: var(--bg2); transform: translateY(-2px); }
  .play-icon {
    width: 28px; height: 28px;
    border-radius: 50%;
    background: rgba(0,0,0,0.05);
    display: flex; align-items: center; justify-content: center;
    font-size: 0.7rem;
  }
  .hero-stats {
    display: flex; gap: 48px; justify-content: center;
    flex-wrap: wrap;
  }
  .hero-stat-item { text-align: center; }
  .hero-stat-num {
    font-family: var(--font-heading);
    font-size: 2.4rem;
    font-weight: 800;
    color: var(--accent);
    display: block;
    line-height: 1;
    margin-bottom: 4px;
  }
  .hero-stat-label {
    font-size: 0.82rem;
    color: var(--text3);
    font-weight: 500;
    text-transform: uppercase;
    letter-spacing: 0.05em;
  }
  .hero-stat-sep {
    width: 1px;
    background: var(--border2);
    height: 40px;
    margin: auto;
    align-self: center;
  }

  /* ─── DASHBOARD PREVIEW ─── */
  .dashboard-preview {
    padding: 0 5% 120px;
    position: relative;
    z-index: 5;
  }
  .dashboard-frame {
    max-width: 1200px;
    margin: 0 auto;
    border-radius: var(--radius-xl);
    border: 1px solid var(--border2);
    background: #fff;
    overflow: hidden;
    box-shadow: 0 40px 100px rgba(15,23,42,0.1);
    position: relative;
    transition: transform 0.5s cubic-bezier(0.2, 0.8, 0.2, 1);
  }
  .dashboard-frame:hover {
    transform: translateY(-10px) scale(1.01);
  }
  .dashboard-topbar {
    background: var(--bg2);
    padding: 14px 24px;
    display: flex; align-items: center; gap: 10px;
    border-bottom: 1px solid var(--border);
  }
  .dot { width: 12px; height: 12px; border-radius: 50%; }
  .dot-r { background: #FF5F56; }
  .dot-y { background: #FFBD2E; }
  .dot-g { background: #27C93F; }
  .dashboard-url {
    flex: 1;
    text-align: center;
    font-size: 0.85rem;
    color: var(--text3);
    font-family: var(--font-main);
    background: #fff;
    padding: 6px 0;
    border-radius: 6px;
    margin: 0 40px;
    border: 1px solid var(--border);
  }
  .dashboard-inner {
    display: grid;
    grid-template-columns: 240px 1fr;
    height: 520px;
  }
  .dash-sidebar {
    background: var(--bg2);
    border-right: 1px solid var(--border);
    padding: 24px 0;
  }
  .dash-logo {
    padding: 0 24px 24px;
    font-family: var(--font-heading);
    font-weight: 800;
    font-size: 1.2rem;
    color: var(--text);
    border-bottom: 1px solid var(--border);
    margin-bottom: 20px;
  }
  .dash-logo span { color: var(--accent); }
  .dash-nav-item {
    display: flex; align-items: center; gap: 12px;
    padding: 12px 24px;
    font-size: 0.9rem;
    color: var(--text2);
    cursor: pointer;
    transition: all 0.2s;
    font-weight: 500;
  }
  .dash-nav-item.active {
    background: #fff;
    color: var(--accent);
    box-shadow: 0 2px 10px rgba(0,0,0,0.02);
    border-right: 3px solid var(--accent);
  }
  .dash-icon {
    width: 20px; height: 20px;
    border-radius: 6px;
    background: currentColor;
    opacity: 0.15;
    flex-shrink: 0;
  }
  .dash-main { padding: 32px; overflow: hidden; background: #fff; }
  .dash-greeting {
    font-family: var(--font-heading);
    font-size: 1.4rem;
    font-weight: 700;
    color: var(--text);
    margin-bottom: 6px;
  }
  .dash-sub { font-size: 0.9rem; color: var(--text2); margin-bottom: 32px; }
  .dash-cards {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 20px;
    margin-bottom: 32px;
  }
  .dash-card {
    background: #fff;
    border: 1px solid var(--border);
    border-radius: var(--radius);
    padding: 20px;
    transition: all 0.2s;
  }
  .dash-card:hover { border-color: var(--accent); box-shadow: 0 4px 20px rgba(0,0,0,0.03); }
  .dash-card-label { font-size: 0.75rem; color: var(--text3); text-transform: uppercase; font-weight: 700; letter-spacing: 0.05em; margin-bottom: 10px; }
  .dash-card-val {
    font-family: var(--font-heading);
    font-size: 1.8rem;
    font-weight: 800;
    color: var(--text);
  }
  .dash-card-delta { font-size: 0.75rem; color: var(--teal); font-weight: 600; margin-top: 4px; }
  .dash-grid2 {
    display: grid;
    grid-template-columns: 1.2fr 0.8fr;
    gap: 20px;
  }
  .dash-chart-box {
    background: #fff;
    border: 1px solid var(--border);
    border-radius: var(--radius);
    padding: 20px;
  }
  .dash-chart-title { font-size: 0.9rem; font-weight: 700; color: var(--text); margin-bottom: 20px; }
  .chart-bars {
    display: flex; align-items: flex-end; gap: 10px; height: 120px;
  }
  .bar {
    flex: 1;
    border-radius: 6px 6px 0 0;
    background: var(--bg3);
    transition: all 0.3s;
  }
  .bar:hover { background: var(--accent2); }
  .bar.active { background: var(--accent); }
  .dash-recent-list { display: flex; flex-direction: column; gap: 12px; }
  .dash-recent-item {
    display: flex; align-items: center; gap: 12px;
    font-size: 0.85rem;
    padding: 8px;
    border-radius: 8px;
    transition: background 0.2s;
  }
  .dash-recent-item:hover { background: var(--bg2); }
  .dash-avatar {
    width: 32px; height: 32px;
    border-radius: 10px;
    background: var(--accent);
    display: flex; align-items: center; justify-content: center;
    font-size: 0.75rem;
    font-weight: 700;
    color: white;
    flex-shrink: 0;
  }
  .dash-ri-name { color: var(--text); font-weight: 600; flex: 1; }
  .dash-ri-badge {
    padding: 4px 10px;
    border-radius: 100px;
    font-size: 0.7rem;
    font-weight: 700;
    text-transform: uppercase;
  }
  .badge-green { background: #E6FFFA; color: #0D9488; }
  .badge-blue { background: #EEF2FF; color: #4F46E5; }
  .badge-amber { background: #FFFBEB; color: #D97706; }

  /* ─── SECTION COMMONS ─── */
  section { padding: 80px 5%; }
  .section-label {
    display: inline-block;
    font-size: 0.75rem;
    font-weight: 700;
    letter-spacing: 0.1em;
    text-transform: uppercase;
    color: var(--teal);
    margin-bottom: 14px;
  }
  .section-title {
    font-size: clamp(1.8rem, 4vw, 3rem);
    font-weight: 800;
    letter-spacing: -0.02em;
    line-height: 1.15;
    max-width: 700px;
    margin-bottom: 16px;
  }
  .section-sub {
    color: var(--text2);
    font-size: 1.05rem;
    max-width: 560px;
    line-height: 1.7;
    margin-bottom: 60px;
  }
  .text-center { text-align: center; margin-left: auto; margin-right: auto; }

  .hero-cta, .cta-actions {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 20px;
    flex-wrap: wrap;
  }
  .hero-cta { margin-bottom: 64px; }
  .cta-actions { margin-top: 40px; }

  .role-section { background: var(--bg2); padding: 80px 5% 60px; }
  .role-tabs {
    display: flex;
    justify-content: center;
    gap: 12px;
    margin-bottom: 48px;
  }
  .role-tab {
    padding: 12px 28px;
    border-radius: 100px;
    background: #fff;
    border: 1px solid var(--border);
    font-family: var(--font-main);
    font-size: 0.95rem;
    font-weight: 600;
    color: var(--text2);
    cursor: pointer;
    transition: all 0.3s;
  }
  .role-tab:hover { border-color: var(--accent); color: var(--accent); }
  .role-tab.active {
    background: var(--accent);
    color: #fff;
    border-color: var(--accent);
    box-shadow: 0 10px 20px rgba(79,70,229,0.2);
  }

  .role-content {
    display: none;
    grid-template-columns: 1fr 1fr;
    gap: 60px;
    align-items: center;
    max-width: 1100px;
    margin: 0 auto;
    animation: fadeIn 0.5s ease;
  }
  .role-content.active { display: grid; }
  
  @keyframes fadeIn {
    from { opacity: 0; transform: translateY(10px); }
    to { opacity: 1; transform: translateY(0); }
  }

  .role-feature-list { display: flex; flex-direction: column; gap: 32px; }
  .role-feature { display: flex; gap: 20px; }
  .role-feature-icon {
    width: 48px; height: 48px;
    border-radius: 12px;
    background: #fff;
    border: 1px solid var(--border);
    display: flex; align-items: center; justify-content: center;
    font-size: 1.25rem;
    color: var(--accent);
    flex-shrink: 0;
    box-shadow: 0 4px 12px rgba(0,0,0,0.03);
  }
  .role-feature h4 { font-size: 1.1rem; font-weight: 700; color: var(--text); margin-bottom: 8px; }
  .role-feature p { font-size: 0.95rem; color: var(--text2); line-height: 1.6; }
  
  .role-demo-link {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    margin-top: 10px;
    font-size: 0.95rem;
    font-weight: 700;
    color: var(--accent);
    text-decoration: none;
    transition: all 0.2s;
  }
  .role-demo-link:hover { gap: 12px; }

  .role-visual {
    background: #fff;
    border: 1px solid var(--border);
    border-radius: var(--radius-lg);
    padding: 32px;
    box-shadow: 0 20px 40px rgba(15,23,42,0.05);
  }
  .role-visual-title {
    font-family: var(--font-heading);
    font-size: 0.9rem;
    font-weight: 700;
    color: var(--text);
    margin-bottom: 24px;
    text-transform: uppercase;
    letter-spacing: 0.05em;
    display: flex; align-items: center; gap: 10px;
  }
  .role-visual-title::before {
    content: '';
    width: 8px; height: 8px;
    border-radius: 50%;
    background: var(--teal);
  }

  .feature-tag {
    display: inline-block;
    padding: 4px 12px;
    background: var(--accent-glow);
    color: var(--accent);
    border-radius: 100px;
    font-size: 0.75rem;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 0.05em;
    margin-bottom: 16px;
  }
  .hidden-modules {
    display: none;
    opacity: 0;
    max-height: 0;
    overflow: hidden;
    margin: 0;
    transform: translateY(10px);
    transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
  }
  .hidden-modules.active {
    display: grid;
    max-height: none;
    overflow: visible;
    margin-top: 32px;
    opacity: 1;
    transform: translateY(0);
  }
  /* ─── FEATURES GRID ─── */
  .features-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
    gap: 32px;
    margin-bottom: 0;
  }
  .feature-card {
    background: #fff;
    border: 1px solid var(--border);
    border-radius: var(--radius-lg);
    padding: 40px;
    transition: all 0.4s cubic-bezier(0.2, 0.8, 0.2, 1);
    position: relative;
    overflow: hidden;
  }
  .feature-card:hover { 
    border-color: var(--accent); 
    transform: translateY(-8px); 
    box-shadow: 0 30px 60px rgba(15,23,42,0.06); 
  }
  .feature-icon {
    width: 60px; height: 60px;
    border-radius: 16px;
    display: flex; align-items: center; justify-content: center;
    font-size: 1.8rem;
    margin-bottom: 28px;
    transition: transform 0.3s;
  }
  .feature-card:hover .feature-icon { transform: scale(1.1) rotate(5deg); }
  .fi-blue { background: #EEF2FF; color: #4F46E5; }
  .fi-teal { background: #E6FFFA; color: #0D9488; }
  .fi-amber { background: #FFFBEB; color: #D97706; }
  .fi-pink { background: #FDF2F8; color: #DB2777; }
  .fi-purple { background: #F5F3FF; color: #7C3AED; }
  .fi-green { background: #F0FDF4; color: #16A34A; }
  
  .feature-card h3 {
    font-size: 1.25rem;
    font-weight: 800;
    margin-bottom: 12px;
    color: var(--text);
  }
  .feature-card p { font-size: 1rem; color: var(--text2); line-height: 1.6; }
  .feature-link {
    display: inline-flex; align-items: center; gap: 8px;
    margin-top: 24px;
    font-size: 0.9rem;
    font-weight: 700;
    color: var(--accent);
    text-decoration: none;
    transition: all 0.2s;
  }
  .feature-link:hover { gap: 12px; color: var(--accent-hover); }

  /* ─── INTEGRATIONS ─── */
  .integrations-section { background: var(--bg); }
  .integrations-grid {
    display: flex; flex-wrap: wrap; gap: 14px; justify-content: center;
    max-width: 800px; margin: 0 auto;
  }
  .integration-pill {
    display: flex; align-items: center; gap: 10px;
    padding: 10px 20px;
    background: var(--surface);
    border: 1px solid var(--border);
    border-radius: 100px;
    font-size: 0.875rem;
    font-weight: 500;
    color: var(--text2);
    transition: all 0.2s;
  }
  .integration-pill:hover { border-color: var(--border2); color: var(--text); }
  .integration-pill-icon { font-size: 1.2rem; }

  /* ─── TESTIMONIALS ─── */
  .testimonials-section { background: var(--bg2); }
  .testimonials-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 20px;
  }
  .testimonial-card {
    background: var(--surface);
    border: 1px solid var(--border);
    border-radius: var(--radius-lg);
    padding: 28px;
  }
  .stars { color: #FBBF24; margin-bottom: 14px; font-size: 0.8rem; display: flex; gap: 4px; }
  .testimonial-text {
    font-size: 0.925rem;
    color: var(--text2);
    line-height: 1.7;
    margin-bottom: 20px;
    font-style: italic;
  }
  .testimonial-author { display: flex; align-items: center; gap: 12px; }
  .t-avatar {
    width: 40px; height: 40px;
    border-radius: 50%;
    display: flex; align-items: center; justify-content: center;
    font-family: 'Sora', sans-serif;
    font-size: 0.8rem;
    font-weight: 800;
    color: #fff;
    flex-shrink: 0;
  }
  .t-name { font-weight: 600; font-size: 0.9rem; color: var(--text); }
  .t-role { font-size: 0.78rem; color: var(--text3); }

  /* ─── PRICING ─── */
  .pricing-section { background: var(--bg); padding: 120px 5%; }
  .pricing-cards {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
    gap: 32px;
    max-width: 1200px;
    margin: 0 auto;
  }
  .pricing-card {
    background: #fff;
    border: 1px solid var(--border);
    border-radius: var(--radius-xl);
    padding: 48px;
    position: relative;
    transition: all 0.4s cubic-bezier(0.2, 0.8, 0.2, 1);
    display: flex;
    flex-direction: column;
  }
  .pricing-card.featured {
    border: 2px solid var(--accent);
    background: #fff;
    box-shadow: 0 30px 60px rgba(79,70,229,0.1);
    transform: scale(1.05);
    z-index: 2;
  }
  .pricing-card:hover { transform: translateY(-12px); }
  .pricing-card.featured:hover { transform: translateY(-12px) scale(1.05); }
  
  .popular-badge {
    position: absolute; top: -16px; left: 50%; transform: translateX(-50%);
    background: var(--accent);
    color: #fff;
    font-size: 0.85rem;
    font-weight: 700;
    padding: 6px 20px;
    border-radius: 100px;
    white-space: nowrap;
    box-shadow: 0 4px 12px rgba(79,70,229,0.3);
  }
  .pricing-plan-name {
    font-size: 1.4rem;
    font-weight: 800;
    color: var(--text);
    margin-bottom: 12px;
  }
  .pricing-plan-desc { font-size: 1rem; color: var(--text2); margin-bottom: 32px; }
  .pricing-amount {
    display: flex; align-items: baseline; gap: 4px;
    margin-bottom: 40px;
  }
  .currency { font-size: 1.5rem; font-weight: 700; color: var(--text); }
  .price { font-size: 4rem; font-weight: 800; color: var(--text); letter-spacing: -0.04em; }
  .period { font-size: 1rem; color: var(--text3); font-weight: 600; }
  
  .pricing-btn {
    width: 100%;
    padding: 16px;
    border-radius: 12px;
    font-family: var(--font-main);
    font-size: 1.05rem;
    font-weight: 700;
    cursor: pointer;
    transition: all 0.3s;
    margin-bottom: 40px;
    text-align: center;
    text-decoration: none;
    display: block;
  }
  .pricing-btn-primary {
    background: var(--accent);
    color: #fff;
    box-shadow: 0 10px 20px rgba(79,70,229,0.2);
  }
  .pricing-btn-primary:hover { background: var(--accent-hover); transform: translateY(-2px); box-shadow: 0 15px 30px rgba(79,70,229,0.3); }
  .pricing-btn-ghost {
    background: var(--bg2);
    color: var(--text);
    border: 1px solid var(--border);
  }
  .pricing-btn-ghost:hover { background: var(--bg3); border-color: var(--text3); }

  .pricing-features { list-style: none; display: flex; flex-direction: column; gap: 16px; margin-top: auto; }
  .pricing-features li {
    display: flex; align-items: center; gap: 12px;
    font-size: 1rem;
    color: var(--text2);
    font-weight: 500;
  }
  .check-icon { 
    width: 20px; height: 20px;
    background: var(--teal-dim);
    color: var(--teal);
    border-radius: 50%;
    display: flex; align-items: center; justify-content: center;
    font-size: 0.7rem;
    flex-shrink: 0;
  }

  /* ─── CTA BANNER ─── */
  .cta-section {
    padding: 140px 5%;
    background: var(--text);
    color: #fff;
    text-align: center;
    position: relative;
    overflow: hidden;
  }
  .cta-bg {
    position: absolute; inset: 0;
    background: radial-gradient(circle at 70% 30%, rgba(79,70,229,0.15) 0%, transparent 50%),
                radial-gradient(circle at 30% 70%, rgba(13,148,136,0.1) 0%, transparent 50%);
    opacity: 0.6;
  }
  .cta-box h2 {
    font-size: clamp(2.5rem, 6vw, 4rem);
    margin-bottom: 24px;
    color: #fff;
  }
  .cta-box p { font-size: 1.25rem; color: var(--text3); margin-bottom: 48px; max-width: 600px; margin-left: auto; margin-right: auto; }
  
  /* ─── FOOTER ─── */
  footer {
    background: #fff;
    border-top: 1px solid var(--border);
    padding: 100px 5% 40px;
  }
  .footer-grid {
    display: grid;
    grid-template-columns: 2fr 1fr 1fr 1fr;
    gap: 40px;
    margin-bottom: 50px;
  }
  .footer-brand p {
    font-size: 0.875rem;
    color: var(--text3);
    line-height: 1.7;
    margin: 14px 0 24px;
    max-width: 260px;
  }
  .footer-socials { display: flex; gap: 10px; }
  .social-btn {
    width: 36px; height: 36px;
    border-radius: 8px;
    background: var(--surface);
    border: 1px solid var(--border);
    display: flex; align-items: center; justify-content: center;
    color: var(--text3);
    text-decoration: none;
    font-size: 0.9rem;
    transition: all 0.2s;
  }
  .social-btn:hover { border-color: var(--accent); color: var(--accent); }
  .footer-col h5 {
    font-family: 'Sora', sans-serif;
    font-size: 0.875rem;
    font-weight: 700;
    color: var(--text);
    margin-bottom: 18px;
  }
  .footer-links { list-style: none; display: flex; flex-direction: column; gap: 10px; }
  .footer-links a {
    font-size: 0.875rem;
    color: var(--text3);
    text-decoration: none;
    transition: color 0.2s;
  }
  .footer-links a:hover { color: var(--text); }
  .footer-bottom {
    border-top: 1px solid var(--border);
    padding-top: 28px;
    display: flex; justify-content: space-between; align-items: center;
    flex-wrap: wrap; gap: 12px;
  }
  .footer-bottom p { font-size: 0.8rem; color: var(--text3); }
  .footer-bottom a { color: var(--accent2); text-decoration: none; }

  /* ─── ANIMATIONS ─── */
  @keyframes fadeInUp {
    from { opacity: 0; transform: translateY(24px); }
    to { opacity: 1; transform: translateY(0); }
  }
  .fade-up { animation: fadeInUp 0.6s ease forwards; }
  .delay-1 { animation-delay: 0.1s; opacity: 0; }
  .delay-2 { animation-delay: 0.2s; opacity: 0; }
  .delay-3 { animation-delay: 0.3s; opacity: 0; }
  .delay-4 { animation-delay: 0.4s; opacity: 0; }

  /* ─── RESPONSIVE ─── */
  @media (max-width: 900px) {
    .nav-links { display: none; }
    .role-content { grid-template-columns: 1fr; gap: 40px; }
    .role-visual { order: -1; }
    .footer-grid { grid-template-columns: 1fr 1fr; }
    .dashboard-inner { grid-template-columns: 1fr; height: auto; }
    .dash-sidebar { display: none; }
    .dash-cards { grid-template-columns: repeat(2,1fr); }
    .dash-grid2 { grid-template-columns: 1fr; }
  }
  @media (max-width: 600px) {
    section { padding: 70px 5%; }
    .hero-cta, .cta-actions { flex-direction: column; gap: 12px; width: 100%; max-width: 400px; margin-left: auto; margin-right: auto; }
    .btn-hero-primary, .btn-hero-ghost { width: 100%; justify-content: center; }
    .hero-stats { gap: 24px; }
    .hero-stat-sep { display: none; }
    
    /* Footer Fix: Platform & Company in same row */
    .footer-grid { grid-template-columns: repeat(2, 1fr); gap: 30px; }
    .footer-brand { grid-column: span 2; margin-bottom: 20px; }
    
    /* Dashboard Mobile Fix */
    .dashboard-preview { padding-bottom: 60px; }
    .dashboard-topbar { padding: 10px 15px; gap: 6px; }
    .dashboard-url { margin: 0 10px; font-size: 0.75rem; padding: 4px 0; }
    .dot { width: 8px; height: 8px; }
    .dash-main { padding: 20px; }
     .dash-cards { grid-template-columns: repeat(2, 1fr); gap: 10px; }
     .dash-card { padding: 12px; }
     .dash-card-label { font-size: 0.65rem; }
     .dash-card-val { font-size: 1.2rem; }
     .dash-card-delta { font-size: 0.65rem; }
     .dash-grid2 { gap: 15px; }
     .dash-chart-box { padding: 15px; }
     .chart-bars { height: 80px; gap: 6px; }
     .dash-recent-item { padding: 6px; }
     .dash-avatar { width: 28px; height: 28px; font-size: 0.7rem; }

     /* Pricing Mobile Fix */
     .pricing-card { padding: 32px; }
     .pricing-card.featured { transform: none; box-shadow: none; }
     .price { font-size: 2.8rem; }
     .pricing-plan-name { font-size: 1.2rem; }
     .currency { font-size: 1.2rem; }
   }
</style>
</head>
<body>

<!-- NAV -->
<nav>
  <a class="nav-logo" href="#">LMS<span>PRO</span></a>
  <ul class="nav-links">
    <li><a href="#">Features</a></li>
    <li><a href="#">Modules</a></li>
    <li><a href="#">Catalog</a></li>
    <li><a href="#">Pricing</a></li>
  </ul>
  <div class="nav-actions">
    <!-- <a href="#" class="btn-ghost">Sign In</a>
    <a href="#" class="btn-primary">Join Now</a> -->
  </div>
</nav>

<!-- HERO -->
<section class="hero">
  <div class="hero-grid-bg"></div>
  <div class="hero-orb hero-orb-1"></div>
  <div class="hero-orb hero-orb-2"></div>

  <div class="hero-badge fade-up">
    <span class="hero-badge-dot"></span>
    Now Live — Smart Attendance &amp; LinkedIn Sync
  </div>

  <h1 class="fade-up delay-1">
    Everything your academy needs,<br>
    <span class="highlight">in one simple platform.</span>
  </h1>

  <p class="hero-sub fade-up delay-2">
    Run your classes, manage your teachers, and collect payments without the headache. Built to make online teaching feel natural and effortless.
  </p>

    <div class="hero-cta fade-up delay-3">
      <a href="https://slategrey-trout-786905.hostingersite.com/pricing" class="btn-hero-primary">Start Building Free</a>
      <a href="#" class="btn-hero-ghost">
        <span class="play-icon"><i class="fa-solid fa-play"></i></span>
        Watch 2-min Demo
      </a>
    </div>

  <div class="hero-stats fade-up delay-4">
    <div class="hero-stat-item">
      <span class="hero-stat-num">12K+</span>
      <span class="hero-stat-label">Active Students</span>
    </div>
    <div class="hero-stat-sep"></div>
    <div class="hero-stat-item">
      <span class="hero-stat-num">94%</span>
      <span class="hero-stat-label">Completion Rate</span>
    </div>
    <div class="hero-stat-sep"></div>
    <div class="hero-stat-item">
      <span class="hero-stat-num">500+</span>
      <span class="hero-stat-label">Courses Launched</span>
    </div>
    <div class="hero-stat-sep"></div>
    <div class="hero-stat-item">
      <span class="hero-stat-num">40%</span>
      <span class="hero-stat-label">Ops Cost Saved</span>
    </div>
  </div>
</section>

<!-- DASHBOARD PREVIEW -->
<div class="dashboard-preview">
  <div class="dashboard-frame">
    <div class="dashboard-topbar">
      <span class="dot dot-r"></span>
      <span class="dot dot-y"></span>
      <span class="dot dot-g"></span>
      <span class="dashboard-url">app.lmspro.com/admin/dashboard</span>
    </div>
    <div class="dashboard-inner">
      <div class="dash-sidebar">
        <div class="dash-logo">LMS<span>PRO</span></div>
        <div class="dash-nav-item active"><span class="dash-icon"></span>Dashboard</div>
        <div class="dash-nav-item"><span class="dash-icon"></span>Courses</div>
        <div class="dash-nav-item"><span class="dash-icon"></span>Students</div>
        <div class="dash-nav-item"><span class="dash-icon"></span>Instructors</div>
        <div class="dash-nav-item"><span class="dash-icon"></span>Attendance</div>
        <div class="dash-nav-item"><span class="dash-icon"></span>Fee Hub</div>
        <div class="dash-nav-item"><span class="dash-icon"></span>Analytics</div>
        <div class="dash-nav-item"><span class="dash-icon"></span>Settings</div>
      </div>
      <div class="dash-main">
        <div class="dash-greeting">Good morning, Admin <i class="fa-solid fa-hand" style="color: #FFBD2E; font-size: 1.2rem;"></i></div>
        <div class="dash-sub">Here's what's happening in your academy today.</div>
        <div class="dash-cards">
          <div class="dash-card">
            <div class="dash-card-label">Active Students</div>
            <div class="dash-card-val">1,420</div>
            <div class="dash-card-delta">↑ 12% this week</div>
          </div>
          <div class="dash-card">
            <div class="dash-card-label">Live Batches</div>
            <div class="dash-card-val">32</div>
            <div class="dash-card-delta">↑ 4 new today</div>
          </div>
          <div class="dash-card">
            <div class="dash-card-label">Revenue (Month)</div>
            <div class="dash-card-val">₹2.4L</div>
            <div class="dash-card-delta">↑ 18% vs last</div>
          </div>
          <div class="dash-card">
            <div class="dash-card-label">Avg Quiz Score</div>
            <div class="dash-card-val">88%</div>
            <div class="dash-card-delta">↑ 3pts improved</div>
          </div>
        </div>
        <div class="dash-grid2">
          <div class="dash-chart-box">
            <div class="dash-chart-title">Enrollment Trend</div>
            <div class="chart-bars">
              <div class="bar" style="height:40%"></div>
              <div class="bar" style="height:55%"></div>
              <div class="bar" style="height:45%"></div>
              <div class="bar" style="height:70%"></div>
              <div class="bar" style="height:60%"></div>
              <div class="bar" style="height:85%"></div>
              <div class="bar active" style="height:100%"></div>
            </div>
          </div>
          <div class="dash-chart-box">
            <div class="dash-chart-title">Recent Enrollments</div>
            <div class="dash-recent-list">
              <div class="dash-recent-item">
                <div class="dash-avatar" style="background:#3B7DFF">AR</div>
                <span class="dash-ri-name">Alex Rivers</span>
                <span class="dash-ri-badge badge-green">Active</span>
              </div>
              <div class="dash-recent-item">
                <div class="dash-avatar" style="background:#0FCFB3">SJ</div>
                <span class="dash-ri-name">Sarah Jenkins</span>
                <span class="dash-ri-badge badge-blue">New</span>
              </div>
              <div class="dash-recent-item">
                <div class="dash-avatar" style="background:#A78BFA">MK</div>
                <span class="dash-ri-name">Michael K.</span>
                <span class="dash-ri-badge badge-amber">Pending</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- ROLE SECTION -->
<section class="role-section">
  <div class="text-center">
    <span class="section-label">Built for everyone</span>
    <h2 class="section-title text-center">Clear dashboards for admins, teachers &amp; students</h2>
    <p class="section-sub text-center">Every role gets a purpose-built workspace. No clutter, no confusion.</p>
  </div>

  <div class="role-tabs">
    <button class="role-tab active" onclick="switchRole('admin', this)">Admin</button>
    <button class="role-tab" onclick="switchRole('tutor', this)">Tutor</button>
    <button class="role-tab" onclick="switchRole('student', this)">Student</button>
  </div>

  <div id="role-admin" class="role-content active">
    <div class="role-feature-list">
      <div class="role-feature">
        <div class="role-feature-icon"><i class="fa-solid fa-credit-card"></i></div>
        <div class="role-feature-text">
          <h4>Global Fee &amp; Split Payment Processing</h4>
          <p>Automate invoicing, split revenue with co-teachers, and manage coupon campaigns — all from one place.</p>
        </div>
      </div>
      <div class="role-feature">
        <div class="role-feature-icon"><i class="fa-solid fa-users-gear"></i></div>
        <div class="role-feature-text">
          <h4>Multi-Tutor Orchestration</h4>
          <p>Assign multiple instructors to any batch, manage permissions, and enable seamless co-teaching workflows.</p>
        </div>
      </div>
      <div class="role-feature">
        <div class="role-feature-icon"><i class="fa-solid fa-chart-pie"></i></div>
        <div class="role-feature-text">
          <h4>Advanced Analytics &amp; Reports</h4>
          <p>Track enrollments, revenue, completion rates, and quiz performance with exportable dashboards.</p>
        </div>
      </div>
      <a href="https://slategrey-trout-786905.hostingersite.com/demo/public/auto-login/admin" class="role-demo-link" target="_blank">Open Admin Console <i class="fa-solid fa-arrow-right"></i></a>
    </div>
    <div class="role-visual">
      <div class="role-visual-title">Academy Control Panel</div>
      <div style="display:flex;flex-direction:column;gap:12px">
        <div style="background:var(--bg3);border-radius:8px;padding:14px;display:flex;justify-content:space-between;align-items:center">
          <span style="font-size:0.85rem;color:var(--text2)">Academy Share (60%)</span>
          <span style="font-family:'Sora',sans-serif;font-weight:700;color:var(--teal)">₹7,470</span>
        </div>
        <div style="background:var(--bg3);border-radius:8px;padding:14px;display:flex;justify-content:space-between;align-items:center">
          <span style="font-size:0.85rem;color:var(--text2)">Lead Trainer Share (30%)</span>
          <span style="font-family:'Sora',sans-serif;font-weight:700;color:var(--accent2)">₹3,735</span>
        </div>
        <div style="background:var(--bg3);border-radius:8px;padding:14px;display:flex;justify-content:space-between;align-items:center">
          <span style="font-size:0.85rem;color:var(--text2)">Co-Tutor Share (10%)</span>
          <span style="font-family:'Sora',sans-serif;font-weight:700;color:var(--text2)">₹1,245</span>
        </div>
        <div style="background:rgba(59,125,255,0.06);border:1px solid rgba(59,125,255,0.15);border-radius:8px;padding:12px;margin-top:4px;display:flex;align-items:center;gap:10px">
          <i class="fa-solid fa-circle-check" style="color:var(--accent2);font-size:0.9rem"></i>
          <span style="font-size:0.78rem;color:var(--accent2)">EDU20 · Stripe sync enabled</span>
        </div>
      </div>
    </div>
  </div>

  <div id="role-tutor" class="role-content">
    <div class="role-feature-list">
      <div class="role-feature">
        <div class="role-feature-icon"><i class="fa-solid fa-video"></i></div>
        <div class="role-feature-text">
          <h4>Real-time Live Class Sync</h4>
          <p>Seamlessly run live sessions with Zoom or Google Meet, with auto-recording and instant replay access.</p>
        </div>
      </div>
      <div class="role-feature">
        <div class="role-feature-icon"><i class="fa-solid fa-clipboard-user"></i></div>
        <div class="role-feature-text">
          <h4>Automated Attendance Tracking</h4>
          <p>Know who joined, how long they stayed, and get instant reports without ever taking roll call.</p>
        </div>
      </div>
      <div class="role-feature">
        <div class="role-feature-icon"><i class="fa-solid fa-folder-tree"></i></div>
        <div class="role-feature-text">
          <h4>Content &amp; PDF Asset Management</h4>
          <p>Upload videos, PDFs, and notes. Organize your course content with an intuitive drag-and-drop builder.</p>
        </div>
      </div>
      <a href="https://slategrey-trout-786905.hostingersite.com/demo/public/auto-login/tutor" class="role-demo-link" target="_blank">Open Tutor Dashboard <i class="fa-solid fa-arrow-right"></i></a>
    </div>
    <div class="role-visual">
      <div class="role-visual-title">Live Session Dashboard</div>
      <div style="display:flex;flex-direction:column;gap:10px">
        <div style="background:var(--bg3);border-radius:8px;padding:14px">
          <div style="font-size:0.78rem;color:var(--text3);margin-bottom:10px;text-transform:uppercase;letter-spacing:.05em">Web Systems Batch — Live</div>
          <div style="display:flex;gap:20px">
            <div><div style="font-family:'Sora',sans-serif;font-size:1.6rem;font-weight:800;color:var(--text)">98%</div><div style="font-size:0.72rem;color:var(--text3)">Present</div></div>
            <div><div style="font-family:'Sora',sans-serif;font-size:1.6rem;font-weight:800;color:var(--teal)">1,420</div><div style="font-size:0.72rem;color:var(--text3)">Active</div></div>
            <div><div style="font-family:'Sora',sans-serif;font-size:1.6rem;font-weight:800;color:var(--accent2)">32</div><div style="font-size:0.72rem;color:var(--text3)">Batches</div></div>
          </div>
        </div>
        <div style="display:flex;flex-direction:column;gap:8px">
          <div style="background:var(--bg3);border-radius:8px;padding:12px;display:flex;align-items:center;justify-content:space-between">
            <div style="display:flex;align-items:center;gap:10px"><div style="width:28px;height:28px;border-radius:50%;background:var(--accent);display:flex;align-items:center;justify-content:center;font-size:.65rem;font-weight:700;color:white">AR</div><span style="font-size:0.85rem;color:var(--text)">Alex Rivers</span></div>
            <span style="font-size:0.78rem;color:var(--teal)"><i class="fa-solid fa-circle" style="font-size:6px;vertical-align:middle;margin-right:4px"></i> Active</span>
          </div>
          <div style="background:var(--bg3);border-radius:8px;padding:12px;display:flex;align-items:center;justify-content:space-between">
            <div style="display:flex;align-items:center;gap:10px"><div style="width:28px;height:28px;border-radius:50%;background:var(--teal);display:flex;align-items:center;justify-content:center;font-size:.65rem;font-weight:700;color:white">SJ</div><span style="font-size:0.85rem;color:var(--text)">Sarah Jenkins</span></div>
            <span style="font-size:0.78rem;color:var(--accent2)"><i class="fa-solid fa-circle" style="font-size:6px;vertical-align:middle;margin-right:4px"></i> Active</span>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div id="role-student" class="role-content">
    <div class="role-feature-list">
      <div class="role-feature">
        <div class="role-feature-icon"><i class="fa-solid fa-clapperboard"></i></div>
        <div class="role-feature-text">
          <h4>High-Def Live &amp; Recorded Content</h4>
          <p>Watch live lectures or catch up on recordings at your pace. Crisp HD quality, no buffering.</p>
        </div>
      </div>
      <div class="role-feature">
        <div class="role-feature-icon"><i class="fa-solid fa-award"></i></div>
        <div class="role-feature-text">
          <h4>Verified LinkedIn Certificate Sync</h4>
          <p>Earn verified certificates and post them directly to your LinkedIn profile in one click.</p>
        </div>
      </div>
      <div class="role-feature">
        <div class="role-feature-icon"><i class="fa-solid fa-stairs"></i></div>
        <div class="role-feature-text">
          <h4>Personal Portfolio &amp; Growth Path</h4>
          <p>Track your learning journey, celebrate milestones, and build a portfolio that showcases your growth.</p>
        </div>
      </div>
      <a href="https://slategrey-trout-786905.hostingersite.com/demo/public/auto-login/student" class="role-demo-link" target="_blank">Enter Student Hub <i class="fa-solid fa-arrow-right"></i></a>
    </div>
    <div class="role-visual">
      <div class="role-visual-title">Student Learning Hub</div>
      <div style="display:flex;flex-direction:column;gap:10px">
        <div style="background:var(--bg3);border-radius:8px;padding:14px">
          <div style="font-size:0.78rem;color:var(--text3);margin-bottom:8px">Current Course Progress</div>
          <div style="font-size:0.9rem;font-weight:600;color:var(--text);margin-bottom:8px">Web Systems Mastery</div>
          <div style="background:var(--surface2);border-radius:100px;height:6px;overflow:hidden">
            <div style="background:var(--accent);height:100%;width:68%;border-radius:100px"></div>
          </div>
          <div style="display:flex;justify-content:space-between;margin-top:6px"><span style="font-size:0.75rem;color:var(--text3)">68% complete</span><span style="font-size:0.75rem;color:var(--accent2)">14 / 20 lessons</span></div>
        </div>
        <div style="background:rgba(15,207,179,0.06);border:1px solid rgba(15,207,179,0.15);border-radius:8px;padding:12px;display:flex;align-items:center;gap:12px">
          <i class="fa-solid fa-medal" style="font-size:1.4rem;color:#FBBF24"></i>
          <div><div style="font-size:0.85rem;font-weight:600;color:var(--text)">Certificate Ready!</div><div style="font-size:0.75rem;color:var(--teal)">Sync to LinkedIn instantly</div></div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- PLATFORM CAPABILITIES -->
<section id="capabilities" class="role-section">
  <div class="text-center">
    <span class="section-label">Platform Capabilities</span>
    <h2 class="section-title text-center">The 6 Pillars of a Premium Academy</h2>
    <p class="section-sub text-center">We've focused on the high-impact features that actually drive growth, save time, and provide a world-class experience for your students.</p>
  </div>

  <div class="features-grid">
    <!-- Feature 1: Multi-Tutor -->
    <div class="feature-card">
      <div class="feature-tag">For Scaling</div>
      <div class="feature-icon fi-purple"><i class="fa-solid fa-users"></i></div>
      <h3>Multi-Tutor Orchestration</h3>
      <p>Assign multiple trainers to a single batch. Perfect for co-teaching models, guest lectures, and ensuring your classes never stop even if one tutor is away.</p>
    </div>

    <!-- Feature 2: LinkedIn Certs -->
    <div class="feature-card">
      <div class="feature-tag">For Students</div>
      <div class="feature-icon fi-blue"><i class="fa-solid fa-certificate"></i></div>
      <h3>LinkedIn Certificate Sync</h3>
      <p>One-click professional sharing. Students can post verified completion certificates directly to their LinkedIn feeds, driving organic growth for your brand.</p>
    </div>

    <!-- Feature 3: Attendance Audit -->
    <div class="feature-card">
      <div class="feature-tag">For Efficiency</div>
      <div class="feature-icon fi-green"><i class="fa-solid fa-clock"></i></div>
      <h3>Automated Attendance Audit</h3>
      <p>Zero manual roll calls. Track exactly when students join and export detailed engagement reports instantly for both live sessions and recorded classes.</p>
    </div>

    <!-- Feature 4: Smart Coupons -->
    <div class="feature-card">
      <div class="feature-tag">For Security</div>
      <div class="feature-icon fi-pink"><i class="fa-solid fa-ticket"></i></div>
      <h3>Student-Specific Coupons</h3>
      <p>Prevent discount leaks. Generate secure promo codes strictly linked to unique student accounts, ensuring your scholarship models stay private.</p>
    </div>

    <!-- Feature 5: Live Engine -->
    <div class="feature-card">
      <div class="feature-tag">For Teaching</div>
      <div class="feature-icon fi-amber"><i class="fa-solid fa-video"></i></div>
      <h3>Live Session Engine</h3>
      <p>Seamless Zoom &amp; Google Meet integration. Schedule and host live classes through the platform, with instant replay available for students who missed them.</p>
    </div>

    <!-- Feature 6: Fee Hub -->
    <div class="feature-card">
      <div class="feature-tag">For Business</div>
      <div class="feature-icon fi-teal"><i class="fa-solid fa-indian-rupee-sign"></i></div>
      <h3>Fee Hub &amp; Split Payments</h3>
      <p>Automate invoicing and split payments. Cross-reference PhonePe payments and automate payouts with clean, exportable bookkeeping.</p>
    </div>
  </div>

  <div class="features-grid hidden-modules" id="more-modules">
    <!-- Feature 7: Advanced Analytics -->
    <div class="feature-card">
      <div class="feature-tag">Admin</div>
      <div class="feature-icon fi-blue"><i class="fa-solid fa-chart-line"></i></div>
      <h3>Advanced Analytics Hub</h3>
      <p>Track real-time business metrics across active student cohorts, trainer performance, and registration conversion funnels.</p>
    </div>

    <!-- Feature 8: MCQ Assessments -->
    <div class="feature-card">
      <div class="feature-tag">Trainer</div>
      <div class="feature-icon fi-green"><i class="fa-solid fa-pen-to-square"></i></div>
      <h3>MCQ Assessment Engine</h3>
      <p>Build mandatory assessments with automated grading, time limits, and randomized question banks for secure testing.</p>
    </div>

    <!-- Feature 9: Admissions Pipeline -->
    <div class="feature-card">
      <div class="feature-tag">Admin</div>
      <div class="feature-icon fi-amber"><i class="fa-solid fa-file-invoice"></i></div>
      <h3>Admissions Pipeline</h3>
      <p>Audit and verify multi-step admissions forms with manual approval to route accepted students into active cohorts.</p>
    </div>

    <!-- Feature 10: Watch-Time Tracking -->
    <div class="feature-card">
      <div class="feature-tag">Trainer</div>
      <div class="feature-icon fi-pink"><i class="fa-solid fa-chart-bar"></i></div>
      <h3>Watch-Time Analytics</h3>
      <p>Detailed engagement reports showing exactly which students watched recorded classes, how much they completed, and where they dropped off.</p>
    </div>

    <!-- Feature 11: Curriculum Builder -->
    <!-- <div class="feature-card">
      <div class="feature-tag">Trainer</div>
      <div class="feature-icon fi-blue"><i class="fa-solid fa-book"></i></div>
      <h3>Recorded Course Management</h3>
      <p>Drag-and-drop sequencing for recorded lessons and YouTube-hosted video frameworks with an intuitive builder.</p>
    </div> -->

    <!-- Feature 12: Asset Management -->
    <div class="feature-card">
      <div class="feature-tag">Trainer</div>
      <div class="feature-icon fi-teal"><i class="fa-solid fa-folder-open"></i></div>
      <h3>Digital Asset Management</h3>
      <p>Centralized hub for uploading and linking PDFs, worksheets, and slide decks directly to specific lessons.</p>
    </div>

    <!-- Feature 13: Progress Tracking -->
    <div class="feature-card">
      <div class="feature-tag">Student</div>
      <div class="feature-icon fi-purple"><i class="fa-solid fa-laptop-code"></i></div>
      <h3>Visual Progress Tracking</h3>
      <p>Dynamic progress bars and milestone markers that help students stay motivated and on track throughout their coursework.</p>
    </div>

    <!-- Feature 14: Assignment Submissions -->
    <div class="feature-card">
      <div class="feature-tag">Student</div>
      <div class="feature-icon fi-blue"><i class="fa-solid fa-file-arrow-up"></i></div>
      <h3>Assignment Submissions</h3>
      <p>Students can upload and submit assignments directly through the platform, with status tracking and trainer feedback on each submission.</p>
    </div>

    <!-- Feature 15: Resource Monitoring -->
    <div class="feature-card">
      <div class="feature-tag">Admin</div>
      <div class="feature-icon fi-teal"><i class="fa-solid fa-gears"></i></div>
      <h3>Resource Monitoring</h3>
      <p>Central dashboard to monitor storage limits, database health, and API usage for Zoom and PhonePe.</p>
    </div>

    <!-- Feature 16: User Controls -->
    <div class="feature-card">
      <div class="feature-tag">Admin</div>
      <div class="feature-icon fi-purple"><i class="fa-solid fa-user-shield"></i></div>
      <h3>System User Controls</h3>
      <p>Full administrative rights for password resets, account locking, and trainer permission management.</p>
    </div>
  </div>

  <div class="text-center" style="margin-top: 24px;">
    <button onclick="toggleModules(this)" class="btn-hero-primary" id="explore-btn">Explore All 15+ Modules</button>
  </div>
</section>

<!-- INTEGRATIONS -->
<section class="integrations-section">
  <div class="text-center">
    <span class="section-label">Integrations</span>
    <h2 class="section-title text-center">Integrated with your favorite tools</h2>
    <p class="section-sub text-center">Connect instantly to top virtual meeting platforms and secure payment processors.</p>
  </div>
  <div class="integrations-grid">
    <div class="integration-pill"><span class="integration-pill-icon"><i class="fa-solid fa-video"></i></span>Zoom</div>
    <div class="integration-pill"><span class="integration-pill-icon"><i class="fa-solid fa-camera"></i></span>Google Meet</div>
    <div class="integration-pill"><span class="integration-pill-icon"><i class="fa-solid fa-school"></i></span>Google Classroom</div>
    <div class="integration-pill"><span class="integration-pill-icon"><i class="fa-brands fa-paypal"></i></span>PayPal</div>
    <div class="integration-pill"><span class="integration-pill-icon"><i class="fa-solid fa-mobile-screen"></i></span>PhonePe</div>
    <div class="integration-pill"><span class="integration-pill-icon"><i class="fa-solid fa-money-bill-transfer"></i></span>Razorpay</div>
    <div class="integration-pill"><span class="integration-pill-icon"><i class="fa-brands fa-stripe"></i></span>Stripe</div>
    <div class="integration-pill"><span class="integration-pill-icon"><i class="fa-brands fa-linkedin"></i></span>LinkedIn</div>
    <div class="integration-pill"><span class="integration-pill-icon"><i class="fa-solid fa-robot"></i></span>OpenAI</div>
  </div>
</section>

<!-- TESTIMONIALS -->
<section class="testimonials-section">
  <div class="text-center">
    <span class="section-label">Community Love</span>
    <h2 class="section-title text-center">Hear from our community</h2>
    <p class="section-sub text-center">Join the growing number of academies and tutors who love teaching on our platform.</p>
  </div>
  <div class="testimonials-grid">
    <div class="testimonial-card">
      <div class="stars">
        <i class="fa-solid fa-star"></i>
        <i class="fa-solid fa-star"></i>
        <i class="fa-solid fa-star"></i>
        <i class="fa-solid fa-star"></i>
        <i class="fa-solid fa-star"></i>
      </div>
      <p class="testimonial-text">"Switching to LMS Pro reduced our operational overhead by 40%. The multi-tutor assignment and automated fee splits changed how we manage our entire coding boot camp."</p>
      <div class="testimonial-author">
        <div class="t-avatar" style="background:var(--accent)">AR</div>
        <div>
          <div class="t-name">Alex Rivers</div>
          <div class="t-role">Founder, DevAcademy</div>
        </div>
      </div>
    </div>
    <div class="testimonial-card">
      <div class="stars">
        <i class="fa-solid fa-star"></i>
        <i class="fa-solid fa-star"></i>
        <i class="fa-solid fa-star"></i>
        <i class="fa-solid fa-star"></i>
        <i class="fa-solid fa-star"></i>
      </div>
      <p class="testimonial-text">"The Course Builder and dynamic Quiz features keep our students highly engaged. Having everything — including low-latency live lectures — in one custom white-labeled app is incredible."</p>
      <div class="testimonial-author">
        <div class="t-avatar" style="background:var(--teal)">SJ</div>
        <div>
          <div class="t-name">Sarah Jenkins</div>
          <div class="t-role">Head of Education, LinguaSpace</div>
        </div>
      </div>
    </div>
    <div class="testimonial-card">
      <div class="stars">
        <i class="fa-solid fa-star"></i>
        <i class="fa-solid fa-star"></i>
        <i class="fa-solid fa-star"></i>
        <i class="fa-solid fa-star"></i>
        <i class="fa-solid fa-star"></i>
      </div>
      <p class="testimonial-text">"LinkedIn certificate syncing is a huge selling point for our professional programs. Students love showing off their verified accomplishments the moment they complete a course."</p>
      <div class="testimonial-author">
        <div class="t-avatar" style="background:#A78BFA">MK</div>
        <div>
          <div class="t-name">Michael K.</div>
          <div class="t-role">Director of Tech Programs, Upskill</div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- PRICING -->
<section class="pricing-section">
  <div class="text-center">
    <span class="section-label">Pricing</span>
    <h2 class="section-title text-center">Simple, transparent pricing</h2>
    <p class="section-sub text-center">No hidden fees, no platform cut from your revenue. Just one clear plan for your academy.</p>
  </div>
  <div class="pricing-cards">
    <div class="pricing-card">
      <div class="pricing-plan-name">Free</div>
      <div class="pricing-plan-desc">For exploring the platform</div>
      <div class="pricing-amount">
        <span class="currency">$</span>
        <span class="price">0</span>
        <span class="period">/month</span>
      </div>
      <ul class="pricing-features" style="margin-bottom: 30px;">
        <li><div class="check-icon"><i class="fa-solid fa-check"></i></div> 5 Students</li>
        <li><div class="check-icon"><i class="fa-solid fa-check"></i></div> 1 Trainer Account</li>
        <li><div class="check-icon"><i class="fa-solid fa-check"></i></div> 1 Course &amp; 1 Batch</li>
        <li><div class="check-icon"><i class="fa-solid fa-check"></i></div> 1 GB Storage</li>
      </ul>
      <a href="#" class="pricing-btn pricing-btn-ghost" style="margin-top: auto;">Get Started</a>
    </div>
    
    <div class="pricing-card">
      <div class="pricing-plan-name">Starter</div>
      <div class="pricing-plan-desc">For new academies</div>
      <div class="pricing-amount">
        <span class="currency">$</span>
        <span class="price">19</span>
        <span class="period">/month</span>
      </div>
      <ul class="pricing-features" style="margin-bottom: 30px;">
        <li><div class="check-icon"><i class="fa-solid fa-check"></i></div> 50 Students</li>
        <li><div class="check-icon"><i class="fa-solid fa-check"></i></div> 2 Trainer Accounts</li>
        <li><div class="check-icon"><i class="fa-solid fa-check"></i></div> 3 Courses &amp; 5 Batches</li>
        <li><div class="check-icon"><i class="fa-solid fa-check"></i></div> 5 GB Storage</li>
      </ul>
      <a href="#" class="pricing-btn pricing-btn-ghost" style="margin-top: auto;">Get Started</a>
    </div>

    <div class="pricing-card">
      <div class="pricing-plan-name">Growth</div>
      <div class="pricing-plan-desc">For growing academies</div>
      <div class="pricing-amount">
        <span class="currency">$</span>
        <span class="price">49</span>
        <span class="period">/month</span>
      </div>
      <ul class="pricing-features" style="margin-bottom: 30px;">
        <li><div class="check-icon"><i class="fa-solid fa-check"></i></div> 200 Students</li>
        <li><div class="check-icon"><i class="fa-solid fa-check"></i></div> 10 Trainer Accounts</li>
        <li><div class="check-icon"><i class="fa-solid fa-check"></i></div> Zoom Integration</li>
        <li><div class="check-icon"><i class="fa-solid fa-check"></i></div> White-label Cert</li>
      </ul>
      <a href="#" class="pricing-btn pricing-btn-ghost" style="margin-top: auto;">Get Started</a>
    </div>

    <div class="pricing-card featured">
      <div class="popular-badge">Most Popular</div>
      <div class="pricing-plan-name">Academy</div>
      <div class="pricing-plan-desc">For established institutions</div>
      <div class="pricing-amount">
        <span class="currency">$</span>
        <span class="price">99</span>
        <span class="period">/month</span>
      </div>
      <ul class="pricing-features" style="margin-bottom: 30px;">
        <li><div class="check-icon"><i class="fa-solid fa-check"></i></div> 500 Students</li>
        <li><div class="check-icon"><i class="fa-solid fa-check"></i></div> Unlimited Trainers</li>
        <li><div class="check-icon"><i class="fa-solid fa-check"></i></div> Unlimited Courses</li>
        <li><div class="check-icon"><i class="fa-solid fa-check"></i></div> Priority Support</li>
      </ul>
      <a href="#" class="pricing-btn pricing-btn-primary" style="margin-top: auto;">Get Started</a>
    </div>

    <div class="pricing-card">
      <div class="pricing-plan-name">Enterprise</div>
      <div class="pricing-plan-desc">For large-scale operations</div>
      <div class="pricing-amount">
        <span class="price" style="font-size:2rem;line-height:1.4">Custom</span>
      </div>
      <ul class="pricing-features" style="margin-bottom: 30px;">
        <li><div class="check-icon"><i class="fa-solid fa-check"></i></div> Custom Students</li>
        <li><div class="check-icon"><i class="fa-solid fa-check"></i></div> Custom Domain</li>
        <li><div class="check-icon"><i class="fa-solid fa-check"></i></div> Dedicated Server</li>
        <li><div class="check-icon"><i class="fa-solid fa-check"></i></div> 24/7 Priority Support</li>
      </ul>
      <a href="#" class="pricing-btn pricing-btn-ghost" style="margin-top: auto;">Contact Sales</a>
    </div>
  </div>

  <!-- Comparison Table -->
  <div class="pricing-table-container">
    <h3 style="text-align:center; font-size: 2rem; margin: 60px 0 30px; font-weight: 800;">Compare Plans</h3>
    <div class="table-responsive">
      <table class="pricing-table">
        <thead>
          <tr>
            <th>Feature</th>
            <th>Free</th>
            <th>Starter $19/mo</th>
            <th>Growth $49/mo</th>
            <th>Academy $99/mo</th>
            <th>Enterprise</th>
          </tr>
        </thead>
        <tbody>
          <tr><td>Students</td><td>5</td><td>50</td><td>200</td><td>500</td><td>Custom</td></tr>
          <tr><td>Trainer Accounts</td><td>1</td><td>2</td><td>10</td><td>Unlimited</td><td>Unlimited</td></tr>
          <tr><td>Courses</td><td>1</td><td>3</td><td>10</td><td>Unlimited</td><td>Unlimited</td></tr>
          <tr><td>Batches</td><td>1</td><td>5</td><td>20</td><td>Unlimited</td><td>Unlimited</td></tr>
          <tr><td>Storage</td><td>1 GB</td><td>5 GB</td><td>20 GB</td><td>100 GB</td><td>Custom</td></tr>
          <tr><td>Live Sessions/mo</td><td>5</td><td>30</td><td>Unlimited</td><td>Unlimited</td><td>Unlimited</td></tr>
          <tr><td>White-label Cert</td><td><i class="fa-solid fa-xmark" style="color:#EF4444; font-weight:900; font-size:1.1rem;"></i></td><td><i class="fa-solid fa-xmark" style="color:#EF4444; font-weight:900; font-size:1.1rem;"></i></td><td><i class="fa-solid fa-check" style="color:#22C55E; font-weight:900; font-size:1.1rem;"></i></td><td><i class="fa-solid fa-check" style="color:#22C55E; font-weight:900; font-size:1.1rem;"></i></td><td><i class="fa-solid fa-check" style="color:#22C55E; font-weight:900; font-size:1.1rem;"></i></td></tr>
          <tr><td>Zoom Integration</td><td><i class="fa-solid fa-xmark" style="color:#EF4444; font-weight:900; font-size:1.1rem;"></i></td><td><i class="fa-solid fa-xmark" style="color:#EF4444; font-weight:900; font-size:1.1rem;"></i></td><td><i class="fa-solid fa-check" style="color:#22C55E; font-weight:900; font-size:1.1rem;"></i></td><td><i class="fa-solid fa-check" style="color:#22C55E; font-weight:900; font-size:1.1rem;"></i></td><td><i class="fa-solid fa-check" style="color:#22C55E; font-weight:900; font-size:1.1rem;"></i></td></tr>
          <tr><td>Custom Domain</td><td><i class="fa-solid fa-xmark" style="color:#EF4444; font-weight:900; font-size:1.1rem;"></i></td><td><i class="fa-solid fa-xmark" style="color:#EF4444; font-weight:900; font-size:1.1rem;"></i></td><td><i class="fa-solid fa-xmark" style="color:#EF4444; font-weight:900; font-size:1.1rem;"></i></td><td><i class="fa-solid fa-xmark" style="color:#EF4444; font-weight:900; font-size:1.1rem;"></i></td><td><i class="fa-solid fa-check" style="color:#22C55E; font-weight:900; font-size:1.1rem;"></i></td></tr>
          <tr><td>Priority Support</td><td><i class="fa-solid fa-xmark" style="color:#EF4444; font-weight:900; font-size:1.1rem;"></i></td><td><i class="fa-solid fa-xmark" style="color:#EF4444; font-weight:900; font-size:1.1rem;"></i></td><td><i class="fa-solid fa-xmark" style="color:#EF4444; font-weight:900; font-size:1.1rem;"></i></td><td><i class="fa-solid fa-check" style="color:#22C55E; font-weight:900; font-size:1.1rem;"></i></td><td><i class="fa-solid fa-check" style="color:#22C55E; font-weight:900; font-size:1.1rem;"></i></td></tr>
        </tbody>
      </table>
    </div>
  </div>
  
  <style>
    .pricing-table-container {
      max-width: 1100px;
      margin: 0 auto;
    }
    .table-responsive {
      overflow-x: auto;
      padding-bottom: 20px;
    }
    .pricing-table {
      width: 100%;
      border-collapse: collapse;
      background: #fff;
      border-radius: 12px;
      overflow: hidden;
      box-shadow: 0 4px 12px rgba(0,0,0,0.03);
      border: 1px solid var(--border);
      text-align: left;
      white-space: nowrap;
    }
    .pricing-table th, .pricing-table td {
      padding: 16px 20px;
      border-bottom: 1px solid var(--border);
    }
    .pricing-table th {
      background: var(--bg2);
      font-weight: 700;
      color: var(--text);
      font-size: 0.95rem;
    }
    .pricing-table td {
      font-size: 0.95rem;
      color: var(--text2);
    }
    .pricing-table td:first-child {
      font-weight: 700;
      color: var(--text);
      white-space: normal;
    }
    .pricing-table tbody tr:hover {
      background: var(--bg2);
    }
    
    @media (min-width: 1024px) {
        .pricing-cards {
            grid-template-columns: repeat(5, 1fr);
            gap: 20px;
        }
        .pricing-card {
            padding: 30px 20px;
        }
        .price {
            font-size: 2.5rem;
        }
        .pricing-btn {
            padding: 12px;
            font-size: 0.95rem;
        }
    }
  </style>
</section>

<!-- CTA BANNER -->
<section class="cta-section">
  <div class="cta-bg"></div>
  <div class="cta-box">
    <h2>Ready to upgrade your academy?</h2>
    <p>Join thousands of educators who've simplified their teaching with LMS Pro. Start free, scale as you grow.</p>
    <div class="cta-actions">
      <a href="https://slategrey-trout-786905.hostingersite.com/pricing" class="btn-hero-primary">Start Building Now</a>
      <a href="https://slategrey-trout-786905.hostingersite.com/" class="btn-hero-ghost">
        <span class="play-icon"><i class="fa-solid fa-play"></i></span>
        Watch Demo
      </a>
    </div>
  </div>
</section>

<!-- FOOTER -->
<footer>
  <div class="footer-grid">
    <div class="footer-brand">
      <a class="nav-logo" href="#">LMS<span>PRO</span></a>
      <p>The complete platform for modern education. Grow your academy without the stress.</p>
      <div class="footer-socials">
        <a href="#" class="social-btn"><i class="fa-brands fa-x-twitter"></i></a>
        <a href="#" class="social-btn"><i class="fa-brands fa-linkedin-in"></i></a>
        <a href="#" class="social-btn"><i class="fa-brands fa-youtube"></i></a>
        <a href="#" class="social-btn"><i class="fa-brands fa-facebook-f"></i></a>
      </div>
    </div>
    <div class="footer-col">
      <h5>Platform</h5>
      <ul class="footer-links">
        <li><a href="https://slategrey-trout-786905.hostingersite.com/feature/course-builder">Course Builder</a></li>
        <li><a href="https://slategrey-trout-786905.hostingersite.com/feature/quiz-builder">Quiz Builder</a></li>
        <li><a href="https://slategrey-trout-786905.hostingersite.com/feature/live-classes">Live Classes</a></li>
        <li><a href="https://slategrey-trout-786905.hostingersite.com/feature/smart-attendance">Smart Attendance</a></li>
        <li><a href="https://slategrey-trout-786905.hostingersite.com/feature/fee-hub">Fee Hub</a></li>
      </ul>
    </div>
    <div class="footer-col">
      <h5>Company</h5>
      <ul class="footer-links">
        <li><a href="#">About Us</a></li>
        <li><a href="#">Careers</a></li>
        <li><a href="#">Security</a></li>
        <li><a href="#">Terms</a></li>
        <li><a href="#">Partners</a></li>
      </ul>
    </div>
    <div class="footer-col">
      <h5>Resources</h5>
      <ul class="footer-links">
        <li><a href="https://slategrey-trout-786905.hostingersite.com/pricing">Pricing</a></li>
        <li><a href="#">Documentation</a></li>
        <li><a href="#">Blog</a></li>
        <li><a href="#">Support</a></li>
        <li><a href="#">Contact Sales</a></li>
      </ul>
    </div>
  </div>
  <div class="footer-bottom">
    <p>© 2026 LMS Pro SaaS | Powered by <a href="https://task19.com" target="_blank">Task19</a>. All rights reserved.</p>
    <p>Made with <i class="fa-solid fa-heart" style="color: #ef4444;"></i> for educators</p>
  </div>
</footer>

<script>
  // Navbar Scroll Effect
  window.addEventListener('scroll', () => {
    const nav = document.querySelector('nav');
    if (window.scrollY > 50) {
      nav.classList.add('scrolled');
    } else {
      nav.classList.remove('scrolled');
    }
  });

  // Toggle Modules Logic
  function toggleModules(btn) {
    const moreModules = document.getElementById('more-modules');
    const isActive = moreModules.classList.contains('active');
    
    if (!isActive) {
      moreModules.style.display = 'grid';
      // Force reflow
      moreModules.offsetHeight;
      moreModules.classList.add('active');
      btn.innerText = 'Show Fewer Modules';
    } else {
      moreModules.classList.remove('active');
      btn.innerText = 'Explore All 15+ Modules';
      // Wait for transition
      setTimeout(() => {
        if (!moreModules.classList.contains('active')) {
          moreModules.style.display = 'none';
        }
      }, 500);
    }
  }

  // Switch Role Logic
  function switchRole(role, btn) {
    // Update tabs
    document.querySelectorAll('.role-tab').forEach(t => t.classList.remove('active'));
    btn.classList.add('active');

    // Update content
    document.querySelectorAll('.role-content').forEach(c => c.classList.remove('active'));
    document.getElementById(`role-${role}`).classList.add('active');
  }
</script>

</body>
</html>
