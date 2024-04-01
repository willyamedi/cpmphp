@extends('main')

@section('content')

<!-- Hero Section Start -->
<section class="hero-section-3">
    <div class="line-area">
      <span></span>
      <span></span>
      <span></span>
    </div>
    <div class="array-button">
      <button class="array-prev"><i class="fal fa-arrow-left"></i></button>
      <button class="array-next"><i class="fal fa-arrow-right"></i></button>
    </div>
    <div class="swiper hero-slider-3">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <div
            class="hero-3 bg-cover"
            style="background-image: url('assets/img/hero/04.jpg')"
          >
            <div class="container">
              <div class="row justify-content-center">
                <div class="col-xl-8 col-lg-8">
                  <div class="hero-content text-center">
                    <h5 data-animation="fadeInUp" data-delay="1.3s">
                      Kami adalah produsen
                    </h5>
                    <h1 data-animation="fadeInUp" data-delay="1.5s">
                      Pengharum mobil custom
                    </h1>
                    <p data-animation="fadeInUp" data-delay="1.7s">
                      Telah diliput oleh 6 perusahaan media ternama di
                      Indonesia <br />
                      Seperti Liputan6, TEMPO, Investor daily, Media
                      Indonesia, Bisnis.com, Viva
                    </p>
                    <div class="hero-button">
                      <a
                        href="about.html"
                        data-animation="fadeInUp"
                        data-delay="1.9s"
                        class="theme-btn hover-white"
                        >KONSULTASI SEKARANG</a
                      >
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

  <!-- Marque Section Start -->
  <div class="marque-section" style="margin-top: 50px">
    <div class="line-area">
      <span></span>
      <span></span>
      <span></span>
    </div>
    <div class="marquee-wrapper text-slider">
      <div class="marquee-inner to-left">
        <ul class="marqee-list d-flex">
          <li class="marquee-item">
            <span class="text-slider">WE</span
            ><span class="text-slider">CREATE</span
            ><span class="text-slider">UNIQUE</span
            ><span class="text-slider">CUSTOMIZE</span
            ><span class="text-slider">CAR PERFUME</span
            ><span class="text-slider">WE</span
            ><span class="text-slider">CREATE</span
            ><span class="text-slider">UNIQUE</span
            ><span class="text-slider">CUSTOMIZE</span
            ><span class="text-slider">PERFUME MERCHANDISE</span
            ><span class="text-slider">WE</span
            ><span class="text-slider">CREATE</span
            ><span class="text-slider">UNIQUE</span
            ><span class="text-slider">BRAND</span
            ><span class="text-slider">MERCHANDISE</span>
          </li>
        </ul>
      </div>
    </div>
  </div>

  <!-- About Section Start -->
  <section class="about-section fix section-padding">
    <div class="shape-image">
      <img src="assets/img/about/shape.png" alt="shape-img" />
    </div>
    <div class="shape-image-2">
      <img src="assets/img/about/shape-2.png" alt="shape-img" />
    </div>
    <div class="line-area">
      <span></span>
      <span></span>
      <span></span>
    </div>
    <div class="about-wrapper-3">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-xl-6 col-lg-6">
            <div
              class="about-image bg-cover wow fadeInUp"
              data-wow-delay=".3s"
              style="background-image: url('assets/img/about/about-5.jpg')"
            >
              <div
                class="about-image-2 bg-cover wow fadeInLeft"
                data-wow-delay=".5s"
                style="background-image: url('assets/img/about/about-6.jpg')"
              ></div>
            </div>
          </div>
          <div class="col-xl-6 col-lg-6 mt-5 mt-lg-0">
            <div class="about-content">
              <div class="section-title style-2">
                <h2 class="wow fadeInUp" data-wow-delay=".3s">
                  Telah berdiri sejak 2018 <br />
                  dan dipercaya oleh ribuan customer.
                </h2>
              </div>
              <h5 class="mt-3 mt-md-0 wow fadeInUp" data-wow-delay=".5s">
                Merchandise yang berkualitas, <br />
                akan meningkatkan kepercayaan customer
              </h5>
              <p class="wow fadeInUp" data-wow-delay=".7s">
                Kami sudah melewati berbagai proses trial error di awal hingga
                akhirnya berhasil memberikan kualitas terbaik untuk para klien
                kami. <br />
                Kami menawarkan pengharum mobil dengan kualitas terbaik yang
                ada di pasar, yang dapat menjadi sarana branding perusahaan
                Anda.
              </p>
              <div class="author-items wow fadeInUp" data-wow-delay=".9s">
                <div class="about-button">
                  <a href="about.html" class="theme-btn">
                    Ketahui lebih lanjut
                  </a>
                </div>
                <img src="assets/img/about/signature-2.png" alt="signature" />
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Project Section Start -->
  <section class="project-section-3 section-padding">
    <div class="line-area">
      <span></span>
      <span></span>
      <span></span>
    </div>
    <div class="shape-image">
      <img src="assets/img/project/shape.png" alt="shape-img" />
    </div>
    <div class="shape-image-2 float-bob-y">
      <img src="assets/img/project/shape-2.png" alt="shape-img" />
    </div>
    <div class="container">
      <div class="section-title">
        <span class="wow fadeInUp">Our Project</span>
        <h2 class="wow fadeInUp" data-wow-delay=".3s">
          Beberapa klien yang puas dan <br />
          percaya kepada kami
        </h2>
      </div>
    </div>
    <div class="project-wrapper style-2">
      <div class="swiper project-slider-2">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <div class="project-items-2 style-2">
              <div class="project-image">
                <img src="assets/img/project/09.jpg" alt="project-img" />
                <a href="project-details.html" class="icon">
                  <i class="flaticon-next"></i>
                </a>
                <div class="project-content">
                  <p>Jakarta</p>
                  <h4>
                    <a href="project-details.html">Grab Indonesia</a>
                  </h4>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="project-items-2 style-2">
              <div class="project-image">
                <img src="assets/img/project/10.jpg" alt="project-img" />
                <a href="project-details.html" class="icon">
                  <i class="flaticon-next"></i>
                </a>
                <div class="project-content">
                  <p>Jakarta</p>
                  <h4>
                    <a href="project-details.html">Gojek Indonesia</a>
                  </h4>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="project-items-2 style-2">
              <div class="project-image">
                <img src="assets/img/project/11.jpg" alt="project-img" />
                <a href="project-details.html" class="icon">
                  <i class="flaticon-next"></i>
                </a>
                <div class="project-content">
                  <h4>
                    <a href="project-details.html">Pertamina</a>
                  </h4>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="project-items-2 style-2">
              <div class="project-image">
                <img src="assets/img/project/12.jpg" alt="project-img" />
                <a href="project-details.html" class="icon">
                  <i class="flaticon-next"></i>
                </a>
                <div class="project-content">
                  <p>San Fransisco</p>
                  <h4>
                    <a href="project-details.html">Digital Consulting</a>
                  </h4>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Marque Section Start -->
  <div class="marque-section">
    <div class="line-area">
      <span></span>
      <span></span>
      <span></span>
    </div>
    <div class="marquee-wrapper text-slider">
      <div class="marquee-inner to-left">
        <ul class="marqee-list d-flex">
          <li class="marquee-item">
            <span class="text-slider">WE</span
            ><span class="text-slider">CREATE</span
            ><span class="text-slider">UNIQUE</span
            ><span class="text-slider">CUSTOMIZE</span
            ><span class="text-slider">CAR PERFUME</span
            ><span class="text-slider">WE</span
            ><span class="text-slider">CREATE</span
            ><span class="text-slider">UNIQUE</span
            ><span class="text-slider">CUSTOMIZE</span
            ><span class="text-slider">PERFUME MERCHANDISE</span
            ><span class="text-slider">WE</span
            ><span class="text-slider">CREATE</span
            ><span class="text-slider">UNIQUE</span
            ><span class="text-slider">BRAND</span
            ><span class="text-slider">MERCHANDISE</span>
          </li>
        </ul>
      </div>
    </div>
  </div>

  <!-- Choose Us Section Start -->
  <section class="choose-us-section fix section-padding">
    <div class="line-area">
      <span></span>
      <span></span>
      <span></span>
    </div>
    <div class="shape-image float-bob-y">
      <img src="assets/img/choose/shape.png" alt="shape-img" />
    </div>
    <div class="container">
      <div class="choose-wrapper">
        <div class="row">
          <div class="col-xl-6 col-lg-6">
            <div class="choose-content">
              <div class="section-title">
                <span class="wow fadeInUp">Mengapa memilih kami</span>
                <h2 class="wow fadeInUp" data-wow-delay=".3s">
                  Why you should choose <br />
                  our services
                </h2>
              </div>
              <p class="mt-4 mt-md-0 wow fadeInUp" data-wow-delay=".5s">
                Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet.
                Aenean sollicitudin, lorem is simply free text quis bibendum.
                There are many variations of passages of available
              </p>
              <ul class="wow fadeInUp" data-wow-delay=".7s">
                <li>
                  <i class="flaticon-check-mark"></i>
                  Aliquam accumsan et ante id pellentesque
                </li>
                <li>
                  <i class="flaticon-check-mark"></i>
                  Aliquam accumsan et ante id
                </li>
              </ul>
              <div class="icon-area">
                <div class="icon-items wow fadeInUp" data-wow-delay=".3s">
                  <div class="icon">
                    <i class="flaticon-advertisig-agency"></i>
                  </div>
                  <div class="content">
                    <h5>Bahan terbaik di pasar</h5>
                    <p>
                      Lorem ipsum dolor sit amet, consectetur notted <br />
                      adipisicing elit sed do eiusmod temp
                    </p>
                  </div>
                </div>
                <div
                  class="icon-items style-2 wow fadeInUp"
                  data-wow-delay=".5s"
                >
                  <div class="icon">
                    <i class="flaticon-server"></i>
                  </div>
                  <div class="content">
                    <h5>Pengharum terbaik</h5>
                    <p>
                      Lorem ipsum dolor sit amet, consectetur notted <br />
                      adipisicing elit sed do eiusmod temp
                    </p>
                  </div>
                </div>
                <div
                  class="icon-items style-2 wow fadeInUp"
                  data-wow-delay=".5s"
                >
                  <div class="icon">
                    <i class="flaticon-server"></i>
                  </div>
                  <div class="content">
                    <h5>Harga terbaik</h5>
                    <p>
                      Lorem ipsum dolor sit amet, consectetur notted <br />
                      adipisicing elit sed do eiusmod temp
                    </p>
                  </div>
                </div>

                <div
                  class="icon-items style-2 wow fadeInUp"
                  data-wow-delay=".5s"
                >
                  <div class="icon">
                    <i class="flaticon-server"></i>
                  </div>
                  <div class="content">
                    <h5>Produk bergaransi</h5>
                    <p>
                      Lorem ipsum dolor sit amet, consectetur notted <br />
                      adipisicing elit sed do eiusmod temp
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-6 col-lg-6 mt-5 mt-lg-0">
            <div class="choose-image-items">
              <div
                class="choose-image bg-cover wow fadeInUp"
                data-wow-delay=".3s"
                style="background-image: url('assets/img/choose/01.jpg')"
              ></div>
              <div
                class="choose-image-2 wow fadeInRight"
                data-wow-delay=".5s"
              >
                <img src="assets/img/choose/02.jpg" alt="choose-img" />
              </div>
              <div class="circle-shape">
                <img
                  src="assets/img/choose/circle-shape.png"
                  alt="shape-img"
                  class="text-circle"
                />
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Website Checking Section Start -->
  <section
    class="website-checking section-padding fix bg-cover"
    style="background-image: url('assets/img/bg.jpg')"
  >
    <div class="container">
      <div class="section-title text-center">
        <span class="text-white wow fadeInUp"
          >Tertarik untuk mengetahui lebih lanjut?</span
        >
        <h2 class="text-white wow fadeInUp" data-wow-delay=".3s">
          Dapatkan penawaran hari ini
        </h2>
      </div>
      <div class="website-checking-wrapper">
        <div class="row justify-content-center">
          <div class="col-lg-10">
            <div class="checking-area wow fadeInUp" data-wow-delay=".5s">
              <div class="check-items d-flex align-items-center">
                <div class="check-input">
                  <input type="text" id="text" placeholder="Pesan" />
                </div>
                <div class="check-input">
                  <input type="email" id="email" placeholder="Alamat Email" />
                </div>
              </div>
              <button class="theme-btn header-color-2" type="submit">
                Dapatkan sekarang
              </button>
            </div>
            
          </div>
        </div>
        <div class="counter-wrapper section-padding pb-0">
          <div class="counter-items wow fadeInUp" data-wow-delay=".3s">
            <h2><span class="count">1.580</span>+</h2>
            <p>Projects completed</p>
          </div>
          <div class="counter-items wow fadeInUp" data-wow-delay=".5s">
            <h2><span class="count">1892</span>+</h2>
            <p>Happy clients</p>
          </div>
          <div class="counter-items wow fadeInUp" data-wow-delay=".7s">
            <h2><span class="count">2860</span>+</h2>
            <p>Creative ideas</p>
          </div>
          <div class="counter-items wow fadeInUp" data-wow-delay=".9s">
            <h2><span class="count">25</span>+</h2>
            <p>Team members</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- News Section Start -->
  <section class="news-section section-padding fix">
    <div class="line-area">
      <span></span>
      <span></span>
      <span></span>
    </div>
  </section>

  @endsection
