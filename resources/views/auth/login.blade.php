<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <div class="shrink-0 flex items-center justify-center m-4">
            <a href="{{ route('dashboard') }}">
                <x-application-logo class="block h-20 w-auto fill-current text-gray-800 " />
            </a>
        </div>
        <!-- Email Address -->
        <div class="mt-5">
            <x-input-label for="email" :value="__('*Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('*Senha')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4 ">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded border-rosaH text-rosaH shadow-sm focus:ring-rosaH" name="remember">
                <span class="ms-2 text-sm text-gray-600 hover:text-rosaH">{{ __('Lembre de mim') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-center mt-4 mb-4">
            <x-primary-button class="ms-3">
                {{ __('Entrar') }}
            </x-primary-button>
        </div>

        <div class="flex items-center justify-center mb-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-500 hover:text-rosaH rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                    {{ __('Esqueceu sua senha?') }}
                </a>
            @endif
        </div>

        <div class="flex items-center justify-center">
            @if (Route::has('register'))
                <a class="underline text-sm text-gray-500 hover:text-rosaH rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('register') }}">
                    {{ __('Registrar uma nova conta') }}
                </a>
            @endif
        </div>

    </form>
</x-guest-layout>
