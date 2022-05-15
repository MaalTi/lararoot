<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" x-data="theming" x-bind:class="{'dark' : dark}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="refresh" content="{{ config('session.lifetime') * 60 }}">
    <meta name="description" content="{{ $seoDescription ?? 'Reprehenderit quis tempor consequat eu non est nisi. Id velit excepteur reprehenderit esse consectetur esse veniam. Deserunt ut esse elit anim dolor. Sunt in aliquip in exercitation excepteur anim labore irure laborum aute occaecat enim ipsum.' }}">
    @stack('metas')

    @if (!empty($seoTitle))
    <title>{{ config('app.name', 'Laravel') }}{{ ' - '.$seoTitle }}</title>
    @else
    <title>{{ config('app.name', 'Laravel') }}</title>
    @endif

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    @stack('styles')

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>

<body class="relative flex flex-col h-screen bg-slate-100 items-top dark:bg-gray-900 sm:items-center" x-on:resize.window="menuResponse">
    <x-front-header/>
    <div class="relative flex flex-col flex-1 w-full overflow-hidden">
        <div class="relative flex flex-col justify-between w-full h-full overflow-x-hidden overflow-y-auto">
            <main class="w-full bg-gray-200 dark:bg-neutral-700">
                {{ $slot }}
            </main>
            <x-front-footer/>
        </div>
    </div>

    @stack('modals')
    <script>
        function theming() {
            return {
                width: null,
                dark: null,
                menuPanel: false,
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
                openMenu() {
                    this.menuPanel = true
                },
                closeMenu() {
                    this.menuPanel = false
                },
                toogleMenu() {
                    if(this.menuPanel == true)
                        this.closeMenu()
                    else
                        this.openMenu()
                },
                menuResponse() {
                    this.setWidth()
                    if (this.width > 1024)
                        this.closeMenu()
                },
                init() {
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
