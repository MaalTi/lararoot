<header class="flex items-center justify-between px-6 py-4 duration-1000 bg-white border-b dark:bg-slate-800 dark:text-white border-lime-500">
    <div class="flex items-center gap-4">
        <button class="relative w-6 h-6 text-gray-500 duration-1000 focus:outline-none lg:hidden dark:text-stone-200" x-on:click="toogleSidebar">
            <span aria-hidden="true" class="block absolute h-0.5 w-6 bg-current duration-300 ease-in-out" x-bind:class="{'rotate-45': sidebarPanel,'-translate-y-1.5': !sidebarPanel }"></span>
            <span aria-hidden="true" class="block absolute h-0.5 w-6 bg-current duration-300 ease-in-out" x-bind:class="{'opacity-0': sidebarPanel } "></span>
            <span aria-hidden="true" class="block absolute h-0.5 bg-current duration-300 ease-in-out" x-bind:class="{'-rotate-45 w-6': sidebarPanel, 'translate-y-1.5 w-5': !sidebarPanel}"></span>
        </button>

        <div class="flex items-center justify-center">
            <div class="flex items-center">
                <x-authentication-card-logo />
            </div>
        </div>

        <div class="relative">
            <span class="absolute inset-y-0 left-0 flex items-center pl-3">
                <svg class="w-5 h-5 text-gray-500" viewBox="0 0 24 24" fill="none">
                    <path d="M21 21L15 15M17 10C17 13.866 13.866 17 10 17C6.13401 17 3 13.866 3 10C3 6.13401 6.13401 3 10 3C13.866 3 17 6.13401 17 10Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
            </span>

            <input class="w-32 pl-10 pr-4 rounded-md form-input sm:w-64 focus:border-indigo-600" type="text" placeholder="{{ __('Search') }}">
        </div>
    </div>

    <div class="flex items-center">
        <button x-on:click="toogleDark">
            <svg class="inline-block w-8 h-8 fill-current text-lime-500" x-show="dark" x-cloak viewBox="0 0 24 24" role="presentation" aria-hidden="true">
                <g strokelinejoin="full" strokelinecap="full" strokewidth="2" fill="none" stroke="currentColor">
                    <circle cx="12" cy="12" r="5"></circle>
                    <path d="M12 1v2"></path>
                    <path d="M12 21v2"></path>
                    <path d="M4.22 4.22l1.42 1.42"></path>
                    <path d="M18.36 18.36l1.42 1.42"></path>
                    <path d="M1 12h2"></path>
                    <path d="M21 12h2"></path>
                    <path d="M4.22 19.78l1.42-1.42"></path>
                    <path d="M18.36 5.64l1.42-1.42"></path>
                </g>
            </svg>
            <svg class="inline-block w-6 h-6 fill-current text-lime-500" x-show="!dark" viewBox="0 0 24 24" x-cloak role="presentation" aria-hidden="true">
                <path fill="currentColor" d="M21.4,13.7C20.6,13.9,19.8,14,19,14c-5,0-9-4-9-9c0-0.8,0.1-1.6,0.3-2.4c0.1-0.3,0-0.7-0.3-1 c-0.3-0.3-0.6-0.4-1-0.3C4.3,2.7,1,7.1,1,12c0,6.1,4.9,11,11,11c4.9,0,9.3-3.3,10.6-8.1c0.1-0.3,0-0.7-0.3-1 C22.1,13.7,21.7,13.6,21.4,13.7z">
                </path>
            </svg>
        </button>

        <div class="relative">
            <button x-on:click="toogleNotification" class="flex mx-4 text-gray-600 duration-1000 focus:outline-none dark:text-stone-200">
                <svg class="w-6 h-6" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M15 17H20L18.5951 15.5951C18.2141 15.2141 18 14.6973 18 14.1585V11C18 8.38757 16.3304 6.16509 14 5.34142V5C14 3.89543 13.1046 3 12 3C10.8954 3 10 3.89543 10 5V5.34142C7.66962 6.16509 6 8.38757 6 11V14.1585C6 14.6973 5.78595 15.2141 5.40493 15.5951L4 17H9M15 17V18C15 19.6569 13.6569 21 12 21C10.3431 21 9 19.6569 9 18V17M15 17H9" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
            </button>

            <div x-show="notificationPanel" class="absolute right-0 z-40 mt-2 overflow-hidden bg-white rounded-lg shadow-xl w-80" style="width:20rem;" x-cloak>
                <a href="#" class="flex items-center px-4 py-3 -mx-2 text-gray-600 hover:text-white hover:bg-indigo-600">
                    <img class="object-cover w-8 h-8 mx-1 rounded-full" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=334&q=80" alt="avatar">
                    <p class="mx-2 text-sm">
                        <span class="font-bold" href="#">Sara Salah</span> replied on the <span class="font-bold text-indigo-400" href="#">Upload Image</span> artical . 2m
                    </p>
                </a>
                <a href="#" class="flex items-center px-4 py-3 -mx-2 text-gray-600 hover:text-white hover:bg-indigo-600">
                    <img class="object-cover w-8 h-8 mx-1 rounded-full" src="https://images.unsplash.com/photo-1531427186611-ecfd6d936c79?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=634&q=80" alt="avatar">
                    <p class="mx-2 text-sm">
                        <span class="font-bold" href="#">Slick Net</span> start following you . 45m
                    </p>
                </a>
                <a href="#" class="flex items-center px-4 py-3 -mx-2 text-gray-600 hover:text-white hover:bg-indigo-600">
                    <img class="object-cover w-8 h-8 mx-1 rounded-full" src="https://images.unsplash.com/photo-1450297350677-623de575f31c?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=334&q=80" alt="avatar">
                    <p class="mx-2 text-sm">
                        <span class="font-bold" href="#">Jane Doe</span> Like Your reply on <span class="font-bold text-indigo-400" href="#">Test with TDD</span> artical . 1h
                    </p>
                </a>
                <a href="#" class="flex items-center px-4 py-3 -mx-2 text-gray-600 hover:text-white hover:bg-indigo-600">
                    <img class="object-cover w-8 h-8 mx-1 rounded-full" src="https://images.unsplash.com/photo-1580489944761-15a19d654956?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=398&q=80" alt="avatar">
                    <p class="mx-2 text-sm">
                        <span class="font-bold" href="#">Abigail Bennett</span> start following you . 3h
                    </p>
                </a>
            </div>
        </div>

        <div class="relative">
            <button x-on:click="toogleDropdown" class="relative block w-8 h-8 overflow-hidden text-gray-600 duration-1000 rounded-full shadow focus:outline-none dark:text-stone-200">
                {{-- @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                <img class="object-cover w-full h-full" src="{{ Auth::user()->profile_photo_url }}"
                alt="{{ Auth::user()->name }}" />
                @else --}}
                <svg xmlns="http://www.w3.org/2000/svg" class="object-cover w-full h-full" viewBox="0 0 20 20" fill="currentColor">

                    <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-6-3a2 2 0 11-4 0 2 2 0 014 0zm-2 4a5 5 0 00-4.546 2.916A5.986 5.986 0 0010 16a5.986 5.986 0 004.546-2.084A5 5 0 0010 11z" clip-rule="evenodd" />
                </svg>
                {{-- @endif --}}
            </button>

            <div x-show="dropdownPanel" class="absolute right-0 z-40 w-48 mt-2 overflow-hidden bg-white rounded-md shadow-xl" x-cloak>
                <!-- Account Management -->
                <x-responsive-nav-link href="{{ route('admin.profile') }}" :active="request()->routeIs('admin.profile')">
                    {{ __('Profile') }}
                </x-responsive-nav-link>

                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <x-responsive-nav-link href="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </x-responsive-nav-link>
                </form>
            </div>
        </div>
    </div>
</header>
