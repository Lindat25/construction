@extends('website.layouts.website')

@section('body')

<style>
    .h1 {
        font-size: 100px;
    }

    /* Add a unique prefix to your custom classes */
    .custom-lead {
        line-height: 2;
        font-size: 20px;
        overflow: hidden;
        white-space: nowrap;
        color:white;
    }

    .custom-hero-content {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        text-align: left;
        height: 100vh;
    }

    .custom-hero-content h1 {
        color: green;
        font-size: 48px;
        margin-bottom: 20px;
    }

    .custom-hero-content .custom-lead {
        font-size: 48px;
    }

    .action-btn .btn {
        border-radius: 30px;
        background-color: green;
        color: white;
        padding: 12px 24px;
        transition: background-color 0.3s ease;
        text-decoration: none;
    }

    .action-btn .btn:hover {
        background-color: white;
        color: green;
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
}

    @media (max-width: 767px) {
        .custom-hero-content h1 {
            font-size: 36px;
        }

        .custom-hero-content .custom-lead {
            font-size: 16px;
        }

        .action-btn .btn {
            font-size: 14px;
            padding: 10px 20px;
        }
    }
</style>

<section class="hero-section pt-100 background-img" style="background: url('{{ asset('images/ce.jpg') }}') no-repeat center center / cover; ">
    <div class="container">
        <div class="custom-hero-content">
            <h1 class="text-white font-weight-bold">
                TSHAMIE HOLDINGS
            </h1>
            <p class="custom-lead" id="typing-effect"></p>
            <div class="action-btn mt-4">
                <a href="{{ route('register') }}" class="btn solid-btn hero">SERVICES</a>
            </div>
        </div>
    </div>
</section>

<script>
    // JavaScript to activate the typing animation
    window.addEventListener('DOMContentLoaded', function() {
        var paragraph = document.getElementById('typing-effect');
        var text = "Transforming Visions into Reality";
        var words = text.split(' ');
        var index = 0;

        function typeWords() {
            if (index < words.length) {
                paragraph.textContent += words[index] + ' ';
                index++;
                setTimeout(typeWords, 1000); // Adjust the typing speed as needed
            }
        }

        typeWords();
    });
</script>

@endsection

<div class="row">
    <div class="col-md-12">
        <div class="text-center">
            <h1>About us</h1>
            <hr>
            <div class="spacer"></div>
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
