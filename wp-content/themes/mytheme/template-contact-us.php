<?php
/**
 * Template Name: Contact Us Template
 * Template Post Type: post, page
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

get_header();
?>

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
                    <a href="<?php echo home_url ('contact-us') ; ?>" class="nav-item nav-link active"
                        style="color: red;">Contact Us</a>
                    <a href="<?php echo home_url ('donation') ; ?>" class="nav-item nav-link" style="color: red;">Donate
                        Us</a>
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
<div class="container-fluid bg-breadcrumb7">
    <div class="container text-center py-5" style="max-width: 900px;">
        <!--<h3 class="text-white display-3 mb-4">Contact Us</h1>-->
        <!-- <p class="fs-5 text-white mb-4">Help today because tomorrow you may be the one who needs more helping!</p> -->
        <!--<ol class="breadcrumb justify-content-center mb-0">-->
        <!--    <li class="breadcrumb-item"><a href="index.html">Home</a></li>-->
        <!--    <li class="breadcrumb-item"><a href="#">Pages</a></li>-->
        <!--    <li class="breadcrumb-item active text-white">Contact</li>-->
        <!--</ol>-->
    </div>
</div>
<br>
<!-- Header End -->

<!-- Contact Start -->
<div class="container-fluid bg-light py-5">
    <div class="container py-5">
        <div class="row justify-content-center mb-5">
            <div class="col-md-8">
                <div class="row g-5 justify-content-center">
                    <div class="col-md-4">
                        <div
                            class="bg-white p-4 border-0 text-center w-100 h-100 shadow-sm rounded-3 hover-shadow transition">
                            <i class="bi bi-envelope-fill text-primary fs-1 mb-3"></i>
                            <h4 class="mb-3">Mail Us</h4>
                            <p class="mb-0"><a href="mailto:info@shewings.com"
                                    class="text-decoration-none text-dark hover-primary">info@shewings.com</a></p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div
                            class="bg-white p-4 border-0 text-center w-100 h-100 shadow-sm rounded-3 hover-shadow transition">
                            <i class="bi bi-telephone-fill text-primary fs-1 mb-3"></i>
                            <h4 class="mb-3">Call Us</h4>
                            <p class="mb-0"><a href="tel:8800633291"
                                    class="text-decoration-none text-dark hover-primary">+91 8800633291</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row g-0">
            <div class="col-12 px-3">
                <div class="row mb-0 g-0">
                    <div class="col-xl-5 p-0">
                        <h1 class="mb-0 fw-bold" style="color:#ec1f27">Get in touch</h1>
                    </div>
                    <div class="col-xl-7 p-0">
                        <h2 class="mb-0 fw-bold" style="color:#ec1f27">Send us a Message</h2>
                    </div>
                </div>
            </div>
            <div class="col-xl-5 pt-0">
                <div class="bg-white p-5 rounded-3 shadow-sm">
                    <p class="mb-4 fs-5 mt-0" style="text-align: justify; color: #666;">We're here to assist you with
                        any
                        inquiries and welcome your interest in our mission
                        and work. Whether it's about collaborating, volunteering, or learning more
                        about our programs,
                        we're just a call or message away.
                    </p>
                    <div class="col-lg-12 mb-4">
                        <img class="w-100 rounded-3 shadow-sm" style="height: 350px; object-fit: cover;"
                            src="<?php echo esc_url(get_template_directory_uri()); ?>/img/campaign/nari.jpg"
                            alt="Contact">
                    </div>
                </div>
            </div>
            <div class="col-xl-7 pt-0">
                <div class="bg-white p-5 rounded-3 shadow-sm">
                    <form action="<?php echo get_template_directory_uri(); ?>/process-contact.php" method="POST"
                        id="contact-form" class="modern-form">
                        <?php wp_nonce_field('contact_form_nonce', 'contact_nonce'); ?>
                        <input type="hidden" name="action" value="handle_contact_form">
                        <div class="row g-4">
                            <div class="col-xl-6">
                                <div class="form-floating form-group">
                                    <input type="text" name="first_name"
                                        class="form-control bg-light border-0 py-3 px-4" placeholder="Your First Name"
                                        required>
                                    <label><i class="bi bi-person me-2"></i>Your First Name</label>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="form-floating form-group">
                                    <input type="email" name="email" class="form-control bg-light border-0 py-3 px-4"
                                        placeholder="Your Email" required>
                                    <label><i class="bi bi-envelope me-2"></i>Your Email</label>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="form-floating form-group">
                                    <input type="text" name="phone" class="form-control bg-light border-0 py-3 px-4"
                                        placeholder="Your Phone" required>
                                    <label><i class="bi bi-telephone me-2"></i>Your Phone</label>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="form-floating form-group">
                                    <input type="text" name="subject" class="form-control bg-light border-0 py-3 px-4"
                                        placeholder="Subject" required>
                                    <label><i class="bi bi-chat-dots me-2"></i>Subject</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating form-group">
                                    <textarea name="message" class="form-control bg-light border-0 py-3 px-4"
                                        style="height: 150px" placeholder="Your Message" required></textarea>
                                    <label><i class="bi bi-pencil-square me-2"></i>Your Message</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div id="form-message" class="alert d-none"></div>
                            </div>
                            <div class="col-12">
                                <button type="submit"
                                    class="btn btn-primary w-100 py-3 px-5 rounded-pill fw-bold hover-shadow transition">
                                    <span class="btn-text">Send Message</span>
                                    <i class="bi bi-send-fill ms-2"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- FAQ Start -->
<div class="container-fluid py-5">
    <div class="container py-5">
        <div class="text-center mb-5">
            <h1 class="mb-4" style="color:#ec1f27">Frequently Asked Questions</h1>
            <p class="mb-4">Find answers to commonly asked questions about SheWings Foundation</p>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="accordion" id="faqAccordion">
                    <!-- FAQ Item 1 -->
                    <div class="accordion-item mb-3">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#faq1">
                                How can I volunteer with SheWings Foundation?
                            </button>
                        </h2>
                        <div id="faq1" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                You can volunteer with us by filling out the contact form above or reaching out to us
                                directly through email or phone. We'll get back to you with available opportunities and
                                next steps.
                            </div>
                        </div>
                    </div>

                    <!-- FAQ Item 2 -->
                    <div class="accordion-item mb-3">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#faq2">
                                How can I donate to SheWings Foundation?
                            </button>
                        </h2>
                        <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                You can donate through our website's donation page. We accept various payment methods
                                and all donations are tax-exempt. Visit our 'Donate Us' page for more information.
                            </div>
                        </div>
                    </div>

                    <!-- FAQ Item 3 -->
                    <div class="accordion-item mb-3">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#faq3">
                                What areas does SheWings Foundation work in?
                            </button>
                        </h2>
                        <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                SheWings Foundation works across various areas including women empowerment, education,
                                healthcare, and community development. Visit our 'About Us' page to learn more about our
                                initiatives.
                            </div>
                        </div>
                    </div>

                    <!-- FAQ Item 4 -->
                    <div class="accordion-item mb-3">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#faq4">
                                How can I partner with SheWings Foundation?
                            </button>
                        </h2>
                        <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                We welcome partnerships with organizations, corporates, and individuals. Please contact
                                us through the form above or email us at info@shewings.com to discuss potential
                                collaboration opportunities.
                            </div>
                        </div>
                    </div>

                    <!-- FAQ Item 5 -->
                    <div class="accordion-item mb-3">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#faq5">
                                How can I stay updated with SheWings Foundation's work?
                            </button>
                        </h2>
                        <div id="faq5" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                You can follow us on our social media platforms (Facebook, Twitter, Instagram, LinkedIn)
                                or subscribe to our newsletter through our website to stay updated with our latest
                                initiatives and events.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- FAQ End -->

<?php
get_footer();
?>

<script>
jQuery(document).ready(function($) {
    $('#contact-form').on('submit', function(e) {
        e.preventDefault();

        var form = $(this);
        var messageDiv = $('#form-message');
        var submitButton = form.find('button[type="submit"]');

        // Clear previous messages
        messageDiv.removeClass('alert-success alert-danger alert-warning')
            .addClass('d-none');

        // Disable submit button
        submitButton.prop('disabled', true).html(
            '<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Sending...'
        );

        $.ajax({
            url: form.attr('action'),
            type: 'POST',
            data: form.serialize(),
            dataType: 'json',
            success: function(response) {
                if (response.success) {
                    messageDiv.removeClass(
                        'd-none alert-danger alert-warning'
                    ).addClass(
                        'alert-success'
                    );
                    messageDiv.html(response.data
                        .message);
                    form[0].reset();

                    // Redirect after success
                    if (response.data.redirect) {
                        setTimeout(function() {
                            window.location
                                .href =
                                response
                                .data
                                .redirect;
                        }, 2000);
                    }
                } else {
                    messageDiv.removeClass(
                        'd-none alert-success alert-warning'
                    ).addClass(
                        'alert-danger');

                    // Handle validation errors
                    if (response.data.errors) {
                        var errorList =
                            '<ul>';
                        response.data.errors
                            .forEach(
                                function(
                                    error
                                ) {
                                    errorList
                                        +=
                                        '<li>' +
                                        error +
                                        '</li>';
                                });
                        errorList += '</ul>';
                        messageDiv.html(
                            errorList
                        );
                    } else {
                        messageDiv.html(
                            response
                            .data
                            .message
                        );
                    }
                }
            },
            error: function(xhr, status, error) {
                messageDiv.removeClass(
                    'd-none alert-success alert-warning'
                ).addClass(
                    'alert-danger');
                messageDiv.html(
                    'Sorry, there was an error sending your message. Please try again.'
                );
                console.error('Form submission error:',
                    error);
            },
            complete: function() {
                submitButton.prop('disabled', false)
                    .html('Submit');
            }
        });
    });
});
</script>

<style>
.hover-shadow {
    transition: all 0.3s ease;
}

.hover-shadow:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1) !important;
}

.hover-primary:hover {
    color: #ec1f27 !important;
}

.transition {
    transition: all 0.3s ease;
}

.form-floating>.form-control:focus~label,
.form-floating>.form-control:not(:placeholder-shown)~label {
    color: #ec1f27;
}

.form-control:focus {
    border-color: #ec1f27;
    box-shadow: 0 0 0 0.25rem rgba(236, 31, 39, 0.25);
}

.btn-primary {
    background-color: #ec1f27;
    border-color: #ec1f27;
    transition: all 0.3s ease;
}

.btn-primary:hover {
    background-color: #d41b23;
    border-color: #d41b23;
    transform: translateY(-2px);
}

.text-primary {
    color: #ec1f27 !important;
}

/* Modern Form Styles */
.modern-form .form-group {
    position: relative;
    margin-bottom: 1rem;
    transition: all 0.3s ease;
}

