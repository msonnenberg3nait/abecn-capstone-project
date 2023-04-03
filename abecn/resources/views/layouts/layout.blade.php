<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'ABECN') }}</title>

    <!-- Stylesheets -->
    {{-- <link rel="stylesheet" type="text/css" href="{{ asset('css/modern-reset.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/styles.css') }}"> --}}

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Montserrat:wght@300;400&display=swap" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
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
            }
            if (width < 760) {
                open = false
            }
        ">
            <div class="inner-nav flex">
                <a href="{{ route('home') }}" class="logo">
                    <img src="{{ asset('img/ABECN_PNG.webp') }}" alt="ABECN logo">
                </a>
                <div class="hamburger-menu" x-on:click="open = !open" :class="open && 'hamburger-open'">
                    <div>
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </div>
            </div>
            <nav x-show="window.innerWidth >= 760 ? true: open">
                <ul>
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li>
                        <a href="/register">
                            Membership Info
                        </a>
                        <ul class="member-info-dropdown">
                            <li>
                                <a href="/sponsors">
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
                    <li><a href="/resources">Resources</a></li>
                    <li><a href="/events">Events</a></li>
                    <li>
                        <a href="/about">
                            About Us
                        </a>
                        <ul class="about-dropdown">
                            <li>
                                <a href="/committees">
                                    <svg viewBox="0 0 24 24" fill="none">
                                        <path d="M3 4C3 3.44772 3.44771 3 4 3C4.55229 3 5 3.44772 5 4L5 11C5 11.7956 5.31607 12.5587 5.87868 13.1213C6.44129 13.6839 7.20435 14 8 14H17.5858L14.2929 10.7071C13.9024 10.3166 13.9024 9.68342 14.2929 9.29289C14.6834 8.90237 15.3166 8.90237 15.7071 9.29289L20.7071 14.2929C21.0976 14.6834 21.0976 15.3166 20.7071 15.7071L15.7071 20.7071C15.3166 21.0976 14.6834 21.0976 14.2929 20.7071C13.9024 20.3166 13.9024 19.6834 14.2929 19.2929L17.5858 16H8C6.67392 16 5.40215 15.4732 4.46447 14.5355C3.52678 13.5979 3 12.3261 3 11V4Z"/>
                                    </svg>
                                    Committees
                                </a>
                            </li>
                            <li>
                                <a href="/directors">
                                    <svg viewBox="0 0 24 24" fill="none">
                                        <path d="M3 4C3 3.44772 3.44771 3 4 3C4.55229 3 5 3.44772 5 4L5 11C5 11.7956 5.31607 12.5587 5.87868 13.1213C6.44129 13.6839 7.20435 14 8 14H17.5858L14.2929 10.7071C13.9024 10.3166 13.9024 9.68342 14.2929 9.29289C14.6834 8.90237 15.3166 8.90237 15.7071 9.29289L20.7071 14.2929C21.0976 14.6834 21.0976 15.3166 20.7071 15.7071L15.7071 20.7071C15.3166 21.0976 14.6834 21.0976 14.2929 20.7071C13.9024 20.3166 13.9024 19.6834 14.2929 19.2929L17.5858 16H8C6.67392 16 5.40215 15.4732 4.46447 14.5355C3.52678 13.5979 3 12.3261 3 11V4Z"/>
                                    </svg>
                                    Board of Directors
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li><a href="/contact">Contact</a></li>
                </ul>
            </nav>
        </div>

        <div class="secondary-header">
            @auth
                <p>Welcome back, {{ Auth::user()->display_name }}</p>

                <a href="{{ route('profile.edit') }}">Settings</a>

                <form method="POST" action="{{ route('logout') }}" class="logout-form">
                    @csrf

                    <a href="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit();">Logout</a>
                </form>
            @else
                <a href="{{ route('login') }}">Login</a>
            @endauth
        </div>
    </header>
    <div class="container">
    {{ $slot }}
    </div>
    <footer>
        <div>
            <a href="#">
                <img src="{{ asset('img/ABECN_PNG.webp') }}" alt="ABECN logo">
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
