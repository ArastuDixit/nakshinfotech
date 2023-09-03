<?php 
   /*
   
       * Template Name: Home
   
       * Theme Name: Naksh Infotech Pvt. Ltd.
   
       * Author: Arastu Dixit
   
       * Version: 1.0
   
       */
   
   
   get_header(); 
   
   ?>

<div class="tp-sidebar-menu ">
      <button class="sidebar-close"><i class="fal fa-times"></i></button>
      <div class="side-logo mb-20">
         <a href="/"><img src="<?php echo home_url(); ?>/wp-assets/assets/img/logo/logo.png" alt="logo"></a>
      </div>
      <div class="mobile-menu">
         <div class="sidebar-title">
            <h3>CONTACT US</h3>
         </div>
         <ul class="sidebar-list">
           <li>B74 Veena nagar,near MR10 indore</li>
           <li>7024428638</li>
           <li>nakshinfotech2602@gmail.com</li>
         </ul>
         <div class="tp-sidebar-social">
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="https://instagram.com/nakshinfo2253?igshid=MzNlNGNkZWQ4Mg=="><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-dribbble"></i></a>
         </div>
      </div>
   </div>
   <div class="body-overlay"></div>


   <!-- Carousel -->
<div id="demo" class="carousel slide" data-bs-ride="carousel" data-bs-interval="2000" data-bs-pause="false">

  <!-- Indicators/dots -->
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
  </div>
  
  <!-- The slideshow/carousel -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="<?php echo home_url(); ?>/wp-assets/assets/img/slider/banner1.png" alt="Los Angeles" class="d-block" style="width:100%; height:100vh;">
      <div class="carousel-caption">
        <h3>Professional Website Development Services</h3>
        <p> Unlock Your Online Potential with Our Expert Website Development Services.</p>
      </div> 
    </div>
   
   <div class="carousel-item">
    <img src="<?php echo home_url(); ?>/wp-assets/assets/img/slider/banner2.png" alt="Los Angeles" class="d-block" style="width:100%; height:100vh;">
    <div class="carousel-caption">
        <h3>Custom Software Solutions for Your Business</h3>
        <p> Transform Your Business with Tailored Software Development Services</p>
      </div> 
    </div>
  
  <!-- Add the third banner here -->
    <div class="carousel-item">
      <img src="<?php echo home_url(); ?>/wp-assets/assets/img/slider/banner3.png" alt="Los Angeles" class="d-block" style="width:100%; height:100vh;">
      <div class="carousel-caption">
        <h3>Innovative Mobile App Development Solutions</h3>
        <p> Turn Your Ideas into Powerful Mobile Applications with Our Expert Team.</p>
      </div> 
    </div>
  </div>
  
  <!-- Left and right controls/icons -->
  <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
    <span class="carousel-control-next-icon"></span>
  </button>
</div>


   <!-- about-area-start -->
   <section id="about">
   <div class="tp-about-area pt-50 pb-50">
      <div class="container">
         <div class="row">
            <div class="col-xl-6 col-lg-6">
               <div class="tp-about-wapper3 mb-30">
                  <div class="ab-main-img">
                     <img class="ab-1st-img" src="<?php echo home_url(); ?>/wp-assets/assets/img/about/about-main-2.jpg" alt="">
                  </div>
                  <div class="ab-sec-img">
                     <img src="<?php echo home_url(); ?>/wp-assets/assets/img/about/about-main-img.jpg" alt="">
                  </div>
                  <div class="ab-third-img d-none d-md-block">
                     <img src="<?php echo home_url(); ?>/wp-assets/assets/img/about/ab-main-small.jpg" alt="">
                  </div>
               </div>
            </div>
            <div class="col-xl-6 col-lg-6">
               <div class="tp-ab-wrapper-3 pt-55 pl-50 mb-30">
                  <div class="tp-section-box tp-section-box-2 mb-40  p-relative">
                     <span class="tp-section-subtitle right d-inline-block">About Us</span>
                     <h2 class="tp-section-title mb-20">
                        Your Trusted IT Solutions Partner
                     </h2>
                     <p class="p-text">Welcome to Naksh Infotech, your one-stop solution for all your IT needs. We are a professional IT company offering a comprehensive range of services to help your business thrive in the digital world.
                     At Naksh Infotech, we pride ourselves on providing complete IT solutions tailored to your specific requirements. Whether you need website development, mobile app development, software solutions, or IT infrastructure services, we've got you covered.
