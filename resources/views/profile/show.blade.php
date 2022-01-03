<x-app-layout>
    <div>
        <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
            @if (Laravel\Fortify\Features::enabled(Laravel\Fortify\Features::updateProfileInformation()))
            @include('profile.update-profile-information-form')

            <x-section-border />
            @endif

            @if (Laravel\Fortify\Features::enabled(Laravel\Fortify\Features::updatePasswords()))
            <div class="mt-10 sm:mt-0">
                @include('profile.update-password-form')
            </div>

            <x-section-border />
            @endif

            @if (Laravel\Fortify\Features::enabled(Laravel\Fortify\Features::twoFactorAuthentication()))
            <div class="mt-10 sm:mt-0">
                @include('profile.two-factor-authentication-form')
            </div>

            <x-section-border />
            @endif

            <div class="mt-10 sm:mt-0">
                @include('profile.logout-other-browser-sessions-form')
            </div>
            
            {{-- @can(profile.delete) spatie permission to create --}}
            {{--
            <x-section-border />

            <div class="mt-10 sm:mt-0">
                @include('profile.delete-user-form')
            </div>
        </div> --}}
    </div>
</x-app-layout>