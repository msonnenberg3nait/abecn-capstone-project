<div class="update-profile-form">
    <div>
        <h2 class="text-3xl font-medium">
            {{ __('Profile Information') }}
        </h2>

        <p class="mt-1 text-sm">
            {{ __("Update your account's profile information and email address.") }}
        </p>
    </div>

    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <form method="post" action="{{ route('profile.update') }}" class="mt-6 mx-0">
        @csrf
        @method('patch')

        <div class="md:flex gap-8">
            <div class="space-y-6 mb-6 md:mb-0 w-full">
                <div>
                    <x-input-label for="first_name" :value="__('First Name')" />
                    <x-text-input id="first_name" name="first_name" type="text" class="mt-1 block w-full" :value="old('first_name', $user->first_name)" required autofocus />
                    <x-input-error class="mt-2" :messages="$errors->get('first_name')" />
                </div>
                <div>
                    <x-input-label for="last_name" :value="__('Last Name')" />
                    <x-text-input id="last_name" name="last_name" type="text" class="mt-1 block w-full" :value="old('last_name', $user->last_name)" required />
                    <x-input-error class="mt-2" :messages="$errors->get('last_name')" />
                </div>
                <div>
                    <x-input-label for="display_name" :value="__('Display Name')" />
                    <x-text-input id="display_name" name="display_name" type="text" class="mt-1 block w-full" :value="old('display_name', $user->display_name)" required />
                    <x-input-error class="mt-2" :messages="$errors->get('display_name')" />
                </div>
                <div>
                    <x-input-label for="email" :value="__('Email')" />
                    <x-text-input id="email" name="email" type="email" class="mt-1 block w-full" :value="old('email', $user->email)" required />
                    <x-input-error class="mt-2" :messages="$errors->get('email')" />
                </div>
            </div>
            <div class="space-y-6 w-full">
                <div>
                    <x-input-label for="organization" :value="__('Organization')" />
                    <x-text-input id="organization" name="organization" type="text" class="mt-1 block w-full" :value="old('organization', $user->organization)" />
                    <x-input-error class="mt-2" :messages="$errors->get('organization')" />
                </div>
                <div>
                    <x-input-label for="specialty" :value="__('Specialty')" />
                    <x-text-input id="specialty" name="specialty" type="text" class="mt-1 block w-full" :value="old('specialty', $user->specialty)" />
                    <x-input-error class="mt-2" :messages="$errors->get('specialty')" />
                </div>
                <div>
                    <x-input-label for="phone" :value="__('Phone')" />
                    <x-text-input id="phone" name="phone" type="text" class="mt-1 block w-full" :value="old('phone', $user->phone)" />
                    <x-input-error class="mt-2" :messages="$errors->get('phone')" />
                </div>
                <div>
                    <x-input-label for="pcity" :value="__('City')" />
                    <x-text-input id="pcity" name="pcity" type="text" class="mt-1 block w-full" :value="old('pcity', $user->pcity)" />
                    <x-input-error class="mt-2" :messages="$errors->get('pcity')" />
                </div>
            </div>
        </div>

        @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
            <div>
                <p class="text-sm mt-2 text-gray-800">
                    {{ __('Your email address is unverified.') }}

                    <button form="send-verification" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        {{ __('Click here to re-send the verification email.') }}
                    </button>
                </p>

                @if (session('status') === 'verification-link-sent')
                    <p class="mt-2 font-medium text-sm text-green-600">
                        {{ __('A new verification link has been sent to your email address.') }}
                    </p>
                @endif
            </div>
        @endif

        <div class="flex items-center gap-4 mt-6">
            <x-primary-button>{{ __('Save') }}</x-primary-button>
        </div>
    </form>
</div>
