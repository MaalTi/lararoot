<header class="relative w-full text-gray-700 bg-white border-b border-indigo-500 dark:bg-slate-800 dark:text-white">
    <div class="flex items-center justify-between w-full gap-5 px-4 py-5 md:px-24 lg:px-8">
        <button class="relative w-5 h-5 focus:outline-none lg:hidden" x-on:click="toogleMenu">
            <span class="sr-only">Menu</span>
            <span aria-hidden="true" class="block absolute h-0.5 w-5 bg-current duration-300 ease-in-out" x-bind:class="{'rotate-45': menuPanel,'-translate-y-1.5': !menuPanel }"></span>
            <span aria-hidden="true" class="block absolute h-0.5 w-5 bg-current duration-300 ease-in-out" x-bind:class="{'opacity-0': menuPanel } "></span>
            <span aria-hidden="true" class="block absolute h-0.5 w-5 bg-current duration-300 ease-in-out" x-bind:class="{'-rotate-45': menuPanel, 'translate-y-1.5': !menuPanel}"></span>
        </button>

        <div class="flex items-center justify-center flex-1 lg:flex-initial gap-8">
            <x-authentication-card-logo aria-label="{{ config('app.name') }}" title="{{ config('app.name') }}" />
            <ul class="items-center hidden space-x-8 lg:flex">
                <li>
                    <a href="#" aria-label="Our product" title="Our product" class="font-medium tracking-wide transition-colors duration-200 hover:text-indigo-400">Product</a>
                </li>
                <li>
                    <a href="#" aria-label="Our product" title="Our product" class="font-medium tracking-wide transition-colors duration-200 hover:text-indigo-400">Features</a>
                </li>
                <li>
                    <a href="#" aria-label="Product pricing" title="Product pricing" class="font-medium tracking-wide transition-colors duration-200 hover:text-indigo-400">Pricing</a>
                </li>
                <li>
                    <a href="#" aria-label="About us" title="About us" class="font-medium tracking-wide transition-colors duration-200 hover:text-indigo-400">About us</a>
                </li>
            </ul>
        </div>

        <div class="flex items-center gap-3">
            <div class="flex items-center relative" x-data="{langToogle: false}">
                @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                @if ($localeCode == LaravelLocalization::getCurrentLocale())
                <button type="button" x-on:click="langToogle = !langToogle">{!! $properties['flag'] !!}</button>
                @endif
                @endforeach
                <ul class="absolute top-full rounded left-1/2 -translate-x-1/2 z-20 px-2 py-1 bg-white dark:bg-slate-800" x-show="langToogle" x-on:click.away="langToogle = false" x-cloak>
                    @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                    @if ($localeCode != LaravelLocalization::getCurrentLocale())
                    <li>
                        <a rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode) }}" class="capitalize">
                            {!! $properties['flag'] !!}
                        </a>
                    </li>
                    @endif
                    @endforeach
                </ul>
            </div>

            <button class="relative w-12 h-6 focus:outline-none" x-on:click="toogleDark">
                <span class="sr-only">Theme</span>
                <div class="w-full h-full transition bg-indigo-100 rounded-full outline-none dark:bg-indigo-100"></div>
                <div class="absolute top-0 left-0 inline-flex items-center justify-center w-6 h-6 text-indigo-100 transition-all duration-150 transform scale-110 translate-x-6 bg-indigo-800 rounded-full shadow-sm" x-bind:class="{ 'translate-x-0 -translate-y-px  bg-white text-indigo-dark': !dark, 'translate-x-6 text-indigo-100 bg-indigo-800': dark }">
                    <svg x-show="!dark" class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" style="display: none;">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z"></path>
                    </svg>
                    <svg x-show="dark" class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"></path>
                    </svg>
                </div>
            </button>

            @if (Route::has('login'))
            <ul class="items-center hidden space-x-8 lg:flex">
                @auth
                @can('admin.access')
                <li>
                    <a href="{{ route('admin.dashboard') }}" aria-label="{{ __('Dashboard') }}" title="{{ __('Dashboard') }}" class="inline-flex items-center justify-center h-12 px-6 font-medium tracking-wide transition duration-200 bg-indigo-400 rounded shadow-md hover:bg-indigo-700 focus:shadow-outline focus:outline-none">
                        {{ __('Dashboard') }}
                    </a>
                </li>
                @endcan
                <li>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <a href="{{ route('admin.dashboard') }}" aria-label="{{ __('Log Out') }}" title="{{ __('Log Out') }}" class="font-medium tracking-wide transition-colors duration-200 hover:text-indigo-400" onclick="event.preventDefault(); this.closest('form').submit();">{{ __('Log Out') }}</a>
                    </form>
                </li>
                @else
                @if (Route::has('register'))
                <li>
                    <a href="{{ route('register') }}" class="inline-flex items-center justify-center h-12 px-6 font-medium tracking-wide transition duration-200 bg-indigo-400 rounded shadow-md hover:bg-indigo-700 hover:text-white focus:shadow-outline focus:outline-none" aria-label="{{ __('Sign up') }}" title="{{ __('Sign up') }}">
                        {{ __('Sign up') }}
                    </a>
                </li>
                @endif
                <li>
                    <a href="{{ route('login') }}" aria-label="{{ __('Sign in') }}" title="{{ __('Sign in') }}" class="font-medium tracking-wide transition-colors duration-200 hover:text-indigo-400">{{ __('Sign in') }}</a>
                </li>
                @endauth
            </ul>
            @endif
        </div>
    </div>

    <!-- Mobile menu -->
    <div class="absolute left-0 z-20 top-full lg:hidden" x-show="menuPanel" x-on:click.away="closeMenu" x-transition:enter="transition-all ease-out duration-500" x-transition:enter-start="translate-y-12 opacity-0" x-transition:enter-end="translate-y-0 opacity-100" x-transition:leave="transition-all ease-in duration-500" x-transition:leave-start="translate-y-0 opacity-100" x-transition:leave-end="translate-y-12 opacity-0" x-cloak>
        <nav class="p-5 bg-white border rounded shadow-sm dark:bg-slate-800 dark:text-white dark:border-indigo-500">
            <ul class="space-y-4">
                <li>
                    <a href="#" aria-label="Our product" title="Our product" class="font-medium tracking-wide transition-colors duration-200 hover:text-indigo-400">Product</a>
                </li>
                <li>
                    <a href="#" aria-label="Our product" title="Our product" class="font-medium tracking-wide transition-colors duration-200 hover:text-indigo-400">Features</a>
                </li>
                <li>
                    <a href="#" aria-label="Product pricing" title="Product pricing" class="font-medium tracking-wide transition-colors duration-200 hover:text-indigo-400">Pricing</a>
                </li>
                <li>
                    <a href="#" aria-label="About us" title="About us" class="font-medium tracking-wide transition-colors duration-200 hover:text-indigo-400">About us</a>
                </li>
                @if (Route::has('login'))
                @auth
                @can('admin.access')
                <li>
                    <a href="{{ route('admin.dashboard') }}" aria-label="{{ __('Dashboard') }}" title="{{ __('Dashboard') }}" class="inline-flex items-center justify-center h-12 px-6 font-medium tracking-wide transition duration-200 bg-indigo-400 rounded shadow-md hover:bg-indigo-700 hover:text-white focus:shadow-outline focus:outline-none">
                        {{ __('Dashboard') }}
                    </a>
                </li>
                @endcan
                <li>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <a href="{{ route('admin.dashboard') }}" aria-label="{{ __('Log Out') }}" title="{{ __('Log Out') }}" class="font-medium tracking-wide transition-colors duration-200 hover:text-indigo-400" onclick="event.preventDefault(); this.closest('form').submit();">{{ __('Log Out') }}</a>
                    </form>
                </li>
                @else
                @if (Route::has('register'))
                <li>
                    <a href="{{ route('register') }}" class="inline-flex items-center justify-center h-12 px-6 font-medium tracking-wide transition duration-200 bg-indigo-400 rounded shadow-md hover:bg-indigo-700 focus:shadow-outline focus:outline-none" aria-label="{{ __('Sign up') }}" title="{{ __('Sign up') }}">
                        {{ __('Sign up') }}
                    </a>
                </li>
                @endif
                <li>
                    <a href="{{ route('login') }}" aria-label="{{ __('Sign in') }}" title="{{ __('Sign in') }}" class="font-medium tracking-wide transition-colors duration-200 hover:text-indigo-400">{{ __('Sign in') }}</a>
                </li>
                @endauth
                @endif
            </ul>
        </nav>
    </div>
</header>
