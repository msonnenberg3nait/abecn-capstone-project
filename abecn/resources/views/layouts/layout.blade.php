<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name') }}{{ isset($title) ? ' - ' . $title : '' }}</title>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Montserrat:wght@500;600;700;800&display=swap" rel="stylesheet">

    <!-- Scripts -->
    <script src="https://js.stripe.com/v3/"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    @if (session()->has('success'))
        <div x-data="{ show: true }"
            x-init="setTimeout(() => show = false, 4000)"
            x-show="show"
            class="fixed z-50 bg-slate-700 bg-opacity-90 text-white text-center py-4 px-2 md:px-6 text-sm md:rounded-xl w-full md:w-fit top-0 md:top-auto md:bottom-3 md:right-3">
            <p class="m-0">{{ session('success') }}</p>
        </div>
    @endif
    <header>
        <div
        class="outer-nav flex justify-between items-center"
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
            <div class="inner-nav flex justify-between items-center">
                <a href="{{ route('home') }}" class="logo">
                    <h1 class="hidden">Alberta Building Envelope Council North</h1>
                    <img src="{{ asset('img/abecn-logo.svg') }}" alt="ABECN logo">
                </a>
                <div class="hamburger-menu" x-on:click="open = !open" :class="open && 'hamburger-open'">
                    <div>
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </div>
            </div>
            <nav x-show="window.innerWidth >= 760 ? true: open" class="h-fit z-10">
                <ul>
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li>
                        <a href="/memberinfo">
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
                                <a href="/memberdirectory">
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
                <div class="secondary-header">
                    <div class="flex md:flex-none justify-center md:justify-end gap-1">
                        @auth
                            <a href="{{ route('profile.edit') }}" class="text-center basis-1/2 md:basis-0">Settings</a>

                            <form method="POST" action="{{ route('logout') }}" class="logout-form basis-1/2 md:basis-0">
                                @csrf

                                <a href="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit();" class="text-center">Logout</a>
                            </form>
                        @else
                            <a href="{{ route('login') }}" class="text-center">Login</a>
                        @endauth
                    </div>
                </div>
            </nav>
        </div>
    </header>
    {{ $slot }}
    <footer class="py-10 pb-40">
        <div class="inner-container">
            <div class="flex justify-between align-center">
                <a href="{{ route('home') }}" class="logo">
                    <img src="{{ asset('img/abecn-logo.svg') }}" alt="ABECN logo">
                </a>
                <ul class="footer-links">
                    <li class="mb-2"><a href="#">PRIVACY</a></li>
                    <li class="mb-2"><a href="#">COPYRIGHT</a></li>
                    <li class="mb-2"><a href="#">SITEMAP</a></li>
                    <li class="mb-2"><a href="/contact">CONTACT US</a></li>
                </ul>
            </div>
            <div class="socials-newsletter">
                <div class="social-icons flex justify-between my-8">
                    <a href="#">
                        <img src="{{ asset('img/linkedin-icon.png') }}" class="w-3/4" alt="Linkedin icon">
                    </a>
                    <a href="#">
                        <img src="{{ asset('img/facebook-icon.png') }}" class="w-3/4" alt="Facebook Icon">
                    </a>
                    <a href="#">
                        <img src="{{ asset('img/instagram-icon.png') }}" class="w-3/4" alt="Instagram Icon">
                    </a>
                    <a href="#">
                        <img src="{{ asset('img/twitter-icon.png') }}" class="w-3/4" alt="Twitter Icon">
                    </a>
                </div>
                <form class="newsletter px-4 py-6 rounded-lg" action="#">
                    <h3 class="mb-3">SIGN UP FOR OUR NEWSLETTER</h3>
                    <div class="newsletter-flex">
                        <div class="mb-4">
                            <label class="block text-white" for="newsletter-name">Full Name</label>
                            <input class="w-full border-none" type="text" name="newsletter-name" id="newsletter-name">
                        </div>
                        <div class="mb-4">
                            <label class="block text-white" for="newsletter-email">Email</label>
                            <input class="w-full border-none" type="email" name="newsletter-email" id="newsletter-email">
                        </div>
                        <div class="mb-4">
                            <input class="footer-btn text-white" type="submit" name="submit" value="Sign up">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </footer>

    @stack('scripts')
</body>
</html>
