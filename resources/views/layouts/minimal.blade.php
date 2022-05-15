<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" x-data="theming" x-bind:class="{'dark' : dark}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="refresh" content="{{ config('session.lifetime') * 60 }}">
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
            <footer class="w-full bg-gray-900">
                <div class="px-4 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8">
                    <div class="flex flex-col justify-between py-10 sm:flex-row">
                        <p class="text-sm text-gray-500">
                            &copy; Copyright {{ date('Y') }} {{ config('app.name') }}. {{ __('All rights reserved.') }}
                        </p>
                        <div class="flex items-center mt-4 space-x-4 sm:mt-0">
                            <a href="//twitter.com" class="text-gray-200 transition-colors duration-500 hover:text-teal-400" target="_blank" rel="noopener noreferrer nofollow">
                                <span class="sr-only">Twitter</span>
                                <svg viewBox="0 0 24 24" fill="currentColor" class="h-5">
                                    <path d="M24,4.6c-0.9,0.4-1.8,0.7-2.8,0.8c1-0.6,1.8-1.6,2.2-2.7c-1,0.6-2,1-3.1,1.2c-0.9-1-2.2-1.6-3.6-1.6 c-2.7,0-4.9,2.2-4.9,4.9c0,0.4,0,0.8,0.1,1.1C7.7,8.1,4.1,6.1,1.7,3.1C1.2,3.9,1,4.7,1,5.6c0,1.7,0.9,3.2,2.2,4.1 C2.4,9.7,1.6,9.5,1,9.1c0,0,0,0,0,0.1c0,2.4,1.7,4.4,3.9,4.8c-0.4,0.1-0.8,0.2-1.3,0.2c-0.3,0-0.6,0-0.9-0.1c0.6,2,2.4,3.4,4.6,3.4 c-1.7,1.3-3.8,2.1-6.1,2.1c-0.4,0-0.8,0-1.2-0.1c2.2,1.4,4.8,2.2,7.5,2.2c9.1,0,14-7.5,14-14c0-0.2,0-0.4,0-0.6 C22.5,6.4,23.3,5.5,24,4.6z"></path>
                                </svg>
                            </a>
                            <a href="//instagram.com" class="text-gray-200 transition-colors duration-500 hover:text-teal-400" target="_blank" rel="noopener noreferrer nofollow">
                                <span class="sr-only">Instagram</span>
                                <svg viewBox="0 0 30 30" fill="currentColor" class="h-6">
                                    <circle cx="15" cy="15" r="4"></circle>
                                    <path d="M19.999,3h-10C6.14,3,3,6.141,3,10.001v10C3,23.86,6.141,27,10.001,27h10C23.86,27,27,23.859,27,19.999v-10   C27,6.14,23.859,3,19.999,3z M15,21c-3.309,0-6-2.691-6-6s2.691-6,6-6s6,2.691,6,6S18.309,21,15,21z M22,9c-0.552,0-1-0.448-1-1   c0-0.552,0.448-1,1-1s1,0.448,1,1C23,8.552,22.552,9,22,9z"></path>
                                </svg>
                            </a>
                            <a href="//facebook.com" class="text-gray-200 transition-colors duration-500 hover:text-teal-400" target="_blank" rel="noopener noreferrer nofollow">
                                <span class="sr-only">Facebook</span>
                                <svg viewBox="0 0 24 24" fill="currentColor" class="h-5">
                                    <path d="M22,0H2C0.895,0,0,0.895,0,2v20c0,1.105,0.895,2,2,2h11v-9h-3v-4h3V8.413c0-3.1,1.893-4.788,4.659-4.788 c1.325,0,2.463,0.099,2.795,0.143v3.24l-1.918,0.001c-1.504,0-1.795,0.715-1.795,1.763V11h4.44l-1,4h-3.44v9H22c1.105,0,2-0.895,2-2 V2C24,0.895,23.105,0,22,0z"></path>
                                </svg>
                            </a>
                            <a href="//youtube.com" class="text-gray-200 transition-colors duration-500 hover:text-teal-400" target="_blank" rel="noopener noreferrer nofollow">
                                <span class="sr-only">YouTube</span>
                                <svg viewBox="0 0 24 24" fill="currentColor" class="h-5">
                                    <path d="M19.62 11.43c2.35 0 4.26 1.9 4.37 4.27l.01.21v3.6c0 2.4-1.85 4.37-4.17 4.48l-.21.01H4.38a4.43 4.43 0 0 1-4.37-4.27L0 19.52v-3.6c0-2.4 1.85-4.37 4.17-4.48H19.62zm-1.15 3.64c-.54 0-.98.17-1.33.5-.3.3-.47.68-.5 1.12l-.01.2v2.8c0 .59.15 1.06.46 1.4.32.34.75.51 1.29.51.6 0 1.06-.16 1.36-.48.27-.29.42-.7.45-1.23l.01-.21v-.32h-1.25v.28c0 .37-.04.6-.12.71-.08.11-.22.16-.42.16-.2 0-.33-.06-.41-.19-.07-.1-.1-.28-.12-.52V18.47h2.32V16.9c0-.59-.15-1.04-.45-1.35-.3-.32-.72-.47-1.28-.47zm-9.14.15H8.12v5.2c0 .36.07.64.21.82.14.19.35.28.63.28.23 0 .47-.06.71-.2.2-.1.38-.24.56-.43l.14-.14v.68h1.21v-6.21h-1.2v4.72c-.12.13-.25.24-.39.33a.68.68 0 0 1-.33.13c-.12 0-.2-.03-.25-.1a.44.44 0 0 1-.07-.21V15.22zm4.4-2.2H12.5v8.4h1.22v-.47a1.42 1.42 0 0 0 1.15.56c.37 0 .65-.12.83-.35.17-.2.26-.48.28-.83l.01-.18V16.7c0-.5-.1-.9-.3-1.16-.2-.26-.5-.4-.88-.4-.2 0-.38.05-.57.15-.13.08-.26.18-.39.3l-.13.13v-2.7zm-6.15 0h-4.2v1.22H4.8v7.19h1.37v-7.2h1.41v-1.22zm6.65 3.11c.17 0 .3.05.38.16.07.09.11.2.12.36V19.97c0 .2-.03.35-.1.43-.07.1-.17.14-.32.14a.7.7 0 0 1-.49-.2l-.1-.1v-3.86a.87.87 0 0 1 .26-.19.59.59 0 0 1 .25-.06zm4.19.02c.18 0 .32.06.4.17.07.09.11.23.13.41v.78h-1.07v-.63c0-.26.04-.45.12-.56.09-.11.23-.17.42-.17zM11.85 2.26c.57 0 1.03.17 1.4.5.32.29.5.66.53 1.1v3.71a1.8 1.8 0 0 1-.52 1.38c-.36.33-.85.5-1.47.5-.6 0-1.07-.18-1.43-.52-.32-.3-.5-.7-.53-1.2l-.01-.19V4c0-.53.18-.96.55-1.27.37-.31.86-.47 1.48-.47zm4.41.17v5.25c0 .16.03.28.09.35.05.07.15.1.28.1.1 0 .22-.04.38-.14.15-.1.3-.22.42-.36v-5.2h1.37v6.84h-1.37v-.75c-.25.28-.51.49-.79.63-.27.15-.53.22-.79.22-.32 0-.55-.1-.72-.3-.15-.2-.23-.51-.23-.92V2.43h1.36zM6.1 0l1 3.7h.1L8.13 0h1.57L7.9 5.43v3.84H6.39V5.6L4.55 0H6.1zm5.69 3.45a.6.6 0 0 0-.4.13.46.46 0 0 0-.16.28v3.81c0 .19.04.33.14.44.1.1.24.15.42.15a.6.6 0 0 0 .44-.16c.09-.08.14-.19.16-.32V3.95a.45.45 0 0 0-.16-.37.67.67 0 0 0-.44-.13z" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </footer>            
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
