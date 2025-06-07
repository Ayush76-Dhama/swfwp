<?php
/**
 * Template Name: Thank You Page
 * Template Post Type: page
 */

get_header();

// Get the type of submission from URL parameter
$type = isset($_GET['type']) ? sanitize_text_field($_GET['type']) : 'donation';
?>

<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-8 text-center">
            <div class="thank-you-container">
                <i class="fas fa-check-circle text-success" style="font-size: 64px;"></i>
                <h1 class="mt-4">Thank You!</h1>
                
                <?php if ($type === 'donation'): ?>
                    <p class="lead">Thank you for your generous donation.</p>
                    <p>We have received your donation request and will process it shortly.</p>
                    <p>You will receive a confirmation email with further details.</p>
                <?php else: ?>
                    <p class="lead">Thank you for your interest in joining us.</p>
                    <p>We have received your message and will get back to you as soon as possible.</p>
                    <p>A confirmation email has been sent to your email address.</p>
                <?php endif; ?>
                
                <div class="mt-4">
                    <a href="<?php echo esc_url(home_url('/')); ?>" class="btn btn-primary">Return to Home</a>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
.thank-you-container {
    background: #fff;
    padding: 40px;
    border-radius: 10px;
    box-shadow: 0 0 20px rgba(0,0,0,0.1);
    margin: 50px 0;
}

.thank-you-container h1 {
    color: #2c3e50;
    margin-bottom: 20px;
}

.thank-you-container .lead {
    color: #34495e;
    font-size: 1.25rem;
    margin-bottom: 15px;
}

.thank-you-container p {
    color: #7f8c8d;
    margin-bottom: 10px;
}

.btn-primary {
    background-color: #e74c3c;
    border-color: #e74c3c;
    padding: 10px 25px;
    font-size: 1.1rem;
}

.btn-primary:hover {
    background-color: #c0392b;
    border-color: #c0392b;
}
</style>

<?php get_footer(); ?> 