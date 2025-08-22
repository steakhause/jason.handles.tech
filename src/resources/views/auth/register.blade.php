<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf
        @if ($errors->any())
        <ul class="mb-4 text-sm text-red-600">
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
        @endif


        <!-- First Name -->
        <div>
            <x-input-label class="text-stone-300" for="first_name" :value="__('First Name')" />
            <x-text-input id="first_name" class="block mt-1 w-full bg-stone-900 text-stone-300" type="text" name="first_name" :value="old('first_name')" required autofocus autocomplete="first_name" />
            <x-input-error :messages="$errors->get('first_name')" class="mt-2" />
        </div>

        <!-- Last Name -->
        <div>
            <x-input-label class="text-stone-300" for="last_name" :value="__('Last Name')" />
            <x-text-input id="last_name" class="block mt-1 w-full bg-stone-900 text-stone-300" type="text" name="last_name" :value="old('last_name')" required autofocus autocomplete="last_name" />
            <x-input-error :messages="$errors->get('last_name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label class="text-stone-300" for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full bg-stone-900 text-stone-300" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Phone -->
        <div class="mt-4">
            <x-input-label class="text-stone-300" for="phone" :value="__('Phone')" />
            <x-text-input
                id="phone"
                name="phone"
                type="tel"
                inputmode="tel"
                autocomplete="tel"
                placeholder="+1 480 555 0123"
                class="block mt-1 w-full bg-stone-900 text-stone-300"
                :value="old('phone')" />
            <x-input-error :messages="$errors->get('phone')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label class="text-stone-300" for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full bg-stone-900 text-stone-300"
                type="password"
                name="password"
                required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label class="text-stone-300" for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full bg-stone-900 text-stone-300"
                type="password"
                name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-red-400 hover:text-stone-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ms-4 bg-stone-700 hover:bg-stone-600 text-stone-100">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>