.modern-form .form-control {
    border-radius: 12px;
    transition: all 0.3s ease;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.05);
}

.modern-form .form-control:focus {
    transform: translateY(-2px);
    box-shadow: 0 5px 15px rgba(236, 31, 39, 0.1);
}

.modern-form .form-floating>label {
    padding-left: 1rem;
    color: #666;
    transition: all 0.3s ease;
}

.modern-form .form-floating>.form-control:focus~label,
.modern-form .form-floating>.form-control:not(:placeholder-shown)~label {
    color: #ec1f27;
    transform: scale(0.85) translateY(-0.5rem) translateX(0.15rem);
}

.modern-form .btn-primary {
    position: relative;
    overflow: hidden;
    background: linear-gradient(45deg, #3c4142, #3c4142);
    border: none;
    box-shadow: 0 4px 15px rgba(236, 31, 39, 0.2);
}

.modern-form .btn-primary:hover {
    transform: translateY(-2px);
    box-shadow: 0 6px 20px rgba(#fff);
}

.modern-form .btn-primary:active {
    transform: translateY(0);
}

.modern-form .btn-primary .btn-text {
    position: relative;
    z-index: 1;
}

.modern-form .btn-primary::before {
    content: '';
    position: absolute;
    top: 0;
    left: -100%;
    width: 100%;
    height: 100%;
    background: linear-gradient(45deg, #ff4d4d, #ec1f27);
    transition: all 0.4s ease;
}

.modern-form .btn-primary:hover::before {
    left: 0;
}

.modern-form .alert {
    border-radius: 12px;
    border: none;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
}

.modern-form .alert-success {
    background-color: #d4edda;
    color: #155724;
}

.modern-form .alert-danger {
    background-color: #f8d7da;
    color: #721c24;
}

/* Animation for form elements */
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

.modern-form .form-group {
    animation: fadeInUp 0.5s ease forwards;
    opacity: 0;
}

.modern-form .form-group:nth-child(1) {
    animation-delay: 0.1s;
}

.modern-form .form-group:nth-child(2) {
    animation-delay: 0.2s;
}

.modern-form .form-group:nth-child(3) {
    animation-delay: 0.3s;
}

.modern-form .form-group:nth-child(4) {
    animation-delay: 0.4s;
}

.modern-form .form-group:nth-child(5) {
    animation-delay: 0.5s;
}

/* Adjusting gap between headings */
.contact-form-section .row.justify-content-center .col-auto {
    padding-left: 0.75rem;
    padding-right: 0.75rem;
}
</style>
</body>

</html>