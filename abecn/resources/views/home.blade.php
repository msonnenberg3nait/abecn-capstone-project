<x-layout>
    <main>
        <section class="w-full bg-cover bg-center bg-home mb-9" style="height:27rem;">
            <div class="flex items-center text-center justify-center align-middle h-full w-full bg-gray-900 bg-opacity-50 background-image: {{ asset('img/skyscrapers.jpg') }};"> 
                <div class="banner-text inner-container">
                    <div class="mb-4">
                        <h1>ALBERT BUILDING ENVELOPE COUNCIL NORTH</h1>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
                    </div>
                    <a href="#" class="home-btn mt-4 px-4 py-2 text-white text-sm uppercase font-medium rounded focus:outline-none">BECOME A MEMBER</a>
                </div>
            </div>
        </section>
        <section class="welcome justify-between inner-container">
            <div class="welcome-text">
                <h2>WELCOME TO ABEC NORTH</h2>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aperiam, repellat. Libero, incidunt, delectus sapiente cum officia, reprehenderit rem animi quis assumenda amet sed? Eos quibusdam quas quo repellat dicta soluta!</p>
                <a href="#">ABOUT US</a>
            </div>
            <div class="welcome-img">
                <img src="{{ asset('img/presentation.png') }}" alt="Silhoutte of presentation">
            </div>
        </section>
        <section class="inner-container">
            <h2>LATEST EVENTS</h2>
            <article class="justify-between items-center justify-center align-middle mb-4">
                <div class="event-img">
                    <img src="{{ asset('img/group-work-laptops.jpg') }}" alt="Top view of a group working on a table">
                </div>
                <div class="event-text">
                    <h3>TITLE HERE</h3>
                    <p>02/05/2023 | By Author</p>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Delectus laborum consectetur atque nobis repellendus nisi quam blanditiis sequi, iure error...</p>
                    <a href="#">READ MORE</a>
                </div>
            </article>
            <article class="justify-between items-center justify-center align-middle mb-4">
                <div class="event-img">
                    <img src="{{ asset('img/lecture.jpg') }}" alt="ABECN logo">
                </div>
                <div class="event-text">
                    <h3>TITLE HERE</h3>
                    <p>02/05/2023 | By Author</p>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Delectus laborum consectetur atque nobis repellendus nisi quam blanditiis sequi, iure error...</p>
                    <a href="#">READ MORE</a>
                </div>
            </article>
            <article class="justify-between items-center justify-center align-middle mb-4">
                <div class="event-img">
                    <img src="{{ asset('img/men-discussing.jpg') }}" alt="ABECN logo">
                </div>
                <div class="event-text">
                    <h3>TITLE HERE</h3>
                    <p>02/05/2023 | By Author</p>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Delectus laborum consectetur atque nobis repellendus nisi quam blanditiis sequi, iure error...</p>
                    <a href="#">READ MORE</a>
                </div>
            </article>
        </section>
        <section class="sponsors mb-4">
            <div class="inner-container">
                <h2>OUR SPONSORS</h2>
                <div class="flex overflow-x-scroll pb-10">
                    <div class="flex flex-nowrap">
                        <div class="inline-block px-3">
                            <img src="{{ asset('img/london-eye.webp') }}" alt="ABECN logo">
                        </div>
                        <div class="inline-block px-3">
                            <img src="{{ asset('img/london-eye.webp') }}" alt="ABECN logo">
                        </div>
                        <div class="inline-block px-3">
                            <img src="{{ asset('img/london-eye.webp') }}" alt="ABECN logo">
                        </div>
                        <div class="inline-block px-3">
                            <img src="{{ asset('img/london-eye.webp') }}" alt="ABECN logo">
                        </div>
                        <div class="inline-block px-3">
                            <img src="{{ asset('img/london-eye.webp') }}" alt="ABECN logo">
                        </div>
                        <div class="inline-block px-3">
                            <img src="{{ asset('img/london-eye.webp') }}" alt="ABECN logo">
                        </div>
                    </div>
                </div>
                <a href="#">MORE DETAILS</a>
                <!-- @foreach ($users as $user)
        
                    <p><strong>First Name:</strong> {{ $user->first_name }}</p>
                    <p><strong>Group Name:</strong> {{ $user->group->name }}</p>
                    <p><strong>Membership Name:</strong> {{ $user->membership->name }}</p>
                    <br>
        
                @endforeach -->
            </div>
        </section>
    </main>
</x-layout>
