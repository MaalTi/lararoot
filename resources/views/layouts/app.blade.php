<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" x-data="theming" x-bind:class="{'dark' : dark}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="refresh" content="{{ config('session.lifetime') * 60 }}">


    <title>{{ config('app.name', 'Laravel') }}{{ request()->route()->getName() ? ' - '.request()->route()->getName(): ''
        }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @stack('styles')

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>

<body class="flex flex-col h-screen antialiased duration-1000 bg-slate-100 dark:bg-gray-900 font-roboto" x-on:resize.window="sidebarResponse">
    <x-back-header />

    <div class="relative flex flex-1 overflow-hidden">
        <div x-show="anyPanel" x-on:click="closeAnyPanel" class="absolute inset-0 z-30 transition-opacity bg-slate-900/50" x-cloak></div>
        <x-back-side-bar />
        <main class="relative flex-1 overflow-x-hidden overflow-y-auto duration-1000 bg-gray-200 dark:bg-neutral-700 dark:text-white">
            <div x-show="sidebarPanel" x-on:click="closeSidebar" class="absolute inset-0 z-20 transition-opacity bg-slate-900/50 lg:hidden" x-cloak></div>
            <div class="container px-6 py-8 mx-auto">
                {{ $slot }}
            </div>
        </main>
    </div>

    @stack('modals')

    <script>
        function theming() {
            return {
                width: null,
                dark: null,
                sidebarPanel: false,
                notificationPanel: false,
                dropdownPanel: false,
                anyPanel: function(){
                    if(this.notificationPanel == true || this.dropdownPanel == true)
                        return true
                    else
                        return false
                },
                setWidth() {
                    this.width = (window.innerWidth > 0) ? window.innerWidth : screen.width
                },
                toogleDark() {
                    this.dark = !this.dark
                    if (localStorage.theme === "dark")
                        localStorage.setItem("theme", "light")
                    else
                        localStorage.setItem("theme", "dark")
                },
                openSidebar() {
                    this.sidebarPanel = true
                },
                closeSidebar() {
                    this.sidebarPanel = false
                },
                toogleSidebar() {
                    if(this.sidebarPanel == true)
                        this.closeSidebar()
                    else
                        this.openSidebar()
                },
                sidebarResponse() {
                    this.setWidth()
                    if (this.width > 1024)
                        this.openSidebar()
                    else
                        this.closeSidebar()
                },
                openNotification() {
                    this.notificationPanel = true
                },
                closeNotification() {
                    this.notificationPanel = false
                },
                toogleNotification() {
                    if(this.notificationPanel == true)
                        this.closeNotification()
                    else
                        this.openNotification()
                },
                openDropdown() {
                    this.dropdownPanel = true
                },
                closeDropdown() {
                    this.dropdownPanel = false
                },
                toogleDropdown() {
                    if(this.dropdownPanel == true)
                        this.closeDropdown()
                    else
                        this.openDropdown()
                },
                closeAnyPanel() {
                    this.closeNotification()
                    this.closeDropdown()
                },
                init() {
                    this.sidebarResponse()

                    // https://tailwindcss.com/docs/dark-mode
                    if (localStorage.theme) {
                        if (localStorage.theme === "dark")
                            this.dark = true
                        else
                            this.dark = false
                    } else {
                        if (!("theme" in localStorage) && window.matchMedia("(prefers-color-scheme: dark)").matches) {
                            this.dark = true
                            localStorage.setItem("theme", "dark")
                        } else {
                            this.dark = false
                            localStorage.setItem("theme", "light")
                        }
                    }
                },
            }
        }
    </script>
    @stack('scripts')
</body>
</html>
