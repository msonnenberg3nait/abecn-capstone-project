<x-app-layout>
    <main class="max-w-7xl mx-auto mt-6 sm:mt-0 px-6 sm:px-8 lg:px-10 pb-16 pt-16 md:pt-6 md:pb-32">
        <div class="px-4 lg:px-5 py-8 registration-form">
            <div class="p-4 sm:p-8 bg-white shadow border rounded-lg">
                <div>
                    <h2 class="text-3xl font-medium">
                        {{ __('Add New Sponsor') }}
                    </h2>
                </div>

                <form method="POST" action="{{ route('sponsor.store') }}" class="mt-6 mx-0">
                    @csrf

                    <div class="space-y-6">
                        <div>
                            <x-input-label for="company_name" :value="__('Company Name')" />
                            <x-text-input type="text" class="block mt-1 w-full" name="company_name" id="company_name" :value="old('company_name')" required autofocus />
                            <x-input-error :messages="$errors->get('company_name')" class="mt-2" />
                        </div>
                        <div>
                            <x-input-label for="company_contact" :value="__('Company Contact')" />
                            <x-text-input type="text" class="block mt-1 w-full" name="company_contact" id="company_contact" :value="old('company_contact')" required />
                            <x-input-error :messages="$errors->get('company_contact')" class="mt-2" />
                        </div>
                        <div>
                            <x-input-label for="primary_address" :value="__('Primary Address')" />
                            <x-text-input type="text" class="block mt-1 w-full" name="primary_address" id="primary_address" :value="old('primary_address')" required />
                            <x-input-error :messages="$errors->get('primary_address')" class="mt-2" />
                        </div>
                        <div>
                            <x-input-label for="city" :value="__('City')" />
                            <x-text-input type="text" class="block mt-1 w-full" name="city" id="city" :value="old('city')" required />
                            <x-input-error :messages="$errors->get('city')" class="mt-2" />
                        </div>
                        <div>
                            <x-input-label for="postal" :value="__('Postal')" />
                            <x-text-input type="text" class="block mt-1 w-full" name="postal" id="postal" :value="old('postal')" required />
                            <x-input-error :messages="$errors->get('postal')" class="mt-2" />
                        </div>
                        <div>
                            <x-input-label for="phone" :value="__('Phone')" />
                            <x-text-input type="tel" class="block mt-1 w-full" name="phone" id="phone" :value="old('phone')" required />
                            <x-input-error :messages="$errors->get('phone')" class="mt-2" />
                        </div>
                        <div>
                            <x-input-label for="email" :value="__('Email')" />
                            <x-text-input type="email" class="block mt-1 w-full" name="email" id="email" :value="old('email')" required />
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        </div>
                        <div>
                            <x-input-label for="bio" :value="__('Bio')" />
                            <textarea class="bio-input block mt-1 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm" name="bio" id="bio" required>{{ old('bio') }}</textarea>
                            <x-input-error :messages="$errors->get('bio')" class="mt-2" />
                        </div>
                        <x-primary-button>
                            {{ __('Submit') }}
                        </x-primary-button>
                    </div>
                </form>
            </div>
        </div>
    </main>
</x-app-layout>
