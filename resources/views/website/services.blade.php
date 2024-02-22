

@extends('website.layouts.website')

@section('content')

<style>
    .card:hover {
        transform: scale(1.1);
    }

    .action-btn .btn {
    color: white;

}

.action-btn .btn:hover {
    color: #9ACD32;
    //background-color: white;
}

.hero-section {

    }

    .background-img {
        width:1500px;
        height: 300px;
    }

    .section-heading {
        text-align: center;
        font-size: 32px;
        font-weight: bold;
        margin-bottom: 20px;
    }
    .highlight {
        color: #9ACD32; /* Set the desired highlight color */
    }


    .card {
    display: flex;
    flex-direction: column;
    height: 100%;
  }

  .card-body {
    flex-grow: 1;
  }

  .header-area {
        background-color:  #151B54;
    }

  .top-header-area a {
        color: white;
        text-decoration: none;
    }

    .socials-link a {
        margin-right: 10px;
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


 <!--<header class="header-area header-three">
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
                              <div class="contact-info-content">
                                  <p style="color:aliceblue">Call Us:</p>
                                  <a href="tel:+263242740160">0779044369</a>
                              </div>
                          </div>
                      </div>
                      <div class="col-lg-4 col-sm-4">
                          <div class="contact-info">
                              <div class="contact-info-content">
                                  <p style="color:aliceblue">Mail Us:</p>
                                  <a href="TSHAMIEholdings@gmail.com">TSHAMIEholdings@gmail.com</a>
                              </div>
                          </div>
                      </div>
                      <div class="col-lg-4 col-sm-4">
                          <div class="contact-info">
                              <div class="contact-info-content">
                                  <p style="color:aliceblue">Open Hours:</p>
                                  <a href="#">Mon-Fri: 8:00 am – 5 pm</a>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
</header>-->

<section class="hero-section pt-100" style="position: relative;">
    <div class="background-img" style="background: url('{{ asset('images/smiling.jpg') }}') no-repeat center center / cover; position: relative; height:200px;">
        <div class="image-overlay" style="background-color: #151B54; width: 100%; height: 100%; position: absolute; top: 0; left: 0; opacity: 0.40;"></div>
        <div class="container">
            <div class="custom-hero-content d-flex flex-column align-items-center justify-content-center">
                <h1 class="text-white" style="padding-top: 66px; font-weight: 1000; position: relative; z-index: 1;">
                   SERVICES
                </h1>

                <div class="action-btn mt-4" style="position: relative; z-index: 1;">
                    <a href="{{ route('welcome') }}" class="btn solid-btn hero" style="font-weight: bold; font-size: 20px;">Home</a>
                    <a href="{{ route('services') }}" class="btn solid-btn hero" style="font-weight: bold; font-size: 20px;">Services</a>
                </div>
            </div>
        </div>
    </div>
</section>

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





    <div class="row gap-y">
        <div class="col-12 col-sm-6 col-lg-4">
          <div class="card" style="display: flex; flex-direction: column; justify-content: center; align-items: center; text-align: center;">
            <div class="card-body">
              <span class="icon" style="display: flex; justify-content: center; align-items: center;">
                <i class="fas fa-pencil-ruler" style="font-size: 70px; color: #9ACD32; padding-bottom:20px;"></i>
              </span>
              <h5 class="card-title" style="font-weight:bold;">
                 Structural and architectural
                  designs
              </h5>
              <p class="card-text">Our team of experienced architects and engineers specializes in providing comprehensive structural and architectural design services. We combine creativity, functionality, and technical expertise to create innovative and efficient designs for residential, commercial, and industrial projects. From concept to construction drawings, we work closely with our clients, ensuring structural integrity, aesthetic appeal, and adherence to regulations. Trust us to deliver exceptional designs that harmonize functionality and visual impact.
              </p>
            </div>
          </div>
        </div>

        <div class="col-12 col-sm-6 col-lg-4">
          <div class="card" style="display: flex; flex-direction: column; justify-content: center; align-items: center; text-align: center;">
            <div class="card-body">
              <span class="icon" style="display: flex; justify-content: center; align-items: center;">
                <i class="fas fa-road" style="font-size: 70px; color: #9ACD32; padding-bottom:20px;"></i>
              </span>
              <h5 class="card-title" style="font-weight:bold;">
                Road construction, water and
                sewer retriculation

              </h5>
              <p class="card-text">
                We provide comprehensive structural and architectural design services for residential, commercial, and industrial projects,
                 ensuring functionality and adherence to regulations.Our road construction services prioritize safe and efficient transportation networks, employing
                  quality materials and advanced techniques.In addition, our water and sewer reticulation services focus on proper water distribution and effective wastewater
                   management, delivering sustainable solutions.
              </p>
            </div>
          </div>
        </div>

        <div class="col-12 col-sm-6 col-lg-4">
          <div class="card" style="display: flex; flex-direction: column; justify-content: center; align-items: center; text-align: center;">
            <div class="card-body">
              <span class="icon" style="display: flex; justify-content: center; align-items: center;">
                <i class="fas fa-hammer" style="font-size: 70px; color: #9ACD32; padding-bottom:20px;"></i>
              </span>
              <h5 class="card-title" style="font-weight:bold;">
                Structural works

              </h5>
              <p class="card-text">
                Our structural works services encompass the
                design and construction of load-bearing
                elements, such as foundations, columns, beams,
                 and slabs. With a focus on structural integrity
                  and safety, our experienced team utilizes advanced
                  engineering techniques and high-quality materials to
                  ensure the durability and stability of your project.
                   From initial planning to the final execution,
                   we deliver exceptional results that meet regulatory
                    standards and exceed client expectations.
            </div>
          </div>
        </div>
    </div>
  <div style="padding-bottom: 50px;"></div>

      <div class="row gap-y">
          <div class="col-12 col-sm-6 col-lg-4">
            <div class="card" style="display: flex; flex-direction: column; justify-content: center; align-items: center; text-align: center;">
              <div class="card-body">
                <span class="icon" style="display: flex; justify-content: center; align-items: center;">
                  <i class="fas fa-cube" style="font-size: 70px; color: #9ACD32; padding-bottom:20px;"></i>
                </span>
                <h5 class="card-title" style="font-weight:bold;">
                  Design of concrete structures

                </h5>
                <p class="card-text">
                  Our design services specialize in the creation of robust and efficient concrete structures.
                  From residential buildings
                  to commercial complexes, our experienced
                  team ensures the optimal design of foundations, beams,
                   columns, and slabs. We employ advanced engineering principles and software to guarantee structural integrity, durability, and compliance with industry standards.
                    Trust us to deliver innovative and cost-effective designs that maximize the potential of concrete as a versatile construction material.
                </p>
              </div>
            </div>
          </div>

          <div class="col-12 col-sm-6 col-lg-4">
            <div class="card" style="display: flex; flex-direction: column; justify-content: center; align-items: center; text-align: center;">
              <div class="card-body">
                <span class="icon" style="display: flex; justify-content: center; align-items: center;">
                  <i class="fas fa-clipboard-list" style="font-size: 70px; color: #9ACD32; padding-bottom:20px;"></i>
                </span>
                <h5 class="card-title" style="font-weight:bold;">
                  Contracts and projects
                  management
                </h5>
                <p class="card-text">
                  Our contracts and projects management services provide
                  comprehensive oversight and coordination for construction
                   projects. From contract negotiation to project completion,
                    our experienced team ensures efficient planning, scheduling,
                     and budgeting. We handle the coordination of resources,
                      procurement, risk mitigation, and quality control to deliver
                       successful outcomes. With a focus on client satisfaction, we strive to meet
                        project objectives, timelines, and budgets while maintaining transparency
                        and effective communication throughout the process.
                </p>
              </div>
            </div>
          </div>

          <div class="col-12 col-sm-6 col-lg-4">
            <div class="card" style="display: flex; flex-direction: column; justify-content: center; align-items: center; text-align: center;">
              <div class="card-body">
                <span class="icon" style="display: flex; justify-content: center; align-items: center;">
                  <i class="fas fa-map" style="font-size: 70px; color: #9ACD32; padding-bottom:20px;"></i>
                </span>
                <h5 class="card-title" style="font-weight:bold;">
                  Engineering surveys

                </h5>
                <p class="card-text">
                  Our engineering survey services provide accurate and detailed measurements
                  of land and infrastructure for construction and development projects.
                  Using advanced surveying equipment and techniques, our experienced team
                  conducts topographic surveys, boundary surveys, and site analysis.
                   We provide essential data on terrain, elevation, existing structures,
                    and utilities, enabling informed decision-making during the design and construction phases.
                    Trust us for precise and reliable engineering surveys that contribute to the successful implementation of your project.
                </p>
              </div>
            </div>
          </div>

      </div>
    <div style="padding-bottom: 50px;"></div>
</div>

<!--<section id="image" class="section bg-gray">
    <div class="container-fluid">
        <div style="padding-bottom: 50px;"></div>
        <h2 class="section-heading">OFFERED <span class="highlight">SERVICES</span></h2>
      <div style="padding-bottom: 50px;"></div>
      <div class="row gap-y">
        <div class="col-6 col-lg-3">
          <div class="card">
            <div class="card-body">
                <h5 class="card-title" style="font-weight:bold;">
                    Structural and architectural
                    designs
                </h5>
              </div>
            <img class="card-img-top" style="height: 250px;" src="images/work3.jpg" alt="materials">
          </div>
        </div>
        <div class="col-6 col-lg-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title" style="font-weight:bold;">
                        Engineering surveys
                    </h5>
                  </div>
              <img class="card-img-top" style="height: 270px;" src="images/WORK.jpg" alt="materials">
            </div>
          </div>

        <div class="col-6 col-lg-3">
          <div class="card">
            <div class="card-body">
                <h5 class="card-title" style="font-weight:bold;">
                    Contracts and projects
                    management

                </h5>
            </div>
            <img class="card-img-top" style="height: 250px;" src="images/work5.jpg" alt="materials">
          </div>
        </div>
        <div class="col-6 col-lg-3">
          <div class="card">
            <div class="card-body">
                <h5 class="card-title" style="font-weight:bold;">
                    Renovation and maintenance

                </h5>
            </div>
            <img class="card-img-top" style="height: 270px;" src="images/WORK1.jpg" alt="materials">

          </div>
        </div>
      </div>

      <div style="padding-bottom: 100px;"></div>

      <div class="row gap-y">
        <div class="col-6 col-lg-3">
          <div class="card">
            <div class="card-body">
                <h5 class="card-title" style="font-weight:bold;">
                    Supply of architectural materials
                    and products

                </h5>
            </div>
            <img class="card-img-top" style="height: 250px;" src="images/work2.jpg" alt="materials">
          </div>
        </div>
        <div class="col-6 col-lg-3">
          <div class="card">
            <div class="card-body">
                <h5 class="card-title" style="font-weight:bold;">
                    Building contraction


                </h5>
            </div>
            <img class="card-img-top" style="height: 270px;" src="images/work4.jpg" alt="consruction">
          </div>
        </div>
        <div class="col-6 col-lg-3">
          <div class="card">
            <div class="card-body">
                <h5 class="card-title" style="font-weight:bold;">
                    Contracts and projects
                    management

                </h5>
            </div>
            <img class="card-img-top" style="height: 250px;" src="images/work3.jpg" alt="arcitecture">
          </div>
        </div>
        <div class="col-6 col-lg-3">
          <div class="card">
            <div class="card-body">
                <h5 class="card-title" style="font-weight:bold;">
                    Road construction, water and
                    sewer retriculation


                </h5>
            </div>
            <img class="card-img-top" style="height: 250px;" src="images/road1.jpg" alt=" Meeting">

          </div>
        </div>
      </div>

      <div style="padding-bottom: 100px;"></div>


      <div class="row gap-y">
        <div class="col-6 col-lg-3">
          <div class="card">
            <div class="card-body">
                <h5 class="card-title" style="font-weight:bold;">
                    Transport and Logistics


                </h5>
            </div>
            <img class="card-img-top" style="height: 250px;" src="images/work5.jpg" alt="transport">
          </div>
        </div>
        <div class="col-6 col-lg-3">
          <div class="card">
            <div class="card-body">
                <h5 class="card-title" style="font-weight:bold;">
                    Design of concrete structures

                </h5>
            </div>
            <img class="card-img-top" style="height: 250px; " src="images/work3.jpg" alt="last">
          </div>
        </div>
      </div>

      <div style="padding-bottom: 100px;"></div>

    </div>

    </div>
  </section>
-->

@endsection
