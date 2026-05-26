<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>LMS Pro | Everything Your Academy Needs</title>
<link rel="preconnect" href="https://fonts.googleapis.com" />
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
<link href="https://fonts.googleapis.com/css2?family=Sora:wght@300;400;500;600;700;800&family=DM+Sans:ital,opsz,wght@0,9..40,300;0,9..40,400;0,9..40,500;1,9..40,400&display=swap" rel="stylesheet" />
<style>
  *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }

  :root {
    --bg: #04080F;
    --bg2: #0A1120;
    --bg3: #0F1A2E;
    --surface: #121E33;
    --surface2: #1A2844;
    --border: rgba(255,255,255,0.08);
    --border2: rgba(255,255,255,0.14);
    --accent: #3B7DFF;
    --accent2: #60A5FA;
    --accent-glow: rgba(59,125,255,0.18);
    --teal: #0FCFB3;
    --teal-dim: rgba(15,207,179,0.12);
    --text: #F0F4FF;
    --text2: #8B9DC3;
    --text3: #4E6080;
    --radius: 12px;
    --radius-lg: 20px;
    --radius-xl: 28px;
  }

  html { scroll-behavior: smooth; }

  body {
    font-family: 'DM Sans', sans-serif;
    background: var(--bg);
    color: var(--text);
    overflow-x: hidden;
    line-height: 1.6;
  }

  h1, h2, h3, h4, h5 {
    font-family: 'Sora', sans-serif;
    line-height: 1.15;
  }

  /* ─── NAV ─── */
  nav {
    position: fixed; top: 0; left: 0; right: 0; z-index: 100;
    display: flex; align-items: center; justify-content: space-between;
    padding: 0 5%;
    height: 68px;
    background: rgba(4,8,15,0.85);
    backdrop-filter: blur(20px);
    border-bottom: 1px solid var(--border);
  }
  .nav-logo {
    font-family: 'Sora', sans-serif;
    font-weight: 800;
    font-size: 1.3rem;
    color: var(--text);
    text-decoration: none;
    letter-spacing: -0.02em;
  }
  .nav-logo span { color: var(--accent); }
  .nav-links {
    display: flex; align-items: center; gap: 36px;
    list-style: none;
  }
  .nav-links a {
    text-decoration: none;
    color: var(--text2);
    font-size: 0.9rem;
    font-weight: 500;
    transition: color 0.2s;
  }
  .nav-links a:hover { color: var(--text); }
  .nav-actions { display: flex; gap: 12px; align-items: center; }
  .btn-ghost {
    padding: 9px 20px;
    border: 1px solid var(--border2);
    border-radius: 8px;
    background: transparent;
    color: var(--text2);
    font-family: 'DM Sans', sans-serif;
    font-size: 0.875rem;
    font-weight: 500;
    cursor: pointer;
    text-decoration: none;
    transition: all 0.2s;
  }
  .btn-ghost:hover { border-color: var(--accent); color: var(--accent); }
  .btn-primary {
    padding: 9px 22px;
    border-radius: 8px;
    background: var(--accent);
    color: #fff;
    font-family: 'DM Sans', sans-serif;
    font-size: 0.875rem;
    font-weight: 600;
    cursor: pointer;
    text-decoration: none;
    border: none;
    transition: all 0.2s;
    box-shadow: 0 0 24px rgba(59,125,255,0.35);
  }
  .btn-primary:hover { background: #5490ff; transform: translateY(-1px); }

  /* ─── HERO ─── */
  .hero {
    min-height: 100vh;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    text-align: center;
    padding: 120px 5% 80px;
    position: relative;
    overflow: hidden;
  }
  .hero-grid-bg {
    position: absolute; inset: 0;
    background-image:
      linear-gradient(rgba(59,125,255,0.04) 1px, transparent 1px),
      linear-gradient(90deg, rgba(59,125,255,0.04) 1px, transparent 1px);
    background-size: 60px 60px;
    mask-image: radial-gradient(ellipse 80% 60% at 50% 40%, black 30%, transparent 100%);
  }
  .hero-orb {
    position: absolute;
    border-radius: 50%;
    filter: blur(90px);
    pointer-events: none;
  }
  .hero-orb-1 {
    width: 600px; height: 400px;
    background: radial-gradient(ellipse, rgba(59,125,255,0.2) 0%, transparent 70%);
    top: 10%; left: 20%;
  }
  .hero-orb-2 {
    width: 400px; height: 350px;
    background: radial-gradient(ellipse, rgba(15,207,179,0.12) 0%, transparent 70%);
    top: 30%; right: 10%;
  }
  .hero-badge {
    display: inline-flex; align-items: center; gap: 8px;
    padding: 6px 16px;
    background: rgba(59,125,255,0.1);
    border: 1px solid rgba(59,125,255,0.3);
    border-radius: 100px;
    font-size: 0.8rem;
    font-weight: 600;
    color: var(--accent2);
    text-transform: uppercase;
    letter-spacing: 0.06em;
    margin-bottom: 28px;
  }
  .hero-badge-dot {
    width: 7px; height: 7px;
    border-radius: 50%;
    background: var(--teal);
    animation: pulse 2s ease-in-out infinite;
  }
  @keyframes pulse {
    0%, 100% { opacity: 1; transform: scale(1); }
    50% { opacity: 0.5; transform: scale(0.8); }
  }
  .hero h1 {
    font-size: clamp(2.5rem, 6vw, 4.8rem);
    font-weight: 800;
    letter-spacing: -0.03em;
    max-width: 900px;
    color: var(--text);
    position: relative;
  }
  .hero h1 .highlight {
    background: linear-gradient(135deg, var(--accent2) 0%, var(--teal) 100%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
  }
  .hero-sub {
    font-size: 1.15rem;
    color: var(--text2);
    max-width: 580px;
    margin: 24px auto 44px;
    line-height: 1.7;
    font-weight: 400;
  }
  .hero-cta {
    display: flex; gap: 14px; justify-content: center; flex-wrap: wrap;
    margin-bottom: 60px;
  }
  .btn-hero-primary {
    padding: 14px 32px;
    border-radius: 10px;
    background: var(--accent);
    color: #fff;
    font-family: 'DM Sans', sans-serif;
    font-size: 1rem;
    font-weight: 600;
    cursor: pointer;
    text-decoration: none;
    border: none;
    transition: all 0.25s;
    box-shadow: 0 0 40px rgba(59,125,255,0.4), 0 4px 16px rgba(0,0,0,0.3);
  }
  .btn-hero-primary:hover { background: #4d8aff; transform: translateY(-2px); box-shadow: 0 0 60px rgba(59,125,255,0.5), 0 8px 24px rgba(0,0,0,0.4); }
  .btn-hero-ghost {
    padding: 14px 32px;
    border-radius: 10px;
    background: transparent;
    border: 1px solid var(--border2);
    color: var(--text2);
    font-family: 'DM Sans', sans-serif;
    font-size: 1rem;
    font-weight: 500;
    cursor: pointer;
    text-decoration: none;
    transition: all 0.25s;
    display: flex; align-items: center; gap: 10px;
  }
  .btn-hero-ghost:hover { border-color: var(--accent); color: var(--text); }
  .play-icon {
    width: 28px; height: 28px;
    border-radius: 50%;
    background: rgba(255,255,255,0.1);
    display: flex; align-items: center; justify-content: center;
    font-size: 0.7rem;
  }
  .hero-stats {
    display: flex; gap: 48px; justify-content: center;
    flex-wrap: wrap;
  }
  .hero-stat-item { text-align: center; }
  .hero-stat-num {
    font-family: 'Sora', sans-serif;
    font-size: 2rem;
    font-weight: 800;
    color: var(--text);
    display: block;
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
    padding: 0 5% 100px;
    position: relative;
  }
  .dashboard-frame {
    max-width: 1100px;
    margin: 0 auto;
    border-radius: var(--radius-xl);
    border: 1px solid var(--border2);
    background: var(--bg2);
    overflow: hidden;
    box-shadow: 0 40px 120px rgba(0,0,0,0.6), 0 0 60px rgba(59,125,255,0.08);
    position: relative;
  }
  .dashboard-topbar {
    background: var(--bg3);
    padding: 12px 20px;
    display: flex; align-items: center; gap: 8px;
    border-bottom: 1px solid var(--border);
  }
  .dot { width: 11px; height: 11px; border-radius: 50%; }
  .dot-r { background: #FF5F56; }
  .dot-y { background: #FFBD2E; }
  .dot-g { background: #27C93F; }
  .dashboard-url {
    flex: 1;
    text-align: center;
    font-size: 0.78rem;
    color: var(--text3);
    font-family: monospace;
    margin: 0 20px;
  }
  .dashboard-inner {
    display: grid;
    grid-template-columns: 220px 1fr;
    height: 420px;
  }
  .dash-sidebar {
    background: var(--surface);
    border-right: 1px solid var(--border);
    padding: 20px 0;
  }
  .dash-logo {
    padding: 0 20px 20px;
    font-family: 'Sora', sans-serif;
    font-weight: 800;
    font-size: 1.1rem;
    color: var(--text);
    border-bottom: 1px solid var(--border);
    margin-bottom: 16px;
  }
  .dash-logo span { color: var(--accent); }
  .dash-nav-item {
    display: flex; align-items: center; gap: 10px;
    padding: 10px 20px;
    font-size: 0.85rem;
    color: var(--text2);
    cursor: pointer;
    transition: all 0.15s;
    border-radius: 0;
  }
  .dash-nav-item.active {
    background: rgba(59,125,255,0.12);
    color: var(--accent2);
    border-right: 2px solid var(--accent);
  }
  .dash-icon {
    width: 18px; height: 18px;
    border-radius: 4px;
    background: currentColor;
    opacity: 0.3;
    flex-shrink: 0;
  }
  .dash-main { padding: 24px; overflow: hidden; }
  .dash-greeting {
    font-family: 'Sora', sans-serif;
    font-size: 1.1rem;
    font-weight: 700;
    color: var(--text);
    margin-bottom: 4px;
  }
  .dash-sub { font-size: 0.8rem; color: var(--text3); margin-bottom: 20px; }
  .dash-cards {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 12px;
    margin-bottom: 20px;
  }
  .dash-card {
    background: var(--surface);
    border: 1px solid var(--border);
    border-radius: var(--radius);
    padding: 14px;
  }
  .dash-card-label { font-size: 0.72rem; color: var(--text3); text-transform: uppercase; letter-spacing: 0.05em; margin-bottom: 6px; }
  .dash-card-val {
    font-family: 'Sora', sans-serif;
    font-size: 1.5rem;
    font-weight: 800;
    color: var(--text);
  }
  .dash-card-delta { font-size: 0.72rem; color: var(--teal); margin-top: 2px; }
  .dash-grid2 {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 12px;
  }
  .dash-chart-box {
    background: var(--surface);
    border: 1px solid var(--border);
    border-radius: var(--radius);
    padding: 14px;
  }
  .dash-chart-title { font-size: 0.78rem; font-weight: 600; color: var(--text2); margin-bottom: 10px; }
  .chart-bars {
    display: flex; align-items: flex-end; gap: 5px; height: 70px;
  }
  .bar {
    flex: 1;
    border-radius: 3px 3px 0 0;
    background: var(--surface2);
    transition: background 0.2s;
  }
  .bar.active { background: var(--accent); }
  .dash-recent-list { display: flex; flex-direction: column; gap: 8px; }
  .dash-recent-item {
    display: flex; align-items: center; gap: 10px;
    font-size: 0.78rem;
  }
  .dash-avatar {
    width: 28px; height: 28px;
    border-radius: 50%;
    background: var(--accent);
    display: flex; align-items: center; justify-content: center;
    font-size: 0.65rem;
    font-weight: 700;
    color: white;
    flex-shrink: 0;
  }
  .dash-ri-name { color: var(--text); flex: 1; }
  .dash-ri-badge {
    padding: 2px 8px;
    border-radius: 100px;
    font-size: 0.68rem;
    font-weight: 600;
  }
  .badge-green { background: rgba(15,207,179,0.12); color: var(--teal); }
  .badge-blue { background: rgba(59,125,255,0.12); color: var(--accent2); }
  .badge-amber { background: rgba(251,191,36,0.12); color: #FBBf24; }

  /* ─── SECTION COMMONS ─── */
  section { padding: 100px 5%; }
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

  /* ─── ROLE TABS ─── */
  .role-section { background: var(--bg2); }
  .role-tabs {
    display: flex; gap: 8px; justify-content: center; margin-bottom: 50px;
    flex-wrap: wrap;
  }
  .role-tab {
    padding: 10px 24px;
    border-radius: 100px;
    border: 1px solid var(--border2);
    background: transparent;
    color: var(--text2);
    font-family: 'DM Sans', sans-serif;
    font-size: 0.9rem;
    font-weight: 500;
    cursor: pointer;
    transition: all 0.2s;
  }
  .role-tab.active {
    background: var(--accent);
    border-color: var(--accent);
    color: #fff;
    box-shadow: 0 0 20px rgba(59,125,255,0.3);
  }
  .role-tab:hover:not(.active) { border-color: var(--accent2); color: var(--text); }
  .role-content { display: none; }
  .role-content.active { display: grid; grid-template-columns: 1fr 1fr; gap: 60px; align-items: center; }
  .role-feature-list { display: flex; flex-direction: column; gap: 24px; }
  .role-feature {
    display: flex; gap: 16px;
  }
  .role-feature-icon {
    width: 44px; height: 44px; flex-shrink: 0;
    border-radius: 10px;
    background: var(--accent-glow);
    border: 1px solid rgba(59,125,255,0.2);
    display: flex; align-items: center; justify-content: center;
    font-size: 1.3rem;
  }
  .role-feature-text h4 {
    font-family: 'Sora', sans-serif;
    font-size: 1rem;
    font-weight: 700;
    color: var(--text);
    margin-bottom: 4px;
  }
  .role-feature-text p { font-size: 0.875rem; color: var(--text2); line-height: 1.6; }
  .role-visual {
    background: var(--surface);
    border: 1px solid var(--border);
    border-radius: var(--radius-lg);
    padding: 28px;
    min-height: 300px;
  }
  .role-visual-title { font-size: 0.8rem; font-weight: 600; color: var(--text3); text-transform: uppercase; letter-spacing: 0.06em; margin-bottom: 20px; }
  .role-demo-link {
    display: inline-block;
    margin-top: 20px;
    padding: 10px 22px;
    border-radius: 8px;
    background: var(--accent);
    color: #fff;
    text-decoration: none;
    font-size: 0.875rem;
    font-weight: 600;
    transition: all 0.2s;
  }
  .role-demo-link:hover { background: #4d8aff; }

  /* ─── FEATURES GRID ─── */
  .features-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 20px;
  }
  .feature-card {
    background: var(--surface);
    border: 1px solid var(--border);
    border-radius: var(--radius-lg);
    padding: 28px;
    transition: all 0.3s;
    position: relative;
    overflow: hidden;
  }
  .feature-card::before {
    content: '';
    position: absolute;
    top: 0; left: 0; right: 0;
    height: 2px;
    background: transparent;
    transition: background 0.3s;
  }
  .feature-card:hover { border-color: var(--border2); transform: translateY(-4px); box-shadow: 0 20px 60px rgba(0,0,0,0.3); }
  .feature-card:hover::before { background: linear-gradient(90deg, var(--accent), var(--teal)); }
  .feature-icon {
    width: 52px; height: 52px;
    border-radius: 12px;
    display: flex; align-items: center; justify-content: center;
    font-size: 1.6rem;
    margin-bottom: 20px;
  }
  .fi-blue { background: rgba(59,125,255,0.12); }
  .fi-teal { background: rgba(15,207,179,0.1); }
  .fi-amber { background: rgba(251,191,36,0.1); }
  .fi-pink { background: rgba(244,114,182,0.1); }
  .fi-purple { background: rgba(167,139,250,0.1); }
  .fi-green { background: rgba(74,222,128,0.1); }
  .feature-card h3 {
    font-size: 1.05rem;
    font-weight: 700;
    margin-bottom: 10px;
    color: var(--text);
  }
  .feature-card p { font-size: 0.875rem; color: var(--text2); line-height: 1.65; }
  .feature-link {
    display: inline-flex; align-items: center; gap: 5px;
    margin-top: 16px;
    font-size: 0.825rem;
    font-weight: 600;
    color: var(--accent2);
    text-decoration: none;
    transition: gap 0.2s;
  }
  .feature-link:hover { gap: 10px; }
  .feature-link-arrow { font-size: 1rem; }

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
  .stars { color: #FBBF24; margin-bottom: 14px; font-size: 0.9rem; letter-spacing: 2px; }
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
  .pricing-section { background: var(--bg); }
  .pricing-toggle {
    display: flex; align-items: center; gap: 14px; justify-content: center; margin-bottom: 50px;
  }
  .pricing-toggle span { font-size: 0.875rem; color: var(--text2); font-weight: 500; }
  .pricing-toggle span.active { color: var(--text); }
  .toggle-switch {
    width: 44px; height: 24px;
    background: var(--accent);
    border-radius: 100px;
    position: relative;
    cursor: pointer;
  }
  .toggle-knob {
    position: absolute;
    width: 18px; height: 18px;
    border-radius: 50%;
    background: #fff;
    top: 3px; left: 3px;
    transition: left 0.2s;
  }
  .save-badge {
    background: rgba(15,207,179,0.12);
    border: 1px solid rgba(15,207,179,0.2);
    color: var(--teal);
    font-size: 0.75rem;
    font-weight: 700;
    padding: 3px 10px;
    border-radius: 100px;
  }
  .pricing-cards {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
    gap: 20px;
    max-width: 1000px;
    margin: 0 auto;
  }
  .pricing-card {
    background: var(--surface);
    border: 1px solid var(--border);
    border-radius: var(--radius-xl);
    padding: 32px;
    position: relative;
    transition: all 0.3s;
  }
  .pricing-card.featured {
    border-color: var(--accent);
    background: linear-gradient(145deg, var(--surface2), var(--surface));
    box-shadow: 0 0 50px rgba(59,125,255,0.15);
  }
  .pricing-card:hover { transform: translateY(-4px); }
  .popular-badge {
    position: absolute; top: -12px; left: 50%; transform: translateX(-50%);
    background: var(--accent);
    color: #fff;
    font-size: 0.75rem;
    font-weight: 700;
    padding: 4px 16px;
    border-radius: 100px;
    white-space: nowrap;
  }
  .pricing-plan-name {
    font-family: 'Sora', sans-serif;
    font-size: 1.1rem;
    font-weight: 700;
    color: var(--text);
    margin-bottom: 6px;
  }
  .pricing-plan-desc { font-size: 0.825rem; color: var(--text3); margin-bottom: 24px; }
  .pricing-amount {
    display: flex; align-items: baseline; gap: 4px;
    margin-bottom: 24px;
  }
  .currency { font-size: 1.2rem; font-weight: 600; color: var(--text2); margin-top: 6px; }
  .price { font-family: 'Sora', sans-serif; font-size: 3rem; font-weight: 800; color: var(--text); }
  .period { font-size: 0.875rem; color: var(--text3); }
  .pricing-btn {
    width: 100%;
    padding: 12px;
    border-radius: 10px;
    font-family: 'DM Sans', sans-serif;
    font-size: 0.95rem;
    font-weight: 600;
    cursor: pointer;
    transition: all 0.2s;
    margin-bottom: 24px;
    text-align: center;
    text-decoration: none;
    display: block;
  }
  .pricing-btn-primary {
    background: var(--accent);
    color: #fff;
    border: none;
    box-shadow: 0 0 24px rgba(59,125,255,0.3);
  }
  .pricing-btn-primary:hover { background: #4d8aff; }
  .pricing-btn-ghost {
    background: transparent;
    color: var(--text2);
    border: 1px solid var(--border2);
  }
  .pricing-btn-ghost:hover { border-color: var(--accent); color: var(--accent); }
  .pricing-features { list-style: none; display: flex; flex-direction: column; gap: 12px; }
  .pricing-features li {
    display: flex; align-items: flex-start; gap: 10px;
    font-size: 0.875rem;
    color: var(--text2);
  }
  .check-icon { color: var(--teal); font-weight: 700; margin-top: 1px; flex-shrink: 0; }

  /* ─── CTA BANNER ─── */
  .cta-section {
    padding: 100px 5%;
    text-align: center;
    position: relative;
    overflow: hidden;
  }
  .cta-bg {
    position: absolute; inset: 0;
    background: radial-gradient(ellipse 70% 80% at 50% 50%, rgba(59,125,255,0.08) 0%, transparent 70%);
  }
  .cta-box {
    max-width: 700px;
    margin: 0 auto;
    position: relative;
  }
  .cta-box h2 {
    font-size: clamp(2rem, 4vw, 3.2rem);
    font-weight: 800;
    letter-spacing: -0.02em;
    margin-bottom: 16px;
  }
  .cta-box p { font-size: 1.05rem; color: var(--text2); margin-bottom: 36px; }
  .cta-actions { display: flex; gap: 14px; justify-content: center; flex-wrap: wrap; }

  /* ─── FOOTER ─── */
  footer {
    background: var(--bg2);
    border-top: 1px solid var(--border);
    padding: 60px 5% 40px;
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
    .role-content.active { grid-template-columns: 1fr; }
    .footer-grid { grid-template-columns: 1fr 1fr; }
    .dashboard-inner { grid-template-columns: 1fr; height: auto; }
    .dash-sidebar { display: none; }
    .dash-cards { grid-template-columns: repeat(2,1fr); }
  }
  @media (max-width: 600px) {
    section { padding: 70px 5%; }
    .hero-stats { gap: 24px; }
    .hero-stat-sep { display: none; }
    .footer-grid { grid-template-columns: 1fr; }
    .dash-cards { grid-template-columns: repeat(2,1fr); }
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
    <a href="#" class="btn-ghost">Sign In</a>
    <a href="#" class="btn-primary">Join Now</a>
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
    <a href="#" class="btn-hero-primary">Start Building Now</a>
    <a href="#" class="btn-hero-ghost">
      <span class="play-icon">▶</span>
      Watch Demo
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
        <div class="dash-greeting">Good morning, Admin 👋</div>
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
        <div class="role-feature-icon">💳</div>
        <div class="role-feature-text">
          <h4>Global Fee &amp; Split Payment Processing</h4>
          <p>Automate invoicing, split revenue with co-teachers, and manage coupon campaigns — all from one place.</p>
        </div>
      </div>
      <div class="role-feature">
        <div class="role-feature-icon">👥</div>
        <div class="role-feature-text">
          <h4>Multi-Tutor Orchestration</h4>
          <p>Assign multiple instructors to any batch, manage permissions, and enable seamless co-teaching workflows.</p>
        </div>
      </div>
      <div class="role-feature">
        <div class="role-feature-icon">📊</div>
        <div class="role-feature-text">
          <h4>Advanced Analytics &amp; Reports</h4>
          <p>Track enrollments, revenue, completion rates, and quiz performance with exportable dashboards.</p>
        </div>
      </div>
      <a href="https://slategrey-trout-786905.hostingersite.com/demo/public/auto-login/admin" class="role-demo-link" target="_blank">Open Admin Console →</a>
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
        <div style="background:rgba(59,125,255,0.06);border:1px solid rgba(59,125,255,0.15);border-radius:8px;padding:12px;margin-top:4px">
          <span style="font-size:0.78rem;color:var(--accent2)">✓ Active coupon: EDU20 · Stripe sync enabled</span>
        </div>
      </div>
    </div>
  </div>

  <div id="role-tutor" class="role-content">
    <div class="role-feature-list">
      <div class="role-feature">
        <div class="role-feature-icon">🎥</div>
        <div class="role-feature-text">
          <h4>Real-time Live Class Sync</h4>
          <p>Seamlessly run live sessions with Zoom or Google Meet, with auto-recording and instant replay access.</p>
        </div>
      </div>
      <div class="role-feature">
        <div class="role-feature-icon">📋</div>
        <div class="role-feature-text">
          <h4>Automated Attendance Tracking</h4>
          <p>Know who joined, how long they stayed, and get instant reports without ever taking roll call.</p>
        </div>
      </div>
      <div class="role-feature">
        <div class="role-feature-icon">📁</div>
        <div class="role-feature-text">
          <h4>Content &amp; PDF Asset Management</h4>
          <p>Upload videos, PDFs, and notes. Organize your course content with an intuitive drag-and-drop builder.</p>
        </div>
      </div>
      <a href="https://slategrey-trout-786905.hostingersite.com/demo/public/auto-login/tutor" class="role-demo-link" target="_blank">Open Tutor Dashboard →</a>
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
            <span style="font-size:0.78rem;color:var(--teal)">100% Active</span>
          </div>
          <div style="background:var(--bg3);border-radius:8px;padding:12px;display:flex;align-items:center;justify-content:space-between">
            <div style="display:flex;align-items:center;gap:10px"><div style="width:28px;height:28px;border-radius:50%;background:var(--teal);display:flex;align-items:center;justify-content:center;font-size:.65rem;font-weight:700;color:white">SJ</div><span style="font-size:0.85rem;color:var(--text)">Sarah Jenkins</span></div>
            <span style="font-size:0.78rem;color:var(--accent2)">94% Active</span>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div id="role-student" class="role-content">
    <div class="role-feature-list">
      <div class="role-feature">
        <div class="role-feature-icon">🎬</div>
        <div class="role-feature-text">
          <h4>High-Def Live &amp; Recorded Content</h4>
          <p>Watch live lectures or catch up on recordings at your pace. Crisp HD quality, no buffering.</p>
        </div>
      </div>
      <div class="role-feature">
        <div class="role-feature-icon">🏆</div>
        <div class="role-feature-text">
          <h4>Verified LinkedIn Certificate Sync</h4>
          <p>Earn verified certificates and post them directly to your LinkedIn profile in one click.</p>
        </div>
      </div>
      <div class="role-feature">
        <div class="role-feature-icon">📈</div>
        <div class="role-feature-text">
          <h4>Personal Portfolio &amp; Growth Path</h4>
          <p>Track your learning journey, celebrate milestones, and build a portfolio that showcases your growth.</p>
        </div>
      </div>
      <a href="https://slategrey-trout-786905.hostingersite.com/demo/public/auto-login/student" class="role-demo-link" target="_blank">Enter Student Hub →</a>
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
          <span style="font-size:1.4rem">🏅</span>
          <div><div style="font-size:0.85rem;font-weight:600;color:var(--text)">Certificate Ready!</div><div style="font-size:0.75rem;color:var(--teal)">Sync to LinkedIn instantly</div></div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- FEATURES GRID -->
<section style="background:var(--bg)">
  <div class="text-center">
    <span class="section-label">Platform Capabilities</span>
    <h2 class="section-title text-center">Tools that actually make sense</h2>
    <p class="section-sub text-center">No complicated menus or confusing setups. Just the features you need to teach effectively.</p>
  </div>
  <div class="features-grid">
    <div class="feature-card">
      <div class="feature-icon fi-blue">📚</div>
      <h3>Advanced Course Builder</h3>
      <p>Drag-and-drop curriculum creation. Add videos, PDFs, and text lessons in minutes. Organize modular content and release it on a schedule.</p>
      <a href="https://slategrey-trout-786905.hostingersite.com/feature/course-builder" class="feature-link">Explore Course Builder <span class="feature-link-arrow">→</span></a>
    </div>
    <div class="feature-card">
      <div class="feature-icon fi-teal">📝</div>
      <h3>Quiz Builder</h3>
      <p>Build custom automated quizzes with diverse question formats, dynamic grading, instant feedback, and detailed performance reports.</p>
      <a href="https://slategrey-trout-786905.hostingersite.com/feature/quiz-builder" class="feature-link">Explore Quiz Builder <span class="feature-link-arrow">→</span></a>
    </div>
    <div class="feature-card">
      <div class="feature-icon fi-amber">🎥</div>
      <h3>Live Classes</h3>
      <p>Run high-quality live sessions with Zoom or Google Meet. Auto-sync recordings, track attendance, and manage batches effortlessly.</p>
      <a href="https://slategrey-trout-786905.hostingersite.com/feature/live-classes" class="feature-link">Explore Live Engine <span class="feature-link-arrow">→</span></a>
    </div>
    <div class="feature-card">
      <div class="feature-icon fi-pink">🎁</div>
      <h3>Course Bundle</h3>
      <p>Increase purchase value by combining multiple training guides and modules into high-converting course bundles with group discounts.</p>
      <a href="https://slategrey-trout-786905.hostingersite.com/feature/course-bundle" class="feature-link">Explore Bundles <span class="feature-link-arrow">→</span></a>
    </div>
    <div class="feature-card">
      <div class="feature-icon fi-green">✅</div>
      <h3>Smart Attendance</h3>
      <p>Automatic real-time session tracking, activity logs, and downloadable attendance sheets — no more manual roll calls.</p>
      <a href="https://slategrey-trout-786905.hostingersite.com/feature/smart-attendance" class="feature-link">Explore Attendance <span class="feature-link-arrow">→</span></a>
    </div>
    <div class="feature-card">
      <div class="feature-icon fi-purple">💰</div>
      <h3>Fee Hub</h3>
      <p>Automate student invoicing, split tutor revenue percentages, launch coupon campaigns, and maintain clean academy bookkeeping.</p>
      <a href="https://slategrey-trout-786905.hostingersite.com/feature/fee-hub" class="feature-link">Explore Fee Hub <span class="feature-link-arrow">→</span></a>
    </div>
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
    <div class="integration-pill"><span class="integration-pill-icon">🎥</span>Zoom</div>
    <div class="integration-pill"><span class="integration-pill-icon">📹</span>Google Meet</div>
    <div class="integration-pill"><span class="integration-pill-icon">🏫</span>Google Classroom</div>
    <div class="integration-pill"><span class="integration-pill-icon">💳</span>PayPal</div>
    <div class="integration-pill"><span class="integration-pill-icon">📱</span>PhonePe</div>
    <div class="integration-pill"><span class="integration-pill-icon">💸</span>Razorpay</div>
    <div class="integration-pill"><span class="integration-pill-icon">💳</span>Stripe</div>
    <div class="integration-pill"><span class="integration-pill-icon">🔗</span>LinkedIn</div>
    <div class="integration-pill"><span class="integration-pill-icon">🤖</span>OpenAI</div>
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
      <div class="stars">★★★★★</div>
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
      <div class="stars">★★★★★</div>
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
      <div class="stars">★★★★★</div>
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
      <div class="pricing-plan-name">Starter</div>
      <div class="pricing-plan-desc">For new academies getting started</div>
      <div class="pricing-amount">
        <span class="currency">₹</span>
        <span class="price">1,999</span>
        <span class="period">/month</span>
      </div>
      <a href="https://slategrey-trout-786905.hostingersite.com/pricing" class="pricing-btn pricing-btn-ghost">Get Started</a>
      <ul class="pricing-features">
        <li><span class="check-icon">✓</span>Up to 100 students</li>
        <li><span class="check-icon">✓</span>Course builder &amp; quiz builder</li>
        <li><span class="check-icon">✓</span>Live classes (Zoom/Meet)</li>
        <li><span class="check-icon">✓</span>Basic analytics</li>
        <li><span class="check-icon">✓</span>Email support</li>
      </ul>
    </div>
    <div class="pricing-card featured">
      <div class="popular-badge">Most Popular</div>
      <div class="pricing-plan-name">Academy</div>
      <div class="pricing-plan-desc">For growing academies with multiple tutors</div>
      <div class="pricing-amount">
        <span class="currency">₹</span>
        <span class="price">4,999</span>
        <span class="period">/month</span>
      </div>
      <a href="https://slategrey-trout-786905.hostingersite.com/pricing" class="pricing-btn pricing-btn-primary">Get Started</a>
      <ul class="pricing-features">
        <li><span class="check-icon">✓</span>Unlimited students</li>
        <li><span class="check-icon">✓</span>Multi-tutor &amp; co-teaching</li>
        <li><span class="check-icon">✓</span>Fee Hub &amp; split payments</li>
        <li><span class="check-icon">✓</span>Smart attendance tracking</li>
        <li><span class="check-icon">✓</span>Course bundles</li>
        <li><span class="check-icon">✓</span>LinkedIn certificate sync</li>
        <li><span class="check-icon">✓</span>Priority support</li>
      </ul>
    </div>
    <div class="pricing-card">
      <div class="pricing-plan-name">Enterprise</div>
      <div class="pricing-plan-desc">For large institutions &amp; ed-tech companies</div>
      <div class="pricing-amount">
        <span class="price" style="font-size:2rem;line-height:1.4">Custom</span>
      </div>
      <a href="#" class="pricing-btn pricing-btn-ghost">Contact Sales</a>
      <ul class="pricing-features">
        <li><span class="check-icon">✓</span>Everything in Academy</li>
        <li><span class="check-icon">✓</span>White-label branding</li>
        <li><span class="check-icon">✓</span>Custom integrations</li>
        <li><span class="check-icon">✓</span>Dedicated account manager</li>
        <li><span class="check-icon">✓</span>SLA &amp; uptime guarantee</li>
      </ul>
    </div>
  </div>
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
        <span class="play-icon">▶</span>
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
        <a href="#" class="social-btn">𝕏</a>
        <a href="#" class="social-btn">in</a>
        <a href="#" class="social-btn">▶</a>
        <a href="#" class="social-btn">f</a>
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
    <p>Made with ❤️ for educators</p>
  </div>
</footer>

<script>
  function switchRole(role, btn) {
    document.querySelectorAll('.role-tab').forEach(t => t.classList.remove('active'));
    document.querySelectorAll('.role-content').forEach(c => c.classList.remove('active'));
    btn.classList.add('active');
    document.getElementById('role-' + role).classList.add('active');
  }
</script>

</body>
</html>
