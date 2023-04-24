<x-layout>
    <x-slot name="title"><?php echo $title; ?></x-slot>
    <main>
        <div class="mt-16">
            <div class="events-banner w-full mb-9 py-8">
                <div class="events-banner-flex inner-container">
                    <div class="events-text">
                        <h2>Events</h2>
                        <hr class="text-border w-[10%] mb-6">
                        <p class="text-white">We offer a variety of events throughout the year including in-person training sessions, and industry conferences, to help you stay up-to-date on the latest trends and best practices in this important field. Our events are designed to provide you with a valuable learning experience and the opportunity to connect with industry professionals and fellow members of our council.</p>
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
                            <p class="mb-3">05/02/2023 | By Taylor West</p>
                            <p>Taylor West will be talking about the importance of building a strong foundation and the different prouducts in...</p>
                            <a class="dark-btn" href="#">Read More</a>
                        </div>
                    </div>
                    <hr class="my-9">
                </article>
            </div>
        </section>
    </main>
</x-layout>
