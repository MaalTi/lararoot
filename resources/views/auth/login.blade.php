<x-minimal-layout>
    <x-authentication-card class="space-y-4">
        <x-slot name="logo">
            <x-authentication-card-logo />
        </x-slot>

        <h1 class="text-xl font-semibold text-center">{{ __('Login') }}</h1>

        <x-validation-errors />

        @if (session('status'))
        <div class="text-sm font-medium text-green-600">
            {{ session('status') }}
        </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <x-label for="email" value="{{ __('Email') }}" />
                <x-input id="email" class="block w-full mt-1" type="email" name="email" :value="old('email')" required autofocus autocomplete="email" />
            </div>

            <div class="mt-4">
                <x-label for="password" value="{{ __('Password') }}" />
                <x-input id="password" class="block w-full mt-1" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="flex flex-wrap justify-between gap-4 mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-checkbox id="remember_me" name="remember" />
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>

                @if (Route::has('password.request'))
                <a class="text-sm text-gray-600 underline hover:text-gray-900" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
                @endif
            </div>

            <div class="flex items-center justify-center mt-4">
                <x-button>
                    {{ __('Log in') }}
                </x-button>
            </div>
        </form>

        <div class="flex items-center justify-center space-x-2 flex-nowrap">
            <span class="w-20 h-px bg-gray-300"></span>
            <span>{{ __('OR') }}</span>
            <span class="w-20 h-px bg-gray-300"></span>
        </div>

        <div class="flex flex-wrap items-center justify-center w-full gap-2">
            <a href="{{ route('social.redirect','github') }}" class="flex items-center justify-center px-4 py-2 space-x-2 text-white transition-all duration-200 bg-black rounded-md hover:bg-opacity-80 focus:outline-none focus:ring-2 focus:ring-black focus:ring-offset-1">
                <svg aria-hidden="true" class="w-6 h-6 text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M12.026,2c-5.509,0-9.974,4.465-9.974,9.974c0,4.406,2.857,8.145,6.821,9.465 c0.499,0.09,0.679-0.217,0.679-0.481c0-0.237-0.008-0.865-0.011-1.696c-2.775,0.602-3.361-1.338-3.361-1.338 c-0.452-1.152-1.107-1.459-1.107-1.459c-0.905-0.619,0.069-0.605,0.069-0.605c1.002,0.07,1.527,1.028,1.527,1.028 c0.89,1.524,2.336,1.084,2.902,0.829c0.091-0.645,0.351-1.085,0.635-1.334c-2.214-0.251-4.542-1.107-4.542-4.93 c0-1.087,0.389-1.979,1.024-2.675c-0.101-0.253-0.446-1.268,0.099-2.64c0,0,0.837-0.269,2.742,1.021 c0.798-0.221,1.649-0.332,2.496-0.336c0.849,0.004,1.701,0.115,2.496,0.336c1.906-1.291,2.742-1.021,2.742-1.021 c0.545,1.372,0.203,2.387,0.099,2.64c0.64,0.696,1.024,1.587,1.024,2.675c0,3.833-2.33,4.675-4.552,4.922 c0.355,0.308,0.675,0.916,0.675,1.846c0,1.334-0.012,2.41-0.012,2.737c0,0.267,0.178,0.577,0.687,0.479 C19.146,20.115,22,16.379,22,11.974C22,6.465,17.535,2,12.026,2z"></path>
                </svg>
                <span> {{ __('Login with') }} Github </span>
            </a>
            <a href="{{ route('social.redirect','google') }}" class="flex items-center justify-center px-4 py-2 space-x-2 text-black transition-all duration-200 bg-white border border-black rounded-md hover:bg-opacity-80 focus:outline-none focus:ring-2 focus:ring-black focus:ring-offset-1">
                <svg aria-hidden="true" class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                    <path stroke="none" d="M0 0h24v24H0z" />
                    <path d="M17.788 5.108a9 9 0 1 0 3.212 6.892h-8" />
                </svg>
                <span> {{ __('Login with') }} Google </span>
            </a>
            <a href="{{ route('social.redirect','facebook') }}" class="flex items-center justify-center px-4 py-2 space-x-2 text-white transition-all duration-200 bg-blue-600 rounded-md hover:bg-opacity-80 focus:outline-none focus:ring-2 focus:ring-blue-600 focus:ring-offset-1">
                <svg aria-hidden="true" class="w-6 h-6 text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                    <path d="M24 12.07C24 5.41 18.63 0 12 0S0 5.4 0 12.07C0 18.1 4.39 23.1 10.13 24v-8.44H7.08v-3.49h3.04V9.41c0-3.02 1.8-4.7 4.54-4.7 1.31 0 2.68.24 2.68.24v2.97h-1.5c-1.5 0-1.96.93-1.96 1.89v2.26h3.32l-.53 3.5h-2.8V24C19.62 23.1 24 18.1 24 12.07"/>
                </svg>
                <span> {{ __('Login with') }} Facebook </span>
            </a>
        </div>

        @if (Route::has('register'))
        <div class="text-sm text-gray-600">
            {{ __('Don\'t have an account yet?') }} <a href="register.html" class="text-blue-600 hover:underline">{{ __('Register') }}</a>
        </div>
        @endif
    </x-authentication-card>
</x-minimal-layout>
