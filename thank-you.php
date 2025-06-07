<?php
/**
 * Template Name: Thank You Page
 */

get_header();
?>

<div class="container-fluid bg-breadcrumb">
    <div class="container text-center py-5" style="max-width: 900px;">
        <h3 class="text-white display-3 mb-4">Thank You!</h3>
        <?php
        $type = isset($_GET['type']) ? sanitize_text_field($_GET['type']) : '';
        
        if ($type === 'join') {
            echo '<p class="fs-5 text-white mb-4">Thank you for your interest in joining SheWings. We will contact you soon!</p>';
        } elseif ($type === 'donation') {
            echo '<p class="fs-5 text-white mb-4">Thank you for your generous donation to SheWings. We will process your donation shortly!</p>';
        } else {
            echo '<p class="fs-5 text-white mb-4">Thank you for contacting SheWings. We will get back to you soon!</p>';
        }
        ?>
        <div class="mt-4">
            <a href="<?php echo home_url(); ?>" class="btn btn-primary btn-lg">Return to Home</a>
        </div>
    </div>
</div>

<?php
get_footer();
?> 