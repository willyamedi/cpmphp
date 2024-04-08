<!DOCTYPE html>
<html lang="en">
<!--<< Header Area >>-->

<head>
    <!-- ========== Meta Tags ========== -->
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="author" content="modinatheme" />
    <meta name="description" content="Custom parfum mobil Indonesia" />
    <!-- ======== Page title ============ -->
    <title>Custom parfum mobil Indonesia</title>
    <!--<< Favcion >>-->
    <link rel="shortcut icon" href="{{ asset('assets/img/logo/favicon.svg') }}" />
    <script src="https://unpkg.com/@phosphor-icons/web"></script>
    <!--<< Bootstrap min.css >>-->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}" />
    <!--<< Font Awesome.css >>-->
    <link rel="stylesheet" href="{{ asset('assets/css/font-awesome.css') }}" />
    <!--<< Animate.css >>-->
    <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}" />
    <!--<< Magnific Popup.css >>-->
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}" />
    <!--<< MeanMenu.css >>-->
    <link rel="stylesheet" href="{{ asset('assets/css/meanmenu.css') }}" />
    <!--<< Swiper Bkkundle.css >>-->
    <link rel="stylesheet" href="{{ asset('assets/css/swiper-bundle.min.css') }}" />
    <!--<< Nice Select.css >>-->
    <link rel="stylesheet" href="{{ asset('assets/css/nice-select.css') }}" />
    <!--<< Main.css >>-->
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}" />
    <!--<< Style.css >>-->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}" />
</head>

<body>
    @php
        $whatsapp = 'https://wa.me/6282126151151';
    @endphp

    <!-- Preloader Start -->
    <div id="preloader" class="preloader">
        <div class="animation-preloader">
            <div class="spinner"></div>
            <div class="txt-loading">
                <span data-text-preloader="C" class="letters-loading"> C </span>
                <span data-text-preloader="P" class="letters-loading"> P </span>
                <span data-text-preloader="M" class="letters-loading"> M </span>
                <span data-text-preloader="." class="letters-loading"> . </span>
                <span data-text-preloader="I" class="letters-loading"> I </span>
                <span data-text-preloader="D" class="letters-loading"> D </span>
            </div>
            <p class="text-center">Loading</p>
        </div>
        <div class="loader">
            <div class="row">
                <div class="col-3 loader-section section-left">
                    <div class="bg"></div>
                </div>
                <div class="col-3 loader-section section-left">
                    <div class="bg"></div>
                </div>
                <div class="col-3 loader-section section-right">
                    <div class="bg"></div>
                </div>
                <div class="col-3 loader-section section-right">
                    <div class="bg"></div>
                </div>
            </div>
        </div>
    </div>

    <!--<< Mouse Cursor Start >>-->
    <div class="mouse-cursor cursor-outer"></div>
    <div class="mouse-cursor cursor-inner"></div>

    <!-- Offcanvas Area Start -->
    <div class="fix-area">
        <div class="offcanvas__info">
            <div class="offcanvas__wrapper">
                <div class="offcanvas__content">
                    <div class="offcanvas__top mb-5 d-flex justify-content-between align-items-center">
                        <div class="offcanvas__logo">
                            <a href="index.html">
                                <img src="assets/img/logo/header-logo.svg') }}" alt="logo-img" />
                            </a>
                        </div>
                        <div class="offcanvas__close">
                            <button>
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                    </div>

                    <div class="mobile-menu fix mb-3"></div>
                    <div class="offcanvas__contact">
                        <h4>Contact Info</h4>
                        <ul>
                            <li class="d-flex align-items-center">
                                <div class="offcanvas__contact-icon">
                                    <i class="fal fa-map-marker-alt"></i>
                                </div>
                                <div class="offcanvas__contact-text">
                                    <a target="_blank" href="#">Tangerang, Indonesia</a>
                                </div>
                            </li>
                            <li class="d-flex align-items-center">
                                <div class="offcanvas__contact-icon mr-15">
                                    <i class="fal fa-envelope"></i>
                                </div>
                                <div class="offcanvas__contact-text">
                                    <a href="mailto:info@example.com"><span>info@customparfummobil.id</span></a>
                                </div>
                            </li>
                            <li class="d-flex align-items-center">
                                <div class="offcanvas__contact-icon mr-15">
                                    <i class="fal fa-clock"></i>
                                </div>
                                <div class="offcanvas__contact-text">
                                    <a target="_blank" href="#">Mod-Sat, 09am -05pm</a>
                                </div>
                            </li>
                            <li class="d-flex align-items-center">
                                <div class="offcanvas__contact-icon mr-15">
                                    <i class="far fa-phone"></i>
                                </div>
                                <div class="offcanvas__contact-text">
                                    <a href="tel:+6282126151151">+62821-26-151-151</a>
                                </div>
                            </li>
                        </ul>
                        <div class="header-button mt-4">
                            <a href="contact.html" class="theme-btn text-center">
                                Contact Us
                            </a>
                        </div>
                        <div class="social-icon d-flex align-items-center">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-youtube"></i></a>
                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="offcanvas__overlay"></div>

    @include('components.mainmenu', ["whatsapp"=>$whatsapp])

    @yield('content')

    @include('components.footer', ["whatsapp"=>$whatsapp])
