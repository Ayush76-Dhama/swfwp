<?php
/**
 * Template Name: Blogs Template
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
                                    class="fas fa-phone-alt text-white me-2"></i>8800633291</a>
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
                    <!-- <h1 class="text-primary display-5">Environs</h1> -->
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
                            style="color: white;">Vission</a>
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
            <h3 class="text-white display-3 mb-4">Our Vission</h1>
                <p class="fs-5 text-white mb-4">Empowering Change, One Step at a Time
                </p>
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item active text-white">Vission</li>
                </ol>
        </div>
    </div><br>

    <div class="container-fluid blog py-5 mb-5">
        <div class="container py-5">
            <div class="text-center mx-auto pb-5" style="max-width: 800px;">
                <h5 class="text-uppercase text-primary">Latest News</h5>
                <h1 class="mb-0">Help today because tomorrow you may be the one who needs more helping!
                </h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-6 col-xl-3">
                    <div class="blog-item">
                        <div class="blog-img">
                            <img src="img/blog-1.jpg" class="img-fluid w-100" alt="">
                            <div class="blog-info">
                                <span><i class="fa fa-clock"></i> Dec 01.2024</span>
                                <div class="d-flex">
                                    <span class="me-3"> 3 <i class="fa fa-heart"></i></span>
                                    <a href="#" class="text-white">0 <i class="fa fa-comment"></i></a>
                                </div>
                            </div>
                            <div class="search-icon">
                                <a href="img/blog-1.jpg" data-lightbox="Blog-1" class="my-auto"><i
                                        class="fas fa-search-plus btn-primary text-white p-3"></i></a>
                            </div>
                        </div>
                        <div class="text-dark border p-4 ">
                            <h4 class="mb-4">Save The Topic Forests</h4>
                            <p class="mb-4">Lorem ipsum dolor sit amet consectur adip sed eiusmod amet consectur adip
                                sed eiusmod tempor.</p>
                            <a class="btn-hover-bg btn btn-primary text-white py-2 px-4" href="#">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-3">
                    <div class="blog-item">
                        <div class="blog-img">
                            <img src="img/blog-2.jpg" class="img-fluid w-100" alt="">
                            <div class="blog-info">
                                <span><i class="fa fa-clock"></i> Dec 01.2024</span>
                                <div class="d-flex">
                                    <span class="me-3"> 3 <i class="fa fa-heart"></i></span>
                                    <a href="#" class="text-white">0 <i class="fa fa-comment"></i></a>
                                </div>
                            </div>
                            <div class="search-icon">
                                <a href="img/blog-2.jpg" data-lightbox="Blog-2" class="my-auto"><i
                                        class="fas fa-search-plus btn-primary text-white p-3"></i></a>
                            </div>
                        </div>
                        <div class="text-dark border p-4 ">
                            <h4 class="mb-4">Save The Topic Forests</h4>
                            <p class="mb-4">Lorem ipsum dolor sit amet consectur adip sed eiusmod amet consectur adip
                                sed eiusmod tempor.</p>
                            <a class="btn-hover-bg btn btn-primary text-white py-2 px-4" href="#">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-3">
                    <div class="blog-item">
                        <div class="blog-img">
                            <img src="img/blog-3.jpg" class="img-fluid w-100" alt="">
                            <div class="blog-info">
                                <span><i class="fa fa-clock"></i> Dec 01.2024</span>
                                <div class="d-flex">
                                    <span class="me-3"> 3 <i class="fa fa-heart"></i></span>
                                    <a href="#" class="text-white">0 <i class="fa fa-comment"></i></a>
                                </div>
                            </div>
                            <div class="search-icon">
                                <a href="img/blog-3.jpg" data-lightbox="Blog-3" class="my-auto"><i
                                        class="fas fa-search-plus btn-primary text-white p-3"></i></a>
                            </div>
                        </div>
                        <div class="text-dark border p-4 ">
                            <h4 class="mb-4">Save The Topic Forests</h4>
                            <p class="mb-4">Lorem ipsum dolor sit amet consectur adip sed eiusmod amet consectur adip
                                sed eiusmod tempor.</p>
                            <a class="btn-hover-bg btn btn-primary text-white py-2 px-4" href="#">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-3">
                    <div class="blog-item">
                        <div class="blog-img">
                            <img src="img/blog-4.jpg" class="img-fluid w-100" alt="">
                            <div class="blog-info">
                                <span><i class="fa fa-clock"></i> Dec 01.2024</span>
                                <div class="d-flex">
                                    <span class="me-3"> 3 <i class="fa fa-heart"></i></span>
                                    <a href="#" class="text-white">0 <i class="fa fa-comment"></i></a>
                                </div>
                            </div>
                            <div class="search-icon">
                                <a href="img/blog-4.jpg" data-lightbox="Blog-4" class="my-auto"><i
                                        class="fas fa-search-plus btn-primary text-white p-3"></i></a>
                            </div>
                        </div>
                        <div class="text-dark border p-4 ">
                            <h4 class="mb-4">Save The Topic Forests</h4>
                            <p class="mb-4">Lorem ipsum dolor sit amet consectur adip sed eiusmod amet consectur adip
                                sed eiusmod tempor.</p>
                            <a class="btn-hover-bg btn btn-primary text-white py-2 px-4" href="#">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div><br>

    <?php get_template_part( 'template-parts/footer-menus-widgets' ); ?>

    <?php
get_footer();