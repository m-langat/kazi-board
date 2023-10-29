<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <title>Kazi-Board</title>
</head>
<body>
    <nav class="nav">
        <div class="nav-header">
            Kazi-Board
        </div>

        <div class="nav-links">
            <ul>
                <li><a href="/listings">Job Listings</a></li>
            </ul>
        </div>
    </nav>
    <div class="content">
        @yield('content')
    </div>
</body>
</html>
