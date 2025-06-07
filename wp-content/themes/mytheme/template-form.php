<?php
/**
 * Template Name: Form Template
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
                            style="color: white;">About Us</a>
                        <a href="<?php echo home_url ('impact') ; ?>" class="nav-item nav-link"
                            style="color: white;">Impact</a>
                        <!--<a href="<?php echo home_url ('vission-2') ; ?>" class="nav-item nav-link"-->
                        <!--    style="color: white;">Vission</a>-->
                        <a href="<?php echo home_url ('mission') ; ?>" class="nav-item nav-link"
                            style="color: white;">Vision & Mission</a>
                             <a href="<?php echo home_url ('events') ; ?>" class="nav-item nav-link"
                        style="color: white;">Prize</a>
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
                     <div class="d-flex align-items-center flex-nowrap pt-xl-0" style="margin-left: 15px;">
					<a href="" class="btn-hover-bg btn btn-primary text-white py-2 px-4 me-3">Donate Now</a>
				</div> 
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->
    <div class="container-fluid bg-breadcrumb">
        <div class="container text-center py-5" style="max-width: 900px;">
            <h3 class="text-white display-3 mb-4">Join US and Become Changemaker</h3>
            <p class="fs-5 text-white mb-4">Enter your details below, somone from our team will contact you</p>
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Pages</a></li>
                <li class="breadcrumb-item active text-white">Join</li>
            </ol>
        </div>
    </div><br>

    <style>
    form {
        display: flex;
        flex-direction: column;
        max-width: 400px;
        margin: auto;
        padding: 20px;
        background: #fff;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0,0,0,0.1);
    }

    form label,
    form input,
    form textarea,
    form button {
        margin-bottom: 15px;
        border-radius: 5px;
    }

    form input,
    form textarea {
        padding: 10px;
        border: 1px solid #ddd;
        width: 100%;
    }

    form button {
        background-color: #0073aa;
        color: white;
        border: none;
        padding: 12px;
        cursor: pointer;
        font-weight: bold;
        transition: background-color 0.3s ease;
    }

    form button:hover {
        background-color: #005177;
    }

    .alert {
        padding: 15px;
        margin-bottom: 20px;
        border-radius: 5px;
        font-weight: 500;
    }

    .alert-success {
        background-color: #d4edda;
        color: #155724;
        border: 1px solid #c3e6cb;
    }

    .alert-danger {
        background-color: #f8d7da;
        color: #721c24;
        border: 1px solid #f5c6cb;
    }
    </style>

    <form action="<?php echo esc_url(get_template_directory_uri()); ?>/process-join.php" method="POST" id="join-us-form">
        <?php wp_nonce_field('join_us_form_nonce', 'join_us_nonce'); ?>
        
        <?php
        // Display status messages
        if (isset($_GET['status'])) {
            if ($_GET['status'] === 'success') {
                echo '<div class="alert alert-success">Thank you for your interest! We will contact you soon.</div>';
            } elseif ($_GET['status'] === 'error') {
                $message = isset($_GET['message']) ? sanitize_text_field($_GET['message']) : 'An error occurred';
                echo '<div class="alert alert-danger">';
                switch ($message) {
                    case 'missing_fields':
                        echo 'Please fill in all required fields.';
                        break;
                    case 'invalid_email':
                        echo 'Please enter a valid email address.';
                        break;
                    case 'mail_failed':
                        echo 'There was an error sending your submission. Please try again.';
                        break;
                    case 'db_error':
                        echo 'There was an error saving your submission. Please try again.';
                        break;
                    case 'invalid_nonce':
                        echo 'Security check failed. Please try again.';
                        break;
                    default:
                        echo 'An error occurred. Please try again.';
                }
                echo '</div>';
            }
        }
        ?>

        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" id="name" class="form-control" placeholder="Your Name" name="name" required>
        </div>

        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" id="email" class="form-control" placeholder="example@gmail.com" name="email" required>
        </div>

        <div class="form-group">
            <label for="message">Message:</label>
            <textarea id="message" class="form-control" name="message" rows="4" placeholder="Your message here..." required></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Join Us</button>
    </form>

    <script>
    jQuery(document).ready(function($) {
        $('#join-us-form').on('submit', function(e) {
            var $form = $(this);
            var $submitButton = $form.find('button[type="submit"]');
            
            // Disable submit button to prevent double submission
            $submitButton.prop('disabled', true);
            
            // Basic form validation
            var name = $('#name').val().trim();
            var email = $('#email').val().trim();
            var message = $('#message').val().trim();
            
            if (!name || !email || !message) {
                alert('Please fill in all required fields.');
                $submitButton.prop('disabled', false);
                return false;
            }
            
            if (!isValidEmail(email)) {
                alert('Please enter a valid email address.');
                $submitButton.prop('disabled', false);
                return false;
            }
            
            return true;
        });
        
        function isValidEmail(email) {
            var regex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;
            return regex.test(email);
        }
    });
    </script>



    <?php
get_footer();