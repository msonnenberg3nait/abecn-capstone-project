<x-layout>
    <main class="inner-container">
        <div class="px-4 lg:px-5 py-8 registration-form">
            <div class="p-4 sm:p-8 bg-white shadow border rounded-lg">
                <div>
                    <h2 class="text-3xl font-medium">
                        {{ __('Account Registration') }}
                    </h2>
                </div>

                <form method="POST" action="{{ route('register') }}" x-data="{ formStep: 1 }" class="mt-6 mx-0">
                    @csrf

                    <div x-cloak x-show="formStep === 1" class="space-y-6">
                        <div>
                            <x-input-label for="firstname" :value="__('First Name')" />
                            <x-text-input type="text" class="block mt-1 w-full" name="firstname" id="firstname" :value="old('firstname')" required autofocus />
                            <x-input-error :messages="$errors->get('firstname')" class="mt-2" />
                        </div>
                        <div>
                            <x-input-label for="lastname" :value="__('Last Name')" />
                            <x-text-input type="text" class="block mt-1 w-full" name="lastname" id="lastname" :value="old('lastname')" required />
                            <x-input-error :messages="$errors->get('lastname')" class="mt-2" />
                        </div>
                        <div>
                            <x-input-label for="displayname" :value="__('Display Name')" />
                            <x-text-input type="text" class="block mt-1 w-full" name="displayname" id="displayname" :value="old('displayname')" required />
                            <x-input-error :messages="$errors->get('displayname')" class="mt-2" />
                        </div>
                        <div>
                            <x-input-label for="password" :value="__('Password')" />
                            <x-text-input type="password" class="block mt-1 w-full" name="password" id="password" required />
                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                        </div>
                        <div>
                            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />
                            <x-text-input type="password" class="block mt-1 w-full" name="password_confirmation" id="password_confirmation" required />
                            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                        </div>
                        <div>
                            <x-input-label for="email" :value="__('Email')" />
                            <x-text-input type="email" class="block mt-1 w-full" name="email" id="email" :value="old('email')" required />
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        </div>
                    </div>
                    <div x-cloak x-show="formStep === 2" class="space-y-6">
                        <div>
                            <x-input-label for="birthday" :value="__('Date of Birth')" />
                            <x-text-input type="date" class="block mt-1 w-full" name="birthday" id="birthday" :value="old('birthday')" required />
                            <x-input-error :messages="$errors->get('birthday')" class="mt-2" />
                        </div>
                        <div>
                            <x-input-label for="phone" :value="__('Phone')" />
                            <x-text-input type="tel" class="block mt-1 w-full" name="phone" id="phone" :value="old('phone')" />
                            <x-input-error :messages="$errors->get('phone')" class="mt-2" />
                        </div>
                        <div>
                            <x-input-label for="pcity" :value="__('City')" />
                            <x-text-input type="text" class="block mt-1 w-full" name="pcity" id="pcity" :value="old('pcity')" />
                            <x-input-error :messages="$errors->get('pcity')" class="mt-2" />
                        </div>
                        <div>
                            <x-input-label for="organization" :value="__('Organization')" />
                            <x-text-input type="text" class="block mt-1 w-full" name="organization" id="organization" :value="old('organization')" />
                            <x-input-error :messages="$errors->get('organization')" class="mt-2" />
                        </div>
                        <div>
                            <x-input-label for="specialty" :value="__('Specialty')" />
                            <x-text-input type="text" class="block mt-1 w-full" name="specialty" id="specialty" :value="old('specialty')" />
                            <x-input-error :messages="$errors->get('specialty')" class="mt-2" />
                        </div>
                    </div>



                    <!-- <div x-cloak x-show="formStep === 2" class="space-y-6">
                        <h2>Billing Information<h2/>
                    </div> -->
                    <div class="flex items-center justify-around mt-4">
                        <x-secondary-button
                        x-cloak
                        x-show="formStep > 1"
                        @click="formStep -= 1"
                        type="button"
                        class=""
                        >
                        Back
                        </x-secondary-button>

                        <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                            {{ __('Already registered?') }}
                        </a>

                        <x-secondary-button
                        x-cloak
                        x-show="formStep < 2"
                        @click="formStep += 1"
                        type="button"
                        >
                        Next Step
                        </x-secondary-button>

                        <x-primary-button class="ml-4" x-cloak x-show="formStep === 2">
                            {{ __('Register') }}
                        </x-primary-button>
                    </div>
                </form>
            </div>
        </div>
    </main>
</x-layout>
