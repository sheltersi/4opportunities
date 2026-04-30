<x-guest-layout>
    <div class="relative min-h-screen overflow-x-hidden bg-background">
        <!-- Animated Background (matching welcome page) -->
        <div class="mesh-bg fixed inset-0 -z-10" aria-hidden="true">
            <div class="absolute inset-0 grid-bg"></div>
            <div class="orb orb-1"></div>
            <div class="orb orb-2"></div>
            <div class="orb orb-3"></div>
        </div>

        <div class="relative z-10 flex items-center justify-center min-h-screen py-12 px-4">
            <div class="w-full max-w-md reveal">
                <!-- Logo Section -->
                <div class="text-center mb-10">
                    <a href="/" class="inline-flex items-center gap-2 group">
                        <span class="inline-flex h-12 w-12 items-center justify-center rounded-xl bg-gradient-primary text-white shadow-lg transform transition-all duration-300 group-hover:scale-110">
                            <i class="fas fa-briefcase h-6 w-6"></i>
                        </span>
                        <span class="font-extrabold text-2xl tracking-tight">4<span class="text-gradient">Opportunities</span></span>
                    </a>
                    <h1 class="mt-6 text-3xl md:text-4xl font-extrabold tracking-tight">
                        Welcome <span class="text-gradient">Back</span>
                    </h1>
                    <p class="mt-3 text-gray-500">Sign in to continue to your account</p>
                </div>

                <!-- Login Card with Gradient Border -->
                <div class="gradient-border p-1 shadow-glow">
                    <div class="rounded-[calc(2rem+0.4rem)] bg-white p-8 md:p-10">
                        <x-validation-errors class="mb-6" />

                        @session('status')
                            <div class="mb-6 flex items-center gap-2 font-medium text-sm text-green-600 bg-green-50 px-4 py-3 rounded-2xl">
                                <i class="fas fa-check-circle"></i>
                                {{ $value }}
                            </div>
                        @endsession

                        <form method="POST" action="{{ route('login') }}" class="space-y-5">
                            @csrf

                            <div class="group">
                                <label for="email" class="flex items-center gap-2 text-sm font-semibold text-gray-700 mb-2">
                                    <i class="fas fa-envelope text-blue-600 w-4 h-4"></i>
                                    Email Address
                                </label>
                                <div class="relative">
                                    <input id="email" class="block w-full px-4 py-3.5 border-2 border-gray-200 rounded-2xl focus:ring-4 focus:ring-blue-500/20 focus:border-blue-500 transition-all duration-200 bg-gray-50/50 hover:bg-white" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" placeholder="you@example.com">
                                    <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                                        <i class="fas fa-at text-gray-400 w-5 h-5"></i>
                                    </div>
                                </div>
                            </div>

                            <div class="group">
                                <label for="password" class="flex items-center gap-2 text-sm font-semibold text-gray-700 mb-2">
                                    <i class="fas fa-lock text-purple-600 w-4 h-4"></i>
                                    Password
                                </label>
                                <div class="relative">
                                    <input id="password" class="block w-full px-4 py-3.5 border-2 border-gray-200 rounded-2xl focus:ring-4 focus:ring-blue-500/20 focus:border-blue-500 transition-all duration-200 bg-gray-50/50 hover:bg-white" type="password" name="password" required autocomplete="current-password" placeholder="Enter your password">
                                    <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                                        <i class="fas fa-key text-gray-400 w-5 h-5"></i>
                                    </div>
                                </div>
                            </div>

                            <div class="flex items-center justify-between flex-wrap gap-4">
                                <label for="remember_me" class="flex items-center gap-2 cursor-pointer group">
                                    <x-checkbox id="remember_me" name="remember" class="rounded-md border-2 border-gray-300 text-blue-600 focus:ring-blue-500/20" />
                                    <span class="text-sm text-gray-600 group-hover:text-gray-900 transition-colors">Remember me</span>
                                </label>

                                @if (Route::has('password.request'))
                                    <a href="{{ route('password.request') }}" class="text-sm font-medium text-blue-600 hover:text-blue-700 transition-colors">
                                        Forgot password?
                                    </a>
                                @endif
                            </div>

                            <button type="submit" class="w-full btn-primary py-3.5 text-base">
                                <i class="fas fa-sign-in-alt"></i>
                                Sign In
                            </button>
                        </form>
                    </div>
                </div>

                <!-- Register Link -->
                <div class="mt-8 text-center reveal" style="transition-delay: 200ms">
                    <p class="text-gray-500">
                        Don't have an account?
                        <a href="{{ route('register') }}" class="font-semibold text-blue-600 hover:text-blue-700 transition-colors">
                            Create one now
                            <i class="fas fa-arrow-right ml-1"></i>
                        </a>
                    </p>
                </div>

                <!-- Security Badge -->
                <div class="mt-6 flex items-center justify-center gap-2 text-sm text-gray-400 reveal" style="transition-delay: 300ms">
                    <i class="fas fa-shield-alt text-green-500"></i>
                    Secured with 256-bit encryption
                </div>
            </div>
        </div>

        <!-- Scroll Reveal Script -->
        <script>
            const revealElements = document.querySelectorAll('.reveal');
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('revealed');
                        observer.unobserve(entry.target);
                    }
                });
            }, { threshold: 0.15 });
            revealElements.forEach(el => observer.observe(el));
        </script>
    </div>
</x-guest-layout>
