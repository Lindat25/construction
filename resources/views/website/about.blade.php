@extends('website.layouts.website')

@section('content')
<style>
    .image {
        max-width: 90%;
        height: auto;
        overflow: hidden;
    }


    .image img {
        width: 100%;
        height: auto;
    }

    .lead-2 {
        text-align: justify;
        text-justify: inter-word;
        line-height: 1.5;
        margin-bottom: 20px;
    }
    .lead-4{
        font-size: 25px;
    }

    .container-second {
    margin-top: 50px;
    margin-bottom: 40px;
  }

  .values-heading {
    padding-top: 50px;
    padding-bottom: 25px;
    border-bottom: 1px solid white;
    text-align: center;

  }
  .col-md-6 p {
    margin-top: 0;
    text-align: justify;
        text-justify: inter-word;
  }

  .card {
  height: 250px; /* Set a fixed height for the cards */
  /* Prevent content overflow */

}

.icon {
        display: inline-block;
        padding: 3px; /* Adjust padding as desired */

    }

    .icon i {
        color: #9ACD32; /* Set the icon color to light grey */
        font-size: 30px; /* Increase the icon size */
    }

    .action-btn .btn {
    color: white;

}

.action-btn .btn:hover {
    color: #9ACD32;
    //background-color: white;
}

.bg-light-gray {
        background-color: #F8F8FF;
    }


    .custom-image {
    width: 350px;
    height: 250px;
}

.custom-overlay {
    position: absolute;
    top: 0;
    opacity: 0.30;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(21, 27, 84, 0.8);
}


.customm-overlay {
    position: absolute;
    top: 0;
    opacity: 0.30;
    left: 0;
    height: 400px;
    background-color: rgba(21, 27, 84, 0.8);
}

<style>
    .hero-section {

    }

    @media (max-width: 768px) {
        .hero-section {
            padding-top: 50px;
        }

        .custom-hero-content {
            text-align: center;
        }
    }
</style>




</style>

<section class="hero-section pt-100" style="position: relative;">
    <div class="background-img" style="background: url('{{ asset('images/smiling.jpg') }}') no-repeat center center / cover; position: relative;">
        <div class="image-overlay" style="background-color: #151B54; width: 100%; height: 100%; position: absolute; top: 0; left: 0; opacity: 0.40;"></div>
        <div class="container">
            <div class="custom-hero-content d-flex flex-column align-items-center justify-content-center">
                <h1 class="text-white" style="padding-top: 66px; font-weight: 1000; position: relative; z-index: 1;">
                   ABOUT US
                </h1>

                <div class="action-btn mt-4" style="position: relative; z-index: 1;">
                    <a href="{{ route('welcome') }}" class="btn solid-btn hero" style="font-weight: bold; font-size: 20px;">Home</a>
                    <a href="{{ route('services') }}" class="btn solid-btn hero" style="font-weight: bold; font-size: 20px;">About Us</a>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="about" class="about-section about-style-three pt-100 pb-70 bg-light-gray position-relative">
    <div class="custom-overlay"></div>
    <div style="padding-top: 50px;"></div>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="about-img-content">
                    <div class="about-image">
                        <img src="/images/work3.jpg" class="img-fluid" alt="About Image">
                        <div class="image-overlay" style="background-color: #151B54; width: 100%; height: 100%; position: absolute; top: 0; left: 0; opacity: 0.40;"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="about-content">
                    <h2 style="color: #9ACD32; font-size: 28px; font-weight: 1000; text-align: center; margin-bottom: 20px;">ABOUT US</h2>
                    <p class="lead-2">
                        The company prides itself on our commitment to provide our clients with accountable, high
                        standard and cost-effective work by utilizing our highly qualified and experienced personnel
                        in the transport and construction industry. We commit to delivering the highest level of
                        quality services at fair and market competitive prices to ensure the longevity of our
                        company through repeat and referral business achieved by customer satisfaction in all areas
                        including timelines, attention to detail, and a service-minded attitude. We maintain the highest
                        level of professionalism, integrity, honesty, and fairness in our relationships with our suppliers,
                        subcontractors, professional associates, and clients.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div style="padding-bottom: 100px;"></div>
