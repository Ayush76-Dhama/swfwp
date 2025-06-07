<?php
/**
 * Template Name: PayU Success Template
 * Template Post Type: post, page
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

get_header();
?>

<body>
    <h1>Payment Successful</h1>
    <?php
    $posted_hash = $_POST["hash"];
    $txnid = $_POST["txnid"];
    $status = $_POST["status"];
    $amount = $_POST["amount"];

    $key = "XzphKe"; // Same as in the payment form
    $salt = "9HjEYkE23tcPm1sXHYaizuZsKZ5rkLhn"; // Same as in the payment form

    // Recreate the hash to verify authenticity
    $hash_string = $salt . '|' . $status . '|' . $_POST["unmappedstatus"] . '|' . $_POST["amount"] . '|' . $_POST["transaction_date"] . '|' . $_POST["txnid"] . '|' . $_POST["firstname"] . '|' . $_POST["email"] . '|' . $_POST["productinfo"] . '|' . $_POST["phone"] . '|' . $_POST["udf1"] . '|' . $_POST["udf2"] . '|' . $_POST["udf3"] . '|' . $_POST["udf4"] . '|' . $_POST["udf5"] . '|' . $key;

    $hash = strtolower(hash('sha512', $hash_string));

    if ($hash === $posted_hash) {
        echo "<p>Transaction ID: " . htmlspecialchars($txnid) . "</p>";
        echo "<p>Amount Paid: ₹" . htmlspecialchars($amount) . "</p>";
        echo "<p>Status: " . htmlspecialchars($status) . "</p>";
    } else {
        echo "<p>Invalid Transaction. Please contact support.</p>";
    }
?>
</body>

<?php get_template_part( 'template-parts/footer-menus-widgets' ); ?>

<?php
get_footer();