<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4 relative">
            <x-input-label for="password" :value="__('Password')" />
            <div class="relative">
              <input type="password" id="password" class="rounded border-gray-300 shadow-sm mt-1 block w-full"
                     placeholder="{{ __('Enter your password') }}" required>
              <button type="button" class="eye-icon" onclick="togglePassword()">
                <span></span>
              </button>
            </div>
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800" name="remember">
                <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800"
            href="{{ route('register') }}">
                    {{ __('Don\'t have an account?') }}
                </a>

            <x-primary-button class="ml-3">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>

    <!-- Show/Hide Password JavaScript -->
    <script>
        function togglePassword() {
            var passwordInput = document.getElementById("password");
            var buttonEl = document.querySelector('.eye-icon');

            if (passwordInput.type === "password") {
                passwordInput.type = "text";
                buttonEl.classList.add('open');
            } else {
                passwordInput.type = "password";
                buttonEl.classList.remove('open');
            }
        }
    </script>
</x-guest-layout>