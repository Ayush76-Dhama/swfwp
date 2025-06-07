<?php
/**
 * Template Name: Ongoing Project Template
 * Template Post Type: post, page
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

get_header();
?>
<link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri()); ?>/css/video-grid.css">

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
                        <a href="tel:8800633291" class="text-light"><i class="fas fa-phone-alt text-white me-2"></i>+91
                            8800633291</a>
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
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/logo/logo2.jpg" alt="Shewings Logo"
                    style="max-height: 60px; width: auto;">
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

<!-- Video Grid Section Start -->
<div class="videos-container">
    <div class="videos-grid">
        <!-- Product Section -->
        <section class="content-card">
            <div class="video-wrapper">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/community.jpg"
                    alt="She Wings Community" class="content-video">
                <div class="video-overlay"></div>
            </div>
            <div class="content-wrapper">
                <div class="content-text">
                    <h2 class="section-title" style="color: #ec1f27;">Clean Drinking Water Access in Schools</h2>
                    <h4 style="color: #ec1f27; text-align: justify">Project Summary & Objectives</h4>
                    <p class="section-description" style="text-align: justify">
                        SheWings, in partnership with BPCL, worked to improve school health by giving clean drinking
                        water to students. In Phase 1, we installed 250-liter RO systems in 15 government schools in
                        Gautam Buddha Nagar. The goal was to reduce waterborne illness and support better learning
                        through safe water. Clean water keeps children healthy, focused, and active in class. </p>
                    <h4 style="color: #ec1f27; text-align: justify">Execution & Handover</h4>
                    <p class="section-description" style="text-align: justify">Before installing the systems, our team
                        visited each school to check the water quality and power supply. Then, we installed RO systems
                        with coolers. Each one was tested by experts. School staff were trained to use and maintain
                        them. A three-way agreement between SheWings, Rewz Water, and each school set clear roles for
                        care after setup. Once ready, schools took full control of the systems.</p>
                    <h4 style="color: #ec1f27; text-align: justify">Outcomes & Benefits</h4>
                    <p class="section-description" style="text-align: justify">Today, 4,000 to 5,000 students and staff
                        have access to clean drinking water daily. Illness from unsafe water has dropped. Attendance and
                        focus have improved. Schools now use less bottled water, cutting down plastic waste. A toll-free
                        support number and regular checkups help keep systems running well.
                    </p>
                    <h4 style="color: #ec1f27; text-align: justify">Conclusion</h4>
                    <p class="section-description" style="text-align: justify">This project brought safe water and
                        better health to thousands. Students now learn without worrying about falling sick. With Phase 1
                        complete, work on 20 more schools has started. SheWings and BPCL are building a healthier
                        future, one school at a time.</p>
                </div>
            </div>
        </section>

        <!-- Community Section -->
        <section class="content-card">
            <div class="video-wrapper">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/comfort.jpg"
                    alt="Comfort and Convenience" class="content-video">
                <div class="video-overlay"></div>
            </div>
            <div class="content-wrapper">
                <div class="content-text">
                    <h2 class="section-title" style="color: #ec1f27;">Health and Hygiene Awareness in Schools</h2>
                    <h4 style="color: #ec1f27; text-align: justify">Executive Summary & Objectives</h4>
                    <p class="section-description" style="text-align: justify">
                        SheWings, with support from IOCL, led a women’s health program across 31 government schools in
                        Gautam Buddha Nagar. The aim was to teach girls and female staff about periods, breast care,
                        body changes, and healthy daily habits. Many girls don’t get this information at home or feel
                        shy to ask. This project wanted to break that silence. We aimed to make health and hygiene a
                        normal part of school life, not something hidden or shameful.
                    </p>
                    <h4 style="color: #ec1f27; text-align: justify">Execution & Handover</h4>
                    <p class="section-description" style="text-align: justify">From March 15 to April 20, our team
                        visited each school. We spoke with girls aged 10 to 18 and their teachers. Sessions were simple
                        and open. We talked about how to use sanitary pads, signs of breast health issues, and when to
                        visit a doctor. We also introduced the idea of upcoming health camps, which will include doctors
                        and free hygiene kit distribution.</p>
                    <h4 style="color: #ec1f27; text-align: justify">Outcomes & Benefits</h4>
                    <p class="section-description" style="text-align: justify">At first, the girls were quiet. But they
                        slowly opened up, asked questions, and shared worries. They learned facts about their bodies and
                        felt heard. Teachers saw a positive shift—schools became safer spaces for these conversations.
                        The girls are now more confident and look forward to future camps.</p>
                    <h4 style="color: #ec1f27; text-align: justify">Conclusion</h4>
                    <p class="section-description" style="text-align: justify">This project gave young girls knowledge
                        and courage. With IOCL’s support, we helped them feel safe and proud of their health. We will
                        keep going—one school at a time. Every girl deserves to grow up informed, confident, and
                        healthy.</p>
                    <!-- <button class="cta-button" onclick="window.location.href='<?php echo home_url('shop'); ?>'">
                            Shop Now
                            <span class="button-arrow">→</span>
                        </button> -->
                </div>
            </div>
        </section>
    </div>
</div>
<!-- Video Grid Section End -->






































<?php
get_footer();