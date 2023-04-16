<x-layout>
    <main>
        <section class="pricing-plans lg:flex lg:-mx-4 mt-12 md:mt-12">
            {{-- Membership Plans--}}
            @foreach ($memberships as $membership)
            <div class="pricing-plan-wrap lg:w-1/2 my-4 md:my-6">
                <div class="pricing-plan border-t-4 border-solid border-white bg-sky-100 text-center max-w-sm mx-auto hover:border-indigo-600 transition-colors duration-300 mb-">
                    <div class="p-6 md:py-8">
                        <h3 class="leading-tight mb-2">{{ $membership->name() }}</h3>
                    </div>
                    <div class="pricing-amount bg-slate-200 p-6 transition-colors duration-300">
                        <div class=""><span class="font-semibold">{{ $membership->price() }}</span> {{ $membership->abbreviation() }}</div>
                    </div>
                    <div class="p-6">
                        <h4 class="font-semibold leading-tight mb-2" >As a member you will benefit:</h4>
                        <ul class="leading-loose">
                            <li>Network with industry leaders</li>
                            <li>Share innovation and technology</li>
                            <li>Discuss new concepts and Ideas</li>
                            <li>Bi-monthly meetings, sminars, and workshops; introducing leading-edge technology and products</li>
                            <li>Your voice will be heard</li>
                        </ul>
                        <div class="mt-6 py-4">
                        <a href="{{ route('payments', ['membership' => $membership->stripeName()]) }}" class="dark-btn">Become A Member</a>                         
                        </div>
                    </div>
                </div>
            </div>
            @endforeach

        </section>
    </main>
</x-layout>