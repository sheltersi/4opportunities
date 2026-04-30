<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>4Opportunities – Smart job matching</title>
    <!-- Tailwind CSS + basic layer for custom effects -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Font Awesome 6 (free) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <!-- Alpine.js for mobile menu toggling -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    {{-- <style>
        /* Custom effects matching original React design */
        .glass {
            background: rgba(255, 255, 255, 0.7);
            backdrop-filter: blur(12px);
            border: 1px solid rgba(255, 255, 255, 0.3);
        }
        .glass-strong {
            background: rgba(255, 255, 255, 0.9);
            backdrop-filter: blur(16px);
            border: 1px solid rgba(255, 255, 255, 0.5);
        }
        .bg-gradient-soft {
            background: linear-gradient(135deg, #f9fafb 0%, #f3f4f6 100%);
        }
        .text-gradient, .text-gradient-primary {
            background: linear-gradient(135deg, #3b82f6, #8b5cf6);
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
        }
        .bg-gradient-primary {
            background: linear-gradient(135deg, #3b82f6, #8b5cf6);
        }
        .shadow-card {
            box-shadow: 0 20px 35px -10px rgba(0, 0, 0, 0.08);
        }
        .shadow-glow {
            box-shadow: 0 0 0 1px rgba(59,130,246,0.1), 0 25px 40px -12px rgba(0,0,0,0.2);
        }
        .card-hover {
            transition: all 0.3s ease;
        }
        .card-hover:hover {
            transform: translateY(-4px);
            box-shadow: 0 30px 45px -15px rgba(0, 0, 0, 0.15);
        }
        .gradient-border {
            background: linear-gradient(135deg, #3b82f6, #8b5cf6, #ec489a);
            border-radius: 2rem;
        }
        .animate-fade-in {
            animation: fadeIn 0.3s ease-out;
        }
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(-8px); }
            to { opacity: 1; transform: translateY(0); }
        }
        .float-slow { animation: float 6s ease-in-out infinite; }
        .float-med { animation: float 4s ease-in-out infinite; }
        .float-fast { animation: float 3s ease-in-out infinite; }
        @keyframes float {
            0% { transform: translateY(0px); }
            50% { transform: translateY(-8px); }
            100% { transform: translateY(0px); }
        }
        .reveal {
            opacity: 0;
            transform: translateY(20px);
            transition: opacity 0.7s ease, transform 0.7s ease;
        }
        .reveal.revealed {
            opacity: 1;
            transform: translateY(0);
        }
        .btn-primary {
            @apply inline-flex items-center gap-2 rounded-full bg-gradient-primary px-6 py-3 text-sm font-semibold text-white shadow-md transition-all hover:shadow-lg hover:scale-[1.02] focus:outline-none;
        }
        .btn-ghost {
            @apply inline-flex items-center gap-2 rounded-full bg-white/80 px-6 py-3 text-sm font-semibold text-gray-700 shadow-sm transition-all hover:bg-white hover:shadow-md;
        }
        /* mesh background */
        .mesh-bg {
            position: fixed;
            inset: 0;
            z-index: -1;
            background: radial-gradient(circle at 10% 30%, rgba(59,130,246,0.05) 0%, transparent 40%),
                        radial-gradient(circle at 90% 70%, rgba(139,92,246,0.05) 0%, transparent 40%);
        }
        .grid-bg {
            background-image: linear-gradient(to right, #e5e7eb 1px, transparent 1px),
                              linear-gradient(to bottom, #e5e7eb 1px, transparent 1px);
            background-size: 40px 40px;
            opacity: 0.3;
        }
        .orb {
            position: absolute;
            border-radius: 50%;
            filter: blur(60px);
            opacity: 0.4;
        }
        .orb-1 { width: 300px; height: 300px; background: #3b82f6; top: -100px; left: -100px; }
        .orb-2 { width: 400px; height: 400px; background: #8b5cf6; bottom: -150px; right: -100px; }
        .orb-3 { width: 250px; height: 250px; background: #ec489a; top: 40%; left: 60%; }
    </style> --}}
    <style>
  /* ---------- Your custom design system (converted from the provided CSS) ---------- */
  :root {
    --background: 210 40% 99%;
    --foreground: 222 47% 11%;
    --card: 0 0% 100%;
    --card-foreground: 222 47% 11%;
    --primary: 222 89% 55%;
    --primary-foreground: 210 40% 98%;
    --secondary: 199 95% 92%;
    --secondary-foreground: 222 60% 20%;
    --muted: 210 40% 96%;
    --muted-foreground: 215 16% 47%;
    --accent: 190 95% 50%;
    --accent-foreground: 222 47% 11%;
    --destructive: 0 84% 60%;
    --border: 214 32% 91%;
    --input: 214 32% 91%;
    --ring: 222 89% 55%;
    --radius: 1rem;
    --navy: 224 71% 14%;
    --royal: 222 89% 55%;
    --sky: 204 94% 64%;
    --cyan: 190 95% 50%;
    --ink: 222 47% 11%;

    --gradient-primary: linear-gradient(135deg, hsl(222 89% 55%), hsl(190 95% 55%));
    --gradient-hero: linear-gradient(135deg, hsl(222 89% 55%) 0%, hsl(204 94% 64%) 50%, hsl(190 95% 55%) 100%);
    --gradient-soft: linear-gradient(180deg, hsl(210 60% 99%) 0%, hsl(204 94% 96%) 100%);
    --gradient-text: linear-gradient(135deg, hsl(224 71% 14%), hsl(222 89% 55%) 60%, hsl(190 95% 50%));
    --gradient-border: linear-gradient(135deg, hsl(222 89% 55%), hsl(190 95% 55%), hsl(204 94% 64%));

    --shadow-sm: 0 1px 2px hsl(222 50% 20% / 0.06);
    --shadow-md: 0 8px 24px -8px hsl(222 89% 55% / 0.18);
    --shadow-glow: 0 20px 60px -20px hsl(222 89% 55% / 0.45);
    --shadow-card: 0 10px 40px -12px hsl(222 60% 30% / 0.18);
  }

  * {
    border-color: hsl(var(--border));
  }
  html {
    scroll-behavior: smooth;
  }
  body {
    background: hsl(var(--background));
    color: hsl(var(--foreground));
    font-family: 'Plus Jakarta Sans', 'Inter', system-ui, sans-serif;
    font-feature-settings: "ss01", "cv11";
    -webkit-font-smoothing: antialiased;
  }
  ::selection {
    background: hsl(var(--primary) / 0.2);
  }

  /* Glass effects */
  .glass {
    background: hsla(0, 0%, 100%, 0.65);
    backdrop-filter: saturate(180%) blur(18px);
    border: 1px solid hsla(222, 89%, 55%, 0.12);
  }
  .glass-strong {
    background: hsla(0, 0%, 100%, 0.8);
    backdrop-filter: saturate(180%) blur(22px);
    border: 1px solid hsla(222, 89%, 55%, 0.14);
  }

  /* Gradients */
  .text-gradient {
    background: var(--gradient-text);
    -webkit-background-clip: text;
    background-clip: text;
    color: transparent;
  }
  .bg-gradient-primary {
    background: var(--gradient-primary);
  }
  .bg-gradient-soft {
    background: var(--gradient-soft);
  }

  /* Gradient border pseudo-element */
  .gradient-border {
    position: relative;
    background: white;
    border-radius: calc(var(--radius) + 0.5rem);
  }
  .gradient-border::before {
    content: "";
    position: absolute;
    inset: 0;
    padding: 2px;
    border-radius: inherit;
    background: var(--gradient-border);
    -webkit-mask: linear-gradient(#000 0 0) content-box, linear-gradient(#000 0 0);
    -webkit-mask-composite: xor;
    mask-composite: exclude;
    pointer-events: none;
  }

  /* Buttons */
  .btn-primary {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    gap: 0.5rem;
    padding: 0.75rem 1.5rem;
    border-radius: 9999px;
    font-weight: 600;
    color: white;
    transition: all 0.3s;
    background: var(--gradient-primary);
    box-shadow: var(--shadow-md);
  }
  .btn-primary:hover {
    transform: translateY(-2px);
    box-shadow: var(--shadow-glow);
  }
  .btn-ghost {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    gap: 0.5rem;
    padding: 0.75rem 1.5rem;
    border-radius: 9999px;
    font-weight: 600;
    transition: all 0.3s;
    color: hsl(var(--ink));
    background: hsla(0, 0%, 100%, 0.7);
    border: 1px solid hsl(var(--border));
    backdrop-filter: blur(8px);
  }
  .btn-ghost:hover {
    border-color: hsl(var(--primary) / 0.4);
    color: hsl(var(--primary));
    transform: translateY(-2px);
  }

  /* Card hover */
  .card-hover {
    transition: transform 0.4s cubic-bezier(.2,.8,.2,1), box-shadow 0.4s, border-color 0.4s;
    transform-style: preserve-3d;
  }
  .card-hover:hover {
    transform: translateY(-6px) rotateX(2deg) rotateY(-2deg) scale(1.02);
    box-shadow: var(--shadow-glow);
    border-color: hsl(var(--primary) / 0.35);
  }

  /* Scroll reveal */
  .reveal {
    opacity: 0;
    transform: translateY(24px);
    transition: opacity 0.8s ease-out, transform 0.8s cubic-bezier(.2,.8,.2,1);
  }
  .reveal.revealed {
    opacity: 1;
    transform: translateY(0);
  }

  /* Mesh background & orbs */
  .mesh-bg {
    position: absolute;
    inset: 0;
    overflow: hidden;
    pointer-events: none;
    z-index: 0;
  }
  .orb {
    position: absolute;
    border-radius: 9999px;
    filter: blur(70px);
    opacity: 0.55;
    animation: float 14s ease-in-out infinite;
  }
  .orb-1 {
    width: 480px;
    height: 480px;
    background: hsl(222 89% 65%);
    top: -120px;
    left: -120px;
  }
  .orb-2 {
    width: 420px;
    height: 420px;
    background: hsl(190 95% 60%);
    top: 20%;
    right: -120px;
    animation-delay: -4s;
  }
  .orb-3 {
    width: 380px;
    height: 380px;
    background: hsl(204 94% 70%);
    bottom: -120px;
    left: 30%;
    animation-delay: -8s;
  }
  .grid-bg {
    background-image: linear-gradient(hsl(222 89% 55% / 0.06) 1px, transparent 1px),
                      linear-gradient(90deg, hsl(222 89% 55% / 0.06) 1px, transparent 1px);
    background-size: 44px 44px;
    mask-image: radial-gradient(ellipse at center, black 50%, transparent 85%);
  }

  /* Floating animations */
  .float-slow { animation: float 8s ease-in-out infinite; }
  .float-med { animation: float 6s ease-in-out infinite; animation-delay: -2s; }
  .float-fast { animation: float 5s ease-in-out infinite; animation-delay: -3s; }
  @keyframes float {
    0%, 100% { transform: translateY(0) translateX(0); }
    50% { transform: translateY(-22px) translateX(10px); }
  }
  @keyframes spin-slow {
    to { transform: rotate(360deg); }
  }
  @keyframes pulse-ring {
    0% { box-shadow: 0 0 0 0 hsl(var(--primary) / 0.45); }
    100% { box-shadow: 0 0 0 18px hsl(var(--primary) / 0); }
  }
  .animate-pulse-ring { animation: pulse-ring 2s ease-out infinite; }
  .animate-spin-slow { animation: spin-slow 18s linear infinite; }

  /* Utility shadows */
  .shadow-card { box-shadow: var(--shadow-card); }
  .shadow-glow { box-shadow: var(--shadow-glow); }

  /* Additional */
  [x-cloak] { display: none !important; }
  .group:hover .group-hover\:opacity-100 { opacity: 1; }
  .group-hover\:gap-2:hover { gap: 0.5rem; }
  .hover\:gap-2:hover { gap: 0.5rem; }
  .transition-all { transition-property: all; }
  .duration-500 { transition-duration: 500ms; }
</style>
</head>
<body class="bg-white antialiased font-sans overflow-x-hidden">

<div class="relative min-h-screen overflow-x-hidden bg-background">
    <!-- Animated Background -->
    <div class="mesh-bg fixed inset-0 -z-10" aria-hidden="true">
        <div class="absolute inset-0 grid-bg"></div>
        <div class="orb orb-1"></div>
        <div class="orb orb-2"></div>
        <div class="orb orb-3"></div>
    </div>

    <!-- Navbar (with Alpine.js for mobile menu) -->
    <header x-data="{ scrolled: false, open: false }" x-init="window.addEventListener('scroll', () => { scrolled = window.scrollY > 24 })" :class="scrolled ? 'py-2' : 'py-4'" class="fixed top-0 inset-x-0 z-50 transition-all duration-500">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <nav :class="scrolled ? 'glass-strong shadow-card' : 'glass'" class="flex items-center justify-between rounded-full px-4 md:px-6 py-3 transition-all duration-500">
                <a href="#" class="flex items-center gap-2 group">
                    <span class="relative inline-flex h-9 w-9 items-center justify-center rounded-xl bg-gradient-primary text-white shadow-md">
                        <i class="fas fa-briefcase h-5 w-5"></i>
                    </span>
                    <span class="font-extrabold text-lg tracking-tight">4<span class="text-gradient">Opportunities</span></span>
                </a>

                <!-- Desktop menu -->
                <div class="hidden md:flex items-center gap-1">
                    <a href="#features" class="px-4 py-2 rounded-full text-sm font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-100/60 transition-colors">Features</a>
                    <a href="#search" class="px-4 py-2 rounded-full text-sm font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-100/60 transition-colors">Search</a>
                    <a href="#jobs" class="px-4 py-2 rounded-full text-sm font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-100/60 transition-colors">Jobs</a>
                    <a href="#how" class="px-4 py-2 rounded-full text-sm font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-100/60 transition-colors">How it works</a>
                    <a href="#stats" class="px-4 py-2 rounded-full text-sm font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-100/60 transition-colors">Impact</a>
                </div>

                <!-- Desktop auth buttons -->
                <div class="hidden md:flex items-center gap-2">
                    @auth
                        <a href="/dashboard" class="hidden lg:inline-flex btn-ghost !py-2 !px-5 text-sm"><i class="fas fa-tachometer-alt mr-1"></i>Dashboard</a>
                    @else
                        <a href="/login" class="btn-ghost !py-2 !px-5 text-sm">Sign in</a>
                        <a href="/register" class="btn-primary !py-2 !px-5 text-sm">Get started</a>
                    @endauth
                </div>

                <!-- Mobile menu button -->
                <button @click="open = !open" aria-label="Toggle menu" class="md:hidden inline-flex h-10 w-10 items-center justify-center rounded-full glass">
                    <i x-show="!open" class="fas fa-bars h-5 w-5"></i>
                    <i x-show="open" class="fas fa-times h-5 w-5" x-cloak></i>
                </button>
            </nav>

            <!-- Mobile menu panel -->
            <div x-show="open" x-cloak @click.away="open = false" class="md:hidden mt-2 glass-strong rounded-3xl p-4 shadow-card animate-fade-in">
                <div class="flex flex-col">
                    <a href="#features" @click="open = false" class="px-4 py-3 rounded-xl text-sm font-medium hover:bg-gray-100/60">Features</a>
                    <a href="#search" @click="open = false" class="px-4 py-3 rounded-xl text-sm font-medium hover:bg-gray-100/60">Search</a>
                    <a href="#jobs" @click="open = false" class="px-4 py-3 rounded-xl text-sm font-medium hover:bg-gray-100/60">Jobs</a>
                    <a href="#how" @click="open = false" class="px-4 py-3 rounded-xl text-sm font-medium hover:bg-gray-100/60">How it works</a>
                    <a href="#stats" @click="open = false" class="px-4 py-3 rounded-xl text-sm font-medium hover:bg-gray-100/60">Impact</a>
                    <div class="mt-2 grid grid-cols-2 gap-2">
                        @auth
                            <a href="/dashboard" class="btn-ghost !py-2 text-sm">Dashboard</a>
                        @else
                            <a href="/login" class="btn-ghost !py-2 text-sm">Sign in</a>
                            <a href="/register" class="btn-primary !py-2 text-sm">Get started</a>
                        @endauth
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="relative pt-36 md:pt-44 pb-20 md:pb-28 overflow-hidden">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="grid lg:grid-cols-2 gap-12 lg:gap-8 items-center">
                <div class="reveal">
                    <span class="inline-flex items-center gap-2 rounded-full glass px-4 py-1.5 text-xs font-semibold text-blue-600">
                        <i class="fas fa-magic h-3.5 w-3.5 text-blue-500"></i> AI‑powered job matching
                    </span>
                    <h1 class="mt-5 font-extrabold tracking-tight text-4xl sm:text-5xl lg:text-6xl leading-[1.05]">
                        Your next <span class="text-gradient">career move</span>,
                        <br class="hidden sm:block" /> matched in minutes.
                    </h1>
                    <p class="mt-5 text-lg text-gray-600 max-w-xl">
                        4Opportunities connects ambitious talent with leading companies through
                        intelligent matching, transparent salaries, and a recruiter‑free experience.
                    </p>
                    <div class="mt-8 flex flex-wrap items-center gap-3">
                        <a href="/register" class="btn-primary">Find opportunities <i class="fas fa-arrow-right h-4 w-4"></i></a>
                        <a href="#how" class="btn-ghost">How it works</a>
                    </div>
                    <div class="mt-8 flex items-center gap-6 text-sm text-gray-500">
                        <div class="flex -space-x-2">
                            <span class="h-8 w-8 rounded-full ring-2 ring-white bg-gradient-to-br from-sky-300 to-blue-500"></span>
                            <span class="h-8 w-8 rounded-full ring-2 ring-white bg-gradient-to-br from-cyan-300 to-blue-600"></span>
                            <span class="h-8 w-8 rounded-full ring-2 ring-white bg-gradient-to-br from-blue-400 to-indigo-600"></span>
                            <span class="h-8 w-8 rounded-full ring-2 ring-white bg-gradient-to-br from-sky-400 to-cyan-500"></span>
                        </div>
                        <div class="flex items-center gap-1.5">
                            <i class="fas fa-star h-4 w-4 text-yellow-400"></i>
                            <span class="font-semibold text-gray-800">4.9</span>
                            <span>· trusted by 10,000+ professionals</span>
                        </div>
                    </div>
                </div>

                <!-- Hero visual card -->
                <div class="relative reveal">
                    <div class="relative mx-auto max-w-md lg:max-w-none">
                        <div class="absolute -inset-10 bg-gradient-primary opacity-20 blur-3xl rounded-full"></div>
                        <div class="relative glass-strong rounded-3xl p-6 shadow-glow border border-white/30">
                            <div class="flex items-center justify-between">
                                <div class="flex items-center gap-3">
                                    <div class="h-12 w-12 rounded-2xl bg-gradient-primary text-white grid place-items-center font-bold">SF</div>
                                    <div>
                                        <p class="font-semibold">Master Electrician</p>
                                        <p class="text-xs text-gray-500 flex items-center gap-1"><i class="fas fa-building h-3 w-3"></i>Elco Electric · Local</p>
                                    </div>
                                </div>
                                <span class="text-xs font-semibold rounded-full px-2.5 py-1 bg-blue-100 text-blue-600">98% match</span>
                            </div>
                            <div class="mt-5 grid grid-cols-3 gap-2">
                                <span class="text-center text-xs font-medium rounded-lg bg-gray-100 py-2">Electrical</span>
                                <span class="text-center text-xs font-medium rounded-lg bg-gray-100 py-2">Licensed</span>
                                <span class="text-center text-xs font-medium rounded-lg bg-gray-100 py-2">Commercial</span>
                            </div>
                            <div class="mt-5 flex items-center justify-between">
                                <div>
                                    <p class="text-xs text-gray-500">Salary range</p>
                                    <p class="font-bold text-lg text-gradient">$75k – $110k</p>
                                </div>
                                <a href="/register" class="btn-primary !py-2 !px-4 text-sm">Apply</a>
                            </div>
                        </div>
                        <div class="absolute -top-6 -left-6 glass rounded-2xl px-4 py-3 shadow-card float-slow">
                            <div class="flex items-center gap-2">
                                <i class="fas fa-check-circle text-blue-600 h-5 w-5"></i>
                                <div><p class="text-xs text-gray-500">Verified employer</p><p class="text-sm font-semibold">Top 1% companies</p></div>
                            </div>
                        </div>
                        <div class="absolute -bottom-6 -right-4 glass rounded-2xl px-4 py-3 shadow-card float-med">
                            <div class="flex items-center gap-2">
                                <i class="fas fa-chart-line text-purple-600 h-5 w-5"></i>
                                <div><p class="text-xs text-gray-500">Interview invites</p><p class="text-sm font-semibold">+24 this week</p></div>
                            </div>
                        </div>
                        <div class="absolute top-1/2 -right-8 hidden md:block glass rounded-full px-3 py-2 shadow-card float-fast">
                            <span class="text-xs font-semibold text-blue-600">🚀 Hiring fast</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section id="features" class="relative py-20 md:py-28">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="max-w-2xl mx-auto text-center reveal">
                <span class="inline-flex items-center gap-2 rounded-full bg-gray-100 text-blue-600 text-xs font-semibold px-3 py-1">Why 4Opportunities</span>
                <h2 class="mt-4 text-3xl md:text-4xl font-extrabold tracking-tight">Everything you need to <span class="text-gradient">land the right role</span></h2>
                <p class="mt-4 text-gray-500">A premium hiring experience designed around clarity, speed, and respect for your time.</p>
            </div>
            <div class="mt-14 grid gap-6 sm:grid-cols-2 lg:grid-cols-3" style="perspective:1200px">
                @php
                    $features = [
                        ['icon' => 'fas fa-brain', 'title' => 'Smart matching', 'desc' => 'Our AI learns your strengths and ambitions to surface roles you\'d actually love.'],
                        ['icon' => 'fas fa-shield-alt', 'title' => 'Verified employers', 'desc' => 'Every company is vetted. No ghost jobs, no recruiter spam — ever.'],
                        ['icon' => 'fas fa-rocket', 'title' => 'One‑click apply', 'desc' => 'Build your profile once and apply to hundreds of roles in seconds.'],
                        ['icon' => 'fas fa-chart-line', 'title' => 'Salary insights', 'desc' => 'Real, transparent compensation ranges based on live market data.'],
                        ['icon' => 'fas fa-users', 'title' => 'Talent network', 'desc' => 'Get warm introductions through our growing community of professionals.'],
                        ['icon' => 'fas fa-globe-americas', 'title' => 'Global & remote', 'desc' => 'Discover roles across 60+ countries with full remote and hybrid filters.'],
                    ];
                @endphp
                @foreach($features as $i => $f)
                    <div class="reveal card-hover relative rounded-3xl p-6 bg-white border border-gray-200 shadow-card" style="transition-delay: {{ $i*60 }}ms">
                        <div class="absolute inset-x-6 -top-px h-px bg-gradient-to-r from-transparent via-blue-400/40 to-transparent"></div>
                        <div class="h-12 w-12 rounded-2xl bg-gradient-primary text-white grid place-items-center shadow-md">
                            <i class="{{ $f['icon'] }} h-6 w-6"></i>
                        </div>
                        <h3 class="mt-5 text-lg font-bold">{{ $f['title'] }}</h3>
                        <p class="mt-2 text-sm text-gray-500 leading-relaxed">{{ $f['desc'] }}</p>
                        <div class="mt-5 inline-flex items-center text-sm font-semibold text-blue-600 opacity-0 group-hover:opacity-100 transition-opacity">Learn more →</div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Search Section -->
    <section id="search" class="relative py-16 md:py-20">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="reveal relative gradient-border p-1 shadow-glow">
                <div class="rounded-[calc(2rem+0.4rem)] bg-white p-6 md:p-8">
                    <div class="flex flex-col md:flex-row md:items-end gap-4 md:gap-3">
                        <div class="flex-1">
                            <label class="text-xs font-semibold text-gray-500">What</label>
                            <div class="mt-1 flex items-center gap-2 rounded-2xl bg-gray-100/60 px-4 py-3">
                                <i class="fas fa-briefcase text-blue-600 h-5 w-5"></i>
                                <input type="text" placeholder="Job title, keywords or company" class="bg-transparent outline-none w-full text-sm placeholder:text-gray-400">
                            </div>
                        </div>
                        <div class="flex-1">
                            <label class="text-xs font-semibold text-gray-500">Where</label>
                            <div class="mt-1 flex items-center gap-2 rounded-2xl bg-gray-100/60 px-4 py-3">
                                <i class="fas fa-map-marker-alt text-purple-600 h-5 w-5"></i>
                                <input type="text" placeholder="City, country or 'Remote'" class="bg-transparent outline-none w-full text-sm placeholder:text-gray-400">
                            </div>
                        </div>
                        <button class="btn-primary md:!px-7 md:!py-[14px]"><i class="fas fa-search h-4 w-4"></i> Search jobs</button>
                    </div>
                    <div class="mt-5 flex flex-wrap items-center gap-2">
                        <span class="text-xs text-gray-500 mr-1">Popular:</span>
                        @foreach(['Electrician','Plumber','HVAC Tech','Carpenter','Welder','Local'] as $p)
                            <button class="text-xs font-medium rounded-full px-3 py-1.5 bg-gray-100/70 hover:bg-blue-600 hover:text-white transition-colors">{{ $p }}</button>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Featured Jobs Section -->
    <section id="jobs" class="relative py-20 md:py-28 bg-gradient-soft">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="flex items-end justify-between flex-wrap gap-4 reveal">
                <div>
                    <span class="inline-flex items-center gap-2 rounded-full bg-white text-blue-600 text-xs font-semibold px-3 py-1 shadow-sm">Featured opportunities</span>
                    <h2 class="mt-4 text-3xl md:text-4xl font-extrabold tracking-tight">Hand‑picked roles, <span class="text-gradient">updated daily</span></h2>
                </div>
                <a href="/jobs" class="btn-ghost !py-2 !px-5 text-sm">Browse all jobs <i class="fas fa-arrow-up-right-from-square h-4 w-4"></i></a>
            </div>
            <div class="mt-12 grid gap-5 md:grid-cols-2">
                @php
                    $jobs = [
                        ['logo'=>'EE','company'=>'Elco Electric','role'=>'Master Electrician','loc'=>'Chicago, IL','type'=>'Full‑time','salary'=>'$75k–$110k','tags'=>['Electrical','Licensed','Commercial'],'match'=>98,'color'=>'from-blue-500 to-cyan-500'],
                        ['logo'=>'FP','company'=>'FlowRight Plumbing','role'=>'Licensed Plumber','loc'=>'Austin, TX','type'=>'Full‑time','salary'=>'$65k–$95k','tags'=>['Pipefitting','Residential','Licensed'],'match'=>94,'color'=>'from-indigo-500 to-blue-500'],
                        ['logo'=>'CH','company'=>'ClimatePro HVAC','role'=>'HVAC Technician','loc'=>'Phoenix, AZ','type'=>'Contract','salary'=>'$60k–$85k','tags'=>['EPA Certified','Ductwork','Commercial'],'match'=>91,'color'=>'from-sky-500 to-cyan-400'],
                        ['logo'=>'BW','company'=>'BuildWell Carpentry','role'=>'Lead Carpenter','loc'=>'Portland, OR','type'=>'Full‑time','salary'=>'$55k–$80k','tags'=>['Framing','Finish Work','Blueprint Reading'],'match'=>89,'color'=>'from-cyan-500 to-blue-600'],
                    ];
                @endphp
                @foreach($jobs as $i => $j)
                    <div class="reveal group relative rounded-3xl bg-white border border-gray-200 p-6 shadow-card card-hover" style="transition-delay: {{ $i*80 }}ms">
                        <div class="flex items-start justify-between gap-4">
                            <div class="flex items-start gap-4">
                                <div class="h-14 w-14 rounded-2xl bg-gradient-to-br {{ $j['color'] }} text-white grid place-items-center font-bold shadow-md">{{ $j['logo'] }}</div>
                                <div>
                                    <p class="text-xs font-semibold text-gray-500">{{ $j['company'] }}</p>
                                    <h3 class="text-lg font-bold leading-tight">{{ $j['role'] }}</h3>
                                    <div class="mt-1.5 flex flex-wrap items-center gap-3 text-xs text-gray-500">
                                        <span class="inline-flex items-center gap-1"><i class="fas fa-map-marker-alt h-3.5 w-3.5"></i>{{ $j['loc'] }}</span>
                                        <span class="inline-flex items-center gap-1"><i class="far fa-clock h-3.5 w-3.5"></i>{{ $j['type'] }}</span>
                                    </div>
                                </div>
                            </div>
                            <span class="text-xs font-bold rounded-full px-2.5 py-1 bg-blue-100 text-blue-600 whitespace-nowrap">{{ $j['match'] }}% match</span>
                        </div>
                        <div class="mt-5 flex flex-wrap gap-2">
                            @foreach($j['tags'] as $tag)
                                <span class="text-xs font-medium rounded-full px-3 py-1 bg-gray-100">{{ $tag }}</span>
                            @endforeach
                        </div>
                        <div class="mt-5 flex items-center justify-between">
                            <p class="font-bold text-gradient">{{ $j['salary'] }}</p>
                            <a href="/jobs" class="text-sm font-semibold text-blue-600 inline-flex items-center gap-1 group-hover:gap-2 transition-all">View role <i class="fas fa-arrow-right h-4 w-4"></i></a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- How It Works -->
    <section id="how" class="relative py-20 md:py-28">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="max-w-2xl mx-auto text-center reveal">
                <span class="inline-flex items-center gap-2 rounded-full bg-gray-100 text-blue-600 text-xs font-semibold px-3 py-1">How it works</span>
                <h2 class="mt-4 text-3xl md:text-4xl font-extrabold tracking-tight">From <span class="text-gradient">first click</span> to first day</h2>
                <p class="mt-4 text-gray-500">Three simple steps. No friction. No fluff.</p>
            </div>
            <div class="relative mt-16">
                <div class="hidden md:block absolute top-10 left-[10%] right-[10%] h-px bg-gradient-to-r from-transparent via-blue-400/40 to-transparent"></div>
                <div class="grid md:grid-cols-3 gap-8 md:gap-6">
                    @php
                        $steps = [
                            ['icon'=>'fas fa-user-plus','title'=>'Create your profile','desc'=>'Tell us about your skills, ambitions, and the kind of company you want to join.'],
                            ['icon'=>'fas fa-magic','title'=>'Get matched intelligently','desc'=>'Our AI surfaces roles that fit your strengths — not just your keywords.'],
                            ['icon'=>'fas fa-handshake','title'=>'Connect & get hired','desc'=>'Apply with one click and chat directly with hiring teams. No middlemen.'],
                        ];
                    @endphp
                    @foreach($steps as $i => $s)
                        <div class="reveal relative text-center" style="transition-delay: {{ $i*120 }}ms">
                            <div class="relative mx-auto h-20 w-20">
                                <div class="absolute inset-0 rounded-full bg-gradient-primary opacity-20 blur-xl"></div>
                                <div class="relative h-20 w-20 rounded-full bg-white border border-gray-200 shadow-glow grid place-items-center">
                                    <i class="{{ $s['icon'] }} h-8 w-8 text-blue-600"></i>
                                    <span class="absolute -top-2 -right-2 h-8 w-8 rounded-full bg-gradient-primary text-white text-sm font-bold grid place-items-center shadow-md">{{ $i+1 }}</span>
                                </div>
                            </div>
                            <h3 class="mt-6 text-xl font-bold">{{ $s['title'] }}</h3>
                            <p class="mt-2 text-sm text-gray-500 max-w-xs mx-auto">{{ $s['desc'] }}</p>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Section (with counter on scroll) -->
    <section id="stats" class="relative py-20 md:py-24">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div x-data="statsCounter()" x-init="startObserving" class="reveal glass-strong rounded-3xl p-8 md:p-12 shadow-card border border-white/30">
                <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
                    <div class="text-center">
                        <p class="text-4xl md:text-5xl font-extrabold text-gradient"><span x-text="formatNumber(counters.jobSeekers)">0</span>+</p>
                        <p class="mt-2 text-sm text-gray-500 font-medium">Job seekers</p>
                    </div>
                    <div class="text-center">
                        <p class="text-4xl md:text-5xl font-extrabold text-gradient"><span x-text="counters.companies">0</span>+</p>
                        <p class="mt-2 text-sm text-gray-500 font-medium">Hiring companies</p>
                    </div>
                    <div class="text-center">
                        <p class="text-4xl md:text-5xl font-extrabold text-gradient"><span x-text="counters.matchRate">0</span>%</p>
                        <p class="mt-2 text-sm text-gray-500 font-medium">Match success rate</p>
                    </div>
                    <div class="text-center">
                        <p class="text-4xl md:text-5xl font-extrabold text-gradient"><span x-text="counters.countries">0</span>+</p>
                        <p class="mt-2 text-sm text-gray-500 font-medium">Countries covered</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials -->
    <section class="relative py-20 md:py-28 bg-gradient-soft">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="max-w-2xl mx-auto text-center reveal">
                <span class="inline-flex items-center gap-2 rounded-full bg-white text-blue-600 text-xs font-semibold px-3 py-1 shadow-sm">Loved by professionals</span>
                <h2 class="mt-4 text-3xl md:text-4xl font-extrabold tracking-tight">Trusted by <span class="text-gradient">teams that ship</span></h2>
            </div>
            <div class="mt-12 grid gap-6 md:grid-cols-3">
                @php
                    $testimonials = [
                        ['name'=>'Amelia Carter','role'=>'Master Electrician at Elco Electric','quote'=>'I had three offers within two weeks. The matches were genuinely aligned with my goals — not just my keywords.','avatar'=>'from-sky-300 to-blue-500'],
                        ['name'=>'Daniel Okafor','role'=>'Plumbing Lead at FlowRight','quote'=>'Finally a job platform that respects your time. No recruiter spam, just clear, well‑paid roles.','avatar'=>'from-cyan-300 to-blue-600'],
                        ['name'=>'Sophie Laurent','role'=>'HVAC Manager at ClimatePro','quote'=>'We hired four techs in a single quarter. The candidate quality is consistently exceptional.','avatar'=>'from-indigo-400 to-sky-500'],
                    ];
                @endphp
                @foreach($testimonials as $i => $t)
                    <figure class="reveal relative rounded-3xl bg-white p-6 border border-gray-200 shadow-card card-hover" style="transition-delay: {{ $i*100 }}ms">
                        <i class="fas fa-quote-right absolute top-4 right-4 h-8 w-8 text-blue-200"></i>
                        <div class="flex items-center gap-1">
                            @for($k=0;$k<5;$k++) <i class="fas fa-star h-4 w-4 text-yellow-400"></i> @endfor
                        </div>
                        <blockquote class="mt-4 text-sm leading-relaxed text-gray-700">“{{ $t['quote'] }}”</blockquote>
                        <figcaption class="mt-5 flex items-center gap-3">
                            <span class="h-10 w-10 rounded-full bg-gradient-to-br {{ $t['avatar'] }}"></span>
                            <div><p class="text-sm font-semibold">{{ $t['name'] }}</p><p class="text-xs text-gray-500">{{ $t['role'] }}</p></div>
                        </figcaption>
                    </figure>
                @endforeach
            </div>
            <div class="mt-14 reveal">
                <p class="text-center text-xs uppercase tracking-widest text-gray-500 font-semibold">Talent already hired at</p>
                <div class="mt-6 flex flex-wrap items-center justify-center gap-x-10 gap-y-4 opacity-70">
                    @foreach(['Elco Electric','FlowRight','ClimatePro','BuildWell','Apex Welding','Summit Craft'] as $logo)
                        <span class="text-lg font-extrabold tracking-tight text-gray-500">{{ $logo }}</span>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="relative py-20 md:py-28">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="reveal relative gradient-border p-1 shadow-glow">
                <div class="rounded-[calc(2rem+0.4rem)] bg-white p-10 md:p-16 text-center overflow-hidden relative">
                    <div class="absolute -top-24 -left-20 w-72 h-72 rounded-full bg-gradient-primary opacity-20 blur-3xl"></div>
                    <div class="absolute -bottom-24 -right-20 w-72 h-72 rounded-full bg-purple-500 opacity-20 blur-3xl"></div>
                    <h2 class="relative text-3xl md:text-5xl font-extrabold tracking-tight">Ready to find your <span class="text-gradient">next opportunity?</span></h2>
                    <p class="relative mt-4 text-gray-500 max-w-xl mx-auto">Join thousands of professionals who found roles they love through 4Opportunities. It's free to get started.</p>
                    <div class="relative mt-8 flex flex-wrap items-center justify-center gap-3">
                        <a href="/register" class="btn-primary">Create free account <i class="fas fa-arrow-right h-4 w-4"></i></a>
                        <a href="/employers" class="btn-ghost">For employers</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="relative pt-16 pb-10">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="rounded-3xl glass-strong p-8 md:p-12 shadow-card">
                <div class="grid gap-10 lg:grid-cols-5">
                    <div class="lg:col-span-2">
                        <a href="#" class="flex items-center gap-2">
                            <span class="inline-flex h-9 w-9 items-center justify-center rounded-xl bg-gradient-primary text-white"><i class="fas fa-briefcase h-5 w-5"></i></span>
                            <span class="font-extrabold text-lg">4<span class="text-gradient">Opportunities</span></span>
                        </a>
                        <p class="mt-4 text-sm text-gray-500 max-w-sm">The career platform built around clarity, speed, and respect for your time.</p>
                        <div class="mt-5 flex items-center gap-2">
                            <a href="#" class="h-9 w-9 grid place-items-center rounded-full bg-white border border-gray-200 hover:text-blue-600 hover:border-blue-400 transition-colors"><i class="fab fa-twitter"></i></a>
                            <a href="#" class="h-9 w-9 grid place-items-center rounded-full bg-white border border-gray-200 hover:text-blue-600 hover:border-blue-400 transition-colors"><i class="fab fa-linkedin-in"></i></a>
                            <a href="#" class="h-9 w-9 grid place-items-center rounded-full bg-white border border-gray-200 hover:text-blue-600 hover:border-blue-400 transition-colors"><i class="fab fa-github"></i></a>
                        </div>
                    </div>
                    @php
                        $footerCols = [
                            'Product' => ['Features','How it works','Pricing','For employers'],
                            'Company' => ['About','Careers','Press','Contact'],
                            'Resources'=>['Blog','Help center','Salary guide','Community'],
                            'Legal'=>['Privacy','Terms','Cookies','Security'],
                        ];
                    @endphp
                    @foreach($footerCols as $title => $links)
                        <div>
                            <p class="text-sm font-bold">{{ $title }}</p>
                            <ul class="mt-4 space-y-2.5">
                                @foreach($links as $link)
                                    <li><a href="#" class="text-sm text-gray-500 hover:text-blue-600 transition-colors">{{ $link }}</a></li>
                                @endforeach
                            </ul>
                        </div>
                    @endforeach
                </div>
                <div class="mt-10 pt-6 border-t border-gray-200 flex flex-col md:flex-row gap-3 items-center justify-between text-xs text-gray-500">
                    <p>© {{ date('Y') }} 4Opportunities. All rights reserved.</p>
                    <p>Made with <span class="text-blue-600">♦</span> for ambitious people.</p>
                </div>
            </div>
        </div>
    </footer>
</div>

<!-- Scroll reveal + Stats counter JS (no React needed) -->
<script>
    // Scroll reveal observer
    const revealElements = document.querySelectorAll('.reveal');
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('revealed');
                observer.unobserve(entry.target);
            }
        });
    }, { threshold: 0.15, rootMargin: '0px 0px -20px 0px' });
    revealElements.forEach(el => observer.observe(el));

    // Alpine component for statistics counter
    document.addEventListener('alpine:init', () => {
        Alpine.data('statsCounter', () => ({
            counters: { jobSeekers: 0, companies: 0, matchRate: 0, countries: 0 },
            animated: false,
            formatNumber(value) {
                if (value >= 1000) return (value / 1000).toFixed(0) + 'k';
                return value;
            },
            startObserving() {
                const el = this.$el;
                const io = new IntersectionObserver((entries) => {
                    if (entries[0].isIntersecting && !this.animated) {
                        this.animated = true;
                        this.animateCounters();
                        io.disconnect();
                    }
                }, { threshold: 0.3 });
                io.observe(el);
            },
            animateCounters() {
                const targets = { jobSeekers: 10000, companies: 500, matchRate: 98, countries: 60 };
                const duration = 1800;
                const startTime = performance.now();
                const step = (now) => {
                    const elapsed = now - startTime;
                    const t = Math.min(1, elapsed / duration);
                    const eased = 1 - Math.pow(1 - t, 3);
                    this.counters.jobSeekers = Math.floor(targets.jobSeekers * eased);
                    this.counters.companies = Math.floor(targets.companies * eased);
                    this.counters.matchRate = Math.floor(targets.matchRate * eased);
                    this.counters.countries = Math.floor(targets.countries * eased);
                    if (t < 1) requestAnimationFrame(step);
                };
                requestAnimationFrame(step);
            }
        }));
    });
</script>
<style>
    /* ensure Alpine x-cloak works */
    [x-cloak] { display: none !important; }
    .group:hover .group-hover\:opacity-100 { opacity: 1; }
    .group-hover\:gap-2:hover { gap: 0.5rem; }
    .hover\:gap-2:hover { gap: 0.5rem; }
    .transition-all { transition-property: all; }
    .duration-500 { transition-duration: 500ms; }
    .btn-primary, .btn-ghost { display: inline-flex; align-items: center; gap: 0.5rem; }
</style>
</body>
</html>
