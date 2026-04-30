This is a complete HTML document that transforms the "4Opportunities" job platform landing page into a visually striking, modern experience with a dark theme, animated gradients, glass-morphism effects, and interactive elements.
```html
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="4Opportunities - Next-gen career platform. AI-powered matching, immersive experience, and limitless opportunities.">
    <title>4Opportunities — Orbit Your Career</title>

    <!-- Fonts: Outfit + Inter for modern edge -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:opsz,wght@14..32,300;14..32,400;14..32,500;14..32,600;14..32,700;14..32,800;14..32,900&family=Outfit:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- Tailwind + Vite (Laravel integration) -->
    @vite(['resources/css/app.css'])

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Outfit', 'Inter', sans-serif;
            background: #03050b;
            color: #eef2ff;
            overflow-x: hidden;
        }

        /* cosmic dark animated mesh */
        .cosmic-bg {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -2;
            background: radial-gradient(ellipse at 20% 30%, #0a0f2a, #02040c);
        }

        .noise {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            pointer-events: none;
            z-index: -1;
            opacity: 0.15;
            background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 400 400' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='noise'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.7' numOctaves='3' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23noise)'/%3E%3C/svg%3E");
            background-repeat: repeat;
        }

        /* animated gradient orbit rings */
        .orbit-ring {
            position: fixed;
            border-radius: 50%;
            filter: blur(80px);
            opacity: 0.3;
            background: radial-gradient(circle, #2b6eff, #00e0ff);
            animation: pulseOrbit 12s infinite alternate;
            pointer-events: none;
            z-index: 0;
        }

        @keyframes pulseOrbit {
            0% { transform: scale(1); opacity: 0.2; }
            100% { transform: scale(1.3); opacity: 0.5; }
        }

        .ring1 { width: 80vw; height: 80vw; top: -20vh; left: -20vw; background: radial-gradient(circle, #2563eb, #00b4d8); filter: blur(100px); }
        .ring2 { width: 60vw; height: 60vw; bottom: -20vh; right: -10vw; background: radial-gradient(circle, #0ea5e9, #2dd4bf); filter: blur(90px); animation-duration: 18s; }

        /* glass panels with neon border */
        .neon-glass {
            background: rgba(8, 14, 26, 0.55);
            backdrop-filter: blur(16px);
            border: 1px solid rgba(59, 130, 246, 0.25);
            border-radius: 2rem;
            transition: all 0.4s ease;
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.2);
        }

        .neon-glass:hover {
            border-color: #3b82f6;
            box-shadow: 0 0 28px rgba(59, 130, 246, 0.3);
        }

        /* gradient text glow */
        .text-glow-gradient {
            background: linear-gradient(135deg, #a5f3ff, #3b82f6, #d946ef);
            background-size: 200% auto;
            -webkit-background-clip: text;
            background-clip: text;
            -webkit-text-fill-color: transparent;
            animation: shimmerText 4s linear infinite;
        }

        @keyframes shimmerText {
            0% { background-position: 0% 50%; }
            100% { background-position: 200% 50%; }
        }

        /* ultra modern button */
        .btn-cosmic {
            background: linear-gradient(90deg, #1e3a8a, #3b82f6, #06b6d4);
            background-size: 200% auto;
            border: none;
            padding: 0.9rem 2rem;
            border-radius: 60px;
            font-weight: 700;
            letter-spacing: -0.01em;
            transition: all 0.4s cubic-bezier(0.2, 0.9, 0.4, 1.1);
            box-shadow: 0 4px 20px rgba(59, 130, 246, 0.3);
        }

        .btn-cosmic:hover {
            transform: translateY(-3px) scale(1.02);
            background-position: 100% 0;
            box-shadow: 0 12px 35px rgba(59, 130, 246, 0.5);
        }

        .btn-outline-cosmic {
            background: transparent;
            border: 1px solid rgba(59, 130, 246, 0.6);
            backdrop-filter: blur(8px);
            border-radius: 60px;
            padding: 0.9rem 2rem;
            font-weight: 600;
            transition: 0.25s;
        }

        .btn-outline-cosmic:hover {
            background: rgba(59, 130, 246, 0.15);
            border-color: #60a5fa;
            transform: translateY(-2px);
        }

        /* Feature 3D tilt card */
        .card-3d {
            transition: transform 0.4s cubic-bezier(0.2, 0.9, 0.4, 1.1), box-shadow 0.3s;
            transform-style: preserve-3d;
        }

        .card-3d:hover {
            transform: translateY(-12px) rotateX(3deg) rotateY(2deg);
            box-shadow: 0 30px 50px -20px rgba(0, 180, 255, 0.4);
        }

        /* Step connector line (glowing) */
        .step-glow {
            position: relative;
        }

        @media (min-width: 1024px) {
            .step-glow:not(:last-child)::after {
                content: '';
                position: absolute;
                top: 25%;
                right: -2rem;
                width: 3rem;
                height: 2px;
                background: linear-gradient(90deg, #3b82f6, #2dd4bf, transparent);
                transform: translateY(-50%);
                opacity: 0.7;
            }
        }

        /* floating particles */
        .floating-particle {
            position: absolute;
            background: radial-gradient(circle, #3b82f6, #00e0ff);
            border-radius: 50%;
            opacity: 0.4;
            filter: blur(3px);
            animation: floatParticle 15s infinite alternate;
            pointer-events: none;
        }

        @keyframes floatParticle {
            0% { transform: translate(0, 0) scale(1); opacity: 0.2; }
            100% { transform: translate(40px, -30px) scale(1.6); opacity: 0.5; }
        }

        .stat-neon {
            font-size: 4rem;
            font-weight: 800;
            background: linear-gradient(125deg, #ffffff, #3b82f6, #60a5fa);
            -webkit-background-clip: text;
            background-clip: text;
            -webkit-text-fill-color: transparent;
            letter-spacing: -0.02em;
            text-shadow: 0 0 12px rgba(59,130,246,0.3);
        }

        /* progress scroll bar */
        .scroll-progress {
            position: fixed;
            top: 0;
            left: 0;
            width: 0%;
            height: 4px;
            background: linear-gradient(90deg, #3b82f6, #06b6d4, #a855f7);
            z-index: 1000;
            transition: width 0.1s;
        }

        /* animated underline neon */
        .neon-underline {
            position: relative;
        }

        .neon-underline::after {
            content: '';
            position: absolute;
            bottom: -8px;
            left: 0;
            width: 60%;
            height: 3px;
            background: linear-gradient(90deg, #3b82f6, #14b8a6);
            border-radius: 3px;
            box-shadow: 0 0 8px #0ea5e9;
        }

        /* reveal animation enhanced */
        .reveal-up {
            opacity: 0;
            transform: translateY(45px);
            transition: all 0.8s cubic-bezier(0.2, 0.9, 0.4, 1);
        }

        .reveal-up.active {
            opacity: 1;
            transform: translateY(0);
        }

        /* custom scroll */
        ::-webkit-scrollbar {
            width: 6px;
        }
        ::-webkit-scrollbar-track {
            background: #0a0f1a;
        }
        ::-webkit-scrollbar-thumb {
            background: #3b82f6;
            border-radius: 6px;
        }

        /* badge modern */
        .badge-cosmic {
            background: rgba(37, 99, 235, 0.2);
            backdrop-filter: blur(4px);
            border: 1px solid rgba(59,130,246,0.5);
            border-radius: 60px;
            padding: 0.3rem 1rem;
            font-size: 0.8rem;
            font-weight: 500;
            letter-spacing: 0.3px;
        }

        .hero-visual-card {
            background: rgba(15, 25, 45, 0.65);
            backdrop-filter: blur(18px);
            border-radius: 2rem;
            border: 1px solid rgba(59,130,246,0.4);
            transition: all 0.3s;
        }
    </style>
</head>
<body class="antialiased">

<div class="cosmic-bg"></div>
<div class="noise"></div>
<div class="orbit-ring ring1"></div>
<div class="orbit-ring ring2"></div>

<!-- scroll progress -->
<div class="scroll-progress" id="scrollProgress"></div>

<!-- Navigation (glass elevate) -->
<nav class="fixed top-0 left-0 right-0 z-50 transition-all duration-500" id="navbar">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 py-3">
        <div class="neon-glass rounded-2xl px-5 py-2 flex items-center justify-between">
            <div class="flex items-center gap-3 group cursor-pointer">
                <div class="w-11 h-11 rounded-xl bg-gradient-to-tr from-blue-500 to-cyan-400 flex items-center justify-center shadow-lg shadow-blue-500/30 group-hover:scale-110 transition-transform duration-300">
                    <span class="text-white font-black text-2xl">4</span>
                </div>
                <span class="text-2xl font-black tracking-tight bg-gradient-to-r from-white to-blue-300 bg-clip-text text-transparent">4Opportunities</span>
            </div>
            <div class="hidden md:flex items-center gap-8">
                <a href="#features" class="text-gray-300 hover:text-white transition font-medium relative after:absolute after:bottom-[-6px] after:left-0 after:w-0 after:h-[2px] after:bg-gradient-to-r after:from-blue-500 after:to-cyan-400 after:transition-all after:duration-300 hover:after:w-full">Features</a>
                <a href="#how-it-works" class="text-gray-300 hover:text-white transition font-medium relative after:absolute after:bottom-[-6px] after:left-0 after:w-0 after:h-[2px] after:bg-gradient-to-r after:from-blue-500 after:to-cyan-400 hover:after:w-full">How It Works</a>
                <a href="#stats" class="text-gray-300 hover:text-white transition font-medium relative after:absolute after:bottom-[-6px] after:left-0 after:w-0 after:h-[2px] after:bg-gradient-to-r after:from-blue-500 after:to-cyan-400 hover:after:w-full">Success</a>
                <a href="#contact" class="text-gray-300 hover:text-white transition font-medium relative after:absolute after:bottom-[-6px] after:left-0 after:w-0 after:h-[2px] after:bg-gradient-to-r after:from-blue-500 after:to-cyan-400 hover:after:w-full">Contact</a>
            </div>
            <div class="flex items-center gap-4">
                @auth
                    <a href="/dashboard" class="btn-cosmic text-sm px-5 py-2 text-white">Dashboard</a>
                @else
                    <a href="{{ route('login') }}" class="text-sm text-gray-300 hover:text-white transition">Sign In</a>
                    <a href="{{ route('register') }}" class="btn-cosmic text-sm px-5 py-2 text-white shadow-lg shadow-blue-600/30">Get Started</a>
                @endauth
            </div>
        </div>
    </div>
</nav>

<!-- HERO SECTION - futuristic interactive -->
<section class="relative min-h-screen flex items-center pt-28 overflow-hidden">
    <div class="max-w-7xl mx-auto px-5 sm:px-6 lg:px-8 w-full relative z-10">
        <div class="grid lg:grid-cols-2 gap-12 items-center">
            <!-- left content -->
            <div class="reveal-up">
                <div class="inline-flex items-center gap-2 badge-cosmic mb-6">
                    <span class="w-2 h-2 bg-cyan-400 rounded-full animate-pulse"></span>
                    <span class="text-cyan-300">⚡ AI-powered ecosystem</span>
                </div>
                <h1 class="font-display text-6xl md:text-7xl lg:text-8xl font-black leading-[1.1] tracking-tight mb-6">
                    Ignite <span class="text-glow-gradient">Your Future</span><br>
                    <span class="relative inline-block">with Orbit
                        <svg class="absolute -bottom-3 left-0 w-full" viewBox="0 0 300 14" fill="none">
                            <path d="M2 10C70 4 150 4 298 10" stroke="url(#underlineGradient)" stroke-width="5" stroke-linecap="round"/>
                            <defs><linearGradient id="underlineGradient" x1="0" y1="0" x2="300" y2="0"><stop offset="0%" stop-color="#3b82f6"/><stop offset="100%" stop-color="#06b6d4"/></linearGradient></defs>
                        </svg>
                    </span>
                </h1>
                <p class="text-xl text-gray-300 max-w-xl mb-10 leading-relaxed">
                    Next‑gen platform fusing AI matching, immersive insights & limitless opportunities. Join 10k+ visionaries shaping tomorrow.
                </p>
                <div class="flex flex-wrap gap-5">
                    <a href="#" class="btn-cosmic text-white inline-flex items-center gap-2 text-lg px-8 py-3">Launch Journey →</a>
                    <a href="#" class="btn-outline-cosmic text-white inline-flex items-center gap-2">Explore Demo <span class="text-cyan-300">✨</span></a>
                </div>
                <div class="mt-12 flex flex-wrap gap-8 items-center">
                    <div><span class="text-3xl font-black text-glow-gradient">500+</span><p class="text-gray-400 text-sm">Global Partners</p></div>
                    <div class="w-px h-10 bg-gradient-to-b from-transparent via-blue-500 to-transparent"></div>
                    <div><span class="text-3xl font-black text-glow-gradient">12k+</span><p class="text-gray-400 text-sm">Placed Talents</p></div>
                    <div class="w-px h-10 bg-gradient-to-b from-transparent via-blue-500 to-transparent"></div>
                    <div><span class="text-3xl font-black text-glow-gradient">96%</span><p class="text-gray-400 text-sm">Retention Rate</p></div>
                </div>
            </div>
            <!-- right immersive visual -->
            <div class="relative hidden lg:block">
                <div class="hero-visual-card p-6 floating relative z-10">
                    <div class="flex justify-between items-start mb-5">
                        <div><div class="w-14 h-14 rounded-2xl bg-gradient-to-tr from-blue-500 to-indigo-600 shadow-xl"></div></div>
                        <div class="badge-cosmic text-xs">🔥 Hot match</div>
                    </div>
                    <div class="space-y-4">
                        <div><span class="text-2xl font-bold">Principal AI Engineer</span><div class="text-cyan-300 text-sm">Nebula Systems • $185k + equity</div></div>
                        <div class="flex gap-2 flex-wrap"><span class="px-3 py-1 bg-white/5 rounded-full text-xs">Remote-first</span><span class="px-3 py-1 bg-white/5 rounded-full text-xs">Visa sponsor</span></div>
                        <div class="mt-3">
                            <div class="flex justify-between text-xs"><span>Match compatibility</span><span class="text-cyan-300 font-bold">94%</span></div>
                            <div class="w-full bg-gray-800 rounded-full h-1.5 mt-1 overflow-hidden"><div class="bg-gradient-to-r from-cyan-400 to-blue-500 w-[94%] h-full rounded-full"></div></div>
                        </div>
                    </div>
                </div>
                <!-- floating orbs -->
                <div class="absolute -top-8 -right-6 bg-black/40 backdrop-blur-md rounded-2xl p-3 border border-blue-500/40 shadow-2xl animate-bounce-subtle">
                    <div class="flex gap-3 items-center"><div class="w-8 h-8 rounded-full bg-green-500/30 flex items-center justify-center">✓</div><div><div class="text-sm font-bold">Application sent</div><div class="text-xs text-gray-300">2 min ago</div></div></div>
                </div>
                <div class="absolute bottom-10 -left-8 bg-black/40 backdrop-blur-md rounded-2xl p-3 border border-cyan-500/40 shadow-2xl">
                    <div class="text-center"><div class="text-2xl font-black text-cyan-300">+247</div><div class="text-xs text-gray-300">new roles today</div></div>
                </div>
            </div>
        </div>
    </div>
    <!-- floating particles -->
    <div class="floating-particle w-24 h-24 top-[20%] left-[5%]" style="animation-duration: 12s;"></div>
    <div class="floating-particle w-32 h-32 bottom-[15%] right-[8%]" style="animation-duration: 18s; background: radial-gradient(circle,#a855f7,#3b82f6);"></div>
</section>

<!-- FEATURES - futuristic cards -->
<section id="features" class="py-28 relative">
    <div class="max-w-7xl mx-auto px-5 sm:px-6 lg:px-8">
        <div class="text-center mb-16 reveal-up">
            <div class="badge-cosmic inline-block mb-4">✨ next-gen tools</div>
            <h2 class="text-5xl md:text-6xl font-black tracking-tight">Designed for <span class="text-glow-gradient">excellence</span></h2>
            <p class="text-gray-400 text-xl max-w-2xl mx-auto mt-4">Everything you need to accelerate your career or scale hiring with velocity.</p>
        </div>
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            <div class="neon-glass p-8 rounded-3xl card-3d reveal-up transition-all group">
                <div class="w-14 h-14 rounded-2xl bg-gradient-to-br from-blue-500/30 to-cyan-500/30 flex items-center justify-center mb-5 group-hover:scale-110 transition"><svg class="w-7 h-7 text-cyan-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-width="1.5" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/></svg></div>
                <h3 class="text-2xl font-bold mb-3">Neural Match AI</h3>
                <p class="text-gray-300">Deep-learning engine cross-references millions of data points, matching you with roles before they’re even listed.</p>
            </div>
            <div class="neon-glass p-8 rounded-3xl card-3d reveal-up transition-all"><div class="w-14 h-14 rounded-2xl bg-gradient-to-br from-purple-500/30 to-pink-500/30 flex items-center justify-center mb-5"><svg class="w-7 h-7 text-purple-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-width="1.5" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg></div><h3 class="text-2xl font-bold mb-3">Verified Vault</h3><p class="text-gray-300">Every company passes rigorous verification and reputation scoring. Zero spam.</p></div>
            <div class="neon-glass p-8 rounded-3xl card-3d reveal-up transition-all"><div class="w-14 h-14 rounded-2xl bg-gradient-to-br from-emerald-500/30 to-teal-500/30 flex items-center justify-center mb-5"><svg class="w-7 h-7 text-teal-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-width="1.5" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg></div><h3 class="text-2xl font-bold mb-3">Quantum Apply</h3><p class="text-gray-300">One‑click applications across 1k+ jobs using AI-optimized resumes & auto‑fill.</p></div>
            <div class="neon-glass p-8 rounded-3xl card-3d reveal-up transition-all"><div class="w-14 h-14 rounded-2xl bg-gradient-to-br from-amber-500/30 to-orange-500/30 flex items-center justify-center mb-5"><svg class="w-7 h-7 text-amber-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-width="1.5" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg></div><h3 class="text-2xl font-bold mb-3">Cosmic Scheduler</h3><p class="text-gray-300">AI calendar sync with smart buffer zones & one‑click video interview links.</p></div>
            <div class="neon-glass p-8 rounded-3xl card-3d reveal-up transition-all"><div class="w-14 h-14 rounded-2xl bg-gradient-to-br from-rose-500/30 to-red-500/30 flex items-center justify-center mb-5"><svg class="w-7 h-7 text-rose-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-width="1.5" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z"/></svg></div><h3 class="text-2xl font-bold mb-3">Collab Workspace</h3><p class="text-gray-300">Real‑time candidate feedback, scorecards, and team huddle insights.</p></div>
            <div class="neon-glass p-8 rounded-3xl card-3d reveal-up transition-all"><div class="w-14 h-14 rounded-2xl bg-gradient-to-br from-sky-500/30 to-blue-500/30 flex items-center justify-center mb-5"><svg class="w-7 h-7 text-sky-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-width="1.5" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 002 2h2a2 2 0 002-2z"/></svg></div><h3 class="text-2xl font-bold mb-3">Insight Nebula</h3><p class="text-gray-300">Deep recruitment analytics & market trends dashboard, track every metric.</p></div>
        </div>
    </div>
</section>

<!-- HOW IT WORKS: glowing timeline -->
<section id="how-it-works" class="py-24 relative">
    <div class="max-w-6xl mx-auto px-5">
        <div class="text-center mb-16 reveal-up"><div class="badge-cosmic inline-block mb-3">🚀 3 light‑years to success</div><h2 class="text-5xl font-black">Launch in <span class="text-glow-gradient">3 steps</span></h2></div>
        <div class="grid md:grid-cols-3 gap-12 relative">
            <div class="step-glow text-center reveal-up"><div class="w-20 h-20 rounded-3xl bg-gradient-to-br from-blue-600 to-cyan-400 mx-auto flex items-center justify-center text-3xl font-black shadow-2xl shadow-blue-500/30 mb-6">1</div><h3 class="text-2xl font-bold mb-3">Forge identity</h3><p class="text-gray-300">Upload portfolio, skills & aspirations. AI builds your unique career DNA.</p></div>
            <div class="step-glow text-center reveal-up"><div class="w-20 h-20 rounded-3xl bg-gradient-to-br from-cyan-500 to-teal-400 mx-auto flex items-center justify-center text-3xl font-black shadow-2xl shadow-cyan-500/30 mb-6">2</div><h3 class="text-2xl font-bold mb-3">Explore wormholes</h3><p class="text-gray-300">Smart feed suggests curated roles, hidden gems & early access jobs.</p></div>
            <div class="text-center reveal-up"><div class="w-20 h-20 rounded-3xl bg-gradient-to-br from-indigo-600 to-purple-500 mx-auto flex items-center justify-center text-3xl font-black shadow-2xl shadow-indigo-500/30 mb-6">3</div><h3 class="text-2xl font-bold mb-3">Ignite career</h3><p class="text-gray-300">One‑click apply, live interview coordination & offer negotiation support.</p></div>
        </div>
    </div>
</section>

<!-- STATS SECTION: with neon counters -->
<section id="stats" class="py-24 relative">
    <div class="max-w-6xl mx-auto px-5">
        <div class="neon-glass rounded-4xl p-12 reveal-up">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center">
                <div><div class="stat-neon stat-number" data-target="12450">0</div><div class="text-gray-300 font-medium mt-2">Active visionaries</div></div>
                <div><div class="stat-neon stat-number" data-target="780">0</div><div class="text-gray-300 font-medium mt-2">Elite companies</div></div>
                <div><div class="stat-neon stat-number" data-target="4600">0</div><div class="text-gray-300 font-medium mt-2">Live opportunities</div></div>
                <div><div class="stat-neon stat-number" data-target="98">0</div><div class="text-gray-300 font-medium mt-2">Placement success</div></div>
            </div>
        </div>
    </div>
</section>

<!-- CTA with animated border & testimonial -->
<section id="contact" class="py-24">
    <div class="max-w-5xl mx-auto px-5">
        <div class="relative p-[2px] rounded-3xl bg-gradient-to-r from-blue-500 via-cyan-400 to-purple-500 animate-pulse shadow-2xl">
            <div class="bg-[#0a0f1f] rounded-3xl p-12 text-center reveal-up">
                <h2 class="text-5xl font-black mb-5">Ready to orbit your <span class="text-glow-gradient">destiny</span>?</h2>
                <p class="text-gray-300 text-xl mb-8">Join the revolution where talent meets hypergrowth. 0% friction. 100% future.</p>
                @auth
                    <a href="/dashboard" class="btn-cosmic text-white text-lg px-10 py-4 inline-block">Go to cockpit →</a>
                @else
                    <div class="flex flex-wrap gap-5 justify-center"><a href="{{ route('register') }}" class="btn-cosmic text-white text-lg px-10 py-4">Launch free account</a><a href="{{ route('login') }}" class="btn-outline-cosmic text-white text-lg px-8 py-4">Return explorer</a></div>
                @endauth
                <div class="mt-14 pt-8 border-t border-white/10"><div class="flex flex-col items-center gap-3"><div class="flex gap-1 text-cyan-400">★★★★★</div><p class="italic text-gray-300 max-w-md">“4Opportunities landed me a senior role at a unicorn startup in 9 days. mind-blowing velocity.”</p><div class="flex gap-3 items-center mt-2"><div class="w-10 h-10 rounded-full bg-gradient-to-r from-blue-500 to-cyan-400 flex items-center justify-center text-white font-bold">JD</div><div><div class="font-semibold">Jordan M.</div><div class="text-xs text-gray-400">Lead Engineer, Astra AI</div></div></div></div></div>
            </div>
        </div>
    </div>
</section>

<!-- Footer -->
<footer class="py-12 border-t border-white/10">
    <div class="max-w-7xl mx-auto px-5 grid md:grid-cols-4 gap-10">
        <div><div class="flex items-center gap-2 mb-4"><div class="w-9 h-9 rounded-xl bg-blue-600 flex items-center justify-center text-white font-black">4</div><span class="text-2xl font-black">4Opportunities</span></div><p class="text-gray-400 text-sm">Where visionaries and industry leaders unite.</p></div>
        <div><h4 class="font-bold mb-4 text-white">Aspirants</h4><ul class="space-y-2 text-sm text-gray-400"><li>Career launchpad</li><li>AI resume studio</li><li>Salary insights</li></ul></div>
        <div><h4 class="font-bold mb-4 text-white">Enterprises</h4><ul class="space-y-2 text-sm text-gray-400"><li>Talent intelligence</li><li>Recruiting OS</li><li>Diversity analytics</li></ul></div>
        <div><h4 class="font-bold mb-4 text-white">Connect</h4><ul class="space-y-2 text-sm"><li class="text-gray-400 hover:text-cyan-300 transition cursor-pointer">Help center</li><li class="text-gray-400 hover:text-cyan-300 transition cursor-pointer">Privacy cosmos</li><li class="text-gray-400 hover:text-cyan-300 transition cursor-pointer">Terms of orbit</li></ul></div>
    </div>
    <div class="text-center text-gray-500 text-sm pt-10 border-t border-white/10 mt-8">© 2025 4Opportunities — next‑gen career ecosystem.</div>
</footer>

<script>
    // scroll progress
    const progress = document.getElementById('scrollProgress');
    window.addEventListener('scroll', () => {
        const winScroll = document.body.scrollTop || document.documentElement.scrollTop;
        const height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
        const scrolled = (winScroll / height) * 100;
        progress.style.width = scrolled + '%';
    });
    // counter animation
    const counters = document.querySelectorAll('.stat-number');
    const counterSection = document.getElementById('stats');
    let counted = false;
    const observerCounter = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting && !counted) {
                counted = true;
                counters.forEach(counter => {
                    const updateCount = () => {
                        const target = parseInt(counter.getAttribute('data-target'));
                        let current = parseInt(counter.innerText.replace(/,/g, '')) || 0;
                        const increment = target / 65;
                        if (current < target) {
                            current = Math.min(Math.ceil(current + increment), target);
                            counter.innerText = current.toLocaleString();
                            setTimeout(updateCount, 25);
                        } else counter.innerText = target.toLocaleString();
                    };
                    updateCount();
                });
            }
        });
    }, { threshold: 0.6 });
    if (counterSection) observerCounter.observe(counterSection);
    // reveal animations
    const reveals = document.querySelectorAll('.reveal-up');
    const revealObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => { if(entry.isIntersecting) entry.target.classList.add('active'); });
    }, { threshold: 0.1, rootMargin: "0px 0px -40px 0px" });
    reveals.forEach(el => revealObserver.observe(el));
    // navbar glass effect on scroll
    const navbarDiv = document.querySelector('#navbar .neon-glass');
    window.addEventListener('scroll', () => { if(window.scrollY > 30) navbarDiv?.classList.add('shadow-2xl', 'bg-opacity-80'); else navbarDiv?.classList.remove('shadow-2xl', 'bg-opacity-80'); });
    // floating animation trigger
    document.querySelectorAll('.card-3d').forEach(card => { card.addEventListener('mousemove', (e) => { const rect = card.getBoundingClientRect(); const x = e.clientX - rect.left; const y = e.clientY - rect.top; const centerX = rect.width/2; const centerY = rect.height/2; const rotateX = (y - centerY) / 20; const rotateY = (centerX - x) / 20; card.style.transform = `perspective(1000px) translateY(-8px) rotateX(${rotateX}deg) rotateY(${rotateY}deg)`; }); card.addEventListener('mouseleave', () => { card.style.transform = 'perspective(1000px) translateY(0px) rotateX(0deg) rotateY(0deg)'; }); });
</script>
</body>
</html>
```
