<div class="md:grid md:grid-cols-3 md:gap-6">
    <x-section-title>
        <x-slot name="title">{{ __('Profile Information') }}</x-slot>
        <x-slot name="description">{{ __('Update your account\'s profile information and email address.') }}</x-slot>
    </x-section-title>

    <div class="mt-5 md:mt-0 md:col-span-2">
        <form method="POST" action="{{ route('admin.users.update', auth()->user()->id) }}">
            @csrf
            @method('PUT')
            <div
                class="px-4 py-5 bg-white sm:p-6 shadow {{ isset($actions) ? 'sm:rounded-tl-md sm:rounded-tr-md' : 'sm:rounded-md' }}">
                <div class="grid grid-cols-6 gap-6">
                    <div class="col-span-6 sm:col-span-4">
                        <x-label for="name" value="{{ __('Name') }}" />
                        <x-input id="name" type="text" class="block w-full mt-1" value="{{ auth()->user()->name }}" autocomplete="name" />
                        <x-input-error for="name" class="mt-2" />
                    </div>
                    
                    <!-- Email -->
                    <div class="col-span-6 sm:col-span-4">
                        <x-label for="email" value="{{ __('Email') }}" />
                        <x-input id="email" type="email" class="block w-full mt-1" value="{{ auth()->user()->email }}" autocomplete="email" />
                        <x-input-error for="email" class="mt-2" />
                    </div>
                </div>
            </div>

            <div
                class="flex items-center justify-end px-4 py-3 text-right shadow bg-gray-50 sm:px-6 sm:rounded-bl-md sm:rounded-br-md">
                <x-action-message class="mr-3" on="saved">
                    {{ __('Saved.') }}
                </x-action-message>
                
                <x-button class="text-xs">
                    {{ __('Save') }}
                </x-button>
            </div>
        </form>
    </div>
</div>