<x-guest-layout>
    <x-authentication-card>
        <x-slot name="logo">
            <x-authentication-card-logo />
        </x-slot>

        <x-validation-errors class="mb-4" />

        @session('status')
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ $value }}
            </div>
        @endsession

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <x-label for="email" value="{{ __('Email') }}" />
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            </div>

            <div class="mt-4">
                <x-label for="password" value="{{ __('Password') }}" />
                <div class="relative">
                    <x-input id="password" class="block mt-1 w-full pr-10" type="password" name="password" required autocomplete="current-password" />
                   
                    <button type="button" onclick="togglePassword()" class="absolute right-0 top-0 pr-3 flex items-center" style="padding-top: 10px; padding-right: 10px">
                        <svg id="eye-icon" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0zm1.608-7.092A9.995 9.995 0 0112 3c-3.24 0-6.162 1.553-8.079 3.908a10.056 10.056 0 000 12.184C5.838 20.447 8.76 22 12 22s6.162-1.553 8.079-3.908a10.056 10.056 0 000-12.184z" />
                        </svg>
                    </button>
                </div>
            </div>
            

            <script>
                function togglePassword() {
                    const passwordField = document.getElementById('password');
                    const eyeIcon = document.getElementById('eye-icon');
            
                    if (passwordField.type === 'password') {
                        passwordField.type = 'text';
                        
                        eyeIcon.innerHTML = `
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.98 8.223a10.056 10.056 0 000 7.554C5.838 20.447 8.76 22 12 22s6.162-1.553 8.079-3.908a10.056 10.056 0 000-12.184C18.162 1.553 15.24 3 12 3c-3.24 0-6.162 1.553-8.079 3.908zM12 15a3 3 0 110-6 3 3 0 010 6z" />
                        `;
                    } else {
                        passwordField.type = 'password';
                        
                        eyeIcon.innerHTML = `
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0zm1.608-7.092A9.995 9.995 0 0112 3c-3.24 0-6.162 1.553-8.079 3.908a10.056 10.056 0 000 12.184C5.838 20.447 8.76 22 12 22s6.162-1.553 8.079-3.908a10.056 10.056 0 000-12.184z" />
                        `;
                    }
                }
            </script>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-checkbox id="remember_me" name="remember" />
                    <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-button class="ms-4">
                    {{ __('Log in') }}
                </x-button>
            </div>
        </form>
    </x-authentication-card>
</x-guest-layout>