</section>


<section id="about" class="about-section about-style-three pt-100 pb-70 ">
    <div style="padding-bottom: 40px;"></div>
    <div class="container">
        <div class="row align-items-center">

            <div class="col-lg-6 order-lg-2 order-1">
                <div class="about-content">
                    <h2 style = "font-weight: bold; font-size:40px; padding-bottom: 20px">Our Values at <span style = "color: #9ACD32 ">Tshamie Holdings</span></h2>
                    <p><b>Teamwork:</b>We work together, across boundaries to meet the needs of our customers and to help our
                        company win</p>
                    <p><b>Respect for people:</b> We value our people, encourage their development and reward their performance.</p>
                    <p><b>A Will to Win:</b> We exhibit a strong will to win in the marketplace and in every aspect of our business. </p>
                    <p><b>Personal Accountability:</b> We are personally accountable for delivering on our commitments.</p>
                    <p><b>Corporate Social Responsiblity (CSR):</b> We understand that we have a responsibility to our society and we have made CSR an integral
                        part of our business culture. To underline our deep commitment to making a difference in
                        people’s lives, we are guided by an existing policy and the company commits a substantial
                        budgetary allocation each year to CSR initiatives. The company’s CSR efforts focuses on the
                        vulnerable groups, Health, Education, Environment and Sports
                        .</p>
                </div>
            </div>

            <div class="col-lg-6 order-lg-1 order-2">
                <div class="about-img-content position-relative">
                    <div class="row">
                        <div class="col-md-6 col-sm-6 col-6">
                            <div class="about-image">
                                <div class="custom-overlay"></div>
                                <img src="/images/WORK7.jpg" class="img-fluid custom-image" alt="About Image">
                            </div>
                            <div class="about-image">
                                <div class="custom-overlay"></div>
                                <img src="/images/work5.jpg" class="img-fluid custom-image" alt="About Image">
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-6">
                            <div class="about-image">
                                <div class="custom-overlay"></div>
                                <img src="/images/work3.jpg" class="img-fluid custom-image" alt="About Image">
                            </div>
                            <div class="about-image">
                                <div class="custom-overlay"></div>
                                <img src="/images/work6.jpg" class="img-fluid custom-image" alt="About Image">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div style="padding-bottom: 100px;"></div>
</section>



<section id="about" class="about-section about-style-three pt-100 pb-70 " style="margin-top: -95px;">
    <div class="background-container" style="background-image: url('{{ asset('images/Y11.jpg') }}'); background-size: cover; background-position: center; background-repeat: no-repeat;">
            <div class="row gap-y mt-5" style="padding-top: 100px;">
                <div class="col-md-3 mr-md-auto" style="margin-left: 20px;">
                    <p class="lead-4 text-right">Passionate about<br> building <br> <i>' better future'</i>.</p>
                </div>
                <div class="col-md-4">
                    <h3>Our Mission</h3>
                    <p class="lead-2">To provide Central Government, Local Authorities, Corporate Bodies and Individual
                        Clients with Quality and Cost effective building, Civil and Structural engineering services.
                        Our company is committed to providing Accountability and Quality Services set by
                        Standards Board in the Transport and Construction Industry.
                    </p>
                </div>
                <div class="col-md-4">
                    <h3>Our Vision</h3>
                    <p class="lead-2">We aim to build the future infrastructure of our country and take part in nation building.
                        We envision being one of the most distinguished and fastest-growing companies in
                        Zimbabwe and abroad.
                    </p>
                </div>
            </div>


        <h1 class="values-heading" style="font-weight: 1000;">Core Values</h1>
        <div class="container">
            <div class="row gap-y">
                <div class="col-md-6 col-xl-3">
                    <div class="card card-body shadow-3 text-center">
                        <span class="icon">
                            <i class="fas fa-heart"></i>
                        </span>
                        <h5 class="mb-5 fw-500">Customer Commitment</h5>
                        <p>We develop relationships that make a positive difference in our customers’ lives.</p>
                    </div>
                </div>
                <div class="col-md-6 col-xl-3">
                    <div class="card card-body shadow-3 text-center">
                        <span class="icon">
                            <i class="fas fa-check-circle"></i>
                        </span>
                        <h5 class="mb-5 fw-500">Quality</h5>
                        <p>We provide outstanding products and unsurpassed service that, together, deliver premium value to our customers.</p>
                    </div>
                </div>
                <div class="col-md-6 col-xl-3">
                    <div class="card card-body shadow-3 text-center">
                        <span class="icon">
                            <i class="fas fa-shield-alt"></i>
                        </span>
                        <h5 class="mb-5 fw-500">Integrity</h5>
                        <p>We uphold the highest standards of integrity in all our actions.</p>
                    </div>
                </div>
                <div class="col-md-6 col-xl-3">
                    <div class="card card-body shadow-3 text-center">
                        <span class="icon">
                            <i class="fas fa-lightbulb"></i>
                        </span>
                        <h5 class="mb-5 fw-500">Expertise</h5>
                        <p>We maintain highly qualified, experienced, and highly motivated personnel.</p>
                    </div>
                </div>
            </div>
        </div>
        <div style="padding-bottom: 100px;"></div>
    </div>
