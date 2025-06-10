<?php
/**
 * Template Name: Home Template
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
                            <!--<a href="#" class="btn-square text-white me-2"><i class="fab fa-pinterest"></i></a>-->
                            <a href="https://www.linkedin.com/company/shewingsfoundation/" target="blank"
                                class="btn-square text-white me-0"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <nav class="navbar navbar-light bg-light navbar-expand-xl" style="z-index: 1050;">
                <a href="https://shewingsfoundation.com/" class="navbar-brand ms-3">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/logo/logo2.jpg"
                        alt="Shewings Logo" style="max-height: 60px; width: auto;">
                </a>
                <button class="navbar-toggler py-2 px-3 me-3" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarCollapse" style="background-color: red; cursor: pointer;">
                    <span class="fa fa-bars text-primary"></span>
                </button>
                <div class="collapse navbar-collapse bg-light text-danger" id="navbarCollapse">
                    <div class="navbar-nav ms-auto">
                        <a href="<?php echo home_url () ; ?>" class="nav-item nav-link active" data-bs-toggle="collapse"
                            data-bs-target="#navbarCollapse" data-bs-dismiss="collapse" style="color: red;">Home</a>
                        <div class="nav-item dropdown">
                            <a href="<?php echo home_url('about-us'); ?>" class="nav-link dropdown-toggle"
                                style="color: red;">About
                                Us</a>
                            <div class="dropdown-menu">
                                <a href="<?php echo home_url('mission'); ?>" class="dropdown-item"
                                    data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
                                    data-bs-dismiss="collapse" style="color: red;">Vision &
                                    Mission</a>
                            </div>
                        </div>
                        <div class="nav-item dropdown">
                            <a href="<?php echo home_url('our-campaign'); ?>" class="nav-link dropdown-toggle"
                                data-bs-toggle="dropdown" aria-expanded="false" style="color: red;">Our Campaign</a>
                            <ul class="dropdown-menu">
                                <li><a href="<?php echo home_url('ongoing-project'); ?>" class="dropdown-item"
                                        style="color: red;">Current Initiatives</a></li>
                                <li><a href="<?php echo home_url('one-day'); ?>" class="dropdown-item"
                                        style="color: red;">Recent Highlights</a></li>
                            </ul>
                        </div>

                        <a href="<?php echo home_url('impact'); ?>" class="nav-item nav-link" data-bs-toggle="collapse"
                            data-bs-target="#navbarCollapse" data-bs-dismiss="collapse" style="color: red;">Impact</a>
                        <a href="<?php echo home_url ('our-supporters') ; ?>" class="nav-item nav-link"
                            data-bs-toggle="collapse" data-bs-target="#navbarCollapse" data-bs-dismiss="collapse"
                            style="color: red;">Our Supporters</a>
                        <a href="<?php echo home_url ('tenders') ; ?>" class="nav-item nav-link"
                            data-bs-toggle="collapse" data-bs-target="#navbarCollapse" data-bs-dismiss="collapse"
                            style="color: red;">Tender</a>


                        <!-- <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                            <div class="dropdown-menu m-0 bg-secondary rounded-0">
                                <a href="blog.html" class="dropdown-item">Blog</a>
                                <a href="gallery.html" class="dropdown-item">Gallery</a>
                                <a href="volunteer.html" class="dropdown-item">Volunteers</a>
                                <a href="donation.html" class="dropdown-item">Donation</a>
                                <a href="404.html" class="dropdown-item">404 Error</a>
                            </div>
                        </div> -->
                        <a href="<?php echo home_url ('contact-us') ; ?>" class="nav-item nav-link"
                            data-bs-toggle="collapse" data-bs-target="#navbarCollapse" data-bs-dismiss="collapse"
                            style="color: red;">Contact Us</a>
                        <a href="<?php echo home_url ('donation') ; ?>" class="nav-item nav-link"
                            data-bs-toggle="collapse" data-bs-target="#navbarCollapse" data-bs-dismiss="collapse"
                            style="color: red;">Donate Us</a>
                    </div>
                    <div class="d-flex align-items-center flex-nowrap pt-xl-0" style="margin-left: 15px;">
                        <a href="<?php echo esc_url(get_template_directory_uri()); ?>/documents/ShewingsFoundation_deck.pdf"
                            class="btn-hover-bg btn btn-primary text-white py-2 px-4 me-3" data-bs-toggle="collapse"
                            data-bs-target="#navbarCollapse" data-bs-dismiss="collapse">SHEWings
                            Profile</a>
                    </div>
                </div>
            </nav>

            <!-- Navbar End -->


            <!-- Carousel Start -->
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel"
                style="width: 100vw; margin-left: calc(-50vw + 50%); margin-right: calc(-50vw + 50%);">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                        class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <!-- Desktop image -->
                        <img src="<?php echo esc_url(get_template_directory_uri() . '/navbar/Slider.png'); ?>"
                            class="d-none d-md-block w-100" alt="Desktop Slide 1"
                            style="width: 100%; height: auto; object-fit: cover;">
                        <!-- Mobile image -->
                        <img src="<?php echo esc_url(get_template_directory_uri() . '/navbar/SliderM.png'); ?>"
                            class="d-block d-md-none w-100" alt="Mobile Slide 1"
                            style="width: 100%; height: auto; object-fit: cover;">

                        <div class="d-flex align-items-center justify-content-center">
                            <a class="btn-hover-bg btn btn-primary text-white py-2 px-5 mt-5 ml-2"
                                href="https://docs.google.com/forms/d/e/1FAIpQLSd1HQcKaXocWNHm0flT2wdEApoccGrYjeZ80Srwq8baxooUoA/viewform?usp=dialog"
                                target="_blank" style="margin-left: -264px; background-color: #3c4142;">Join Us</a>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <!-- Desktop image -->
                        <img src="<?php echo esc_url(get_template_directory_uri() . '/navbar/Slider2.png'); ?>"
                            class="d-none d-md-block w-100" alt="Desktop Slide 2"
                            style="width: 100%; height: auto; object-fit: cover;">
                        <!-- Mobile image -->
                        <img src="<?php echo esc_url(get_template_directory_uri() . '/navbar/Slider-2M.png'); ?>"
                            class="d-block d-md-none w-100" alt="Mobile Slide 2"
                            style="width: 100%; height: auto; object-fit: cover;">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
            <!-- Carousel End -->


            <!-- Add Bootstrap CSS and JS -->
            <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"> -->
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js">
            </script>

            <script>
            jQuery(document).ready(function($) {
                // Close mobile menu when any link is clicked
                $('.navbar-nav .nav-link, .navbar-nav .dropdown-item').on('click', function() {
                    $('#navbarCollapse').collapse('hide');
                });
            });
            </script>

            <!-- <marquee behavior="" direction="Left "><h1 class="display-1 text-capitalize mb-4 mt-2" style="color:red">Swasth Nari, Khushhal Desh
            </h1></marquee> -->
            <!-- About Start -->
            <div class="container-fluid about  py-5">
                <div class="container py-5">
                    <div class="row g-5 gx-4" style="padding: 1rem; margin: 1rem;">
                        <div class="col-xl-6 about-box"
                            style="box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); border-radius: 8px; padding: 20px;">
                            <div class="h-100">
                                <img src="<?php echo esc_url ( get_template_directory_uri () ); ?>/img/campaign/ioclclass.jpg"
                                    class="img-fluid w-100 h-100" alt="Image">
                            </div>
                        </div>
                        <br>
                        <div class="col-xl-6 about-box"
                            style="box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); border-radius: 8px; padding: 20px;">
                            <h5 class="text-uppercase" style="color:  #000000">About Us</h5>
                            <h1 class="mb-4" style="color:#ec1f27;font-size:xx-large">Empowering Women with
                                Safe<br>Menstrual Health and Sustainable Living</h1>
                            <p class="fs-5 mb-4">Learn how SHEWings is transforming menstrual and reproductive health in
                                India. By combating period poverty, ending stigma, and raising menstruation awareness.
                                Also, while providing sustainable care.
                            </p>
                            <div class="d-flex align-items-center justify-content-start">
                                <a class="btn-hover-bg btn btn-primary text-white py-2 px-4"
                                    style="background-color: #3c4142; border-radius: 25px; transition: all 0.3s ease;"
                                    href="<?php echo home_url ('mission') ; ?>">Know More</a>
                            </div>
                            <!-- <div class="tab-class bg-secondary p-4">
                                <ul class="nav nav-pills d-flex justify-content-center gap-3 mb-2">
                                    <li class="nav-item">
                                        <a class="d-flex py-2 text-center bg-white active" data-bs-toggle="pill"
                                            href="#tab-1">
                                            <span class="text-dark px-4">About</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="d-flex py-2 text-center bg-white" data-bs-toggle="pill" href="#tab-2">
                                            <span class="text-dark px-4">Mission</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="d-flex py-2 text-center bg-white" data-bs-toggle="pill" href="#tab-3">
                                            <span class="text-dark px-4">Vision</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="d-flex py-2 text-center bg-white" data-bs-toggle="pill" href="#tab-4">
                                            <span class="text-dark px-4">Story</span>
                                        </a>
                                    </li>
                                </ul>


                                <div class="tab-content">
                                    <div id="tab-1" class="tab-pane fade show p-0 active">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="d-flex">
                                                    <div class="text-start my-auto">
                                                        <h5 class="text-uppercase mb-3 mt-3" style="color:#ec1f27" ;>
                                                            About SHEWings Foundation
                                                        </h5>
                                                        <p class="mb-4" style="color:#fefdee">At SHEWings Foundation, we
                                                            believe
                                                            that access to health education and essential resources
                                                            should be a
                                                            universal right. Our foundation was created to address the
                                                            deep-rooted lack of healthcare awareness, especially in
                                                            areas where
                                                            conversations around menstrual health,
                                                            reproductive health, and maternal wellness are often limited
                                                            or
                                                            stigmatized.
                                                        </p>
                                                        <div class="d-flex align-items-center justify-content-start">
                                                            <a style="background-color: #3c4142;"
                                                class="btn-hover-bg btn btn-primary text-white py-2 px-4"
                                                href="<?php echo home_url('about-us'); ?>">Read More</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="tab-2" class="tab-pane fade show p-0">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="d-flex">
                                                    <div class="text-start my-auto">
                                                        <h5 class="text-uppercase mb-3 mt-3">A Better Tomorrow for
                                                            comming
                                                            generations</h5>
                                                        <p class="mb-4" style="color: gray;">Our mission is rooted in
                                                            the belief
                                                            that everyone
                                                            deserves to feel informed and empowered about their health,
                                                            wellbeing, environment, sustainability and mental Health. We
                                                            aim
                                                            to remove the barriers that prevent
                                                            people from accessing reliable health resources and
                                                            understanding
                                                            their own wellness. By focusing on inclusivity and dignity,
                                                            we
                                                            strive
                                                            to create lasting change,
                                                            offering not only health education but also the tools needed
                                                            to
                                                            improve well-being for generations to come.
                                                        </p>
                                                        <div class="d-flex align-items-center justify-content-start">
                                                            <a class="btn-hover-bg btn btn-primary text-white py-2 px-4"
                                                                style="background-color: #3c4142;"
                                                                href="<?php echo home_url ('mission') ; ?>">Read
                                                                More</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div id="tab-3" class="tab-pane fade show p-0">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="d-flex">
                                                    <div class="text-start my-auto">
                                                        <h5 class="text-uppercase mb-3 mt-3">Affordable and Adaptive
                                                            healthcare
                                                            services for all</h5>
                                                        <p class="mb-4" style="color: gray;">At SHEWings, our work is
                                                            fueled by
                                                            compassion and a commitment to real change. We believe that
                                                            lasting
                                                            impact comes from consistent, compassionate efforts to
                                                            empower those
                                                            in need Whether it's through a simple workshop or an
                                                            extensive
                                                            health campaign, our focus remains on delivering support
                                                            that
                                                            respects individual dignity and creates meaningful change.
                                                            SHEWings
                                                            Organize massive woman health camps where consultation to
                                                            treatment
                                                            is provided.
                                                        </p>
                                                        <div class="d-flex align-items-center justify-content-start">
                                                            <a class="btn-hover-bg btn btn-primary text-white py-2 px-4"
                                                                style="background-color: #3c4142;"
                                                                href="<?php echo home_url ('vission-2') ; ?>">Read
                                                                More</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="tab-4" class="tab-pane fade show p-0">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="d-flex">
                                                    <div class="text-start my-auto">
                                                        <h5 class="text-uppercase mb-3 mt-3" style="color:#ec1f27" target="blank">Click on the
                                                            links below to
                                                            go
                                                            through
                                                            our journey</h5>
                                                        <ul>
                                                            <li>
                                                                <p><a href="https://zeenews.india.com/hindi/india/delhi-ncr-haryana/navratri-2024-noida-womens-health-checkup-awareness-campaign/2468965"
                                                        style="color:#fff;" target="blank">Woman
                                                        Health Awareness Programme</a></p>
                                                            </li>

                                                            <li>
                                                                <p><a href="https://www.facebook.com/SheWingsOrganization/videos/393108828550105/?vh=e&mibextid=wwXIfr&rdid=p7usc9jA8fXbxQnh#"
                                                        style="color:#fff;"
                                                        target="blank">#DonateOldBraPanty</a>
                                                </p>
                                                            </li>
                                                            <li>
                                                                <p><a href="https://www.youtube.com/watch?v=9eRg1K3g0Qk&ab_channel=SheWings"
                                                        style="color:#fff;"
                                                        target="blank">#RedDotCampaign</a>
                                                </p>
                                                            </li>
                                                            <li>
                                                                <p><a href="https://www.youtube.com/watch?v=0ZYfHVczQKw&ab_channel=SheWings"
                                                        style="color:#fff;"
                                                        target="blank">#YesIBleed</a>
                                                </p>
                                                            </li>
                                                            <li>
                                                                <p><a href="https://www.youtube.com/watch?v=ArhhcGclJcY"
                                                        style="color:#fff;"
                                                        target="blank">#FeedTheFuture</a>
                                                <div
                                                    class="d-flex align-items-center justify-content-start">
                                                    <a class="btn btn-primary text-white py-2 px-4"
                                                        style="background-color: #3c4142;"
                                                        target="blank;">Watch
                                                        Another Video</a>
                                                </div>
                                                </p>
                                                            </li>

                                                        </ul> -->

                            <!-- <p class="mb-4">Since past 10-year, SHEWings Foundation was established to bridge a gap
                                                    that's often overlooked—the gap in healthcare knowledge,
                                                    particularly concerning women's health. We realized that for many,
                                                    especially those in marginalized communities, access to accurate
                                                    health information and
                                                    quality products was not a given. Too often, myths and
                                                    misunderstandings lead to health issues that could be prevented with
                                                    the right information.
                                                </p> -->
                            <!-- <div class="d-flex align-items-center justify-content-start">
                                                    <a class="btn-hover-bg btn btn-primary text-white py-2 px-4"
                                                        href="<?php echo home_url ('about-us') ; ?>">Read More</a>
                                                </div> -->
                            <!--     </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- About End -->

            <!-- Services Start
            <div class="container-fluid service py-5 bg-light" style="background-color: #f2f2f2;">
                <div class="container py-5">
                    <div class="text-center mx-auto pb-5" style="max-width: 800px;">
                        <h1 class="mb-0" style="color: #ec1f27">Our Campaigns</h1>
                    </div>
                    <div class="row g-4">
                        <div class="col-md-4">
                            <div class="service-item animate-card"
                                style="background: white; border-radius: 10px; overflow: hidden; box-shadow: 0 4px 15px rgba(0,0,0,0.1); transition: all 0.3s ease;">
                                <div class="service-img-container"
                                    style="position: relative; height: 250px; overflow: hidden;">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/campaign/Red.jpg"
                                        class="img-fluid w-100 h-100"
                                        style="object-fit: cover; transition: transform 0.5s ease;"
                                        alt="Health Campaign">
                                    <div class="service-img-overlay"
                                        style="position: absolute; top: 0; left: 0; padding: 10px; color: white; background: rgba(0,0,0,0.5); opacity: 0; transition: opacity 0.3s ease;">
                                        <h4 class="mb-0" style="color: white; font-size: 1.25rem;">Health Campaign</h4>
                                    </div>
                                </div>
                                <div class="p-4">
                                    <h1 style="color: #ec1f27">Past Campaign</h1>
                                    <h2 style="color: #ec1f27">#RedDot Campaign</h2>
                                    <p class="mb-4" style="text-align: justify; color: #666;">The Red Dot Campaign
                                        raises awareness about menstrual hygiene and sustainable practices. It promotes
                                        nontoxic and reusable menstrual products to reduce waste. The campaign helps
                                        communities learn about menstrual hygiene and menstruation awareness. Moreover,
                                        it helps empower women to make informed and responsible choices.</p>
                                </div>
                                <div class="d-flex align-items-center justify-content-start">
                                    <a class="btn-hover-bg btn btn-primary text-white py-2 px-4"
                                        style="background-color: #3c4142; border-radius: 25px; transition: all 0.3s ease; margin-bottom: 20px;margin-left: 20px;"
                                        href="<?php echo home_url ('mission') ; ?>">Know More</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="service-item animate-card"
                                style="background: white; border-radius: 10px; overflow: hidden; box-shadow: 0 4px 15px rgba(0,0,0,0.1); transition: all 0.3s ease;">
                                <div class="service-img-container"
                                    style="position: relative; height: 250px; overflow: hidden;">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/campaign/placeholder-women.jpg"
                                        class="img-fluid w-100 h-100"
                                        style="object-fit: cover; transition: transform 0.5s ease;"
                                        alt="Women Empowerment Campaign">
                                    <div class="service-img-overlay"
                                        style="position: absolute; top: 0; left: 0; padding: 10px; color: white; background: rgba(0,0,0,0.5); opacity: 0; transition: opacity 0.3s ease;">
                                        <h4 class="mb-0" style="color: white; font-size: 1.25rem;">Women Empowerment
                                        </h4>
                                    </div>
                                </div>
                                <div class="p-4">
                                    <h1 style="color: #ec1f27;font-size: 35px;">Ongoing Campaign</h1>
                                    <h2 style="color: #ec1f27;font-size:x-large">Women's Health Awareness Program with
                                        IOCL</h2>
                                    <p class="mb-4" style="text-align: justify; color: #666;">SHEWings Foundation and
                                        IOCL started a women's health program across NCR schools. The program initiated
                                        meaningful discussions and raised awareness for menstrual hygiene. They get
                                        knowledge about breast cancer and the self-examination techniques.</p>
                                </div>
                                <div class="d-flex align-items-center justify-content-start">
                                    <a class="btn-hover-bg btn btn-primary text-white py-2 px-4"
                                        style="background-color: #3c4142; border-radius: 25px; transition: all 0.3s ease; margin-bottom: 20px;margin-left: 20px;"
                                        href="<?php echo home_url ('mission') ; ?>">Know More</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="service-item animate-card"
                                style="background: white; border-radius: 10px; overflow: hidden; box-shadow: 0 4px 15px rgba(0,0,0,0.1); transition: all 0.3s ease;">
                                <div class="service-img-container"
                                    style="position: relative; height: 250px; overflow: hidden;">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/placeholder-education.jpg"
                                        class="img-fluid w-100 h-100"
                                        style="object-fit: cover; transition: transform 0.5s ease;"
                                        alt="Education Campaign">
                                    <div class="service-img-overlay"
                                        style="position: absolute; top: 0; left: 0; padding: 10px; color: white; background: rgba(0,0,0,0.5); opacity: 0; transition: opacity 0.3s ease;">
                                        <h4 class="mb-0" style="color: white; font-size: 1.25rem;">Education Campaign
                                        </h4>
                                    </div>
                                </div>
                                <div class="p-4">
                                    <h1 style="color: #ec1f27;font-size: 35px;">Recent Campaign</h1>
                                    <h2 style="color: #ec1f27;font-size:x-large">SHEWings x HWWA ITBP Conclave</h2>
                                    <p class="mb-4" style="text-align: justify; color: #666;">On Menstrual Hygiene Day.
                                        SHEWings and HWWA (the women's wing of ITBP) conducted a health seminar for
                                        women in the armed forces. In which the current HWWA president, Gauri Rasgotra,
                                        was present. With the chief guest, NCW Chairperson Dr. Vijaya K. Rahatkar.</p>

                                </div>
                                <div class="d-flex align-items-center justify-content-start">
                                    <a class="btn-hover-bg btn btn-primary text-white py-2 px-4"
                                        style="background-color: #3c4142; border-radius: 25px; transition: all 0.3s ease; margin-bottom: 20px;margin-left: 20px;"
                                        href="<?php echo home_url ('mission') ; ?>">Know More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
            <!-- Services End -->

            <!-- Four Pillars Start -->

            <!-- Four Pillars End -->

            <style>
            .read-more-btn {
                position: relative;
                overflow: hidden;
                background: #ec1f27;
                /* Set background color to red */
                border: none;
                /* Remove default border */
                padding: 10px 25px;
                transition: all 0.3s ease;
                /* Smooth transition for all properties */
                border-radius: 5px;
                /* Add border radius */
                color: white;
                /* Set text color to white */
                text-decoration: none;
                /* Remove underline from links */
                display: inline-block;
                /* Ensure padding and margin work correctly */
                text-align: center;
            }

            .read-more-btn:hover {
                background: white;
                /* Change background to white on hover */
                color: #ec1f27;
                /* Change text color to red on hover */
                transform: translateY(-3px);
                /* Keep the lift animation */
                box-shadow: 0 5px 15px rgba(236, 31, 39, 0.3);
                /* Keep the shadow effect */
                border: 1px solid #ec1f27;
                /* Add a red border on hover */
            }

            .read-more-btn:active {
                transform: translateY(0);
                /* Keep the active state */
            }
            </style>

            <style>
            .about-box {
                transition: border 0.3s ease;
                border: 1px solid transparent;
                /* Add a transparent border by default */
            }

            .about-box:hover {
                border-color: #ec1f27;
                /* Red border on hover */
            }
            </style>

            <!-- Donation Start -->
            <div class="container-fluid donation py-5">
                <!-- <div class="container py-5">
		<div class="text-center mx-auto pb-5" style="max-width: 800px;">
			<h5 class="text-uppercase text-primary">Donation</h5>
			<h1 class="mb-0">Your money will save our life</h1>
		</div>
		<div class="row g-4">
			<div class="col-lg-4">
				<div class="donation-item">
					<img src="<?php echo esc_url ( get_template_directory_uri () ); ?>/img/donation-1.jpg" class="img-fluid w-100" alt="Image">
					<div class="donation-content d-flex flex-column">
						<h5 class="text-uppercase text-primary mb-4">Organic</h5>
						<a href="#" class="btn-hover-color display-6 text-white">Help Us More</a>
						<h4 class="text-white mb-4">Protect Environments</h4>
						<p class="text-white mb-4">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's</p>
						<div class="donation-btn d-flex align-items-center justify-content-start">
							<a class="btn-hover-bg btn btn-primary text-white py-2 px-4" href="#">Donate !</a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="donation-item">
					<img src="<?php echo esc_url ( get_template_directory_uri () ); ?>/img/service-2.jpg" class="img-fluid w-100" alt="Image">
					<div class="donation-content d-flex flex-column">
						<h5 class="text-uppercase text-primary mb-4">Ecosystem</h5>
						<a href="#" class="btn-hover-color display-6 text-white">Help Us More</a>
						<h4 class="text-white mb-4">Protect Environments</h4>
						<p class="text-white mb-4">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's</p>
						<div class="donation-btn d-flex align-items-center justify-content-start">
							<a class="btn-hover-bg btn btn-primary text-white py-2 px-4" href="#">Donate !</a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="donation-item">
					<img src="<?php echo esc_url ( get_template_directory_uri () ); ?>/img/donation-3.jpg" class="img-fluid w-100" alt="Image">
					<div class="donation-content d-flex flex-column">
						<h5 class="text-uppercase text-primary mb-4">Recycling</h5>
						<a href="#" class="btn-hover-color display-6 text-white">Help Us More</a>
						<h4 class="text-white mb-4">Protect Environments</h4>
						<p class="text-white mb-4">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's</p>
						<div class="donation-btn d-flex align-items-center justify-content-start">
							<a class="btn-hover-bg btn btn-primary text-white py-2 px-4" href="#">Donate !</a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-12">
				<div class="d-flex align-items-center justify-content-center">
					<a class="btn-hover-bg btn btn-primary text-white py-2 px-4" href="#">All Donation</a>
				</div>
			</div>
		</div>
	</div> -->
            </div>
            <!-- Donation End -->


            <!-- Counter Start -->
            <div class="container-fluid counter py-5 px-0"
                style="position: relative; overflow: hidden; width: 100vw; margin-left: calc(-50vw + 50%); margin-right: calc(-50vw + 50%);">
                <video autoplay muted loop playsinline
                    style="position: absolute; top: 50%; left: 50%; min-width: 100%; min-height: 100%; width: auto; height: auto; transform: translateX(-50%) translateY(-50%); z-index: -1; object-fit: cover;">
                    <source src="<?php echo esc_url(get_template_directory_uri()); ?>/img/videoplayback.mp4"
                        type="video/mp4">
                </video>
                <div
                    style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: linear-gradient(rgba(0,0,0,0.8), rgba(0,0,0,0.8)); z-index: 0;">
                </div>
                <div class="container px-4" style="position: relative; z-index: 1;">
                    <div class="text-center mx-auto pb-5" style="max-width: 800px;">
                        <span class="badge rounded-pill px-4 py-2 mb-3"
                            style="color: #ec1f27;font-size: 1rem; font-weight: 500;">OUR
                            IMPACT</span>
                        <h2 class="text-white mb-4" style="font-size: 3.5rem; font-weight: 700;">Environmental
                            Conservation & Sustainability </h2>
                        <!-- <p class="text-white mb-0" style="font-size: 1.1rem; line-height: 1.8; opacity: 0.9;">
                            SHEWings promotes renewable energy efforts, waste management, and sustainable menstrual
                            products. By taking part in environmental drives and campaigns, the foundation supports
                            environmental health and climate action with a long-term, community-first approach.</p> -->
                    </div>
                    <div class="row g-4 justify-content-center">
                        <div class="col-xxl-3 col-xl-3 col-lg-6 col-md-6">
                            <div class="counter-item text-center p-4"
                                style="background: rgba(255,255,255,0.1); backdrop-filter: blur(5px); border-radius: 15px; transition: transform 0.3s ease; height: 100%; display: flex; flex-direction: column; justify-content: center;">
                                <h3 class="text-white mb-3" style="font-size: 1.3rem; font-weight: 600;">Reached over
                                </h3>
                                <div class="counter-counting border border-3 border-dotted d-inline-block mx-auto px-4 py-3"
                                    style="border-radius: 10px; border-color: white !important;">
                                    <span class="display-4 fw-bold" style="color: white;" data-toggle="counter-up"
                                        data-target="3000000">0</span>
                                    <p class="text-white mt-2 mb-0" style="font-size: 1rem; opacity: 0.9;">+ Individuals
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-xl-3 col-lg-6 col-md-6">
                            <div class="counter-item text-center p-4"
                                style="background: rgba(255,255,255,0.1); backdrop-filter: blur(5px); border-radius: 15px; transition: transform 0.3s ease; height: 100%; display: flex; flex-direction: column; justify-content: center;">
                                <h3 class="text-white mb-3" style="font-size: 1.3rem; font-weight: 600;">Distributed
                                </h3>
                                <div class="counter-counting border border-3 border-dotted d-inline-block mx-auto px-4 py-3"
                                    style="border-radius: 10px; border-color: white !important;">
                                    <span class="display-4 fw-bold" style="color: white;" data-toggle="counter-up"
                                        data-target="600000">0</span>
                                    <p class="text-white mt-2 mb-0" style="font-size: 1rem; opacity: 0.9;">+ Pads</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-xl-3 col-lg-6 col-md-6">
                            <div class="counter-item text-center p-4"
                                style="background: rgba(255,255,255,0.1); backdrop-filter: blur(5px); border-radius: 15px; transition: transform 0.3s ease; height: 100%; display: flex; flex-direction: column; justify-content: center;">
                                <h3 class="text-white mb-3" style="font-size: 1.3rem; font-weight: 600;">Partnered with
                                </h3>
                                <div class="counter-counting border border-3 border-dotted d-inline-block mx-auto px-4 py-3"
                                    style="border-radius: 10px; border-color: white !important;">
                                    <span class="display-4 fw-bold" style="color: white;" data-toggle="counter-up"
                                        data-target="100">0</span>
                                    <p class="text-white mt-2 mb-0" style="font-size: 1rem; opacity: 0.9;">+ Schools</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-xl-3 col-lg-6 col-md-6">
                            <div class="counter-item text-center p-4"
                                style="background: rgba(255,255,255,0.1); backdrop-filter: blur(5px); border-radius: 15px; transition: transform 0.3s ease; height: 100%; display: flex; flex-direction: column; justify-content: center;">
                                <h3 class="text-white mb-3" style="font-size: 1.3rem; font-weight: 600;">Trained</h3>
                                <div class="counter-counting border border-3 border-dotted d-inline-block mx-auto px-4 py-3"
                                    style="border-radius: 10px; border-color: white !important;">
                                    <span class="display-4 fw-bold" style="color: white;" data-toggle="counter-up"
                                        data-target="10000">0</span>
                                    <p class="text-white mt-2 mb-0" style="font-size: 1rem; opacity: 0.9;">+ Volunteers
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex align-items-center justify-content-start">
                            <a class="btn-hover-bg btn btn-primary text-white py-2 px-4"
                                style="background-color: #3c4142; border-radius: 25px; transition: all 0.3s ease; margin-bottom: 20px;margin-left: 478px;"
                                href="<?php echo home_url ('mission') ; ?>">Know More</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Counter End -->
