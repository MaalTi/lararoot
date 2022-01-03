<aside x-show="sidebarPanel" class="w-64 py-4 overflow-y-auto duration-1000 bg-white dark:bg-slate-800 dark:text-white lg:block" x-transition:enter="ease-out duration-500" x-transition:enter-start="-translate-x-full opacity-0" x-transition:enter-end="translate-x-0 opacity-100" x-transition:leave="ease-in duration-500" x-transition:leave-start="translate-x-0 opacity-100" x-transition:leave-end="-translate-x-full opacity-0" x-cloak>
    <nav class="flex flex-col gap-4">
        <a class="relative flex items-center px-6 py-2 duration-200" href="{{route('admin.dashboard')}}">
            <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 3.055A9.001 9.001 0 1020.945 13H11V3.055z" />
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.488 9H15V3.512A9.025 9.025 0 0120.488 9z" />
            </svg>

            <span class="mx-3">{{ __('Dashboard') }}</span>
        </a>
    </nav>
</aside>
