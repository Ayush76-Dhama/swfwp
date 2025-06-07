<?php
/**
 * Template Name: Our Campaign Template
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
                            <a href="<?php echo home_url('about-us'); ?>" class="nav-link dropdown-toggle" style="color: red;">About Us</a>
                            <div class="dropdown-menu">
                                <a href="<?php echo home_url('mission'); ?>" class="dropdown-item" style="color: red;">Vision & Mission</a>
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
                        <a href="<?php echo esc_url(get_template_directory_uri()); ?>/documents/ShewingsFoundation_deck.pdf" class="btn-hover-bg btn btn-primary text-white py-2 px-4 me-3">SHEWings Profile</a>
                    </div> 
                </div>
            </nav>
        </div>  
    </div>
    <!-- Navbar End -->
    <div class="container-fluid bg-breadcrumb10">
        <div class="container text-center py-5" style="max-width: 900px;">
            <!-- <h3 class="text-white display-3 mb-4">Our Campaign</h1> -->
                <!-- <p class="fs-5 text-white mb-4">Empowering Change, One Step at a Time
                </p> -->
                <ol class="breadcrumb justify-content-center mb-0">
                    <!-- <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item active text-white">Campaign</li> -->
                </ol>
        </div>
    </div><br>
     <div class="container mt-4">

    <div class="row justify-content-center g-4">
        <!-- Campaigns by SheWings Foundation -->
        <div class="col-lg-4 col-md-6 col-sm-12 d-flex card-effect ">
            <div class="p-4 text-center w-100"
                style="color: black; border: 1px solid red; background-color: whitesmoke; border-radius: 10px;">
                <a href="#" class="h5 d-block mb-3 text-sm-start"
                style="color: red; border-bottom: 2px solid red; text-decoration: none;">Campaigns by SHEWings Foundation</a>
                <p class="text-sm-start;" style="text-align: justify;">
                SHEWings Foundation has led impactful campaigns across India, addressing critical issues in women’s health, education, empowerment, and social equality. Our campaigns aim to break taboos, inspire action, and create lasting change, supported by partnerships with esteemed organizations and corporate allies. Here are some of the campaigns we've championed:
                </p>
            </div>
        </div>

        <!-- Yes! I Bleed -->
        <div class="col-lg-4 col-md-6 col-sm-12 d-flex card-effect">
            <div class="p-4 text-center w-100"
                style="color: black; border: 1px solid red; background-color: whitesmoke; border-radius: 10px;">
                <a href="#" class="h5 d-block mb-3 text-sm-start"
                    style="color: red; border-bottom: 2px solid red; text-decoration: none;">#YesIBleed</a>
                <p class="text-sm-start;" style="text-align: justify;">
                A revolutionary campaign aimed at ending the stigma around menstruation, Yes I Bleed encourages open dialogue on menstrual health and hygiene. Through educational workshops, community outreach, and advocacy, we strive to normalize discussions around menstruation and emphasize the need for accessible, affordable sanitary products for all.
                </p>
            </div>
        </div>

        <!-- Red Dot Campaign -->
        <div class="col-lg-4 col-md-6 col-sm-12 d-flex card-effect">
            <div class="p-4 text-center w-100"
                style="color: black; border: 1px solid red; background-color: whitesmoke; border-radius: 10px;">
                <a href="#" class="h5 d-block mb-3 text-sm-start"
                    style="color: red; border-bottom: 2px solid red; text-decoration: none;">#RedDotCampaign</a>
                <p class="text-sm-start;" style="text-align: justify;">
                The Red Dot Campaign raises awareness about menstrual hygiene management and the importance of sustainable menstrual practices. With a focus on eco-friendly and reusable menstrual products, this campaign promotes sustainable choices while addressing the environmental impact of menstrual waste. It also works to spread awareness in communities about menstrual hygiene practices, helping women make informed, responsible decisions.
                </p>
            </div>
        </div>

        <!-- Donate Old Bra & Panty -->
        <div class="col-lg-4 col-md-6 col-sm-12 d-flex card-effect">
            <div class="p-4 text-center w-100"
                style="color: black; border: 1px solid red; background-color: whitesmoke; border-radius: 10px;">
                <a href="#" class="h5 d-block mb-3 text-sm-start"
                    style="color: red; border-bottom: 2px solid red; text-decoration: none;">#DonateOldBraPanty</a>
                <p class="text-sm-start;" style="text-align: justify;">
                This unique initiative invites individuals to donate gently used bras and panties for distribution to women in need. Often overlooked, access to proper undergarments is essential for women’s health and dignity. The Donate Old Bra & Panty campaign promotes a culture of sharing and compassion, bringing comfort to underprivileged women and girls who lack access to these basic necessities.
                </p>
            </div>
        </div>

        <!-- Feed the Future -->
        <div class="col-lg-4 col-md-6 col-sm-12 d-flex card-effect">
            <div class="p-4 text-center w-100"
                style="color: black; border: 1px solid red; background-color: whitesmoke; border-radius: 10px;">
                <a href="#" class="h5 d-block mb-3 text-sm-start"
                    style="color: red; border-bottom: 2px solid red; text-decoration: none;">#FeedtheFuture</a>
                <p class="text-sm-start;" style="text-align: justify;">
                Our Feed the Future campaign focuses on nutrition awareness and combating malnutrition in under-resourced communities. Targeting working mothers and families, this campaign sheds light on the importance of balanced diets and adequate nutrition for children’s development and mothers’ well-being. By partnering with health experts and providing educational resources, Feed the Future aims to build a healthier, more resilient future generation.
                </p>
            </div>
        </div>

        <!-- International Women's Day Celebration -->
        <div class="col-lg-4 col-md-6 col-sm-12 d-flex card-effect">
            <div class="p-4 text-center w-100"
                style="color: black; border: 1px solid red; background-color: whitesmoke; border-radius: 10px;">
                <a href="#" class="h5 d-block mb-3 text-sm-start"
                    style="color: red; border-bottom: 2px solid red; text-decoration: none;">#InternationalWomen'sDayCelebration</a>
                <p class="text-sm-start;" style="text-align: justify;">
                Every year, SHEWings celebrates International Women’s Day by honoring the resilience, achievements, and leadership of women from all walks of life. Through workshops, speeches, and cultural activities, this event empowers women to voice their stories, advocate for equality, and inspire others. It’s a day dedicated to celebrating the strength and spirit of women, while reinforcing our commitment to a gender-equal future.
                </p>
            </div>
        </div>
         <!-- Women’s Leadership Summit -->
        <div class="col-lg-4 col-md-6 col-sm-12 d-flex card-effect">
            <div class="p-4 text-center w-100"
                style="color: black; border: 1px solid red; background-color: whitesmoke; border-radius: 10px;">
                <a href="#" class="h5 d-block mb-3 text-sm-start"
                    style="color: red; border-bottom: 2px solid red; text-decoration: none;">#Women’sLeadershipSummit</a>
                <p class="text-sm-start;" style="text-align: justify;">
                The Women’s Leadership Summit is a platform for influential women leaders, activists, and entrepreneurs to share insights and inspire others. The summit fosters a culture of collaboration and learning, helping women develop leadership skills and expand their professional networks. By championing women in leadership, SHEWings seeks to bridge the gender gap in industries across the board.
                </p>
            </div>
        </div>
         <!-- Women Health Awareness Program with BPCL-->
        <div class="col-lg-4 col-md-6 col-sm-12 d-flex card-effect">
            <div class="p-4 text-center w-100"
                style="color: black; border: 1px solid red; background-color: whitesmoke; border-radius: 10px;">
                <a href="#" class="h5 d-block mb-3 text-sm-start"
                    style="color: red; border-bottom: 2px solid red; text-decoration: none;">#WomenHealthProgramwithBPCL</a>
                <p class="text-sm-start;" style="text-align: justify;">
                In collaboration with Bharat Petroleum Corporation Limited (BPCL), SHEWings has conducted health awareness programs focused on women’s health, menstrual hygiene, and preventive care. These programs educate women on the importance of self-care, regular check-ups, and maintaining hygiene, contributing to improved health outcomes in communities across India.
                </p>
            </div>
        </div>
    </div>
</div>
<br>
<br>




    <?php
get_footer();