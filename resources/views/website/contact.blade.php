@extends('website.layouts.website')

@section('body')
<style>

    .page-title-area {
    position: relative;
}

.bg-image {
    position: relative;
}

.text-overlay {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    text-align: center;
    color: #fff;
}

.text-overlay h2 {
    font-size: 36px;
    margin-bottom: 10px;
}

.text-overlay p {
    font-size: 18px;
}

.hero-section {
    position: relative;
    overflow: hidden;
}

.hero-section .background-img {
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    background-size: cover;
    background-position: center;
    height: 400px;
}

.action-btn .btn {
    color: white;

}

.action-btn .btn:hover {
    color: green;
    background-color: white;
}

.action-button {
        border-radius: 30px;
        background-color: green;
        color: white;
        padding: 12px ;
        text-decoration: none;
    }

    .action-button:hover {
        background-color: white;
        color: green;
    }

.card-overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: red; /* Adjust the background color and opacity as needed */
    z-index: -1;
}

.contact-list {
    list-style: none;
    padding: 0;
    margin: 0;
}

.contact-list li {
    display: flex;
    align-items: center;
}



.contact-numbers {
    display: flex;
    flex-direction: column;
}

.contact-numbers a {
    display: block;
    margin-bottom: 1px;
    text-decoration: none;
}

.lead-2 {
        text-align: justify;
        text-justify: inter-word;
        line-height: 1.5; /* Adjust the line height as needed */
        margin-bottom: 20px;
    }
</style>

<section class="hero-section pt-100" style="position: relative;">
    <div class="background-img" style="background: url('{{ asset('images/d.jpg') }}') no-repeat center center / cover; width:1500px; height:300px; position: relative;">
        <div class="image-overlay" style="background-color: rgba(0, 123, 255, 0.5); width: 100%; height: 100%; position: absolute; top: 0; left: 0;"></div>

    </div>
</section>

<div style="padding-top: 100px;"></div>


<section id="about" class="about-section about-style-three pt-100 pb-70 ">
    <div class="row align-items-center">
        <div class="col-lg-4" style="margin-left: 30px;">
            <div class="card border p-5" style="background-image: url('images/p5.jpg'); background-size: cover;">
                <h5 class="mb-4" style="color: white; font-weight: bold;">Mail Us</h5>
                <ul class="contact-list">
                    <li>
                        <span class="tag">
                            <i class="fa fa-envelope" style="font-size: 50px; color: white; padding-right:20px;"></i>
                        </span>
                        <span class="contact-numbers">
                            <a href="#"  style="color: white; font-weight: bold;">tshamieholdings@gmail.com</a><br>

                        </span>
                    </li>
                </ul>
                <div class="card-overlay"></div>
            </div>

            <div class="card border p-5" style="background-image: url('images/copy.jpg'); background-size: cover;">
                <h5 class="mb-4" style="color: white; font-weight: bold;">Call Us</h5>
                <ul class="contact-list">
                    <li>
                        <span class="tag">
                            <i class="fa fa-phone" style="font-size: 50px; color: white; padding-right:20px;"></i>
                        </span>
                        <span class="contact-numbers">
                            <a href="tel:+263242740160" style="color: white; font-weight: bold;">0779044369</a><br>
                            <a href="tel:+263242740371" style="color: white; font-weight: bold;">0775285241</a><br>
                            <a href="tel:+263242740371" style="color: white; font-weight: bold;">0774251156</a>
                        </span>
                    </li>
                </ul>
                <div class="card-overlay"></div>
            </div>
            <div class="card border p-5" style="background-image: url('images/p6.jpg'); background-size: cover;">
                <h5 class="mb-4" style="color: white; font-weight: bold;">Call Us</h5>
                <ul class="contact-list">
                    <li >
                        <span class="tag">
                            <i class="fa fa-envelope" style="font-size: 50px; color: white; padding-right:20px;"></i>
                        </span>
                        <span style="color: white; font-weight: bold;">14 CARRICK RD, BORROWDALE <br> HARARE, ZIMBABWE</span>
                    </li>
                </ul>
                <div class="card-overlay"></div>
            </div>
        </div>
        <div class="col-lg-6">
            <h1 style="font-size: 30px; text-align: center; line-height: 1.5;">
                Looking for <span style="color: blue;">exceptional</span> customer service? You've come to the <span style="color: green;">right</span> place!
            </h1>
            <p class="lead-2" style="font-size: 18px; color: #666; ; line-height: 1.5;">
                Our Contact Us page is your gateway to personalized assistance and support. Our team is ready to answer your questions, provide guidance, and ensure your satisfaction. Don't hesitate to get in touch - we're here to make your experience with us outstanding!
            </p>

            <div class="action mt-4" style="text-align: center;">
                <a href="{{ route('register') }}" class="btn solid-btn hero"
                   style="background-color: blue; padding: 10px 20px; color: #fff; text-decoration: none; transition: background-color 0.3s;">
                    Get In Touch
                </a>
            </div>
        </div>
</div>

<div style="padding-bottom: 100px;"></div>

@endsection
