
@extends('website.layouts.website')

@section('body')

<style>
    .card:hover {
        transform: scale(1.1);
    }

    .action-btn .btn {
    color: white;

}

.action-btn .btn:hover {
    color: green;
    background-color: white;
}

.hero-section {

    }

    .background-img {
        width:1500px;
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

<section class="hero-section pt-100" style="position: relative;">
    <div class="background-img" style="background: url('{{ asset('images/service.jpg') }}') no-repeat center center; background-size: cover; position: relative;">
        <div class="image-overlay" style="background-color: rgba(0, 123, 255, 0.5); width: 100%; height: 100%; position: absolute; top: 0; left: 0;"></div>
        <div class="container">
            <!-- Your content inside the container -->
        </div>
    </div>
</section>

<section id="image" class="section bg-gray">
    <div class="container-fluid">
      <div style="padding-bottom: 100px;"></div>
      <div class="row gap-y">
        <div class="col-6 col-lg-3">
          <div class="card">
            <div class="card-body">
                <h5 class="card-title" style="font-weight:bold;">
                    Structural and architectural
                    designs
                </h5>
              </div>
            <img class="card-img-top" src="images/structuraldesigns.jpg" alt="materials">
          </div>
        </div>
        <div class="col-6 col-lg-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title" style="font-weight:bold;">
                        Engineering surveys
                    </h5>
                  </div>
              <img class="card-img-top" src="images/survey.jpg" alt="materials">
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
            <img class="card-img-top" style="height: 330px;" src="images/contract.jpg" alt="materials">
          </div>
        </div>
        <div class="col-6 col-lg-3">
          <div class="card">
            <div class="card-body">
                <h5 class="card-title" style="font-weight:bold;">
                    Renovation and maintenance

                </h5>
            </div>
            <img class="card-img-top" src="images/renovation.jpg" alt="materials">

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
            <img class="card-img-top" style="height: 330px;" src="images/materials.jpg" alt="materials">
          </div>
        </div>
        <div class="col-6 col-lg-3">
          <div class="card">
            <div class="card-body">
                <h5 class="card-title" style="font-weight:bold;">
                    Building contraction


                </h5>
            </div>
            <img class="card-img-top" style="height: 350px;" src="images/lastone.jpg" alt="consruction">
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
            <img class="card-img-top" style="height: 330px;" src="images/architecture.jpg" alt="arcitecture">
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
            <img class="card-img-top" style="height: 330px;" src="images/road.jpg" alt=" Meeting">

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
            <img class="card-img-top" src="images/transport.jpg" alt="transport">
          </div>
        </div>
        <div class="col-6 col-lg-3">
          <div class="card">
            <div class="card-body">
                <h5 class="card-title" style="font-weight:bold;">
                    Design of concrete structures

                </h5>
            </div>
            <img class="card-img-top" style="height: 350px; " src="images/design.jpg" alt="last">
          </div>
        </div>
      </div>

      <div style="padding-bottom: 100px;"></div>

    </div>

    </div>
  </section>

@endsection
