<?php wp_footer(); ?>

<!-- wpp-btn-mobile -->
<div class="phone-call cbh-phone cbh-green cbh-show  cbh-static" id="clbh_phone_div" style="">
               <!-- <a id="WhatsApp-button" href="https://wa.me/+917024428638" target="_blank" class="phoneJs" title="WhatsApp 360imagem"> -->
               <a id="WhatsApp-button" href="https://api.whatsapp.com/send/?phone=%2B917024428638&text&type=phone_number&app_absent=0" target="_blank" class="phoneJs" title="WhatsApp Nakshinfotech">
                  <div class="cbh-ph-circle"></div>
                  <div class="cbh-ph-circle-fill"></div>
                  <div class="cbh-ph-img-circle1"></div>
                  </a>
            </div>   
            <!-- wpp-btn-mobile -->

   <!-- footer-area-start -->
   <footer>
      <div class="footer-widget-area footer-widget-area-2 footer-bg pt-50 pb-30">
         <div class="container">
            <div class="row">
               <div class="col-lg-4 col-md-6">
                  <div class="footer-widget footer-col-1 mb-50">
                     <h3 class="footer-widget-title">About Us</h3>
                     <p>The specific components of an IT infrastructure for an IT company will vary depending on the size and needs of the company. 
                     However,the basic components listed above are essential for any IT infrastructure.</p>
                  </div>
               </div>
               <div class="col-lg-4 col-md-6">
                  <div class="footer-widget footer-col-2 mb-50">
                     <h3 class="footer-widget-title">Get In Touch</h3>
                     <div class="footer-contact">
                        <div class="footer-contact-item">
                           <p>B74 Veena nagar, 
                           near MR10 indore</p>
                        </div>
                        <div class="footer-contact-item">
                           <p>Mon – Fri: 7.00 – 22.00 <br>
                              Sat – Sun: 9.00 – 20.00</p>
                        </div>
                        <div class="footer-contact-item">
                           <p>+91 7024428638 <br>
                              +91 9131760227 </p>
                        </div>
                     </div>
                  </div>
               </div>
            
               <div class="col-lg-4 col-md-6">
                  <div class="footer-widget footer-col-4 mb-50">
                     <h3 class="footer-widget-title">Get Newsletter</h3>
                     <p>Sign up today for hints, tips & the
                        latest product news</p>
                     <div class="footer-subscribe">
                        <input type="email" placeholder="Email address">
                        <button type="submit"> <i class="far fa-envelope-open"></i></button>
                     </div>
                     <div class="footer-social mt-20">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-behance"></i></a>
                        <a href="https://youtube.com/@NakshInfotech"><i class="fab fa-youtube"></i></a>
                        <a href="https://www.linkedin.com/company/naksh-infotech-private-limited/"><i class="fab fa-linkedin"></i></a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="copyright-area theme-bg pt-20 pb-20">
         <div class="container">
            <div class="row justify-content-center">
               <div class="col-xl-7 col-lg-7  col-12">
                  <div class="copyright-text text-lg-start text-center">
                     <p>Copyright © 2023 Naksh Infotech. All Rights Reserved.</p>
                  </div>
               </div>
               <div class="col-xl-5 col-lg-5 col-12">
                  <div class="footer-menu text-center text-lg-end">
                     <ul>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Terms of Use</a></li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </footer>


   <!-- footer-area-end -->
   <!-- feature-area-end -->
   <!-- JS here -->
   <script src="<?php echo home_url(); ?>/wp-assets/assets/js/vendor/jquery.js"></script>
   <script src="<?php echo home_url(); ?>/wp-assets/assets/js/vendor/waypoints.js"></script>
   <script src="<?php echo home_url(); ?>/wp-assets/assets/js/bootstrap-bundle.js"></script>
   <script src="<?php echo home_url(); ?>/wp-assets/assets/js/meanmenu.js"></script>
   <script src="<?php echo home_url(); ?>/wp-assets/assets/js/slick.js"></script>
   <script src="<?php echo home_url(); ?>/wp-assets/assets/js/magnific-popup.js"></script>
   <script src="<?php echo home_url(); ?>/wp-assets/assets/js/backtotop.js"></script>
   <script src="<?php echo home_url(); ?>/wp-assets/assets/js/nice-select.js"></script>
   <script src="<?php echo home_url(); ?>/wp-assets/assets/js/counterup.js"></script>
   <script src="<?php echo home_url(); ?>/wp-assets/assets/js/isotope-pkgd.js"></script>
   <script src="<?php echo home_url(); ?>/wp-assets/assets/js/imagesloaded-pkgd.js"></script>
   <script src="<?php echo home_url(); ?>/wp-assets/assets/js/ajax-form.js"></script>
   <script src="<?php echo home_url(); ?>/wp-assets/assets/js/main.js"></script>
   
   <script>
   jQuery(document).ready(function($) {
      // Smooth scrolling when clicking on the menu item
      $('a[href^="#"]').on('click', function(event) {
         var target = $(this.getAttribute('href'));
         if (target.length) {
            event.preventDefault();
            $('html, body').stop().animate({
               scrollTop: target.offset().top
            }, 1000); // Adjust the scroll speed as needed (in milliseconds)
         }
      });
   });
</script>

</body>


</html>