<!DOCTYPE html>
<html>
<head>
    <title>TSHAMIE HOLDINGS</title>

    <style>
    body {
        display: flex;
        flex-direction: column;
        align-items: center;
        margin: 0;
        padding: 0;
    }

    nav {
        width: 100%;
        padding: 10px 0;
        position: fixed; /* Set the navigation bar to a fixed position */
        top: 0; /* Position the navigation bar at the top of the viewport */
        background-color: white; /* Set the background color of the navigation bar */
        z-index: 999; /* Set a high z-index value to ensure it appears above other content */
    }

    .container {
        display: flex;
        justify-content: space-between;
        align-items: center;
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 20px;
    }

    .logo-container {
        display: flex;
        align-items: center;
    }

    .company-logo {
        width: 100px;
        height: 50px;
        margin-right: 10px;
    }

    .right {
        display: flex;
        justify-content: flex-end;
        gap: 20px;
    }

    .right a {
        color: #333;
        text-decoration: none;
    }

    .right a:hover {
        text-decoration: none;
        color: #9ACD32;
    }

    .action-btn .btn {
    color: white;

}


    .content {
        margin-top: 70px; /* Add a margin top to the content to prevent it from being overlapped by the fixed navigation bar */
    }
    </style>
</head>
<body>
    <nav>
        <div class="container">
            <div class="logo-container">
                <a href="{{ route('welcome') }}"><img src="{{ asset('images/logo.png') }}" alt="Company Logo" class="company-logo"></a>
            </div>
            <div class="right">
                <a href="{{ route('welcome') }}">HOME</a>
                <a href="{{ route('about') }}">ABOUT </a>
                <a href="{{ route('services') }}">SERVICES</a>
                <a href="{{ route('contact') }}">CONTACT</a>
                <a href="{{ route('team') }}">TEAM</a>
            </div>
        </div>
    </nav>

    <div class="content">
        @yield('content')
    </div>
</body>
</html>
