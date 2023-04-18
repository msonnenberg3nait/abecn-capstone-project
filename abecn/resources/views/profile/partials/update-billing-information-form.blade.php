<div class="update-profile-form">
    <div>
        <h2 class="text-3xl font-medium">
            {{ __('Billing Information') }}
        </h2>

        <p class="mt-1 text-sm">
            {{ __("Update your account's billing information.") }}
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
                    <x-input-label for="name" :value="__('Cardholder Name')" />
                    <x-text-input id="name" name="name" type="text" class="mt-1 block w-full" :value="old('name', $user->name)" required autofocus />
                    <x-input-error class="mt-2" :messages="$errors->get('name')" />
                </div>
                <div>
                    <x-input-label for="line1" :value="__('Street, PO Box, or Company name')" />
                    <x-text-input type="text" class="block mb-4 w-full" name="line1" id="line1" :value="old('line1', $user->line1)" />
                    <x-input-error :messages="$errors->get('line1')" class="mt-2" />
                </div>
                <div>
                    <x-input-label for="line2" :value="__('Apartment, suite, unit, or building')" />
                    <x-text-input type="text" class="block mb-4 w-full" name="line2" id="line2" :value="old('line2', $user->line2)" />
                    <x-input-error :messages="$errors->get('line2')" class="mt-2" />
                </div>
                <div>
                    <x-input-label for="city" :value="__('City')" />
                    <x-text-input type="text" class="block mb-4 w-full" name="city" id="city" :value="old('city', $user->city)" />
                    <x-input-error :messages="$errors->get('city')" class="mt-2" />
                </div>
            </div>
            <div class="space-y-6 w-full">
                <div>
                    <x-input-label for="state" :value="__('Province')" />
                    <x-text-input type="text" class="block mb-4 w-full" name="state" id="state" :value="old('state', $user->state)" />
                    <x-input-error :messages="$errors->get('state')" class="mt-2" />
                </div>
                <div>
                    <x-input-label for="country" :value="__('Country')" />
                    <x-text-input type="text" class="block mb-4 w-full" name="country" id="country" :value="old('country', $user->country)" />
                    <x-input-error :messages="$errors->get('country')" class="mt-2" />
                </div>
                <div>
                    <x-input-label for="postal_code" :value="__('Postal Code')" />
                    <x-text-input type="text" class="block mb-4 w-full" name="postal_code" id="postal_code" :value="old('postal_code', $user->postal_code)" />
                    <x-input-error :messages="$errors->get('postal_code')" class="mt-2" />
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

            @if (session('status') === 'profile-updated')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-gray-600"
                >{{ __('Saved.') }}</p>
            @endif
        </div>
    </form>
</div>
