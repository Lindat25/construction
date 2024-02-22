@extends('website.layouts.website')

@section('content')

<style>




.background-img {
    width:1500px;
    height: 300px;
}


.image {
        flex: 1;
        position: relative;
        height: 300px;
        padding-bottom: 56.25%; /* Set the aspect ratio of the video (16:9) */
        overflow: hidden;
    }

    .video-fluid {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .card {
        border: 1px solid #eaeaea;
        border-radius: 8px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        flex: 1;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        height: 500px; /* Set a fixed height for the cards */
    }

    .video-content {
        display: flex;
        align-items: flex-start;
        gap: 20px;
    }


    .video-wrapper {
        padding-top: 56.25%; /* Maintain a 16:9 aspect ratio for the video */
        position: relative;
    }

    .section-heading {
        text-align: center;
        font-size: 32px;
        font-weight: bold;
        margin-bottom: 20px;
    }

    .section-subheading {
        text-align: center;
        font-size: 18px;
        color: #888;
    }
    .highlight {
        color: #9ACD32; /* Set the desired highlight color */
    }

    .color-secondary {
        font-weight: bold;
    }

    .project-details {
        line-height: 2;
        margin-bottom: 20px;
    }

    .action-btn .btn {
    color: white;

}

.action-btn .btn:hover {
    color: #9ACD32;
    //background-color: white;
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



<section class="hero-section pt-100">
    <div class="background-img" style="background: url('{{ asset('images/smiling.jpg') }}') no-repeat center center / cover; position: relative; height:200px;">
        <div class="image-overlay" style="background-color: #151B54; width: 100%; height: 100%; position: absolute; top: 0; left: 0; opacity: 0.40;"></div>
        <div class="container">
            <div class="custom-hero-content d-flex flex-column align-items-center justify-content-center">
                <h1 class="text-white" style="padding-top: 66px; font-weight: 1000; position: relative; z-index: 1;">
                   CASE STUDIES
                </h1>

                <div class="action-btn mt-4" style="position: relative; z-index: 1;">
                    <a href="{{ route('welcome') }}" class="btn solid-btn hero" style="font-weight: bold; font-size: 20px;">Home</a>
                    <a href="{{ route('casestudies') }}" class="btn solid-btn hero" style="font-weight: bold; font-size: 20px;">Case-studies</a>
                </div>
            </div>
        </div>
    </div>
</section>

<div style="padding-bottom: 50px;"></div>


<section id="renovate" class="renovate-section renovate-two pt-100 pb-70">
    <div class="container-fluid">

        <h2 class="section-heading">See Our Work in <span class="highlight">Action</span></h2>
        <p class="section-subheading">Watch the videos below to witness our <span class="highlight">successful projects</span></p>
        <div class="row align-items-center">

         <div class="row gap-y">
            <div class="col-6 col-lg-4">
                <div class="video-content">
                    <div class="card">
                        <div class="image">
                            <div class="video-wrapper">
                                <div class="video-content">
                                    <video src="images/vid1.mp4" class="video-fluid" controls></video>
                                </div>
                            </div>
                        </div>
                        <div class="video-description">
                            <h3>Sunset Villas</h3>
                            <p>
                                Location: Tynwald Harare<br>
                                Client: National Building Society (NBS) and Naldine Trading.<br>
                                Contact details: +263 772 660 147<br>
                                Construction of 129 semi-detached cluster homes and paving<br>
                                Scope of work: Substructure and Finishes<br>
                                Project year: 2022 - current
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-6 col-lg-4">
                <div class="video-content">
                    <div class="card">
                        <div class="image">
                            <div class="video-wrapper">
                                <div class="video-content">
                                    <video src="images/vid2.mp4" class="video-fluid" controls></video>
                                </div>
                            </div>
                        </div>
                        <div class="video-description">
                            <h3>Manningdale</h3>
                            <p>
                                Location: Bulawayo<br>
                                Client: Mr Marvelous Nakamba<br>
                                Contact details:+44 7736 547182<br>
                                Construction of Triple Storey House<br>
                                Scope of work: Substructure<br>
                                Substructure and Finishes<br>
                                Construction of 230mm x 3m x 374m boundary
                                wall<br>
                                Project year: 2021 - Current

                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-6 col-lg-4">
                <div class="video-content">
                    <div class="card">
                        <div class="image">
                            <div class="video-wrapper">
                                <div class="video-content">
                                    <video src="images/HOUSE.mp4" class="video-fluid" controls></video>
                                </div>
                            </div>
                        </div>
                        <div class="video-description">
                            <h3>Selborne Park</h3>
                            <p>
                                Location: Bulawayo<br>
                                Client: Mr Antony Nakamba<br>
                                Contact details: +44 7736 547182<br>
                                Construction of Double Storey House<br>
                                Scope of work: Substructure<br>
                                Substructure and Finishes<br>
                                Project Time Frame: 15 months<br>
                                Project year: 2022

                            </p>
                        </div>
                    </div>
                </div>
            </div>
         </div>


        <!-- <div class="row gap-y">
            <div class="col-6 col-lg-4">
                <div class="video-content">
                    <div class="card">
                        <div class="image">
                            <video src="images/vid4.mp4" class="video-fluid" controls></video>
                        </div>
                        <div class="video-description">
                            <h3>Sunbeam Road works
                            </h3>
                            <p>
                                Location: Mt Pleasant Heights<br>
                                Subcontracted by FORIT CONTRACTING<br>
                                Contact details:+263 716 940 388 FORIT CONTRACTING<br>
                                Reference: Mr. K. Chimbwanda<br>
                                Scope of work: Culverts<br>
                                Project year: 2021
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-6 col-lg-4">
                <div class="video-content">
                    <div class="card">
                        <div class="image">
                            <video src="images/video.mp4" class="video-fluid" controls></video>
                        </div>
                        <div class="video-description">
                            <h3>Phil Makereke
                            </h3>
                            <p>
                                Location: Sunderland, Belvedere, Harare<br>
                                Office Renovation<br>
                                Contact : +44 7450 214252<br>


                            </p>
                        </div>
                    </div>
                </div>
            </div>
         </div>
        -->

        <div style="padding-bottom: 70px;"></div>


        <section id="renovate" class="renovate-section renovate-two pt-100 pb-70">
            <div class="container-fluid">
                <h2 class="section-heading"><span class="highlight">COMPLETED PROJECTS</span></h2>
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="image-content">
                            <div class="video-wrapper">
                                <div class="video-content">
                                    <video src="images/town.mp4" class="video-fluid" controls></video>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="content">
                            <h2 class="color-secondary">Musungo Cables</h2>
                            <div style="padding-bottom: 60px;"></div>
                            <div class="project-details">
                                <p>Location: Cnr G. Silundika /First Street, Harare</p>
                                <p>Reference: Mr. K. Chimbwanda</p>
                                <p>Contact Details: +263 716 940 388</p>
                                <p>Project Year: 2023</p>
                            </div>


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

        </div>
    </div>
    <div style="padding-bottom: 50px;"></div>
</section>

@endsection
