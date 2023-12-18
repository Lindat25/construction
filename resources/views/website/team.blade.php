
@extends('website.layouts.website')

@section('content')
    <style>



        .team-section {
            background-image: url('images/yelow.jpg');
            background-size: cover;
            background-position: center;
            padding: 140px;
        }

        .team-member {
            background-color: #f0f5ff;
            padding: 20px;
            text-align: center;
            margin-bottom: 30px;
        }

        .team-member img {
            width: 200px;
            height: 200px;
            border-radius: 50%;
            object-fit: cover;
            margin-bottom: 20px;
        }

        .team-member h4 {
            color: grey;
            font-size: 20px;
            margin-bottom: 10px;
        }

        .team-member p {
            color: #333;
            font-size: 16px;
            margin-bottom: 0;
        }

        .lead-2 {
        text-align: justify;
        text-justify: inter-word;
        line-height: 1.5; /* Adjust the line height as needed */
        margin-bottom: 20px;
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

<section class="hero-section pt-100" style="position: relative;">
    <div class="background-img" style="background: url('{{ asset('images/team.jpg') }}') no-repeat center center; background-size: cover; position: relative;">
        <div class="image-overlay" style="background-color: rgba(0, 123, 255, 0.5); width: 100%; height: 100%; position: absolute; top: 0; left: 0;"></div>
        <div class="container">
            <!-- Your content inside the container -->
        </div>
    </div>
</section>

<div class="team-section">
    <h1 style="color: #007bff; text-align: center; padding-bottom:40px;">MEET THE TEAM</h1>
    <div class="container">
        <div class="row">

            @php
                $teamMembers = [
                    [
                        'name' => 'MR TAWANDA MADZIYIRE',
                        'picture' => 'images/user.png',
                        'description' => 'Mr Madziyire has 8 years of experience in the
                            Construction Industry as Project Manager holds a
                            Bsc (Hons) Construction Project Management and
                            Surveying. He has worked for Forit Contracting and
                            Lag Construction. Mr Madziyire is responsible for
                            holding regular meetings with clients, thirds parties
                            and the project team to report progress of projects
                            and an overall responsibility of ensuring contractual
                            obligations related to the construction are fulfilled.
                            ',
                    ],
                    [
                        'name' => 'MISS SIBONGILE NKOMO',
                        'picture' => 'images/user.png',
                        'description' => 'Miss Nkomo holds a National Diploma in Quantity
                            Surveying from Harare Polytechnic Institution. Miss
                            Nkomo has worked at Chisipite Plant Hire &
                            Earthmovers as Quantity Surveyor. Miss Nkomo will
                            be responsible for Preparation of Bill of Quantity
                            ,Material Schedule and Budget of a Project. Miss
                            Nkomo will be preparing Tender documents, project
                            cost analysis and valuations.
                            ',
                    ],
                    [
                        'name' => 'ENG TAFADZWA KAVAZA',
                        'picture' => 'images/user.png',
                        'description' => 'Eng Kavaza graduated with a HND in Civil
                            Engineering Harare Polytechnic. Eng Kavaza has
                            worked at Prevail International as a Site Engineer.
                            Eng Kavaza is responsible for preparing sites prior to
                            the commencement of construction work ,making
                            safety inspections and ensuring site procedures
                            uphold construction and site regulations. Eng
                            Kavaza is also responsible for supervising contracted
                            staff and meeting with sub-contractors. ',
                    ],
                ];
            @endphp

            @foreach($teamMembers as $teamMember)
            <div class="col-lg-4 col-md-6">
                <div class="team-member">
                    <img src="{{ $teamMember['picture'] }}" alt="{{ $teamMember['name'] }}" class="img-fluid">
                    <h4>{{ $teamMember['name'] }}</h4>
                    <p class="lead-2">{{ $teamMember['description'] }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>

    @endsection
