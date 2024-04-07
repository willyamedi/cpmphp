@extends('main')

@section('content')

<!--<< Breadcrumb Section Start >>-->
<div class="breadcrumb-wrapper bg-cover section-padding" style="background-image: url('assets/img/breadcrumb.jpg');">
    <div class="layer-shape wow fadeInLeft" data-wow-delay=".3s">
        <img src="assets/img/layer-shape-3.png" alt="shape-img">
    </div>
    <div class="breadcrumb-shape wow fadeInRight" data-wow-delay=".5s">
        <img src="assets/img/breadcrumb-shape.png" alt="shape-img">
    </div>
    <div class="container">
        <div class="page-heading">
            <h1 class="wow fadeInUp" data-wow-delay=".3s">Contact Us</h1>
            <ul class="breadcrumb-items wow fadeInUp" data-wow-delay=".5s">
                <li>
                    <a href="index.html">
                    Home Page
                    </a>
                </li>
                <li>
                    <i class="fal fa-minus"></i>
                </li>
                <li>
                    Contact Us
                </li>
            </ul>
        </div>
    </div>
   </div>

    <!-- Contact Info Section Start -->
    <section class="contact-info-section section-padding fix">
       <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-6 wow fadeInUp" data-wow-delay=".3s">
                    <div class="map-items">
                        <div class="googpemap">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.445706373162!2d106.69035197526979!3d-6.2047880607816435!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f947a482dfff%3A0x5ac96735abf3309d!2sCustom%20parfum%20mobil%20.id!5e0!3m2!1sen!2sid!4v1712484758136!5m2!1sen!2sid" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 mt-5 mt-lg-0">
                    <div class="contact-info-content">
                        <div class="section-title wow fadeInUp" data-wow-delay=".3s">
                            <h2>Hubungi kami</h2>
                        </div>
                        <p class="mt-4 mt-md-0 wow fadeInUp" data-wow-delay=".5s">
                            Hubungi kami untuk melakukan janji temu terlebih dahulu
                        </p>
                        <div class="info-list">
                            <h3 class="wow fadeInUp" data-wow-delay=".3s">Contact Info</h3>
                            <div class="info-items mb-3 wow fadeInUp" data-wow-delay=".5s">
                                <h5>Address</h5>
                                <p>2Green village blok boulevard D no 5, Jl. KH Hasyim Ashari, RT.001/RW.007, Nerogtog, Kec. Pinang, Kota Tangerang, Banten 15146, Indonesia</p>
                            </div>
                            <div class="info-items mb-3 wow fadeInUp" data-wow-delay=".7s">
                                <h5>Phone</h5>
                                <a href="tel:+6282126151151">+62821-26-151-151 </a>
                            <div class="info-items wow fadeInUp" data-wow-delay=".9s">
                                <h5>Email</h5>
                                <a href="#0">info@customparfummobil.id </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
       </div>
    </section>



    @endsection