</section





<div class="container container-second" style="background-color: #6c757d;">

</div>


<!--<section id="about" class="about-section about-style-three pt-100 pb-70 bg-secondar">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="about-img-content">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                            <div class="about-image">
                                <img src="/images/work.jpg" class="img-fluid" alt="About Image">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                            <div class="about-image">
                                <img src="/images/work2.jpg" class="img-fluid" alt="About Image">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                            <div class="about-image">
                                <img src="/images/work3.jpg" class="img-fluid" alt="About Image">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                            <div class="about-image">
                                <img src="/images/work5.jpg" class="img-fluid" alt="About Image">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                            <div class="about-image">
                                <img src="/images/work6.jpg" class="img-fluid" alt="About Image">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                            <div class="about-image">
                                <img src="/images/WORK1.jpg" class="img-fluid" alt="About Image">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                            <div class="about-image">
                                <img src="/images/WORK.jpg" class="img-fluid" alt="About Image">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                            <div class="about-image">
                                <img src="/images/work7.jpg" class="img-fluid" alt="About Image">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="about-content">
                    <h2 style="padding-bottom: 50px; font-weight: 1000;">Values</h2>
                    <h5>Technology Driven Culture</h5>
                    <p>We continuously improve and offer relevant technology-driven products and services.</p>
                    <hr>
                    <div class="spacer"></div>
                    <h5>Teamwork</h5>
                    <p>We work together, across boundaries to meet the needs of our customers and to help our company win.</p>
                    <hr>
                    <div class="spacer"></div>
                    <h5>Respect for people</h5>
                    <p>We value our people, encourage their development and reward their performance.</p>
                    <hr>
                    <div class="spacer"></div>
                    <h5>Good citizenship</h5>
                    <p>We are good citizens in the communities in which we live and work.</p>
                    <hr>
                    <div class="spacer"></div>
                    <h5>Safety</h5>
                    <p>We observe and implement safety rules by and regulations in all our operations.</p>
                    <hr>
                    <div class="spacer"></div>
                    <h5>A Will to Win</h5>
                    <p>We exhibit a strong will to win in the marketplace and in every aspect of our business.</p>
                    <hr>
                    <div class="spacer"></div>
                    <h5>Personal Accountability</h5>
                    <p>We are personally accountable for delivering on our commitments.</p>
                    <hr>
                    <div class="spacer"></div>
                    <h3>Corporate Social Responsibility (CSR)</h3>
                    <p class="lead-2">We understand that we have a responsibility to our society and we have made CSR an integral part of our business culture. To underline our deep commitment to making a difference in people’s lives, we are guided by an existing policy and the company commits a substantial budgetary allocation each year to CSR initiatives. The company’s CSR efforts focus on the vulnerable groups, Health, Education, Environment, and Sports.</p>
                    <hr>
                    <div class="spacer"></div>
                </div>
            </div>
        </div>
    </div>
</section>-->

@endsection
