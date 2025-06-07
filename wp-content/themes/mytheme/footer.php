<?php
/**
 * The template for displaying the footer
 *
 * Contains the opening of the #site-footer div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

?>
<!-- Footer Start -->
<div class="container-fluid footer bg-dark text-body py-5">
       <div class="container py-5">
              <div class="row g-5">
                     <a href="https://api.whatsapp.com/send?phone=+918800633291&amp;text=Hello%20SHEWings%20Foundation,"
                            target="blank">
                            <img src="<?php echo esc_url ( get_template_directory_uri () ); ?>/img/WhatsApp.png"
                                   alt="WhatsApp Icon" class="whatsapp-icon">
                     </a>
                     <div class="col-md-6 col-lg-6 col-xl-3">
                            <div class="footer-item">
                                   <h4 class="mb-4 text-white"><img
                                                 src="<?php echo esc_url ( get_template_directory_uri () ); ?>/img/logo/lo1.png"
                                                 alt="logo" style="height:80px; width:120px;"></h4>
                                   <p class="mb-4" style="text-align:justify;">SHEWings Foundation works across
                                          Education, Environment, Healthcare,
                                          and Culture — empowering communities, promoting well-being, and preserving
                                          heritage for a sustainable future.</p>

                                   <!-- <div class="position-relative mx-auto">
                                          <input class="form-control border-0 bg-secondary w-100 py-3 ps-4 pe-5"
                                                 type="text" placeholder="Enter your email">
                                          <button type="button"
                                                 class="btn-hover-bg btn btn-primary position-absolute top-0 end-0 py-2 mt-2 me-2">SignUp</button>
                                   </div> -->
                            </div>
                     </div>
                     <div class="col-md-6 col-lg-6 col-xl-3">
                            <div class="footer-item d-flex flex-column" style="margin-left: 80px;">
                                   <h4 class="mb-4 text-white">Quick Links</h4>
                                   <a href="<?php echo home_url ('about-us') ; ?>"><i
                                                 class="fas fa-angle-right me-2"></i> About Us</a>
                                   <a href="<?php echo home_url ('mission') ; ?>"><i
                                                 class="fas fa-angle-right me-2"></i>
                                          Vision & Mission</a>
                                   <a href="<?php echo home_url ('our-campaign') ; ?>"><i
                                                 class="fas fa-angle-right me-2"></i> Our Campaign</a>
                                   <a href="<?php echo home_url ('impact') ; ?>"><i class="fas fa-angle-right me-2"></i>
                                          Our Impact</a>
                                   <a href="<?php echo home_url ('our-supporters') ; ?>"><i
                                                 class="fas fa-angle-right me-2"> </i> Our Supporters</a>
                            </div>
                     </div>
                     <div class="col-md-6 col-lg-6 col-xl-3">
                            <div class="footer-item d-flex flex-column">
                                   <h4 class="mb-4 text-white">Policies</h4>
                                   <a href="<?php echo home_url ('privacy-policy-2') ; ?>"><i
                                                 class="fas fa-angle-right me-2"></i> Privacy Policy</a>
                                   <a href="<?php echo home_url ('terms-conditions') ; ?>"><i
                                                 class="fas fa-angle-right me-2"></i> Terms & Conditions</a>
                                   <a href="<?php echo home_url ('disclaimer') ; ?>"><i
                                                 class="fas fa-angle-right me-2"></i> Disclaimer</a>
                                   <!-- <a href="<?php echo home_url ('blogs') ; ?>"><i class="fas fa-angle-right me-2"></i> Blogs</a> -->
                                   <!-- <a href=""><i class="fas fa-angle-right me-2"></i> Natalie Channing</a>
                            <a href=""><i class="fas fa-angle-right me-2"></i> Caroline Gerwig</a> -->
                            </div>
                     </div>
                     <div class="col-md-6 col-lg-6 col-xl-3">
                            <div class="footer-item">
                                   <h4 class="mb-4 text-white">Contact Us</h4>
                                   <div class="row g-2 text-justify">
                                          <span>Email:<a href="mailto: info@SHEWings.com">info@shewings.com</a></span>
                                          <span>Contact:<a href="tel:+91 8800633291">+91 8800633291</a></span>
                                          <div class="col-md-4">
                                                 <div class="topbar-icon d-flex align-items-center justify-content-end">
                                                        <a href="https://www.facebook.com/SheWingsOrganization/" target="Blank" class="btn-square text-white me-2"><i
                                                                      class="fab fa-facebook-f"></i></a>
                                                        <a href="https://x.com/theshewings"  target="Blank" class="btn-square text-white me-2"><i
                                                                      class="fab fa-twitter"></i></a>
                                                        <a href="https://www.instagram.com/shewingsfoundation/"  target="Blank" class="btn-square text-white me-2"><i
                                                                      class="fab fa-instagram"></i></a>
                                                        <a href="https://www.linkedin.com/company/shewingsfoundation/"  target="Blank" class="btn-square text-white me-0"><i
                                                                      class="fab fa-linkedin-in"></i></a>
                                                 </div>
                                          </div>
                                   </div>
                            </div>
                     </div>
              </div>
       </div>
</div>
<!-- Footer End -->


<!-- Copyright Start -->
<div class="container-fluid copyright py-4">
       <div class="container">
              <div class="row g-4 align-items-center">
                     <div class="col-md-4 text-center text-md-start mb-md-0">
                            <span class="text-body"><a href="https://SHEWingsfoundation.com/"><i
                                                 class="fas fa-copyright text-light me-2"></i>SHEWingsfoundation</a>,
                                   All right reserved.</span>
                     </div>
                     <div class="col-md-4 text-center">
                            <div class="d-flex align-items-center justify-content-center">
                                   <a href="#" class="btn-hover-color btn-square text-white me-2"><i
                                                 class="fab fa-facebook-f"></i></a>
                                   <a href="#" class="btn-hover-color btn-square text-white me-2"><i
                                                 class="fab fa-twitter"></i></a>
                                   <a href="#" class="btn-hover-color btn-square text-white me-2"><i
                                                 class="fab fa-instagram"></i></a>
                                   <a href="#" class="btn-hover-color btn-square text-white me-2"><i
                                                 class="fab fa-pinterest"></i></a>
                                   <a href="#" class="btn-hover-color btn-square text-white me-0"><i
                                                 class="fab fa-linkedin-in"></i></a>
                            </div>
                     </div>
                     <!--<div class="col-md-4 text-center text-md-end text-body">-->
                     <!--/*** This template is free as long as you keep the below author's credit link/attribution link/backlink. ***/-->
                     <!--/*** If you'd like to use the template without the below author's credit link/attribution link/backlink, ***/-->
                     <!--/*** you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". ***/-->
                     <!--    Developed By <a class="border-bottom" href="http://ashutosh.rf.gd/?i=1">Ashutosh Rathor</a>-->
                     <!--</div>-->
              </div>
       </div>
</div>
<!-- Copyright End -->


<!-- Back to Top -->
<!-- <a href="#" class="btn btn-primary btn-primary-outline-0 btn-md-square back-to-top"><i class="fa fa-arrow-up"></i></a> -->


<!-- JavaScript Libraries -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo esc_url ( get_template_directory_uri () ); ?>/lib/easing/easing.min.js"></script>
<script src="<?php echo esc_url ( get_template_directory_uri () ); ?>/lib/waypoints/waypoints.min.js"></script>
<script src="<?php echo esc_url ( get_template_directory_uri () ); ?>/lib/counterup/counterup.min.js"></script>
<script src="<?php echo esc_url ( get_template_directory_uri () ); ?>/lib/owlcarousel/owl.carousel.min.js"></script>
<script src="<?php echo esc_url ( get_template_directory_uri () ); ?>/lib/lightbox/js/lightbox.min.js"></script>


<!-- Template Javascript -->
<script src="<?php echo esc_url ( get_template_directory_uri () ); ?>/js/main.js"></script>

</body>

</html>