@extends('website.layouts.website')

@section('body')

<style>
    .hero-section {
        width: 100%;
    }

    .background-img {
        width: 100%;
        height: 600px;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .container {
        max-width: 1200px; /* Adjust as needed */
        margin: 0 auto;
        padding: 0 20px;
    }

    .text-container {
        text-align: left;
        padding-left: 100px;
    }

    .custom-hero-content {
        display: inline-block;
        vertical-align: middle;
    }

    .white-text {
        color: white;
    }

    .btn {
        display: inline-block;
        padding: 12px 24px;
        font-size: 16px;
        font-weight: bold;
        text-decoration: none;
        text-align: center;
        background-color: #9ACD32;
        color: white;
        border-radius: 50px;
        transition: background-color 0.3s ease;
    }

    .btn:hover {
        background-color: #3015b8;
    }

    .container {
        text-align: center;
    }

    .h2 {
        font-size: 36px;
        font-weight: bold;
        margin-bottom: 20px;
    }

    .p {
        font-size: 18px;
        line-height: 1.5;
    }

    .lead-2 {
        text-align: justify;
        text-justify: inter-word;
        line-height: 1.5;
        line-height: 1.6;
        color: #555;/* Adjust the line height as needed */
        margin-bottom: 20px;
        margin-left: 350px;
    }
    .lead-4{
        text-align: justify;
        text-justify: inter-word;
        margin-right: 30px;

    }

    .image-link {
        display: inline-block;
        position: relative;
    }

    .image-link:hover::after {
        content: "";
        display: block;
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.5);
        z-index: 1;
        opacity: 0;
        transition: opacity 0.3s ease;
    }

    .image-link:hover img {
        filter: brightness(70%);
    }

    .image-link:hover::after {
        opacity: 1;
    }

    .action-btn {
        text-align: center;
    }

    .color-secondary {
        color: #9ACD32;
        font-weight: bolder; /* Replace with your desired secondary color */
    }

    .color-secondary span {
        color: #557e03;
        font-weight: bolder; /* Replace with your desired color for the <span> element */
    }

    @media (max-width: 768px) {
        .container {
            max-width: 100%;
        }

        .text-container {
            margin-top: 30px;
        }

        .lead-2 {
            max-width: 600px;
            margin-left: auto;
            margin-right: auto;
        }
    }
</style>

<section class="hero-section pt-100" style="position: relative; height: 90vh;">
    <div class="background-img" style="background: url('{{ asset('images/work6.jpg') }}') no-repeat center center / cover; position: relative;">
        <div class="container-fluid">
            <div class="text-container">
                <div class="custom-hero-content">
                    <h1 class="text-white font-weight-bold" style="font-size: 48px; text-transform: uppercase;">TSHAMIE HOLDINGS</h1>
                    <p class="custom-lead white-text" style="font-size: 28px; letter-spacing: 2px;">Transforming Visions into Reality</p>
                    <div class="action-btn mt-4">
                        <a href="{{ route('services') }}" class="btn solid-btn hero">SERVICES</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<div style="padding-bottom: 50px;"></div>

<section id="image" class="section bg-gray">
    <h2 style="color: #557e03; font-size: 28px; font-weight: bold; text-align: center; margin-bottom: 20px;">SERVICES OFFERED</h2>
    <div class="container">

        <p class="lead-2">"Experience excellence in construction with our comprehensive range of services.<br>
             From residential projects to commercial developments, we deliver top-quality <br>solutions with exceptional craftsmanship and timely completion."
            </p>
    </div>
    <div class="container-fluid">
      <div style="padding-bottom: 50px;"></div>
      <div class="row gap-y">
        <div class="col-6 col-lg-4">
          <div class="card">
            <div class="card-body">
                <h5 class="card-title" style="font-weight:bold;">
                    Renovation and maintenance
                </h5>
              </div>
              <a href="services" class="image-link">
                <img class="card-img-top" src="images/renovation.jpg" alt="materials">
            </a>
          </div>
        </div>

        <div class="col-6 col-lg-4">
            <div class="card">
              <div class="card-body">
                  <h5 class="card-title" style="font-weight:bold;">
                      Transport and Logistics


                  </h5>
              </div>
              <a href="services" class="image-link">
                <img class="card-img-top" src="images/transport.jpg" alt="materials">
            </a>
            </div>
        </div>

        <div class="col-6 col-lg-4">
            <div class="card">
              <div class="card-body">
                  <h5 class="card-title" style="font-weight:bold;">
                      Building contraction


                  </h5>
              </div>
              <a href="services" class="image-link">
                <img class="card-img-top" src="images/lastone.jpg" alt="materials">
            </a>
            </div>
        </div>
      </div>
      <div style="padding-bottom: 50px;"></div>

      <div class="action-btn mt-4">
        <a href="{{ route('services') }}" class="btn solid-btn hero">EXPLORE MORE SERVICES</a>
    </div>
    <div style="padding-bottom: 50px;"></div>
    </div>
</section>


<section id="renovate" class="renovate-section renovate-two pt-100 pb-70">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="image-content">
                    <div class="image" style="height:400px;">
                        <img src="images/work2.jpg" class="img-fluid" alt="peple">
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="content">
                    <h2 class="color-secondary">WHY <span>TSHAMIE HOLDINGS</span></h2>
                    <div style="padding-bottom: 60px;"></div>
                    <h2 class="color-secondary">Technical excellence</h2>
                    <p class="lead-4">Technical excellence is knowledge of all aspects of construction and the delivery of the very best quality, superior to others. When we finish with the project, we want the owners to see there is a difference between us and the rest of the competition.</p>
                    <h2 class="color-secondary">Intuitive problem solving</h2>
                    <p class="lead-4">Our team members have gained an outstanding level of technical knowledge through their experiences making them intuitive problem solvers. Technical excellence influences our approach and process which produces a high-quality building built for the best price.

                    </p>

                    <div style="padding-bottom: 10px;"></div>


                    <div class="action-btn mt-4">
                        <a href="{{ route('contact') }}" class="btn solid-btn hero">Get In Touch</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div style="padding-bottom: 50px;"></div>
</section>



@endsection

