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
            background: transparent;
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

        /* Animated Black Dots Background */
        #blackDots {
            position: fixed;
            inset: 0;
            z-index: 0;
            pointer-events: none;
        }

        .black-dot {
            position: absolute;
            border-radius: 50%;
            background: rgba(0, 0, 0, 0.4);
            animation: twinkleDot 4s ease-in-out infinite;
        }

        @keyframes twinkleDot {
            0%, 100% { opacity: 0.15; transform: scale(0.5); }
            50% { opacity: 0.9; transform: scale(1.1); }
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
<body class="bg-[#020617] text-white font-[Plus Jakarta Sans] antialiased">

<!-- NAV -->
<nav class="fixed top-0 w-full z-50 backdrop-blur-xl bg-white/5 border-b border-white/10">
    <div class="max-w-7xl mx-auto px-6 flex justify-between items-center h-16">
        <div class="text-xl font-bold">
            4<span class="text-cyan-400">Opportunities</span>
        </div>

        <div class="hidden md:flex gap-8 text-gray-300">
            <a href="#" class="hover:text-white">Features</a>
            <a href="#" class="hover:text-white">How it works</a>
            <a href="#" class="hover:text-white">Pricing</a>
        </div>

        <div class="flex gap-3">
            <a href="#" class="text-sm text-gray-300">Login</a>
            <a href="#" class="px-4 py-2 bg-cyan-400 text-black rounded-lg font-semibold">Start</a>
        </div>
    </div>
</nav>

<!-- HERO -->
<section class="min-h-screen flex items-center pt-20 relative overflow-hidden">

    <!-- Glow -->
    <div class="absolute inset-0">
        <div class="absolute w-[600px] h-[600px] bg-cyan-400/20 blur-[150px] top-[-200px] left-[-200px]"></div>
        <div class="absolute w-[600px] h-[600px] bg-blue-500/20 blur-[150px] bottom-[-200px] right-[-200px]"></div>
    </div>

    <div class="max-w-7xl mx-auto px-6 grid lg:grid-cols-2 gap-16 items-center relative z-10">

        <div>
            <h1 class="text-6xl font-extrabold leading-tight mb-6">
                Get Hired.<br>
                <span class="text-transparent bg-clip-text bg-gradient-to-r from-cyan-400 to-blue-500">
                    Not Ignored.
                </span>
            </h1>

            <p class="text-gray-400 mb-8 text-lg max-w-lg">
                Skip the noise. 4Opportunities connects you directly to real companies ready to hire — not just collect CVs.
            </p>

            <div class="flex gap-4">
                <a href="#" class="px-6 py-4 bg-gradient-to-r from-cyan-400 to-blue-500 text-black rounded-xl font-semibold hover:scale-105 transition">
                    Get Started
                </a>
                <a href="#" class="px-6 py-4 border border-white/20 rounded-xl hover:border-cyan-400">
                    Demo
                </a>
            </div>
        </div>

        <!-- FLOATING CARDS -->
        <div class="relative h-[500px] hidden lg:block">

            <div class="absolute top-0 left-10 w-72 p-6 bg-white/5 border border-white/10 backdrop-blur-xl rounded-2xl rotate-[-6deg] hover:rotate-0 transition">
                <h3 class="font-bold">Frontend Dev</h3>
                <p class="text-cyan-400 text-sm">Remote • $90k</p>
            </div>

            <div class="absolute top-32 right-0 w-72 p-6 bg-white/5 border border-white/10 backdrop-blur-xl rounded-2xl rotate-[8deg] hover:rotate-0 transition">
                <h3 class="font-bold">Interview Booked</h3>
                <p class="text-green-400 text-sm">Tomorrow</p>
            </div>

            <div class="absolute bottom-0 left-20 w-72 p-6 bg-white/5 border border-white/10 backdrop-blur-xl rounded-2xl rotate-[-3deg] hover:rotate-0 transition">
                <h3 class="text-3xl font-bold text-cyan-400">98%</h3>
                <p class="text-gray-400 text-sm">Success Rate</p>
            </div>

        </div>
    </div>
</section>

<!-- FEATURES -->
<section class="py-24">
    <div class="max-w-7xl mx-auto px-6 text-center mb-16">
        <h2 class="text-4xl font-bold mb-4">Why this works</h2>
        <p class="text-gray-400">Not another job board. A smarter system.</p>
    </div>

    <div class="max-w-7xl mx-auto px-6 grid md:grid-cols-3 gap-8">

        <div class="p-8 rounded-2xl bg-white/5 border border-white/10 hover:bg-white/10 transition">
            <h3 class="font-bold mb-3">Smart Matching</h3>
            <p class="text-gray-400">We don’t show everything. Only what fits you.</p>
        </div>

        <div class="p-8 rounded-2xl bg-white/5 border border-white/10 hover:bg-white/10 transition">
            <h3 class="font-bold mb-3">Real Companies</h3>
            <p class="text-gray-400">No fake listings. No CV farming.</p>
        </div>

        <div class="p-8 rounded-2xl bg-white/5 border border-white/10 hover:bg-white/10 transition">
            <h3 class="font-bold mb-3">Fast Hiring</h3>
            <p class="text-gray-400">Apply once. Get responses faster.</p>
        </div>

    </div>
</section>

<!-- HOW IT WORKS -->
<section class="py-24 border-t border-white/10">
    <div class="max-w-7xl mx-auto px-6 grid md:grid-cols-3 gap-8 text-center">

        <div>
            <div class="text-4xl text-cyan-400 mb-4">1</div>
            <h3 class="font-bold mb-2">Create Profile</h3>
            <p class="text-gray-400">Takes less than 2 minutes</p>
        </div>

        <div>
            <div class="text-4xl text-cyan-400 mb-4">2</div>
            <h3 class="font-bold mb-2">Get Matches</h3>
            <p class="text-gray-400">Jobs tailored to you</p>
        </div>

        <div>
            <div class="text-4xl text-cyan-400 mb-4">3</div>
            <h3 class="font-bold mb-2">Get Hired</h3>
            <p class="text-gray-400">Simple and fast process</p>
        </div>

    </div>
</section>

<!-- STATS -->
<section class="py-24">
    <div class="max-w-7xl mx-auto px-6 grid md:grid-cols-4 gap-8 text-center">

        <div>
            <h3 class="text-4xl font-bold text-cyan-400">10k+</h3>
            <p class="text-gray-400">Users</p>
        </div>

        <div>
            <h3 class="text-4xl font-bold text-cyan-400">500+</h3>
            <p class="text-gray-400">Companies</p>
        </div>

        <div>
            <h3 class="text-4xl font-bold text-cyan-400">2.5k</h3>
            <p class="text-gray-400">Jobs</p>
        </div>

        <div>
            <h3 class="text-4xl font-bold text-cyan-400">98%</h3>
            <p class="text-gray-400">Success</p>
        </div>

    </div>
</section>

<!-- CTA -->
<section class="py-24 border-t border-white/10 text-center">
    <h2 class="text-4xl font-bold mb-6">Your next job is waiting</h2>

    <div class="flex justify-center gap-4">
        <a href="#" class="px-8 py-4 bg-gradient-to-r from-cyan-400 to-blue-500 text-black rounded-xl font-semibold">
            Get Started
        </a>
        <a href="#" class="px-8 py-4 border border-white/20 rounded-xl">
            Login
        </a>
    </div>
</section>

<!-- FOOTER -->
<footer class="py-12 border-t border-white/10 text-center text-gray-400">
    © {{ date('Y') }} 4Opportunities
</footer>

</body>
<html
