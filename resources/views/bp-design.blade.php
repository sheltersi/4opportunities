<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="4Opportunities - Connect with job opportunities. Find positions, post openings, and build your professional future.">

    <title>4Opportunities - Your Gateway to Career Excellence</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- Tailwind CSS -->
    @vite(['resources/css/app.css'])

    <style>
        :root {
            --deep-blue: #0f172a;
            --navy-blue: #1e293b;
            --royal-blue: #2563eb;
            --bright-blue: #3b82f6;
            --sky-blue: #60a5fa;
            --light-blue: #93c5fd;
            --pale-blue: #dbeafe;
            --ice-blue: #eff6ff;
            --white: #ffffff;
            --gray-50: #f8fafc;
            --gray-100: #f1f5f9;
            --gray-200: #e2e8f0;
            --gray-300: #cbd5e1;
            --gray-400: #94a3b8;
            --gray-500: #64748b;
            --gray-600: #475569;
            --gray-700: #334155;
            --accent-cyan: #06b6d4;
            --accent-teal: #14b8a6;
        }

        * {
            scroll-behavior: smooth;
        }

        body {
            font-family: 'Plus Jakarta Sans', 'Inter', sans-serif;
            background: #ffffff;
            min-height: 100vh;
            overflow-x: hidden;
            color: var(--deep-blue);
        }

        .font-display {
            font-family: 'Plus Jakarta Sans', sans-serif;
        }

        /* Animated Mesh Gradient Background */
        .hero-gradient {
            position: absolute;
            inset: 0;
            overflow: hidden;
            z-index: 0;
        }

        .hero-gradient::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background:
                radial-gradient(circle at 20% 80%, rgba(59, 130, 246, 0.15) 0%, transparent 50%),
                radial-gradient(circle at 80% 20%, rgba(6, 182, 212, 0.1) 0%, transparent 50%),
                radial-gradient(circle at 40% 40%, rgba(37, 99, 235, 0.08) 0%, transparent 50%),
                radial-gradient(circle at 60% 60%, rgba(20, 184, 166, 0.05) 0%, transparent 50%);
            animation: meshRotate 30s linear infinite;
        }

        @keyframes meshRotate {
            0% { transform: rotate(0deg) scale(1); }
            50% { transform: rotate(180deg) scale(1.1); }
            100% { transform: rotate(360deg) scale(1); }
        }

        /* Grid Dots Background */
        .grid-dots-bg {
            position: fixed;
            inset: 0;
            z-index: 0;
            pointer-events: none;
            background-image: radial-gradient(circle, rgba(0, 0, 0, 0.15) 1px, transparent 1px);
            background-size: 32px 32px;
        }

        /* Floating Gradient Orbs */
        .orb {
            position: fixed;
            border-radius: 50%;
            filter: blur(100px);
            opacity: 0.08;
            animation: float 20s ease-in-out infinite;
            pointer-events: none;
            z-index: 0;
        }

        .orb-1 {
            width: 600px;
            height: 600px;
            background: radial-gradient(circle, rgba(59, 130, 246, 0.4), transparent);
            top: -200px;
            right: -100px;
            animation-delay: 0s;
        }

        .orb-2 {
            width: 400px;
            height: 400px;
            background: radial-gradient(circle, rgba(6, 182, 212, 0.3), transparent);
            bottom: -100px;
            left: -100px;
            animation-delay: -5s;
        }

        .orb-3 {
            width: 300px;
            height: 300px;
            background: radial-gradient(circle, rgba(20, 184, 166, 0.25), transparent);
            top: 40%;
            right: 20%;
            animation-delay: -10s;
        }

        @keyframes float {
            0%, 100% { transform: translate(0, 0) scale(1); }
            25% { transform: translate(50px, -50px) scale(1.1); }
            50% { transform: translate(-30px, 30px) scale(0.9); }
            75% { transform: translate(30px, 50px) scale(1.05); }
        }

        /* Glassmorphism for light background */
        .glass-light {
            background: rgba(255, 255, 255, 0.8);
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
            border: 1px solid rgba(59, 130, 246, 0.1);
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.05);
        }

        .glass-card {
            background: #ffffff;
            border: 1px solid #e2e8f0;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.05), 0 2px 4px -2px rgba(0, 0, 0, 0.05);
        }

        .glass-card:hover {
            box-shadow: 0 20px 40px -8px rgba(37, 99, 235, 0.15), 0 8px 16px -6px rgba(37, 99, 235, 0.1);
            border-color: rgba(59, 130, 246, 0.3);
        }

        /* Gradient Text */
        .text-blue-gradient {
            background: linear-gradient(135deg, #2563eb 0%, #3b82f6 50%, #06b6d4 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            background-size: 200% auto;
            animation: shimmer 3s linear infinite;
        }

        @keyframes shimmer {
            0% { background-position: 0% center; }
            100% { background-position: 200% center; }
        }

        /* Button Styles */
        .btn-primary {
            background: linear-gradient(135deg, #2563eb 0%, #1d4ed8 100%);
            color: #ffffff;
            font-weight: 600;
            padding: 0.875rem 2rem;
            border-radius: 12px;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            box-shadow: 0 4px 14px rgba(37, 99, 235, 0.3);
            position: relative;
            overflow: hidden;
        }

        .btn-primary::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255,255,255,0.3), transparent);
            transition: left 0.5s;
        }

        .btn-primary:hover::before {
            left: 100%;
        }

        .btn-primary:hover {
            transform: translateY(-2px) scale(1.02);
            box-shadow: 0 10px 30px rgba(37, 99, 235, 0.4);
        }

        .btn-secondary {
            background: #ffffff;
            color: #2563eb;
            font-weight: 600;
            padding: 0.875rem 2rem;
            border-radius: 12px;
            border: 1px solid #e2e8f0;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .btn-secondary:hover {
            background: linear-gradient(135deg, #f8fafc, #eff6ff);
            border-color: #3b82f6;
            color: #1d4ed8;
            transform: translateY(-2px);
            box-shadow: 0 10px 30px rgba(37, 99, 235, 0.15);
        }

        /* Feature Cards */
        .feature-card {
            background: #ffffff;
            border: 1px solid #e2e8f0;
            border-radius: 24px;
            padding: 2.5rem;
            transition: all 0.5s cubic-bezier(0.4, 0, 0.2, 1);
            position: relative;
            overflow: hidden;
            height: 100%;
        }

        .feature-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: linear-gradient(90deg, #2563eb, #06b6d4, #14b8a6);
            transform: scaleX(0);
            transform-origin: left;
            transition: transform 0.5s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .feature-card:hover::before {
            transform: scaleX(1);
        }

        .feature-card::after {
            content: '';
            position: absolute;
            inset: 0;
            background: radial-gradient(circle at 50% 0%, rgba(37, 99, 235, 0.05) 0%, transparent 70%);
            opacity: 0;
            transition: opacity 0.5s;
        }

        .feature-card:hover::after {
            opacity: 1;
        }

        .feature-card:hover {
            transform: translateY(-12px) scale(1.02);
            box-shadow: 0 30px 60px -12px rgba(37, 99, 235, 0.2);
            border-color: rgba(59, 130, 246, 0.4);
        }

        .feature-icon {
            width: 64px;
            height: 64px;
            background: linear-gradient(135deg, #eff6ff, #dbeafe);
            border-radius: 18px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 1.5rem;
            border: 1px solid #bfdbfe;
            transition: all 0.3s;
        }

        .feature-card:hover .feature-icon {
            background: linear-gradient(135deg, #dbeafe, #bfdbfe);
            transform: scale(1.1) rotate(5deg);
        }

        /* Navigation */
        .nav-link {
            color: var(--gray-600);
            font-weight: 500;
            transition: all 0.3s;
            position: relative;
        }

        .nav-link::after {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 0;
            width: 0;
            height: 2px;
            background: linear-gradient(90deg, #2563eb, #06b6d4);
            transition: width 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .nav-link:hover {
            color: #2563eb;
        }

        .nav-link:hover::after {
            width: 100%;
        }

        /* Stats Section */
        .stat-number {
            font-size: 4rem;
            font-weight: 800;
            background: linear-gradient(135deg, #2563eb 0%, #3b82f6 50%, #06b6d4 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            letter-spacing: -0.02em;
        }

        /* Animated Border */
        .animated-border {
            position: relative;
            border-radius: 32px;
            background: #ffffff;
        }

        .animated-border::before {
            content: '';
            position: absolute;
            inset: -2px;
            border-radius: 34px;
            background: linear-gradient(90deg, #2563eb, #06b6d4, #14b8a6, #2563eb);
            background-size: 300% 100%;
            animation: borderRotate 4s linear infinite;
            z-index: -1;
            opacity: 0.6;
        }

        @keyframes borderRotate {
            0% { background-position: 0% 50%; }
            100% { background-position: 300% 50%; }
        }

        /* Scroll Reveal */
        .reveal {
            opacity: 0;
            transform: translateY(40px);
            transition: all 0.8s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .reveal.active {
            opacity: 1;
            transform: translateY(0);
        }

        /* Floating Animation */
        .floating {
            animation: floating 6s ease-in-out infinite;
        }

        @keyframes floating {
            0%, 100% { transform: translateY(0px) rotate(0deg); }
            50% { transform: translateY(-20px) rotate(1deg); }
        }

        .floating-delay {
            animation: floating 6s ease-in-out infinite;
            animation-delay: -2s;
        }

        .floating-delay-2 {
            animation: floating 6s ease-in-out infinite;
            animation-delay: -4s;
        }

        /* Pulse Animation */
        .pulse-blue {
            animation: pulseBlue 2s ease-in-out infinite;
        }

        @keyframes pulseBlue {
            0%, 100% { box-shadow: 0 0 0 0 rgba(37, 99, 235, 0.4); }
            50% { box-shadow: 0 0 0 8px rgba(37, 99, 235, 0); }
        }

        /* Badge Styles */
        .badge-blue {
            background: linear-gradient(135deg, #eff6ff, #dbeafe);
            color: #2563eb;
            border: 1px solid #bfdbfe;
        }

        .badge-cyan {
            background: linear-gradient(135deg, #ecfeff, #cffafe);
            color: #0891b2;
            border: 1px solid #a5f3fc;
        }

        /* Hero Card Styles */
        .hero-card {
            background: #ffffff;
            border: 1px solid #e2e8f0;
            border-radius: 24px;
            box-shadow:
                0 20px 60px -12px rgba(0, 0, 0, 0.1),
                0 8px 20px -8px rgba(37, 99, 235, 0.05);
        }

        .floating-badge {
            background: #ffffff;
            border: 1px solid #e2e8f0;
            border-radius: 16px;
            box-shadow:
                0 10px 30px -6px rgba(0, 0, 0, 0.1),
                0 4px 10px -4px rgba(37, 99, 235, 0.08);
        }

        /* Step Cards */
        .step-card {
            background: #ffffff;
            border: 1px solid #e2e8f0;
            border-radius: 24px;
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            position: relative;
            overflow: hidden;
        }

        .step-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(135deg, rgba(37, 99, 235, 0.02) 0%, transparent 50%);
            opacity: 0;
            transition: opacity 0.4s;
        }

        .step-card:hover::before {
            opacity: 1;
        }

        .step-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 30px 50px -12px rgba(37, 99, 235, 0.15);
            border-color: #bfdbfe;
        }

        .step-number {
            width: 56px;
            height: 56px;
            background: linear-gradient(135deg, #2563eb, #3b82f6);
            border-radius: 16px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #ffffff;
            font-weight: 700;
            font-size: 1.5rem;
            box-shadow: 0 8px 20px -4px rgba(37, 99, 235, 0.4);
            transition: all 0.3s;
        }

        .step-card:hover .step-number {
            transform: scale(1.1) rotate(5deg);
        }

        /* Connector Line */
        .connector-line {
            position: relative;
        }

        .connector-line::after {
            content: '';
            position: absolute;
            top: 50%;
            right: -16px;
            width: 32px;
            height: 2px;
            background: linear-gradient(90deg, #bfdbfe, transparent);
            transform: translateY(-50%);
        }

        /* Responsive */
        @media (max-width: 768px) {
            .stat-number {
                font-size: 2.5rem;
            }

            .orb {
                display: none;
            }
        }
    </style>
</head>
<body class="antialiased">
    <!-- Grid Dots Background -->
    <div class="grid-dots-bg"></div>

    <!-- Gradient Orbs -->
    <div class="orb orb-1"></div>
    <div class="orb orb-2"></div>
    <div class="orb orb-3"></div>

    <!-- Navigation -->
    <nav class="fixed top-0 left-0 right-0 z-50 transition-all duration-300" id="navbar">
        <div class="glass-light border-b border-gray-100">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex items-center justify-between h-16">
                    <!-- Logo -->
                    <div class="flex items-center gap-3 group cursor-pointer">
                        <div class="w-10 h-10 rounded-xl bg-gradient-to-br from-blue-500 to-blue-600 flex items-center justify-center shadow-lg group-hover:scale-110 transition-transform duration-300">
                            <span class="text-white font-bold text-xl">4</span>
                        </div>
                        <span class="text-xl font-display font-bold text-gray-900">
                            4<span class="text-blue-gradient">Opportunities</span>
                        </span>
                    </div>

                    <!-- Desktop Navigation -->
                    <div class="hidden md:flex items-center gap-8">
                        <a href="#features" class="nav-link">Features</a>
                        <a href="#how-it-works" class="nav-link">How It Works</a>
                        <a href="#stats" class="nav-link">Success Stories</a>
                        <a href="#contact" class="nav-link">Contact</a>
                    </div>

                    <!-- Auth Buttons -->
                    <div class="flex items-center gap-3">
                        @auth
                            <a href="/dashboard" class="btn-primary text-sm px-5 py-2">Dashboard</a>
                        @else
                            <a href="{{ route('login') }}" class="nav-link text-sm">Sign In</a>
                            <a href="{{ route('register') }}" class="btn-primary text-sm px-5 py-2">Get Started</a>
                        @endauth
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="relative min-h-screen flex items-center pt-16 overflow-hidden">
        <!-- bg dots Gradient -->
        <div class="absolute inset-0 opacity-40"
     style="background-image: radial-gradient(circle, #0ea5e9 1px, transparent 1px);
            background-size: 28px 28px;">
</div>


        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full relative z-10">
            <div class="grid lg:grid-cols-2 gap-16 items-center">
                <!-- Hero Content -->
                <div class="text-center lg:text-left reveal">
                    <div class="inline-flex items-center gap-2 badge-blue rounded-full px-4 py-2 mb-6 cursor-default hover:scale-105 transition-transform">
                        <span class="w-2 h-2 bg-blue-500 rounded-full pulse-blue"></span>
                        <span class="text-sm font-medium">Welcome to the Future of Hiring</span>
                    </div>

                    <h1 class="font-display text-5xl md:text-6xl lg:text-7xl font-extrabold text-gray-900 leading-tight mb-6">
                        Find Your<br>
                        <span class="text-blue-gradient">Perfect</span><br>
                        <span class="relative inline-block">
                            Opportunity
                            <svg class="absolute -bottom-2 left-0 w-full" viewBox="0 0 300 12" fill="none">
                                <path d="M2 10C50 4 150 4 298 10" stroke="url(#underline-gradient)" stroke-width="4" stroke-linecap="round"/>
                                <defs>
                                    <linearGradient id="underline-gradient" x1="0" y1="0" x2="300" y2="0">
                                        <stop offset="0%" stop-color="#2563eb" stop-opacity="0.3"/>
                                        <stop offset="100%" stop-color="#06b6d4" stop-opacity="0.3"/>
                                    </linearGradient>
                                </defs>
                            </svg>
                        </span>
                    </h1>

                    <p class="text-xl text-gray-600 mb-8 max-w-xl mx-auto lg:mx-0 leading-relaxed">
                        Connect with top employers, showcase your skills, and take the next step in your career journey.
                        Your dream job is just a click away.
                    </p>

                    <div class="flex flex-col sm:flex-row gap-4 justify-center lg:justify-start">
                        <a href="#" class="btn-primary inline-flex items-center justify-center gap-2">
                            <span>Start Your Journey</span>
                            <svg class="w-5 h-5 transition-transform group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                            </svg>
                        </a>
                        <a href="#" class="btn-secondary inline-flex items-center justify-center gap-2 group">
                            <svg class="w-5 h-5 transition-transform group-hover:scale-110" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z"/>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                            <span>Watch Demo</span>
                        </a>
                    </div>

                    <!-- Trust Badges -->
                    <div class="mt-12 flex flex-wrap items-center gap-8 justify-center lg:justify-start">
                        <div class="text-center group cursor-default">
                            <div class="text-3xl font-bold text-blue-gradient group-hover:scale-110 transition-transform">500+</div>
                            <div class="text-sm text-gray-500 mt-1">Companies</div>
                        </div>
                        <div class="w-px h-12 bg-gradient-to-b from-transparent via-gray-300 to-transparent"></div>
                        <div class="text-center group cursor-default">
                            <div class="text-3xl font-bold text-blue-gradient group-hover:scale-110 transition-transform">10k+</div>
                            <div class="text-sm text-gray-500 mt-1">Job Seekers</div>
                        </div>
                        <div class="w-px h-12 bg-gradient-to-b from-transparent via-gray-300 to-transparent"></div>
                        <div class="text-center group cursor-default">
                            <div class="text-3xl font-bold text-blue-gradient group-hover:scale-110 transition-transform">98%</div>
                            <div class="text-sm text-gray-500 mt-1">Success Rate</div>
                        </div>
                    </div>
                </div>

                <!-- Hero Visual -->
                <div class="relative hidden lg:block">
                    <div class="relative">
                        <!-- Main Card -->
                        <div class="hero-card p-8 floating">
                            <div class="flex items-center justify-between mb-6">
                                <div class="flex items-center gap-3">
                                    <div class="w-12 h-12 rounded-full bg-gradient-to-br from-cyan-400 to-blue-500"></div>
                                    <div>
                                        <div class="text-gray-900 font-semibold">Senior Developer</div>
                                        <div class="text-gray-500 text-sm">TechCorp Inc.</div>
                                    </div>
                                </div>
                                <span class="px-3 py-1 rounded-full bg-green-50 text-green-600 text-sm font-medium border border-green-200">New</span>
                            </div>
                            <div class="space-y-3">
                                <div class="h-2 bg-gray-100 rounded-full overflow-hidden">
                                    <div class="h-full w-3/4 bg-gradient-to-r from-cyan-400 to-blue-500 rounded-full"></div>
                                </div>
                                <div class="flex justify-between text-sm text-gray-500">
                                    <span>Match Score</span>
                                    <span class="text-blue-600 font-semibold">95%</span>
                                </div>
                            </div>
                            <div class="mt-6 flex gap-2">
                                <span class="px-3 py-1 rounded-full bg-gray-50 text-gray-600 text-xs border border-gray-200">Remote</span>
                                <span class="px-3 py-1 rounded-full bg-gray-50 text-gray-600 text-xs border border-gray-200">$120k+</span>
                                <span class="px-3 py-1 rounded-full bg-gray-50 text-gray-600 text-xs border border-gray-200">Full-time</span>
                            </div>
                        </div>

                        <!-- Floating Cards -->
                        <div class="absolute -top-6 -right-6 floating-badge p-4 floating-delay">
                            <div class="flex items-center gap-3">
                                <div class="w-10 h-10 rounded-full bg-blue-500 flex items-center justify-center text-white font-bold shadow-lg">
                                    ✓
                                </div>
                                <div>
                                    <div class="text-gray-900 text-sm font-medium">Application Sent</div>
                                    <div class="text-gray-400 text-xs">Just now</div>
                                </div>
                            </div>
                        </div>

                        <div class="absolute -bottom-4 -left-6 floating-badge p-4 floating-delay-2">
                            <div class="flex items-center gap-3">
                                <div class="w-10 h-10 rounded-full bg-gradient-to-br from-cyan-400 to-teal-500 flex items-center justify-center text-white shadow-lg">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                    </svg>
                                </div>
                                <div>
                                    <div class="text-gray-900 text-sm font-medium">Interview Scheduled</div>
                                    <div class="text-gray-400 text-xs">Tomorrow, 2:00 PM</div>
                                </div>
                            </div>
                        </div>

                        <!-- Stats Badge -->
                        <div class="absolute top-1/2 -right-8 floating-badge p-4 floating">
                            <div class="text-center">
                                <div class="text-2xl font-bold text-blue-gradient">+247</div>
                                <div class="text-gray-400 text-xs">Jobs Today</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section id="features" class="py-24 bg-gray-50 relative">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Section Header -->
            <div class="text-center mb-16 reveal">
                <span class="inline-block px-4 py-2 rounded-full badge-blue text-sm font-medium mb-4">
                    Why Choose Us
                </span>
                <h2 class="font-display text-4xl md:text-5xl font-extrabold text-gray-900 mb-6">
                    Everything You Need to <span class="text-blue-gradient">Succeed</span>
                </h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    Our platform provides powerful tools and features designed to connect the right talent with the right opportunities.
                </p>
            </div>

            <!-- Features Grid -->
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Feature 1 -->
                <div class="feature-card reveal" style="transition-delay: 0.1s;">
                    <div class="feature-icon">
                        <svg class="w-7 h-7 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Smart Job Matching</h3>
                    <p class="text-gray-600 leading-relaxed">
                        Our AI-powered algorithm analyzes your skills and experience to find the perfect job matches tailored just for you.
                    </p>
                </div>

                <!-- Feature 2 -->
                <div class="feature-card reveal" style="transition-delay: 0.2s;">
                    <div class="feature-icon">
                        <svg class="w-7 h-7 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Verified Companies</h3>
                    <p class="text-gray-600 leading-relaxed">
                        Every company on our platform is thoroughly vetted to ensure legitimate opportunities and safe working environments.
                    </p>
                </div>

                <!-- Feature 3 -->
                <div class="feature-card reveal" style="transition-delay: 0.3s;">
                    <div class="feature-icon">
                        <svg class="w-7 h-7 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">One-Click Apply</h3>
                    <p class="text-gray-600 leading-relaxed">
                        Apply to multiple positions instantly with your saved profile. No more filling out the same information repeatedly.
                    </p>
                </div>

                <!-- Feature 4 -->
                <div class="feature-card reveal" style="transition-delay: 0.4s;">
                    <div class="feature-icon">
                        <svg class="w-7 h-7 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Interview Scheduling</h3>
                    <p class="text-gray-600 leading-relaxed">
                        Built-in calendar integration makes scheduling interviews seamless. Never miss an opportunity with automated reminders.
                    </p>
                </div>

                <!-- Feature 5 -->
                <div class="feature-card reveal" style="transition-delay: 0.5s;">
                    <div class="feature-icon">
                        <svg class="w-7 h-7 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Team Collaboration</h3>
                    <p class="text-gray-600 leading-relaxed">
                        Companies can collaborate on hiring decisions with shared notes, ratings, and feedback systems for each candidate.
                    </p>
                </div>

                <!-- Feature 6 -->
                <div class="feature-card reveal" style="transition-delay: 0.6s;">
                    <div class="feature-icon">
                        <svg class="w-7 h-7 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 002 2h2a2 2 0 002-2z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Advanced Analytics</h3>
                    <p class="text-gray-600 leading-relaxed">
                        Track your application progress, view detailed insights, and optimize your job search strategy with data-driven recommendations.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- How It Works -->
    <section id="how-it-works" class="py-24 relative">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16 reveal">
                <span class="inline-block px-4 py-2 rounded-full badge-cyan text-sm font-medium mb-4">
                    Simple Process
                </span>
                <h2 class="font-display text-4xl md:text-5xl font-extrabold text-gray-900 mb-6">
                    How It <span class="text-blue-gradient">Works</span>
                </h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    Getting started is easy. Follow these simple steps to find your dream job or hire the perfect candidate.
                </p>
            </div>

            <!-- Steps -->
            <div class="grid md:grid-cols-3 gap-8">
                <!-- Step 1 -->
                <div class="step-card p-8 reveal connector-line" style="transition-delay: 0.1s;">
                    <div class="step-number mb-6">1</div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Create Your Profile</h3>
                    <p class="text-gray-600 leading-relaxed mb-6">
                        Sign up and build your professional profile. Showcase your skills, experience, and career aspirations to stand out.
                    </p>
                    <div class="flex items-center gap-2">
                        <div class="w-6 h-6 rounded-full bg-blue-50 flex items-center justify-center">
                            <svg class="w-3 h-3 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                        </div>
                        <span class="text-gray-500 text-sm">Takes just 2 minutes</span>
                    </div>
                </div>

                <!-- Step 2 -->
                <div class="step-card p-8 reveal connector-line" style="transition-delay: 0.2s;">
                    <div class="step-number mb-6 bg-gradient-to-br from-cyan-500 to-blue-500">2</div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Discover Opportunities</h3>
                    <p class="text-gray-600 leading-relaxed mb-6">
                        Browse thousands of verified job listings or let our AI match you with positions that fit your unique profile.
                    </p>
                    <div class="flex items-center gap-2">
                        <div class="w-6 h-6 rounded-full bg-cyan-50 flex items-center justify-center">
                            <svg class="w-3 h-3 text-cyan-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                        </div>
                        <span class="text-gray-500 text-sm">Personalized matches daily</span>
                    </div>
                </div>

                <!-- Step 3 -->
                <div class="step-card p-8 reveal" style="transition-delay: 0.3s;">
                    <div class="step-number mb-6 bg-gradient-to-br from-teal-500 to-cyan-500">3</div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Get Hired</h3>
                    <p class="text-gray-600 leading-relaxed mb-6">
                        Apply with one click, schedule interviews, and land your dream job. Our platform guides you through every step.
                    </p>
                    <div class="flex items-center gap-2">
                        <div class="w-6 h-6 rounded-full bg-teal-50 flex items-center justify-center">
                            <svg class="w-3 h-3 text-teal-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                        </div>
                        <span class="text-gray-500 text-sm">98% success rate</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section id="stats" class="py-24 bg-gray-50 relative">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="glass-card rounded-3xl p-12 reveal">
                <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
                    <div class="text-center group">
                        <div class="stat-number" data-target="10000">0</div>
                        <div class="text-gray-600 mt-2 font-medium group-hover:text-blue-600 transition-colors">Active Job Seekers</div>
                    </div>
                    <div class="text-center group">
                        <div class="stat-number" data-target="500">0</div>
                        <div class="text-gray-600 mt-2 font-medium group-hover:text-blue-600 transition-colors">Partner Companies</div>
                    </div>
                    <div class="text-center group">
                        <div class="stat-number" data-target="2500">0</div>
                        <div class="text-gray-600 mt-2 font-medium group-hover:text-blue-600 transition-colors">Jobs Posted</div>
                    </div>
                    <div class="text-center group">
                        <div class="stat-number" data-target="98">0</div>
                        <div class="text-gray-600 mt-2 font-medium group-hover:text-blue-600 transition-colors">% Success Rate</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section id="contact" class="py-24 relative">
        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="animated-border">
                <div class="rounded-3xl p-12 md:p-16 text-center reveal">
                    <h2 class="font-display text-4xl md:text-5xl font-extrabold text-gray-900 mb-6">
                        Ready to Transform Your <span class="text-blue-gradient">Career</span>?
                    </h2>
                    <p class="text-xl text-gray-600 mb-8 max-w-2xl mx-auto">
                        Join thousands of professionals who have found their dream jobs through 4Opportunities.
                        Your next chapter starts here.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4 justify-center">
                        @auth
                            <a href="/dashboard" class="btn-primary inline-flex items-center justify-center gap-2 text-lg">
                                <span>Go to Dashboard</span>
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                                </svg>
                            </a>
                        @else
                            <a href="{{ route('register') }}" class="btn-primary inline-flex items-center justify-center gap-2 text-lg">
                                <span>Create Free Account</span>
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                                </svg>
                            </a>
                            <a href="{{ route('login') }}" class="btn-secondary inline-flex items-center justify-center gap-2 text-lg">
                                <span>Sign In</span>
                            </a>
                        @endauth
                    </div>

                    <!-- Testimonial -->
                    <div class="mt-12 pt-12 border-t border-gray-100">
                        <div class="flex flex-col items-center">
                            <div class="flex gap-1 mb-4">
                                <svg class="w-5 h-5 text-blue-500" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                </svg>
                                <svg class="w-5 h-5 text-blue-500" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                </svg>
                                <svg class="w-5 h-5 text-blue-500" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                </svg>
                                <svg class="w-5 h-5 text-blue-500" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                </svg>
                                <svg class="w-5 h-5 text-blue-500" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                </svg>
                            </div>
                            <p class="text-gray-600 italic max-w-xl mb-4">
                                "4Opportunities completely changed my career trajectory. I found my dream job within 2 weeks of creating my profile!"
                            </p>
                            <div class="flex items-center gap-3">
                                <div class="w-12 h-12 rounded-full bg-gradient-to-br from-blue-400 to-blue-600 flex items-center justify-center text-white font-bold shadow-lg">
                                    SK
                                </div>
                                <div class="text-left">
                                    <div class="text-gray-900 font-semibold">Sarah Kimani</div>
                                    <div class="text-gray-500 text-sm">Software Engineer at TechCorp</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="py-12 border-t border-gray-100 relative">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid md:grid-cols-4 gap-8 mb-8">
                <!-- Brand -->
                <div class="md:col-span-1">
                    <div class="flex items-center gap-3 mb-4">
                        <div class="w-10 h-10 rounded-xl bg-gradient-to-br from-blue-500 to-blue-600 flex items-center justify-center shadow-lg">
                            <span class="text-white font-bold text-xl">4</span>
                        </div>
                        <span class="text-xl font-display font-bold text-gray-900">
                            4<span class="text-blue-gradient">Opportunities</span>
                        </span>
                    </div>
                    <p class="text-gray-500 text-sm leading-relaxed">
                        Connecting talent with opportunity. Your gateway to career excellence starts here.
                    </p>
                </div>

                <!-- Quick Links -->
                <div>
                    <h4 class="text-gray-900 font-semibold mb-4">For Job Seekers</h4>
                    <ul class="space-y-2 text-sm">
                        <li><a href="#" class="text-gray-500 hover:text-blue-600 transition-colors">Browse Jobs</a></li>
                        <li><a href="#" class="text-gray-500 hover:text-blue-600 transition-colors">Create Profile</a></li>
                        <li><a href="#" class="text-gray-500 hover:text-blue-600 transition-colors">Career Resources</a></li>
                        <li><a href="#" class="text-gray-500 hover:text-blue-600 transition-colors">Success Stories</a></li>
                    </ul>
                </div>

                <div>
                    <h4 class="text-gray-900 font-semibold mb-4">For Employers</h4>
                    <ul class="space-y-2 text-sm">
                        <li><a href="#" class="text-gray-500 hover:text-blue-600 transition-colors">Post a Job</a></li>
                        <li><a href="#" class="text-gray-500 hover:text-blue-600 transition-colors">Find Candidates</a></li>
                        <li><a href="#" class="text-gray-500 hover:text-blue-600 transition-colors">Recruiting Solutions</a></li>
                        <li><a href="#" class="text-gray-500 hover:text-blue-600 transition-colors">Pricing</a></li>
                    </ul>
                </div>

                <div>
                    <h4 class="text-gray-900 font-semibold mb-4">Support</h4>
                    <ul class="space-y-2 text-sm">
                        <li><a href="#" class="text-gray-500 hover:text-blue-600 transition-colors">Help Center</a></li>
                        <li><a href="#" class="text-gray-500 hover:text-blue-600 transition-colors">Contact Us</a></li>
                        <li><a href="#" class="text-gray-500 hover:text-blue-600 transition-colors">Privacy Policy</a></li>
                        <li><a href="#" class="text-gray-500 hover:text-blue-600 transition-colors">Terms of Service</a></li>
                    </ul>
                </div>
            </div>

            <div class="pt-8 border-t border-gray-100 flex flex-col md:flex-row items-center justify-between gap-4">
                <p class="text-gray-400 text-sm">
                    &copy; {{ date('Y') }} 4Opportunities. All rights reserved.
                </p>
                <div class="flex gap-4">
                    <a href="#" class="w-10 h-10 rounded-full bg-gray-50 flex items-center justify-center text-gray-400 hover:bg-blue-50 hover:text-blue-600 transition-all hover:scale-110">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/>
                        </svg>
                    </a>
                    <a href="#" class="w-10 h-10 rounded-full bg-gray-50 flex items-center justify-center text-gray-400 hover:bg-blue-50 hover:text-blue-600 transition-all hover:scale-110">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/>
                        </svg>
                    </a>
                    <a href="#" class="w-10 h-10 rounded-full bg-gray-50 flex items-center justify-center text-gray-400 hover:bg-blue-50 hover:text-blue-600 transition-all hover:scale-110">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </footer>

    <!-- JavaScript -->
    <script>
        // Scroll Reveal Animation
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('active');
                }
            });
        }, observerOptions);

        document.querySelectorAll('.reveal').forEach(el => observer.observe(el));

        // Navbar Scroll Effect
        const navbar = document.getElementById('navbar');
        let lastScroll = 0;

        window.addEventListener('scroll', () => {
            const currentScroll = window.pageYOffset;

            if (currentScroll > 50) {
                navbar.classList.add('shadow-lg');
            } else {
                navbar.classList.remove('shadow-lg');
            }

            lastScroll = currentScroll;
        });

        // Animated Counter
        function animateCounter(element) {
            const target = parseInt(element.getAttribute('data-target'));
            const duration = 2000;
            const step = target / (duration / 16);
            let current = 0;

            const timer = setInterval(() => {
                current += step;
                if (current >= target) {
                    element.textContent = target.toLocaleString();
                    clearInterval(timer);
                } else {
                    element.textContent = Math.floor(current).toLocaleString();
                }
            }, 16);
        }

        // Trigger counters when stats section is visible
        const statsObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.querySelectorAll('.stat-number').forEach(animateCounter);
                    statsObserver.unobserve(entry.target);
                }
            });
        }, { threshold: 0.5 });

        const statsSection = document.getElementById('stats');
        if (statsSection) {
            statsObserver.observe(statsSection);
        }
    </script>
</body>
</html>
