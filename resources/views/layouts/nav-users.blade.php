<x-slot name="header">
    <div class="flex flex-wrap ">
        <div class="md:w-1/12">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('User') }}
            </h2>
        </div>
        <div class="md:w-5/12">
            <x-nav-link href="{{ route('profile.show') }}" :active="request()->routeIs('dashboard')">
                {{ __('Profile') }}
            </x-nav-link>
        </div>
        <div class="md:w-5/12">
            <x-nav-link href="#" :active="request()->routeIs('dashboard')">
                otro menu
            </x-nav-link>
        </div>
        <div class="md:w-6/12">
            {{--Mensajes de --}}
            @livewire('varios.notificaciones')
        </div>
    </div>
</x-slot>
