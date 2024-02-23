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

    .header-section {
        width: 97%;
        background-color: #151B54;
        color: white;
    }

    .header-area {
        padding: 20px 0;
    }

    .top-header-area {
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 0 20px;
    }

    .socials-link a {
        color: white;
        margin-right: 10px;
        text-decoration: none;
    }

    .contact-info {
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    .contact-info p {
        margin: 0;
        color: aliceblue;
    }

    .contact-info a {
        color: white;
        text-decoration: none;
    }

    .nav-container {
        width: 99%;
        background-color: white;
        padding: 10px 0;


    }

    .container {
        display: flex;
        justify-content: space-between;
        align-items: center;
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 20px;
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

    .content {
        margin-top: 5px;
    }

    /* Responsive styles */
    @media screen and (max-width: 768px) {
        .container {
            flex-direction: column;
            align-items: flex-start;
        }

        .right {
            justify-content: flex-start;
            flex-wrap: wrap;
            margin-top: 10px;
        }

        .right a {
            margin-right: 10px;
        }
    }
    </style>
</head>


<body>

    <div class="header-section">
        <header class="header-area header-three">
            <div class="top-header-area">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <div class="col-lg-3 col-md-12">
                            <div class="socials-link">
                                <a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a>
                                <a href="#" target="_blank"><i class="fab fa-twitter"></i></a>
                                <a href="#" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-9 col-md-12">
                            <div class="row align-items-center">
                                <div class="col-lg-4 col-sm-4">
                                    <div class="contact-info">
                                        <p>Call Us:</p>
                                        <a href="tel:+263242740160">0779044369</a>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-sm-4">
                                    <div class="contact-info">
                                        <p>Mail Us:</p>
                                        <a href="TSHAMIEholdings@gmail.com">TSHAMIEholdings@gmail.com</a>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-sm-4">
                                    <div class="contact-info">
                                        <p>Open Hours:</p>
                                        <a href="#">Mon-Fri: 8:00 am – 5 pm</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
          </header>
    </div>


    <nav>
        <div class="nav-container">
            <nav>
                <div class="container">
                    <div class="logo-container">
                        <a href="{{ route('welcome') }}"><img src="{{ asset('images/logo.png') }}" alt="Company Logo" class="company-logo"></a>
                    </div>
                    <div class="right">
                        <a href="{{ route('welcome') }}">HOME</a>
                        <a href="{{ route('about') }}">ABOUT </a>
                <a href="{{ route('services') }}">SERVICES</a>
                <a href="{{ route('casestudies') }}">CASE STUDIES</a>
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
