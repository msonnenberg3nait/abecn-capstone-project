<x-layout>
    <x-slot name="title"><?php echo $title; ?></x-slot>
    <main>
        <section class="committees-banner w-full" style="height:17rem;">
            <div class="committees-banner bg-cover bg-center flex items-center text-center justify-center align-middle h-full w-full">
            <div class="banner-text inner-container">
                <h2>Committees</h2>
            </div>
        </section>

        <section>
            <div class="publication inner-container md:flex gap-6">
                <div class="publication-text basis-1/2">
                    <h3>Publication Committee</h3>
                    <hr class="text-border w-[10%] mb-6">
                    <p>Our building envelope council publication committee is responsible for producing a high-quality technical publication each year related to building envelope design and construction. Composed of a team of industry experts, our committee works to ensure that our annual publication is timely, relevant, and based on the latest research and best practices in the field. Our publication is designed to be a valuable resource for professionals in the industry, providing insights and solutions to common challenges and helping to advance the state of the art in building envelope design and construction.</p>
                </div>
                <div class="publication-img basis-1/2">
                    <img src="{{ asset('img/3-coworkers-talking.webp') }}" alt="Three people in suits discussing">
                </div>
            </div>
        </section>
        <section>
            <div class="casual-nights inner-container md:flex flex-row-reverse gap-6">
                <div class="casual-nights-text basis-1/2">
                    <h3>Casual Nights Committee</h3>
                    <hr class="text-border w-[10%] mb-6">
                    <p>Our building envelope council casual nights committee is responsible for organizing social events and activities that allow members of our community to connect and network in a more relaxed, informal setting. Composed of a team of volunteers, our committee works to plan and coordinate a variety of fun and engaging activities throughout the year.  Whether you're a new member looking to get to know the community or a seasoned professional looking to connect with like-minded colleagues, our casual nights are a great way to get involved and make new connections in the building envelope design and construction industry.</p>
                </div>
                <div class="casual-nights-img basis-1/2">
                    <img src="{{ asset('img/group-laughing.webp') }}" alt="View of two laptops and two people reviewing documents together">
                </div>
            </div>
        </section>
    </main>
</x-layout>
