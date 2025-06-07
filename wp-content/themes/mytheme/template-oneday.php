<?php
/**
 * Template Name: One Day Template
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





<div class="container-fluid service py-5 bg-light" style="background-color: #f2f2f2;">
    <div class="container py-5">
        <div class="text-center mx-auto pb-5" style="max-width: 800px;">
            <h1 class="mb-0" style="color: #ec1f27; font-size: 2.5rem; font-weight: 700; text-transform: uppercase; letter-spacing: 1px;">Our Campaigns</h1>
        </div>
        <div class="row g-4">
            <?php
            $campaigns = array(
                array(
                    'name' => 'Red Dot Campaign',
                    'image' => 'placeholder-health.jpg',
                    'content' => 'Raising awareness about menstrual hygiene and sustainable practices through community engagement.'
                ),
                array(
                    'name' => 'Women\'s Health Program',
                    'image' => 'placeholder-women.jpg',
                    'content' => 'Empowering women through health awareness programs and medical camps across NCR schools.'
                ),
                array(
                    'name' => 'ITBP Health Seminar',
                    'image' => 'placeholder-education.jpg',
                    'content' => 'Conducting health seminars for women in armed forces with distinguished guests and experts.'
                ),
                array(
                    'name' => 'Digital Literacy',
                    'image' => 'placeholder-education.jpg',
                    'content' => 'Bridging the digital divide through technology training and education programs.'
                ),
                array(
                    'name' => 'Rural Health Camps',
                    'image' => 'placeholder-health.jpg',
                    'content' => 'Providing healthcare services and education to underprivileged rural communities.'
                ),
                array(
                    'name' => 'Skill Development',
                    'image' => 'placeholder-women.jpg',
                    'content' => 'Enhancing employability through vocational training and skill development programs.'
                )
            );

            foreach ($campaigns as $campaign) : ?>
                <div class="col-md-4">
                    <div class="service-item animate-card" style="background: white; border-radius: 15px; overflow: hidden; box-shadow: 0 10px 30px rgba(0,0,0,0.1); transition: all 0.4s cubic-bezier(0.165, 0.84, 0.44, 1); height: 100%; position: relative; display: flex; flex-direction: column;">
                        <div class="service-img-container" style="position: relative; height: 280px; overflow: hidden; flex-shrink: 0;">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/<?php echo $campaign['image']; ?>"
                                class="img-fluid w-100 h-100"
                                style="object-fit: cover; transition: transform 0.6s cubic-bezier(0.165, 0.84, 0.44, 1);"
                                alt="<?php echo $campaign['name']; ?>">
                            <div class="service-img-overlay"
                                style="position: absolute; top: 0; left: 0; right: 0; bottom: 0; background: linear-gradient(to bottom, rgba(236, 31, 39, 0.2), rgba(236, 31, 39, 0.8)); opacity: 0; transition: opacity 0.4s ease;">
                                <div class="d-flex align-items-center justify-content-center h-100">
                                    <h4 class="mb-0 text-white" style="font-size: 1.5rem; font-weight: 600; text-shadow: 2px 2px 4px rgba(0,0,0,0.3);"><?php echo $campaign['name']; ?></h4>
                                </div>
                            </div>
                        </div>
                        <div class="p-4" style="position: relative; z-index: 1; flex-grow: 1; display: flex; flex-direction: column;">
                            <h2 style="color: #ec1f27; font-size: 1.4rem; font-weight: 700; margin-bottom: 1rem; text-transform: uppercase; letter-spacing: 0.5px;"><?php echo $campaign['name']; ?></h2>
                            <p class="mb-4" style="text-align: justify; color: #666; line-height: 1.6; font-size: 1rem; flex-grow: 1;"><?php echo $campaign['content']; ?></p>
                        </div>
                        <div class="d-flex align-items-center justify-content-start p-4 pt-0" style="flex-shrink: 0;">
                            <a class="btn-hover-bg btn btn-primary text-white py-2 px-4"
                                style="background-color: #ec1f27; border-radius: 30px; transition: all 0.4s cubic-bezier(0.165, 0.84, 0.44, 1); box-shadow: 0 4px 15px rgba(236, 31, 39, 0.3); font-weight: 600; letter-spacing: 0.5px; text-transform: uppercase; font-size: 0.9rem;"
                                href="<?php echo home_url('mission'); ?>">Know More</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
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

<style>
.service-item {
    min-height: 550px; /* Reduced minimum height */
}

.service-item:hover {
    transform: translateY(-10px);
    box-shadow: 0 15px 40px rgba(236, 31, 39, 0.15);
}

.service-item:hover .service-img-container img {
    transform: scale(1.1);
}

.service-item:hover .service-img-overlay {
    opacity: 1;
}

.btn-hover-bg:hover {
    background-color: #fff !important;
    color: #ec1f27 !important;
    box-shadow: 0 8px 25px rgba(236, 31, 39, 0.4) !important;
    transform: translateY(-2px);
}

.btn-hover-bg:active {
    transform: translateY(0);
}
</style>

<?php get_footer(); ?>