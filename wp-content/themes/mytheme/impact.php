<?php
/**
 * Template Name: Impact Template
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
                    <div class="col-md-8 col-sm-12">
                        <div class="topbar-info d-flex flex-wrap justify-content-center justify-content-md-start">
                            <a href="mailto:info@shewings.com" class="text-light me-4"><i
                                    class="fas fa-envelope text-white me-2"></i>info@shewings.com</a>
                            <a href="tel:8800633291" class="text-light"><i
                                    class="fas fa-phone-alt text-white me-2"></i>+91 8800633291</a>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12">
                        <div class="topbar-icon d-flex align-items-center justify-content-center justify-content-md-end mt-3 mt-md-0">
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
                                style="color: red;">About Us</a>
                            <div class="dropdown-menu">
                                <a href="<?php echo home_url('mission'); ?>" class="dropdown-item"
                                    style="color: red;">Vision & Mission</a>
                            </div>
                        </div>
                        <div class="nav-item dropdown">
                            <a href="<?php echo home_url('our-campaign'); ?>" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"
                                style="color: red;">Our Campaign</a>
                            <ul class="dropdown-menu">
                                <li><a href="<?php echo home_url('ongoing-project'); ?>" class="dropdown-item"
                                    style="color: red;">Current Initiatives</a></li>
                                <li><a href="<?php echo home_url('one-day'); ?>" class="dropdown-item"
                                    style="color: red;">Recent Highlights</a></li>
                            </ul>
                        </div>
                        <a href="<?php echo home_url ('impact') ; ?>" class="nav-item nav-link active"
                            style="color: red;">Impact</a>
                        <a href="<?php echo home_url ('our-supporters') ; ?>" class="nav-item nav-link"
                            style="color: red;">Our Supporters</a>
                        <a href="<?php echo home_url ('tenders') ; ?>" class="nav-item nav-link"
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
                            style="color: red;">Contact Us</a>
                        <a href="<?php echo home_url ('donation') ; ?>" class="nav-item nav-link"
                            style="color: red;">Donate Us</a>
                    </div>
                    <div class="d-flex align-items-center flex-nowrap pt-xl-0" style="margin-left: 15px;">
                        <a href="<?php echo esc_url(get_template_directory_uri()); ?>/documents/ShewingsFoundation_deck.pdf"
                            class="btn-hover-bg btn btn-primary text-white py-2 px-4 me-3">SheWings
                            Profile</a>
                    </div>
                </div>
            </nav>
        </div>
    </div>

    <!-- Navbar End -->

    <!-- Header Start -->
    <div class="container-fluid bg-breadcrumb4">
        <div class="container text-center py-5" style="max-width: 900px;">
            <!--<h3 class="text-white display-3 mb-4">Our Impact</h1>-->
            <!-- <p class="fs-5 text-white mb-4">Help today because tomorrow you may be the one who needs more helping!
                </p> -->
            <!--<ol class="breadcrumb justify-content-center mb-0">-->
            <!--    <li class="breadcrumb-item"><a href="index.html">Home</a></li>-->
            <!--    <li class="breadcrumb-item"><a href="#">Pages</a></li>-->
            <!--    <li class="breadcrumb-item active text-white">Impact</li>-->
            <!--</ol>-->
        </div>
    </div>
    <!-- Header End -->

    <div class="container-fluid about py-5">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-xl-5 col-lg-6 col-md-12">
                    <div class="h-100">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/about-2.jpg"
                            class="img-fluid w-100 h-100" alt="Image">
                    </div>
                </div>
                <div class="col-xl-7 col-lg-6 col-md-12">
                    <!-- <h5 class="text-uppercase text-primary">About Us</h5> -->
                    <h1 class="mb-4" style="color:#ec1f27">Founder's Note</h1>
                    <p class="fs-5 mb-4" style="text-align: justify;"> SHEWings organization began with a simple idea:
                        everyone deserves access to essential healthcare knowledge and resources. Throughout my journey,
                        I've seen how the lack of awareness and resources impacts lives, particularly for women and
                        underserved communities. That's why I founded SHEWings—to bridge this gap and create a platform
                        for education, support, and empowerment.
                    </p>

                    <p class="fs-5 mb-4" style="text-align: justify;">At SHEWings, our mission is clear: empower
                        individuals to take charge of their
                        health with confidence and dignity. We're breaking down stigmas, fostering open conversations,
                        and providing resources where they're needed most. Together, we can create a world where health
                        and knowledge go hand in hand for everyone.
                    </p>
                    <p class="fs-5 mb-4" style="text-align: justify;">Thank you for joining us on this journey. With
                        your support, we're creating
                        lasting change, one step at a time.
                    </p>

                    <div>
                        <span>Warm regards,</span><br>
                        <h5>Madan Mohit Bhardwaj</h5>
                        <span>Founder, SHEWings Foundation.</span>
                    </div>

                    <!-- <div class="tab-class bg-secondary p-4">
                        <ul class="nav d-flex mb-2">
                            <li class="nav-item mb-3">
                                <a class="d-flex py-2 text-center bg-white active" data-bs-toggle="pill" href="#tab-1">
                                    <span class="text-dark" style="width: 150px;">About</span>
                                </a>
                            </li>
                            <li class="nav-item mb-3">
                                <a class="d-flex py-2 mx-3 text-center bg-white" data-bs-toggle="pill" href="#tab-2">
                                    <span class="text-dark" style="width: 150px;">Mission</span>
                                </a>
                            </li>
                            <li class="nav-item mb-3">
                                <a class="d-flex py-2 text-center bg-white" data-bs-toggle="pill" href="#tab-3">
                                    <span class="text-dark" style="width: 150px;">Values</span>
                                </a>
                            </li>
                            <li class="nav-item mb-3">
                                <a class="d-flex py-2 text-center bg-white" data-bs-toggle="pill" href="#tab-4">
                                    <span class="text-dark" style="width: 150px;">Story</span>
                                </a>
                            </li>
                        </ul> -->
                    <!-- <div class="tab-content">
                            <div id="tab-1" class="tab-pane fade show p-0 active">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="d-flex">
                                            <div class="text-start my-auto">
                                                <h5 class="text-uppercase mb-3">About SHEWings Foundation</h5>
                                                <p class="mb-4" style="color: gray;">At SHEWings Foundation, we believe
                                                    that access to health education and essential resources should be a
                                                    universal right. Our foundation was created to address the
                                                    deep-rooted lack of healthcare awareness, especially in areas where
                                                    conversations around menstrual health,
                                                    reproductive health, and maternal wellness are often limited or
                                                    stigmatized.
                                                </p>
                                                <div class="d-flex align-items-center justify-content-start">
                                                    <a class="btn-hover-bg btn btn-primary text-white py-2 px-4"
                                                        href="#">Read More</a>
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
                                                <h5 class="text-uppercase mb-3">Health and Dignity for All</h5>
                                                <p class="mb-4" style="color: gray;">Our mission is rooted in the belief
                                                    that everyone deserves to feel informed and empowered about their
                                                    health. We aim to remove the barriers that prevent
                                                    people from accessing reliable health resources and understanding
                                                    their own wellnessBy focusing on inclusivity and dignity, we strive
                                                    to create lasting change,
                                                    offering not only health education but also the tools needed to
                                                    improve well-being for generations to come.
                                                </p>
                                                <div class="d-flex align-items-center justify-content-start">
                                                    <a class="btn-hover-bg btn btn-primary text-white py-2 px-4"
                                                        href="#">Read More</a>
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
                                                <h5 class="text-uppercase mb-3">Compassion, Education on healthcare, and
                                                    Change</h5>
                                                <p class="mb-4" style="color: gray;">At SHEWings, our work is fueled by
                                                    compassion and a commitment to real change.
                                                    We believe that lasting impact comes from consistent, compassionate
                                                    efforts to empower those in need Whether it's through a simple
                                                    workshop or an extensive health campaign, our focus remains on
                                                    delivering support that respects individual dignity and
                                                    creates meaningful change.
                                                </p>
                                                <div class="d-flex align-items-center justify-content-start">
                                                    <a class="btn-hover-bg btn btn-primary text-white py-2 px-4"
                                                        href="#">Read More</a>
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
                                                <h5 class="text-uppercase mb-3">Bridging the Healthcare Knowledge Gap
                                                </h5>
                                                <p class="mb-4">SHEWings Foundation was established to bridge a gap
                                                    that's often overlooked—the gap in healthcare knowledge,
                                                    particularly concerning women's health. We realized that for many,
                                                    especially those in marginalized communities, access to accurate
                                                    health information and
                                                    quality products was not a given. Too often, myths and
                                                    misunderstandings lead to health issues that could be prevented with
                                                    the right information.
                                                </p>
                                                <div class="d-flex align-items-center justify-content-start">
                                                    <a class="btn-hover-bg btn btn-primary text-white py-2 px-4"
                                                        href="#">Read More</a>
                                                </div>
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
    </div>


    <!-- Services Start -->
    <!-- <div class="container-fluid service py-5 bg-light">
        <div class="container py-5">
            <div class="text-center mx-auto pb-5" style="max-width: 800px;">
                <h5 class="text-uppercase text-primary">What we do</h5>
                <h1 class="mb-0">What we do to protect environment</h1>
            </div>
            <div class="row g-4">
                <div class="col-md-6 col-lg-6 col-xl-3">
                    <div class="service-item">
                        <img src="<?php echo esc_url ( get_template_directory_uri () ); ?>/img/service-1.jpg"
                            class="img-fluid w-100" alt="Image">
                        <div class="service-link">
                            <a href="#" class="h4 mb-0">Raising money to help</a>
                        </div>
                    </div>
                    <p class="my-4">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                        Ipsum has been the industry's standard dummy text ever since the 1500s,
                    </p>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3">
                    <div class="service-item">
                        <img src="<?php echo esc_url ( get_template_directory_uri () ); ?>/img/service-2.jpg"
                            class="img-fluid w-100" alt="Image">
                        <div class="service-link">
                            <a href="#" class="h4 mb-0"> close work with services</a>
                        </div>
                    </div>
                    <p class="my-4">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                        Ipsum has been the industry's standard dummy text ever since the 1500s,
                    </p>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3">
                    <div class="service-item">
                        <img src="<?php echo esc_url ( get_template_directory_uri () ); ?>/img/service-3.jpg"
                            class="img-fluid w-100" alt="Image">
                        <div class="service-link">
                            <a href="#" class="h4 mb-0">Pro Guided tours only</a>
                        </div>
                    </div>
                    <p class="my-4">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                        Ipsum has been the industry's standard dummy text ever since the 1500s,
                    </p>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3">
                    <div class="service-item">
                        <img src="<?php echo esc_url ( get_template_directory_uri () ); ?>/img/service-4.jpg"
                            class="img-fluid w-100" alt="Image">
                        <div class="service-link">
                            <a href="#" class="h4 mb-0">Protecting animal area</a>
                        </div>
                    </div>
                    <p class="my-4">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                        Ipsum has been the industry's standard dummy text ever since the 1500s,
                    </p>
                </div>
                <div class="col-12">
                    <div class="d-flex align-items-center justify-content-center">
                        <a class="btn-hover-bg btn btn-primary text-white py-2 px-4" href="#">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div> -->



    <!-- Services start -->
    <!--<div class="container-fluid about  py-5">-->
    <!--    <div class="container py-5">-->
    <!--        <div class="row g-5">-->
    <!--            <div class="col-xl-5">-->
    <!--                <div class="h-100">-->
    <!--                    <img src="<?php echo esc_url ( get_template_directory_uri () ); ?>/img/about-2.jpg"-->
    <!--                        class="img-fluid w-100 h-100" alt="Image">-->
    <!--                </div>-->
    <!--            </div>-->
    <!--            <div class="col-xl-7">-->
    <!--                <h5 class="text-uppercase text-primary">About Us</h5>-->
    <!--                <h1 class="mb-4">Founder's Note</h1>-->
    <!--                <p class="fs-5 mb-4">Welcome to SHEWings Foundation. This organization began with a simple idea:-->
    <!--                    everyone deserves access to essential healthcare knowledge and resources. Throughout my journey,-->
    <!--                    I've seen how the lack of awareness and resources impacts lives, particularly for women and-->
    <!--                    underserved communities. That's why I founded SHEWings—to bridge this gap and create a platform-->
    <!--                    for education, support, and empowerment.-->
    <!--                </p>-->

    <!--                <p class="fs-5 mb-4">At SHEWings, our mission is clear: empower individuals to take charge of their-->
    <!--                    health with confidence and dignity. We're breaking down stigmas, fostering open conversations,-->
    <!--                    and providing resources where they're needed most. Together, we can create a world where health-->
    <!--                    and knowledge go hand in hand for everyone.-->
    <!--                </p>-->
    <!--                <p class="fs-5 mb-4">Thank you for joining us on this journey. With your support, we're creating-->
    <!--                    lasting change, one step at a time.-->
    <!--                </p>-->

    <!--                <div>-->
    <!--                    <span>Warm regards,</span><br>-->
    <!--                    <h5>Madan Mohit Bhardwaj</h5>-->
    <!--                    <span>Founder, SHEWings Foundation.</span>-->
    <!--                </div>-->

    <!-- <div class="tab-class bg-secondary p-4">
                        <ul class="nav d-flex mb-2">
                            <li class="nav-item mb-3">
                                <a class="d-flex py-2 text-center bg-white active" data-bs-toggle="pill" href="#tab-1">
                                    <span class="text-dark" style="width: 150px;">About</span>
                                </a>
                            </li>
                            <li class="nav-item mb-3">
                                <a class="d-flex py-2 mx-3 text-center bg-white" data-bs-toggle="pill" href="#tab-2">
                                    <span class="text-dark" style="width: 150px;">Mission</span>
                                </a>
                            </li>
                            <li class="nav-item mb-3">
                                <a class="d-flex py-2 text-center bg-white" data-bs-toggle="pill" href="#tab-3">
                                    <span class="text-dark" style="width: 150px;">Values</span>
                                </a>
                            </li>
                            <li class="nav-item mb-3">
                                <a class="d-flex py-2 text-center bg-white" data-bs-toggle="pill" href="#tab-4">
                                    <span class="text-dark" style="width: 150px;">Story</span>
                                </a>
                            </li>
                        </ul> -->
    <!-- <div class="tab-content">
                            <div id="tab-1" class="tab-pane fade show p-0 active">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="d-flex">
                                            <div class="text-start my-auto">
                                                <h5 class="text-uppercase mb-3">About SHEWings Foundation</h5>
                                                <p class="mb-4" style="color: gray;">At SHEWings Foundation, we believe
                                                    that access to health education and essential resources should be a
                                                    universal right. Our foundation was created to address the
                                                    deep-rooted lack of healthcare awareness, especially in areas where
                                                    conversations around menstrual health,
                                                    reproductive health, and maternal wellness are often limited or
                                                    stigmatized.
                                                </p>
                                                <div class="d-flex align-items-center justify-content-start">
                                                    <a class="btn-hover-bg btn btn-primary text-white py-2 px-4"
                                                        href="#">Read More</a>
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
                                                <h5 class="text-uppercase mb-3">Health and Dignity for All</h5>
                                                <p class="mb-4" style="color: gray;">Our mission is rooted in the belief
                                                    that everyone deserves to feel informed and empowered about their
                                                    health. We aim to remove the barriers that prevent
                                                    people from accessing reliable health resources and understanding
                                                    their own wellnessBy focusing on inclusivity and dignity, we strive
                                                    to create lasting change,
                                                    offering not only health education but also the tools needed to
                                                    improve well-being for generations to come.
                                                </p>
                                                <div class="d-flex align-items-center justify-content-start">
                                                    <a class="btn-hover-bg btn btn-primary text-white py-2 px-4"
                                                        href="#">Read More</a>
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
                                                <h5 class="text-uppercase mb-3">Compassion, Education on healthcare, and
                                                    Change</h5>
                                                <p class="mb-4" style="color: gray;">At SHEWings, our work is fueled by
                                                    compassion and a commitment to real change.
                                                    We believe that lasting impact comes from consistent, compassionate
                                                    efforts to empower those in need Whether it's through a simple
                                                    workshop or an extensive health campaign, our focus remains on
                                                    delivering support that respects individual dignity and
                                                    creates meaningful change.
                                                </p>
                                                <div class="d-flex align-items-center justify-content-start">
                                                    <a class="btn-hover-bg btn btn-primary text-white py-2 px-4"
                                                        href="#">Read More</a>
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
                                                <h5 class="text-uppercase mb-3">Bridging the Healthcare Knowledge Gap
                                                </h5>
                                                <p class="mb-4">SHEWings Foundation was established to bridge a gap
                                                    that's often overlooked—the gap in healthcare knowledge,
                                                    particularly concerning women's health. We realized that for many,
                                                    especially those in marginalized communities, access to accurate
                                                    health information and
                                                    quality products was not a given. Too often, myths and
                                                    misunderstandings lead to health issues that could be prevented with
                                                    the right information.
                                                </p>
                                                <div class="d-flex align-items-center justify-content-start">
                                                    <a class="btn-hover-bg btn btn-primary text-white py-2 px-4"
                                                        href="#">Read More</a>
                                                </div>
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
    <!-- </div> -->


    <!-- Services Start -->
    <!-- <div class="container-fluid service py-5 bg-light">
        <div class="container py-5">
            <div class="text-center mx-auto pb-5" style="max-width: 800px;">
                <h5 class="text-uppercase text-primary">What we do</h5>
                <h1 class="mb-0">What we do to protect environment</h1>
            </div>
            <div class="row g-4">
                <div class="col-md-6 col-lg-6 col-xl-3">
                    <div class="service-item">
                        <img src="<?php echo esc_url ( get_template_directory_uri () ); ?>/img/service-1.jpg"
                            class="img-fluid w-100" alt="Image">
                        <div class="service-link">
                            <a href="#" class="h4 mb-0">Raising money to help</a>
                        </div>
                    </div>
                    <p class="my-4">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                        Ipsum has been the industry's standard dummy text ever since the 1500s,
                    </p>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3">
                    <div class="service-item">
                        <img src="<?php echo esc_url ( get_template_directory_uri () ); ?>/img/service-2.jpg"
                            class="img-fluid w-100" alt="Image">
                        <div class="service-link">
                            <a href="#" class="h4 mb-0"> close work with services</a>
                        </div>
                    </div>
                    <p class="my-4">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                        Ipsum has been the industry's standard dummy text ever since the 1500s,
                    </p>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3">
                    <div class="service-item">
                        <img src="<?php echo esc_url ( get_template_directory_uri () ); ?>/img/service-3.jpg"
                            class="img-fluid w-100" alt="Image">
                        <div class="service-link">
                            <a href="#" class="h4 mb-0">Pro Guided tours only</a>
                        </div>
                    </div>
                    <p class="my-4">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                        Ipsum has been the industry's standard dummy text ever since the 1500s,
                    </p>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3">
                    <div class="service-item">
                        <img src="<?php echo esc_url ( get_template_directory_uri () ); ?>/img/service-4.jpg"
                            class="img-fluid w-100" alt="Image">
                        <div class="service-link">
                            <a href="#" class="h4 mb-0">Protecting animal area</a>
                        </div>
                    </div>
                    <p class="my-4">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                        Ipsum has been the industry's standard dummy text ever since the 1500s,
                    </p>
                </div>
                <div class="col-12">
                    <div class="d-flex align-items-center justify-content-center">
                        <a class="btn-hover-bg btn btn-primary text-white py-2 px-4" href="#">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div> -->

    <div class="container mt-4">
        <h2 class="display-6 text-center mb-4" style="color:#ec1f27">Our Core Areas of Impact</h2>
        <div class="row justify-content-center g-4">
            <!-- Girl Child Education -->
            <div class="col-lg-4 col-md-6 col-sm-12 d-flex card-effect">
                <div class="p-4 text-center w-100"
                    style="color: black; border: 1px solid red; background-color: whitesmoke; border-radius: 10px;">
                    <a href="#" class="h5 d-block mb-3 text-sm-start"
                        style="color: red; border-bottom: 2px solid red; text-decoration: none;">Girl Child
                        Education</a>
                    <p class="text-sm-start;" style="text-align: justify;">
                        SHEWings Foundation advocates for accessible and inclusive education for girls. We focus on
                        bridging the educational gap, offering resources and scholarships, and creating mentorship
                        programs that empower girls.
                    </p>
                </div>
            </div>

            <!-- Environment and Sustainability -->
            <div class="col-lg-4 col-md-6 col-sm-12 d-flex card-effect">
                <div class="p-4 text-center w-100"
                    style="color: black; border: 1px solid red; background-color: whitesmoke; border-radius: 10px;">
                    <a href="#" class="h5 d-block mb-3 text-sm-start"
                        style="color: red; border-bottom: 2px solid red; text-decoration: none;">Environment and
                        Sustainability</a>
                    <p class="text-sm-start;" style="text-align: justify;">
                        SHEWings supports projects in renewable energy, waste management, and climate action. We
                        collaborate with local communities to promote eco-friendly practices.
                    </p>
                </div>
            </div>

            <!-- Women's Health and Hygiene -->
            <div class="col-lg-4 col-md-6 col-sm-12 d-flex card-effect">
                <div class="p-4 text-center w-100"
                    style="color: black; border: 1px solid red; background-color: whitesmoke; border-radius: 10px;">
                    <a href="#" class="h5 d-block mb-3 text-sm-start"
                        style="color: red; border-bottom: 2px solid red; text-decoration: none;">Women's Health and
                        Hygiene</a>
                    <p class="text-sm-start;" style="text-align: justify;">
                        We advocate for women's health and menstrual hygiene. We conduct awareness campaigns and provide
                        affordable access to essential products.
                    </p>
                </div>
            </div>

            <!-- Skill Development and Healthcare -->
            <div class="col-lg-4 col-md-6 col-sm-12 d-flex card-effect">
                <div class="p-4 text-center w-100"
                    style="color: black; border: 1px solid red; background-color: whitesmoke; border-radius: 10px;">
                    <a href="#" class="h5 d-block mb-3 text-sm-start"
                        style="color: red; border-bottom: 2px solid red; text-decoration: none;">Skill Development and
                        Healthcare</a>
                    <p class="text-sm-start;" style="text-align: justify;">
                        We enhance employability and economic independence among women by providing vocational training
                        and healthcare services.
                    </p>
                </div>
            </div>

            <!-- Minority Affairs -->
            <div class="col-lg-4 col-md-6 col-sm-12 d-flex card-effect">
                <div class="p-4 text-center w-100"
                    style="color: black; border: 1px solid red; background-color: whitesmoke; border-radius: 10px;">
                    <a href="#" class="h5 d-block mb-3 text-sm-start"
                        style="color: red; border-bottom: 2px solid red; text-decoration: none;">Minority Affairs</a>
                    <p class="text-sm-start;" style="text-align: justify;">
                        SHEWings champions the rights and needs of minority communities by providing platforms for
                        marginalized voices and promoting inclusivity.
                    </p>
                </div>
            </div>

            <!-- Food and Nutrition Security -->
            <div class="col-lg-4 col-md-6 col-sm-12 d-flex card-effect">
                <div class="p-4 text-center w-100"
                    style="color: black; border: 1px solid red; background-color: whitesmoke; border-radius: 10px;">
                    <a href="#" class="h5 d-block mb-3 text-sm-start"
                        style="color: red; border-bottom: 2px solid red; text-decoration: none;">Food and Nutrition
                        Security</a>
                    <p class="text-sm-start;" style="text-align: justify;">
                        We tackle food scarcity and malnutrition through meal distribution and awareness programs to
                        improve nutritional standards.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <br>




    <!-- Counter Start -->
    <div class="container-fluid counter py-5"
        style="background:#ec1f27 ;url(<?php echo esc_url(get_template_directory_uri()); ?> center center; background-size: cover;">
        <div class="container py-5">
            <div class="text-center mx-auto pb-5" style="max-width: 800px;">
                <h5 class="text-uppercase text-primary">Our Impact</h5>
                <p class="text-white mb-0">Since our founding, SHEWings Foundation has made a measurable impact across
                    communities, both urban and rural. With our focus on women's health, education, and accessibility
                </p>
            </div>
            <div class="row g-4">
                <div class="col-md-6 col-lg-6 col-xl-3">
                    <div class="counter-item text-center border p-5">
                        <i class="fas fa-thumbs-up fa-4x text-white"></i>
                        <h3 class="text-white my-4">Reached over</h3>
                        <div class="counter-counting">
                            <span class="text-primary fs-2 fw-bold" data-toggle="counter-up">3,000,000</span>
                            <span class="h1 fw-bold text-primary">+ Individuals</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3">
                    <div class="counter-item text-center border p-5">
                        <i class="fas fa-file-invoice-dollar fa-4x text-white"></i>
                        <h3 class="text-white my-4">Distributed</h3>
                        <div class="counter-counting text-center border-white w-100"
                            style="font-size: 30px;border-style: none;">
                            <span class="text-primary fs-2 fw-bold" data-toggle="counter-up">500,000</span>
                            <span class="h1 fw-bold text-primary">+ Pads</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3">
                    <div class="counter-item text-center border p-5">
                        <i class="fas fa-user fa-4x text-white"></i>
                        <h3 class="text-white my-4">Partnered with</h3>
                        <div class="counter-counting text-center border-white w-100"
                            style="font-size: 30px;border-style: none;">
                            <span class="text-primary fs-2 fw-bold" data-toggle="counter-up">100</span>
                            <span class="h1 fw-bold text-primary">+ Schools</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3">
                    <div class="counter-item text-center border p-5">
                        <i class="fas fa-heart fa-4x text-white"></i>
                        <h3 class="text-white my-4">Trained</h3>
                        <div class="counter-counting text-center border-white w-100"
                            style="font-size: 30px;border-style: none;">
                            <span class="text-primary fs-2 fw-bold" data-toggle="counter-up">1,000</span>
                            <span class="h1 fw-bold text-primary">+ Volunteers</span>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <!-- <div class="d-flex align-items-center justify-content-center">
                        <a class="btn-hover-bg btn btn-primary text-white py-2 px-4"
                            href="<?php echo home_url ('form') ; ?>">Join With Us</a>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
    <br>
    <!-- Counter End -->


    <!-- Services start -->
    <div class="container-fluid py-5" style="object-fit: cover;">
        <div class="container py-5 text-center">

            <div class="container mt-4">
                <div class="row justify-content-center gap-4">
                    <!--Transforming Lives Through Health Education -->
                    <div class="col-md-5 col-sm-12 p-4 d-flex flex-column align-items-center card-effect"
                        style="color: black; border: 1px solid red; background-color: whitesmoke; border-radius: 10px;">
                        <div class="service-item text-center">
                            <div class="service-link">
                                <a href="#" class="h3 mb-3"
                                    style="color: red; border-bottom: 2px solid red; text-decoration: none;">Transforming
                                    Lives Through Health Education</a>
                            </div>
                        </div>
                        <p class="mt-3" style="text-align: justify;">
                            Education is our foundation for empowerment. Through workshops and awareness campaigns, we
                            provide vital health knowledge on topics like self-breast exams, cervical cancer, mental
                            health, and menstrual hygiene. Our efforts break the silence and stigma around women's
                            health, fostering informed choices and supportive communities.
                        </p>
                    </div>


                    <!-- Bridging the Gap with Essential Resources -->
                    <div class="col-md-5 col-sm-12 p-4 d-flex flex-column align-items-center card-effect"
                        style="color: black; border: 1px solid red; background-color: whitesmoke; border-radius: 10px;">
                        <div class="service-item text-center">
                            <div class="service-link">
                                <a href="#" class="h3 mb-3"
                                    style="color: red; border-bottom: 2px solid red; text-decoration: none;">Bridging
                                    the Gap with Essential Resources</a>
                            </div>
                        </div>
                        <p class="mt-3" style="text-align: justify;">
                            SHEWings Foundation bridges the gap in personal care access by providing quality, affordable
                            health products like 100% cotton sanitary pads and reusable items. Prioritizing underserved
                            areas, we ensure dignity, comfort, and better health while reducing school absenteeism among
                            young girls, empowering them to pursue education with confidence.
                        </p>
                    </div>
                </div>
            </div>
            <div class="container mt-4">
                <div class="row justify-content-center gap-4">
                    <!-- Building Strong, Health-Conscious Communities -->
                    <div class="col-md-5 col-sm-12 p-4 d-flex flex-column align-items-center card-effect"
                        style="color: black; border: 1px solid red; background-color: whitesmoke; border-radius: 10px;">
                        <div class="service-item text-center">
                            <div class="service-link">
                                <a href="#" class="h3 mb-3"
                                    style="color: red; border-bottom: 2px solid red; text-decoration: none;">Building
                                    Strong, Health-Conscious Communities</a>
                            </div>
                        </div>
                        <p class="mt-3" style="text-align: justify;">
                            Our impact thrives through strong community partnerships with leaders, schools, and
                            healthcare providers. Through events, workshops, and health campaigns, we foster awareness,
                            normalize critical health topics, and empower communities to take charge of their
                            well-being.
                        </p>
                    </div>


                    <!-- Stories of Change -->
                    <div class="col-md-5 col-sm-12 p-4 d-flex flex-column align-items-center card-effect"
                        style="color: black; border: 1px solid red; background-color: whitesmoke; border-radius: 10px;">
                        <div class="service-item text-center">
                            <div class="service-link">
                                <a href="#" class="h3 mb-3"
                                    style="color: red; border-bottom: 2px solid red; text-decoration: none;">Stories of
                                    Change</a>
                            </div>
                        </div>
                        <p class="mt-3" style="text-align: justify;">
                            Every statistic tells a story of resilience and transformation. From young girls staying in
                            school to mothers empowered with self-care knowledge, our impact is life-changing. These
                            stories fuel our commitment, proving that true change comes from human connections, not just
                            numbers.
                        </p>
                    </div>
                </div>
            </div>




            <!-- Minority Affairs -->
            <!-- <div class="col-lg-4 col-md-6 col-sm-12 d-flex">
                    <div class="p-4 text-center w-100"
                        style="color: black; border: 1px solid red; background-color: whitesmoke; border-radius: 10px;">
                        <a href="#" class="h5 d-block mb-3 text-sm-start"
                            style="color: red; border-bottom: 2px solid red; text-decoration: none;">Minority Affairs</a>
                        <p class="text-sm-start">
                            SHEWings champions the rights and needs of minority communities by providing platforms for marginalized voices and promoting inclusivity.
                        </p>
                    </div>
                </div> -->

            <!-- Food and Nutrition Security -->
            <!-- <div class="col-lg-4 col-md-6 col-sm-12 d-flex">
                    <div class="p-4 text-center w-100"
                        style="color: black; border: 1px solid red; background-color: whitesmoke; border-radius: 10px;">
                        <a href="#" class="h5 d-block mb-3 text-sm-start"
                            style="color: red; border-bottom: 2px solid red; text-decoration: none;">Food and Nutrition Security</a>
                        <p class="text-sm-start">
                            We tackle food scarcity and malnutrition through meal distribution and awareness programs to improve nutritional standards.
                        </p>
                    </div> -->
        </div>

    </div>
    </div>
    </div>
    </div>
    <br>
    <!-- Services End -->

    <!-- Counter End -->




    <?php
get_footer();