<?php
/**
 * Template Name: PayU Failure Template
 * Template Post Type: post, page
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

get_header();
?>

<body>
    <!-- <h1>Payment Failed</h1> -->
    <?php
    $txnid = $_POST["txnid"];
    $status = $_POST["status"];
    $error_message = $_POST["error_Message"];
    ?>

    <p>Transaction ID: <?php echo htmlspecialchars($txnid); ?></p>
    <p>Status: <?php echo htmlspecialchars($status); ?></p>
    <p>Error: <?php echo htmlspecialchars($error_message); ?></p>
    <p>Please try again or contact support.</p>
</body>



<?php get_template_part( 'template-parts/footer-menus-widgets' ); ?>

<?php
get_footer();