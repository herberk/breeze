<div class = 'md:grid md:grid-cols-3 md:gap-6'>
    <x-section-title>
        <x-slot name="title">
            {{ __('Update Password') }}
        </x-slot>

        <x-slot name="description">
            {{ __('Ensure your account is using a long, random password to stay secure.') }}
        </x-slot>
     </x-section-title>
    <div class="mt-5 md:mt-0 md:col-span-2">
        <div class="shadow overflow-hidden sm:rounded-md">
            <div class="px-4 py-5 bg-white sm:p-6">
               <div class="grid grid-cols-6 gap-6">
                <div class="col-span-6 sm:col-span-4">
                    <x-label for="current_password" value="{{ __('Current Password') }}" />
                    <x-input name="current_password" type="password" class="mt-1 block w-full" />
                    <x-input-error for="current_password" class="mt-2" />
                </div>

                <div class="col-span-6 sm:col-span-4">
                    <x-label for="password" value="{{ __('New Password') }}" />
                    <x-input name="password" type="password" class="mt-1 block w-full"  />
                    <x-input-error for="password" class="mt-2" />
                </div>

                <div class="col-span-6 sm:col-span-4">
                    <x-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                    <x-input name="password_confirmation" type="password" class="mt-1 block w-full"  />
                    <x-input-error for="password_confirmation" class="mt-2" />
                </div>
                </div>
            </div>

         <div class="flex items-center justify-end px-4 py-3 bg-gray-50 text-right sm:px-6">
            <x-button>
                {{ __('Save') }}
            </x-button>
        </div>
        </div>
     </div>
</div>
