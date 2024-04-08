@extends('main')

@section('content')
@php
        $whatsapp = 'https://wa.me/6282126151151';
    @endphp
    <!--<< Breadcrumb Section Start >>-->
    <div class="breadcrumb-wrapper section-padding bg-cover" style="background-image: url('assets/img/breadcrumb.jpg');">
        <div class="layer-shape wow fadeInLeft" data-wow-delay=".3s">
            <img src="assets/img/layer-shape-3.png" alt="shape-img">
        </div>
        <div class="breadcrumb-shape wow fadeInRight" data-wow-delay=".5s">
            <img src="assets/img/breadcrumb-shape.png" alt="shape-img">
        </div>
        <div class="container">
            <div class="page-heading">
                <h1 class="wow fadeInUp" data-wow-delay=".3s">Faq Page</h1>
                <ul class="breadcrumb-items wow fadeInUp" data-wow-delay=".5s">
                    <li>
                        <a href="index.html">
                            Home
                        </a>
                    </li>
                    <li>
                        <i class="fal fa-minus"></i>
                    </li>
                    <li>
                        Frequently Asked Question
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <!--<< faqyu >>-->
    <section class="faq-section fix section-padding">
        <div class="container">
            <div class="faq-wrapper-2">
                <div class="faq-items">
                    <div class="section-title mb-0">
                        <span class="wow fadeInUp">Our question and answer</span>
                        <h2 class="wow fadeInUp" data-wow-delay=".3s">
                            Frequently asked question <br>
                            & answer here
                        </h2>
                    </div>
                    <div class="faq-image">
                        <img src="assets/img/faq.png" alt="faq-img">
                    </div>
                </div>
                <div class="row">

                    <div class="col-lg-1"></div>
                    <div class="col-lg-12">
                        <div class="faq-content style-2">
                            <div class="faq-accordion">
                                <div class="accordion" id="accordion">
                                    <div class="accordion-item wow fadeInUp" data-wow-delay=".3s">
                                        <h5 class="accordion-header">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#faq1" aria-expanded="true" aria-controls="faq1">
                                                Berapa lama waktu produksi yang di butuhkan? </button>
                                        </h5>
                                        <div id="faq1" class="accordion-collapse collapse show"
                                            data-bs-parent="#accordion">
                                            <div class="accordion-body">
                                                Waktu produksi tergantung dari kuantiti yang dipesan. Untuk kuantiti 100
                                                - 500 pcs dibutuhkan kurang lebih 5-7 hari kerja. Kami akan
                                                menginformasikan estimasi pengerjaan sebelum customer melakukan
                                                pembayaran.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item wow fadeInUp" data-wow-delay=".5s">
                                        <h5 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#faq2" aria-expanded="false"
                                                aria-controls="faq2">
                                                Berapa lama ketahanan dari pengharum mobil ini?
                                            </button>
                                        </h5>
                                        <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#accordion">
                                            <div class="accordion-body">
                                                A : Kurang lebih 1-2 minggu tergantung dari penempatannya. Semakin besar
                                                ruangan maka aroma akan lebih cepat hilang. Jika kemasan plastik belum
                                                dibuka maka aroma bisa bertahan lebih dari 1 tahun.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item wow fadeInUp" data-wow-delay=".7s">
                                        <h5 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#faq3" aria-expanded="false"
                                                aria-controls="faq3">
                                                Apakah bahan pengharum mobil ini aman untuk kesehatan?
                                            </button>
                                        </h5>
                                        <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#accordion">
                                            <div class="accordion-body">
                                                Selama pengunaan dilakukan secara benar, maka pengharum kami aman bagi
                                                kesehatan karena kami tidak menggunakan bahan campuran yang berbahaya
                                                bagi kesehatan.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item wow fadeInUp" data-wow-delay=".8s">
                                        <h5 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#faq4" aria-expanded="false"
                                                aria-controls="faq4">
                                                Apakah pengharum ini bersertifikat?
                                            </button>
                                        </h5>
                                        <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#accordion">
                                            <div class="accordion-body">
                                                Pengharum kami memikili sertifikat internasional yaitu IFRA
                                                (International Fragrance Association). Sertifikat IFRA adalah sertifikat
                                                yang dikeluarkan oleh asosiasi fragrance sedunia dimana pabrik yang
                                                memiliki sertifikat ini sudah lolos dari berbagai macam uji kualitas
                                                dengan berbagai indikator pengujian.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item wow fadeInUp" data-wow-delay=".9s">
                                        <h5 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#faq5" aria-expanded="false"
                                                aria-controls="faq5">
                                                Apakah memungkinkan untuk memesan aroma yang berbeda dari pilihan aroma
                                                yang tersedia?
                                            </button>
                                        </h5>
                                        <div id="faq5" class="accordion-collapse collapse" data-bs-parent="#accordion">
                                            <div class="accordion-body">
                                                Kami dapat memberikan aroma yang berbeda dari pilihan aroma yang kami
                                                sediakan jika Anda memesan dalam kuantiti tertentu.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item wow fadeInUp" data-wow-delay=".9s">
                                        <h5 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#faq5" aria-expanded="false"
                                                aria-controls="faq5">
                                                Apakah tim CPM bisa membantu proses design?
                                            </button>
                                        </h5>
                                        <div id="faq5" class="accordion-collapse collapse"
                                            data-bs-parent="#accordion">
                                            <div class="accordion-body">
                                                Ya kami memberikan servis untuk konsultasi design dari file mentah ke
                                                layout final secara gratis.
                                            </div>
                                        </div>
                                        <div class="accordion-item wow fadeInUp" data-wow-delay=".9s">
                                            <h5 class="accordion-header">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#faq5"
                                                    aria-expanded="false" aria-controls="faq5">
                                                    Bagaimana jika barang yang diterima tidak sesuai / terdapat cacat
                                                    produksi?
                                                </button>
                                            </h5>
                                            <div id="faq5" class="accordion-collapse collapse"
                                                data-bs-parent="#accordion">
                                                <div class="accordion-body">
                                                    Kami akan menanggung sepenuhnya jika ada cacat produksi atau hasil
                                                    produksi yang sesuai dengan layout yang sudah disepakati.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item wow fadeInUp" data-wow-delay=".9s">
                                            <h5 class="accordion-header">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#faq5"
                                                    aria-expanded="false" aria-controls="faq5">
                                                    Jasa pengiriman apa saja yang disediakan oleh CPM?
                                                </button>
                                            </h5>
                                            <div id="faq5" class="accordion-collapse collapse"
                                                data-bs-parent="#accordion">
                                                <div class="accordion-body">
                                                    Jnt, JNE, Sicepat, IDexpress, Wahana, Pos Indonesia, Gojek, Grab dan
                                                    beberapa kargo seperti sentral kargo, Baraka, dan Dakota
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item wow fadeInUp" data-wow-delay=".9s">
                                            <h5 class="accordion-header">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#faq5"
                                                    aria-expanded="false" aria-controls="faq5">
                                                    Apakah memungkinkan memesan sample terlebih dahulu? </button>
                                            </h5>
                                            <div id="faq5" class="accordion-collapse collapse"
                                                data-bs-parent="#accordion">
                                                <div class="accordion-body">
                                                    Ya, kami bisa memberikan sample terlebih dahulu jika diperlukan.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item wow fadeInUp" data-wow-delay=".9s">
                                            <h5 class="accordion-header">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#faq5"
                                                    aria-expanded="false" aria-controls="faq5">
                                                    Format gambar seperti apa yang seharusnya di kirimkan? </button>
                                            </h5>
                                            <div id="faq5" class="accordion-collapse collapse"
                                                data-bs-parent="#accordion">
                                                <div class="accordion-body">
                                                    Kami menerima file dalam bentuk JPEG / PNG / PSD / TIFF / PDF / AI.
                                                    untuk resolusi disarankan 300dpi agar hasil cetak tidak pecah. Bagi
                                                    yang mengirimkan file mentah, harap rasterize font yang ada di dalam
                                                    file. Jika ragu, konsultasikan kepada kami terlebih dahulu.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!--<< cta >>-->
    <section class="cta-section-2 fix section-padding background-image"
        style="background-image: url('assets/img/cta-banner/01.jpg')">
        <div class="shape-image">
            <img src="assets/img/layer-shape-2.png" alt="shape-img" />
        </div>
        <div class="container">
            <div class="cta-wrapper-4">
                <div class="cta-content">
                    <h2 class="wow fadeInUp" data-wow-delay=".3s">
                        Pesan sekarang juga &<br />
                        Dapatkan penawaran menarik
                    </h2>
                    <div class="cta-button mt-4 wow fadeInUp" data-wow-delay=".5s">
                        <a href="{{$whatsapp}}" class="theme-btn hover-white">
                            Ya, saya mau
                        </a>
                    </div>
                </div>
                {{-- <div class="cta-image wow fadeInUp" data-wow-delay=".4s">
                    <img src="assets/img/cta.png" alt="img" />
                </div> --}}
            </div>
        </div>
    </section>

    <!-- Testimonial Section Start -->
    <section class="testimonial-section section-padding fix section-bg">
        <div class="left-shape">
            <img src="assets/img/client/left-shape.png" alt="shape-img">
        </div>
        <div class="right-shape">
            <img src="assets/img/client/right-shape.png" alt="shape-img">
        </div>
        <div class="container">
            <div class="section-title text-center">
                <span class="wow fadeInUp">Success stories</span>
                <h2 class="wow fadeInUp" data-wow-delay=".3s">
                    Why customers love to <br>
                    working with us
                </h2>
            </div>
            <div class="row">
                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                    <div class="testimonial-card-items">
                        <div class="testimonial-image bg-cover"
                            style="background-image: url('assets/img/client/01.jpg');"></div>
                        <div class="icon">
                            <i class="flaticon-quotation"></i>
                        </div>
                        <div class="testimonial-content">
                            <p>
                                Bring to the table win-win strategies to ensure proactive domination. At the end of the day
                                going forward normal that has evolved from
                                operational X is on the
                            </p>
                            <h4>Janes Cooper</h4>
                            <span>Designer</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".5s">
                    <div class="testimonial-card-items active">
                        <div class="testimonial-image bg-cover"
                            style="background-image: url('assets/img/client/02.jpg');"></div>
                        <div class="icon">
                            <i class="flaticon-quotation"></i>
                        </div>
                        <div class="testimonial-content">
                            <p>
                                Bring to the table win-win strategies to ensure proactive domination. At the end of the day
                                going forward normal that has evolved from
                                operational X is on the
                            </p>
                            <h4>Jack Daniel
                            </h4>
                            <span>Designer</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".7s">
                    <div class="testimonial-card-items">
                        <div class="testimonial-image bg-cover"
                            style="background-image: url('assets/img/client/03.jpg');"></div>
                        <div class="icon">
                            <i class="flaticon-quotation"></i>
                        </div>
                        <div class="testimonial-content">
                            <p>
                                Bring to the table win-win strategies to ensure proactive domination. At the end of the day
                                going forward normal that has evolved from
                                operational X is on the
                            </p>
                            <h4>Ava Olivia</h4>
                            <span>Designer</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- contact us -->
    <div class="col-xl-6 col-lg-6 mt-5 mt-lg-5 mb-5">
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
                    <p>2Green village blok boulevard D no 5, Jl. KH Hasyim Ashari, RT.001/RW.007, Nerogtog, Kec. Pinang,
                        Kota Tangerang, Banten 15146, Indonesia</p>
                </div>
                <div class="info-items mb-3 wow fadeInUp" data-wow-delay=".7s">
                    <h5>Phone</h5>
                    <a href="{{$whatsapp}}">+62821-26-151-151 </a>
                    <div class="info-items wow fadeInUp" data-wow-delay=".9s">
                        <h5>Email</h5>
                        <a href="#0">info@customparfummobil.id </a>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
