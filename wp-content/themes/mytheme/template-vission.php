<?php
/**
 * Template Name: Vission Template
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
    <div class="container-fluid fixed-top px-0">
        <div class="container px-0">
            <div class="topbar">
                <div class="row align-items-center justify-content-center">
                    <div class="col-md-8">
                        <div class="topbar-info d-flex flex-wrap">
                            <a href="mailto:" info@shewings.com" class="text-light me-4"><i
                                    class="fas fa-envelope text-white me-2"></i>info@shewings.com</a>
                            <a href="tel:8800633291" class="text-light"><i
                                    class="fas fa-phone-alt text-white me-2"></i>01202502355</a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="topbar-icon d-flex align-items-center justify-content-end">
                            <a href="#" class="btn-square text-white me-2"><i class="fab fa-facebook-f"></i></a>
                            <a href="#" class="btn-square text-white me-2"><i class="fab fa-twitter"></i></a>
                            <a href="#" class="btn-square text-white me-2"><i class="fab fa-instagram"></i></a>
                            <a href="#" class="btn-square text-white me-2"><i class="fab fa-pinterest"></i></a>
                            <a href="#" class="btn-square text-white me-0"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <nav class="navbar navbar-light bg-light navbar-expand-xl">
                <a href="<?php echo home_url(); ?>" class="navbar-brand ms-3">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/logo/lo1.png"
                        alt="Shewings Logo" style="max-height: 60px; width: auto;">
                </a>
                <button class="navbar-toggler py-2 px-3 me-3" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars text-primary"></span>
                </button>
                <div class="collapse navbar-collapse bg-light" id="navbarCollapse">
                    <div class="navbar-nav ms-auto">
                        <a href="<?php echo home_url () ; ?>" class="nav-item nav-link active"
                            style="color: white;">Home</a>
                        <a href="<?php echo home_url ('about-us') ; ?>" class="nav-item nav-link"
                            style="color: white;">About</a>
                        <a href="<?php echo home_url ('impact') ; ?>" class="nav-item nav-link"
                            style="color: white;">Impact</a>
                        <a href="<?php echo home_url ('vission-2') ; ?>" class="nav-item nav-link"
                            style="color: white;">Vision</a>
                        <a href="<?php echo home_url ('mission') ; ?>" class="nav-item nav-link"
                            style="color: white;">Mission</a>
                        <a href="<?php echo home_url ('our-supporters') ; ?>" class="nav-item nav-link"
                            style="color: white;">Our Supporters</a>
                        <!-- <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                            <div class="dropdown-menu m-0 bg-secondary rounded-0">
                                <a href="#" class="dropdown-item">Blog</a>
                                <a href="#" class="dropdown-item">Gallery</a>
                                <a href="#" class="dropdown-item">Volunteers</a>
                                <a href="#" class="dropdown-item">Donation</a>
                                <a href="#" class="dropdown-item">404 Error</a>
                            </div>
                        </div> -->
                        <a href="<?php echo home_url ('contact-us') ; ?>" class="nav-item nav-link"
                            style="color: white;">Contact</a>
                    </div>
                    <!-- <div class="d-flex align-items-center flex-nowrap pt-xl-0" style="margin-left: 15px;">
					<a href="" class="btn-hover-bg btn btn-primary text-white py-2 px-4 me-3">Donate Now</a>
				</div> -->
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->

    <div class="container-fluid bg-breadcrumb">
        <div class="container text-center py-5" style="max-width: 900px;">
            <h3 class="text-white display-3 mb-4">Our Vision</h1>
                <p class="fs-5 text-white mb-4">Empowering Change, One Step at a Time
                </p>
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item active text-white">Vision</li>
                </ol>
        </div>
    </div><br>

    <div class="container-fluid py-5"
        style="background: linear-gradient(rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.2)); object-fit: cover;">
        <div class="container py-5 text-center">
            <div class="row justify-content-center">
                <div>
                    <!-- <i class="bi bi-exclamation-triangle display-1 text-primary"></i>
                    <h1 class="display-1">404</h1> -->
                    <h1 class="mb-4 text-dark">Vision</h1>
                    <p class="mb-4 text-dark">At SheWings Foundation, we envision a world where every person—regardless
                        of gender, economic background, or social status—has access to essential health knowledge,
                        resources, and support. Our long-term vision is to foster an inclusive, informed, and empowered
                        society in which healthcare is not a privilege but a universal right. We strive to create
                        communities where people are equipped with the awareness and resources they need to make
                        informed decisions about their well-being.</p>

                    <p class="mb-4 text-dark">Our goal is to be a transformative force in personal and public health,
                        helping individuals and communities lead healthier, more dignified lives. We aim to end stigmas
                        around women’s health issues, ensuring that health education is accessible to everyone from
                        young adults to seniors, across urban centers and remote areas alike. With SheWings Foundation
                        leading the way, we’re building a future where the next generation grows up empowered with
                        knowledge and confident in their well-being. We believe that when individuals have access to
                        healthcare knowledge and resources, they not only improve their own lives but contribute to
                        healthier, stronger societies for generations to come.</p>
                    <!-- <a class="btn btn-primary btn-hover-bg py-3 px-5" href="index.html">Go Back To Home</a> -->
                </div>
            </div>
        </div>
    </div><br>

    <?php get_template_part( 'template-parts/footer-menus-widgets' ); ?>

    <?php
get_footer();