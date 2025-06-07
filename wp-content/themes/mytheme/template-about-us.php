<?php
/**
 * Template Name: About Us Template
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
                            <a href="<?php echo home_url('about-us-2'); ?>" class="nav-link dropdown-toggle"
                                style="color: red;">About
                                Us</a>
                            <div class="dropdown-menu">
                                <a href="<?php echo home_url('mission'); ?>" class="dropdown-item"
                                    style="color: red;">Vision &
                                    Mission</a>
                            </div>
                        </div>
                        <div class="nav-item dropdown">
                            <a href="<?php echo home_url('our-campaign'); ?>" class="nav-link dropdown-toggle"
                                style="color: red;">Our Campaign</a>
                            <div class="dropdown-menu">
                                <a href="<?php echo home_url('ongoing-project'); ?>" class="dropdown-item"
                                    data-bs-toggle="collapse" data-bs-target="#navbarCollapse" data-bs-dismiss="collapse"
                                    style="color: red;">Ongoing Project</a>
                                <a href="<?php echo home_url('one-day'); ?>" class="dropdown-item"
                                    data-bs-toggle="collapse" data-bs-target="#navbarCollapse" data-bs-dismiss="collapse"
                                    style="color: red;">One Day</a>
                            </div>
                        </div>
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
                        <a href="<?php echo home_url('donation'); ?>" class="nav-item nav-link" style="color: red;">
                            Donate Us </a>
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


    <!-- Header Start -->
    <div class="container-fluid bg-breadcrumb3">
        <div class="container text-center py-5" style="max-width: 900px;">
            <!--<h3 class="text-white display-3 mb-4">About Us</h1>-->
            <!--    <p class="fs-5 text-white mb-4">Empowering Change, One Step at a Time-->
            <!--    </p>-->
            <!--    <ol class="breadcrumb justify-content-center mb-0">-->
            <!--        <li class="breadcrumb-item"><a href="index.html">Home</a></li>-->
            <!--        <li class="breadcrumb-item"><a href="#">Pages</a></li>-->
            <!--        <li class="breadcrumb-item active text-white">About Us</li>-->
            <!--    </ol>-->
        </div>
    </div>
    <!-- Header End -->

    <!-- About Start -->
    <div class="container-fluid about  py-5">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-xl-5">
                    <div class="h-100">
                        <img src="<?php echo esc_url ( get_template_directory_uri () ); ?>/img/about-3.jpg"
                            class="img-fluid w-100 h-100" alt="About">
                    </div>
                </div>
                <div class="col-xl-7">
                    <!--<h5 class="text-uppercase" style="color:  #000000">About Us</h5>-->
                    <h1 class="mb-4" style="color:#ec1f27">About SHEWings Foundation</h1>
                    <p class="fs-5 mb-4" style="text-align: justify;">At SHEWings Foundation, we believe
                        that access to
                        health education and
                        essential resources should be a universal right. Our foundation was created to
                        address the
                        deep-rooted lack of healthcare awareness, especially in areas where
                        conversations around
                        menstrual health,
                        reproductive health, and maternal wellness are often limited or stigmatized.
                        Founded with a
                        vision of transforming lives through knowledge,
                        SHEWings empowers individuals by making healthcare resources, support, and
                        guidance available to
                        all—regardless of social or economic background.

                    </p>
                    <div class="tab-class bg-secondary p-4">
                        <ul class="nav d-flex mb-2">
                            <li class="nav-item mb-3">
                                <a class="d-flex py-2 text-center bg-white active" data-bs-toggle="pill" href="#tab-1">
                                    <span class="text-dark" style="width: 150px;">Story</span>
                                </a>
                            </li>
                            <!--<li class="nav-item mb-3">-->
                            <!--    <a class="d-flex py-2 mx-3 text-center bg-white" data-bs-toggle="pill" href="#tab-2">-->
                            <!--        <span class="text-dark" style="width: 150px;">Mission</span>-->
                            <!--    </a>-->
                            <!--</li>-->
                            <!--<li class="nav-item mb-3">-->
                            <!--    <a class="d-flex py-2 text-center bg-white" data-bs-toggle="pill" href="#tab-3">-->
                            <!--        <span class="text-dark" style="width: 150px;">Vision</span>-->
                            <!--    </a>-->
                            <!--</li>-->
                            <!-- <li class="nav-item mb-3">
                                <a class="d-flex py-2 text-center bg-white" data-bs-toggle="pill" href="#tab-4">
                                    <span class="text-dark" style="width: 150px;">Story</span>
                                </a>
                            </li> -->
                        </ul>
                        <div class="tab-content">
                            <div id="tab-1" class="tab-pane fade show p-0 active">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="d-flex">
                                            <div class="text-start my-auto">
                                                <h5 class="text-uppercase mb-3 mt-3" style="color:#ec1f27"
                                                    target="blank">Click on the
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
                                                                style="color:#fff;" target="blank">#RedDotCampaign</a>
                                                        </p>
                                                    </li>
                                                    <li>
                                                        <p><a href="https://www.youtube.com/watch?v=0ZYfHVczQKw&ab_channel=SheWings"
                                                                style="color:#fff;" target="blank">#YesIBleed</a>
                                                        </p>
                                                    </li>
                                                    <li>
                                                        <p><a href="https://www.youtube.com/watch?v=ArhhcGclJcY"
                                                                style="color:#fff;" target="blank">#FeedTheFuture</a>
                                                        <div class="d-flex align-items-center justify-content-start">
                                                            <a class="btn btn-primary text-white py-2 px-4"
                                                                href="https://www.youtube.com/watch?v=jnxrBBCg8Kg"
                                                                style="background-color: #3c4142;" target="blank;">Watch
                                                                Another Video</a>
                                                        </div>
                                                        </p>
                                                    </li>

                                                </ul>
                                                <!-- <div class="d-flex align-items-center justify-content-start">
                                                    <a class="btn-hover-bg btn btn-primary text-white py-2 px-4"
                                                        href="#">Read More</a>
                                                </div> -->
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
                                                <h5 class="text-uppercase mb-3">A
                                                    Better Tomorrow for comming
                                                    generations</h5>
                                                <p class="mb-4">Our mission is
                                                    rooted in the belief that
                                                    everyone
                                                    deserves to feel informed and
                                                    empowered about their health,
                                                    wellbeing, environment,
                                                    sustainability and mental
                                                    Health. We aim
                                                    to remove the barriers that
                                                    prevent
                                                    people from accessing
                                                    reliable health resources and
                                                    understanding
                                                    their own wellness. By
                                                    focusing on inclusivity and
                                                    dignity, we
                                                    strive
                                                    to create lasting change,
                                                    offering not only health
                                                    education but also the tools
                                                    needed to
                                                    improve well-being for
                                                    generations to come.
                                                </p>
                                                <!-- <div class="d-flex align-items-center justify-content-start">
                                                    <a class="btn-hover-bg btn btn-primary text-white py-2 px-4"
                                                        href="#">Read More</a>
                                                </div> -->
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
                                                <h5 class="text-uppercase mb-3">
                                                    Affordable and Adaptive
                                                    healthcare
                                                    services for all</h5>
                                                <p class="mb-4">At SHEWings, our
                                                    work is fueled by compassion
                                                    and a
                                                    commitment to real change.
                                                    We believe that lasting
                                                    impact comes from consistent,
                                                    compassionate
                                                    efforts to empower those in
                                                    need Whether it's through a
                                                    simple
                                                    workshop or an extensive
                                                    health campaign, our focus
                                                    remains on
                                                    delivering support that
                                                    respects individual dignity
                                                    and
                                                    creates meaningful change.
                                                    SHEWings Organize massive
                                                    woman health
                                                    camps where consultation to
                                                    treatment is provided.
                                                </p>
                                                <!-- <div class="d-flex align-items-center justify-content-start">
                                                    <a class="btn-hover-bg btn btn-primary text-white py-2 px-4"
                                                        href="#">Read More</a>
                                                </div> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </br>
                            <!-- <div id="tab-4" class="tab-pane fade show p-0">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="d-flex">
                                            <div class="text-start my-auto">
                                                <h5 class="text-uppercase mb-3">Bridging the Healthcare Knowledge Gap
                                                </h5>
                                                <p class="mb-4">Since past 10-year, SheWings Foundation was established
                                                    to bridge a gap
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
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <div class="container-fluid py-5" style=" object-fit: cover;">

        <div class="container py-5 text-center">
        <h2 class="display-1" style="color:#ec1f27">A Foundation Built on Action and Advocacy
        </h2>
            <div class="row justify-content-center">
                <div class="container mt-4">
                    <div class="row justify-content-center gap-4">
                        <!-- Health Education -->
                        <div class="col-md-5 p-4 d-flex flex-column align-items-center card-effect"
                            style="color: black; border: 1px solid red; background-color: whitesmoke; border-radius: 10px;">
                            <div class="service-item text-center">
                                <div class="service-link">
                                    <!-- <a href="#" class="h3 mb-3"
                                        style="color: red; border-bottom: 2px solid red; text-decoration: none;">Health
                                        Education</a> -->
                                </div>
                            </div>
                            <p class="mt-3" style="text-align: justify;">
                                SHEWings Foundation drives action and advocacy for lasting
                                health change. We collaborate
                                with experts and leaders to improve healthcare access, from
                                menstrual hygiene in schools
                                to workplace mental health programs. Rooted in research and
                                community input, our
                                initiatives address specific challenges, ensuring impactful,
                                tailored solutions for
                                diverse needs.
                            </p>
                        </div>

                        <!-- Resource Accessibility -->
                        <div class="col-md-5 p-4 d-flex flex-column align-items-center card-effect"
                            style="color: black; border: 1px solid red; background-color: whitesmoke; border-radius: 10px;">
                            <div class="service-item text-center">
                                <div class="service-link">
                                    <!-- <a href="#" class="h3 mb-3"
                                        style="color: red; border-bottom: 2px solid red; text-decoration: none;">Resource
                                        Accessibility</a> -->
                                </div>
                            </div>
                            <p class="mt-3" style="text-align: justify;">
                                Education is central to SHEWings Foundation. We empower
                                individuals with knowledge to
                                make informed health decisions through interactive, accessible
                                programs. Beyond
                                information, we promote critical thinking, self-care, and
                                community support. Our
                                resources help people understand health risks, improve
                                well-being, and find necessary
                                support. By focusing on education, we enable participants to
                                advocate for their own and
                                their community's health.
                            </p>
                        </div>

                        <!-- Community Advocacy and Partnerships -->
                        <div class="col-md-5 p-4 d-flex flex-column align-items-center card-effect"
                            style="color: black; border: 1px solid red; background-color: whitesmoke; border-radius: 10px;">
                            <div class="service-item text-center">
                                <!-- <div class="service-link">
                                    <a href="#" class="h3 mb-3"
                                        style="color: red; border-bottom: 2px solid red; text-decoration: none;">Community
                                        Advocacy and Partnerships</a>
                                </div> -->
                            </div>
                            <p class="mt-3" style="text-align: justify;">
                                SHEWings Foundation fosters supportive networks, uniting health
                                professionals,
                                educators, and advocates to drive meaningful change. These
                                connections provide guidance
                                and solidarity on the journey to better health.Our maternal
                                health programs link mothers
                                with experts and peer support, while our cancer awareness
                                campaigns create safe spaces
                                for shared experiences, learning, and practical support.
                            </p>
                        </div>
                        <div class="col-md-5 p-4 d-flex flex-column align-items-center card-effect"
                            style="color: black; border: 1px solid red; background-color: whitesmoke; border-radius: 10px;">
                            <div class="service-item text-center">
                                <!-- <div class="service-link">
                                    <a href="#" class="h3 mb-3"
                                        style="color: red; border-bottom: 2px solid red; text-decoration: none;">Community
                                        Advocacy and Partnerships</a>
                                </div> -->
                            </div>
                            <p class="mt-3" style="text-align: justify;">
                                Join SHEWings Foundation in creating a healthier future. Get
                                involved through
                                volunteering, donations, or partnerships to expand health
                                education and well-being for
                                all.Explore our programs, see our impact, and be part of a
                                movement where knowledge and
                                compassion transform lives, one community at a time.
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
                    <p class="mb-4 text-dark">Our mission is more than a statement—it's a lifelong commitment to
                        creating a world where health knowledge and resources are available to all. As we grow, we
                        remain dedicated to evolving our programs to meet the needs of diverse communities and respond
                        to changing health landscapes. We will continue to invest in innovative solutions, sustainable
                        resources, and partnerships that extend our mission's reach.</p>

                    <p class="mb-4 text-dark">SheWings Foundation invites you to join us in our mission. Together, we
                        can create a future where health, dignity, and empowerment are a reality for everyone.</p>

                    <!-- <a class="btn btn-primary btn-hover-bg py-3 px-5" href="index.html">Go Back To Home</a> -->
    </div>

    </div>



    <?php
get_footer();