<a href="{{ LaravelLocalization::localizeUrl('/') }}" {{ $attributes->merge(['class' => 'inline-flex items-center w-auto h-8 text-indigo-400 space-x-2']) }}>
    <x-application-mark class="object-contain hidden w-full h-full sm:block" />
    <span class="text-xl font-bold tracking-wide text-gray-700 uppercase dark:text-white">{{ config('app.name') }}</span>
</a>
