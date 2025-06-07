<?php
/**
 * Template Name: Thank You Template
 * Template Post Type: post, page
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

get_header();
?>

<div class="container-fluid py-5">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center">
                <div class="bg-light p-5 rounded shadow-sm">
                    <i class="fas fa-check-circle text-success mb-4" style="font-size: 4rem;"></i>
                    <h1 class="mb-4 text-primary">Thank You!</h1>
                    <p class="mb-4 fs-5">Your message has been sent successfully. We'll get back to you as soon as possible.</p>
                    <p class="mb-4 text-muted">A confirmation email has been sent to your email address.</p>
                    <div class="d-flex justify-content-center gap-3">
                        <a href="<?php echo home_url('home'); ?>" class="btn btn-primary py-3 px-5">Back to Home</a>
                        <!-- <a href="<?php echo home_url('contact-us'); ?>" class="btn btn-outline-primary py-3 px-5">Send Another Message</a> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
get_footer();
