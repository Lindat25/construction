@extends('website.layouts.website')

@section('content')
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

}

.background-img {
    width:1500px;
    height: 300px;
}



.action-btn .btn {
    color: white;

}

.action-btn .btn:hover {
    color: #9ACD32;
    //background-color: white;
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





    .contact-form {
        max-width: 400px;
        margin: 0 auto;
    }

    .contact-form label {
        display: block;
        margin-bottom: 10px;
    }

    .contact-form input,
    .contact-form textarea {
        width: 500px;
        padding: 10px;
        margin-bottom: 20px;
        border: 1px solid #ccc;
        border-radius: 4px;
    }

    .contact-form button {
        display: block;
        width: 100px;
        padding: 10px;
        background-color:  #9ACD32;
        color: white;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    .contact-form button:hover {
        background-color: blue;
    }
 <style>
    .hero-section {

}

.background-img {
    width: 100%;
    height: 300px;
}

@media (max-width: 768px) {
    .hero-section {
        padding-top: 50px;
    }

    .background-img {
        height: 200px;

    }
}
</style>





</style>

<section class="hero-section pt-100" style="position: relative;">
    <div class="background-img" style="background: url('{{ asset('images/smiling.jpg') }}') no-repeat center center / cover; position: relative; height:200px;">
        <div class="image-overlay" style="background-color: #151B54; width: 100%; height: 100%; position: absolute; top: 0; left: 0; opacity: 0.40;"></div>
        <div class="container">
            <div class="custom-hero-content d-flex flex-column align-items-center justify-content-center">
                <h1 class="text-white" style="padding-top: 66px; font-weight: 1000; position: relative; z-index: 1;">
                   CONTACT US
                </h1>

                <div class="action-btn mt-4" style="position: relative; z-index: 1;">
                    <a href="{{ route('welcome') }}" class="btn solid-btn hero" style="font-weight: bold; font-size: 20px;">Home</a>
                    <a href="{{ route('contact') }}" class="btn solid-btn hero" style="font-weight: bold; font-size: 20px;">Contact Us</a>
                </div>
            </div>
        </div>
    </div>
</section>




<section id="about" class="about-section about-style-three pt-100 pb-70">
    <div style="padding-top: 50px;"></div>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <!-- Card 1 -->
                <div class="card border p-5 mb-4" style="background-image: url('images/p5.jpg'); background-size: cover;">
                    <h5 class="mb-4 text-white font-weight-bold">Mail Us</h5>
                    <ul class="contact-list">
                        <li>
                            <span class="tag">
                                <i class="fa fa-envelope" style="font-size: 50px; color: white; padding-right:20px;"></i>
                            </span>
                            <span class="contact-numbers">
                                <a href="#" style="color: white; font-weight: bold;">TSHAMIEholdings@gmail.com</a>
                            </span>
                        </li>
                    </ul>
                    <div class="card-overlay"></div>
                </div>

                <!-- Card 2 -->
                <div class="card border p-5 mb-4" style="background-image: url('images/copy.jpg'); background-size: cover;">
                    <h5 class="mb-4 text-white font-weight-bold">Call Us</h5>
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

                <!-- Card 3 -->
                <div class="card border p-5" style="background-image: url('images/p6.jpg'); background-size: cover;">
                    <h5 class="mb-4 text-white font-weight-bold">Address</h5>
                    <ul class="contact-list">
                        <li>
                            <span class="tag">
                                <i class="fa fa-envelope" style="font-size: 50px; color: white; padding-right:20px;"></i>
                            </span>
                            <span class="text-white font-weight-bold">14 Lorne Drive Mt Pleasant <br> HARARE, ZIMBABWE</span>
                        </li>
                    </ul>
                    <div class="card-overlay"></div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="contact-form">
                    <form action="send_email.php" method="POST">
                        <label for="name">Name:</label>
                        <input type="text" id="name" name="name" required>

                        <label for="email">Email:</label>
                        <input type="email" id="email" name="email" required>

                        <label for="phone">Phone:</label>
                        <input type="tel" id="phone" name="phone" required>

                        <label for="message">Your Message:</label>
                        <textarea id="message" name="message" rows="9" required></textarea>

                         <button type="submit">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

<div style="padding-bottom: 50px;"></div>
</section>


@endsection
