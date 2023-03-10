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
        @foreach ($users as $user)

            <p>{{ $user->first_name }}</p>

        @endforeach
    </main>
</body>
</html>