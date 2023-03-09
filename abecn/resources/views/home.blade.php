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
        <div class="wide-flex">
            <div class="flex">
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
                        <form action="#" method="GET" role="search">
                            {{-- <svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="search" class="svg-inline--fa fa-search fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M508.5 468.9L387.1 347.5c-2.3-2.3-5.3-3.5-8.5-3.5h-13.2c31.5-36.5 50.6-84 50.6-136C416 93.1 322.9 0 208 0S0 93.1 0 208s93.1 208 208 208c52 0 99.5-19.1 136-50.6v13.2c0 3.2 1.3 6.2 3.5 8.5l121.4 121.4c4.7 4.7 12.3 4.7 17 0l22.6-22.6c4.7-4.7 4.7-12.3 0-17zM208 368c-88.4 0-160-71.6-160-160S119.6 48 208 48s160 71.6 160 160-71.6 160-160 160z"></path></svg> --}}
                            <label for="search-bar" class="sr-only">Search</label>
                            <input type="text" id="search-bar" name="search-bar" placeholder="Search">
                        </form>
                    </li>
                </ul>
            </nav>
        </div>
    </header>
    <main>
        @foreach ($users as $user)

            <p>{{ $user->first_name }}</p>

        @endforeach
    </main>
</body>
</html>