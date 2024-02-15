
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
        <div class="image-overlay" style="background-color: rgba(230, 240, 141, 0.5); width: 100%; height: 100%; position: absolute; top: 0; left: 0;"></div>
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

<section id="image" class="section bg-gray">
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

@endsection
