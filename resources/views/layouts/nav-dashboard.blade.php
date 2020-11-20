<x-slot name="header">
        <div class="flex flex-wrap ">
            <div class="md:w-1/12">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
{{ __('Dashboard') }}
</h2>
</div>
<div class="md:w-5/12">
    <x-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
        {{ __('Dashboard') }}
    </x-nav-link>
</div>
<div class="md:w-6/12">
    {{--Mensajes de --}}
    @livewire('varios.notificaciones')
</div>
</div>

</x-slot>
