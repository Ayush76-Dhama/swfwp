<?php
/**
 * Template Name: Our Supporters Template
 * Template Post Type: post, page
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

get_header();
?>

<body>

    <!-- Spinner Start -->
    <div id="spinner"
        class="show w-100 vh-100 bg-white position-fixed translate-middle top-50 start-50  d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" role="status"></div>
    </div>
    <!-- Spinner End -->


    <!-- Navbar start -->
    <div class="container-fluid px-0">
        <div class="container px-0">
            <div class="topbar">
                <div class="row align-items-center justify-content-center">
                    <div class="col-md-8">
                        <div class="topbar-info d-flex flex-wrap">
                            <a href="mailto:info@shewings.com" class="text-light me-4"><i
                                    class="fas fa-envelope text-white me-2"></i>info@shewings.com</a>
                            <a href="tel:8800633291" class="text-light"><i
                                    class="fas fa-phone-alt text-white me-2"></i>+91 8800633291</a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="topbar-icon d-flex align-items-center justify-content-end">
                            <a href="https://www.facebook.com/SheWingsOrganization/" target="blank"
                                class="btn-square text-white me-2"><i class="fab fa-facebook-f"></i></a>
                            <a href="https://x.com/theshewings" target="blank" class="btn-square text-white me-2"><i
                                    class="fab fa-twitter"></i></a>
                            <a href="https://www.instagram.com/shewingsfoundation/" target="blank"
                                class="btn-square text-white me-2"><i class="fab fa-instagram"></i></a>
                            <a href="https://www.linkedin.com/company/shewingsfoundation/" target="blank"
                                class="btn-square text-white me-0"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <nav class="navbar navbar-light bg-light navbar-expand-xl">
                <a href="https://shewingsfoundation.com/" class="navbar-brand ms-3">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/logo/logo2.jpg"
                        alt="Shewings Logo" style="max-height: 60px; width: auto;">
                </a>
                <button class="navbar-toggler py-2 px-3 me-3" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarCollapse" style="background-color: red;">
                    <span class="fa fa-bars text-primary"></span>
                </button>
                <div class="collapse navbar-collapse bg-light text-danger" id="navbarCollapse">
                    <div class="navbar-nav ms-auto">
                        <a href="<?php echo home_url () ; ?>" class="nav-item nav-link" style="color: red;">Home</a>
                        <div class="nav-item dropdown">
                            <a href="<?php echo home_url('about-us'); ?>" class="nav-link dropdown-toggle"
                                style="color: red;">About
                                Us</a>
                            <div class="dropdown-menu">
                                <a href="<?php echo home_url('mission'); ?>" class="dropdown-item"
                                    style="color: red;">Vision &
                                    Mission</a>
                            </div>
                        </div>
                        <a href="<?php echo home_url ('our-campaign') ; ?>" class="nav-item nav-link"
                            style="color: red;">Our Campaign</a>
                        <a href="<?php echo home_url ('impact') ; ?>" class="nav-item nav-link"
                            style="color: red;">Impact</a>
                        <a href="<?php echo home_url ('our-supporters') ; ?>" class="nav-item nav-link active"
                            style="color: red;">Our Supporters</a>
                        <a href="<?php echo home_url ('tenders') ; ?>" class="nav-item nav-link"
                            style="color: red;">Tender</a>
                        <a href="<?php echo home_url ('contact-us') ; ?>" class="nav-item nav-link"
                            style="color: red;">Contact Us</a>
                        <a href="<?php echo home_url ('donation') ; ?>" class="nav-item nav-link"
                            style="color: red;">Donate Us</a>
                    </div>
                    <div class="d-flex align-items-center flex-nowrap pt-xl-0" style="margin-left: 15px;">
                    <div class="d-flex align-items-center flex-nowrap pt-xl-0" style="margin-left: 15px;">
                        <a href="<?php echo esc_url(get_template_directory_uri()); ?>/documents/ShewingsFoundation_deck.pdf" class="btn-hover-bg btn btn-primary text-white py-2 px-4 me-3">SheWings Profile</a>
                    </div> 
                    </div>
                </div>
            </nav>
        </div>
    </div>

    <!-- Navbar End -->
    <div class="container-fluid bg-breadcrumb6">
        <div class="container text-center py-5" style="max-width: 900px;">
            <!--<h3 class="text-white display-3 mb-4">Our Supporters</h1>-->
            <!--    <p class="fs-5 text-white mb-4">Empowering Change, One Step at a Time-->
            <!--    </p>-->
            <!--    <ol class="breadcrumb justify-content-center mb-0">-->
            <!--        <li class="breadcrumb-item"><a href="index.html">Home</a></li>-->
            <!--        <li class="breadcrumb-item"><a href="#">Pages</a></li>-->
            <!--        <li class="breadcrumb-item active text-white">Supporters</li>-->
            <!--    </ol>-->
        </div>
    </div>
    <br>



    <style>
    /* * {
        padding: 0;
        margin: 0;
        box-sizing: border-box;
    }

    body {
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
        background: linear-gradient(150deg, rgb(214, 240, 68), rgb(47, 147, 218));
    } */

    .gallery-container {
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 80vh;
        padding: 50px 0;
    }

    .box {
        position: relative;
        width: 200px;
        height: 300px;
        transform-style: preserve-3d;
        animation: animate 20s linear infinite;
        margin: 0;
    }

    .box:hover {
        animation-play-state: paused;
    }

    .box span {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        transform-origin: center;
        transform-style: preserve-3d;
        transform: rotateY(calc(var(--i) * 36deg)) translateZ(450px);
        -webkit-box-reflect: below 2px linear-gradient(transparent, transparent, rgba(4, 4, 4, 0.267));
    }

    .box span img {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        object-fit: contain;
        transition: 0.5s;
        border-radius: 15px;
        border: 4px double rgb(0, 0, 0);
    }

    img:hover {
        transform: translateY(-2px);
    }

    /* Enhanced media queries for better mobile responsiveness */
    @media screen and (max-width: 1400px) {
        .box span {
            transform: rotateY(calc(var(--i) * 36deg)) translateZ(400px);
        }
    }

    @media screen and (max-width: 1200px) {
        .box span {
            transform: rotateY(calc(var(--i) * 36deg)) translateZ(350px);
        }

        .gallery-container {
            padding: 40px 0;
        }
    }

    @media screen and (max-width: 992px) {
        .box {
            width: 180px;
            height: 270px;
        }

        .box span {
            transform: rotateY(calc(var(--i) * 36deg)) translateZ(280px);
        }

        .gallery-container {
            min-height: 70vh;
        }
    }

    @media screen and (max-width: 768px) {
        .box {
            width: 140px;
            height: 210px;
        }

        .box span {
            transform: rotateY(calc(var(--i) * 36deg)) translateZ(220px);
        }

        .gallery-container {
            min-height: 60vh;
            padding: 30px 0;
        }
    }

    @media screen and (max-width: 576px) {
        .box {
            width: 100px;
            height: 150px;
        }

        .box span {
            transform: rotateY(calc(var(--i) * 36deg)) translateZ(160px);
        }

        .gallery-container {
            min-height: 50vh;
        }

        .box span img {
            border-width: 2px;
            border-radius: 8px;
        }
    }

    @media screen and (max-width: 400px) {
        .box {
            width: 80px;
            height: 120px;
        }

        .box span {
            transform: rotateY(calc(var(--i) * 36deg)) translateZ(130px);
        }

        .gallery-container {
            min-height: 40vh;
            padding: 20px 0;
        }
    }

    .img {
        height: 200px;
        width: 200px;
    }

    @keyframes animate {
        0% {
            transform: perspective(1000px) rotateY(0deg);
        }

        100% {
            transform: perspective(1000px) rotateY(360deg);
        }
    }

    .brands-section {
        padding: 2rem 0;
        text-align: center;
    }

    .brands-title {
        margin-bottom: 2rem;
        color: #333;
        font-size: 2.5rem;
        font-weight: bold;
    }

       .brands-grid {
              display: grid;
              grid-template-columns: repeat(auto-fit, minmax(180px, 1fr));
              gap: 0.75rem;
              padding: 0.5rem;
              max-width: 1200px;
              margin: 0 auto;
       }

       .brand-card {
              width: 100%;
              height: 200px;
              perspective: 1000px;
              cursor: pointer;
       }

    .brand-card-inner {
        position: relative;
        width: 100%;
        height: 100%;
        transition: transform 0.6s;
        transform-style: preserve-3d;
    }

    .brand-card:hover .brand-card-inner {
        transform: rotateY(180deg);
    }

       .brand-card-front,
       .brand-card-back {
              position: absolute;
              width: 100%;
              height: 100%;
              backface-visibility: hidden;
              display: flex;
              align-items: center;
              justify-content: center;
              border-radius: 0.5rem;
              padding: 0.25rem;
       }

    .brand-card-front {
        background: white;
        border: 1px solid #e5e7eb;
    }

    .brand-card-back {
        background: #f8f9fa;
        transform: rotateY(180deg);
    }

       .brand-image {
              max-width: 100%;
              max-height: 100%;
              object-fit: contain;
              padding: 0.25rem;
       }
       </style>

       <div class="gallery-container">
              <div class="box">
                     <span style="--i:1"><img
                                   src="<?php echo esc_url ( get_template_directory_uri () ); ?>/img/supporters/s.png"></span>
                     <span style="--i:2"><img
                                   src="<?php echo esc_url ( get_template_directory_uri () ); ?>/img/supporters/s1.jpg"></span>
                     <span style="--i:3"><img
                                   src="<?php echo esc_url ( get_template_directory_uri () ); ?>/img/supporters/s2.jpeg"></span>
                     <span style="--i:4"><img
                                   src="<?php echo esc_url ( get_template_directory_uri () ); ?>/img/supporters/s3.png"></span>
                     <span style="--i:5"><img
                                   src="<?php echo esc_url ( get_template_directory_uri () ); ?>/img/supporters/s4.jpg"></span>
                     <span style="--i:6"><img
                                   src="<?php echo esc_url ( get_template_directory_uri () ); ?>/img/supporters/OIP.jpeg"></span>
                     <span style="--i:7"><img
                                   src="<?php echo esc_url ( get_template_directory_uri () ); ?>/img/supporters/s6.png"></span>
                     <span style="--i:8"><img
                                   src="<?php echo esc_url ( get_template_directory_uri () ); ?>/img/supporters/s7.jpg"></span>
                     <span style="--i:9"><img
                                   src="<?php echo esc_url ( get_template_directory_uri () ); ?>/img/supporters/hwwa-itbp.png"></span>
              </div>
       </div><br>
       <div class="brands-section">
              <h1 class="brands-title">Trusted by Leading Brands</h1>
              <div class="brands-grid">
              <div class="brand-card">
                            <div class="brand-card-inner">
                                   <div class="brand-card-front">
                                          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/brands/ds-group.jpg"
                                                 alt="ds-group" class="brand-image">
                                   </div>
                                   <div class="brand-card-back">
                                          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/brands/ds-group.jpg"
                                                 alt="ds-group" class="brand-image">
                                   </div>
                            </div>
                     </div>
                     <div class="brand-card">
                            <div class="brand-card-inner">
                                   <div class="brand-card-front">
                                          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/brands/britannia.jpg"
                                                 alt="britannia" class="brand-image">
                                   </div>
                                   <div class="brand-card-back">
                                          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/brands/britannia.jpg"
                                                 alt="britannia" class="brand-image">
                                   </div>
                            </div>
                     </div>
                     <div class="brand-card">
                            <div class="brand-card-inner">
                                   <div class="brand-card-front">
                                          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/brands/motherdairy2.png"
                                                 alt="mother-dairy" class="brand-image">
                                   </div>
                                   <div class="brand-card-back">
                                          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/brands/motherdairy2.png"
                                                 alt="mother-dairy" class="brand-image">
                                   </div>
                            </div>
                     </div>
                     <div class="brand-card">
                            <div class="brand-card-inner">
                                   <div class="brand-card-front">
                                          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/brands/red-bull.jpg"
                                                 alt="red-bull" class="brand-image">
                                   </div>
                                   <div class="brand-card-back">
                                          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/brands/red-bull.jpg"
                                                 alt="red-bull" class="brand-image">
                                   </div>
                            </div>
                     </div>
                     <div class="brand-card">
                            <div class="brand-card-inner">
                                   <div class="brand-card-front">
                                          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/brands/starbucks.jpg"
                                                 alt="starbucks" class="brand-image">
                                   </div>
                                   <div class="brand-card-back">
                                          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/brands/starbucks.jpg"
                                                 alt="starbucks" class="brand-image">
                                   </div>
                            </div>
                     </div>
                     <div class="brand-card">
                            <div class="brand-card-inner">
                                   <div class="brand-card-front">
                                          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/brands/clovia.jpg"
                                                 alt="Clovia" class="brand-image">
                                   </div>
                                   <div class="brand-card-back">
                                          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/brands/clovia.jpg"
                                                 alt="Clovia" class="brand-image">
                                   </div>
                            </div>
                     </div>
                     <div class="brand-card">
                            <div class="brand-card-inner">
                                   <div class="brand-card-front">
                                          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/brands/the-moms-co.jpg"
                                                 alt="the-moms-co" class="brand-image">
                                   </div>
                                   <div class="brand-card-back">
                                          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/brands/the-moms-co.jpg"
                                                 alt="the-moms-co" class="brand-image">
                                   </div>
                            </div>
                     </div>
                     <div class="brand-card">
                            <div class="brand-card-inner">
                                   <div class="brand-card-front">
                                          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/brands/zivame.jpg"
                                                 alt="zivame" class="brand-image">
                                   </div>
                                   <div class="brand-card-back">
                                          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/brands/zivame.jpg"
                                                 alt="zivame" class="brand-image">
                                   </div>
                            </div>
                     </div>
                     <div class="brand-card">
                            <div class="brand-card-inner">
                                   <div class="brand-card-front">
                                          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/brands/loocitane.jpg"
                                                 alt="loocitane" class="brand-image">
                                   </div>
                                   <div class="brand-card-back">
                                          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/brands/loocitane.jpg"
                                                 alt="loocitane" class="brand-image">
                                   </div>
                            </div>
                     </div>
                     <div class="brand-card">
                            <div class="brand-card-inner">
                                   <div class="brand-card-front">
                                          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/brands/rotary.jpg"
                                                 alt="rotary" class="brand-image">
                                   </div>
                                   <div class="brand-card-back">
                                          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/brands/rotary.jpg"
                                                 alt="rotary" class="brand-image">
                                   </div>
                            </div>
                     </div>
                     <div class="brand-card">
                            <div class="brand-card-inner">
                                   <div class="brand-card-front">
                                          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/brands/rabit.jpg"
                                                 alt="rabit" class="brand-image">
                                   </div>
                                   <div class="brand-card-back">
                                          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/brands/rabit.jpg"
                                                 alt="rabit" class="brand-image">
                                   </div>
                            </div>
                     </div>
                     <div class="brand-card">
                            <div class="brand-card-inner">
                                   <div class="brand-card-front">
                                          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/brands/induslnd-bank.jpg"
                                                 alt="induslnd" class="brand-image">
                                   </div>
                                   <div class="brand-card-back">
                                          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/brands/induslnd-bank.jpg"
                                                 alt="induslnd" class="brand-image">
                                   </div>
                            </div>
                     </div>
                     <!-- 1 -->
                     <div class="brand-card">
                            <div class="brand-card-inner">
                                   <div class="brand-card-front">
                                          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/brands/bamboology.jpg"
                                                 alt="Bamboology" class="brand-image">
                                   </div>
                                   <div class="brand-card-back">
                                          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/brands/bamboology.jpg"
                                                 alt="Bamboology" class="brand-image">
                                   </div>
                            </div>
                     </div>
                     <div class="brand-card">
                            <div class="brand-card-inner">
                                   <div class="brand-card-front">
                                          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/brands/bombay-shaving.jpg"
                                                 alt="bombay-shaving" class="brand-image">
                                   </div>
                                   <div class="brand-card-back">
                                          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/brands/bombay-shaving.jpg"
                                                 alt="bombay-shaving" class="brand-image">
                                   </div>
                            </div>
                     </div>
                     <div class="brand-card">
                            <div class="brand-card-inner">
                                   <div class="brand-card-front">
                                          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/brands/pee-safe.jpg"
                                                 alt="pee-safe" class="brand-image">
                                   </div>
                                   <div class="brand-card-back">
                                          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/brands/pee-safe.jpg"
                                                 alt="pee-safe" class="brand-image">
                                   </div>
                            </div>
                     </div>

                     <div class="brand-card">
                            <div class="brand-card-inner">
                                   <div class="brand-card-front">
                                          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/brands/binsar-farms.jpg"
                                                 alt="binsar-farms" class="brand-image">
                                   </div>
                                   <div class="brand-card-back">
                                          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/brands/binsar-farms.jpg"
                                                 alt="binsar-farm" class="brand-image">
                                   </div>
                            </div>
                     </div>
                     <div class="brand-card">
                            <div class="brand-card-inner">
                                   <div class="brand-card-front">
                                          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/brands/lanos-vyyas.jpg"
                                                 alt="lanos-vyyas" class="brand-image">
                                   </div>
                                   <div class="brand-card-back">
                                          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/brands/lanos-vyyas.jpg"
                                                 alt="lanos-vyyas" class="brand-image">
                                   </div>
                            </div>
                     </div>

                     <div class="brand-card">
                            <div class="brand-card-inner">
                                   <div class="brand-card-front">
                                          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/brands/radice.jpg"
                                                 alt="raddice" class="brand-image">
                                   </div>
                                   <div class="brand-card-back">
                                          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/brands/radice.jpg"
                                                 alt="raddice" class="brand-image">
                                   </div>
                            </div>
                     </div>
                     <!-- 12 -->
                     <div class="brand-card">
                            <div class="brand-card-inner">
                                   <div class="brand-card-front">
                                          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/brands/raho-safe.jpg"
                                                 alt="raho-safe" class="brand-image">
                                   </div>
                                   <div class="brand-card-back">
                                          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/brands/raho-safe.jpg"
                                                 alt="raho-safe" class="brand-image">
                                   </div>
                            </div>
                     </div>

                     <div class="brand-card">
                            <div class="brand-card-inner">
                                   <div class="brand-card-front">
                                          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/brands/uflex.jpg"
                                                 alt="uflex" class="brand-image">
                                   </div>
                                   <div class="brand-card-back">
                                          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/brands/uflex.jpg"
                                                 alt="uflex" class="brand-image">
                                   </div>
                            </div>
                     </div>
                     <!-- 19 -->


              </div>
       </div>

    </div>




    <!-- Carousel Start -->
    <!-- <div class="container-fluid volunteer py-5 mt-5">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-5">
                    <div class="row g-4">
                        <div class="col-lg-6">
                            <div class="volunteer-img">
                                <img src="<?php echo esc_url ( get_template_directory_uri () ); ?>/img/volunteers-1.jpg"
                                    class="img-fluid w-100" alt="Image">
                                <div class="volunteer-title">
                                    <h5 class="mb-2 text-white">Michel Brown</h5>
                                    <p class="mb-0 text-white">Communicator</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="volunteer-img">
                                <img src="<?php echo esc_url ( get_template_directory_uri () ); ?>/img/volunteers-3.jpg"
                                    class="img-fluid w-100" alt="Image">
                                <div class="volunteer-title">
                                    <h5 class="mb-2 text-white">Michel Brown</h5>
                                    <p class="mb-0 text-white">Communicator</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="volunteer-img">
                                <img src="<?php echo esc_url ( get_template_directory_uri () ); ?>/img/volunteers-2.jpg"
                                    class="img-fluid w-100" alt="Image">
                                <div class="volunteer-title">
                                    <h5 class="mb-2 text-white">Michel Brown</h5>
                                    <p class="mb-0 text-white">Communicator</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="volunteer-img">
                                <img src="<?php echo esc_url ( get_template_directory_uri () ); ?>/img/volunteers-4.jpg"
                                    class="img-fluid w-100" alt="Image">
                                <div class="volunteer-title">
                                    <h5 class="mb-2 text-white">Michel Brown</h5>
                                    <p class="mb-0 text-white">Communicator</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <h5 class="text-uppercase text-primary">Become a Volunteer?</h5>
                    <h1 class="mb-4">Join your hand with us for a better life and beautiful future.</h1>
                    <p class="mb-4">Lorem ipsum dolor sit amet consectur adip sed eiusmod amet consectur adip sed
                        eiusmod tempor amet consectur adip sed eiusmod amet consectur adip sed eiusmod tempor amet
                        consectur adip sed eiusmod amet consectur adip sed eiusmod tempor.
                    </p>
                    <p class="text-dark"><i class=" fa fa-check text-primary me-2"></i> We are friendly to each other.
                    </p>
                    <p class="text-dark"><i class=" fa fa-check text-primary me-2"></i> If you join with us,We will give
                        you free training.</p>
                    <p class="text-dark"><i class=" fa fa-check text-primary me-2"></i> Its an opportunity to help poor
                        Environments.</p>
                    <p class="text-dark"><i class=" fa fa-check text-primary me-2"></i> No goal requirements.</p>
                    <p class="text-dark mb-5"><i class=" fa fa-check text-primary me-2"></i> Joining is tottaly free. We
                        dont need any money from you.</p>
                    <a class="btn-hover-bg btn btn-primary text-white py-2 px-4" href="<?php echo home_url ('form') ; ?>">Join With Us</a>
                </div>
            </div>
        </div>
    </div> -->
    <br>




    <?php
get_footer();