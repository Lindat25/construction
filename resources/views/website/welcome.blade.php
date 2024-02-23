@extends('website.layouts.website')

@section('content')

<style>

.custom-hero-section {
  display: flex;
  justify-content: center;
  align-items: center;
}

.custom-row {
  width: 100%;
}


.card {
    display: flex;
    flex-direction: column;
    height: 100%;
  }

  .card-body {
    flex-grow: 1;
  }

.custom-col-md-8 {
  max-width: 800px;
  margin: 0 auto;
}



    .hero-section {
        width: 100%;
    }

    .background-img {
        width: 100%;
        height: 80vh;
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
        text-align: center;
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

    .btn
    {
        display: inline-block;
        padding: 12px 24px;
        font-size: 16px;
        font-weight: bold;
        text-decoration: none;
        text-align: center;
        background-color: #151B54;
        color: white;
        border-radius: 50px;
        transition: background-color 0.3s ease;
    }

    .btn:hover
    {
        background-color: #7cb342;
    }

    .container
    {
        text-align: center;
    }

    .h2
    {
        font-size: 36px;
        font-weight: bold;
        margin-bottom: 20px;
    }

    .p
    {
        font-size: 18px;
        line-height: 1.5;
    }

    .lead-2
    {
        text-align: justify;
        text-justify: inter-word;
        line-height: 1.5;
        line-height: 1.6;
        color: #555;/* Adjust the line height as needed */
        margin-bottom: 20px;
        margin-left: 350px;
    }
    .lead-4

    {
        text-align: justify;
        text-justify: inter-word;
        margin-right: 30px;

    }

    .image-link
    {
        display: inline-block;
        position: relative;
    }

    .image-link:hover::after
     {
        content: "";
        display: block;
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: #7cb342;
        z-index: 1;
        opacity: 0;
        transition: opacity 0.3s ease;

     }

    .image-link:hover img
    {
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



    .hero-blue {
        background-color: transparent;
        color: #151B54;

    }

    .hero-blue:hover {
        background-color: transparent;
        color:  #9ACD32;
    }



 @media (max-width: 767px)
 {

  .renovate-section {
    padding-top: 50px;
    padding-bottom: 50px;
  }

  .renovate-section .row {
    flex-direction: column;
  }

  .renovate-section .col-lg-6 {
    margin-bottom: 40px;
  }
}

@media (min-width: 768px) and (max-width: 1199px)
 {

  .renovate-section .row {
    flex-direction: column;
  }

  .renovate-section .col-lg-6 {
    margin-bottom: 40px;
  }
}

@media (min-width: 500px) and (max-width: 1199px)
 {
        .custom-hero-content h1 {
            font-size: 50px;
        }

        .custom-hero-content p {
            font-size: 60px;
        }
}

</style>


<section class="hero-section pt-100" style="position: relative;">
  <div class="background-img" style="background: url('{{ asset('images/smiling.jpg') }}') no-repeat center center / cover; position: relative; height:600px;">
      <div class="image-overlay" style="background-color: #151B54; width: 100%; height: 100%; position: absolute; top: 0; left: 0; opacity: 0.30;"></div>
      <div class="container">
        <div class="custom-row justify-content-center align-items-center" style="height: 100%;">
          <div class="custom-col-md-8 text-center">
            <h1 class="custom-font-weight-bold" style="font-size: 70px; text-transform: uppercase; font-weight: 800; color: white;">TSHAMIE HOLDINGS</h1>
            <p class="custom-lead" style="font-size: 28px; letter-spacing: 2px; color: #9ACD32; font-weight: bold;">Transforming Visions into Reality</p>
            <div class="action-btn mt-4">
              <a href="{{ route('services') }}" class="btn solid-btn hero"> SERVICES</a>
            </div>
          </div>
        </div>
      </div>
  </div>
</section>



  <section id="image" class="section bg-gray">
    <div style="padding-top: 50px;"></div>
    <h2 style="color: #557e03; font-size: 38px; font-weight: bold; text-align: center; margin-bottom: 20px;">SERVICES OFFERED
    </h2>
    <div class="container">
      <p class="lead-2">"Experience excellence in construction with our comprehensive range of services.<br>
        From residential projects to commercial developments, we deliver top-quality <br>solutions with exceptional craftsmanship and timely completion."
      </p>
    </div>

    <div class="container-fluid">
      <div style="padding-bottom: 50px;">
      </div>
        <div class="row gap-y">
            <div class="col-12 col-sm-6 col-lg-4">
              <div class="card" style="display: flex; flex-direction: column; justify-content: center; align-items: center; text-align: center;">
                <div class="card-body">
                  <span class="icon" style="display: flex; justify-content: center; align-items: center;">
                    <i class="fas fa-wrench" style="font-size: 70px; color: #9ACD32; padding-bottom:20px;"></i>
                  </span>
                  <h5 class="card-title" style="font-weight:bold;">
                    Renovation and maintenance
                  </h5>
                  <p class="card-text">
                    Our renovation and maintenance services are designed to transform your space into something new and refreshing. Whether you need to upgrade your existing property or bring new life to outdated features, our team of skilled professionals is here to help. From minor repairs to complete renovations, we offer comprehensive solutions to meet your specific needs. We are committed to delivering high-quality workmanship, using top-notch materials to ensure long-lasting results. Trust us to enhance the functionality, aesthetics, and value of your property through our renovation and maintenance services.
                  </p>
                </div>
              </div>
            </div>

            <div class="col-12 col-sm-6 col-lg-4">
              <div class="card" style="display: flex; flex-direction: column; justify-content: center; align-items: center; text-align: center;">
                <div class="card-body">
                  <span class="icon" style="display: flex; justify-content: center; align-items: center;">
                    <i class="fas fa-truck" style="font-size: 70px; color: #9ACD32; padding-bottom:20px;"></i>
                  </span>
                  <h5 class="card-title" style="font-weight:bold;">
                    Transport and Logistics
                  </h5>
                  <p class="card-text">
                    We specialize in the efficient movement of construction materials, equipment, and personnel
                    to and from job sites. Our experienced team ensures timely and secure transportation,
                     utilizing a variety of modes such as trucks, cranes, and specialized vehicles.
                      With meticulous planning and execution, we optimize logistics to streamline
                      operations, minimize costs, and meet project timelines. Trust us to handle your transport
                       and logistics needs, enabling seamless construction processes and successful project completion.
                  </p>
                </div>
              </div>
            </div>

            <div class="col-12 col-sm-6 col-lg-4">
              <div class="card" style="display: flex; flex-direction: column; justify-content: center; align-items: center; text-align: center;">
                <div class="card-body">
                  <span class="icon" style="display: flex; justify-content: center; align-items: center;">
                    <i class="fas fa-building" style="font-size: 70px; color: #9ACD32; padding-bottom:20px;"></i>
                  </span>
                  <h5 class="card-title" style="font-weight:bold;">
                    Building contraction
                  </h5>
                  <p class="card-text">
                    We specialize in delivering high-quality construction projects tailored to our clients' needs.
                     From residential buildings to commercial properties, we have the expertise and experience to
                      bring your vision to life. Our team of skilled professionals, including architects, engineers, and
                      construction workers, work collaboratively to ensure every aspect of the project is meticulously planned
                      and executed. With a focus on attention to detail, superior craftsmanship, and adherence to safety standards,
                       we create durable and aesthetically pleasing structures. Trust us to handle your building and construction needs,
                        delivering exceptional results that exceed your expectations.
                  </p>
                </div>
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
            <div class="image" style="height: 100%;">
              <img src="images/work2.jpg" class="img-fluid" alt="people">
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
            <p class="lead-4">Our team members have gained an outstanding level of technical knowledge through their experiences making them intuitive problem solvers. Technical excellence influences our approach and process which produces a high-quality building built for the best price.</p>
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

