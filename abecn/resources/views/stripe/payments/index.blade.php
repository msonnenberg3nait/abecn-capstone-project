<x-layout>
    <main>
        <div class="md:px-6 py-6 lg:px-8 py-8">
            <div class="p-4 sm:p-8 bg-white shadow border rounded-lg">
                <div>
                    <h2 class="text-lg font-medium text-gray-900">
                        {{ __('Billing Information') }}
                    </h2>
                </div>    
                <form id="payment-form" method="POST" action="{{ route('payments.store') }}" class="mt-6 mx-0">
                    @csrf

                    {{-- Plan --}}
                    <input type="hidden" name="membership" id="membership" value="{{ request('membership') }}">

                    {{-- Payment Method --}}
                    <input type="hidden" name="payment-method" id="payment-method">
                    
                    {{-- Name --}}
                    <div>
                        <x-input-label for="name" :value="__('Cardholder Name')" />
                        <x-text-input type="text" class="block mb-4 w-full" name="name" id="card-holder-name" :value="old('name')" />
                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                    </div>
                    {{-- Address --}}
                    <div>
                        <x-input-label for="line1" :value="__('Street, PO Box, or Company name')" />
                        <x-text-input type="text" class="block mb-4 w-full" name="line1" id="line1" :value="old('line1')" />
                        <x-input-error :messages="$errors->get('line1')" class="mt-2" />
                    </div>

                    <div>
                        <x-input-label for="line2" :value="__('Apartment, suite, unit, or building')" />
                        <x-text-input type="text" class="block mb-4 w-full" name="line2" id="line2" :value="old('line2')" />
                        <x-input-error :messages="$errors->get('line2')" class="mt-2" />
                    </div>

                    <div>
                        <x-input-label for="city" :value="__('City')" />
                        <x-text-input type="text" class="block mb-4 w-full" name="city" id="city" :value="old('city')" />
                        <x-input-error :messages="$errors->get('city')" class="mt-2" />
                    </div>

                    <div>
                        <x-input-label for="province" :value="__('Province')" />
                        <x-text-input type="text" class="block mb-4 w-full" name="province" id="province" :value="old('province')" />
                        <x-input-error :messages="$errors->get('province')" class="mt-2" />
                    </div>

                    <div>
                        <x-input-label for="country" :value="__('Country')" />
                        <x-text-input type="text" class="block mb-4 w-full" name="country" id="country" :value="old('country')" />
                        <x-input-error :messages="$errors->get('country')" class="mt-2" />
                    </div>

                    <div>
                        <x-input-label for="postal_code" :value="__('Postal Code')" />
                        <x-text-input type="text" class="block mb-4 w-full" name="postal_code" id="postal_code" :value="old('postal_code')" />
                        <x-input-error :messages="$errors->get('postal_code')" class="mt-2" />
                    </div>

                    <h2 class="text-lg font-medium text-gray-900">
                        {{ __('Payment Information') }}
                    </h2>

                        <div class="my-4">
                            <x-input-label for="card_no" :value="__('Card Information')" />
                            <div id="card-element" class="block mb-4 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm"></div>
                        </div>

                    <div id="card-errors" class="my-4 text-red-500"></div>
                    <div>
                        <button id="card-button" type="submit" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150" data-secret="{{ $intent->client_secret }}">
                            {{ __('Pay Now') }}
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </main>
    @push('scripts')
        <script src="https://js.stripe.com/v3/"></script>

        <script>
            const stripe = Stripe('{{ env("STRIPE_KEY") }}');

            const elements = stripe.elements();
            const cardElement = elements.create('card');

            const cardHoldername = document.getElementById('card-holder-name');
            const cardButton = document.getElementById('card-button');
            const clientSecret = cardButton.dataset.secret;

            cardElement.mount('#card-element');

            cardElement.addEventListener('change', function(e) {
                const displayError = document.getElementById('card-errors');
                if(e.error) {
                    displayError.textContent = e.error.message;
                } else {
                    displayError.textContent = '';
                }
            });

            // Handle Form Submission
            const paymentForm = document.getElementById('payment-form');

            paymentForm.addEventListener('submit', function (e){
                e.preventDefault();

                stripe
                    .handleCardSetup(clientSecret, cardElement, {
                        payment_method_data: {
                            billing_details: {
                                name: cardHoldername.value
                            }
                        }
                    })
                    .then(function(result) {
                        if (result.error) {
                            // Inform the user if there was an error.
                            var errorElement = document.getElementById('card-errors');
                            errorElement.textContent = result.error.message;
                        } else {
                            const paymentMethodInput = document.getElementById('payment-method');
                            paymentMethodInput.value = result.setupIntent.payment_method;
                            paymentForm.submit();
                        }
                    });
            });
        </script>
    @endpush
</x-layout>