<x-app-layout>
    @include('layouts.nav-users')

    <div>
        <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
                @include('profile.update-profile')
                <x-section-border />
                <div class="mt-10 sm:mt-0">
                    @include('profile.update-password')
                </div>
                <x-section-border />
                <div class="mt-10 sm:mt-0">
                    @include('profile.delete-user')
{{--                    @livewire('profile.two-factor-authentication-form')--}}
                </div>
{{--            @endif--}}
            <x-section-border />

{{--            <div class="mt-10 sm:mt-0">
                @livewire('profile.logout-other-browser-sessions-form')
            </div>

            <x-section-border />

            <div class="mt-10 sm:mt-0">
              @livewire('profile.delete-user-form')
            </div>--}}
        </div>
    </div>
</x-app-layout>
