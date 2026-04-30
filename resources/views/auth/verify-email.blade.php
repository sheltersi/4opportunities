<x-guest-layout>
    <x-authentication-card>
        <x-slot name="logo">
            <x-authentication-card-logo />
        </x-slot>

        <div class="text-center">
            <div class="mb-6">
                <div class="mx-auto w-20 h-20 bg-gradient-to-br from-indigo-400 to-purple-500 rounded-full flex items-center justify-center shadow-lg">
                    <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                    </svg>
                </div>
            </div>

            <h2 class="text-2xl font-bold text-gray-900 mb-2">Verify Your Email</h2>
            <p class="text-gray-600 mb-6">
                We've sent a verification link to <span class="font-semibold text-indigo-600">{{ auth()->user()->email }}</span>
            </p>
            <p class="text-sm text-gray-500 mb-8">
                Please click the link in the email to verify your account. After verification, you'll be redirected to create your profile.
            </p>
        </div>

        @if (session('status') == 'verification-link-sent')
            <div class="mb-4 font-medium text-sm text-green-600 text-center">
                A new verification link has been sent to your email address.
            </div>
        @endif

        <div class="mt-4 flex flex-col sm:flex-row items-center justify-between gap-4">
            <form method="POST" action="{{ route('verification.send') }}" class="w-full sm:w-auto">
                @csrf
                <x-button type="submit" class="w-full sm:w-auto justify-center">
                    Resend Verification Email
                </x-button>
            </form>

            <div class="flex items-center gap-4">
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        Log Out
                    </button>
                </form>
            </div>
        </div>
    </x-authentication-card>
</x-guest-layout>
