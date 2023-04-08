<x-layout>
    <main>
        <section class="home-banner w-full mb-9" style="height:27rem;">
            <div class="home-banner bg-cover bg-center flex items-center text-center justify-center align-middle h-full w-full;"> 
                <div class="banner-text inner-container">
                    <div class="mb-4">
                        <h1>Alberta Building Envelope Council North</h1>
                        <p class="font-bold text-white">Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
                    </div>
                    <a href="#" class="light-btn">Become a Member</a>
                </div>
            </div>
        </section>
        <section class="welcome mb-9 inner-container">
            <div class="welcome-text">
                <h2>WELCOME TO ABEC NORTH</h2>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aperiam, repellat. Libero, incidunt, delectus sapiente cum officia, reprehenderit rem animi quis assumenda amet sed? Eos quibusdam quas quo repellat dicta soluta!</p>
                <a href="#">About Us</a>
            </div>
            <div class="welcome-img">
                <img src="{{ asset('img/presentation.png') }}" alt="Silhoutte of presentation">
            </div>
        </section>
        <section class="inner-container events">
            <h2>Latest Events</h2>
            <article>
                <div class="event justify-between items-center justify-center align-middle mb-6">
                    <div class="event-img">
                        <img src="{{ asset('img/group-work-laptops.jpg') }}" alt="Top view of a group working on a table">
                    </div>
                    <div class="event-text">
                        <h3>Title Here</h3>
                        <p>02/05/2023 | By Author</p>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Delectus laborum consectetur atque nobis repellendus nisi quam blanditiis sequi, iure error...</p>
                        <a class="dark-btn" href="#">Read More</a>
                    </div>
                </div>
                <hr class="mb-6">
            </article>
            <article>
                <div class="event justify-between items-center justify-center align-middle mb-6"> 
                    <div class="event-img">
                        <img src="{{ asset('img/lecture.jpg') }}" alt="ABECN logo">
                    </div>
                    <div class="event-text">
                        <h3>Title Here</h3>
                        <p>02/05/2023 | By Author</p>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Delectus laborum consectetur atque nobis repellendus nisi quam blanditiis sequi, iure error...</p>
                        <a class="dark-btn" href="#">Read More</a>
                    </div>
                </div>
                <hr class="mb-6">
            </article>
            <article>
                <div class="event justify-between items-center justify-center align-middle mb-6">
                    <div class="event-img">
                        <img src="{{ asset('img/men-discussing.jpg') }}" alt="ABECN logo">
                    </div>
                    <div class="event-text">
                        <h3>Title Here</h3>
                        <p>02/05/2023 | By Author</p>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Delectus laborum consectetur atque nobis repellendus nisi quam blanditiis sequi, iure error...</p>
                        <a class="dark-btn" href="#">Read More</a>
                    </div>
                </div>
                <hr class="mb-9">
            </article>
        </section>
        <section class="sponsors mb-9 py-8">
            <div class="inner-container">
                <h2>Our Sponsors</h2>
                <div class="sponsors-slider">
                    <div class="slide-track">
                        <div class="slide inline-block">
                            <img src="{{ asset('img/london-eye.webp') }}" alt="ABECN logo">
                        </div>
                        <div class="slide inline-block">
                            <img src="{{ asset('img/london-eye.webp') }}" alt="ABECN logo">
                        </div>
                        <div class="slide inline-block">
                            <img src="{{ asset('img/london-eye.webp') }}" alt="ABECN logo">
                        </div>
                        <div class="slide inline-block">
                            <img src="{{ asset('img/london-eye.webp') }}" alt="ABECN logo">
                        </div>
                        <div class="slide inline-block">
                            <img src="{{ asset('img/london-eye.webp') }}" alt="ABECN logo">
                        </div>
                        <div class="slide inline-block">
                            <img src="{{ asset('img/london-eye.webp') }}" alt="ABECN logo">
                        </div>
                    </div>
                </div>
                <a href="#" class="dark-btn">Become a Member</a>
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
