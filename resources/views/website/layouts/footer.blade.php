
    <footer class="footer-area pt-100 pb-70 ">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-5 col-sm-6 col-12">
                    <div class="footer-widget">
                        <div class="navbar-brand">
                            <a href="{{ route('welcome') }}"><img src="{{ asset('images/logo.png') }}" alt="Company Logo" class="company-logo"></a>
                        </div>
                        <p class="tensor">We are a company dedicated to infrastructure development and nation building. Our mission is to provide quality and cost-effective engineering services. With a focus on accountability and customer satisfaction, we strive to be a distinguished and trusted firm in Zimbabwe and beyond.</p>
                        <div class="social-link">
                            <a href="#" target="_blank">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a href="#" target="_blank">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a href="#" target="_blank">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                            <a href="https://www.youtube.com/channel/UCHrdRBKWTIXz8QldcmDptkQ" target="_blank">
                                <i class="fab fa-youtube"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-5 col-sm-6 col-12">
                    <div class="footer-widget">
                        <h5>Quick Links</h5>
                        <ul class="footer-links">
                            <li>
                                <i class="flaticon-play-button"></i>
                                <a href="https://www.tensor.co.zw/about">ABOUT US</a>
                            </li>
                            <li>
                                <i class="flaticon-play-button"></i>
                                <a href="https://www.tensor.co.zw/sustainability">SERVICES</a>
                            </li>
                            <li>
                                <i class="flaticon-play-button"></i>
                                <a href="#">CONTACT US</a>
                            </li>
                            <li>
                                <i class="flaticon-play-button"></i>
                                <a href="https://www.tensor.co.zw/projects">TEAM</a>
                            </li>

                        </ul>
                    </div>
                </div>

                <div class="col-lg-4 col-md-5 col-sm-6 col-12">
                    <div class="footer-widget">
                        <h5>Contacts</h5>
                        <ul class="contact-info">
                            <li >
                                <span class="tag">
                                    <i class="fa fa-envelope"></i>
                                </span>
                                <span>14 CARRICK RD, BORROWDALE <br> HARARE, ZIMBABWE</span>
                            </li>
                            <li >
                                <span class="tag">
                                    <i class="fa fa-phone"></i>
                                </span>
                                <span>
                                    <a href="tel:+263242740160">0779044369
                                    </a><br>
                                    <a href="tel:+263242740371">0775285241
                                    </a><br>
                                    <a href="tel:+263242740371">0774251156
                                    </a>
                                </span>
                            </li>
                            <li >
                                <span class="tag">
                                    <i class="fa fa-envelope"></i>
                                </span>
                                <span>
                                    <a href="mailto:info@tshamie.co.zw">tshamieholdings@gmail.com</a>
                                </span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Include Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>

<style>
.footer-area {
  width: 100%;
  background-color: #f8f8f8;
  padding: 60px 0;
}

ul.footer-links,
ul.contact-info {
    list-style: none;
}

ul.footer-links li a,
ul.contact-info li a {
    list-style: none;
    color: #000;
    text-decoration: none;


}

ul.footer-links li a:hover,
        ul.contact-info li a:hover {
            color: blue;
        }

        .social-link a {
            margin-right: 10px;
            text-decoration: none; /* Adjust the space between icons by modifying this value */
        }

        .footer-widget ul.footer-links li {
            margin-bottom: 20px; /* Add space between links by modifying this value */
        }
        .tensor{
            margin-top: 20px;
            margin-bottom: 20px;
        }


        .footer-widget ul.contact-info li {
            margin-bottom: 20px;
            display: flex;
            align-items: flex-start; /* Add space between lists by modifying this value */
        }

        ul.contact-info li .tag {

            margin-right: 10px;
            color: #9ACD32;

            padding: 10px;
            border-radius: 100%;
            height: 100px; /* Modify the height value as per your requirement */
        }




        .footer-widget ul.contact-info li span {
            display: inline-block;
        }
        .footer-widget ul.contact-info li .tag {
            font-size: 24px;
            margin-right: 10px;
            height:30px;
        }

        .footer-widget ul.contact-info li span {
            display: inline;
        }


        .social-link a i {
        color: #9ACD32; /* Set the initial color to light grey */
        transition: color 0.3s; /* Add a smooth transition effect */
    }

    .social-link a:hover i {
        color: #00f; /* Change to blue on hover */
    }
</style>
