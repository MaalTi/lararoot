<x-app-layout>
    <div class="container py-4">
        <div class="row justify-content-center">
            <div class="w-full">
                <div class="overflow-hidden duration-500 bg-white shadow dark:bg-gray-800 sm:rounded-lg">
                    <div class="text-center">
                        <div class="py-5">
                            <p class="text-lg font-semibold">
                                {{ __('You are logged in!') }}
                            </p>

                            <p>
                                {{ __('Welcome to your dashboard!') }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>