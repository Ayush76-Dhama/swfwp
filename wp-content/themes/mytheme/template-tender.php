<?php
/**
 * Template Name: Tendor Template
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
                                style="color: red;">About Us</a>
                            <div class="dropdown-menu">
                                <a href="<?php echo home_url('mission'); ?>" class="dropdown-item"
                                    style="color: red;">Vision & Mission</a>
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
                        <a href="<?php echo home_url ('tenders') ; ?>" class="nav-item nav-link active"
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
                        <a href="<?php echo home_url ('donation') ; ?>" class="nav-item nav-link"
                            style="color: red;">Donate Us</a>
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
    <div class="bg-breadcrumb2">
        <div class="container text-center py-5" style="max-width: 900px;">
            <!-- <h2 class="text-white display-3 mb-4">Tender</h2>
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item active text-white">Tender</li>
                </ol> -->
        </div>
    </div>
    <!-- Header End -->

    <style>
    /* table  */
    table {
        width: 80%;
        border-collapse: collapse;
        margin: 0 auto 20px auto;
        /* Center the table with auto margins */
        display: table;
    }

    th,
    td {
        border: 1px solid black;
        padding: 10px;
        text-align: left;
    }

    th {
        background-color: red;
        color: white;
    }

    .header {
        text-align: center;
        font-weight: bold;
        font-size: 18px;
        padding: 20px;
        background-color: lightgray;
        margin: 0 auto 20px auto;
        /* Center the header */
        width: 80%;
    }

    .button {
        display: inline-block;
        border: none;
        border-radius: 5px;
        background-color: green;
        padding: 10px 20px;
        margin: 10px 0;
        cursor: pointer;
        text-decoration: none;
        color: white;
    }

    .container4 {
        max-width: 1200px;
        margin: 40px auto;
        padding: 0 15px;
        text-align: center;
        /* Center all content inside container4 */
    }

    .tender-section {
        margin-bottom: 30px;
    }

    h3 {
        width: 80%;
        margin: 20px auto;
        text-align: left;
    }

    .heaven {
        backgroundColor
    }
    </style>

    <div class="container4">
        <div class="tender-section">
            <div class="header">Bids Are Invited For RO Water Treatment System 250 LPH Filtration Capacity</div>

            <table>
                <tr>
                    <th class="heaven">S.No.</th>
                    <th>Description</th>
                </tr>
                <tr>
                    <td>1</td>
                    <td>RO-250 LPH (RO+UV+UF+TDS Controller)</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Supply, Installation & Commissioning, Testing, Training and after Sale Maintenance services on
                        site
                        till one year</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>1 Yr Warranty for manufacturing defect including repair & maintenance or replacement of any
                        electrical parts & all Pumps with all consumables (As per schedule of contract sign with
                        Company)
                    </td>
                </tr>
                <tr>
                    <td>4</td>
                    <td><strong>Technical specification of Industrial RO Water Purifier</strong></td>
                </tr>
            </table>

            <table>
                <tr>
                    <th>Parameters</th>
                    <th>Details</th>
                </tr>
                <tr>
                    <td>Application</td>
                    <td>Suitable for Purification of Brackish water, Tap water/Municipal Water Etc.</td>
                </tr>
                <tr>
                    <td>Purification Technology</td>
                    <td>Online RO+UV+UF+TDS Controller</td>
                </tr>
                <tr>
                    <td>Body Material</td>
                    <td>SS stainless Steel Skid (Heavy)</td>
                </tr>
                <tr>
                    <td>Purification Production Rate</td>
                    <td>Up to 250 LPH @ Input TDS 2500 PPM</td>
                </tr>
                <tr>
                    <td>Filter Cartridge Type</td>
                    <td>Dual media Filter-Five stage, Jumbo Filter 20", RO+UV+UF+TDS Controller with sterilization
                        Filtration system.</td>
                </tr>
                <tr>
                    <td>Membrane Type</td>
                    <td>4040 Brackish Water (High Recovery)</td>
                </tr>
                <tr>
                    <td>Inlet Water Pressure/Temp (Min)</td>
                    <td>0.5 Kg/cm2 (7.1 PSI /10¡ÆC)</td>
                </tr>
                <tr>
                    <td>Inlet Water Pressure/Temp (Max)</td>
                    <td>3.5 Kg/cm2 (49.5 PSI /35¡ÆC)</td>
                </tr>
                <tr>
                    <td>UV Lamp Power Consumption</td>
                    <td>12-16 Watt for sanitization work</td>
                </tr>
                <tr>
                    <td>Storage Tank Capacity</td>
                    <td>Food Grade SS-304 Tank 200 Ltr. With Two Outlets taps</td>
                </tr>
            </table>

            <h3>Tender Calendar Dates</h3>
            <table>
                <tr class="highlight">
                    <th>Event</th>
                    <th>Date and Time</th>
                </tr>
                <tr>
                    <td>Bid Submission Start Date</td>
                    <td>25-02-2025 1:00 pm</td>
                </tr>
                <tr>
                    <td>Bid Closing Date</td>
                    <td>06-03-2025 2:30 pm </td>
                </tr>
                <tr>
                    <td>Bid Opening & Evaluation</td>
                    <td>25-02-2025 1:00 pm</td>
                </tr>
                <!--<tr>-->
                <!--    <td> Visit For Registration</td>-->
                <!--    <td>BS-161, Sector 70, Noida-201301</td>-->
                <!--</tr>-->
                <tr>
                    <td>Contact For Registration</td>
                    <td>8800633291</td>
                </tr>
                <tr>
                    <td>Bank Account Name</td>
                    <td>SHEWings Foundation</td>
                </tr>
                <tr>
                    <td>Bank A/C Number</td>
                    <td>628405018293</td>
                </tr>
                <tr>
                    <td>Bank Name</td>
                    <td> ICICI Bank</td>
                </tr>
                <tr>
                    <td>IFSC Code</td>
                    <td> ICIC0006284</td>
                </tr>
            </table>

            <div class="text-center">
                <!--<a href="#" class="button" style="margin-right: 10px;">Click for More Details</a>-->
                <a href="<?php echo esc_url(get_template_directory_uri()); ?>/documents/tender-document.pdf"
                    class="button" download>RO Installation Tender Document</a>
            </div>
        </div>
    </div>

    <?php get_template_part( 'template-parts/footer-menus-widgets' ); ?> <?php
get_footer();