Our team of skilled professionals is dedicated to delivering top-notch services, utilizing the latest technologies and best practices. We specialize in creating dynamic and user-friendly websites, innovative mobile applications, and robust software solutions to streamline your business processes.
</p>
                  </div>
                  <div class="tp-ab-fe-box mb-40">
                     <div class="about-feature-list d-flex align-items-center mb-20">
                        <div class="about-icon mr-25">
                           <i class="flaticon-web-security"></i>
                        </div>
                        <div class="about-feature-text">
                           <h5 class="m-0 mb-5">Transforming Businesses with IT Solutions</h5>
                           <p class="m-0">At Naksh Infotech, we are passionate about leveraging the power of technology for businesses.</p>
                        </div>
                     </div>
                     <div class="about-feature-list d-flex align-items-center">
                        <div class="about-icon mr-25">
                           <i class="flaticon-school"></i>
                        </div>
                        <div class="about-feature-text">
                           <h5 class="m-0 mb-5">Banking and Institutions: Empowering Financial Excellence</h5>
                           <p class="m-0">We believe in the value that our IT functions add to banks and financial institutions.</p>
                        </div>
                     </div>
                  </div>
                  
               </div>
            </div>
         </div>
      </div>
   </div>
   </section>
   <!-- about-area-end -->

   <!-- service-area-start -->
   <section id="services">
   <div class="service-area">
      <div class="service-tab-bg pt-50" data-background="<?php echo home_url(); ?>/wp-assets/assets/img/services/tab-bg.jpg">
         <div class="container">
               <div class="tp-section-box tp-section-box-2 p-relative mb-45 text-center">
                  <span class="tp-section-subtitle d-inline-block pre mb-10">services</span>
                  <h2 class="tp-section-title">
                     What We Provide
                  </h2>
               </div>
               <div class="service-tab-info">
                  <nav>
                     <div class="nav tp-service-tab justify-content-center mb-35" id="nav-tab" role="tablist">
                        <button class="nav-links active" id="nav-camera-tab" data-bs-toggle="tab" data-bs-target="#nav-camera"
                           type="button" role="tab" aria-controls="nav-camera" aria-selected="true">Website Development</button>

                        <button class="nav-links" id="nav-cctv-tab" data-bs-toggle="tab" data-bs-target="#nav-cctv"
                           type="button" role="tab" aria-controls="nav-cctv" aria-selected="true">Software Development</button>

                        <button class="nav-links" id="nav-security-tab" data-bs-toggle="tab" data-bs-target="#nav-security"
                           type="button" role="tab" aria-controls="nav-security" aria-selected="true">App Development</button>

                        <button class="nav-links" id="nav-cyber-tab" data-bs-toggle="tab" data-bs-target="#nav-cyber"
                           type="button" role="tab" aria-controls="nav-cyber" aria-selected="true">UX/UI Designing</button>
                     </div>
                  </nav>
                  <div class="tab-content" id="nav-tabContent">
                     <div class="tab-pane fade show active" id="nav-camera" role="tabpanel" aria-labelledby="nav-camera-tab"
                        tabindex="0">
                        <div class="slider-tab-main white-bg">
                           <div class="row">
                              <div class="col-lg-5 col-12 sv-tab-img">
                                 <div class="tp-service-tab-img">
                                    <img src="<?php echo home_url(); ?>/wp-assets/assets/img/services/sv-7.jpg" alt="">
                                 </div>
                              </div>
                              <div class="col-lg-7 col-12 sv-tab-content">
                                 <div class="tp-service-tab-content pt-30 pl-25">
                                    <div class="tab-circle">
                                       <h4><span>$</span>59</h4>
                                       <h3 class="sv-tab-titile">Website Development Services</h3>
                                       <p>We offer a comprehensive range of website development services, from design and development to maintenance and support. 
                                       We can help you create a website that is both visually appealing and functional, and that meets your specific needs.</p>
                                    </div>
                                    <div class="tp-sv-feature-list mb-40">
                                       <ul>
                                          <li><i class="fal fa-check"></i> Website design</li>
                                          <li><i class="fal fa-check"></i> Website development</li>
                                          <li><i class="fal fa-check"></i> Website SEO</li>
                                          <li><i class="fal fa-check"></i> Website maintenance</li>
                                          <li><i class="fal fa-check"></i> Website support</li>
                                       </ul>
                                    </div>
                                    <div class="services-tab-btn">
                                       <a href="#" class="tp-btn">Read More</a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="tab-pane fade" id="nav-cctv" role="tabpanel" aria-labelledby="nav-cctv-tab"
                        tabindex="0">
                        <div class="slider-tab-main white-bg">
                           <div class="row">
                              <div class="col-lg-5 col-12 sv-tab-img">
                                 <div class="tp-service-tab-img">
                                    <img src="<?php echo home_url(); ?>/wp-assets/assets/img/services/sv-8.jpg" alt="">
                                 </div>
                              </div>
                              <div class="col-lg-7 col-12 sv-tab-content">
                                 <div class="tp-service-tab-content pt-30 pl-25">
                                    <div class="tab-circle">
                                       <h4><span>$</span>35</h4>
                                       <h3 class="sv-tab-titile">Software Development Services</h3>
                                       <p>We offer a comprehensive range of software development services, from custom software development to mobile app development. 
                                       We can help you create a software solution that is both innovative and functional, and that meets your specific needs.</p>
                                    </div>
                                    <div class="tp-sv-feature-list mb-40">
                                       <ul>
                                          <li><i class="fal fa-check"></i> Custom software development</li>
                                          <li><i class="fal fa-check"></i> Web application development</li>
                                          <li><i class="fal fa-check"></i> Database development</li>
                                          <li><i class="fal fa-check"></i> QA and testing</li>
                                          <li><i class="fal fa-check"></i> Deployment and support</li>
                                       </ul>
                                    </div>
                                    <div class="services-tab-btn">
                                       <a href="#" class="tp-btn">Read More</a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="tab-pane fade" id="nav-security" role="tabpanel" aria-labelledby="nav-security-tab"
                        tabindex="0">
                        <div class="slider-tab-main white-bg">
                           <div class="row">
                              <div class="col-lg-5 col-12 sv-tab-img">
                                 <div class="tp-service-tab-img">
                                    <img src="<?php echo home_url(); ?>/wp-assets/assets/img/services/sv-9.jpg" alt="">
                                 </div>
                              </div>
                              <div class="col-lg-7 col-12 sv-tab-content">
                                 <div class="tp-service-tab-content pt-30 pl-25">
                                    <div class="tab-circle">
                                       <h4><span>$</span>45</h4>
                                       <h3 class="sv-tab-titile">App Development Services</h3>
                                       <p>We offer a comprehensive range of app development services, from ideation and design to development and deployment. 
                                       We can help you create an app that is both visually appealing and functional, and that meets your specific needs.</p>
                                    </div>
                                    <div class="tp-sv-feature-list mb-40">
                                       <ul>
                                          <li><i class="fal fa-check"></i> App ideation and design</li>
                                          <li><i class="fal fa-check"></i> App development</li>
                                          <li><i class="fal fa-check"></i> App testing</li>
                                          <li><i class="fal fa-check"></i> App deployment</li>
                                          <li><i class="fal fa-check"></i> App support</li>
                                       </ul>
                                    </div>
                                    <div class="services-tab-btn">
                                       <a href="#" class="tp-btn">Read More</a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="tab-pane fade" id="nav-cyber" role="tabpanel" aria-labelledby="nav-cyber-tab"
                        tabindex="0">
                        <div class="slider-tab-main white-bg">
                           <div class="row">
                              <div class="col-lg-5 col-12 sv-tab-img">
                                 <div class="tp-service-tab-img">
                                    <img src="<?php echo home_url(); ?>/wp-assets/assets/img/services/sv-10.jpg" alt="">
                                 </div>
                              </div>
                              <div class="col-lg-7 col-12 sv-tab-content">
                                 <div class="tp-service-tab-content pt-30 pl-25">
                                    <div class="tab-circle">
                                       <h4><span>$</span>42</h4>
                                       <h3 class="sv-tab-titile">UX/UI Designing Services</h3>
                                       <p>We offer a comprehensive range of UX/UI designing services, from ideation and wireframing to prototyping and implementation. 
                                       We can help you create a user experience and user interface that is both visually appealing and functional, and that meets your specific needs.</p>
                                    </div>
                                    <div class="tp-sv-feature-list mb-40">
                                       <ul>
                                          <li><i class="fal fa-check"></i> UX/UI ideation</li>
                                          <li><i class="fal fa-check"></i> Wireframing</li>
                                          <li><i class="fal fa-check"></i> Prototyping</li>
                                          <li><i class="fal fa-check"></i> Implementation</li>
                                          <li><i class="fal fa-check"></i> UX/UI testing</li>
                                       </ul>
                                    </div>
                                    <div class="services-tab-btn">
                                       <a href="#" class="tp-btn">Read More</a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
         </div>
      </div>
   </div>
   </section>
   <!-- service-area-end -->
   <div class="testimonial-area pt-50 pb-50">
      <div class="container">
         <div class="row align-items-center">
            <div class="col-lg-6">
               <div class="tp-section-box tp-section-box-2 p-relative mb-45">
                  <span class="tp-section-subtitle d-inline-block right mb-10">testimonials</span>
                  <h2 class="tp-section-title">
                     User Feedbacks
                  </h2>
               </div>
            </div>
            <div class="col-lg-6">
               <div class="tp-test-arrow text-end mb-45"></div>
            </div>
         </div>
         <div class="tp-testimonial-active tp-testimonial-white slider-space-30">
            <div class="testi-item-list">
               <div class="tp-testimonial-item text-center">
                  <div class="testi-img p-relative">
                     <img src="<?php echo home_url(); ?>/wp-assets/assets/img/testimonial/test1.png" alt="">
                     <i class="fal fa-quote-right quote-style"></i>
                  </div>
                  <h4 class="testi-text">“ The team at Naksh Infotech is highly professional, skilled, and proactive. ”</h4>
                  <div class="testi-meta">
                     <h5 class="reviewer-name">Humble Dowson</h5>
                     <span class="reviewer-position">Head Of Idea</span>
                  </div>
               </div>
            </div>
            <div class="testi-item-list">
               <div class="tp-testimonial-item text-center">
                  <div class="testi-img p-relative">
                     <img src="<?php echo home_url(); ?>/wp-assets/assets/img/testimonial/test2.png" alt="">
                     <i class="fal fa-quote-right quote-style"></i>
                  </div>
                  <h4 class="testi-text">“ Naksh Infotech understood our unique requirements and provided tailored solutions that perfectly align with our goals. ”</h4>
                  <div class="testi-meta">
                     <h5 class="reviewer-name">Limbon N. Nelson</h5>
                     <span class="reviewer-position">Head Of Idea</span>
                  </div>
               </div>
            </div>
            <div class="testi-item-list">
               <div class="tp-testimonial-item text-center">
                  <div class="testi-img p-relative">
                     <img src="<?php echo home_url(); ?>/wp-assets/assets/img/testimonial/test3.png" alt="">
                     <i class="fal fa-quote-right quote-style"></i>
                  </div>
                  <h4 class="testi-text">“ The team at Naksh Infotech is highly professional, skilled, and proactive. ”</h4>
                  <div class="testi-meta">
                     <h5 class="reviewer-name">Humble Dowson</h5>
                     <span class="reviewer-position">Head Of Idea</span>
                  </div>
               </div>
            </div>
            <div class="testi-item-list">
               <div class="tp-testimonial-item text-center">
                  <div class="testi-img p-relative">
                     <img src="<?php echo home_url(); ?>/wp-assets/assets/img/testimonial/test1.png" alt="">
                     <i class="fal fa-quote-right quote-style"></i>
                  </div>
                  <h4 class="testi-text">“ The team at Naksh Infotech is highly professional, skilled, and proactive. ”</h4>
                  <div class="testi-meta">
                     <h5 class="reviewer-name">Humble Dowson</h5>
                     <span class="reviewer-position">Head Of Idea</span>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- feature-area-start -->
   <div class="feature-third-area feature-bg-img pt-50 pb-50" data-background="<?php echo home_url(); ?>/wp-assets/assets/img/feature/feature-bg.jpg">
      <div class="container">
         <div class="row justify-content-lg-end">
            <div class="col-xxl-6 col-xl-7 col-lg-8">
               <div class="tp-section-box tp-section-box-2 p-relative mb-45">
                  <span class="tp-section-subtitle d-inline-block right mb-10">features</span>
                  <h2 class="tp-section-title">
                     Providing Cutting-Edge<br>
                  IT Solutions & Security
                  </h2>
               </div>
               <div class="row">
                  <div class="col-lg-6 col-md-6">
                     <div class="fea-list d-flex align-items-center mb-30">
                        <i class="flaticon-spy-camera"></i>
                        <div class="fea-ctn pl-20">
                           <h5 class="m-0">Full-Time IT Support</h5>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-6 col-md-6">
                     <div class="fea-list d-flex align-items-center mb-30">
                        <i class="flaticon-secure"></i>
                        <div class="fea-ctn pl-20">
                           <h5 class="m-0">Cloud Solutions</h5>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-6 col-md-6">
                     <div class="fea-list d-flex align-items-center mb-30">
                        <i class="flaticon-global"></i>
                        <div class="fea-ctn pl-20">
                           <h5 class="m-0">Cybersecurity Services</h5>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-6 col-md-6">
                     <div class="fea-list d-flex align-items-center mb-30">
                        <i class="flaticon-database"></i>
                        <div class="fea-ctn pl-20">
                           <h5 class="m-0">Data Analytics</h5>
                        </div>
                     </div>
                  </div>
                  <div class="fea-button pt-20">
                     <a class="tp-btn mr-25" href="#">Get In Touch <i class="fal fa-long-arrow-right"></i></a>
                     <a class="tp-black-btn-2" href="#">Free Consultation</a>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- feature-area-end -->
   <div class="tp-process-area pt-50 pb-50">
      <div class="container">
         <div class="row text-center">
            <div class="col-xl-12">
               <div class="tp-section-box tp-section-box-2 p-relative mb-50">
                  <span class="tp-section-subtitle d-inline-block pre mb-10">process</span>
                  <h2 class="tp-section-title">
                     How We Work Here
                  </h2>
               </div>
            </div>
         </div>
         <div class="row counter-row">
            <div class="col-xl-2 col-lg-4 col-md-4">
               <div class="tp-process-item-2 text-center mb-30">
                  <div class="counter-content"></div>
                  <h5>IT Consultation</h5>
                  <i class="flaticon-cloud"></i>
               </div>
            </div>
            <div class="col-xl-2 col-lg-4 col-md-4">
               <div class="tp-process-item-2 text-center mb-30">
                  <div class="counter-content"></div>
                  <h5>Managed IT Services</h5>
                     <i class="flaticon-security-camera"></i>
               </div>
            </div>
            <div class="col-xl-2 col-lg-4 col-md-4">
               <div class="tp-process-item-2 text-center mb-30">
                  <div class="counter-content"></div>
                  <h5>Remote Monitoring</h5>
                     <i class="flaticon-settings"></i>
               </div>
            </div>
            <div class="col-xl-2 col-lg-4 col-md-4">
               <div class="tp-process-item-2 text-center mb-30">
                  <div class="counter-content"></div>
                  <h5>Cybersecurity Solutions</h5>
                     <i class="flaticon-approved"></i>
               </div>
            </div>
            <div class="col-xl-2 col-lg-4 col-md-4">
               <div class="tp-process-item-2 text-center mb-30">
                  <div class="counter-content"></div>
                  <h5>Data Backup & Recovery</h5>
                     <i class="flaticon-guard"></i>
               </div>
            </div>
            <div class="col-xl-2 col-lg-4 col-md-4">
               <div class="tp-process-item-2 text-center mb-30">
                  <div class="counter-content"></div>
                  <h5>Cloud Solutions</h5>
                     <i class="flaticon-drone-3"></i>
               </div>
            </div>
         </div>
         <div class="process-bottom-text text-center">
            <h3 class="tp-pro-text mt-50 mb-35">Providing Smart IT Solutions For The Smart Generation.</h3>
            <div class="process-btn">
               <a class="tp-btn" href="#">Explore Our Services <i class="fal fa-long-arrow-right"></i></a>
               <a class="tp-black-btn-2 " href="#">Contact Us</a>
            </div>
         </div>
      </div>
   </div>
   <!-- portfolio-area-start -->
   <section id="our products">
   <div class="tp-shop-area grey-bg pt-50 pb-50">
      <div class="container">
         <div class="row text-center">
            <div class="col-xl-12">
               <div class="tp-section-box tp-section-box-2 p-relative mb-50">
                  <span class="tp-section-subtitle d-inline-block pre mb-10">shop</span>
                  <h2 class="tp-section-title">
                     Our Products
                  </h2>
               </div>
            </div>
         </div>
         <div class="row">
            <div class="col-xl-3 col-lg-6 col-md-6">
               <div class="tp-porduct-item p-relative text-center mb-30">
                  <img src="<?php echo home_url(); ?>/wp-assets/assets/img/shop/pic-1.jpg" alt="">
                  <div class="tp-porduct-content">
                     <div class="tp-pro-rating mb-5">
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                     </div>
                     <h5 class="tp-pro-title"><a href="shop-details.html">Website Development</a></h5>
                     <div class="tp-pro-price">
                        <span>$39.00</span>
                     </div>
                     <div class="shop-cart">
                        <a class="tp-btn" href="#">Inquiry Now</a>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6">
               <div class="tp-porduct-item p-relative text-center mb-30">
                  <img src="<?php echo home_url(); ?>/wp-assets/assets/img/shop/pic-2.jpg" alt="">
                  <div class="tp-porduct-content">
                     <div class="tp-pro-rating mb-5">
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                     </div>
                     <h5 class="tp-pro-title"><a href="shop-details.html">E-Commerce Website</a></h5>
                     <div class="tp-pro-price">
                        <span>$49.00</span>
                     </div>
                     <div class="shop-cart">
                        <a class="tp-btn" href="#">Inquiry Now</a>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6">
               <div class="tp-porduct-item p-relative text-center mb-30">
                  <img src="<?php echo home_url(); ?>/wp-assets/assets/img/shop/pic-3.jpg" alt="">
                  <div class="tp-porduct-content">
                     <div class="tp-pro-rating mb-5">
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                     </div>
                     <h5 class="tp-pro-title"><a href="shop-details.html">Banking Website</a></h5>
                     <div class="tp-pro-price">
                        <span>$29.00</span>
                     </div>
                     <div class="shop-cart">
                        <a class="tp-btn" href="#">Inquiry Now</a>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6">
               <div class="tp-porduct-item p-relative text-center mb-30">
                  <img src="<?php echo home_url(); ?>/wp-assets/assets/img/shop/pic-4.jpg" alt="">
                  <div class="tp-porduct-content">
                     <div class="tp-pro-rating mb-5">
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                     </div>
                     <h5 class="tp-pro-title"><a href="shop-details.html">Chatbot Development</a></h5>
                     <div class="tp-pro-price">
                        <span>$19.00</span>
                     </div>
                     <div class="shop-cart">
                        <a class="tp-btn" href="#">Inquiry Now</a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>

   <!-- portfolio-area-end -->
   <div class="tp-faq-area pt-50 pb-50">
      <div class="container">
         <div class="row">
            <div class="col-xl-6 col-lg-12 text-center text-xl-start col-12">
               <div class="tp-about-wapper3">
                  <img src="<?php echo home_url(); ?>/wp-assets/assets/img/bg/faq-bg.jpg" alt="">
               </div>
            </div>
            <div class="col-xl-6 col-lg-12 col-12">
               <div class="tp-faq-wrapper pt-50 pl-60 mb-40 p1-40">
                  <div class="tp-section-box tp-section-box-2  p-relative">
                     <span class="tp-section-subtitle right d-inline-block">faq</span>
                     <h2 class="tp-section-title mb-30">
                        Delivering Superior IT Solutions Worldwide.
                     </h2>
                  </div>

                  <div class="tp-custom-accordio">
                     <div class="accordion" id="accordionExample">
                        <div class="accordion-items">
                           <h2 class="accordion-header" id="headingOne">
                              <button class="accordion-buttons" type="button" data-bs-toggle="collapse"
                                 data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                 What IT solutions does your company offer?
                              </button>
                           </h2>
                           <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                              data-bs-parent="#accordionExample">
                              <div class="accordion-body">
                                 At Naksh Infotech, we offer a wide range of IT solutions tailored to meet the unique
                          needs of businesses. From website development to network security, our team of experts
                          ensures that your digital infrastructure is robust and future-ready.
                              </div>
                           </div>
                        </div>
                        <div class="accordion-items">
                           <h2 class="accordion-header" id="headingTwo">
                              <button class="accordion-buttons collapsed" type="button" data-bs-toggle="collapse"
                                 data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                 How does your company handle data security?
                              </button>
                           </h2>
                           <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                              data-bs-parent="#accordionExample">
                              <div class="accordion-body">
                                 Data security is our top priority at Naksh Infotech. We implement state-of-the-art
                          encryption and security measures to protect your sensitive information from unauthorized
                          access and cyber threats.
                              </div>
                           </div>
                        </div>
                        <div class="accordion-items">
                           <h2 class="accordion-header" id="headingThree">
                              <button class="accordion-buttons collapsed" type="button" data-bs-toggle="collapse"
                                 data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                 How can your IT solutions benefit my business?
                              </button>
                           </h2>
                           <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                              data-bs-parent="#accordionExample">
                              <div class="accordion-body">
                                 Our IT solutions are designed to streamline your business processes, enhance efficiency,
                          and improve productivity. Whether it's automating tasks or optimizing workflows, our
                          customized solutions can significantly benefit your bottom line.
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>

   <div class="container">
      <hr class="bdr-color">
   </div>

   <!-- team area start here -->
   <div class="tp-quote-area grey-bg pt-50 pb-50">
      <div class="container">
         <div class="row">
            <div class="col-xl-7 m-auto">
               <div class="tp-section-box tp-section-box-2 p-relative text-center mb-45">
                  <span class="tp-section-subtitle d-inline-block pre mb-10">get a quote</span>
                  <h2 class="tp-section-title">
                      Discover the Best IT Solutions
                  for Your Business
                  </h2>
               </div>
            </div>
         </div>
         <div class="select-main">
            <div class="row">
               <div class=" col-xl-4 col-lg-4 col-md-6">
                  <div class="select-item ">
                     <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                        <option selected>IT Consultation</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                     </select>
                     <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                        <option selected>Application Development</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                     </select>
                  </div>
               </div>
               <div class=" col-xl-4 col-lg-4 col-md-6">
                  <div class="select-item">
                     <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                        <option selected>Managed IT Services</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                     </select>
                     <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                        <option selected>Digital Marketing</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                     </select>
                  </div>
               </div>
               <div class="col-xl-4 col-lg-4 col-md-6">
                  <div class="select-button">
                     <a class="tp-btn w-100 mb-10" href="#">Get a Quote Now: $18,000</a>
                     <a class="tp-black-btn-2 w-100" href="#">Contact Us for Solutions <i class="fal fa-long-arrow-right"></i></a>
                  </div>
               </div>
            </div>
            <div class="select-text text-center pt-25 pb-25">
               <p>To request a quote for our <span>IT Solutions</span> , simply click the "Get a Quote Now" button and provide your details.</p>
            </div>
         </div>
         <div class="select-icon-main">
            <div class="row">
               <div class="col-lg-3 col-md-6 col-sm-6">
                  <div class="tp-header-contact-icon select-text-size d-flex align-items-center mb-20">
                     <div><a href="#"><i class="fas fa-alarm-clock"></i></a></div>
                     <div class="tp-header-icon-info">
                        <label>Quick Response</label>
                        <a href="Within24/7Hours.html">
                           Within 24/7 Hours
                        </a>
                     </div>
                  </div>
               </div>
               <div class="col-lg-3 col-md-6 col-sm-6">
                  <div class="tp-header-contact-icon select-text-size d-flex align-items-center mb-20">
                     <div><a href="#"><i class="fas fa-calendar-alt"></i></a></div>
                     <div class="tp-header-icon-info">
                        <label>Same Day Service</label>
                        <a href="tel:ServiceAvailable">
                           Service Available
                        </a>
                     </div>
                  </div>
               </div>
               <div class="col-lg-3 col-md-6 col-sm-6">
                  <div class="tp-header-contact-icon select-text-size d-flex align-items-center mb-20">
                     <div><a href="#"><i class="far fa-envelope-open-text"></i></a></div>
                     <div class="tp-header-icon-info">
                        <label>Support Email</label>
                        <a href="nakshinfotech2602@gmail.com">
                           nakshinfotech
                           2602@gmail.com
                        </a>
                     </div>
                  </div>
               </div>
               <div class="col-lg-3 col-md-6 col-sm-6">
                  <div class="tp-header-contact-icon select-text-size d-flex align-items-center mb-20">
                     <div><a href="#"><i class="fas fa-phone"></i></a></div>
                     <div class="tp-header-icon-info">
                        <label>Friendly Advice</label>
                        <a href="tel:7024428638">
                           7024428638
                        </a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- team area end here -->
  
