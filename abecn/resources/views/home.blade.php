<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ABECN - Home</title>
</head>
<body>
    <header>
        <div>
            <div>
                <a href="#">
                    <img src="" alt="ABECN logo">
                </a>
                <div class="hamburger-menu">
                    <div>
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </div>
            </div>
            <nav>
                <ul>
                    <li><a href="#">Home</a></li>
                    <li>
                        <a href="#">
                            Membership Info
                        </a>
                        <ul>
                            <li><a href="#">Sponsors</a></li>
                            <li><a href="#">Member Directory</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Resources</a></li>
                    <li><a href="#">Events</a></li>
                    <li>
                        <a href="#">
                            About Us
                        </a>
                        <ul>
                            <li><a href="#">Committees</a></li>
                            <li><a href="#">Board of Directors</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Contact</a></li>
                </ul>
                <ul>
                    <li><a href="#">Login</a></li>
                    <li>
                        {{-- Search --}}
                    </li>
                </ul>
            </nav>
        </div>
    </header>
    <main>
        <section>
            <div>
                <h1>ALBERTA BUILDING ENVELOPE COUNCIL NORTH</h1>
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

            <p>{{ $user->first_name }}</p>

        @endforeach
    </main>
    <footer>
        <div>
            <a href="#">
                <img src="" alt="ABECN logo">
            </a>
            <ul>
                <li><a href="#">PRIVACY</a></li>
                <li><a href="#">COPYRIGHT</a></li>
                <li><a href="#">SITEMAP</a></li>
                <li><a href="#">CONTACT US</a></li>
            </ul>
            <form action="#">
                <h3>SIGN UP FOR OUR NEWSLETTER</h3>
                <label for="name">Full Name</label>
                <input type="text" name="name">
                <label for="email">Email</label>
                <input type="email" name="email">
                <input type="submit" name="submit" value="SIGN UP">
            </form>
        </div>
    </footer>
</body>
</html>