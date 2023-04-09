<x-layout>
    <main>
        <div class="pricing-table-2 md:py-12">
            <div>
                <div class="membership">
                    <div class="membership w-full mb-9 py-8 inner-container">
                        <div class="membership-text">
                            <h1 class="md:text-4xl text-white mb-4 md:mb-6">ABECN Membership</h1>
                            <p class="text-white mb-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        </div>
                        <div class="membership-img">
                            <div class="membership-img-top">
                                <img class="w-3/4" src="{{ asset('img/meeting.png') }}" alt="Group Discussion">
                            </div>
                            <div class="membership-img-bottom">
                                <img src="{{ asset('img/buildings-sky.jpg') }}" alt="Buildings against the sky">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="pricing-plans lg:flex lg:-mx-4 mt-12 md:mt-12">

                    {{-- Membership Plans--}}
                    @foreach ($memberships as $membership)
                    <div class="pricing-plan-wrap lg:w-1/2 my-4 md:my-6">
                        <div class="pricing-plan border-t-4 border-solid border-white bg-sky-100 text-center max-w-sm mx-auto hover:border-indigo-600 transition-colors duration-300">
                        <div class="p-6 md:py-8">
                            <h2 class="leading-tight mb-2">{{ $membership->name() }}</h2>
                        </div>
                        <div class="pricing-amount bg-slate-200 p-6 transition-colors duration-300">
                            <div class=""><span class="font-semibold">{{ $membership->price() }}</span> {{ $membership->abbreviation() }}</div>
                        </div>
                        <div class="p-6">
                            <h3 class="font-semibold leading-tight mb-2" >As a member you will benefit:</h3>
                            <ul class="leading-loose">
                            <li>Network with industry leaders</li>
                            <li>Share innovation and technology</li>
                            <li>Discuss new concepts and Ideas</li>
                            <li>Bi-monthly meetings, sminars, and workshops; introducing leading-edge technology and products</li>
                            <li>Your voice will be heard</li>
                            </ul>
                            <div class="mt-6 py-4">
                            <a href="{{ route('register', ['membership' => $membership->stripeName()]) }}" class="dark-btn">Become A Member</a>
                            
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