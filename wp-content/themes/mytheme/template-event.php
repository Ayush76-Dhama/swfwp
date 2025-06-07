// <?php
// /**
//  * Template Name: Event Template
//  * Template Post Type: post, page
//  *
//  * @package WordPress
//  * @subpackage Twenty_Twenty
//  * @since Twenty Twenty 1.0
//  */

// get_header();
// ?>

// <body>

//     <!-- Spinner Start -->
//     <div id="spinner"
//         class="show w-100 vh-100 bg-white position-fixed translate-middle top-50 start-50  d-flex align-items-center justify-content-center">
//         <div class="spinner-grow text-primary" role="status"></div>
//     </div>
//     <!-- Spinner End -->


//     <!-- Navbar start -->
//   <div class="container-fluid  px-0">
//         <div class="container px-0">
//             <div class="topbar">
//                 <div class="row align-items-center justify-content-center">
//                     <div class="col-md-8">
//                         <div class="topbar-info d-flex flex-wrap">
//                             <a href="mailto:" info@shewings.com" class="text-light me-4"><i
//                                     class="fas fa-envelope text-white me-2"></i>info@shewings.com</a>
//                             <a href="tel:8800633291" class="text-light"><i
//                                     class="fas fa-phone-alt text-white me-2"></i>8800633291</a>
//                         </div>
//                     </div>
//                     <div class="col-md-4">
//                         <div class="topbar-icon d-flex align-items-center justify-content-end">
//                             <a href="#" class="btn-square text-white me-2"><i class="fab fa-facebook-f"></i></a>
//                             <a href="#" class="btn-square text-white me-2"><i class="fab fa-twitter"></i></a>
//                             <a href="#" class="btn-square text-white me-2"><i class="fab fa-instagram"></i></a>
//                             <a href="#" class="btn-square text-white me-2"><i class="fab fa-pinterest"></i></a>
//                             <a href="#" class="btn-square text-white me-0"><i class="fab fa-linkedin-in"></i></a>
//                         </div>
//                     </div>
//                 </div>
//             </div>
//             <nav class="navbar navbar-light bg-light navbar-expand-xl">
//                 <a href="index.html" class="navbar-brand ms-3">
//                     <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/logo/lo1.png"
//                         alt="Shewings Logo" style="max-height: 60px; width: auto;">
//                 </a>
//                 <button class="navbar-toggler py-2 px-3 me-3" type="button" data-bs-toggle="collapse"
//                     data-bs-target="#navbarCollapse">
//                     <span class="fa fa-bars text-primary" style="background-color:red;"></span>
//                 </button>
//                 <div class="collapse navbar-collapse bg-light text-danger" id="navbarCollapse">
//                     <div class="navbar-nav ms-auto">
//                         <a href="<?php echo home_url () ; ?>" class="nav-item nav-link" style="color: red;">Home</a>
//                         <a href="<?php echo home_url ('about-us') ; ?>" class="nav-item nav-link"
//                             style="color: red;">About</a>
//                         <a href="<?php echo home_url ('impact') ; ?>" class="nav-item nav-link"
//                             style="color: red;">Impact</a>
//                         <!--<a href="<?php echo home_url ('vission-2') ; ?>" class="nav-item nav-link"-->
//                         <!--    style="color: white;">Vision</a>-->
//                         <a href="<?php echo home_url ('mission') ; ?>" class="nav-item nav-link"
//                             style="color: red;">Vision & Mission</a>
//                              <a href="<?php echo home_url ('events') ; ?>" class="nav-item nav-link active"
//                         style="color: red;">Prize</a>
//                         <a href="<?php echo home_url ('tenders') ; ?>" class="nav-item nav-link"
//                             style="color: red;">Tenders</a>
//                         <a href="<?php echo home_url ('our-supporters') ; ?>" class="nav-item nav-link"
//                             style="color: red;">Our Supporters</a>
//                         <!-- <div class="nav-item dropdown">
//                             <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
//                             <div class="dropdown-menu m-0 bg-secondary rounded-0">
//                                 <a href="blog.html" class="dropdown-item">Blog</a>
//                                 <a href="gallery.html" class="dropdown-item">Gallery</a>
//                                 <a href="volunteer.html" class="dropdown-item">Volunteers</a>
//                                 <a href="donation.html" class="dropdown-item">Donation</a>
//                                 <a href="404.html" class="dropdown-item">404 Error</a>
//                             </div>
//                         </div> -->
//                         <a href="<?php echo home_url ('contact-us') ; ?>" class="nav-item nav-link"
//                             style="color: red;">Contact</a>
//                     </div>
//                     <div class="d-flex align-items-center flex-nowrap pt-xl-0" style="margin-left: 15px;">
//                             <a href="<?php echo home_url('donation'); ?>" class="btn btn-primary text-white py-2 px-4"
//                                 style="transition: all 0.3s ease; background-color: #f8b864;"
//                                 onmouseover="this.style.backgroundColor='#e5a64d'"
//                                 onmouseout="this.style.backgroundColor='#f8b864'">
//                                 Donate Now
//                             </a>
//                         </div>
//                 </div>
//             </nav>
//         </div>
//     </div>

