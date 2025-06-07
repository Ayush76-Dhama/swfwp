<?php
/**
 * Template Name: Mission Template
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
                            class="btn-hover-bg btn btn-primary text-white py-2 px-4 me-3">SHEWings
                            Profile</a>
                    </div>
                </div>
            </nav>
        </div>
    </div>

    <!-- Navbar End -->
    <div class="container-fluid bg-breadcrumb5">
        <div class="container text-center py-5" style="max-width: 900px;">
            <!--<h3 class="text-white display-3 mb-4">Vision & Mission</h1>-->
            <!--    <p class="fs-5 text-white mb-4">Empowering Change, One Step at a Time-->
            <!--    </p>-->
            <!--<ol class="breadcrumb justify-content-center mb-0">-->
            <!--    <li class="breadcrumb-item"><a href="index.html">Home</a></li>-->
            <!--    <li class="breadcrumb-item"><a href="#">Pages</a></li>-->
            <!--    <li class="breadcrumb-item active text-white">Mission</li>-->
            <!--</ol>-->
        </div>
    </div><br>

    <div class="container-fluid py-5" style="object-fit: cover;">
        <div class="container py-5 text-center">

            <div class="container mt-4">
                <div class="row justify-content-center gap-4">
                    <!-- Vision Box -->
                    <div class="col-md-5 p-4 d-flex flex-column align-items-center card-effect"
                        style="color: black; border: 1px solid red; background-color: whitesmoke; border-radius: 10px;">
                        <div class="service-item text-center">
                            <div class="service-link">
                                <a href="#" class="h3 mb-3"
                                    style="color: red; border-bottom: 2px solid red; text-decoration: none;">Vision</a>
                            </div>
                        </div>
                        <p class="mt-3" style="text-align: justify;">
                            At SHEWings Foundation, we envision a world where every
                            person—regardless of gender,
                            economic background, or social status—has access to essential health
                            knowledge, resources,
                            and support. Our long-term vision is to foster an inclusive, informed,
                            and empowered society
                            in which healthcare is not a privilege but a universal right.
                        </p>
                    </div>


                    <!-- Mission Box -->
                    <div class="col-md-5 p-4 d-flex flex-column align-items-center card-effect"
                        style="color: black; border: 1px solid red; background-color: whitesmoke; border-radius: 10px;">
                        <div class="service-item text-center">
                            <div class="service-link">
                                <a href="#" class="h3 mb-3"
                                    style="color: red; border-bottom: 2px solid red; text-decoration: none;">Mission</a>
                            </div>
                        </div>
                        <p class="mt-3" style="text-align: justify;">
                            At SHEWings Foundation, our mission is to empower individuals and
                            communities with the
                            knowledge and resources needed for a healthier life. We strive to
                            eliminate stigmas
                            surrounding women’s health issues and ensure that health education is
                            accessible to all,
                            from young adults to seniors, in both urban and rural areas.
                        </p>
                    </div>
                </div>
            </div>



            <!-- <div class="row justify-content-center">
                <div>
                    <!-- <i class="bi bi-exclamation-triangle display-1 text-primary"></i>
                    <h1 class="display-1">404</h1> -->
            <!-- <h1 class="mb-4 text-dark" style="border:1px solid red; ">Vission</h1>
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
                healthier, stronger societies for generations to come.</p> -->
            <!-- <a class="btn btn-primary btn-hover-bg py-3 px-5" href="index.html">Go Back To Home</a> -->
        </div>
    </div>
    </div>
    </div><br>
    <div class="container-fluid py-5 "
        style="background: linear-gradient(rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.2)); object-fit: cover;">
        <div class="container py-5 ">
            <div class="row justify-content-center">
                <div class="container mt-4">
                    <div class="row justify-content-center mt-4">
                        <!-- Our Commitment for the Future -->
                        <div class="col-md-10 p-4" style="color: black; border: 1px;  border-radius: 10px;">
                            <h3 style="color: red; border-bottom: 2px solid red; padding-bottom: 10px; width:50%;">
                                Our
                                Commitment for the Future</h3>
                            <p style="text-align: justify;">
                                Our mission is more than a statement—it’s a lifelong commitment
                                to creating a world
                                where health knowledge and resources are available to all. As we
                                grow, we remain
                                dedicated to evolving our programs to meet the needs of diverse
                                communities and respond
                                to changing health landscapes. We will continue to invest in
                                innovative solutions,
                                sustainable resources, and partnerships that extend our
                                mission’s reach. SHEWings
                                Foundation invites you to join us in our mission. Together, we
                                can create a future where
                                health, dignity, and empowerment are a reality for everyone.
                            </p>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div><br>

    <!-- Carousel Start -->
    <div class="container-fluid py-5" style=" object-fit: cover;">

        <div class="container py-5 text-center">
            <h2 class="display-1" style="color:#ec1f27">Our Core Pillars </h2>
            <div class="row justify-content-center">
                <div class="container mt-4">
                    <div class="row justify-content-center gap-4">
                        <!-- Health Education -->
                        <div class="col-md-5 p-4 d-flex flex-column align-items-center card-effect"
                            style="color: black; border: 1px solid red; background-color: whitesmoke; border-radius: 10px;">
                            <div class="service-item text-center">
                                <div class="service-link">
                                    <a href="#" class="h3 mb-3"
                                        style="color: red; border-bottom: 2px solid red; text-decoration: none;">Health
                                        Education</a>
                                </div>
                            </div>
                            <p class="mt-3" style="text-align: justify;">
                                Education is at the heart of what we do. Our workshops,
                                seminars, and campaigns focus on
                                essential topics such as menstrual hygiene, reproductive health,
                                cancer awareness,
                                mental health, and maternal wellness. We work with schools,
                                workplaces, and community
                                centers to provide health education that is accurate, practical,
                                and engaging. By
                                addressing topics often overlooked or stigmatized, we empower
                                individuals to make
                                proactive health decisions.
                            </p>
                        </div>

                        <!-- Resource Accessibility -->
                        <div class="col-md-5 p-4 d-flex flex-column align-items-center card-effect"
                            style="color: black; border: 1px solid red; background-color: whitesmoke; border-radius: 10px;">
                            <div class="service-item text-center">
                                <div class="service-link">
                                    <a href="#" class="h3 mb-3"
                                        style="color: red; border-bottom: 2px solid red; text-decoration: none;">Resource
                                        Accessibility</a>
                                </div>
                            </div>
                            <p class="mt-3" style="text-align: justify;">
                                Access to quality health resources is vital for personal
                                well-being. SHEWings Foundation
                                is committed to bridging the gap by providing sustainable,
                                affordable personal care
                                products and resources in underserved communities. From
                                distributing 100% cotton
                                sanitary pads to offering mental health support, we aim to
                                ensure everyone has access to
                                the basic healthcare tools and support they deserve. By making
                                these resources
                                available, we are helping individuals to take control of their
                                health with dignity.
                            </p>
                        </div>

                        <!-- Community Advocacy and Partnerships -->
                        <div class="col-md-5 p-4 d-flex flex-column align-items-center card-effect"
                            style="color: black; border: 1px solid red; background-color: whitesmoke; border-radius: 10px;">
                            <div class="service-item text-center">
                                <div class="service-link">
                                    <a href="#" class="h3 mb-3"
                                        style="color: red; border-bottom: 2px solid red; text-decoration: none;">Community
                                        Advocacy and Partnerships</a>
                                </div>
                            </div>
                            <p class="mt-3" style="text-align: justify;">
                                We believe that change happens when communities come together.
                                SHEWings Foundation
                                collaborates with local leaders, schools, healthcare providers,
                                and corporate partners
                                to extend our reach and maximize impact. By building strong
                                partnerships, we can amplify
                                awareness and create a ripple effect, bringing health education
                                and resources to even
                                more people. Our advocacy work is focused on raising awareness,
                                dismantling stigmas,
                                and` advocating for policies that support health equality and
                                accessibility.
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </div><br>

        <!-- <div class="container-fluid py-5"
        style="background: linear-gradient(rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.2)); object-fit: cover;">
        <div class="container py-5 text-center">
            <div class="row justify-content-center">
                <div>
                    <!-- <i class="bi bi-exclamation-triangle display-1 text-primary"></i>
                    <h1 class="display-1">404</h1> -->
        <!-- 
                    <h1 class="mb-4 text-dark">Our Commitment for the Future</h1>
                    <p class="mb-4 text-dark">Our mission is more than a statement—it’s a lifelong commitment to
                        creating a world where health knowledge and resources are available to all. As we grow, we
                        remain dedicated to evolving our programs to meet the needs of diverse communities and respond
                        to changing health landscapes. We will continue to invest in innovative solutions, sustainable
                        resources, and partnerships that extend our mission’s reach.</p>

                    <p class="mb-4 text-dark">SheWings Foundation invites you to join us in our mission. Together, we
                        can create a future where health, dignity, and empowerment are a reality for everyone.</p>

                    <!-- <a class="btn btn-primary btn-hover-bg py-3 px-5" href="index.html">Go Back To Home</a> -->
    </div>


    </div>
    </div>
    </div><br>



    <?php
get_footer();