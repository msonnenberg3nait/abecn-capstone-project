<x-layout>
    <x-slot name="title"><?php echo $title; ?></x-slot>
    <main>
        <div class="events-banner">
            <div class="events-banner w-full mb-9 py-8 inner-container">
                <div class="events-text">
                    <h2>Events</h2>
                    <hr class="text-border w-[10%] mb-6">
                    <p class="text-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                </div>
                <div class="events-img">
                    <div class="events-img-top">
                        <img src="{{ asset('img/singer-silhouette.webp') }}" alt="Silhouette of a singer performing with a blue background">
                    </div>
                    <div class="events-img-bottom">
                        <img src="{{ asset('img/venue.webp') }}" alt="Interior view of a venue occupied with people">
                    </div>
                </div>
            </div>
        </div>

        <section class="calendar">
            <!-- events calendar goes here-->
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
                            <h4>Title Here</h4>
                            <p class="mb-3">02/05/2023 | By Author</p>
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Delectus laborum consectetur atque nobis repellendus nisi quam blanditiis sequi, iure error...</p>
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
                            <h4>Title Here</h4>
                            <p class="mb-3">02/05/2023 | By Author</p>
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Delectus laborum consectetur atque nobis repellendus nisi quam blanditiis sequi, iure error...</p>
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
                            <h4>Title Here</h4>
                            <p class="mb-3">02/05/2023 | By Author</p>
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Delectus laborum consectetur atque nobis repellendus nisi quam blanditiis sequi, iure error...</p>
                            <a class="dark-btn" href="#">Read More</a>
                        </div>
                    </div>
                    <hr class="my-9">
                </article>
            </div>
        </section>
    </main>
</x-layout>
