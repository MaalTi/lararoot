<?php

namespace Database\Seeders;

use App\Models\Page;
use Illuminate\Database\Seeder;

class PageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Page::create([
            'title' => [
                'en' => 'Home',
                'es' => 'Inicio',
                'fr' => 'Accueil',
            ],
            'is_home' => 1,
            'seo_title' => [
                'en' => 'Home',
                'es' => 'Inicio',
                'fr' => 'Accueil',
            ],
            'seo_description' => [
                'en' => 'Defalut page',
                'es' => 'Página por defecto',
                'fr' => 'Page par défaut',
            ],
            'content' => '<div class="relative flex items-center content-center justify-center pt-16 pb-32" style="min-height: 75vh;">
                <div class="absolute top-0 w-full h-full bg-center bg-cover" style=\'background-image: url("https://images.unsplash.com/photo-1557804506-669a67965ba0?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=1267&amp;q=80");\'>
                    <span id="blackOverlay" class="absolute w-full h-full bg-black/75"></span>
                </div>
                <div class="container relative mx-auto">
                    <div class="flex flex-wrap items-center">
                        <div class="w-full px-4 ml-auto mr-auto text-center lg:w-6/12">
                            <div class="pr-12">
                                <h1 class="text-5xl font-semibold text-white">
                                    Your story starts with us.
                                </h1>
                                <p class="mt-4 text-lg text-gray-300">
                                    This is a simple example of a Landing Page you can build using
                                    Tailwind Starter Kit. It features multiple CSS components
                                    based on the Tailwindcss design system.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="absolute bottom-0 left-0 right-0 top-auto w-full overflow-hidden pointer-events-none" style="height: 70px;">
                    <svg class="absolute bottom-0 overflow-hidden" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none" version="1.1" viewBox="0 0 256 10" x="0" y="0">
                        <polygon class="text-gray-300 fill-current dark:text-zinc-600" points="256 0 256 10 0 10"></polygon>
                    </svg>
                </div>
            </div>
            <section class="pb-20 -mt-24 bg-gray-300 dark:bg-zinc-600">
                <div class="container px-4 mx-auto">
                    <div class="flex flex-wrap">
                        <div class="w-full px-4 pt-6 text-center lg:pt-12 md:w-4/12">
                            <div class="relative flex flex-col w-full min-w-0 mb-8 break-words bg-white rounded-lg shadow-lg dark:bg-slate-800">
                                <div class="flex-auto px-4 py-5">
                                    <div class="inline-flex items-center justify-center w-12 h-12 p-3 mb-5 text-center text-white bg-red-400 rounded-full shadow-lg dark:text-gray-700 dark:bg-amber-300">
                                        <i></i>
                                    </div>
                                    <h2 class="text-xl font-semibold dark:text-white">Awarded Agency</h2>
                                    <p class="mt-2 mb-4 text-gray-600 dark:text-slate-200">
                                        Divide details about your product or agency work into parts.
                                        A paragraph describing a feature will be enough.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="w-full px-4 text-center md:w-4/12">
                            <div class="relative flex flex-col w-full min-w-0 mb-8 break-words bg-white rounded-lg shadow-lg dark:bg-slate-800">
                                <div class="flex-auto px-4 py-5">
                                    <div class="inline-flex items-center justify-center w-12 h-12 p-3 mb-5 text-center text-white bg-blue-400 rounded-full shadow-lg dark:text-gray-700 dark:bg-purple-300">
                                        <i></i>
                                    </div>
                                    <h2 class="text-xl font-semibold dark:text-white">Free Revisions</h2>
                                    <p class="mt-2 mb-4 text-gray-600 dark:text-slate-200">
                                        Keep you user engaged by providing meaningful information.
                                        Remember that by this time, the user is curious.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="w-full px-4 pt-6 text-center md:w-4/12">
                            <div class="relative flex flex-col w-full min-w-0 mb-8 break-words bg-white rounded-lg shadow-lg dark:bg-slate-800">
                                <div class="flex-auto px-4 py-5">
                                    <div class="inline-flex items-center justify-center w-12 h-12 p-3 mb-5 text-center text-white bg-green-400 rounded-full shadow-lg dark:text-gray-700 dark:bg-emerald-300">
                                        <i></i>
                                    </div>
                                    <h2 class="text-xl font-semibold dark:text-white">Verified Company</h2>
                                    <p class="mt-2 mb-4 text-gray-600 dark:text-slate-200">
                                        Write a few lines about each one. A paragraph describing a
                                        feature will be enough. Keep you user engaged!
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-wrap items-center mt-32">
                        <div class="w-full px-4 ml-auto mr-auto md:w-5/12">
                            <div class="inline-flex items-center justify-center w-16 h-16 p-3 mb-6 text-center text-gray-600 bg-gray-100 rounded-full shadow-lg dark:text-slate-200 dark:bg-slate-800">
                                <i></i>
                            </div>
                            <h2 class="mb-2 text-3xl font-semibold leading-normal dark:text-white">
                                Working with us is a pleasure
                            </h2>
                            <p class="mt-4 mb-4 text-lg font-light leading-relaxed text-gray-700 dark:text-white">
                                Don\'t let your uses guess by attaching tooltips and popoves to
                                any element. Just make sure you enable them first via
                                JavaScript.
                            </p>
                            <p class="mt-0 mb-4 text-lg font-light leading-relaxed text-gray-700 dark:text-white">
                                The kit comes with three pre-built pages to help you get started
                                faster. You can change the text and images and you\'re good to
                                go. Just make sure you enable them first via JavaScript.
                            </p>
                            <a href="https://www.creative-tim.com/learning-lab/tailwind-starter-kit#/presentation" class="mt-8 font-bold text-gray-800 dark:text-gray-200">Check Tailwind Starter Kit!</a>
                        </div>
                        <div class="w-full px-4 ml-auto mr-auto md:w-4/12">
                            <div class="relative flex flex-col w-full min-w-0 mb-6 break-words bg-pink-600 rounded-lg shadow-lg">
                                <img alt="..." src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=1051&amp;q=80" class="w-full align-middle rounded-t-lg" />
                                <blockquote class="relative p-8 mb-4">
                                    <svg preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 583 95" class="absolute left-0 block w-full" style="height: 95px; top: -94px;">
                                        <polygon points="-30,95 583,95 583,65" class="text-pink-600 fill-current"></polygon>
                                    </svg>
                                    <h3 class="text-xl font-bold text-white">
                                        Top Notch Services
                                    </h3>
                                    <p class="mt-2 font-light text-white text-md">
                                        The Arctic Ocean freezes every winter and much of the
                                        sea-ice then thaws every summer, and that process will
                                        continue whatever happens.
                                    </p>
                                </blockquote>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="relative py-20">
                <div class="absolute top-0 left-0 right-0 bottom-auto w-full -mt-20 overflow-hidden text-gray-200 pointer-events-none dark:text-neutral-700" style="height: 80px;">
                    <svg class="absolute bottom-0 overflow-hidden" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none" version="1.1" fill="currentColor" viewBox="0 0 256 10" x="0" y="0">
                        <polygon points="256 0 256 10 0 10"></polygon>
                    </svg>
                </div>
                <div class="container px-4 mx-auto">
                    <div class="flex flex-wrap items-center">
                        <div class="w-full px-4 ml-auto mr-auto md:w-4/12">
                            <img alt="..." class="max-w-full rounded-lg shadow-lg" src="https://images.unsplash.com/photo-1555212697-194d092e3b8f?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=634&amp;q=80" />
                        </div>
                        <div class="w-full px-4 ml-auto mr-auto md:w-5/12">
                            <div class="md:pr-12">
                                <div class="inline-flex items-center justify-center w-16 h-16 p-3 mb-6 text-center text-pink-600 bg-pink-300 rounded-full shadow-lg">
                                    <i></i>
                                </div>
                                <h2 class="text-3xl font-semibold dark:text-white">A growing company</h2>
                                <p class="mt-4 text-lg leading-relaxed text-gray-600 dark:text-slate-200">
                                    The extension comes with three pre-built pages to help you get
                                    started faster. You can change the text and images and you\'re
                                    good to go.
                                </p>
                                <ul class="mt-6 list-none">
                                    <li class="py-2">
                                        <div class="flex items-center">
                                            <div>
                                                <span class="inline-block px-2 py-1 mr-3 text-xs font-semibold text-pink-600 uppercase bg-pink-200 rounded-full"><i></i></span>
                                            </div>
                                            <div>
                                                <h3 class="text-gray-600 dark:text-slate-200">
                                                    Carefully crafted components
                                                </h3>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="py-2">
                                        <div class="flex items-center">
                                            <div>
                                                <span class="inline-block px-2 py-1 mr-3 text-xs font-semibold text-pink-600 uppercase bg-pink-200 rounded-full"><i></i></span>
                                            </div>
                                            <div>
                                                <h3 class="text-gray-600 dark:text-slate-200">Amazing page examples</h3>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="py-2">
                                        <div class="flex items-center">
                                            <div>
                                                <span class="inline-block px-2 py-1 mr-3 text-xs font-semibold text-pink-600 uppercase bg-pink-200 rounded-full"><i></i></span>
                                            </div>
                                            <div>
                                                <h3 class="text-gray-600 dark:text-slate-200">Dynamic components</h3>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="relative block pb-20 bg-gray-900">
                <div class="absolute top-0 left-0 right-0 bottom-auto w-full -mt-20 overflow-hidden pointer-events-none" style="height: 80px;">
                    <svg class="absolute bottom-0 overflow-hidden" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none" version="1.1" viewBox="0 0 256 10" x="0" y="0">
                        <polygon class="text-gray-900 fill-current" points="256 0 256 10 0 10"></polygon>
                    </svg>
                </div>
                <div class="container px-4 mx-auto lg:pt-24 lg:pb-64">
                    <div class="flex flex-wrap justify-center text-center">
                        <div class="w-full px-4 lg:w-6/12">
                            <h2 class="text-4xl font-semibold text-white">Build something</h2>
                            <p class="mt-4 mb-4 text-lg leading-relaxed text-gray-200">
                                Put the potentially record low maximum sea ice extent tihs year
                                down to low ice. According to the National Oceanic and
                                Atmospheric Administration, Ted, Scambos.
                            </p>
                        </div>
                    </div>
                    <div class="flex flex-wrap justify-center mt-12">
                        <div class="w-full px-4 text-center lg:w-3/12">
                            <div class="inline-flex items-center justify-center w-12 h-12 p-3 text-gray-900 bg-white rounded-full shadow-lg dark:bg-slate-800">
                                <i></i>
                            </div>
                            <h2 class="mt-5 text-xl font-semibold text-white">
                                Excelent Services
                            </h2>
                            <p class="mt-2 mb-4 text-gray-200">
                                Some quick example text to build on the card title and make up
                                the bulk of the card\'s content.
                            </p>
                        </div>
                        <div class="w-full px-4 text-center lg:w-3/12">
                            <div class="inline-flex items-center justify-center w-12 h-12 p-3 text-gray-900 bg-white rounded-full shadow-lg dark:bg-slate-800">
                                <i></i>
                            </div>
                            <h3 class="mt-5 text-xl font-semibold text-white">
                                Grow your market
                            </h3>
                            <p class="mt-2 mb-4 text-gray-200">
                                Some quick example text to build on the card title and make up
                                the bulk of the card\'s content.
                            </p>
                        </div>
                        <div class="w-full px-4 text-center lg:w-3/12">
                            <div class="inline-flex items-center justify-center w-12 h-12 p-3 text-gray-900 bg-white rounded-full shadow-lg dark:bg-slate-800">
                                <i></i>
                            </div>
                            <h3 class="mt-5 text-xl font-semibold text-white">Launch time</h3>
                            <p class="mt-2 mb-4 text-gray-200">
                                Some quick example text to build on the card title and make up
                                the bulk of the card\'s content.
                            </p>
                        </div>
                    </div>
                </div>
            </section>
            <section class="relative block py-24 bg-gray-900 lg:pt-0">
                <div class="container px-4 mx-auto">
                    <div class="flex flex-wrap justify-center -mt-48 lg:-mt-64">
                        <div class="w-full px-4 lg:w-6/12">
                            <div class="relative flex flex-col w-full min-w-0 mb-6 break-words bg-gray-300 rounded-lg shadow-lg">
                                <form action="#" method="post" enctype="multipart/form-data" class="flex-auto p-5 lg:p-10">
                                    <h3 class="text-2xl font-semibold">Want to work with us?</h3>
                                    <p class="mt-1 mb-4 leading-relaxed text-gray-600">
                                        Complete this form and we will get back to you in 24 hours.
                                    </p>
                                    <div class="relative w-full mt-8 mb-3">
                                        <label class="block mb-2 text-xs font-bold text-gray-700 uppercase" for="full-name">Full Name</label><input type="text" class="w-full px-3 py-3 text-sm text-gray-700 placeholder-gray-400 bg-white border-0 rounded shadow dark:text-white dark:bg-slate-800 focus:outline-none focus:ring" placeholder="Full Name" style="transition: all 0.15s ease 0s;" />
                                    </div>
                                    <div class="relative w-full mb-3">
                                        <label class="block mb-2 text-xs font-bold text-gray-700 uppercase" for="email">Email</label><input type="email" class="w-full px-3 py-3 text-sm text-gray-700 placeholder-gray-400 bg-white border-0 rounded shadow dark:text-white dark:bg-slate-800 focus:outline-none focus:ring" placeholder="Email" style="transition: all 0.15s ease 0s;" />
                                    </div>
                                    <div class="relative w-full mb-3">
                                        <label class="block mb-2 text-xs font-bold text-gray-700 uppercase" for="message">Message</label><textarea rows="4" cols="80" class="w-full px-3 py-3 text-sm text-gray-700 placeholder-gray-400 bg-white border-0 rounded shadow dark:text-white dark:bg-slate-800 focus:outline-none focus:ring" placeholder="Type a message..."></textarea>
                                    </div>
                                    <div class="mt-6 text-center">
                                        <button class="px-6 py-3 mb-1 mr-1 text-sm font-bold text-white uppercase bg-gray-900 rounded shadow outline-none active:bg-gray-700 hover:shadow-lg focus:outline-none" type="submit" style="transition: all 0.15s ease 0s;">
                                            {{ __(\'Send Message\') }}
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>',
            'layout_id' => 1,
        ]);
        Page::create([
            'title' => [
                'en' => 'Terms of Service',
                'es' => 'Términos del servicio',
                'fr' => 'Conditions d\'utilisation',
            ],
            'seo_title' => [
                'en' => 'Terms of Service',
                'es' => 'Términos del servicio',
                'fr' => 'Conditions d\'utilisation',
            ],
            'content' => '<h1>{{ __(\'Terms of Service\') }}</h1>
                <p>Edit this file to define the terms of service for your application.</p>',
            'layout_id' => 2,
        ]);
        Page::create([
            'title' => [
                'en' => 'Privacy Policy',
                'es' => 'Política de Privacidad',
                'fr' => 'Politique de confidentialité',
            ],
            'seo_title' => [
                'en' => 'Privacy Policy',
                'es' => 'Política de Privacidad',
                'fr' => 'Politique de confidentialité',
            ],
            'content' => '<h1>{{ __(\'Privacy Policy\') }}</h1>
                <p>Edit this file to define the terms of service for your application.</p>',
            'layout_id' => 2,
        ]);
    }
}
