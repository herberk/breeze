<div class = 'md:grid md:grid-cols-3 md:gap-6'>
    <x-section-title>
        <x-slot name="title">
            {{ __('Profile Information') }}
        </x-slot>

        <x-slot name="description">
            {{ __('Update your account\'s profile information and email address.') }}
        </x-slot>
    </x-section-title>
    <div class="mt-5 md:mt-0 md:col-span-2">
        <form method="POST" action="{{ url("/user/update/{$user->id}") }}">
        {{ method_field('PUT') }}
        @csrf <!-- {{ csrf_field() }} -->
            <div class="shadow overflow-hidden sm:rounded-md">
                <div class="px-4 py-5 bg-white sm:p-6">
                    <div class="grid grid-cols-6 gap-6">
                        <div class="col-span-6 sm:col-span-4">
                            <x-label for="nickname" value="{{ __('Nickname') }}" />
                            <x-input name="nickname" type="text" class="mt-1 block w-full" value="{{ old('nickname', $user->nickname) }}" />
                            <x-input-error for="nickname" class="mt-2" />
                        </div>
                        <!-- Name -->
                        <div class="col-span-6 sm:col-span-4">
                            <x-label for="name" value="{{ __('Name') }}" />
                            <x-input name="name" type="text" class="mt-1 block w-full"  value="{{ old('name', $user->name) }}" />
                            <x-input-error for="name" class="mt-2" />
                        </div>
                        <!-- Email -->
                        <div class="col-span-6 sm:col-span-4">
                            <x-label for="email" value="{{ __('Email') }}" />
                            <x-input name="email" type="email" class="mt-1 block w-full" value="{{ old('email', $user->email) }}"/>
                            <x-input-error for="email" class="mt-2" />
                        </div>
                    </div>
                </div>
                <div class="flex items-center justify-end px-4 py-3 bg-gray-50 text-right sm:px-6">
                    <x-button>
                        {{ __('Save') }}
                    </x-button>
                </div>
            </div>
        </form>
    </div>
</div>
