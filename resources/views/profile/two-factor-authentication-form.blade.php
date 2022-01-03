<x-action-section>
    <x-slot name="title">
        {{ __('Two Factor Authentication') }}
    </x-slot>

    <x-slot name="description">
        {{ __('Add additional security to your account using two factor authentication.') }}
    </x-slot>

    <x-slot name="content">
        <h3 class="text-lg font-medium text-gray-900">
            @if (auth()->user()->two_factor_secret)
            {{ __('You have enabled two factor authentication.') }}
            @else
            {{ __('You have not enabled two factor authentication.') }}
            @endif
        </h3>

        <div class="max-w-xl mt-3 text-sm text-gray-600">
            <p>
                {{ __('When two factor authentication is enabled, you will be prompted for a secure, random token during authentication. You may retrieve this token from your phone\'s Google Authenticator application.') }}
            </p>
        </div>

        @if (auth()->user()->two_factor_secret)
        <div class="max-w-xl mt-4 text-sm text-gray-600">
            <p class="font-semibold">
                {{ __('Two factor authentication is now enabled. Scan the following QR code using your phone\'s authenticator application.') }}
            </p>
        </div>

        <div class="mt-4">
            {!! auth()->user()->twoFactorQrCodeSvg() !!}
        </div>

        <div class="max-w-xl mt-4 text-sm text-gray-600">
            <p class="font-semibold">
                {{ __('Store these recovery codes in a secure password manager. They can be used to recover access to your account if your two factor authentication device is lost.') }}
            </p>
        </div>

        <div class="grid max-w-xl gap-1 px-4 py-4 mt-4 font-mono text-sm bg-gray-100 rounded-lg">
            @foreach (json_decode(decrypt(auth()->user()->two_factor_recovery_codes), true) as $code)
            <div>{{ $code }}</div>
            @endforeach
        </div>
        @endif

        <div class="grid grid-cols-6 gap-6 mt-5">
            <div class="flex flex-wrap col-span-6 gap-2 xl:col-span-4">
                @if (! auth()->user()->two_factor_secret)
                <form method="POST" action="{{ url('user/two-factor-authentication') }}">
                    @csrf
                    <x-button class="text-xs">
                        {{ __('Enable Two-Factor Authentication') }}
                    </x-button>
                </form>
                @else
                <form method="POST" action="{{ url('user/two-factor-recovery-codes') }}">
                    @csrf
                    <x-button class="text-xs">
                        {{ __('Regenerate Recovery Codes') }}
                    </x-button>
                </form>

                <form method="POST" action="{{ url('user/two-factor-authentication') }}">
                    @csrf
                    @method('DELETE')
                    <x-button class="text-xs">
                        {{ __('Disable Two-Factor Authentication') }}
                    </x-button>
                </form>
                @endif
            </div>
        </div>
    </x-slot>
</x-action-section>
