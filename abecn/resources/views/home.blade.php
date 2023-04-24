<x-layout>
    <x-slot name="title"><?php echo $title; ?></x-slot>
    <main>
        <section class="home-banner w-full" style="height:27rem;">
            <div class="home-banner bg-cover bg-center flex items-center text-center justify-center align-middle h-full w-full;">
                <div class="banner-text inner-container">
                    <div class="mb-6">
                        <h2>Alberta Building Envelope Council North</h2>
                        <p class="font-bold text-white">Connecting communities across the building envelope industry</p>
                    </div>
                    <a href="/memberinfo" class="light-btn">Become a Member</a>
                </div>
            </div>
        </section>
        <section class="mx-auto">
            <div class="welcome inner-container">
                <div class="welcome-text">
                    <h3>WELCOME TO ABEC NORTH</h3>
                    <hr class="text-border w-[15%] mb-6">
                    <p>ABECN is a non-profit society dedicated to encouraging the pursuit of excellence in the design, construction, and performance of building enclosures and to advancing educational and technical standards within the Building Envelope industry.</p>
                    <a class="dark-btn mb-6" href="/about">About Us</a>
                </div>
                <div class="welcome-img">
                    <img src="{{ asset('img/presentation.webp') }}" alt="Silhoutte of presentation">
                </div>
            </div>
        </section>
        <section>
            <div class="events inner-container">
                <h3>Latest Events</h3>
                <hr class="text-border w-[5%] mb-6">
                <article>
                    <div class="event items-center align-middle mb-6">
                        <div class="event-img">
                            <img src="{{ asset('img/group-work-laptops.webp') }}" alt="Top view of a group working on a table">
                        </div>
                        <div class="event-text">
                            <h4>Casual Night</h4>
                            <p class="mb-3">05/23/2023 | By Tanner Clark</p>
                            <p>Come out for a casual night to meet the board of ABECN and also other individuals in the building envelope industry...</p>
                            <a class="dark-btn" href="#">Read More</a>
                        </div>
                    </div>
                    <hr class="my-6">
                </article>
                <article>
                    <div class="event items-center align-middle mb-6">
                        <div class="event-img">
                            <img src="{{ asset('img/lecture.webp') }}" alt="Side view of a lecture">
                        </div>
                        <div class="event-text">
                            <h4>Roof Code Updates and Procedures</h4>
                            <p class="mb-3">05/05/2023 | By Jeff Low</p>
                            <p>Jeff Low talks about the updates to roof codes and also the new procedures to follow so that you can have the latest...</p>
                            <a class="dark-btn" href="#">Read More</a>
                        </div>
                    </div>
                    <hr class="my-6">
                </article>
                <article>
                    <div class="event items-center align-middle mb-6">
                        <div class="event-img">
                            <img src="{{ asset('img/men-discussing.webp') }}" alt="Four men discussing">
                        </div>
                        <div class="event-text">
                            <h4>The Importance Of A Strong Foundation</h4>
                            <p class="mb-3">02/05/2023 | By Taylor West</p>
                            <p>Taylor West will be talking about the importance of building a strong foundation and the different prouducts in...</p>
                            <a class="dark-btn" href="#">Read More</a>
                        </div>
                    </div>
                    <hr class="my-9">
                </article>
            </div>
        </section>
        <section class="sponsors py-12">
            <div class="inner-container">
                <h3 class="text-center">Our Sponsors</h3>
                <div class="sponsors-slider mb-6">
                    <div class="slide-track">
                    @foreach ($sponsors as $sponsor)
                        <div class="slide inline-block">
                        <a href="/sponsors/{{ $sponsor->company_name }}"><img src="{{ $sponsor->img }}" alt="{{  $sponsor->company_name }} Logo"></a>
                        </div>
                    @endforeach
                    </div>
                </div>
                <div class="flex justify-center">
                    <a href="/memberinfo" class="dark-btn">Become a Member</a>
                </div>
            </div>
        </section>
    </main>
</x-layout>