<section id="blog">
   <div class="tp-blog-area pt-110 pb-70">
      <div class="container">
         <div class="row text-center">
            <div class="col-xl-12">
               <div class="tp-section-box tp-section-box-2 p-relative mb-45">
                  <span class="tp-section-subtitle d-inline-block pre mb-10">blog</span>
                  <h2 class="tp-section-title">
                     Company Blog & Insight
                  </h2>
               </div>
            </div>
         </div>
         <div class="row">
            <div class="col-xl-4 col-lg-6 col-md-6 mb-30">
               <div class="tp-blog-main">
                  <div class="tp-blog-item text-center p-relative">
                     <div class="blog-img p-relative">
                        <div class="fix"><a href="#"><img src="<?php echo home_url(); ?>/wp-assets/assets/img/news-feed/feed-item.jpg" alt=""></a></div>
                        <div class="blog-date">
                           <a href="#">June 20, 2022</a>
                        </div>
                     </div>
                     <div class="tp-blog-content">
                        <div class="tp-news-meta">
                           <span class="user"><a href="#"><i class="fal fa-user"></i> Alex Dowson </a></span>
                           <span class="user-2"><a href="#"><i class="fal fa-comments"></i> 23 Comments</a></span>
                        </div>
                        <h5 class="tp-blog-title"><a href="#">Empower Your Business with Advanced IT Solutions</a></h5>
                        <p>An IT company specializes in providing cutting-edge technology solutions and services to businesses. From innovative software development to advanced networking solutions, 
                        we have the expertise to transform your business and streamline your operations effectively.</p>
                        <div class="tp-feed-link d-flex align-items-center">
                           <a class="blog-link" href="#">Read More <i class="far fa-long-arrow-alt-right"></i></a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6 mb-30">
               <div class="tp-blog-main">
                  <div class="tp-blog-item text-center p-relative">
                     <div class="blog-img p-relative">
                        <div class="fix"><a href="#"><img src="<?php echo home_url(); ?>/wp-assets/assets/img/news-feed/secblog-1.jpg" alt=""></a></div>
                        <div class="blog-date">
                           <a href="#">June 21, 2022</a>
                        </div>
                     </div>
                     <div class="tp-blog-content">
                        <div class="tp-news-meta">
                           <span class="user"><a href="#"><i class="fal fa-user"></i> Alex Dowson </a></span>
                           <span class="user-2"><a href="#"><i class="fal fa-comments"></i> 23 Comments</a></span>
                        </div>
                        <h5 class="tp-blog-title"><a href="#">Unlock Your Business Potential with the Right IT Solutions</a></h5>
                        <p>An IT company offers a wide range of services to businesses, helping them harness the power of technology for growth and success. 
                        With our comprehensive IT solutions, your business can achieve greater efficiency, security, and productivity, providing a seamless experience for your customers and clients.</p>
                        <div class="tp-feed-link d-flex align-items-center">
                           <a class="blog-link" href="#">Read More <i class="far fa-long-arrow-alt-right"></i></a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6 mb-30">
               <div class="tp-blog-main">
                  <div class="tp-blog-item text-center p-relative">
                     <div class="blog-img p-relative">
                        <div class="fix"><a href="#"><img src="<?php echo home_url(); ?>/wp-assets/assets/img/news-feed/secblog-2.jpg" alt=""></a></div>
                        <div class="blog-date">
                           <a href="#">June 22, 2022</a>
                        </div>
                     </div>
                     <div class="tp-blog-content">
                        <div class="tp-news-meta">
                           <span class="user"><a href="#"><i class="fal fa-user"></i> Alex Dowson </a></span>
                           <span class="user-2"><a href="#"><i class="fal fa-comments"></i> 23 Comments</a></span>
                        </div>
                        <h5 class="tp-blog-title"><a href="#">Streamline Your Business Payroll with Outsourcing</a></h5>
                        <p>At our IT company, we understand the importance of efficient payroll management for businesses. By outsourcing your payroll, you can save time, reduce administrative burdens, and ensure accurate and timely payments to your employees.
                        Our payroll solutions are designed to meet the unique needs of your business.</p>
                        <div class="tp-feed-link d-flex align-items-center">
                           <a class="blog-link" href="#">Read More <i class="far fa-long-arrow-alt-right"></i></a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   </section>
   <!-- footer-counter-start -->
   
   <!-- contact area start here -->
