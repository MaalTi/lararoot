<div class="flex flex-col items-center min-h-screen px-2 pt-6 pb-3 bg-gray-100 sm:justify-center sm:px-0 sm:pt-0">
    <div>
        {{ $logo }}
    </div>

    <div {{ $attributes->merge(['class' => 'w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg']) }}>
        {{ $slot }}
    </div>
</div>
