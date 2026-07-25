@extends('layouts.frontendLayout')
@section('title', 'Contact Us')

@section('content')

<!--============================
    CONTACT HERO START
=============================-->
<section id="contactHero">

    <div class="hero-shape hero-shape-1"></div>
    <div class="hero-shape hero-shape-2"></div>

    <div class="container">

        <span class="contact-subtitle">Contact Us</span>

        <h1 class="contact-title">
            Get in <span>Touch</span>
        </h1>

        <p class="contact-description">
            Have questions, feedback, or need assistance? Our dedicated team is
            here to help. Reach out to us, and we'll get back to you as soon as possible.
        </p>

    </div>

</section>
<!--============================
    CONTACT HERO END
=============================-->

<!--=================================
    CONTACT SECTION START
==================================-->
<section id="contactInfo">

    <div class="container">

        <div class="row g-4">

            <!-- Contact Info -->
            <div class="col-lg-4">

                <div class="contact-info-card">

                    <span class="card-tag">
                        Contact Information
                    </span>

                    <h3>
                       We're Here to Help
                    </h3>

                    <p>
                        Feel free to reach out through any of the following
                        channels. We're always happy to assist you.
                    </p>

                    <!-- Address -->
                    <div class="info-item">

                        <div class="info-icon">
                            <iconify-icon icon="tdesign:location"></iconify-icon>
                        </div>

                        <div class="info-content">
                            <span>Address</span>

                            <h6>
                                2715 Ash Dr. San Jose,<br>
                                South Dakota 83475
                            </h6>
                        </div>

                    </div>

                    <!-- Email -->
                    <div class="info-item">

                        <div class="info-icon">
                            <iconify-icon icon="streamline-cyber:email-2"></iconify-icon>
                        </div>

                        <div class="info-content">
                            <span>Email</span>

                            <h6>
                                proxy@gmail.com<br>
                                help.proxy@gmail.com
                            </h6>
                        </div>

                    </div>

                    <!-- Phone -->
                    <div class="info-item">

                        <div class="info-icon">
                            <iconify-icon icon="mingcute:phone-call-line"></iconify-icon>
                        </div>

                        <div class="info-content">
                            <span>Phone</span>

                            <h6>
                                +1 (219) 555-0114<br>
                                +1 (164) 333-0487
                            </h6>
                        </div>

                    </div>

                    <!-- Office Hours -->
                    <div class="info-item">

                        <div class="info-icon">
                            <iconify-icon icon="mdi:clock-outline"></iconify-icon>
                        </div>

                        <div class="info-content">
                            <span>Office Hours</span>

                            <h6>
                                Monday - Saturday<br>
                                09:00 AM - 08:00 PM
                            </h6>
                        </div>

                    </div>

                    <!-- Social -->
                    <div class="contact-social">

                        <a href="#">
                            <iconify-icon icon="ri:facebook-fill"></iconify-icon>
                        </a>

                        <a href="#">
                            <iconify-icon icon="ri:instagram-line"></iconify-icon>
                        </a>

                        <a href="#">
                            <iconify-icon icon="ri:twitter-x-line"></iconify-icon>
                        </a>

                        <a href="#">
                            <iconify-icon icon="ri:linkedin-fill"></iconify-icon>
                        </a>

                    </div>

                </div>

            </div>

            <!-- Contact Form -->
            <div class="col-lg-8">

<div class="contact-form-card">

    <span class="card-tag">
        Contact Form
    </span>

    <h3>
        Send Us a Message
    </h3>

    <p>
        Complete the form below and our team will get back to you as soon as possible.
    </p>

    <form action="">

        <div class="row g-4">

            <div class="col-md-6">
                <input type="text" placeholder="First Name">
            </div>

            <div class="col-md-6">
                <input type="text" placeholder="Last Name">
            </div>

            <div class="col-md-6">
                <input type="email" placeholder="Email Address">
            </div>

            <div class="col-md-6">
                <input type="text" placeholder="Phone Number">
            </div>

            <div class="col-12">
                <input type="text" placeholder="Subject">
            </div>

            <div class="col-12">
                <textarea rows="6" placeholder="Write your message..."></textarea>
            </div>

            <div class="col-12">
                <button type="submit" class="contact-btn">
                    Send Message

                    <iconify-icon icon="ph:arrow-right-bold"></iconify-icon>
                </button>
            </div>

        </div>

    </form>

</div>
<!-- ==========================
     Form End
========================== -->

            </div>

        </div>

    </div>

</section>


<!--=================================
    MAP SECTION START
==================================-->
<section id="contactMap">

    <div class="container">

        <div class="section-heading">

            <span class="card-tag">
                Find Us
            </span>

            <h2>
                Visit Our Office
            </h2>

            <p>
                Stop by our office or use the map below to find us quickly and easily.
            </p>

        </div>

        <div class="map-card">

            <iframe
                src="https://maps.google.com/maps?width=626&height=400&hl=en&q=bangladesh&t=p&z=14&ie=UTF8&iwloc=B&output=embed"
                loading="lazy"
                allowfullscreen
                referrerpolicy="no-referrer-when-downgrade">
            </iframe>

        </div>

    </div>

</section>

@endsection