<section id="contact">
<div class="tp-contact-area bg-gray pb-110">
   <div class="container">
      <div class="row">
         <div class="col-xl-7 m-auto">
            <div class="tp-section-box tp-section-box-2 p-relative text-center mb-45">
               <span class="tp-section-subtitle d-inline-block pre mb-10">contact us</span>
               <h2 class="tp-section-title">
                  Get in Touch with Us
               </h2>
            </div>
         </div>
      </div>
      <div class="row">
         <div class="col-lg-12 m-auto">
            <div class="contact-form">
               <!-- Add your contact form code here -->
               <form action="#" method="post">
                  <div class="row">
                     <div class="col-md-6">
                        <div class="form-group">
                           <input type="text" name="name" class="form-control" placeholder="Your Name" required>
                        </div>
                     </div>
                     <div class="col-md-6">
                        <div class="form-group">
                           <input type="email" name="email" class="form-control" placeholder="Your Email" required>
                        </div>
                     </div>
                     <div class="col-md-12">
                        <div class="form-group">
                           <input type="text" name="subject" class="form-control" placeholder="Subject" required>
                        </div>
                     </div>
                     <div class="col-md-12">
                        <div class="form-group">
                           <textarea name="message" class="form-control" rows="6" placeholder="Your Message" required></textarea>
                        </div>
                     </div>
                     <div class="col-md-12">
                        <div class="form-group">
                           <button type="submit" class="tp-btn">Submit Message</button>
                        </div>
                     </div>
                  </div>
               </form>
            </div>
         </div>
      </div>
   </div>
</div>
</section>
<!-- contact area end here -->


<?php get_footer(); ?>