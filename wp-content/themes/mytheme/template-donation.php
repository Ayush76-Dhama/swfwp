<?php
/**
 * Template Name: Donation Template
 * Template Post Type: post, page
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

get_header();
?>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">

<!-- Spinner Start -->
<div id="spinner"
    class="show w-100 vh-100 bg-white position-fixed translate-middle top-50 start-50 d-flex align-items-center justify-content-center">
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
                    <a href="<?php echo home_url('home'); ?>" class="nav-item nav-link" style="color: red;">Home</a>
                    <div class="nav-item dropdown">
                        <a href="<?php echo home_url('about-us'); ?>" class="nav-link dropdown-toggle"
                            style="color: red;">About Us</a>
                        <div class="dropdown-menu">
                            <a href="<?php echo home_url('mission'); ?>" class="dropdown-item"
                                style="color: red;">Vision & Mission</a>
                        </div>
                    </div>
                    <a href="<?php echo home_url('our-campaign'); ?>" class="nav-item nav-link" style="color: red;">Our
                        Campaign</a>
                    <a href="<?php echo home_url('impact'); ?>" class="nav-item nav-link" style="color: red;">Impact</a>
                    <a href="<?php echo home_url('our-supporters'); ?>" class="nav-item nav-link"
                        style="color: red;">Our Supporters</a>
                    <a href="<?php echo home_url('tenders'); ?>" class="nav-item nav-link"
                        style="color: red;">Tender</a>
                    <a href="<?php echo home_url('contact-us'); ?>" class="nav-item nav-link"
                        style="color: red;">Contact Us</a>
                    <a href="<?php echo home_url ('donation') ; ?>" class="nav-item nav-link" style="color: red;">Donate
                        Us</a>
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
<!-- Navbar End -->

<div class="container-fluid bg-breadcrumb1">
    <div class="container text-center py-5" style="max-width: 900px;">
        <h3 class="text-white display-3 mb-4">Make a Donation</h3>
        <p class="fs-5 text-white mb-4">Your contribution can make a difference</p>
    </div>
</div>

<style>
.donation-container {
    max-width: 1200px;
    margin: 50px auto;
    display: flex;
    gap: 30px;
    padding: 0 15px;
}

.donation-form {
    flex: 1;
    background-color: white;
    padding: 30px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    border-radius: 8px;
}

.bank-details-container {
    flex: 1;
    background-color: white;
    padding: 30px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    border-radius: 8px;
}

.form-group {
    margin-bottom: 20px;
}

.form-group label {
    display: block;
    font-weight: 600;
    color: #34495e;
    margin-bottom: 8px;
}

.form-control {
    width: 100%;
    padding: 12px;
    border: 1px solid #ddd;
    border-radius: 6px;
    font-size: 16px;
}

.btn-donate {
    background-color: #e74c3c;
    color: white;
    padding: 15px 30px;
    border: none;
    border-radius: 6px;
    cursor: pointer;
    font-size: 16px;
    font-weight: 600;
    width: 100%;
    transition: background-color 0.3s;
}

.btn-donate:hover {
    background-color: #c0392b;
}

.bank-details-toggle {
    cursor: pointer;
    display: flex;
    align-items: center;
    font-size: 20px;
    font-weight: 600;
    color: #2c3e50;
    margin-bottom: 20px;
}

.bank-details-toggle i {
    margin-right: 10px;
    font-size: 24px;
}

.bank-details {
    margin: 12px 0;
    font-size: 16px;
    color: #34495e;
}

.bank-details strong {
    color: #2c3e50;
}

@media (max-width: 768px) {
    .donation-container {
        flex-direction: column;
    }
}
</style>

<div class="donation-container">
    <div class="donation-form">
        <h2 class="text-center mb-4" style="color:#ec1f27">Donation Form</h2>

        <?php
        // Display error message if any
        if (isset($_GET['donation_status']) && $_GET['donation_status'] === 'error') {
            echo '<div class="alert alert-danger" role="alert">';
            echo 'There was an error processing your donation. Please try again.';
            echo '</div>';
        }
        ?>

        <form action="<?php echo esc_url(admin_url('admin-post.php')); ?>" method="POST">
            <?php wp_nonce_field('donation_form_nonce', 'donation_nonce'); ?>
            <input type="hidden" name="action" value="process_donation">

            <div class="form-group">
                <label for="firstname">Full Name</label>
                <input type="text" class="form-control" id="firstname" name="firstname" required>
            </div>

            <div class="form-group">
                <label for="email">Email Address</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>

            <div class="form-group">
                <label for="phone">Phone Number</label>
                <input type="tel" class="form-control" id="phone" name="phone" required>
            </div>

            <div class="form-group">
                <label for="pan">PAN Number</label>
                <input type="text" class="form-control" id="pan" name="pan" required>
            </div>

            <div class="form-group">
                <label for="address">Address</label>
                <textarea class="form-control" id="address" name="address" rows="3" required></textarea>
            </div>

            <div class="form-group">
                <label for="amount">Amount (₹)</label>
                <input type="number" class="form-control" id="amount" name="amount" required min="1">
            </div>

            <button type="submit" class="btn-donate">Proceed to Payment</button>
        </form>
    </div>

    <div class="bank-details-container">
        <div class="bank-details-toggle">
            <i class="bi bi-arrow-down-circle-fill"></i>
            <i class="bi bi-arrow-up-circle-fill" style="display: none;"></i>
            <span style="color:#ec1f27">Bank Transfer Details</span>
        </div>

        <hr style="border-color: #e74c3c;">

        <div class="bank-details">
            <p><strong>Name of Beneficiary:</strong> SHEWings Foundation</p>
            <p><strong>Bank Name:</strong> ICICI Bank</p>
            <p><strong>Account No:</strong> 628405018293</p>
            <p><strong>Account Type:</strong> Corporate account</p>
            <p><strong>IFSC Code:</strong> ICIC0006284</p>
            <p><strong>PAN Card:</strong> AAZCS9819F</p>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const bankDetails = document.querySelector('.bank-details');
    const upArrow = document.querySelector('.bi-arrow-up-circle-fill');
    const downArrow = document.querySelector('.bi-arrow-down-circle-fill');

    bankDetails.style.display = 'none';

    document.querySelector('.bank-details-toggle').addEventListener('click', function() {
        if (bankDetails.style.display === 'none') {
            bankDetails.style.display = 'block';
            upArrow.style.display = 'inline-block';
            downArrow.style.display = 'none';
        } else {
            bankDetails.style.display = 'none';
            upArrow.style.display = 'none';
            downArrow.style.display = 'inline-block';
        }
    });
});
</script>

<?php get_footer();