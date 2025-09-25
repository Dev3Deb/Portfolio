<!DOCTYPE html>
<html lang="fr" data-theme="dark">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>NASSAM Pêlê Deb - Développeuse Web & Mobile | Portfolio</title>
    <meta
        name="description"
        content="Portfolio de NASSAM Pêlê Deb, développeuse web et mobile spécialisée en PHP, JavaScript, Flutter..."
    />
    <meta name="author" content="NASSAM Pêlê Deb" />
    <meta property="og:title" content="NASSAM Pêlê Deb - Développeuse Web & Mobile" />
    <meta property="twitter:title" content="NASSAM Pêlê Deb - Développeuse Web & Mobile" />
    <link
        rel="icon"
        type="image/svg+xml"
        href="data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 120 120'><circle cx='60' cy='60' r='56' fill='%23121222'/><path d='M20 80a40 40 0 0 1 80 0' fill='none' stroke='%237c4dff' stroke-width='10'/></svg>"
    />
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet"
    />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <!-- AOS Library for Scroll Animations -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <!-- EmailJS -->
    <script src="https://cdn.jsdelivr.net/npm/@emailjs/browser@3/dist/email.min.js"></script>
    <script>
        emailjs.init('qzau0cP_c8NsRSGf6');
    </script>
    <style>
        :root {
            /* Couleurs */
            --bg-primary: #0f172a;
            --bg-secondary: #1e293b;
            --bg-tertiary: #334155;
            --text-primary: #f8fafc;
            --text-secondary: #cbd5e1;
            --text-muted: #94a3b8;
            --accent-primary: #6366f1;
            --accent-secondary: #8b5cf6;
            --accent-tertiary: #06b6d4;
            --success: #10b981;
            --warning: #f59e0b;
            --error: #ef4444;
            /* Gradients */
            --gradient-primary: linear-gradient(135deg, var(--accent-primary) 0%, var(--accent-secondary) 100%);
            --gradient-rainbow: linear-gradient(90deg, #ff0040 0%, #ffa000 25%, #00e0ff 50%, #b400ff 100%);
            --gradient-hero: linear-gradient(135deg, rgba(99, 102, 241, 0.15), rgba(139, 92, 246, 0.15));
            /* Espacements */
            --space-xs: 0.5rem;
            --space-sm: 1rem;
            --space-md: 1.5rem;
            --space-lg: 2rem;
            --space-xl: 3rem;
            --space-2xl: 4rem;
            /* Border radius */
            --radius-sm: 0.375rem;
            --radius-md: 0.5rem;
            --radius-lg: 0.75rem;
            --radius-xl: 1rem;
            --radius-2xl: 1.5rem;
            /* Ombres */
            --shadow-sm: 0 1px 2px 0 rgba(0, 0, 0, 0.05);
            --shadow-md: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
            --shadow-lg: 0 10px 15px -3px rgba(0, 0, 0, 0.1);
            --shadow-xl: 0 20px 25px -5px rgba(0, 0, 0, 0.1);
            --shadow-2xl: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
            /* Transitions */
            --transition-fast: 0.15s ease;
            --transition-normal: 0.3s ease;
            --transition-slow: 0.5s ease;
            --transition-bounce: 0.5s cubic-bezier(0.68, -0.55, 0.265, 1.55);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
            scroll-padding-top: 100px;
        }

        body {
            font-family: 'Inter', system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
            line-height: 1.6;
            color: var(--text-secondary);
            background: var(--bg-primary);
            overflow-x: hidden;
            font-weight: 400;
            transition: background-color var(--transition-normal);
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 var(--space-lg);
        }

        /* Particles Background */
        #particles-js {
            position: fixed;
            width: 100%;
            height: 100%;
            z-index: -1;
            top: 0;
            left: 0;
        }

        /* Header */
        .header {
            position: sticky;
            top: 0;
            background: rgba(15, 23, 42, 0.95);
            backdrop-filter: blur(10px);
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
            z-index: 1000;
            transition: var(--transition-normal);
        }

        .header.scrolled {
            box-shadow: var(--shadow-lg);
        }

        .header-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: var(--space-md) 0;
            gap: var(--space-lg);
        }

        .brand {
            display: flex;
            align-items: center;
            gap: var(--space-md);
            cursor: pointer;
        }

        .logo {
            width: 40px;
            height: 40px;
            flex-shrink: 0;
            transition: var(--transition-normal);
        }

        .brand:hover .logo {
            transform: rotate(15deg) scale(1.05);
        }

        .brand-info h1 {
            font-size: 1.125rem;
            background: var(--gradient-primary);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            margin: 0;
            transition: var(--transition-normal);
        }

        .brand-info p {
            font-size: 0.8125rem;
            color: var(--text-muted);
            margin: 0;
        }

        .nav {
            display: flex;
            gap: var(--space-sm);
            list-style: none;
        }

        .nav a {
            color: var(--text-secondary);
            text-decoration: none;
            padding: var(--space-xs) var(--space-sm);
            border-radius: var(--radius-sm);
            transition: var(--transition-normal);
            position: relative;
            font-weight: 500;
            font-size: 0.875rem;
        }

        .nav a:hover,
        .nav a.active {
            color: var(--text-primary);
            background: rgba(99, 102, 241, 0.1);
        }

        .nav a.active {
            background: rgba(99, 102, 241, 0.2) !important;
            border-color: rgba(99, 102, 241, 0.5) !important;
            color: var(--text-primary) !important;
        }

        .nav a.active::after {
            content: '';
            position: absolute;
            bottom: -1px;
            left: 50%;
            transform: translateX(-50%);
            width: 4px;
            height: 4px;
            background: var(--accent-primary);
            border-radius: 50%;
        }

        .mobile-menu-btn {
            display: none;
            background: none;
            border: none;
            color: var(--text-primary);
            font-size: 1.5rem;
            cursor: pointer;
            padding: var(--space-xs);
            border-radius: var(--radius-sm);
            transition: var(--transition-normal);
        }

        .mobile-menu-btn:hover {
            background: rgba(99, 102, 241, 0.1);
        }

        /* Hero Section */
        .hero {
            min-height: 100vh;
            display: flex;
            align-items: center;
            position: relative;
            overflow: hidden;
            padding-top: 80px;
        }

        .hero::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: var(--gradient-hero);
            z-index: 1;
        }

        .hero-content {
            position: relative;
            z-index: 2;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: var(--space-2xl);
            align-items: center;
        }

        .hero-text {
            animation: slideInLeft 1s ease-out;
        }

        .hero-subtitle {
            color: var(--accent-primary);
            font-weight: 600;
            margin-bottom: var(--space-sm);
            font-size: 1.1rem;
            display: flex;
            align-items: center;
            gap: var(--space-xs);
        }

        .hero-title {
            font-size: clamp(2.5rem, 5vw, 3.5rem);
            font-weight: 800;
            margin-bottom: var(--space-md);
            line-height: 1.2;
            background: linear-gradient(135deg, var(--text-primary), var(--accent-primary));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .hero-description {
            font-size: 1.2rem;
            margin-bottom: var(--space-xl);
            color: var(--text-secondary);
        }

        .hero-cta {
            display: flex;
            gap: var(--space-md);
            flex-wrap: wrap;
        }

        .btn {
            display: inline-flex;
            align-items: center;
            gap: var(--space-sm);
            padding: var(--space-md) var(--space-lg);
            border: none;
            border-radius: var(--radius-lg);
            font-weight: 600;
            text-decoration: none;
            transition: var(--transition-normal);
            cursor: pointer;
            font-size: 1rem;
            position: relative;
            overflow: hidden;
        }

        .btn-primary {
            background: linear-gradient(135deg, var(--accent-primary), var(--accent-secondary));
            color: white;
            box-shadow: var(--shadow-lg);
        }

        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: var(--shadow-xl);
        }

        .btn-secondary {
            background: transparent;
            color: var(--text-primary);
            border: 2px solid var(--accent-primary);
        }

        .btn-secondary:hover {
            background: var(--accent-primary);
            color: white;
        }

        .btn-certificate {
            display: inline-flex;
            align-items: center;
            gap: var(--space-xs);
            padding: var(--space-sm) var(--space-md);
            background: rgba(99, 102, 241, 0.1);
            color: var(--accent-primary);
            border: 1px solid rgba(99, 102, 241, 0.3);
            border-radius: var(--radius-md);
            text-decoration: none;
            font-size: 0.875rem;
            font-weight: 500;
            transition: var(--transition-normal);
        }

        .btn-certificate:hover {
            background: var(--accent-primary);
            color: white;
            transform: translateY(-1px);
            box-shadow: var(--shadow-md);
        }

        .hero-photo {
            display: flex;
            justify-content: center;
            align-items: center;
            animation: slideInRight 1s ease-out;
        }

        .hero-photo-container {
            position: relative;
            width: min(350px, 90%);
            height: min(350px, 90%);
        }

        .hero-photo-frame {
            width: 100%;
            height: 100%;
            border-radius: 50%;
            background: linear-gradient(135deg, var(--accent-primary), var(--accent-secondary), var(--accent-tertiary));
            padding: 4px;
            box-shadow: var(--shadow-xl);
            animation: float 6s ease-in-out infinite;
        }

        .hero-photo-inner {
            width: 100%;
            height: 100%;
            border-radius: 50%;
            overflow: hidden;
            background: var(--bg-secondary);
            position: relative;
        }

        .hero-photo-placeholder {
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, rgba(99, 102, 241, 0.2), rgba(139, 92, 246, 0.2));
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--text-muted);
            font-size: 1.2rem;
            text-align: center;
            padding: var(--space-md);
        }

        .hero-photo-img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            object-position: center;
        }

        .scroll-down {
            position: absolute;
            bottom: 30px;
            left: 50%;
            transform: translateX(-50%);
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: var(--space-xs);
            color: var(--text-muted);
            font-size: 0.875rem;
            z-index: 10;
            animation: bounce 2s infinite;
        }

        .scroll-down i {
            font-size: 1.5rem;
        }

        /* About Section */
        .about {
            padding: var(--space-2xl) 0;
            background: linear-gradient(180deg, var(--bg-primary), var(--bg-secondary));
        }

        .about-content {
            display: grid;
            grid-template-columns: 300px 1fr;
            gap: var(--space-2xl);
            align-items: start;
        }

        .about-photo {
            position: sticky;
            top: 100px;
        }

        .about-photo-container {
            position: relative;
            width: 100%;
            aspect-ratio: 3/4;
            border-radius: var(--radius-xl);
            overflow: hidden;
            background: linear-gradient(135deg, var(--accent-primary), var(--accent-secondary));
            padding: 3px;
            box-shadow: var(--shadow-lg);
            transition: var(--transition-normal);
        }

        .about-photo-container:hover {
            transform: translateY(-5px);
            box-shadow: var(--shadow-xl);
        }

        .about-photo-inner {
            width: 100%;
            height: 100%;
            border-radius: var(--radius-xl);
            overflow: hidden;
            background: var(--bg-tertiary);
        }

        .about-photo-placeholder {
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, rgba(99, 102, 241, 0.2), rgba(139, 92, 246, 0.2));
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--text-muted);
            text-align: center;
            padding: var(--space-md);
            font-size: 1.1rem;
        }

        .about-photo-img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            object-position: center;
        }

        .about-text {
            padding-top: var(--space-lg);
        }

        .section-title {
            text-align: center;
            margin-bottom: var(--space-2xl);
        }

        .section-title h2 {
            font-size: 2.5rem;
            font-weight: 800;
            color: var(--text-primary);
            margin-bottom: var(--space-sm);
            background: linear-gradient(135deg, var(--text-primary), var(--accent-primary));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .section-title p {
            font-size: 1.1rem;
            color: var(--text-muted);
        }

        .about-intro {
            font-size: 1.3rem;
            color: var(--text-primary);
            font-weight: 600;
            margin-bottom: var(--space-lg);
            line-height: 1.4;
        }

        .about-description {
            font-size: 1.1rem;
            line-height: 1.8;
            margin-bottom: var(--space-xl);
            color: var(--text-secondary);
        }

        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(120px, 1fr));
            gap: var(--space-lg);
            margin-bottom: var(--space-xl);
        }

        .stat-card {
            text-align: center;
            padding: var(--space-lg);
            background: rgba(99, 102, 241, 0.1);
            border: 1px solid rgba(99, 102, 241, 0.2);
            border-radius: var(--radius-lg);
            transition: var(--transition-normal);
        }

        .stat-card:hover {
            background: rgba(99, 102, 241, 0.15);
            transform: translateY(-2px);
        }

        .stat-number {
            font-size: 2rem;
            font-weight: 800;
            color: var(--accent-primary);
            display: block;
            margin-bottom: var(--space-xs);
        }

        .stat-label {
            color: var(--text-secondary);
            font-weight: 500;
        }

        /* Formation Section */
        .formation {
            padding: var(--space-2xl) 0;
            background: var(--bg-secondary);
        }

        .timeline {
            position: relative;
            padding-left: var(--space-xl);
        }

        .timeline::before {
            content: '';
            position: absolute;
            left: var(--space-md);
            top: 0;
            bottom: 0;
            width: 2px;
            background: linear-gradient(to bottom, var(--accent-primary), var(--accent-secondary));
        }

        .timeline-item {
            position: relative;
            margin-bottom: var(--space-xl);
            background: rgba(255, 255, 255, 0.05);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: var(--radius-lg);
            padding: var(--space-lg);
            margin-left: var(--space-xl);
            transition: var(--transition-normal);
        }

        .timeline-item:hover {
            background: rgba(255, 255, 255, 0.08);
            transform: translateX(5px);
        }

        .timeline-item::before {
            content: '';
            position: absolute;
            left: calc(-2rem - 6px);
            top: var(--space-lg);
            width: 12px;
            height: 12px;
            background: var(--accent-primary);
            border-radius: 50%;
            border: 3px solid var(--bg-secondary);
        }

        .timeline-date {
            color: var(--accent-primary);
            font-weight: 600;
            font-size: 0.9rem;
            margin-bottom: var(--space-sm);
        }

        .timeline-title {
            color: var(--text-primary);
            font-size: 1.3rem;
            font-weight: 700;
            margin-bottom: var(--space-sm);
        }

        .timeline-institution {
            color: var(--accent-secondary);
            font-weight: 600;
            margin-bottom: var(--space-sm);
        }

        .timeline-description {
            color: var(--text-secondary);
            line-height: 1.7;
        }

        /* Certifications Section */
        .certifications {
            padding: var(--space-2xl) 0;
            background: linear-gradient(180deg, var(--bg-secondary), var(--bg-primary));
        }

        .certifications-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(400px, 1fr));
            gap: var(--space-lg);
        }

        .certification-card {
            background: rgba(255, 255, 255, 0.05);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: var(--radius-lg);
            padding: var(--space-lg);
            transition: var(--transition-normal);
            position: relative;
            overflow: hidden;
        }

        .certification-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 3px;
            background: var(--gradient-primary);
        }

        .certification-card:hover {
            background: rgba(255, 255, 255, 0.08);
            transform: translateY(-5px);
            box-shadow: var(--shadow-lg);
        }

        .certification-header {
            display: flex;
            align-items: flex-start;
            gap: var(--space-md);
            margin-bottom: var(--space-lg);
        }

        .certification-icon {
            width: 48px;
            height: 48px;
            background: var(--gradient-primary);
            border-radius: var(--radius-md);
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
            color: white;
            font-weight: 600;
            font-size: 1.2rem;
        }

        .certification-info {
            flex: 1;
        }

        .certification-name {
            color: var(--text-primary);
            font-size: 1.2rem;
            font-weight: 700;
            margin-bottom: var(--space-xs);
            line-height: 1.3;
        }

        .certification-org {
            color: var(--accent-secondary);
            font-weight: 600;
            margin-bottom: var(--space-xs);
        }

        .certification-year {
            color: var(--text-muted);
            font-size: 0.9rem;
        }

        .certification-footer {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: var(--space-lg);
            padding-top: var(--space-md);
            border-top: 1px solid rgba(255, 255, 255, 0.1);
        }

        .certification-status {
            display: flex;
            align-items: center;
            gap: var(--space-xs);
            color: var(--success);
            font-size: 0.875rem;
            font-weight: 500;
        }

        /* Compétences Section */
        .competences {
            padding: var(--space-2xl) 0;
            background: var(--bg-primary);
        }

        .grid {
            display: grid;
            gap: var(--space-lg);
        }

        .grid-2 {
            grid-template-columns: repeat(auto-fit, minmax(500px, 1fr));
        }

        .grid-3 {
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        }

        .skill-card {
            background: rgba(255, 255, 255, 0.05);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: var(--radius-lg);
            padding: var(--space-lg);
            transition: var(--transition-normal);
        }

        .skill-card:hover {
            background: rgba(255, 255, 255, 0.08);
            transform: translateY(-5px);
            box-shadow: var(--shadow-lg);
        }

        .skill-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: var(--space-md);
        }

        .skill-name {
            color: var(--text-primary);
            font-weight: 600;
            font-size: 1.1rem;
        }

        .skill-level {
            color: var(--accent-primary);
            font-weight: 700;
        }

        .progress-bar {
            width: 100%;
            height: 8px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: var(--radius-sm);
            overflow: hidden;
            margin-bottom: var(--space-md);
        }

        .progress-fill {
            height: 100%;
            background: linear-gradient(90deg, var(--accent-primary), var(--accent-secondary));
            border-radius: var(--radius-sm);
            transition: width 1.5s ease-in-out;
        }

        .skill-description {
            color: var(--text-secondary);
            font-size: 0.9rem;
            line-height: 1.6;
        }

        /* Projets Section */
        .projets {
            padding: var(--space-2xl) 0;
            background: var(--bg-secondary);
        }

        .project-card {
            background: rgba(255, 255, 255, 0.05);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: var(--radius-lg);
            padding: var(--space-lg);
            transition: var(--transition-normal);
            height: 100%;
            display: flex;
            flex-direction: column;
            position: relative;
            overflow: hidden;
        }

        .project-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, rgba(99, 102, 241, 0.1), rgba(139, 92, 246, 0.1));
            opacity: 0;
            transition: var(--transition-normal);
            z-index: 0;
            pointer-events: none;
        }

        .project-card:hover::before {
            opacity: 1;
        }

        .project-card:hover {
            background: rgba(255, 255, 255, 0.08);
            transform: translateY(-5px);
            box-shadow: var(--shadow-lg);
        }

        .project-title {
            color: var(--text-primary);
            font-size: 1.3rem;
            font-weight: 700;
            margin-bottom: var(--space-md);
            position: relative;
            z-index: 1;
        }

        .project-description {
            color: var(--text-secondary);
            line-height: 1.7;
            margin-bottom: var(--space-lg);
            flex-grow: 1;
            position: relative;
            z-index: 1;
        }

        .tech-stack {
            display: flex;
            flex-wrap: wrap;
            gap: var(--space-sm);
            margin-bottom: var(--space-lg);
            position: relative;
            z-index: 1;
        }

        .tech-tag {
            background: rgba(99, 102, 241, 0.2);
            color: var(--accent-primary);
            padding: var(--space-xs) var(--space-sm);
            border-radius: var(--radius-sm);
            font-size: 0.8rem;
            font-weight: 500;
            border: 1px solid rgba(99, 102, 241, 0.3);
        }

        .project-links {
            margin-top: 15px;
            display: flex;
            gap: 10px;
            position: relative;
            z-index: 1;
        }

        .btn-project {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            padding: 8px 14px;
            font-size: 14px;
            font-weight: 500;
            color: #fff;
            background: #007bff;
            border-radius: 6px;
            text-decoration: none;
            transition: 0.3s ease;
            position: relative;
            z-index: 2;
        }

        .btn-project:hover {
            background: #0056b3;
            transform: translateY(-2px);
        }

        /* Contact Section */
        .contact {
            padding: var(--space-2xl) 0;
            background: linear-gradient(135deg, rgba(99, 102, 241, 0.05), rgba(139, 92, 246, 0.05));
        }

        .contact-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: var(--space-2xl);
            align-items: start;
        }

        .contact-info {
            background: var(--bg-secondary);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: var(--radius-lg);
            padding: var(--space-xl);
        }

        .contact-item {
            display: flex;
            align-items: center;
            gap: var(--space-md);
            padding: var(--space-md) 0;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        }

        .contact-item:last-child {
            border-bottom: none;
        }

        .contact-item h4 {
            color: var(--text-primary);
            margin-bottom: var(--space-xs);
        }

        .contact-item a {
            color: var(--accent-primary);
            text-decoration: none;
        }

        .contact-item a:hover {
            color: var(--accent-secondary);
        }

        .contact-form {
            background: var(--bg-secondary);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: var(--radius-lg);
            padding: var(--space-xl);
        }

        .form-group {
            margin-bottom: var(--space-lg);
        }

        .form-label {
            display: block;
            color: var(--text-primary);
            font-weight: 600;
            margin-bottom: var(--space-sm);
        }

        .form-input,
        .form-textarea {
            width: 100%;
            padding: var(--space-md);
            background: rgba(255, 255, 255, 0.05);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: var(--radius-md);
            color: var(--text-primary);
            font-size: 1rem;
            transition: var(--transition-normal);
            font-family: inherit;
        }

        .form-input:focus,
        .form-textarea:focus {
            outline: none;
            border-color: var(--accent-primary);
            background: rgba(255, 255, 255, 0.08);
            box-shadow: 0 0 0 3px rgba(99, 102, 241, 0.1);
        }

        .form-textarea {
            resize: vertical;
            min-height: 120px;
        }

        /* Footer */
        .footer {
            background: var(--bg-secondary);
            padding: var(--space-2xl) 0 var(--space-lg);
            border-top: 1px solid rgba(255, 255, 255, 0.1);
        }

        .social-links {
            display: flex;
            gap: var(--space-md);
        }

        .social-link {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 48px;
            height: 48px;
            background: rgba(99, 102, 241, 0.1);
            border: 1px solid rgba(99, 102, 241, 0.2);
            border-radius: var(--radius-md);
            color: var(--accent-primary);
            text-decoration: none;
            transition: var(--transition-normal);
        }

        .social-link:hover {
            background: var(--accent-primary);
            color: white;
            transform: translateY(-2px);
        }

        /* Theme Toggle */
        .theme-toggle {
            position: fixed;
            bottom: var(--space-lg);
            right: var(--space-lg);
            width: 50px;
            height: 50px;
            border-radius: 50%;
            background: var(--gradient-primary);
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            cursor: pointer;
            z-index: 999;
            box-shadow: var(--shadow-lg);
            transition: var(--transition-normal);
        }

        .theme-toggle:hover {
            transform: translateY(-3px) rotate(30deg);
            box-shadow: var(--shadow-xl);
        }

        /* Animations */
        @keyframes slideInLeft {
            from {
                opacity: 0;
                transform: translateX(-50px);
            }
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        @keyframes slideInRight {
            from {
                opacity: 0;
                transform: translateX(50px);
            }
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        @keyframes float {
            0%,
            100% {
                transform: translateY(0px);
            }
            50% {
                transform: translateY(-10px);
            }
        }

        @keyframes bounce {
            0%,
            20%,
            50%,
            80%,
            100% {
                transform: translateY(0) translateX(-50%);
            }
            40% {
                transform: translateY(-10px) translateX(-50%);
            }
            60% {
                transform: translateY(-5px) translateX(-50%);
            }
        }

        @keyframes fadeIn {
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .fade-in {
            opacity: 0;
            transform: translateY(30px);
            transition: all 0.6s ease-out;
        }

        /* Responsive Design */
        @media (max-width: 1024px) {
            .contact-grid {
                grid-template-columns: 1fr;
            }
            .hero-content {
                grid-template-columns: 1fr;
                gap: var(--space-xl);
            }
            .certifications-grid {
                grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            }
        }

        @media (max-width: 768px) {
            .hero-content {
                text-align: center;
            }
            .hero-title {
                font-size: 2.5rem;
            }
            .hero-photo-container {
                width: 280px;
                height: 280px;
            }
            .about-content {
                grid-template-columns: 1fr;
                gap: var(--space-xl);
            }
            .about-photo {
                position: static;
                max-width: 300px;
                margin: 0 auto;
            }
            .nav {
                position: fixed;
                top: 0;
                right: -100%;
                width: 70%;
                height: 100vh;
                background: var(--bg-primary);
                flex-direction: column;
                justify-content: center;
                align-items: center;
                transition: var(--transition-normal);
                z-index: 999;
                box-shadow: -5px 0 25px rgba(0, 0, 0, 0.2);
            }
            .nav.active {
                right: 0;
            }
            .nav a {
                font-size: 1.1rem;
                padding: var(--space-md) var(--space-lg);
            }
            .mobile-menu-btn {
                display: block;
                z-index: 1000;
            }
            .grid-2 {
                grid-template-columns: 1fr;
            }
            .grid-3 {
                grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            }
            .header-content {
                flex-direction: row;
                gap: var(--space-md);
            }
            .brand {
                justify-content: flex-start;
            }
            .brand-info h1 {
                font-size: 1.125rem;
                text-align: left;
            }
            .brand-info p {
                text-align: left;
            }
            .certifications-grid {
                grid-template-columns: 1fr;
            }
        }

        @media (max-width: 480px) {
            .container {
                padding: 0 var(--space-sm);
            }
            .hero-title {
                font-size: 2rem;
            }
            .hero-photo-container {
                width: 240px;
                height: 240px;
            }
            .section-title h2 {
                font-size: 2rem;
            }
            .logo {
                width: 40px;
                height: 40px;
            }
            .brand-info h1 {
                font-size: 1rem;
            }
            .brand-info p {
                font-size: 0.8125rem;
            }
            .certification-card {
                padding: var(--space-md);
            }
            .certification-header {
                flex-direction: column;
                text-align: center;
                gap: var(--space-sm);
            }
            .certification-footer {
                flex-direction: column;
                gap: var(--space-sm);
                text-align: center;
            }
            .hero-cta {
                justify-content: center;
            }
        }

        /* Accessibilité */
        @media (prefers-reduced-motion: reduce) {
            *,
            *::before,
            *::after {
                animation-duration: 0.01ms !important;
                animation-iteration-count: 1 !important;
                transition-duration: 0.01ms !important;
            }
        }

        .brand:focus-within,
        .logo:focus,
        .brand-info h1:focus {
            outline: 2px solid var(--accent-primary);
            outline-offset: 2px;
            border-radius: 4px;
        }

        .fade-in:nth-child(1) {
            animation-delay: 0.1s;
        }
        .fade-in:nth-child(2) {
            animation-delay: 0.2s;
        }
        .fade-in:nth-child(3) {
            animation-delay: 0.3s;
        }

        .brand:hover .logo {
            transform: scale(1.05);
            transition: transform var(--transition-normal);
        }

        .brand:hover .brand-info h1 {
            background: linear-gradient(135deg, var(--accent-secondary) 0%, var(--accent-tertiary) 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            transition: all var(--transition-normal);
        }

        @media print {
            .brand-info h1 {
                color: #6366f1 !important;
                -webkit-text-fill-color: #6366f1 !important;
            }
            .brand-info p {
                color: #666 !important;
            }
            .hero-photo,
            .hero-photo-frame {
                display: none !important;
            }
        }

        .stars span {
            color: #6366f1;
            font-size: 16px;
            margin: 0 2px;
            animation: star-blink 1.5s infinite alternate;
        }

        .stars span:nth-child(2) {
            animation-delay: 0.3s;
        }

        .stars span:nth-child(3) {
            animation-delay: 0.6s;
        }

        @keyframes star-blink {
            0% {
                opacity: 0.3;
                transform: scale(0.8);
            }
            50% {
                opacity: 1;
                transform: scale(1.2);
            }
            100% {
                opacity: 0.3;
                transform: scale(0.8);
            }
        }

        .icon-circle {
            display: inline-flex;
            justify-content: center;
            align-items: center;
            width: 28px;
            height: 28px;
            border: 3px solid #6366f1;
            border-radius: 50%;
            margin-right: 8px;
            vertical-align: middle;
            color: #6366f1;
            font-size: 14px;
            animation: icon-blink 1.5s infinite alternate;
        }

        @keyframes icon-blink {
            0% {
                transform: scale(0.85);
                opacity: 0.4;
            }
            50% {
                transform: scale(1.1);
                opacity: 1;
            }
            100% {
                transform: scale(0.85);
                opacity: 0.4;
            }
        }

        .icon-circle:nth-child(2) {
            animation-delay: 0.3s;
        }
        .icon-circle:nth-child(3) {
            animation-delay: 0.6s;
        }
    </style>
</head>
<body>
    <div id="particles-js"></div>

    <header class="header">
        <div class="container">
            <div class="header-content">
                <div class="brand">
                    <svg class="logo" viewBox="0 0 120 120" xmlns="http://www.w3.org/2000/svg" aria-label="Logo Dev Deb">
                        <defs>
                            <linearGradient id="logoGradient" x1="0%" y1="0%" x2="100%" y2="100%">
                                <stop offset="0%" style="stop-color:#6366f1" />
                                <stop offset="50%" style="stop-color:#8b5cf6" />
                                <stop offset="100%" style="stop-color:#06b6d4" />
                            </linearGradient>
                        </defs>
                        <circle cx="60" cy="60" r="56" fill="url(#logoGradient)" opacity="0.1" />
                        <circle cx="60" cy="60" r="56" fill="none" stroke="url(#logoGradient)" stroke-width="2" />
                        <path d="M25 75 Q60 45 95 75" fill="none" stroke="url(#logoGradient)" stroke-width="4" stroke-linecap="round" />
                        <path d="M35 75 Q60 55 85 75" fill="none" stroke="url(#logoGradient)" stroke-width="3" stroke-linecap="round" opacity="0.7" />
                        <path d="M45 75 Q60 65 75 75" fill="none" stroke="url(#logoGradient)" stroke-width="2" stroke-linecap="round" opacity="0.5" />
                    </svg>
                    <div class="brand-info">
                        <h1>Dev Deb</h1>
                        <p>L'arc en code</p>
                    </div>
                </div>
                <button class="mobile-menu-btn" aria-label="Menu mobile">
                    <i class="fas fa-bars"></i>
                </button>
                <nav>
                    <ul class="nav">
                        <li><a href="#hero" class="active">Accueil</a></li>
                        <li><a href="#about">À propos</a></li>
                        <li><a href="#formation">Formation</a></li>
                        <li><a href="#certifications">Certifications</a></li>
                        <li><a href="#competences">Compétences</a></li>
                        <li><a href="#projets">Projets</a></li>
                        <li><a href="#contact">Contact</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>

    <main>
        <!-- Hero Section -->
        <section id="hero" class="hero">
            <div class="container">
                <div class="hero-content">
                    <div class="hero-text">
                        <p class="hero-subtitle"><i class="fas fa-hand-wave"></i> Salut, je suis</p>
                        <h1 class="hero-title">NASSAM Pêlê Deb</h1>
                        <p class="hero-description">
                            Développeuse Web & Mobile passionnée, je crée des expériences numériques exceptionnelles qui allient créativité et performance technique.
                        </p>
                        <div class="hero-cta">
                            <a href="#projets" class="btn btn-primary">
                                <i class="fas fa-code"></i> Voir mes projets
                            </a>
                            <a href="#contact" class="btn btn-secondary">
                                <i class="fas fa-envelope"></i> Me contacter
                            </a>
                        </div>
                    </div>
                    <div class="hero-photo">
                        <div class="hero-photo-container">
                            <div class="hero-photo-frame">
                                <div class="hero-photo-inner">
                                    <img src="votre-photo-about.jpg" alt="NASSAM Pêlê Deb" class="hero-photo-img" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="scroll-down">
                <i class="fas fa-chevron-down"></i>
                <span>Défiler vers le bas</span>
            </div>
        </section>

        <!-- À propos Section -->
        <section id="about" class="about">
            <div class="container">
                <div class="section-title" data-aos="fade-up">
                    <h2>À Propos de Moi</h2>
                    <p>Mon parcours, mes valeurs et ma passion pour la technologie</p>
                </div>
                <div class="about-content">
                    <div class="about-photo" data-aos="fade-right">
                        <div class="about-photo-container">
                            <div class="about-photo-inner">
                                <img src="votre-photo-about.jpg" alt="NASSAM Pêlê Deb" class="about-photo-img" />
                            </div>
                        </div>
                    </div>
                    <div class="about-text" data-aos="fade-left">
                        <p class="about-intro">
                            Passionnée par l'innovation technologique et l'expérience utilisateur, je transforme des idées créatives en solutions numériques performantes.
                        </p>
                        <p class="about-description">
                            Diplômée en développement web et mobile, j'ai acquis une solide expertise dans la création d'applications modernes et responsives. Mon approche combine rigueur technique et créativité pour livrer des projets qui dépassent les attentes.
                        </p>
                        <p class="about-description">
                            Toujours à la recherche de nouveaux défis, j'aime collaborer avec des équipes dynamiques et contribuer à des projets qui ont un impact positif. Mon objectif est de créer des expériences numériques qui simplifient la vie des utilisateurs tout en respectant les meilleures pratiques du développement.
                        </p>
                        <div class="stats-grid">
                            <div class="stat-card" data-aos="zoom-in" data-aos-delay="100">
                                <span class="stat-number">5+</span>
                                <span class="stat-label">Projets Réalisés</span>
                            </div>
                            <div class="stat-card" data-aos="zoom-in" data-aos-delay="200">
                                <span class="stat-number">1</span>
                                <span class="stat-label">Années d'Expérience</span>
                            </div>
                            <div class="stat-card" data-aos="zoom-in" data-aos-delay="300">
                                <span class="stat-number">7</span>
                                <span class="stat-label">Technologies Maîtrisées</span>
                            </div>
                            <div class="stat-card" data-aos="zoom-in" data-aos-delay="400">
                                <span class="stat-number">100%</span>
                                <span class="stat-label">Clients Satisfaits</span>
                            </div>
                        </div>
                        <div class="hero-cta">
                            <a href="#contact" class="btn btn-primary">
                                <i class="fas fa-handshake"></i> Travaillons ensemble
                            </a>
                            <a href="#formation" class="btn btn-secondary">
                                <i class="fas fa-graduation-cap"></i> Mon parcours
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="stars" style="margin-top: 90px; margin-bottom: -60px; display: flex; justify-content: center; align-items: center;">
                <span>★</span>
                <span>★</span>
                <span>★</span>
            </div>
        </section>

        <!-- Formation Section -->
        <section id="formation" class="formation">
            <div class="container">
                <div class="section-title" data-aos="fade-up">
                    <h2>Formation & Parcours</h2>
                </div>

                <div class="category" data-aos="fade-up" style="margin-bottom: 30px;">
                    <p style="text-align: center; margin-top: -50px; margin-bottom: 20px;">
                        <span class="icon-circle"><i class="fas fa-graduation-cap"></i></span> Parcours académique
                    </p>
                    <div class="timeline">
                        <div class="timeline-item" data-aos="fade-right">
                            <div class="timeline-date">2022-2025</div>
                            <h3 class="timeline-title">Licence en Système Informatique et Logiciel</h3>
                            <div class="timeline-institution">Institut Universitaire LES COURS SONOU de Parakou, Bénin</div>
                            <p class="timeline-description">
                                Formation approfondie en développement logiciel, gestion de bases de données, algorithmes et structures de données. Spécialisation en développement web et mobile, avec des projets concrets utilisant les technologies modernes et performantes.
                            </p>
                        </div>
                        <div class="timeline-item" data-aos="fade-right" data-aos-delay="300">
                            <div class="timeline-date">2021-2022</div>
                            <h3 class="timeline-title">Baccalauréat Scientifique</h3>
                            <div class="timeline-institution">Collège d'Enseignement Général 1 de Djougou, Bénin</div>
                            <p class="timeline-description">
                                Baccalauréat série D (Mathématiques, Biologie et Sciences Physiques-Chimie) avec mention Passable. Développement de l'esprit logique et analytique, bases solides en mathématiques et sciences appliquées.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="category" data-aos="fade-up" style="margin-bottom: 40px; margin-top: 30px;">
                    <p style="text-align: center; margin-bottom: 20px;">
                        <span class="icon-circle"><i class="fas fa-briefcase"></i></span> Évolution professionnelle
                    </p>
                    <div class="timeline">
                        <div class="timeline-item" data-aos="fade-right">
                            <div class="timeline-date">2025</div>
                            <h3 class="timeline-title">Stage Dév. Web & Projet de Fin de Licence</h3>
                            <div class="timeline-institution">IMHOTEP Labs</div>
                            <p class="timeline-description">
                                Réalisation du projet de soutenance : conception et développement d'une application web. Participation à d'autres activités internes de la structure, telles que l’analyse des besoins, la conception d'interfaces et la collaboration avec l’équipe technique pour le développement et les tests. Développement de compétences pratiques en gestion de projet, conception logicielle et travail en équipe.
                            </p>
                        </div>
                        <div class="timeline-item" data-aos="fade-right">
                            <div class="timeline-date">2025</div>
                            <h3 class="timeline-title">Formation Flutter & Dart - Développement Mobile</h3>
                            <div class="timeline-institution">D-CLIC, Formez-vous au numérique avec l'OIF</div>
                            <p class="timeline-description">
                                Installation et configuration de l'environnement Flutter & Dart. Maîtrise du langage Dart pour développer des programmes complexes. Compréhension et utilisation des widgets avec et sans état. Conception d’interfaces utilisateur élémentaires et intégration d’une base de données locale avec SQFLite. Développement d’applications mobiles fonctionnelles et pratiques.
                            </p>
                        </div>
                        <div class="timeline-item" data-aos="fade-right">
                            <div class="timeline-date">2025</div>
                            <h3 class="timeline-title">Formation Mobile App Design & UI/UX – Écoconception et prototypage</h3>
                            <div class="timeline-institution">D-CLIC, Formez-vous au numérique avec l'OIF</div>
                            <p class="timeline-description">
                                Compréhension des principaux langages et approches pour le développement d’applications mobiles. Conception d’interfaces utilisateur attrayantes en appliquant les bonnes pratiques d’écoconception. Création de maquettes (wireframes) et prototypes d’applications mobiles. Application des directives "Material App" pour des interfaces modernes et intuitives. Utilisation d’outils de développement mobile sans code (App Inventor, Flutter Flow, Nowa) pour créer des applications fonctionnelles.
                            </p>
                        </div>
                        <div class="timeline-item" data-aos="fade-right">
                            <div class="timeline-date">2024</div>
                            <h3 class="timeline-title">Stage Dév. Web / UI-UX</h3>
                            <div class="timeline-institution">WASSANGARI Labs</div>
                            <p class="timeline-description">
                                Réalisation de sites web à partir de maquettes fournies et création de maquettes interactives avec Figma. Participation à la conception et au développement d’applications web, en respectant les standards UX/UI et la compatibilité multi-navigateurs.
                            </p>
                        </div>
                        <div class="timeline-item" data-aos="fade-right">
                            <div class="timeline-date">2023</div>
                            <h3 class="timeline-title">Stage Graphiste / Designer graphique</h3>
                            <div class="timeline-institution">Préfecture Du Département De La DONGA</div>
                            <p class="timeline-description">
                                Création de visuels attractifs et professionnels pour différents supports : flyers, logos, affiches et contenus numériques. Maîtrise d’Adobe Illustrator pour le design vectoriel et la mise en page. Développement de la créativité, sens de l’esthétique, cohérence visuelle et respect des briefs clients.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="category" data-aos="fade-up">
                    <p style="text-align: center; margin-bottom: 20px;">
                        <span class="icon-circle"><i class="fas fa-seedling"></i></span> Développement personnel
                    </p>
                    <div class="timeline">
                        <div class="timeline-item" data-aos="fade-right">
                            <div class="timeline-date">2025</div>
                            <h3 class="timeline-title">Programme d'Éducation pour la Paix – Prem Rawat</h3>
                            <div class="timeline-institution">Bibliothèque du CAEB, Parakou</div>
                            <p class="timeline-description">
                                Programme visant à développer la paix intérieure et la conscience de soi. Comprend des activités de réflexion, d'appréciation et de renforcement des ressources personnelles telles que la force intérieure, le choix et l'espoir.
                            </p>
                        </div>
                    </div>
                    <div class="timeline">
                        <div class="timeline-item" data-aos="fade-left">
                            <div class="timeline-date">2023</div>
                            <h3 class="timeline-title">Formation en Art Oratoire</h3>
                            <div class="timeline-institution">CLUB RFI COTONOU</div>
                            <p class="timeline-description">
                                Formation pratique axée sur la prise de parole en public, le développement de la confiance, la maîtrise de la voix et du langage corporel. Exercices de discours, improvisation et techniques pour captiver un auditoire.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="stars" style="margin-top: 50px; margin-bottom: -80px; display: flex; justify-content: center; align-items: center;">
                <span>★</span>
                <span>★</span>
                <span>★</span>
            </div>
        </section>

        <!-- Certifications Section -->
        <section id="certifications" class="certifications">
            <div class="container">
                <div class="section-title" data-aos="fade-up">
                    <h2>Certifications & Attestations</h2>
                    <p>Mes certifications, attestations et formations validées</p>
                </div>

                <div style="text-align: center; margin-bottom: 40px;">
                    <p style="margin-top: -50px; margin-bottom: 20px;">
                        <span class="icon-circle"><i class="fas fa-graduation-cap"></i></span> Diplômes & Formations validées
                    </p>
                    <div class="certifications-grid">
                        <div class="certification-card" data-aos="flip-left">
                            <div class="certification-header">
                                <div class="certification-icon">
                                    <i class="fas fa-graduation-cap"></i>
                                </div>
                                <div class="certification-info">
                                    <h3 class="certification-name">Licence en Système Informatique et Logiciel</h3>
                                    <div class="certification-org">Institut Universitaire LES COURS SONOU de Parakou, Bénin</div>
                                    <div class="certification-year">2025</div>
                                </div>
                            </div>
                            <div class="certification-footer">
                                <div class="certification-status">
                                    <i class="fas fa-check-circle"></i> Diplôme de Licence
                                </div>
                                <a href="https://drive.google.com/file/d/EXEMPLE_ID_1/view" target="_blank" rel="noopener noreferrer" class="btn-certificate">
                                    <i class="fas fa-external-link-alt"></i> Voir le diplôme
                                </a>
                            </div>
                        </div>
                        <div class="certification-card" data-aos="flip-left">
                            <div class="certification-header">
                                <div class="certification-icon">
                                    <i class="fas fa-graduation-cap"></i>
                                </div>
                                <div class="certification-info">
                                    <h3 class="certification-name">Baccalauréat Scientifique - Série D</h3>
                                    <div class="certification-org">Collège d'Enseignement Général 1 de Djougou, Bénin</div>
                                    <div class="certification-year">2022</div>
                                </div>
                            </div>
                            <div class="certification-footer">
                                <div class="certification-status">
                                    <i class="fas fa-check-circle"></i> Diplôme du BAC
                                </div>
                                <a href="https://drive.google.com/file/d/EXEMPLE_ID_2/view" target="_blank" rel="noopener noreferrer" class="btn-certificate">
                                    <i class="fas fa-external-link-alt"></i> Voir le diplôme
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div style="text-align: center; margin-bottom: 40px; margin-top: 50px;">
                    <p style="margin-bottom: 20px;">
                        <span class="icon-circle"><i class="fas fa-briefcase"></i></span> Attestations de stages & expériences pratiques
                    </p>
                    <div class="certifications-grid">
                        <div class="certification-card" data-aos="flip-left" data-aos-delay="100">
                            <div class="certification-header">
                                <div class="certification-icon">
                                    <i class="fas fa-briefcase"></i>
                                </div>
                                <div class="certification-info">
                                    <h3 class="certification-name">Stagiaire Développeuse Web</h3>
                                    <div class="certification-org">IMHOTEP Labs</div>
                                    <div class="certification-year">2025</div>
                                </div>
                            </div>
                            <div class="certification-footer">
                                <div class="certification-status">
                                    <i class="fas fa-check-circle"></i> Attestation de stage de la Licence 3
                                </div>
                                <a href="https://drive.google.com/file/d/EXEMPLE_ID_4/view" target="_blank" rel="noopener noreferrer" class="btn-certificate">
                                    <i class="fas fa-external-link-alt"></i> Voir l'attestation
                                </a>
                            </div>
                        </div>
                        <div class="certification-card" data-aos="flip-left" data-aos-delay="200">
                            <div class="certification-header">
                                <div class="certification-icon">
                                    <i class="fas fa-briefcase"></i>
                                </div>
                                <div class="certification-info">
                                    <h3 class="certification-name">Stagiaire Dév. Web / UI-UX</h3>
                                    <div class="certification-org">WASSANGARI Labs</div>
                                    <div class="certification-year">2024</div>
                                </div>
                            </div>
                            <div class="certification-footer">
                                <div class="certification-status">
                                    <i class="fas fa-check-circle"></i> Attestation de stage de Licence 2
                                </div>
                                <a href="https://drive.google.com/file/d/EXEMPLE_ID_5/view" target="_blank" rel="noopener noreferrer" class="btn-certificate">
                                    <i class="fas fa-external-link-alt"></i> Voir l'attestation
                                </a>
                            </div>
                        </div>
                        <div class="certification-card" data-aos="flip-left" data-aos-delay="200">
                            <div class="certification-header">
                                <div class="certification-icon">
                                    <i class="fas fa-briefcase"></i>
                                </div>
                                <div class="certification-info">
                                    <h3 class="certification-name">Stagiaire Graphiste / Designer graphique</h3>
                                    <div class="certification-org">Préfecture Du Département De La DONGA</div>
                                    <div class="certification-year">2023</div>
                                </div>
                            </div>
                            <div class="certification-footer">
                                <div class="certification-status">
                                    <i class="fas fa-check-circle"></i> Attestation de stage de Licence 1
                                </div>
                                <a href="https://drive.google.com/file/d/EXEMPLE_ID_5/view" target="_blank" rel="noopener noreferrer" class="btn-certificate">
                                    <i class="fas fa-external-link-alt"></i> Voir l'attestation
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div style="text-align: center; margin-bottom: 40px; margin-top: 50px;">
                    <p style="margin-bottom: 20px;">
                        <span class="icon-circle"><i class="fas fa-award"></i></span> Certifications & attestations professionnelles
                    </p>
                    <div class="certifications-grid">
                        <div class="certification-card" data-aos="flip-left" data-aos-delay="100">
                            <div class="certification-header">
                                <div class="certification-icon">
                                    <i class="fas fa-mobile-alt"></i>
                                </div>
                                <div class="certification-info">
                                    <h3 class="certification-name">Flutter & Dart - Développement Mobile</h3>
                                    <div class="certification-org">D-CLIC, Formez-vous au numérique avec l'OIF</div>
                                    <div class="certification-year">2025</div>
                                </div>
                            </div>
                            <div class="certification-footer">
                                <div class="certification-status">
                                    <i class="fas fa-check-circle"></i> Attestation de formation
                                </div>
                                <a href="https://drive.google.com/file/d/EXEMPLE_ID_6/view" target="_blank" rel="noopener noreferrer" class="btn-certificate">
                                    <i class="fas fa-external-link-alt"></i> Voir l'attestation
                                </a>
                            </div>
                        </div>
                        <div class="certification-card" data-aos="flip-left" data-aos-delay="100">
                            <div class="certification-header">
                                <div class="certification-icon">
                                    <i class="fas fa-mobile-alt"></i>
                                </div>
                                <div class="certification-info">
                                    <h3 class="certification-name">Mobile App Design & UI/UX – Écoconception et prototypage</h3>
                                    <div class="certification-org">D-CLIC, Formez-vous au numérique avec l'OIF</div>
                                    <div class="certification-year">2025</div>
                                </div>
                            </div>
                            <div class="certification-footer">
                                <div class="certification-status">
                                    <i class="fas fa-check-circle"></i> Attestation de formation
                                </div>
                                <a href="https://drive.google.com/file/d/EXEMPLE_ID_6/view" target="_blank" rel="noopener noreferrer" class="btn-certificate">
                                    <i class="fas fa-external-link-alt"></i> Voir l'attestation
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div style="text-align: center; margin-bottom: 40px; margin-top: 50px;">
                    <p style="margin-bottom: 20px;">
                        <span class="icon-circle"><i class="fas fa-seedling"></i></span> Développement personnel certifié
                    </p>
                    <div class="certifications-grid">
                        <div class="certification-card" data-aos="flip-left" data-aos-delay="100">
                            <div class="certification-header">
                                <div class="certification-icon">
                                    <i class="fas fa-brain"></i>
                                </div>
                                <div class="certification-info">
                                    <h3 class="certification-name">Programme d'Éducation pour la Paix – Prem Rawat</h3>
                                    <div class="certification-org">Bibliothèque du CAEB, Parakou</div>
                                    <div class="certification-year">2025</div>
                                </div>
                            </div>
                            <div class="certification-footer">
                                <div class="certification-status">
                                    <i class="fas fa-check-circle"></i> Attestation de formation
                                </div>
                                <a href="https://drive.google.com/file/d/EXEMPLE_ID_6/view" target="_blank" rel="noopener noreferrer" class="btn-certificate">
                                    <i class="fas fa-external-link-alt"></i> Voir l'attestation
                                </a>
                            </div>
                        </div>
                        <div class="certification-card" data-aos="flip-left" data-aos-delay="200">
                            <div class="certification-header">
                                <div class="certification-icon">
                                    <i class="fas fa-microphone-alt"></i>
                                </div>
                                <div class="certification-info">
                                    <h3 class="certification-name">Formation en Art Oratoire</h3>
                                    <div class="certification-org">CLUB RFI COTONOU</div>
                                    <div class="certification-year">2023</div>
                                </div>
                            </div>
                            <div class="certification-footer">
                                <div class="certification-status">
                                    <i class="fas fa-check-circle"></i> Attestation de formation
                                </div>
                                <a href="https://drive.google.com/file/d/EXEMPLE_ID/view" target="_blank" rel="noopener noreferrer" class="btn-certificate">
                                    <i class="fas fa-external-link-alt"></i> Voir l'attestation
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="stars" style="margin-top: 90px; margin-bottom: -60px; display: flex; justify-content: center; align-items: center;">
                <span>★</span>
                <span>★</span>
                <span>★</span>
            </div>
        </section>

        <!-- Compétences -->
        <section id="competences" class="competences">
            <div class="container">
                <div class="section-title" data-aos="fade-up">
                    <h2>Compétences Techniques</h2>
                    <p>Technologies et outils que je maîtrise pour créer des solutions innovantes</p>
                </div>
                <div class="grid grid-3">
                    <div class="skill-card" data-aos="fade-up">
                        <div class="skill-header">
                            <span class="skill-name">HTML5 & CSS3</span>
                            <span class="skill-level">80%</span>
                        </div>
                        <div class="progress-bar">
                            <div class="progress-fill" style="width: 80%;"></div>
                        </div>
                        <p class="skill-description">
                            Maîtrise avancée du HTML sémantique et CSS moderne, animations, Grid, Flexbox
                        </p>
                    </div>
                    <div class="skill-card" data-aos="fade-up" data-aos-delay="100">
                        <div class="skill-header">
                            <span class="skill-name">JavaScript</span>
                            <span class="skill-level">45%</span>
                        </div>
                        <div class="progress-bar">
                            <div class="progress-fill" style="width: 45%;"></div>
                        </div>
                        <p class="skill-description">
                            JavaScript ES6+, manipulation DOM, APIs, programmation asynchrone
                        </p>
                    </div>
                    <div class="skill-card" data-aos="fade-up" data-aos-delay="200">
                        <div class="skill-header">
                            <span class="skill-name">PHP</span>
                            <span class="skill-level">60%</span>
                        </div>
                        <div class="progress-bar">
                            <div class="progress-fill" style="width: 60%;"></div>
                        </div>
                        <p class="skill-description">
                            Développement backend, POO, bases de données MySQL, sécurité web
                        </p>
                    </div>
                    <div class="skill-card" data-aos="fade-up" data-aos-delay="300">
                        <div class="skill-header">
                            <span class="skill-name">Bootstrap</span>
                            <span class="skill-level">65%</span>
                        </div>
                        <div class="progress-bar">
                            <div class="progress-fill" style="width: 65%;"></div>
                        </div>
                        <p class="skill-description">
                            Framework CSS responsive, composants, customisation, design mobile-first
                        </p>
                    </div>
                    <div class="skill-card" data-aos="fade-up" data-aos-delay="400">
                        <div class="skill-header">
                            <span class="skill-name">Flutter</span>
                            <span class="skill-level">40%</span>
                        </div>
                        <div class="progress-bar">
                            <div class="progress-fill" style="width: 40%;"></div>
                        </div>
                        <p class="skill-description">
                            Développement d'applications mobiles cross-platform, Dart, widgets
                        </p>
                    </div>
                    <div class="skill-card" data-aos="fade-up" data-aos-delay="500">
                        <div class="skill-header">
                            <span class="skill-name">MySQL</span>
                            <span class="skill-level">50%</span>
                        </div>
                        <div class="progress-bar">
                            <div class="progress-fill" style="width: 50%;"></div>
                        </div>
                        <p class="skill-description">
                            Conception BDD, requêtes complexes, optimisation, procédures stockées
                        </p>
                    </div>
                </div>
            </div>
            <div class="stars" style="margin-top: 90px; margin-bottom: 20px; display: flex; justify-content: center; align-items: center;">
                <span>★</span>
                <span>★</span>
                <span>★</span>
            </div>
        </section>

        <!-- Projets -->
        <section id="projets" class="projets">
            <div class="container">
                <div class="section-title" data-aos="fade-up">
                    <h2>Mes Projets</h2>
                    <p>Découvrez quelques-unes de mes réalisations récentes</p>
                </div>
                <div class="grid grid-2">
                    <div class="project-card" data-aos="zoom-in">
                        <div class="project-header">
                            <h3 class="project-title">Portfolio Personnel</h3>
                        </div>
                        <p class="project-description">
                            Site web responsive présentant mon parcours, mes compétences et mes projets. Conçu avec une approche mobile-first et une attention particulière à l'expérience utilisateur.
                        </p>
                        <div class="tech-stack">
                            <span class="tech-tag">HTML5</span>
                            <span class="tech-tag">CSS3</span>
                            <span class="tech-tag">JavaScript</span>
                            <span class="tech-tag">Responsive Design</span>
                        </div>
                        <div class="project-links">
                            <a href="#" target="_blank" class="btn-project">
                                <i class="fas fa-external-link-alt"></i> Voir en ligne
                            </a>
                            <a href="https://github.com/Dev3Deb/Portfolio.git" target="_blank" class="btn-project">
                                <i class="fab fa-github"></i> Voir le code
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="stars" style="margin-top: 90px; margin-bottom: -60px; display: flex; justify-content: center; align-items: center;">
                <span>★</span>
                <span>★</span>
                <span>★</span>
            </div>
        </section>

        <!-- Contact -->
        <section id="contact" class="contact">
            <div class="container">
                <div class="section-title" data-aos="fade-up">
                    <h2>Prenons Contact</h2>
                    <p>Discutons de votre prochain projet ou d'opportunités de collaboration</p>
                </div>
                <div class="contact-grid">
                    <div class="contact-info" data-aos="fade-right">
                        <h3 style="margin-bottom: var(--space-lg); color: var(--text-primary);">Informations de Contact</h3>
                        <div class="contact-item">
                            <i class="fas fa-envelope" style="color: var(--accent-primary);"></i>
                            <div>
                                <strong>Email</strong><br />
                                <a href="mailto:dev3deb@gmail.com">dev3deb@gmail.com</a>
                            </div>
                        </div>
                        <div class="contact-item">
                            <i class="fas fa-phone" style="color: var(--accent-primary);"></i>
                            <div>
                                <strong>Téléphone</strong><br />
                                <a href="tel:+2290157475750">+229 01 57 47 57 50</a>
                            </div>
                        </div>
                        <div class="contact-item">
                            <i class="fab fa-github" style="color: var(--accent-primary);"></i>
                            <div>
                                <strong>GitHub</strong><br />
                                <a href="https://github.com/Dev3Deb" target="_blank" rel="noopener noreferrer">github.com/Dev3Deb</a>
                            </div>
                        </div>
                        <div class="contact-item">
                            <i class="fab fa-linkedin" style="color: var(--accent-primary);"></i>
                            <div>
                                <strong>LinkedIn</strong><br />
                                <a href="www.linkedin.com/in/dev3deb">NASSAM Pêlê Deb</a>
                            </div>
                        </div>
                        <div class="contact-item">
                            <i class="fas fa-map-marker-alt" style="color: var(--accent-primary);"></i>
                            <div>
                                <strong>Localisation</strong><br />
                                <span>Parakou, Bénin</span>
                            </div>
                        </div>
                    </div>
                    <form class="contact-form" data-aos="fade-left" onsubmit="handleFormSubmit(event)" novalidate>
                        <h3 style="margin-bottom: var(--space-lg); color: var(--text-primary);">Envoyez-moi un message</h3>
                        <div class="form-group">
                            <label for="name" class="form-label">Nom complet *</label>
                            <input type="text" id="name" name="name" class="form-input" placeholder="Votre nom et prénom" required />
                        </div>
                        <div class="form-group">
                            <label for="email" class="form-label">Adresse email *</label>
                            <input type="email" id="email" name="email" class="form-input" placeholder="votre.email@exemple.com" required />
                        </div>
                        <div class="form-group">
                            <label for="subject" class="form-label">Sujet</label>
                            <input type="text" id="subject" name="subject" class="form-input" placeholder="Objet de votre message" />
                        </div>
                        <div class="form-group">
                            <label for="message" class="form-label">Message *</label>
                            <textarea id="message" name="message" class="form-textarea" rows="5" placeholder="Décrivez votre projet ou votre demande..." required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary" style="width: 100%;">
                            <i class="fas fa-paper-plane"></i> Envoyer le message
                        </button>
                        <p style="font-size: 0.875rem; color: var(--text-muted); margin-top: var(--space-md); text-align: center;">
                            * Champs obligatoires. Votre message sera traité dans les plus brefs délais.
                        </p>
                    </form>
                </div>
            </div>
        </section>
    </main>

    <footer class="footer">
        <div class="container">
            <div style="display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: var(--space-md); margin-bottom: var(--space-lg);">
                <div>
                    <h3 style="color: var(--text-primary); margin-bottom: var(--space-sm);">NASSAM Pêlê Deb</h3>
                    <p>Développeuse Web & Mobile passionnée</p>
                </div>
                <div class="social-links">
                    <a href="mailto:dev3deb@gmail.com" class="social-link" title="Email">
                        <i class="fas fa-envelope"></i>
                    </a>
                    <a href="https://github.com/Dev3Deb" target="_blank" class="social-link" title="GitHub">
                        <i class="fab fa-github"></i>
                    </a>
                    <a href="tel:+2290157475750" class="social-link" title="Téléphone">
                        <i class="fas fa-phone"></i>
                    </a>
                </div>
            </div>
            <div style="border-top: 1px solid rgba(255, 255, 255, 0.1); padding-top: var(--space-lg); display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: var(--space-md);">
                <p>&copy; 2025 NASSAM Pêlê Deb. Tous droits réservés.</p>
                <p>Fait avec <i class="fas fa-heart" style="color: var(--accent-primary);"></i> au Bénin 🇧🇯</p>
            </div>
        </div>
    </footer>

    <!-- Theme Toggle Button -->
    <div class="theme-toggle" title="Changer de thème">
        <i class="fas fa-moon"></i>
    </div>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 800,
            once: true,
            offset: 100
        });

        particlesJS('particles-js', {
            particles: {
                number: { value: 80, density: { enable: true, value_area: 800 } },
                color: { value: "#6366f1" },
                shape: { type: "circle", stroke: { width: 0, color: "#000000" } },
                opacity: {
                    value: 0.5,
                    random: true,
                    anim: { enable: true, speed: 1, opacity_min: 0.1, sync: false }
                },
                size: {
                    value: 3,
                    random: true,
                    anim: { enable: true, speed: 2, size_min: 0.3, sync: false }
                },
                line_linked: {
                    enable: true,
                    distance: 150,
                    color: "#6366f1",
                    opacity: 0.4,
                    width: 1
                },
                move: {
                    enable: true,
                    speed: 1,
                    direction: "none",
                    random: true,
                    straight: false,
                    out_mode: "out",
                    bounce: false,
                    attract: { enable: false, rotateX: 600, rotateY: 1200 }
                }
            },
            interactivity: {
                detect_on: "canvas",
                events: {
                    onhover: { enable: true, mode: "grab" },
                    onclick: { enable: true, mode: "push" },
                    resize: true
                },
                modes: {
                    grab: { distance: 140, line_linked: { opacity: 1 } },
                    push: { particles_nb: 4 }
                }
            },
            retina_detect: true
        });

        const mobileMenuBtn = document.querySelector('.mobile-menu-btn');
        const nav = document.querySelector('.nav');
        mobileMenuBtn.addEventListener('click', () => {
            nav.classList.toggle('active');
            const icon = mobileMenuBtn.querySelector('i');
            if (nav.classList.contains('active')) {
                icon.classList.remove('fa-bars');
                icon.classList.add('fa-times');
                document.body.style.overflow = 'hidden';
            } else {
                icon.classList.remove('fa-times');
                icon.classList.add('fa-bars');
                document.body.style.overflow = 'auto';
            }
        });

        document.querySelectorAll('.nav a').forEach(link => {
            link.addEventListener('click', () => {
                nav.classList.remove('active');
                mobileMenuBtn.querySelector('i').classList.remove('fa-times');
                mobileMenuBtn.querySelector('i').classList.add('fa-bars');
                document.body.style.overflow = 'auto';
            });
        });

        const navLinks = document.querySelectorAll('.nav a');
        const sections = document.querySelectorAll('section[id]');
        window.addEventListener('scroll', () => {
            let current = '';
            sections.forEach(section => {
                const sectionTop = section.offsetTop;
                const sectionHeight = section.clientHeight;
                if (window.scrollY >= (sectionTop - 200)) {
                    current = section.getAttribute('id');
                }
            });
            navLinks.forEach(link => {
                link.classList.remove('active');
                if (link.getAttribute('href').substring(1) === current) {
                    link.classList.add('active');
                }
            });
            const header = document.querySelector('.header');
            if (window.scrollY > 100) {
                header.classList.add('scrolled');
            } else {
                header.classList.remove('scrolled');
            }
        });

        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

        const skillCards = document.querySelectorAll('.skill-card');
        const skillObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const progressBar = entry.target.querySelector('.progress-fill');
                    if (progressBar) {
                        const width = progressBar.style.width;
                        progressBar.style.width = '0%';
                        setTimeout(() => {
                            progressBar.style.width = width;
                        }, 200);
                    }
                }
            });
        }, { threshold: 0.5 });
        skillCards.forEach(card => {
            skillObserver.observe(card);
        });

        function handleFormSubmit(event) {
            event.preventDefault();
            const form = event.target;
            const formData = new FormData(form);
            const data = Object.fromEntries(formData.entries());
            if (!data.name.trim() || !data.email.trim() || !data.message.trim()) {
                showNotification('Veuillez remplir tous les champs obligatoires.', 'error');
                return;
            }
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailRegex.test(data.email)) {
                showNotification('Veuillez entrer une adresse email valide.', 'error');
                return;
            }
            const submitButton = form.querySelector('button[type="submit"]');
            const originalText = submitButton.innerHTML;
            submitButton.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Envoi en cours...';
            submitButton.disabled = true;
            emailjs.sendForm('service_a5lrddv', 'template_73k4bhd', form)
                .then(() => {
                    showNotification('Merci ! Votre message a été envoyé avec succès. Je vous répondrai dans les plus brefs délais.', 'success');
                    form.reset();
                })
                .catch((error) => {
                    console.error('Erreur EmailJS:', error);
                    showNotification('Erreur lors de l\'envoi. Veuillez réessayer ou me contacter directement à dev3deb@gmail.com', 'error');
                })
                .finally(() => {
                    submitButton.innerHTML = originalText;
                    submitButton.disabled = false;
                });
        }

        function showNotification(message, type = 'info') {
            const notification = document.createElement('div');
            notification.style.cssText = `
                position: fixed;
                top: 20px;
                right: 20px;
                z-index: 1000;
                padding: 16px 24px;
                border-radius: 12px;
                color: white;
                font-weight: 500;
                max-width: 400px;
                box-shadow: var(--shadow-xl);
                backdrop-filter: blur(10px);
                animation: slideInRight 0.3s ease-out;
                background: ${type === 'error' ? '#ef4444' : type === 'success' ? 'var(--success)' : 'var(--accent-primary)'};
            `;
            notification.textContent = message;
            document.body.appendChild(notification);
            setTimeout(() => {
                notification.style.animation = 'slideOutRight 0.3s ease-out forwards';
                setTimeout(() => notification.remove(), 300);
            }, 5000);
        }

        const certificationCards = document.querySelectorAll('.certification-card');
        const certificationObserver = new IntersectionObserver((entries) => {
            entries.forEach((entry, index) => {
                if (entry.isIntersecting) {
                    setTimeout(() => {
                        entry.target.style.opacity = '1';
                        entry.target.style.transform = 'translateY(0) scale(1)';
                    }, index * 100);
                }
            });
        }, { threshold: 0.1 });
        certificationCards.forEach(card => {
            card.style.opacity = '0';
            card.style.transform = 'translateY(30px) scale(0.95)';
            card.style.transition = 'all 0.6s cubic-bezier(0.4, 0, 0.2, 1)';
            certificationObserver.observe(card);
        });

        const themeToggle = document.querySelector('.theme-toggle');
        const themeIcon = themeToggle.querySelector('i');
        const prefersDarkScheme = window.matchMedia('(prefers-color-scheme: dark)');
        const currentTheme = localStorage.getItem('theme') || (prefersDarkScheme.matches ? 'dark' : 'light');
        if (currentTheme === 'light') {
            document.documentElement.setAttribute('data-theme', 'light');
            themeIcon.classList.remove('fa-moon');
            themeIcon.classList.add('fa-sun');
        } else {
            document.documentElement.setAttribute('data-theme', 'dark');
            themeIcon.classList.remove('fa-sun');
            themeIcon.classList.add('fa-moon');
        }
        themeToggle.addEventListener('click', () => {
            const currentTheme = document.documentElement.getAttribute('data-theme');
            const newTheme = currentTheme === 'dark' ? 'light' : 'dark';
            document.documentElement.setAttribute('data-theme', newTheme);
            localStorage.setItem('theme', newTheme);
            if (newTheme === 'light') {
                themeIcon.classList.remove('fa-moon');
                themeIcon.classList.add('fa-sun');
            } else {
                themeIcon.classList.remove('fa-sun');
                themeIcon.classList.add('fa-moon');
            }
        });

        const style = document.createElement('style');
        style.textContent = `
            @keyframes spin {
                from { transform: rotate(0deg); }
                to { transform: rotate(360deg); }
            }
            @keyframes slideInRight {
                from { opacity: 0; transform: translateX(100px); }
                to { opacity: 1; transform: translateX(0); }
            }
            @keyframes slideOutRight {
                from { opacity: 1; transform: translateX(0); }
                to { opacity: 0; transform: translateX(100px); }
            }
            .certification-card:hover {
                transform: translateY(-8px) scale(1.02) !important;
            }
            [data-theme="light"] {
                --bg-primary: #f8fafc;
                --bg-secondary: #e2e8f0;
                --bg-tertiary: #cbd5e1;
                --text-primary: #1e293b;
                --text-secondary: #334155;
                --text-muted: #64748b;
            }
        `;
        document.head.appendChild(style);
    </script>
</body>
</html>