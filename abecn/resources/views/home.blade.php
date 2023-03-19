<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ABECN - Home</title>

    <!-- Stylesheets -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/modern-reset.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/styles.css') }}">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Montserrat:wght@300;400&display=swap" rel="stylesheet">

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
</head>
<body>
    <header>
        <div
        class="outer-nav flex"
        x-data="{ open: false }"
        @resize.window="
            width = (window.innerWidth > 0)
            ? window.innerWidth : screen.width;
            if (width >= 760) {
                open = true
            } else {
                open = false
            }
        ">
            <div class="inner-nav flex">
                <a href="#" class="logo">
                    <img src="{{ asset('img/ABECN_PNG.webp') }}" alt="ABECN logo">
                </a>
                <div class="hamburger-menu" x-on:click="open = !open" :class="open ? 'hamburger-open' : ''">
                    <div>
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </div>
            </div>
            <nav x-show="window.innerWidth >= 760 ? true: open">
                <ul>
                    <li><a href="#">Home</a></li>
                    <li>
                        <a href="#">
                            Membership Info
                        </a>
                        <ul class="member-info-dropdown">
                            <li>
                                <a href="#">
                                    <svg viewBox="0 0 24 24" fill="none">
                                        <path d="M3 4C3 3.44772 3.44771 3 4 3C4.55229 3 5 3.44772 5 4L5 11C5 11.7956 5.31607 12.5587 5.87868 13.1213C6.44129 13.6839 7.20435 14 8 14H17.5858L14.2929 10.7071C13.9024 10.3166 13.9024 9.68342 14.2929 9.29289C14.6834 8.90237 15.3166 8.90237 15.7071 9.29289L20.7071 14.2929C21.0976 14.6834 21.0976 15.3166 20.7071 15.7071L15.7071 20.7071C15.3166 21.0976 14.6834 21.0976 14.2929 20.7071C13.9024 20.3166 13.9024 19.6834 14.2929 19.2929L17.5858 16H8C6.67392 16 5.40215 15.4732 4.46447 14.5355C3.52678 13.5979 3 12.3261 3 11V4Z"/>
                                    </svg>
                                    Sponsors
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <svg viewBox="0 0 24 24" fill="none">
                                        <path d="M3 4C3 3.44772 3.44771 3 4 3C4.55229 3 5 3.44772 5 4L5 11C5 11.7956 5.31607 12.5587 5.87868 13.1213C6.44129 13.6839 7.20435 14 8 14H17.5858L14.2929 10.7071C13.9024 10.3166 13.9024 9.68342 14.2929 9.29289C14.6834 8.90237 15.3166 8.90237 15.7071 9.29289L20.7071 14.2929C21.0976 14.6834 21.0976 15.3166 20.7071 15.7071L15.7071 20.7071C15.3166 21.0976 14.6834 21.0976 14.2929 20.7071C13.9024 20.3166 13.9024 19.6834 14.2929 19.2929L17.5858 16H8C6.67392 16 5.40215 15.4732 4.46447 14.5355C3.52678 13.5979 3 12.3261 3 11V4Z"/>
                                    </svg>
                                    Member Directory
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li><a href="#">Resources</a></li>
                    <li><a href="#">Events</a></li>
                    <li>
                        <a href="#">
                            About Us
                        </a>
                        <ul class="about-dropdown">
                            <li>
                                <a href="#">
                                    <svg viewBox="0 0 24 24" fill="none">
                                        <path d="M3 4C3 3.44772 3.44771 3 4 3C4.55229 3 5 3.44772 5 4L5 11C5 11.7956 5.31607 12.5587 5.87868 13.1213C6.44129 13.6839 7.20435 14 8 14H17.5858L14.2929 10.7071C13.9024 10.3166 13.9024 9.68342 14.2929 9.29289C14.6834 8.90237 15.3166 8.90237 15.7071 9.29289L20.7071 14.2929C21.0976 14.6834 21.0976 15.3166 20.7071 15.7071L15.7071 20.7071C15.3166 21.0976 14.6834 21.0976 14.2929 20.7071C13.9024 20.3166 13.9024 19.6834 14.2929 19.2929L17.5858 16H8C6.67392 16 5.40215 15.4732 4.46447 14.5355C3.52678 13.5979 3 12.3261 3 11V4Z"/>
                                    </svg>
                                    Committees
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <svg viewBox="0 0 24 24" fill="none">
                                        <path d="M3 4C3 3.44772 3.44771 3 4 3C4.55229 3 5 3.44772 5 4L5 11C5 11.7956 5.31607 12.5587 5.87868 13.1213C6.44129 13.6839 7.20435 14 8 14H17.5858L14.2929 10.7071C13.9024 10.3166 13.9024 9.68342 14.2929 9.29289C14.6834 8.90237 15.3166 8.90237 15.7071 9.29289L20.7071 14.2929C21.0976 14.6834 21.0976 15.3166 20.7071 15.7071L15.7071 20.7071C15.3166 21.0976 14.6834 21.0976 14.2929 20.7071C13.9024 20.3166 13.9024 19.6834 14.2929 19.2929L17.5858 16H8C6.67392 16 5.40215 15.4732 4.46447 14.5355C3.52678 13.5979 3 12.3261 3 11V4Z"/>
                                    </svg>
                                    Board of Directors
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li><a href="#">Contact</a></li>
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