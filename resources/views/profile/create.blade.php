<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create Your Profile') }}
        </h2>
    </x-slot>

    <div class="min-h-screen bg-gradient-to-br from-indigo-50 via-white to-purple-50 py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <!-- Progress Bar -->
            <div class="mb-8 bg-white rounded-full shadow-sm overflow-hidden">
                <div class="h-2 bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-500 animate-pulse"></div>
            </div>

            <form method="POST" action="{{ route('profile.store') }}" class="space-y-6">
                @csrf

                <!-- Header Card -->
                <div class="bg-white overflow-hidden shadow-xl rounded-2xl backdrop-blur-lg bg-white/80">
                    <div class="relative px-8 py-10 bg-gradient-to-r from-indigo-600 via-purple-600 to-pink-600">
                        <div class="absolute inset-0 bg-black opacity-10"></div>
<div class="relative z-10">
    <h1 class="text-4xl font-bold text-white mb-2">Build Your Profile</h1>
    <p class="text-indigo-100 text-lg">{{ auth()->user()->first_name }}, showcase your skills and experience to stand out</p>
</div>
                        <div class="absolute top-0 right-0 -mt-4 -mr-4 w-32 h-32 bg-white opacity-10 rounded-full"></div>
                        <div class="absolute bottom-0 left-0 -mb-8 -ml-8 w-48 h-48 bg-pink-500 opacity-10 rounded-full"></div>
                    </div>

                    <!-- Profile Photo Section -->
                    <div class="px-8 py-6 border-b border-gray-100">
                        <div class="flex items-center space-x-6">
                            <div class="shrink-0">
                                <div class="w-24 h-24 rounded-full bg-gradient-to-br from-indigo-400 to-purple-500 flex items-center justify-center shadow-lg">
                                    <svg class="w-12 h-12 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                    </svg>
                                </div>
                            </div>
                            <div class="flex-1">
                                <h3 class="text-lg font-semibold text-gray-900">Profile Photo</h3>
                                <p class="text-sm text-gray-500 mt-1">Upload a professional photo to make your profile stand out</p>
                                <button type="button" class="mt-3 inline-flex items-center px-4 py-2 bg-indigo-50 text-indigo-700 rounded-lg hover:bg-indigo-100 transition-colors duration-200">
                                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                    </svg>
                                    Upload Photo
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Form Fields -->
                    <div class="p-8 space-y-8">
                        <!-- Headline -->
                        <div class="group">
                            <label for="headline" class="block text-sm font-semibold text-gray-700 mb-2">
                                Professional Headline
                            </label>
                            <div class="relative">
                                <input type="text" name="headline" id="headline" required
                                    class="block w-full px-4 py-3.5 border-2 border-gray-200 rounded-xl focus:ring-4 focus:ring-indigo-500/20 focus:border-indigo-500 transition-all duration-200 bg-gray-50/50 hover:bg-white"
                                    placeholder="e.g., Senior Software Engineer | Full Stack Developer">
                                <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                                    <svg class="h-5 w-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                    </svg>
                                </div>
                            </div>
                            @error('headline')
                                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Location Grid -->
                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-4">
                                Location Information
                            </label>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <div class="relative">
                                    <input type="text" name="city" id="city"
                                        class="block w-full px-4 py-3.5 border-2 border-gray-200 rounded-xl focus:ring-4 focus:ring-indigo-500/20 focus:border-indigo-500 transition-all duration-200 bg-gray-50/50 hover:bg-white"
                                        placeholder="City">
                                    <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                                        <svg class="h-5 w-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                        </svg>
                                    </div>
                                </div>
                                <div class="relative">
                                    <input type="text" name="state" id="state"
                                        class="block w-full px-4 py-3.5 border-2 border-gray-200 rounded-xl focus:ring-4 focus:ring-indigo-500/20 focus:border-indigo-500 transition-all duration-200 bg-gray-50/50 hover:bg-white"
                                        placeholder="State/Province">
                                </div>
                                <div class="relative">
                                    <input type="text" name="country" id="country"
                                        class="block w-full px-4 py-3.5 border-2 border-gray-200 rounded-xl focus:ring-4 focus:ring-indigo-500/20 focus:border-indigo-500 transition-all duration-200 bg-gray-50/50 hover:bg-white"
                                        placeholder="Country">
                                </div>
                                <div class="relative">
                                    <input type="text" name="location" id="location"
                                        class="block w-full px-4 py-3.5 border-2 border-gray-200 rounded-xl focus:ring-4 focus:ring-indigo-500/20 focus:border-indigo-500 transition-all duration-200 bg-gray-50/50 hover:bg-white"
                                        placeholder="Full Address (Optional)">
                                </div>
                            </div>
                        </div>

                        <!-- Summary -->
                        <div>
                            <label for="summary" class="block text-sm font-semibold text-gray-700 mb-2">
                                Professional Summary
                            </label>
                            <textarea name="summary" id="summary" rows="6"
                                class="block w-full px-4 py-3.5 border-2 border-gray-200 rounded-xl focus:ring-4 focus:ring-indigo-500/20 focus:border-indigo-500 transition-all duration-200 bg-gray-50/50 hover:bg-white resize-none"
                                placeholder="Write a compelling summary of your professional background, key achievements, and career goals..."></textarea>
                            <p class="mt-2 text-sm text-gray-500 flex items-center">
                                <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                                Tip: Keep it concise but impactful. Highlight your unique value proposition.
                            </p>
                            @error('summary')
                                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Skills -->
                        @if(isset($skills) && $skills->count() > 0)
                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-4">
                                Skills & Expertise
                            </label>
                            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-3">
                                @foreach($skills as $skill)
                                    <label class="relative group cursor-pointer">
                                        <input type="checkbox" name="skills[]" value="{{ $skill->id }}"
                                            class="peer absolute opacity-0 w-full h-full cursor-pointer">
                                        <div class="px-4 py-3 border-2 border-gray-200 rounded-xl peer-checked:border-indigo-500 peer-checked:bg-indigo-50 hover:border-indigo-300 transition-all duration-200">
                                            <div class="flex items-center justify-between">
                                                <span class="text-sm font-medium text-gray-700 peer-checked:text-indigo-700">{{ $skill->name }}</span>
                                                <svg class="w-5 h-5 text-indigo-500 opacity-0 peer-checked:opacity-100 transition-opacity duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                                </svg>
                                            </div>
                                        </div>
                                    </label>
                                @endforeach
                            </div>
                        </div>
                        @endif
                    </div>

                    <!-- Submit Button -->
                    <div class="px-8 py-6 bg-gray-50 border-t border-gray-100">
                        <div class="flex items-center justify-between">
                            <div class="flex items-center text-sm text-gray-500">
                                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path>
                                </svg>
                                Your information is secure and encrypted
                            </div>
                            <button type="submit"
                                class="inline-flex items-center px-8 py-3.5 bg-gradient-to-r from-indigo-600 via-purple-600 to-pink-600 text-white font-semibold rounded-xl hover:shadow-lg hover:scale-105 transform transition-all duration-200 focus:outline-none focus:ring-4 focus:ring-indigo-500/20">
                                Create Profile
                                <svg class="ml-2 -mr-1 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
