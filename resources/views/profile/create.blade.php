<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create Your Profile') }}
        </h2>
    </x-slot>

    <div class="relative min-h-screen overflow-x-hidden bg-background">
        <!-- Animated Background (matching welcome page) -->
        <div class="mesh-bg fixed inset-0 -z-10" aria-hidden="true">
            <div class="absolute inset-0 grid-bg"></div>
            <div class="orb orb-1"></div>
            <div class="orb orb-2"></div>
            <div class="orb orb-3"></div>
        </div>

        <div class="relative z-10 py-12 md:py-20">
            <div class="container mx-auto px-4 sm:px-6 lg:px-8">
                <!-- Header Section -->
                <div class="max-w-2xl mx-auto text-center mb-12 reveal">
                    <span class="inline-flex items-center gap-2 rounded-full bg-white/80 px-4 py-1.5 text-xs font-semibold text-blue-600 shadow-sm">
                        <i class="fas fa-user-edit w-3.5 h-3.5 text-blue-500"></i> Complete your profile
                    </span>
                    <h1 class="mt-4 text-3xl md:text-4xl lg:text-5xl font-extrabold tracking-tight">
                        Build Your <span class="text-gradient">Professional Profile</span>
                    </h1>
                    <p class="mt-4 text-gray-500 max-w-xl mx-auto">
                        {{ auth()->user()->first_name }}, showcase your skills and experience to stand out to top employers.
                    </p>
                </div>

                <!-- Profile Form Card -->
                <form method="POST" action="{{ route('profile.store') }}" class="max-w-4xl mx-auto reveal" style="transition-delay: 200ms">
                    @csrf

                    <!-- Gradient Border Wrapper -->
                    <div class="gradient-border p-1 shadow-glow">
                        <div class="rounded-[calc(2rem+0.4rem)] bg-white p-6 md:p-8">
                            <!-- Profile Photo Section -->
                            <div class="flex items-center gap-6 mb-8 p-6 glass-strong rounded-3xl">
                                <div class="shrink-0">
                                    <div class="w-24 h-24 rounded-full bg-gradient-primary flex items-center justify-center shadow-lg float-slow">
                                        <i class="fas fa-user text-white text-4xl"></i>
                                    </div>
                                </div>
                                <div class="flex-1">
                                    <h3 class="text-lg font-semibold text-gray-900">Profile Photo</h3>
                                    <p class="text-sm text-gray-500 mt-1">Upload a professional photo to make your profile stand out</p>
                                    <button type="button" class="mt-3 btn-ghost !py-2 !px-4 text-sm">
                                        <i class="fas fa-camera mr-2"></i> Upload Photo
                                    </button>
                                </div>
                            </div>

                            <!-- Form Fields -->
                            <div class="space-y-8">
                                <!-- Professional Headline -->
                                <div class="group">
                                    <label for="headline" class="flex items-center gap-2 text-sm font-semibold text-gray-700 mb-3">
                                        <i class="fas fa-heading text-blue-600 w-4 h-4"></i>
                                        Professional Headline
                                    </label>
                                    <div class="relative">
                                        <input type="text" name="headline" id="headline" required
                                            class="block w-full px-4 py-3.5 border-2 border-gray-200 rounded-2xl focus:ring-4 focus:ring-blue-500/20 focus:border-blue-500 transition-all duration-200 bg-gray-50/50 hover:bg-white"
                                            placeholder="e.g., Senior Software Engineer | Full Stack Developer">
                                        <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                                            <i class="fas fa-briefcase text-gray-400 w-5 h-5"></i>
                                        </div>
                                    </div>
                                    @error('headline')
                                        <p class="mt-2 text-sm text-red-600 flex items-center gap-1">
                                            <i class="fas fa-exclamation-circle"></i> {{ $message }}
                                        </p>
                                    @enderror
                                </div>

                                <!-- Location Information -->
                                <div>
                                    <label class="flex items-center gap-2 text-sm font-semibold text-gray-700 mb-4">
                                        <i class="fas fa-map-marker-alt text-purple-600 w-4 h-4"></i>
                                        Location Information
                                    </label>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                        <div class="relative">
                                            <input type="text" name="city" id="city"
                                                class="block w-full px-4 py-3.5 border-2 border-gray-200 rounded-2xl focus:ring-4 focus:ring-blue-500/20 focus:border-blue-500 transition-all duration-200 bg-gray-50/50 hover:bg-white"
                                                placeholder="City">
                                            <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                                                <i class="fas fa-city text-gray-400 w-5 h-5"></i>
                                            </div>
                                        </div>
                                        <div class="relative">
                                            <input type="text" name="state" id="state"
                                                class="block w-full px-4 py-3.5 border-2 border-gray-200 rounded-2xl focus:ring-4 focus:ring-blue-500/20 focus:border-blue-500 transition-all duration-200 bg-gray-50/50 hover:bg-white"
                                                placeholder="State/Province">
                                        </div>
                                        <div class="relative">
                                            <input type="text" name="country" id="country"
                                                class="block w-full px-4 py-3.5 border-2 border-gray-200 rounded-2xl focus:ring-4 focus:ring-blue-500/20 focus:border-blue-500 transition-all duration-200 bg-gray-50/50 hover:bg-white"
                                                placeholder="Country">
                                        </div>
                                        <div class="relative">
                                            <input type="text" name="location" id="location"
                                                class="block w-full px-4 py-3.5 border-2 border-gray-200 rounded-2xl focus:ring-4 focus:ring-blue-500/20 focus:border-blue-500 transition-all duration-200 bg-gray-50/50 hover:bg-white"
                                                placeholder="Full Address (Optional)">
                                            <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                                                <i class="fas fa-location-dot text-gray-400 w-5 h-5"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Professional Summary -->
                                <div>
                                    <label for="summary" class="flex items-center gap-2 text-sm font-semibold text-gray-700 mb-3">
                                        <i class="fas fa-align-left text-cyan-600 w-4 h-4"></i>
                                        Professional Summary
                                    </label>
                                    <textarea name="summary" id="summary" rows="6"
                                        class="block w-full px-4 py-3.5 border-2 border-gray-200 rounded-2xl focus:ring-4 focus:ring-blue-500/20 focus:border-blue-500 transition-all duration-200 bg-gray-50/50 hover:bg-white resize-none"
                                        placeholder="Write a compelling summary of your professional background, key achievements, and career goals..."></textarea>
                                    <p class="mt-2 text-sm text-gray-500 flex items-center gap-1">
                                        <i class="fas fa-lightbulb text-yellow-500"></i>
                                        Tip: Keep it concise but impactful. Highlight your unique value proposition.
                                    </p>
                                    @error('summary')
                                        <p class="mt-2 text-sm text-red-600 flex items-center gap-1">
                                            <i class="fas fa-exclamation-circle"></i> {{ $message }}
                                        </p>
                                    @enderror
                                </div>

                                <!-- Skills Selection -->
                                @if(isset($skills) && $skills->count() > 0)
                                <div>
                                    <label class="flex items-center gap-2 text-sm font-semibold text-gray-700 mb-4">
                                        <i class="fas fa-star text-yellow-500 w-4 h-4"></i>
                                        Skills & Expertise
                                    </label>
                                    <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-3">
                                        @foreach($skills as $skill)
                                            <label class="relative group cursor-pointer">
                                                <input type="checkbox" name="skills[]" value="{{ $skill->id }}"
                                                    class="peer absolute opacity-0 w-full h-full cursor-pointer">
                                                <div class="px-4 py-3 border-2 border-gray-200 rounded-2xl peer-checked:border-blue-500 peer-checked:bg-blue-50 hover:border-blue-300 transition-all duration-200">
                                                    <div class="flex items-center justify-between">
                                                        <span class="text-sm font-medium text-gray-700 peer-checked:text-blue-700">{{ $skill->name }}</span>
                                                        <i class="fas fa-check w-5 h-5 text-blue-500 opacity-0 peer-checked:opacity-100 transition-opacity duration-200"></i>
                                                    </div>
                                                </div>
                                            </label>
                                        @endforeach
                                    </div>
                                </div>
                                @endif
                            </div>

                            <!-- Submit Button -->
                            <div class="mt-10 pt-6 border-t border-gray-100">
                                <div class="flex items-center justify-between flex-wrap gap-4">
                                    <div class="flex items-center text-sm text-gray-500">
                                        <i class="fas fa-shield-alt mr-2 text-green-500"></i>
                                        Your information is secure and encrypted
                                    </div>
                                    <button type="submit"
                                        class="btn-primary text-base px-8 py-3.5">
                                        Create Profile
                                        <i class="fas fa-arrow-right w-5 h-5"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>

                <!-- Info Cards -->
                <div class="mt-16 grid md:grid-cols-3 gap-6 max-w-4xl mx-auto">
                    <div class="reveal glass-strong rounded-3xl p-6 card-hover" style="transition-delay: 300ms">
                        <div class="h-12 w-12 rounded-2xl bg-gradient-to-br from-blue-500 to-cyan-500 text-white grid place-items-center shadow-md">
                            <i class="fas fa-bolt w-6 h-6"></i>
                        </div>
                        <h3 class="mt-4 text-lg font-bold">Quick Apply</h3>
                        <p class="mt-2 text-sm text-gray-500">Build once, apply everywhere with one click.</p>
                    </div>
                    <div class="reveal glass-strong rounded-3xl p-6 card-hover" style="transition-delay: 400ms">
                        <div class="h-12 w-12 rounded-2xl bg-gradient-to-br from-purple-500 to-pink-500 text-white grid place-items-center shadow-md">
                            <i class="fas fa-brain w-6 h-6"></i>
                        </div>
                        <h3 class="mt-4 text-lg font-bold">Smart Matching</h3>
                        <p class="mt-2 text-sm text-gray-500">AI-powered job recommendations just for you.</p>
                    </div>
                    <div class="reveal glass-strong rounded-3xl p-6 card-hover" style="transition-delay: 500ms">
                        <div class="h-12 w-12 rounded-2xl bg-gradient-to-br from-cyan-500 to-blue-600 text-white grid place-items-center shadow-md">
                            <i class="fas fa-chart-line w-6 h-6"></i>
                        </div>
                        <h3 class="mt-4 text-lg font-bold">Track Progress</h3>
                        <p class="mt-2 text-sm text-gray-500">Real-time insights on your applications.</p>
                    </div>
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
            }, { threshold: 0.15, rootMargin: '0px 0px -20px 0px' });
            revealElements.forEach(el => observer.observe(el));
        </script>
    </div>
</x-app-layout>
