<?php
// Panggil data portfolio di bagian paling atas file
require_once 'portfolio-data.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />
  <title>Hoerul Umam · Freelance Developer & Creative Technologist</title>
  <meta name="description" content="Hoerul Umam — Freelance Web Developer, Designer & Digital Marketer. Membangun identitas digital modern, cepat, dan berdampak." />

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon" />
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon" />

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect" />
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Bricolage+Grotesque:opsz,wght@12..96,300..800&family=DM+Sans:ital,opsz,wght@0,9..40,300..700;1,9..40,300..400&display=swap" rel="stylesheet" />

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet" />
  <link href="assets/vendor/aos/aos.css" rel="stylesheet" />
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet" />
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet" />

  <style>
    /* ============================
       DESIGN TOKENS — 2026
       Bright base + dark ink accents
    ============================ */
    :root {
      --cream: #F7F4EE;
      --white: #FFFFFF;
      --ink: #0D0F12;
      --ink-80: rgba(13, 15, 18, 0.8);
      --ink-10: rgba(13, 15, 18, 0.06);
      --lime: #C8F135;
      /* electric accent */
      --lime-dark: #A8CC1A;
      --coral: #FF5733;
      --gold: #E8A838;
      --sidebar-bg: #0D0F12;
      --sidebar-w: 290px;

      --nav-color: rgba(255, 255, 255, 0.55);
      --nav-hover: #FFFFFF;
      --nav-active: var(--lime);

      --heading-font: 'Bricolage Grotesque', sans-serif;
      --body-font: 'DM Sans', sans-serif;
      --r-sm: 12px;
      --r-md: 20px;
      --r-lg: 32px;

      scroll-behavior: smooth;
    }

    *,
    *::before,
    *::after {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }

    body {
      font-family: var(--body-font);
      background: var(--cream);
      color: var(--ink);
      line-height: 1.6;
    }

    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
      font-family: var(--heading-font);
      letter-spacing: -0.03em;
    }

    a {
      text-decoration: none;
      color: inherit;
      transition: color 0.2s;
    }

    /* ============================
       SIDEBAR / HEADER
    ============================ */
    .header {
      position: fixed;
      top: 0;
      left: 0;
      bottom: 0;
      width: var(--sidebar-w);
      background: var(--sidebar-bg);
      z-index: 997;
      display: flex;
      flex-direction: column;
      padding: 0;
      overflow-y: auto;
      overflow-x: hidden;
      border-right: none;
      transition: left 0.3s ease;
    }

    .header::-webkit-scrollbar {
      width: 4px;
    }

    .header::-webkit-scrollbar-track {
      background: transparent;
    }

    .header::-webkit-scrollbar-thumb {
      background: rgba(255, 255, 255, 0.1);
      border-radius: 4px;
    }

    /* Top accent strip */
    .header::before {
      content: '';
      display: block;
      height: 4px;
      background: linear-gradient(90deg, var(--lime), var(--coral), var(--gold));
      flex-shrink: 0;
    }

    .header .profile-img {
      padding: 28px 28px 0;
      position: relative;
    }

    .header .profile-img img {
      width: 88px;
      height: 88px;
      border-radius: 50%;
      object-fit: cover;
      border: 3px solid var(--lime);
      display: block;
    }

    .header .avail-dot {
      position: absolute;
      width: 14px;
      height: 14px;
      background: var(--lime);
      border: 2px solid var(--sidebar-bg);
      border-radius: 50%;
      bottom: 4px;
      left: 100px;
      animation: pulse-dot 2s infinite;
    }

    @keyframes pulse-dot {

      0%,
      100% {
        box-shadow: 0 0 0 0 rgba(200, 241, 53, 0.5);
      }

      50% {
        box-shadow: 0 0 0 6px rgba(200, 241, 53, 0);
      }
    }

    .header .sitename {
      color: #fff;
      font-size: 20px;
      font-weight: 700;
      padding: 14px 28px 2px;
      font-family: var(--heading-font);
      letter-spacing: -0.04em;
    }

    .header .tagline {
      color: rgba(255, 255, 255, 0.4);
      font-size: 12px;
      padding: 0 28px 18px;
      letter-spacing: 0.03em;
      text-transform: uppercase;
    }

    .header .divider {
      height: 1px;
      background: rgba(255, 255, 255, 0.07);
      margin: 0 28px 20px;
    }

    .header .social-links {
      display: flex;
      gap: 8px;
      padding: 0 28px 20px;
    }

    .header .social-links a {
      width: 36px;
      height: 36px;
      border-radius: 10px;
      background: rgba(255, 255, 255, 0.06);
      color: rgba(255, 255, 255, 0.5);
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 15px;
      transition: all 0.2s;
    }

    .header .social-links a:hover {
      background: var(--lime);
      color: var(--ink);
      transform: translateY(-2px);
    }

    .navmenu {
      flex: 1;
      padding: 0;
    }

    .navmenu ul {
      list-style: none;
      padding: 0 14px 20px;
    }

    .navmenu a,
    .navmenu a:focus {
      color: var(--nav-color);
      padding: 10px 14px;
      font-family: var(--body-font);
      font-size: 14px;
      font-weight: 500;
      display: flex;
      align-items: center;
      gap: 10px;
      border-radius: var(--r-sm);
      margin-bottom: 2px;
      transition: all 0.2s;
      white-space: nowrap;
    }

    .navmenu a .navicon {
      font-size: 17px;
      opacity: 0.6;
    }

    .navmenu a:hover,
    .navmenu .active,
    .navmenu .active:focus {
      color: var(--ink);
      background: var(--lime);
    }

    .navmenu a:hover .navicon,
    .navmenu .active .navicon {
      opacity: 1;
    }

    .header .cta-hire {
      margin: 0 14px 28px;
      padding: 12px;
      background: var(--lime);
      color: var(--ink);
      border-radius: var(--r-md);
      font-size: 13px;
      font-weight: 700;
      text-align: center;
      letter-spacing: -0.01em;
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 7px;
      transition: all 0.2s;
    }

    .header .cta-hire:hover {
      background: var(--lime-dark);
      transform: translateY(-1px);
    }

    /* Mobile toggle */
    .header-toggle {
      display: none;
      position: fixed;
      top: 14px;
      right: 14px;
      z-index: 9999;
      width: 42px;
      height: 42px;
      background: var(--ink);
      color: var(--lime);
      border-radius: var(--r-sm);
      font-size: 20px;
      align-items: center;
      justify-content: center;
      cursor: pointer;
    }

    @media (max-width: 1199px) {
      .header-toggle {
        display: flex;
      }

      .header {
        left: calc(-1 * var(--sidebar-w));
      }

      .header.header-show {
        left: 0;
        box-shadow: 8px 0 40px rgba(0, 0, 0, 0.3);
      }
    }

    @media (min-width: 1200px) {

      .header~main,
      .header~#footer {
        margin-left: var(--sidebar-w);
      }
    }

    /* ============================
       MAIN LAYOUT
    ============================ */
    main.main {
      min-height: 100vh;
    }

    section {
      padding: 72px 0;
    }

    .section-label {
      display: inline-flex;
      align-items: center;
      gap: 8px;
      font-size: 11px;
      font-weight: 700;
      text-transform: uppercase;
      letter-spacing: 0.1em;
      color: var(--ink);
      background: var(--lime);
      padding: 5px 14px;
      border-radius: 100px;
      margin-bottom: 18px;
    }

    .section-title h2 {
      font-size: clamp(2rem, 4vw, 3rem);
      font-weight: 800;
      color: var(--ink);
      line-height: 1.1;
      letter-spacing: -0.04em;
    }

    .section-title p {
      color: rgba(13, 15, 18, 0.55);
      font-size: 16px;
      margin-top: 10px;
      max-width: 520px;
    }

    /* ============================
       HERO
    ============================ */
    #hero {
      background: var(--cream);
      padding: 80px 0 64px;
      position: relative;
      overflow: hidden;
    }

    #hero::before {
      content: '';
      position: absolute;
      top: -120px;
      right: -80px;
      width: 500px;
      height: 500px;
      background: radial-gradient(circle, rgba(200, 241, 53, 0.22) 0%, transparent 65%);
      pointer-events: none;
    }

    #hero::after {
      content: '';
      position: absolute;
      bottom: -80px;
      left: 20%;
      width: 300px;
      height: 300px;
      background: radial-gradient(circle, rgba(255, 87, 51, 0.1) 0%, transparent 65%);
      pointer-events: none;
    }

    .hero-badge {
      display: inline-flex;
      align-items: center;
      gap: 8px;
      font-size: 12px;
      font-weight: 600;
      color: var(--ink);
      background: var(--lime);
      padding: 6px 16px;
      border-radius: 100px;
      margin-bottom: 28px;
      animation: badge-enter 0.6s ease forwards;
    }

    .hero-badge .dot {
      width: 7px;
      height: 7px;
      background: var(--ink);
      border-radius: 50%;
      animation: blink 1.4s infinite;
    }

    @keyframes blink {

      0%,
      100% {
        opacity: 1
      }

      50% {
        opacity: 0.2
      }
    }

    @keyframes badge-enter {
      from {
        opacity: 0;
        transform: translateY(12px);
      }

      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    .hero-name {
      font-size: clamp(3rem, 6vw, 5.2rem);
      font-weight: 800;
      line-height: 1;
      letter-spacing: -0.05em;
      color: var(--ink);
      margin-bottom: 14px;
    }

    .hero-name span {
      position: relative;
      display: inline-block;
    }

    .hero-name span::after {
      content: '';
      position: absolute;
      bottom: 4px;
      left: 0;
      right: 0;
      height: 10px;
      background: var(--lime);
      z-index: -1;
      border-radius: 3px;
    }

    .hero-role {
      font-size: clamp(1.1rem, 2.5vw, 1.5rem);
      color: rgba(13, 15, 18, 0.55);
      font-weight: 400;
      margin-bottom: 36px;
    }

    .hero-role .typed {
      color: var(--ink);
      font-weight: 600;
    }

    .typed-cursor {
      color: var(--lime);
      font-weight: 300;
    }

    .hero-actions {
      display: flex;
      gap: 12px;
      flex-wrap: wrap;
    }

    .btn-primary-dark {
      background: var(--ink);
      color: #fff;
      padding: 13px 28px;
      border-radius: var(--r-md);
      font-weight: 600;
      font-size: 14px;
      border: 2px solid var(--ink);
      display: inline-flex;
      align-items: center;
      gap: 7px;
      transition: all 0.2s;
    }

    .btn-primary-dark:hover {
      background: transparent;
      color: var(--ink);
    }

    .btn-outline-dark2 {
      background: transparent;
      color: var(--ink);
      padding: 13px 28px;
      border-radius: var(--r-md);
      font-weight: 600;
      font-size: 14px;
      border: 2px solid rgba(13, 15, 18, 0.2);
      display: inline-flex;
      align-items: center;
      gap: 7px;
      transition: all 0.2s;
    }

    .btn-outline-dark2:hover {
      border-color: var(--ink);
      background: var(--ink-10);
    }

    /* floating tag chips */
    .hero-chips {
      display: flex;
      gap: 8px;
      flex-wrap: wrap;
      margin-top: 36px;
    }

    .chip {
      font-size: 12px;
      font-weight: 500;
      padding: 5px 14px;
      border-radius: 100px;
      background: rgba(13, 15, 18, 0.07);
      color: var(--ink);
      border: 1px solid rgba(13, 15, 18, 0.1);
    }

    /* ============================
       ABOUT
    ============================ */
    #about {
      background: var(--white);
    }

    .about-img-wrap {
      position: relative;
    }

    .about-img-wrap img {
      border-radius: var(--r-lg);
      width: 100%;
      object-fit: cover;
      aspect-ratio: 4/5;
    }

    .about-img-badge {
      position: absolute;
      bottom: 20px;
      right: -16px;
      background: var(--ink);
      color: #fff;
      padding: 14px 18px;
      border-radius: var(--r-md);
      font-size: 13px;
      font-weight: 600;
      font-family: var(--heading-font);
      text-align: center;
      box-shadow: 0 12px 28px rgba(0, 0, 0, 0.18);
      line-height: 1.3;
    }

    .about-img-badge strong {
      display: block;
      font-size: 28px;
      color: var(--lime);
      letter-spacing: -0.04em;
    }

    .about-info-grid {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 10px;
      margin: 24px 0;
    }

    .about-info-item {
      background: var(--cream);
      border-radius: var(--r-md);
      padding: 14px 16px;
    }

    .about-info-item .label {
      font-size: 11px;
      text-transform: uppercase;
      letter-spacing: 0.08em;
      color: rgba(13, 15, 18, 0.4);
      margin-bottom: 3px;
      font-weight: 600;
    }

    .about-info-item .value {
      font-size: 14px;
      font-weight: 600;
      color: var(--ink);
    }

    .avail-badge {
      display: inline-flex;
      align-items: center;
      gap: 6px;
      background: rgba(200, 241, 53, 0.2);
      border: 1px solid var(--lime);
      color: #4a6000;
      padding: 3px 12px 3px 8px;
      border-radius: 100px;
      font-size: 12px;
      font-weight: 600;
    }

    .avail-badge::before {
      content: '';
      width: 7px;
      height: 7px;
      background: var(--lime-dark);
      border-radius: 50%;
    }

    /* ============================
       STATS
    ============================ */
    #stats {
      background: var(--ink);
      padding: 56px 0;
    }

    .stats-grid {
      display: grid;
      grid-template-columns: repeat(4, 1fr);
      gap: 1px;
      background: rgba(255, 255, 255, 0.07);
      border-radius: var(--r-lg);
      overflow: hidden;
    }

    @media (max-width: 767px) {
      .stats-grid {
        grid-template-columns: repeat(2, 1fr);
      }
    }

    .stat-card {
      background: var(--ink);
      padding: 36px 28px;
      text-align: center;
      transition: background 0.2s;
    }

    .stat-card:hover {
      background: rgba(255, 255, 255, 0.03);
    }

    .stat-card .stat-num {
      font-family: var(--heading-font);
      font-size: 52px;
      font-weight: 800;
      color: var(--lime);
      line-height: 1;
      letter-spacing: -0.04em;
    }

    .stat-card .stat-label {
      font-size: 13px;
      color: rgba(255, 255, 255, 0.45);
      margin-top: 6px;
      font-weight: 500;
    }

    .stat-card .stat-label strong {
      color: rgba(255, 255, 255, 0.8);
      display: block;
    }

    /* ============================
       SKILLS
    ============================ */
    #skills {
      background: var(--cream);
    }

    .skills-grid {
      display: grid;
      grid-template-columns: repeat(auto-fill, minmax(110px, 1fr));
      gap: 12px;
      margin-top: 36px;
    }

    .skill-card {
      background: var(--white);
      border-radius: var(--r-md);
      padding: 20px 12px 14px;
      text-align: center;
      border: 1.5px solid rgba(13, 15, 18, 0.06);
      transition: all 0.22s cubic-bezier(0.2, 0, 0, 1);
      cursor: default;
    }

    .skill-card:hover {
      border-color: var(--lime);
      background: rgba(200, 241, 53, 0.08);
      transform: translateY(-4px);
      box-shadow: 0 8px 20px rgba(200, 241, 53, 0.15);
    }

    .skill-card img {
      width: 44px;
      height: 44px;
      object-fit: contain;
    }

    .skill-card p {
      font-size: 12px;
      font-weight: 600;
      margin: 10px 0 0;
      color: var(--ink);
    }

    /* ============================
       RESUME
    ============================ */
    #resume {
      background: var(--white);
    }

    .resume-col-title {
      font-size: 13px;
      font-weight: 700;
      text-transform: uppercase;
      letter-spacing: 0.1em;
      color: rgba(13, 15, 18, 0.4);
      margin-bottom: 20px;
      display: flex;
      align-items: center;
      gap: 8px;
    }

    .resume-col-title::after {
      content: '';
      flex: 1;
      height: 1px;
      background: rgba(13, 15, 18, 0.08);
    }

    .resume-item {
      position: relative;
      padding: 0 0 28px 22px;
      border-left: 2px solid rgba(13, 15, 18, 0.1);
    }

    .resume-item::before {
      content: '';
      position: absolute;
      left: -7px;
      top: 4px;
      width: 12px;
      height: 12px;
      background: var(--lime);
      border: 2px solid var(--ink);
      border-radius: 50%;
    }

    .resume-item:last-child {
      padding-bottom: 0;
      border-left-color: transparent;
    }

    .resume-item .ri-org {
      font-size: 16px;
      font-weight: 700;
      color: var(--ink);
      font-family: var(--heading-font);
      letter-spacing: -0.02em;
    }

    .resume-item .ri-period {
      display: inline-block;
      font-size: 11px;
      font-weight: 600;
      background: var(--ink);
      color: var(--lime);
      padding: 2px 10px;
      border-radius: 100px;
      margin: 6px 0 4px;
    }

    .resume-item .ri-sub {
      font-size: 13px;
      color: rgba(13, 15, 18, 0.5);
      font-style: italic;
      margin-bottom: 6px;
    }

    .resume-item ul {
      padding-left: 16px;
      font-size: 13.5px;
      color: rgba(13, 15, 18, 0.65);
    }

    .resume-item ul li {
      margin-bottom: 4px;
    }

    /* ============================
       PORTFOLIO
    ============================ */
    #portfolio {
      background: var(--cream);
    }

    .portfolio-filters {
      display: flex;
      flex-wrap: wrap;
      gap: 8px;
      list-style: none;
      justify-content: center;
      margin: 28px 0;
    }

    .portfolio-filters li {
      font-size: 13px;
      font-weight: 600;
      padding: 7px 18px;
      border-radius: 100px;
      cursor: pointer;
      background: var(--white);
      color: var(--ink);
      border: 1.5px solid rgba(13, 15, 18, 0.1);
      transition: all 0.2s;
      user-select: none;
    }

    .portfolio-filters li:hover,
    .portfolio-filters li.filter-active {
      background: var(--ink);
      color: var(--lime);
      border-color: var(--ink);
    }

    .portfolio-content {
      position: relative;
      overflow: hidden;
      border-radius: var(--r-lg);
      aspect-ratio: 4/3;
      background: #e0ddd6;
    }

    .portfolio-content img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      transition: transform 0.5s ease;
    }

    .portfolio-info {
      position: absolute;
      inset: 0;
      background: linear-gradient(to top, rgba(13, 15, 18, 0.88) 40%, rgba(13, 15, 18, 0.1) 100%);
      display: flex;
      flex-direction: column;
      justify-content: flex-end;
      padding: 20px;
      opacity: 0;
      transition: opacity 0.3s ease;
    }

    .portfolio-content:hover .portfolio-info {
      opacity: 1;
    }

    .portfolio-content:hover img {
      transform: scale(1.05);
    }

    .portfolio-info h4 {
      font-size: 15px;
      font-weight: 700;
      color: #fff;
      font-family: var(--heading-font);
      letter-spacing: -0.02em;
      margin-bottom: 3px;
    }

    .portfolio-info p {
      font-size: 12px;
      color: rgba(255, 255, 255, 0.6);
      margin: 0;
    }

    .portfolio-info .preview-link {
      position: absolute;
      top: 14px;
      right: 14px;
      width: 38px;
      height: 38px;
      background: var(--lime);
      color: var(--ink);
      border-radius: 10px;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 17px;
      transition: transform 0.2s;
    }

    .portfolio-info .preview-link:hover {
      transform: scale(1.1);
    }

    /* ============================
       FOOTER
    ============================ */
    #footer {
      background: var(--ink);
      padding: 36px 0;
      text-align: center;
    }

    #footer .copyright {
      color: rgba(255, 255, 255, 0.4);
      font-size: 13px;
    }

    #footer .copyright strong {
      color: var(--lime);
    }

    #footer .footer-tagline {
      font-size: 12px;
      color: rgba(255, 255, 255, 0.2);
      margin-top: 6px;
    }

    /* ============================
       SCROLL TOP
    ============================ */
    .scroll-top {
      position: fixed;
      bottom: 24px;
      right: 24px;
      width: 44px;
      height: 44px;
      background: var(--lime);
      color: var(--ink);
      border-radius: var(--r-sm);
      font-size: 20px;
      display: flex;
      align-items: center;
      justify-content: center;
      z-index: 998;
      opacity: 0;
      pointer-events: none;
      transition: all 0.3s;
      box-shadow: 0 4px 16px rgba(200, 241, 53, 0.3);
    }

    .scroll-top.active {
      opacity: 1;
      pointer-events: all;
    }

    .scroll-top:hover {
      background: var(--lime-dark);
      transform: translateY(-2px);
    }

    /* ============================
       AOS OVERRIDE
    ============================ */
    [data-aos] {
      will-change: transform, opacity;
    }

    /* ============================
       RESPONSIVE TWEAKS
    ============================ */
    @media (max-width: 991px) {
      .about-img-badge {
        right: 12px;
        bottom: 12px;
      }

      .about-info-grid {
        grid-template-columns: 1fr;
      }
    }

    @media (max-width: 767px) {
      #hero {
        padding: 60px 0 48px;
      }

      .hero-name {
        font-size: 2.8rem;
      }

      section {
        padding: 56px 0;
      }
    }
  </style>
