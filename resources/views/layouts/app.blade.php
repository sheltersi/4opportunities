<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <!-- Font Awesome 6 (free) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Styles -->
    @livewireStyles

    <style>
        /* Custom effects matching welcome page */
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
        .bg-gradient-soft {
            background: linear-gradient(180deg, hsl(210, 60%, 99%) 0%, hsl(204, 94%, 96%) 100%);
        }
        .text-gradient {
            background: linear-gradient(135deg, hsl(224, 71%, 14%), hsl(222, 89%, 55%) 60%, hsl(190, 95%, 50%));
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
        }
        .bg-gradient-primary {
            background: linear-gradient(135deg, hsl(222, 89%, 55%), hsl(190, 95%, 55%));
        }
        .gradient-border {
            position: relative;
            background: white;
            border-radius: calc(1rem + 0.5rem);
        }
        .gradient-border::before {
            content: "";
            position: absolute;
            inset: 0;
            padding: 2px;
            border-radius: inherit;
            background: linear-gradient(135deg, hsl(222, 89%, 55%), hsl(190, 95%, 55%), hsl(204, 94%, 64%));
            -webkit-mask: linear-gradient(#000 0 0) content-box, linear-gradient(#000 0 0);
            -webkit-mask-composite: xor;
            mask-composite: exclude;
            pointer-events: none;
        }
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
            background: linear-gradient(135deg, hsl(222, 89%, 55%), hsl(190, 95%, 55%));
            box-shadow: 0 8px 24px -8px hsla(222, 89%, 55%, 0.18);
        }
        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 20px 60px -20px hsla(222, 89%, 55%, 0.45);
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
            color: hsl(222, 47%, 11%);
            background: hsla(0, 0%, 100%, 0.7);
            border: 1px solid hsl(214, 32%, 91%);
            backdrop-filter: blur(8px);
        }
        .btn-ghost:hover {
            border-color: hsla(222, 89%, 55%, 0.4);
            color: hsl(222, 89%, 55%);
            transform: translateY(-2px);
        }
        .card-hover {
            transition: transform 0.4s cubic-bezier(0.2, 0.8, 0.2, 1), box-shadow 0.4s, border-color 0.4s;
            transform-style: preserve-3d;
        }
        .card-hover:hover {
            transform: translateY(-6px) rotateX(2deg) rotateY(-2deg) scale(1.02);
            box-shadow: 0 20px 60px -20px hsla(222, 89%, 55%, 0.45);
            border-color: hsla(222, 89%, 55%, 0.35);
        }
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
            background: hsl(222, 89%, 65%);
            top: -120px;
            left: -120px;
        }
        .orb-2 {
            width: 420px;
            height: 420px;
            background: hsl(190, 95%, 60%);
            top: 20%;
            right: -120px;
            animation-delay: -4s;
        }
        .orb-3 {
            width: 380px;
            height: 380px;
            background: hsl(204, 94%, 70%);
            bottom: -120px;
            left: 30%;
            animation-delay: -8s;
        }
        .grid-bg {
            background-image: linear-gradient(hsl(222, 89%, 55%, 0.06) 1px, transparent 1px),
                              linear-gradient(90deg, hsl(222, 89%, 55%, 0.06) 1px, transparent 1px);
            background-size: 44px 44px;
            mask-image: radial-gradient(ellipse at center, black 50%, transparent 85%);
        }
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
            0% { box-shadow: 0 0 0 0 hsla(222, 89%, 55%, 0.45); }
            100% { box-shadow: 0 0 0 18px hsla(222, 89%, 55%, 0); }
        }
        .animate-pulse-ring { animation: pulse-ring 2s ease-out infinite; }
        .animate-spin-slow { animation: spin-slow 18s linear infinite; }
        .shadow-card { box-shadow: 0 10px 40px -12px hsla(222, 60%, 30%, 0.18); }
        .shadow-glow { box-shadow: 0 20px 60px -20px hsla(222, 89%, 55%, 0.45); }
        .reveal {
            opacity: 0;
            transform: translateY(24px);
            transition: opacity 0.8s ease-out, transform 0.8s cubic-bezier(0.2, 0.8, 0.2, 1);
        }
        .reveal.revealed {
            opacity: 1;
            transform: translateY(0);
        }
        [x-cloak] { display: none !important; }
        .group:hover .group-hover\:opacity-100 { opacity: 1; }
        .group-hover\:gap-2:hover { gap: 0.5rem; }
        .hover\:gap-2:hover { gap: 0.5rem; }
        .transition-all { transition-property: all; }
        .duration-500 { transition-duration: 500ms; }
    </style>
</head>
<body class="bg-white antialiased font-sans overflow-x-hidden">
    <x-banner />

    <div class="relative min-h-screen overflow-x-hidden bg-background">
        @livewire('navigation-menu')

        <!-- Page Heading -->
        @if (isset($header))
            <header class="bg-white shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>
        @endif

        <!-- Page Content -->
        <main>
            {{ $slot }}
        </main>
    </div>

    @stack('modals')

    @livewireScripts

    <!-- Scroll reveal script -->
    <script>
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
    </script>
</body>
</html>
