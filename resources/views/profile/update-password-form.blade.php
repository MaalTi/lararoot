<div class="md:grid md:grid-cols-3 md:gap-6">
    <x-section-title>
        <x-slot name="title">{{ __('Update Password') }}</x-slot>
        <x-slot name="description">{{ __('Ensure your account is using a long, random password to stay secure.') }}</x-slot>
    </x-section-title>

    <div class="mt-5 md:mt-0 md:col-span-2">
        <form method="POST" action="{{ route('admin.users.update-password', auth()->user()->id) }}">
            @csrf
            @method('PUT')
            <div class="px-4 py-5 bg-white sm:p-6 shadow {{ isset($actions) ? 'sm:rounded-tl-md sm:rounded-tr-md' : 'sm:rounded-md' }}">
                <div class="grid grid-cols-6 gap-6">
                    <div class="col-span-6 sm:col-span-4">
                        <x-label for="current_password" value="{{ __('Current Password') }}" />
                        <x-input id="current_password" type="password" class="block w-full mt-1" wire:model.defer="state.current_password" autocomplete="current-password" />
                        <x-input-error for="current_password" class="mt-2" />
                    </div>

                    <div class="col-span-6 sm:col-span-4">
                        <x-label for="password" value="{{ __('New Password') }}" />
                        <x-input id="password" type="password" class="block w-full mt-1" wire:model.defer="state.password" autocomplete="new-password" />
                        <x-input-error for="password" class="mt-2" />
                    </div>

                    <div class="col-span-6 sm:col-span-4">
                        <x-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                        <x-input id="password_confirmation" type="password" class="block w-full mt-1" wire:model.defer="state.password_confirmation" autocomplete="new-password" />
                        <x-input-error for="password_confirmation" class="mt-2" />
                    </div>
                </div>
            </div>

            <div class="flex items-center justify-end px-4 py-3 text-right shadow bg-gray-50 sm:px-6 sm:rounded-bl-md sm:rounded-br-md">
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