</head>


<body class="index-page">

  <!-- Mobile toggle -->
  <i class="header-toggle d-xl-none bi bi-list" id="headerToggle"></i>

  <!-- ===== SIDEBAR ===== -->
  <header id="header" class="header dark-background">
    <div class="profile-img">
      <img src="assets/img/team/hoerul-umam.jpg" alt="Hoerul Umam" />
      <span class="avail-dot"></span>
    </div>

    <h1 class="sitename">Hoerul Umam</h1>
    <p class="tagline">Digital Presisi · Jakarta</p>

    <div class="divider"></div>

    <div class="social-links">
      <a href="https://www.instagram.com/chupumanik18/" target="_blank" title="Instagram"><i class="bi bi-instagram"></i></a>
      <a href="https://www.linkedin.com/in/hoerul-umam/" target="_blank" title="LinkedIn"><i class="bi bi-linkedin"></i></a>
      <a href="https://github.com/hoeruldev123-spec" title="Github"><i class="bi bi-github"></i></a>
      <a href="/" title="Digital_Presisi"><i class="bi bi-globe"></i></a>
    </div>

    <nav id="navmenu" class="navmenu">
      <ul>
        <li><a href="#hero" class="active"><i class="bi bi-house navicon"></i>Home</a></li>
        <li><a href="#about"><i class="bi bi-person navicon"></i>About</a></li>
        <li><a href="#resume"><i class="bi bi-file-earmark-text navicon"></i>Resume</a></li>
        <li><a href="#portfolio"><i class="bi bi-images navicon"></i>Portfolio</a></li>
      </ul>
    </nav>

    <a href="mailto:hoerul.dev123@gmail.com" class="cta-hire">
      <i class="bi bi-send"></i> Hire Me
    </a>
  </header>

  <!-- ===== MAIN ===== -->
  <main class="main">

    <!-- HERO -->
    <section id="hero" class="hero section">
      <div class="container" data-aos="fade-up">
        <div class="hero-badge">
          <span class="dot"></span>
          Available for freelance — Jakarta &amp; Remote
        </div>

        <h1 class="hero-name">
          Hoerul<br /><span>Umam</span>
        </h1>

        <p class="hero-role">
          I'm a&nbsp;
          <span class="typed" data-typed-items="Fullstack Freelancer,Creative Technologist,UI/UX Engineer,Digital Growth Expert">Fullstack Freelancer</span>
          <span class="typed-cursor typed-cursor--blink" aria-hidden="true"></span>
        </p>

        <div class="hero-actions">
          <a href="#portfolio" class="btn-primary-dark">View Projects <i class="bi bi-arrow-right"></i></a>
          <a href="https://wa.me/6289655930890" target="_blank" class="btn-outline-dark2"><i class="bi bi-whatsapp"></i> Let's Talk</a>
        </div>

        <div class="hero-chips">
          <span class="chip">Web Development</span>
          <span class="chip">UI/UX Design</span>
          <span class="chip">Digital Marketing</span>
          <span class="chip">SEO</span>
          <span class="chip">Branding</span>
        </div>
      </div>
    </section>

    <!-- ABOUT -->
    <section id="about" class="about section">
      <div class="container">
        <div class="row gy-5 align-items-center">
          <div class="col-lg-4" data-aos="fade-right">
            <div class="about-img-wrap">
              <img src="assets/img/team/hoerul-umam-about.webp" alt="Hoerul Umam" />
              <div class="about-img-badge">
                <strong>4+</strong>
                Tahun<br />Freelancing
              </div>
            </div>
          </div>

          <div class="col-lg-8" data-aos="fade-left">
            <span class="section-label"><i class="bi bi-person-fill"></i> About</span>
            <h2 class="section-title__h2" style="font-family:var(--heading-font);font-size:clamp(2rem,3.5vw,2.8rem);font-weight:800;letter-spacing:-0.04em;line-height:1.1;margin-bottom:16px;">
              Web Dev, Designer<br />&amp; Growth Strategist
            </h2>
            <p style="color:rgba(13,15,18,0.6);font-size:15px;margin-bottom:24px;max-width:520px;">
              Saya adalah profesional teknologi &amp; kreatif dengan misi membangun identitas digital yang berdampak — menggabungkan kode, desain, dan strategi pemasaran untuk hasil nyata bagi klien lokal &amp; global.
            </p>

            <div class="about-info-grid">
              <div class="about-info-item">
                <div class="label">Birthday</div>
                <div class="value">18 June 1998</div>
              </div>
              <div class="about-info-item">
                <div class="label">City</div>
                <div class="value">Jakarta, Indonesia</div>
              </div>
              <div class="about-info-item">
                <div class="label">Degree</div>
                <div class="value">S1 Teknik Informatika</div>
              </div>
              <div class="about-info-item">
                <div class="label">Email</div>
                <div class="value" style="font-size:12px;">hoerul.dev123@gmail.com</div>
              </div>
              <div class="about-info-item">
                <div class="label">Website</div>
                <div class="value">digitalpresisi.com</div>
              </div>
              <div class="about-info-item">
                <div class="label">Status</div>
                <div class="value"><span class="avail-badge">Open to Work</span></div>
              </div>
            </div>

            <blockquote style="border-left:3px solid var(--lime);padding:14px 18px;background:rgba(200,241,53,0.07);border-radius:0 var(--r-md) var(--r-md) 0;font-size:14px;color:rgba(13,15,18,0.7);font-style:italic;margin-top:8px;">
              Jika Anda mencari profesional yang dapat membantu membangun atau meningkatkan kehadiran digital Anda — saya siap berkolaborasi.
            </blockquote>
          </div>
        </div>
      </div>
    </section>

    <!-- STATS -->
    <section id="stats" class="stats section">
      <div class="container" data-aos="fade-up">
        <div class="stats-grid">
          <div class="stat-card">
            <div class="stat-num">
              <span data-purecounter-start="0" data-purecounter-end="32" data-purecounter-duration="1.5" class="purecounter">32</span>+
            </div>
            <div class="stat-label"><strong>Clients Worldwide</strong> kolaborasi aktif</div>
          </div>
          <div class="stat-card">
            <div class="stat-num">
              <span data-purecounter-start="0" data-purecounter-end="18" data-purecounter-duration="1.5" class="purecounter">18</span>
            </div>
            <div class="stat-label"><strong>Startup &amp; UKM</strong> go digital</div>
          </div>
          <div class="stat-card">
            <div class="stat-num">
              <span data-purecounter-start="0" data-purecounter-end="47" data-purecounter-duration="1.5" class="purecounter">47</span>
            </div>
            <div class="stat-label"><strong>Consulting Sessions</strong> per bulan</div>
          </div>
          <div class="stat-card">
            <div class="stat-num">
              <span data-purecounter-start="0" data-purecounter-end="100" data-purecounter-duration="1.5" class="purecounter">100</span>%
            </div>
            <div class="stat-label"><strong>Client Satisfaction</strong> based on review</div>
          </div>
        </div>
      </div>
    </section>

    <!-- SKILLS -->
    <section id="skills" class="skills section">
      <div class="container">
        <div data-aos="fade-up">
          <span class="section-label"><i class="bi bi-tools"></i> Tech Stack</span>
          <h2 class="section-title__h2" style="font-family:var(--heading-font);font-size:clamp(1.8rem,3vw,2.5rem);font-weight:800;letter-spacing:-0.04em;">
            Tools &amp; Technologies
          </h2>
          <p style="color:rgba(13,15,18,0.5);font-size:14px;margin-top:8px;">Framework, bahasa, dan alat yang saya kuasai untuk produk digital berkualitas tinggi.</p>
        </div>

        <div class="skills-grid" data-aos="fade-up" data-aos-delay="100">
          <div class="skill-card"><img src="assets/img/icon/html-5-svgrepo-com.svg" alt="html" />
            <p>HTML5</p>
          </div>
          <div class="skill-card"><img src="assets/img/icon/css-3-svgrepo-com.svg" alt="css" />
            <p>CSS3</p>
          </div>
          <div class="skill-card"><img src="assets/img/icon/javascript-svgrepo-com.svg" alt="js" />
            <p>JavaScript</p>
          </div>
          <div class="skill-card"><img src="assets/img/icon/php-svgrepo-com.svg" alt="php" />
            <p>PHP</p>
          </div>
          <div class="skill-card"><img src="assets/img/icon/bootstrap-5-1.svg" alt="bootstrap" />
            <p>Bootstrap</p>
          </div>
          <div class="skill-card"><img src="assets/img/icon/mysql-logo-svgrepo-com.svg" alt="mysql" />
            <p>MySQL</p>
          </div>
          <div class="skill-card"><img src="assets/img/icon/cpp.svg" alt="cpp" />
            <p>C++</p>
          </div>
          <div class="skill-card"><img src="assets/img/icon/git-svgrepo-com.svg" alt="git" />
            <p>Git</p>
          </div>
          <div class="skill-card"><img src="assets/img/icon/github-icon.svg" alt="github" />
            <p>GitHub</p>
          </div>
          <div class="skill-card"><img src="assets/img/icon/laravel-svgrepo-com.svg" alt="laravel" />
            <p>Laravel</p>
          </div>
          <div class="skill-card"><img src="assets/img/icon/react-svgrepo-com.svg" alt="react" />
            <p>React</p>
          </div>
          <div class="skill-card"><img src="assets/img/icon/wordpress-svgrepo-com.svg" alt="wordpress" />
            <p>WordPress</p>
          </div>
          <div class="skill-card"><img src="assets/img/icon/figma.svg" alt="figma" />
            <p>Figma</p>
          </div>
          <div class="skill-card"><img src="assets/img/icon/adobe-illustrator-svgrepo-com.svg" alt="illustrator" />
            <p>Illustrator</p>
          </div>
          <div class="skill-card"><img src="assets/img/icon/photoshop-svgrepo-com.svg" alt="photoshop" />
            <p>Photoshop</p>
          </div>
        </div>
      </div>
    </section>

    <!-- RESUME -->
    <section id="resume" class="resume section">
      <div class="container">
        <div data-aos="fade-up" style="margin-bottom:44px;">
          <span class="section-label"><i class="bi bi-briefcase-fill"></i> Resume</span>
          <h2 style="font-family:var(--heading-font);font-size:clamp(1.8rem,3vw,2.5rem);font-weight:800;letter-spacing:-0.04em;">
            Perjalanan Profesional
          </h2>
          <p style="color:rgba(13,15,18,0.5);font-size:14px;margin-top:8px;">Fokus pada inovasi digital dan pengalaman nyata.</p>
        </div>

        <div class="row g-5">
          <!-- LEFT -->
          <div class="col-lg-6" data-aos="fade-up">
            <p class="resume-col-title"><i class="bi bi-mortarboard-fill"></i> Pendidikan &amp; Profil</p>

            <div class="resume-item">
              <div class="ri-org">Digital Presisi</div>
              <span class="ri-period">Pendiri &amp; Lead Freelancer</span>
              <div class="ri-sub">Jakarta, Indonesia · hello@digitalpresisi.com</div>
              <ul>
                <li>Web Dev, Digital Marketing, Graphic Design untuk klien lokal &amp; internasional.</li>
              </ul>
            </div>

            <div class="resume-item">
              <div class="ri-org">Universitas Dian Nusantara</div>
              <span class="ri-period">2022 – Present</span>
              <div class="ri-sub">S1 Teknik Informatika · Jakarta</div>
              <ul>
                <li>Aktif dalam pengembangan project kolaboratif dan riset UX.</li>
              </ul>
            </div>

            <div class="resume-item">
              <div class="ri-org">Dibimbing Digital Indonesia</div>
              <span class="ri-period">2022 – 2023</span>
              <div class="ri-sub">UI/UX Bootcamp Batch 16</div>
              <ul>
                <li>Mendalami design thinking, prototyping, user research.</li>
              </ul>
            </div>
          </div>

          <!-- RIGHT -->
          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <p class="resume-col-title"><i class="bi bi-lightning-charge-fill"></i> Pengalaman Profesional</p>

            <div class="resume-item">
              <div class="ri-org">PT All Data International</div>
              <span class="ri-period">2023 – Present</span>
              <div class="ri-sub">SEO Specialist · Jakarta</div>
              <ul>
                <li>Meningkatkan trafik organik +120% dalam 6 bulan.</li>
                <li>Strategi technical SEO &amp; content cluster untuk domain besar.</li>
              </ul>
            </div>

            <div class="resume-item">
              <div class="ri-org">Stepping Stone Advertising</div>
              <span class="ri-period">2022 – 2023</span>
              <div class="ri-sub">Graphic Design Specialist · Jakarta</div>
              <ul>
                <li>Menciptakan identitas merek, brosur, infografis dan materi iklan.</li>
                <li>Menangani hingga 5 proyek simultan dengan deadline ketat.</li>
              </ul>
            </div>

            <div class="resume-item">
              <div class="ri-org">Freelance Fullstack (Remote)</div>
              <span class="ri-period">2021 – Sekarang</span>
              <div class="ri-sub">Berbagai klien global</div>
              <ul>
                <li>Membangun website responsif, toko online, dashboard admin untuk brand UKM hingga korporasi.</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- PORTFOLIO -->
    <section id="portfolio" class="portfolio section">
      <div class="container">
        <div data-aos="fade-up" style="margin-bottom:4px;">
          <span class="section-label"><i class="bi bi-grid-3x3-gap-fill"></i> Portfolio</span>
          <h2 style="font-family:var(--heading-font);font-size:clamp(1.8rem,3vw,2.5rem);font-weight:800;letter-spacing:-0.04em;">
            Proyek Unggulan
          </h2>
          <p style="color:rgba(13,15,18,0.5);font-size:14px;margin-top:8px;">Website, branding, logo &amp; design system yang menonjol.</p>
        </div>

        <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">

          <ul class="portfolio-filters isotope-filters" data-aos="fade-up">
            <?php foreach ($portfolio_categories as $filter => $name): ?>
              <li data-filter="<?php echo $filter; ?>" class="<?php echo ($filter === '*') ? 'filter-active' : ''; ?>">
                <?php echo htmlspecialchars($name); ?>
              </li>
            <?php endforeach; ?>
          </ul>

          <div class="row gy-4 isotope-container" data-aos="fade-up">
            <?php foreach ($portfolio_items as $item): ?>
              <div class="col-lg-4 col-md-6 portfolio-item isotope-item <?php echo htmlspecialchars($item['category']); ?>">
                <div class="portfolio-content">
                  <img src="<?php echo htmlspecialchars($item['image']); ?>" class="img-fluid" alt="<?php echo htmlspecialchars($item['title']); ?>" />
                  <div class="portfolio-info">
                    <a href="<?php echo htmlspecialchars($item['image']); ?>" data-gallery="portfolio-gallery" class="glightbox preview-link">
                      <i class="bi bi-zoom-in"></i>
                    </a>
                    <h4><?php echo htmlspecialchars($item['title']); ?></h4>
                    <p><?php echo htmlspecialchars($item['sub']); ?></p>
                  </div>
                </div>
              </div>
            <?php endforeach; ?>
          </div>

        </div>
      </div>
    </section>

  </main>

  <footer id="footer">
    <div class="copyright">
      © 2026 <strong>Hoerul Umam · Digital Presisi</strong> — All Rights Reserved
    </div>
    <p class="footer-tagline">Freelance ready · built with ♥ for the modern web</p>
  </footer>

  <a href="#" id="scroll-top" class="scroll-top"><i class="bi bi-arrow-up-short"></i></a>

  <script>
    document.getElementById('age-display') && (document.getElementById('age-display').textContent = new Date().getFullYear() - 1998);

    // Mobile sidebar toggle
    const toggle = document.getElementById('headerToggle');
    const header = document.getElementById('header');
    if (toggle) {
      toggle.addEventListener('click', () => {
        header.classList.toggle('header-show');
        toggle.classList.toggle('bi-list');
        toggle.classList.toggle('bi-x');
      });
    }

    // Scroll top button
    const scrollTopBtn = document.getElementById('scroll-top');
    window.addEventListener('scroll', () => {
      scrollTopBtn.classList.toggle('active', window.scrollY > 300);
    });

    // Active nav on scroll
    const sections = document.querySelectorAll('section[id]');
    const navLinks = document.querySelectorAll('.navmenu a');
    window.addEventListener('scroll', () => {
      let current = '';
      sections.forEach(s => {
        if (window.scrollY >= s.offsetTop - 80) current = s.id;
      });
      navLinks.forEach(a => {
        a.classList.remove('active');
        if (a.getAttribute('href') === '#' + current) a.classList.add('active');
      });
    });
  </script>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/typed.js/typed.umd.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Main JS File -->
  <script src="assets/js/profile.js"></script>
  <script>
    AOS.init({
      duration: 650,
      once: true,
      easing: 'ease-out-cubic'
    });
    new PureCounter();
    const lightbox = GLightbox({
      selector: '.glightbox'
    });
  </script>
</body>

</html>