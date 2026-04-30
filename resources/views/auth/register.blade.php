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
            <div class="w-full max-w-lg reveal">
                <!-- Logo Section -->
                <div class="text-center mb-10">
                    <a href="/" class="inline-flex items-center gap-2 group">
                        <span class="inline-flex h-12 w-12 items-center justify-center rounded-xl bg-gradient-primary text-white shadow-lg transform transition-all duration-300 group-hover:scale-110">
                            <i class="fas fa-briefcase h-6 w-6"></i>
                        </span>
                        <span class="font-extrabold text-2xl tracking-tight">4<span class="text-gradient">Opportunities</span></span>
                    </a>
                    <h1 class="mt-6 text-3xl md:text-4xl font-extrabold tracking-tight">
                        Join <span class="text-gradient">Thousands</span>
                    </h1>
                    <p class="mt-3 text-gray-500">Create your account and find your next opportunity</p>
                </div>

                <!-- Register Card with Gradient Border -->
                <div class="gradient-border p-1 shadow-glow">
                    <div class="rounded-[calc(2rem+0.4rem)] bg-white p-8 md:p-10">
                        <x-validation-errors class="mb-6" />

                        <form method="POST" action="{{ route('register') }}" class="space-y-5">
                            @csrf

                            <!-- Name Fields -->
                            <div class="grid grid-cols-2 gap-4">
                                <div class="group">
                                    <label for="first_name" class="flex items-center gap-2 text-sm font-semibold text-gray-700 mb-2">
                                        <i class="fas fa-user text-blue-600 w-4 h-4"></i>
                                        First Name
                                    </label>
                                    <input id="first_name" class="block w-full px-4 py-3.5 border-2 border-gray-200 rounded-2xl focus:ring-4 focus:ring-blue-500/20 focus:border-blue-500 transition-all duration-200 bg-gray-50/50 hover:bg-white" type="text" name="first_name" :value="old('first_name')" required autofocus autocomplete="given-name" placeholder="John">
                                </div>
                                <div class="group">
                                    <label for="last_name" class="flex items-center gap-2 text-sm font-semibold text-gray-700 mb-2">
                                        <i class="fas fa-user text-purple-600 w-4 h-4"></i>
                                        Last Name
                                    </label>
                                    <input id="last_name" class="block w-full px-4 py-3.5 border-2 border-gray-200 rounded-2xl focus:ring-4 focus:ring-blue-500/20 focus:border-blue-500 transition-all duration-200 bg-gray-50/50 hover:bg-white" type="text" name="last_name" :value="old('last_name')" required autocomplete="family-name" placeholder="Doe">
                                </div>
                            </div>

                            <div class="group">
                                <label for="email" class="flex items-center gap-2 text-sm font-semibold text-gray-700 mb-2">
                                    <i class="fas fa-envelope text-cyan-600 w-4 h-4"></i>
                                    Email Address
                                </label>
                                <div class="relative">
                                    <input id="email" class="block w-full px-4 py-3.5 border-2 border-gray-200 rounded-2xl focus:ring-4 focus:ring-blue-500/20 focus:border-blue-500 transition-all duration-200 bg-gray-50/50 hover:bg-white" type="email" name="email" :value="old('email')" required autocomplete="username" placeholder="you@example.com">
                                    <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                                        <i class="fas fa-at text-gray-400 w-5 h-5"></i>
                                    </div>
                                </div>
                            </div>

                            <div class="group">
                                <label for="password" class="flex items-center gap-2 text-sm font-semibold text-gray-700 mb-2">
                                    <i class="fas fa-lock text-indigo-600 w-4 h-4"></i>
                                    Password
                                </label>
                                <div class="relative">
                                    <input id="password" class="block w-full px-4 py-3.5 border-2 border-gray-200 rounded-2xl focus:ring-4 focus:ring-blue-500/20 focus:border-blue-500 transition-all duration-200 bg-gray-50/50 hover:bg-white" type="password" name="password" required autocomplete="new-password" placeholder="Min. 8 characters">
                                    <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                                        <i class="fas fa-key text-gray-400 w-5 h-5"></i>
                                    </div>
                                </div>
                            </div>

                            <div class="group">
                                <label for="password_confirmation" class="flex items-center gap-2 text-sm font-semibold text-gray-700 mb-2">
                                    <i class="fas fa-lock text-pink-600 w-4 h-4"></i>
                                    Confirm Password
                                </label>
                                <div class="relative">
                                    <input id="password_confirmation" class="block w-full px-4 py-3.5 border-2 border-gray-200 rounded-2xl focus:ring-4 focus:ring-blue-500/20 focus:border-blue-500 transition-all duration-200 bg-gray-50/50 hover:bg-white" type="password" name="password_confirmation" required autocomplete="new-password" placeholder="Repeat your password">
                                    <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                                        <i class="fas fa-key text-gray-400 w-5 h-5"></i>
                                    </div>
                                </div>
                            </div>

                            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                                <div class="group">
                                    <label for="terms" class="flex items-start gap-3 p-4 rounded-2xl border-2 border-gray-200 hover:border-blue-300 transition-colors cursor-pointer">
                                        <x-checkbox name="terms" id="terms" required class="mt-1 rounded-md border-2 border-gray-300 text-blue-600 focus:ring-blue-500/20" />
                                        <div class="text-sm text-gray-600">
                                            {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                                'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="font-semibold text-blue-600 hover:text-blue-700">'.__('Terms of Service').'</a>',
                                                'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="font-semibold text-blue-600 hover:text-blue-700">'.__('Privacy Policy').'</a>',
                                            ]) !!}
                                        </div>
                                    </label>
                                </div>
                            @endif

                            <button type="submit" class="w-full btn-primary py-3.5 text-base">
                                <i class="fas fa-user-plus"></i>
                                Create Account
                            </button>
                        </form>
                    </div>
                </div>

                <!-- Login Link -->
                <div class="mt-8 text-center reveal" style="transition-delay: 200ms">
                    <p class="text-gray-500">
                        Already have an account?
                        <a href="{{ route('login') }}" class="font-semibold text-blue-600 hover:text-blue-700 transition-colors">
                            Sign in here
                            <i class="fas fa-arrow-right ml-1"></i>
                        </a>
                    </p>
                </div>

                <!-- Benefits -->
                <div class="mt-10 grid grid-cols-3 gap-4 reveal" style="transition-delay: 300ms">
                    <div class="text-center">
                        <div class="w-12 h-12 mx-auto rounded-2xl bg-gradient-to-br from-blue-500 to-cyan-500 text-white grid place-items-center shadow-md">
                            <i class="fas fa-bolt w-5 h-5"></i>
                        </div>
                        <p class="mt-2 text-xs font-semibold text-gray-600">Quick Apply</p>
                    </div>
                    <div class="text-center">
                        <div class="w-12 h-12 mx-auto rounded-2xl bg-gradient-to-br from-purple-500 to-pink-500 text-white grid place-items-center shadow-md">
                            <i class="fas fa-brain w-5 h-5"></i>
                        </div>
                        <p class="mt-2 text-xs font-semibold text-gray-600">Smart Matching</p>
                    </div>
                    <div class="text-center">
                        <div class="w-12 h-12 mx-auto rounded-2xl bg-gradient-to-br from-cyan-500 to-blue-600 text-white grid place-items-center shadow-md">
                            <i class="fas fa-chart-line w-5 h-5"></i>
                        </div>
                        <p class="mt-2 text-xs font-semibold text-gray-600">Track Progress</p>
                    </div>
                </div>

                <!-- Security Badge -->
                <div class="mt-6 flex items-center justify-center gap-2 text-sm text-gray-400 reveal" style="transition-delay: 400ms">
                    <i class="fas fa-shield-alt text-green-500"></i>
                    Your data is secure and encrypted
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