//     <!-- Navbar End -->

//     <div class="container-fluid bg-breadcrumb">
//         <div class="container text-center py-5" style="max-width: 900px;">
//             <h3 class="text-white display-3 mb-4">Our Prize</h1>
//                 <p class="fs-5 text-white mb-4">Empowering Change, One Step at a Time
//                 </p>
//                 <ol class="breadcrumb justify-content-center mb-0">
//                     <li class="breadcrumb-item"><a href="index.html">Home</a></li>
//                     <li class="breadcrumb-item"><a href="#">Pages</a></li>
//                     <li class="breadcrumb-item active text-white">Prize </li>
//                 </ol>
//         </div>
//     </div><br>

//     <style>
//     /* body {
//             font-family: Arial, sans-serif;
//             text-align: center;
//             margin: 0;
//             padding: 0;
//             background: #f9f9f9;
//         } */
//     .container2 {
//         max-width: 800px;
//         margin: 50px auto;
//         padding: 20px;
//         background: #fff;
//         border-radius: 10px;
//         box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
//     }

//     h1 {
//         color: #333;
//     }

//     .prize {
//         margin: 20px 0;
//         padding: 15px;
//         border-radius: 8px;
//     }

//     .gold {
//         background: #FFD700;
//     }

//     .silver {
//         background: #C0C0C0;
//     }

//     .bronze {
//         background: #CD7F32;
//     }

//     .cta {
//         /* display: block; */
//         margin-top: 20px;
//         padding: 10px 20px;
//         background: #28a745;
//         color: #fff;
//         text-decoration: none;
//         border-radius: 5px;
//     }

//     .cta:hover {
//         background: #218838;
//     }
//       .ashu {
//         background: green;
//         padding: 13px;
//         border-radius: 10px;
//     }

//     .ashu:hover {
//         background: #33FFFF;
//     }
//     </style>

//     <div class="container2">
//         <h1>🏆 Amateur Photography Contest🏆</h1>
//         <div class="prize gold">
//             <h2>🥇 1st Prize Winner</h2>
//             <p> 1st Prize: INR 1,00,000
//             </p>
//         </div>
//         <div class="prize silver">
//             <h2>🥈 2nd Prize Winner</h2>
//             <p>2nd Prize: INR 50,000
//             </p>
//         </div>
//         <div class="prize bronze">
//             <h2>🥉 3rd Prize Winner</h2>
//             <p>3rd: INR 25,000
//             </p>
//         </div>
//         <p  class="cta" style="background:#A2D2DF;">10 Consolation prize of INR 5K
//         </p>
//         <!--<a href="#" class="cta">Join Our World Wide Contest</a>-->
//     </div>

//     <div class="container2">
//         <h1>🏆 Professional Photography Contest:
//         🏆</h1>
//         <div class="prize gold">
//             <h2>🥇 1st Prize Winner</h2>
//             <p> 1st Prize: INR 5,00,000

//             </p>
//         </div>
//         <div class="prize silver">
//             <h2>🥈 2nd Prize Winner</h2>
//             <p>2nd Prize: INR 3,00,000

//             </p>
//         </div>
//         <div class="prize bronze">
//             <h2>🥉 3rd Prize Winner</h2>
//             <p>3rd Prize: INR 1,00,000

//             </p>
//         </div>
//         <p  class="cta" style="background:#A2D2DF;">10 consolation prizes of INR 20K

//         </p>
//         <!--<a href="#" class="cta">Join Our World Wide Contest</a>-->
//     </div>

//     <div class="container2">
//         <h1>🏆 Documentary Photography Contest🏆</h1>
//         <div class="prize gold">
//             <h2>🥇 1st Prize Winner</h2>
//             <p>1st Prize: INR 5,00,000

//             </p>
//         </div>
//         <div class="prize silver">
//             <h2>🥈 2nd Prize Winner</h2>
//             <p>2nd Prize: INR 3,00,000

//             </p>
//         </div>
//         <div class="prize bronze">
//             <h2>🥉 3rd Prize Winner</h2>
//             <p>3rd Prize: INR 2,00,000

//             </p>
//         </div>
//         <p  class="cta" style="background:#A2D2DF;">5 consolation prizes of INR 20K
//         </p>
//         <!--<a href="#" class="cta">Join Our World Wide Contest</a>-->
//                 <button class="ashu">
//             <a href="https://forms.gle/nCDapLirY5poPkJU6" style="color: white;">Join Our World Wide Contest</a>
//         </button>
//     </div>
//  <div>
 
    


//     <?php get_template_part( 'template-parts/footer-menus-widgets' ); ?>

//     <?php
// get_footer();