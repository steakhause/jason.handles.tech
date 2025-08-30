<x-guest-layout>
    <div class="py-10 sm:py-16">
        <div class="w-full max-w-md mx-auto px-4 sm:px-0">
            <div class="bg-stone-800 text-stone-100 shadow sm:rounded-xl p-6 sm:p-8">
                <!-- Session Status -->
                <x-auth-session-status class="mb-4" :status="session('status')" />

                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <!-- Email Address -->
                    <div class="text-stone-300">
                        <x-input-label class="text-stone-300" for="email" :value="__('Email')" />
                        <x-text-input id="email" class="block mt-1 w-full bg-stone-900 text-stone-300" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>

                    <!-- Password -->
                    <div class="mt-4 text-stone-300">
                        <x-input-label class="text-stone-300" for="password" :value="__('Password')" />

                        <x-text-input id="password" class="block mt-1 w-full bg-stone-900 text-stone-300"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>

                    <!-- Remember Me -->
                    <div class="block mt-4">
                        <label for="remember_me" class="inline-flex items-center">
                            <input id="remember_me" type="checkbox" class="rounded border-stone-300 text-red-500 shadow-sm focus:ring-red-400" name="remember">
                            <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                        </label>
                    </div>

                    <div class="flex items-center gap-3 mt-4">
                        <a href="{{ route('register') }}"
                            class="inline-flex items-center rounded-md px-4 py-2 text-sm font-medium
            bg-stone-900 text-stone-400 hover:bg-stone-950 mr-auto">
                            {{ __('Register') }}
                        </a>

                        @if (Route::has('password.request'))
                        <a class="underline text-sm text-red-400 hover:text-stone-500
              focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500"
                            href="{{ route('password.request') }}">
                            {{ __('Forgot your password?') }}
                        </a>
                        @endif

                        <x-primary-button class="ms-3 bg-stone-700 hover:bg-stone-600 text-stone-100">
                            {{ __('Log in') }}
                        </x-primary-button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</x-guest-layout>