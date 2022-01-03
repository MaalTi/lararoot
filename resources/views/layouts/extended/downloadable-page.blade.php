<x-guest-layout>
    <x-slot name="seoTitle">{{ $title }}</x-slot>
    <div class="flex flex-col items-center w-full px-6 py-6 sm:pt-0">
        <div class="w-full max-w-screen-xl p-6 mt-6 overflow-hidden prose bg-white shadow-md sm:rounded-lg">
            {{ $slot }}
        </div>
        <div class="w-full max-w-screen-xl mt-6 overflow-hidden sm:rounded-lg">
            <a href="{{ route('pdfpage', [LaravelLocalization::getCurrentLocale(),request()->route()->getName()]) }}" class="inline-flex justify-center px-4 py-2 text-sm font-medium text-white border border-transparent rounded-md shadow-sm bg-cyan-600 hover:bg-cyan-700 focus:outline-none">
                {{ __('Download PDF') }}
            </a>
        </div>
    </div>
</x-guest-layout>