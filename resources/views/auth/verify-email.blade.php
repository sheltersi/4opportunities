<x-guest-layout>
    <div class="relative min-h-screen overflow-x-hidden bg-background">
        <!-- Animated Background (matching welcome page) -->
        <div class="mesh-bg fixed inset-0 -z-10" aria-hidden="true">
            <div class="absolute inset-0 grid-bg"></div>
            <div class="orb orb-1"></div>
            <div class="orb orb-2"></div>
            <div class="orb orb-3"></div>
        </div>

        <div class="relative z-10 flex items-center justify-center min-h-screen py-12">
            <div class="max-w-md w-full reveal">
                <!-- Gradient Border Wrapper -->
                <div class="gradient-border p-1 shadow-glow">
                    <div class="rounded-[calc(2rem+0.4rem)] bg-white p-8 md:p-10">
                        <!-- Icon -->
                        <div class="mx-auto w-20 h-20 bg-gradient-primary rounded-full flex items-center justify-center shadow-lg mb-6">
                            <i class="fas fa-envelope text-white text-3xl"></i>
                        </div>

                        <div class="text-center">
                            <h2 class="text-2xl md:text-3xl font-extrabold text-gray-900 mb-2">
                                Verify Your Email
                            </h2>
                            <p class="text-gray-600 mb-2">
                                We've sent a verification link to
                            </p>
                            <p class="text-blue-600 font-semibold mb-6">
                                {{ auth()->user()->email }}
                            </p>
                            <p class="text-sm text-gray-500 mb-8">
                                Please click the link in the email to verify your account. After verification, you'll be redirected to sign in and create your profile.
                            </p>
                        </div>

                        @if (session('status') == 'verification-link-sent')
                            <div class="mb-4 font-medium text-sm text-green-600 text-center flex items-center justify-center gap-2">
                                <i class="fas fa-check-circle"></i>
                                A new verification link has been sent to your email address.
                            </div>
                        @endif

                        <div class="space-y-4">
                            <form method="POST" action="{{ route('verification.send') }}">
                                @csrf
                                <button type="submit" class="w-full btn-primary py-3">
                                    <i class="fas fa-paper-plane"></i>
                                    Resend Verification Email
                                </button>
                            </form>

                            <div class="flex items-center justify-center gap-4">
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <button type="submit" class="text-sm text-gray-600 hover:text-gray-900 underline transition-colors">
                                        Log Out
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Help Text -->
                <div class="mt-8 text-center">
                    <p class="text-sm text-gray-500">
                        <i class="fas fa-shield-alt text-green-500 mr-2"></i>
                        Your information is secure and encrypted
                    </p>
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