<br>
<br>
            <!-- Services Start -->
            <div class="container-fluid service py-5 bg-light" style="background-color: #f2f2f2;">
                <div class="container py-5">
                    <div class="text-center mx-auto pb-5" style="max-width: 800px;">
                        <h1 class="mb-0" style="color: #ec1f27">Our Campaigns</h1>
                    </div>
                    <div class="row g-4">
                        <div class="col-md-4">
                            <div class="service-item animate-card"
                                style="background: white; border-radius: 10px; overflow: hidden; box-shadow: 0 4px 15px rgba(0,0,0,0.1); transition: all 0.3s ease;">
                                <div class="service-img-container"
                                    style="position: relative; height: 250px; overflow: hidden;">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/campaign/red.jpg"
                                        class="img-fluid w-100 h-100"
                                        style="object-fit: cover; transition: transform 0.5s ease;"
                                        alt="Health Campaign">
                                    <div class="service-img-overlay"
                                        style="position: absolute; top: 0; left: 0; padding: 10px; color: white; background: rgba(0,0,0,0.5); opacity: 0; transition: opacity 0.3s ease;">
                                        <h4 class="mb-0" style="color: white; font-size: 1.25rem;">Health Campaign</h4>
                                    </div>
                                </div>
                                <div class="p-4">
                                    <h1 style="color: #ec1f27">Past Campaign</h1>
                                    <h2 style="color: #ec1f27">#RedDot Campaign</h2>
                                    <p class="mb-4" style="text-align: justify; color: #666;">The Red Dot Campaign
                                        raises awareness about menstrual hygiene and sustainable practices. It promotes
                                        nontoxic and reusable menstrual products to reduce waste. The campaign helps
                                        communities learn about menstrual hygiene and menstruation awareness. Moreover,
                                        it helps empower women to make informed and responsible choices.</p>
                                </div>
                                <div class="d-flex align-items-center justify-content-start">
                                    <a class="btn-hover-bg btn btn-primary text-white py-2 px-4"
                                        style="background-color: #3c4142; border-radius: 25px; transition: all 0.3s ease; margin-bottom: 20px;margin-left: 20px;"
                                        href="<?php echo home_url ('mission') ; ?>">Know More</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="service-item animate-card"
                                style="background: white; border-radius: 10px; overflow: hidden; box-shadow: 0 4px 15px rgba(0,0,0,0.1); transition: all 0.3s ease;">
                                <div class="service-img-container"
                                    style="position: relative; height: 250px; overflow: hidden;">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/campaign/iocl.jpg"
                                        class="img-fluid w-100 h-100"
                                        style="object-fit: cover; transition: transform 0.5s ease;"
                                        alt="Women Empowerment Campaign">
                                    <div class="service-img-overlay"
                                        style="position: absolute; top: 0; left: 0; padding: 10px; color: white; background: rgba(0,0,0,0.5); opacity: 0; transition: opacity 0.3s ease;">
                                        <h4 class="mb-0" style="color: white; font-size: 1.25rem;">Women Empowerment
                                        </h4>
                                    </div>
                                </div>
                                <div class="p-4">
                                    <h1 style="color: #ec1f27;font-size: 35px;">Ongoing Campaign</h1>
                                    <h2 style="color: #ec1f27;font-size:x-large">Women's Health Awareness Program with
                                        IOCL</h2>
                                    <p class="mb-4" style="text-align: justify; color: #666;">SHEWings Foundation and
                                        IOCL started a women's health program across NCR schools. The program initiated
                                        meaningful discussions and raised awareness for menstrual hygiene. They get
                                        knowledge about breast cancer and the self-examination techniques.</p>
                                </div>
                                <div class="d-flex align-items-center justify-content-start">
                                    <a class="btn-hover-bg btn btn-primary text-white py-2 px-4"
                                        style="background-color: #3c4142; border-radius: 25px; transition: all 0.3s ease; margin-bottom: 20px;margin-left: 20px;"
                                        href="<?php echo home_url ('mission') ; ?>">Know More</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="service-item animate-card"
                                style="background: white; border-radius: 10px; overflow: hidden; box-shadow: 0 4px 15px rgba(0,0,0,0.1); transition: all 0.3s ease;">
                                <div class="service-img-container"
                                    style="position: relative; height: 250px; overflow: hidden;">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/campaign/hawa.jpg"
                                        class="img-fluid w-100 h-100"
                                        style="object-fit: cover; transition: transform 0.5s ease;"
                                        alt="Education Campaign">
                                    <div class="service-img-overlay"
                                        style="position: absolute; top: 0; left: 0; padding: 10px; color: white; background: rgba(0,0,0,0.5); opacity: 0; transition: opacity 0.3s ease;">
                                        <h4 class="mb-0" style="color: white; font-size: 1.25rem;">Education Campaign
                                        </h4>
                                    </div>
                                </div>
                                <div class="p-4">
                                    <h1 style="color: #ec1f27;font-size: 35px;">Recent Campaign</h1>
                                    <h2 style="color: #ec1f27;font-size:x-large">SHEWings x HWWA ITBP Conclave</h2>
                                    <p class="mb-4" style="text-align: justify; color: #666;">On Menstrual Hygiene Day.
                                        SHEWings and HWWA (the women's wing of ITBP) conducted a health seminar for
                                        women in the armed forces. In which the current HWWA president, Gauri Rasgotra,
                                        was present. With the chief guest, NCW Chairperson Dr. Vijaya K. Rahatkar.</p>

                                </div>
                                <div class="d-flex align-items-center justify-content-start">
                                    <a class="btn-hover-bg btn btn-primary text-white py-2 px-4"
                                        style="background-color: #3c4142; border-radius: 25px; transition: all 0.3s ease; margin-bottom: 20px;margin-left: 20px;"
                                        href="<?php echo home_url ('mission') ; ?>">Know More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <br>
            <!-- Services End -->

            <!-- Four Pillars Start -->

            <!-- Four Pillars End -->

            <style>
            .read-more-btn {
                position: relative;
                overflow: hidden;
                background: #ec1f27;
                /* Set background color to red */
                border: none;
                /* Remove default border */
                padding: 10px 25px;
                transition: all 0.3s ease;
                /* Smooth transition for all properties */
                border-radius: 5px;
                /* Add border radius */
                color: white;
                /* Set text color to white */
                text-decoration: none;
                /* Remove underline from links */
                display: inline-block;
                /* Ensure padding and margin work correctly */
                text-align: center;
            }

            .read-more-btn:hover {
                background: white;
                /* Change background to white on hover */
                color: #ec1f27;
                /* Change text color to red on hover */
                transform: translateY(-3px);
                /* Keep the lift animation */
                box-shadow: 0 5px 15px rgba(236, 31, 39, 0.3);
                /* Keep the shadow effect */
                border: 1px solid #ec1f27;
                /* Add a red border on hover */
            }

            .read-more-btn:active {
                transform: translateY(0);
                /* Keep the active state */
            }
            </style>

            <style>
            .about-box {
                transition: border 0.3s ease;
                border: 1px solid transparent;
                /* Add a transparent border by default */
            }

            .about-box:hover {
                border-color: #ec1f27;
                /* Red border on hover */
            }
            </style>

            <!-- Donation Start -->
            <div class="container-fluid donation py-5">
                <!-- <div class="container py-5">
		<div class="text-center mx-auto pb-5" style="max-width: 800px;">
			<h5 class="text-uppercase text-primary">Donation</h5>
			<h1 class="mb-0">Your money will save our life</h1>
		</div>
		<div class="row g-4">
			<div class="col-lg-4">
				<div class="donation-item">
					<img src="<?php echo esc_url ( get_template_directory_uri () ); ?>/img/donation-1.jpg" class="img-fluid w-100" alt="Image">
					<div class="donation-content d-flex flex-column">
						<h5 class="text-uppercase text-primary mb-4">Organic</h5>
						<a href="#" class="btn-hover-color display-6 text-white">Help Us More</a>
						<h4 class="text-white mb-4">Protect Environments</h4>
						<p class="text-white mb-4">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's</p>
						<div class="donation-btn d-flex align-items-center justify-content-start">
							<a class="btn-hover-bg btn btn-primary text-white py-2 px-4" href="#">Donate !</a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="donation-item">
					<img src="<?php echo esc_url ( get_template_directory_uri () ); ?>/img/service-2.jpg" class="img-fluid w-100" alt="Image">
					<div class="donation-content d-flex flex-column">
						<h5 class="text-uppercase text-primary mb-4">Ecosystem</h5>
						<a href="#" class="btn-hover-color display-6 text-white">Help Us More</a>
						<h4 class="text-white mb-4">Protect Environments</h4>
						<p class="text-white mb-4">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's</p>
						<div class="donation-btn d-flex align-items-center justify-content-start">
							<a class="btn-hover-bg btn btn-primary text-white py-2 px-4" href="#">Donate !</a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="donation-item">
					<img src="<?php echo esc_url ( get_template_directory_uri () ); ?>/img/donation-3.jpg" class="img-fluid w-100" alt="Image">
					<div class="donation-content d-flex flex-column">
						<h5 class="text-uppercase text-primary mb-4">Recycling</h5>
						<a href="#" class="btn-hover-color display-6 text-white">Help Us More</a>
						<h4 class="text-white mb-4">Protect Environments</h4>
						<p class="text-white mb-4">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's</p>
						<div class="donation-btn d-flex align-items-center justify-content-start">
							<a class="btn-hover-bg btn btn-primary text-white py-2 px-4" href="#">Donate !</a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-12">
				<div class="d-flex align-items-center justify-content-center">
					<a class="btn-hover-bg btn btn-primary text-white py-2 px-4" href="#">All Donation</a>
				</div>
			</div>
		</div>
	</div> -->
            </div>
            <!-- Donation End -->


            <!-- Background Image Section Start -->
            <div class="container-fluid py-5 px-0"
                style="background-image: url('<?php echo esc_url(get_template_directory_uri()); ?>/img/campaign/indianoil.jpg'); background-size: cover; background-position: center; background-attachment: fixed; position: relative; height: 400px; display: flex; align-items: center; width: 100vw; margin-left: calc(-50vw + 50%); margin-right: calc(-50vw + 50%);">
                <div
                    style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0, 0, 0, 0.6);">
                </div>
                <div class="container" style="position: relative; z-index: 1;">
                    <div class="row align-items-center justify-content-center text-center">
                        <div class="col-lg-8">
                            <h2 class="text-white mb-4" style="font-size: 2.5rem; font-weight: 700;">Making a Difference
                                Together</h2>
                            <p class="text-white mb-4" style="font-size: 1.1rem; line-height: 1.8;">Join us in our
                                mission to create lasting change in communities through sustainable initiatives and
                                impactful programs.</p>
                            <a href="<?php echo home_url('donation'); ?>"
                                class="btn-hover-bg btn btn-primary text-white py-2 px-4"
                                style="background-color: #3c4142; border: none; border-radius: 25px; transition: all 0.3s ease;">Know
                                More</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Background Image Section End -->

            <style>
            .counter-item:hover {
                transform: translateY(-5px);
                box-shadow: 0 15px 30px rgba(0, 0, 0, 0.2);
            }

            .counter-counting .display-4 {
                line-height: 1;
            }

            .counter-counting p {
                line-height: 1.2;
            }

            /* Hover effect for the button in the background image section */
            .container-fluid.py-5 a.btn-hover-bg:hover {
                background-color: white !important;
                color: black !important;
                box-shadow: 0 0 15px rgba(236, 31, 39, 0.6);
            }
            </style>

            <script>
            document.addEventListener('DOMContentLoaded', function() {
                const counters = document.querySelectorAll('[data-toggle="counter-up"]');

                const animateValue = (element, start, end, duration) => {
                    let startTimestamp = null;
                    const step = (timestamp) => {
                        if (!startTimestamp) startTimestamp = timestamp;
                        const progress = Math.min((timestamp - startTimestamp) / duration, 1);
                        const easedProgress = 0.5 - Math.cos(progress * Math.PI) / 2; // Ease in/out
                        let value = Math.floor(easedProgress * (end - start) + start);

                        // Handle M and K for specific targets during animation
                        if (end === 3000000) {
                            element.textContent = (value / 1000000).toFixed(value < 1000000 ? 0 : (
                                value % 1000000 === 0 ? 0 : 1)) + 'M';
                        } else if (end === 600000) { // Changed to 600000
                            element.textContent = (value / 1000).toFixed(value < 1000 ? 0 : (value %
                                100 === 0 ? 0 : (value % 1000 === 0 ? 0 : 1))) + 'K'; // Changed to K
                        } else if (end === 10000) {
                            element.textContent = (value / 1000).toFixed(value < 1000 ? 0 : (value %
                                100 === 0 ? 0 : (value % 1000 === 0 ? 0 : 1))) + 'K';
                        } else {
                            element.textContent = value.toLocaleString();
                        }

                        if (progress < 1) {
                            window.requestAnimationFrame(step);
                        } else {
                            // Ensure final value is exact string for M and K, or formatted number for others
                            if (end === 3000000) {
                                element.textContent = '3M';
                            } else if (end === 600000) {
                                element.textContent = '6M';
                            } // Changed to 600K
                            else if (end === 10000) {
                                element.textContent = '10K';
                            } else {
                                element.textContent = end.toLocaleString();
                            }
                        }
                    };
                    window.requestAnimationFrame(step);
                };

                const observer = new IntersectionObserver((entries) => {
                    entries.forEach(entry => {
                        if (entry.isIntersecting) {
                            const counter = entry.target;
                            const target = parseInt(counter.getAttribute('data-target'));
                            const initialValue = 0; // Start from zero
                            if (!isNaN(target)) {
                                animateValue(counter, initialValue, target, 1500);
                            }
                            observer.unobserve(counter);
                        }
                    });
                }, {
                    threshold: 0.5
                });

                counters.forEach(counter => observer.observe(counter));
            });
            </script>







            <br>
            <!-- Services Start -->
            <div class="container-fluid service py-5 bg-light" style="background-color: #f2f2f2;">
                <div class="container py-5">
                    <div class="text-center mx-auto pb-5" style="max-width: 800px;">
                        <h1 class="mb-0" style="color: #ec1f27">Our Four Focus Areas</h1>
                    </div>
                    <div class="row g-4">
                        <div class="col-md-3">
                            <div class="service-item"
                                style="background: white; border-radius: 10px; overflow: hidden; box-shadow: 0 5px 15px rgba(0, 0, 0, 0.15);">
                                <div class="p-4">
                                    <h4 class="mb-3" style="color: #ec1f27; font-size:20px">HealthcareEnvironmental
                                        Conservation & Sustainability</h4>
                                    <p class="mb-4" style="text-align: justify; color: #666;">SHEWings promotes
                                        renewable energy efforts, waste management, and sustainable menstrual products.
                                        By taking part in environmental drives and campaigns, the foundation supports
                                        environmental health and climate action with a long-term, community-first
                                        approach.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="service-item"
                                style="background: white; border-radius: 10px; overflow: hidden; box-shadow: 0 5px 15px rgba(0, 0, 0, 0.15);">
                                <div class="p-4">
                                    <h4 class="mb-3" style="color: #ec1f27;">Education & Skill Development</h4>
                                    <p class="mb-4" style="text-align: justify; color: #666;">SHEWings fosters growth by
                                        organizing education and skill-building campaigns, especially for women.
                                        Partnering with public figures and government bodies. The foundation provides
                                        communities with knowledge and practical skills. Laying the foundation for
                                        self-reliance and social upliftment.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="service-item"
                                style="background: white; border-radius: 10px; overflow: hidden; box-shadow: 0 5px 15px rgba(0, 0, 0, 0.15);">
                                <div class="p-4">
                                    <h4 class="mb-3" style="color: #ec1f27;font-size: 22px;">Public Health & Menstrual
                                        Awareness</h4>
                                    <p class="mb-4" style="text-align: justify; color: #666;">The foundation advocates
                                        for menstrual health awareness as a public health issue. It promotes menstrual
                                        hygiene equity in underserved areas. The organization raises awareness about
                                        menstrual health and sustainable products. It also addresses gaps in education.
                                        Additionally, it empowers women and fosters dignity.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="service-item"
                                style="background: white; border-radius: 10px; overflow: hidden; box-shadow: 0 5px 15px rgba(0, 0, 0, 0.15);">
                                <div class="p-4">
                                    <h4 class="mb-3" style="color: #ec1f27;">Cultural & Tourism Promotion</h4>
                                    <p class="mb-4" style="text-align: justify; color: #666;">SHEWings celebrates
                                        India's heritage while advancing sustainable tourism. It helps empower local
                                        women as cultural ambassadors. Promote travel and preserve traditions linked to
                                        menstruation awareness and menstrual health. Connecting tourism with education,
                                        we break taboos and create livelihoods. Transforming cultural pride into a
                                        powerful drive of gender equality and environmental stewardship.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Services End -->


            <!-- Causes Start -->
            <!-- <div class="container-fluid causes py-5">
	<div class="container py-5">
		<div class="text-center mx-auto pb-5" style="max-width: 800px;">
			<h5 class="text-uppercase text-primary">Recent Causes</h5>
			<h1 class="mb-4">The environment needs our protection</h1>
			<p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
			</p>
		</div>
		<div class="row g-4">
			<div class="col-lg-6 col-xl-3">
				<div class="causes-item">
					<div class="causes-img">
						<img src="<?php echo esc_url ( get_template_directory_uri () ); ?>/img/causes-4.jpg" class="img-fluid w-100" alt="Image">
						<div class="causes-link pb-2 px-3">
							<small class="text-white"><i class="fas fa-chart-bar text-primary me-2"></i>Goal: $3600</small>
							<small class="text-white"><i class="fa fa-thumbs-up text-primary me-2"></i>Raised: $4000</small>
						</div>
						<div class="causes-dination p-2">
							<a class="btn-hover-bg btn btn-primary text-white py-2 px-3" href="#">Donate Now</a>
						</div>
					</div>
					<div class="progress">
						<div class="progress-bar" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100">
							<span>65%</span>
						</div>
					</div>
					<div class="causes-content p-4">
						<h4 class="mb-3">First environments activity of</h4>
						<p class="mb-4">Help today because tomorrow you may be the one who needs more helping!</p>
						<a class="btn-hover-bg btn btn-primary text-white py-2 px-3" href="#">Read More</a>
					</div>
				</div>
			</div>
			<div class="col-lg-6 col-xl-3">
				<div class="causes-item">
					<div class="causes-img">
						<img src="<?php echo esc_url ( get_template_directory_uri () ); ?>/img/causes-2.jpg" class="img-fluid w-100" alt="Image">
						<div class="causes-link pb-2 px-3">
							<small class="text-white"><i class="fas fa-chart-bar text-primary me-2"></i>Goal: $3600</small>
							<small class="text-white"><i class="fa fa-thumbs-up text-primary me-2"></i>Raised: $4000</small>
						</div>
						<div class="causes-dination p-2">
							<a class="btn-hover-bg btn btn-primary text-white py-2 px-3" href="#">Donate Now</a>
						</div>
					</div>
					<div class="progress">
						<div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
							<span>75%</span>
						</div>
					</div>
					<div class="causes-content p-4">
						<h4 class="mb-3">Build school for poor children.</h4>
						<p class="mb-4">Help today because tomorrow you may be the one who needs more helping!</p>
						<a class="btn-hover-bg btn btn-primary text-white py-2 px-4" href="#">Read More</a>
					</div>
				</div>
			</div>
			<div class="col-lg-6 col-xl-3">
				<div class="causes-item">
					<div class="causes-img">
						<img src="<?php echo esc_url ( get_template_directory_uri () ); ?>/img/causes-3.jpg" class="img-fluid w-100" alt="Image">
						<div class="causes-link pb-2 px-3">
							<small class="text-white"><i class="fas fa-chart-bar text-primary me-2"></i>Goal: $3600</small>
							<small class="text-white"><i class="fa fa-thumbs-up text-primary me-2"></i>Raised: $4000</small>
						</div>
						<div class="causes-dination p-2">
							<a class="btn-hover-bg btn btn-primary text-white py-2 px-3" href="#">Donate Now</a>
						</div>
					</div>
					<div class="progress">
						<div class="progress-bar" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">
							<span>85%</span>
						</div>
					</div>
					<div class="causes-content p-4">
						<h4 class="mb-3">Building clean-water system for rural poor.</h4>
						<p class="mb-4">Help today because tomorrow you may be the one who needs more helping!</p>
						<a class="btn-hover-bg btn btn-primary text-white py-2 px-4" href="#">Read More</a>
					</div>
				</div>
			</div>
			<div class="col-lg-6 col-xl-3">
				<div class="causes-item">
					<div class="causes-img">
						<img src="<?php echo esc_url ( get_template_directory_uri () ); ?>/img/causes-1.jpg" class="img-fluid w-100" alt="Image">
						<div class="causes-link pb-2 px-3">
							<small class="text-white"><i class="fas fa-chart-bar text-primary me-2"></i>Goal: $3600</small>
							<small class="text-white"><i class="fa fa-thumbs-up text-primary me-2"></i>Raised: $4000</small>
						</div>
						<div class="causes-dination p-2">
							<a class="btn-hover-bg btn btn-primary text-white py-2 px-3" href="#">Donate Now</a>
						</div>
					</div>
					<div class="progress">
						<div class="progress-bar" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100">
							<span>95%</span>
						</div>
					</div>
					<div class="causes-content p-4">
						<h4 class="mb-3">First environments activity of this summer.</h4>
						<p class="mb-4">Help today because tomorrow you may be the one who needs more helping!</p>
						<a class="btn-hover-bg btn btn-primary text-white py-2 px-4" href="#">Read More</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div> -->
            <!-- Causes End -->
        </div> -->
        <!-- Volunteers End -->

        <!-- Blog Start -->
        <!-- <div class="container-fluid blog py-5 mb-5">
            <div class="container py-5">
                <div class="text-center mx-auto pb-5" style="max-width: 800px;">
                    <h5 class="text-uppercase" style="color: #f8b864;">Blogs</h5>
                    <h1 class="mb-0">Help today because tomorrow you may be the one who needs more helping!
                    </h1>
                </div>
                <div class="row g-4">
                    <div class="col-lg-6 col-xl-3">
                        <div class="blog-item">
                            <div class="blog-img">
                                <img src="<?php echo esc_url ( get_template_directory_uri () ); ?>/img/blog-1.jpg"
                                    class="img-fluid w-100" alt="">
                                <div class="blog-info">
                                    <span><i class="fa fa-clock"></i> Dec 01.2024</span>
                                    <div class="d-flex">
                                        <span class="me-3"> 3 <i class="fa fa-heart"></i></span>
                                        <a href="#" class="text-white">0 <i class="fa fa-comment"></i></a>
                                    </div>
                                </div>
                                <div class="search-icon">
                                    <a href="<?php echo esc_url ( get_template_directory_uri () ); ?>/img/blog-1.jpg"
                                        data-lightbox="Blog-1" class="my-auto"><i
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
                                <img src="<?php echo esc_url ( get_template_directory_uri () ); ?>/img/blog-2.jpg"
                                    class="img-fluid w-100" alt="">
                                <div class="blog-info">
                                    <span><i class="fa fa-clock"></i> Dec 01.2024</span>
                                    <div class="d-flex">
                                        <span class="me-3"> 3 <i class="fa fa-heart"></i></span>
                                        <a href="#" class="text-white">0 <i class="fa fa-comment"></i></a>
                                    </div>
                                </div>
                                <div class="search-icon">
                                    <a href="<?php echo esc_url ( get_template_directory_uri () ); ?>/img/blog-2.jpg"
                                        data-lightbox="Blog-2" class="my-auto"><i
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
                                <img src="<?php echo esc_url ( get_template_directory_uri () ); ?>/img/blog-3.jpg"
                                    class="img-fluid w-100" alt="">
                                <div class="blog-info">
                                    <span><i class="fa fa-clock"></i> Dec 01.2024</span>
                                    <div class="d-flex">
                                        <span class="me-3"> 3 <i class="fa fa-heart"></i></span>
                                        <a href="#" class="text-white">0 <i class="fa fa-comment"></i></a>
                                    </div>
                                </div>
                                <div class="search-icon">
                                    <a href="<?php echo esc_url ( get_template_directory_uri () ); ?>/img/blog-3.jpg"
                                        data-lightbox="Blog-3" class="my-auto"><i
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
                                <img src="<?php echo esc_url ( get_template_directory_uri () ); ?>/img/blog-4.jpg"
                                    class="img-fluid w-100" alt="">
                                <div class="blog-info">
                                    <span><i class="fa fa-clock"></i> Dec 01.2024</span>
                                    <div class="d-flex">
                                        <span class="me-3"> 3 <i class="fa fa-heart"></i></span>
                                        <a href="#" class="text-white">0 <i class="fa fa-comment"></i></a>
                                    </div>
                                </div>
                                <div class="search-icon">
                                    <a href="<?php echo esc_url ( get_template_directory_uri () ); ?>/img/blog-4.jpg"
                                        data-lightbox="Blog-4" class="my-auto"><i
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
        </div> -->
        <!-- Blog End -->


        <!-- Join Us Button -->
        <!-- <div class="d-flex align-items-center justify-content-center">
                <a class="btn-hover-bg btn btn-primary text-white py-2 px-5 mt-5 ml-2" href="#" id="joinUsBtn">Join Us</a>
            </div> -->

        <!-- Popup Form -->
        <div id="joinUsPopup" class="popup">
            <div class="popup-content">
                <span class="close" id="closePopup">&times;</span>
                <h2>Join Us</h2>
                <form action="<?php echo esc_url( admin_url('admin-post.php') ); ?>" method="POST">
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name" required>
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required>
                    <label for="message">Message:</label>
                    <textarea id="message" name="message" required></textarea>
                    <button type="submit">Submit</button>
                </form>
            </div>
        </div>

        <style>
        /* Popup styles */
        .popup {
            display: none;
            /* Hidden by default */
            position: fixed;
            z-index: 1000;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            /* Black background with opacity */
        }

        .popup-content {
            background-color: white;
            margin: 15% auto;
            padding: 20px;
            border: 1px solid #888;
            width: 30%;
            /* Could be more or less, depending on screen size */
            border-radius: 8px;
            /* Rounded corners */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            /* Subtle shadow */
        }

        .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
        }

        /* Form styles */
        form {
            display: flex;
            flex-direction: column;
        }

        label {
            margin-bottom: 5px;
            font-weight: bold;
        }

        input[type="text"],
        input[type="email"],
        textarea {
            margin-bottom: 15px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
        }

        button {
            padding: 10px;
            background-color: #007bff;
            /* Bootstrap primary color */
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }

        < !--button:hover {
            -->< !-- background-color: #0056b3;
            -->< !--
            /* Darker shade on hover */
            -->< !--
        }

        -->

        /* Media Query for Join Us Button */
        @media (max-width: 768px) {
            #joinUsBtn {
                margin-left: 0;
                /* Reset margin for smaller screens */
                /* width: 100%; */
                /* Full width on smaller screens */
                text-align: center;
                /* Center text */
                padding: 15px;
                /* Increase padding for better touch target */
                font-size: 18px;
                /* Increase font size for better readability */
            }
        }
        </style>

        <script>
        // Get the modal
        var popup = document.getElementById("joinUsPopup");

        // Get the button that opens the modal
        var btn = document.getElementById("joinUsBtn");

        // Get the <span> element that closes the modal
        var span = document.getElementById("closePopup");

        // When the user clicks the button, open the modal 
        btn.onclick = function() {
            popup.style.display = "block";
        }

        // When the user clicks on <span> (x), close the modal
        span.onclick = function() {
            popup.style.display = "none";
        }

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == popup) {
                popup.style.display = "none";
            }
        }
        </script>

        <style>
        .animate-card {
            animation: fadeInUp 0.8s ease-out;
        }

        .service-item {
            transition: all 0.3s ease !important;
        }

        .service-item:hover {
            transform: translateY(-10px) !important;
            box-shadow: 0 8px 25px rgba(236, 31, 39, 0.4) !important;
        }

        .service-item:hover .service-img-container img {
            transform: scale(1.1);
        }

        .service-item:hover .service-img-overlay {
            opacity: 1;
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .service-item:nth-child(1) {
            animation-delay: 0.2s;
        }

        .service-item:nth-child(2) {
            animation-delay: 0.4s;
        }

        .service-item:nth-child(3) {
            animation-delay: 0.6s;
        }
        </style>
        <script>
        document.addEventListener('DOMContentLoaded', function() {
            var navbarCollapse = document.getElementById('navbarCollapse');
            if (navbarCollapse) {
                var navLinks = navbarCollapse.querySelectorAll('.nav-link, .dropdown-item');
                navLinks.forEach(function(link) {
                    link.addEventListener('click', function() {
                        var bsCollapse = new bootstrap.Collapse(navbarCollapse, {
                            toggle: false
                        });
                        bsCollapse.hide();
                    });
                });
            }
        });
        </script>

        <?php
get_footer();