<x-layout>
    <main>
        <section>
            <div>
                <h1>ALBERT BUILDING ENVELOPE COUNCIL NORTH</h1>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
                <a href="#">BECOME A MEMBER</a>
            </div>
        </section>
        <section>
            <div>
                <h2>WELCOME TO ABEC NORTH</h2>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aperiam, repellat. Libero, incidunt, delectus sapiente cum officia, reprehenderit rem animi quis assumenda amet sed? Eos quibusdam quas quo repellat dicta soluta!</p>
                <a href="#">ABOUT US</a>
            </div>
        </section>
        <section>
            <div>
                <h2>LATEST EVENTS</h2>
                <article>
                    <div>
                        {{-- Image --}}
                    </div>
                    <div>
                        <h3>TITLE HERE</h3>
                        <p>02/05/2023 | By Author</p>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Delectus laborum consectetur atque nobis repellendus nisi quam blanditiis sequi, iure error...</p>
                        <a href="#">READ MORE</a>
                    </div>
                </article>
                <article>
                    <div>
                        {{-- Image --}}
                    </div>
                    <div>
                        <h3>TITLE HERE</h3>
                        <p>02/05/2023 | By Author</p>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Delectus laborum consectetur atque nobis repellendus nisi quam blanditiis sequi, iure error...</p>
                        <a href="#">READ MORE</a>
                    </div>
                </article>
                <article>
                    <div>
                        {{-- Image --}}
                    </div>
                    <div>
                        <h3>TITLE HERE</h3>
                        <p>02/05/2023 | By Author</p>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Delectus laborum consectetur atque nobis repellendus nisi quam blanditiis sequi, iure error...</p>
                        <a href="#">READ MORE</a>
                    </div>
                </article>
            </div>
        </section>
        <section>
            <div>
                <h2>OUR SPONSORS</h2>
                <div>
                    {{-- Images --}}
                </div>
                <a href="#">MORE DETAILS</a>
            </div>
        </section>
        @foreach ($users as $user)

            <p><strong>First Name:</strong> {{ $user->first_name }}</p>
            <p><strong>Group Name:</strong> {{ $user->group->name }}</p>
            <p><strong>Membership Name:</strong> {{ $user->membership->name }}</p>
            <br>

        @endforeach
    </main>
</x-layout>
