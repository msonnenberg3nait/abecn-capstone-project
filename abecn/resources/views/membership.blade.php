<x-layout>
    <main>
        <!-- <section class="membership-banner">
            <div class="membership-text">
                <h1>ABECN Membership</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
            </div>
            <div class="img-overlap">

            </div>
        </section>
        <section class="plans">
            <h2>Choose Your Plan</h2>
            <div class="plans-card">
                <div class="individual">
                    <a href="/register">Individual</a>
                </div>
                <div class="student">
                    <a href="/register">Student</a>
                </div>
                <div class="price">

                </div>
                <ul class="plan-benefits">
                    <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</li>
                    <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</li>
                    <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</li>
                    <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</li>
                </ul>
            </div>
        </section> -->
        
        <div class="pricing-table-2 bg-gray-800 py-6 md:py-12">
            <div class="container mx-auto px-4">

                <div class="max-w-3xl mx-auto text-center">
                    <h1 class="text-3xl md:text-4xl font-medium text-white mb-4 md:mb-6">ABECN Membership</h1>
                    <p class="text-gray-500 xl:mx-12">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                </div>

                <div class="pricing-plans lg:flex lg:-mx-4 mt-6 md:mt-12">

                    {{-- Membership Plans--}}
                    @foreach ($memberships as $membership)
                    <div class="pricing-plan-wrap lg:w-1/2 my-4 md:my-6">
                        <div class="pricing-plan border-t-4 border-solid border-white bg-white text-center max-w-sm mx-auto hover:border-indigo-600 transition-colors duration-300">
                        <div class="p-6 md:py-8">
                            <h2 class="font-medium leading-tight text-2xl mb-2">{{ $membership->name() }}</h2>
                        </div>
                        <div class="pricing-amount bg-indigo-100 p-6 transition-colors duration-300">
                            <div class=""><span class="text-4xl font-semibold">{{ $membership->price() }}</span> {{ $membership->abbreviation() }}</div>
                        </div>
                        <div class="p-6">
                            <h3 class="font-semibold leading-tight text-xl mb-2" >As a member you will benefit:</h3>
                            <ul class="leading-loose">
                            <li>Network with industry leaders</li>
                            <li>Share innovation and technology</li>
                            <li>Discuss new concepts and Ideas</li>
                            <li>Bi-monthly meetings, sminars, and workshops; introducing leading-edge technology and products</li>
                            <li>Your voice will be heard</li>
                            </ul>
                            <div class="mt-6 py-4">
                            <a href="{{ route('register', ['membership' => $membership->stripeName()]) }}" class="px-6 py-3 bg-indigo-600 text-xl text-white py-2 px-6 rounded hover:bg-indigo-700 transition-colors duration-300">Become A Member</a>
                            
                            </div>
                        </div>
                        </div>
                    </div>
                    @endforeach

                </div>

            </div>
        </div>
    </main>
</x-layout>