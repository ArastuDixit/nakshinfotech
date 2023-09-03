<?php



   global $wpdb;
   $table_name= $wpdb->prefix . "banner";
   $results=$wpdb->get_results("SELECT * FROM $table_name");
   
   // Loop through the results and output the data
   foreach ( $results as $result ) {
       $banner_image_url = $result['banner_image_url'];
       $title = $result['title'];
       $short_description = $result['short_description'];
       $sub_title = $result['sub_title'];
       $batch_no = $result['batch_no'];
       $location = $result['location'];
       $duration = $result['duration'];
       $schedule_meeting = $result['schedule_meeting'];
       $know_more = $result['know_more'];
       
   }
   
   
 $html_slider = "<section class=\"banner-section pt-0\">

   <div class=\"swiper-container swv\">

      <div class=\"swiper-wrapper\">

         <div class=\"swiper-slide\" data-swiper-autoplay=\"15000\">

            <div id=\"india-soft-banner\">

               <div class=\"india-soft-banner container\">

                  <div class=\"row row-1 text-left\">

                     <h1 class=\"w-100\">Indiasoft 2023</h1>

                     <p>It\"s time to make India the world\"s driving force of technology innovation. 

                        <br /> Technorizen Software Solutions Group is all set to meet you at a global business tech event.

                     </p>

                  </div>

                  <div class=\"row row-2 text-left\">

                     <h5>

                        <span>Meet Team Technorizen In New Delhi</span>

                     </h5>

                     <h4 class=\"text-white\">

                        <svg class=\"mr-2\" width=\"25\" height=\"25\" viewBox=\"0 0 700 700\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">

                           <path d=\"M303.334 223.651C321.902 223.651 339.703 216.276 352.834 203.146C365.959 190.021 373.334 172.214 373.334 153.651V105.001C373.334 101.907 372.105 98.9382 369.917 96.7507C367.73 94.5632 364.761 93.334 361.667 93.334C341.016 93.334 307.886 87.9695 302.052 76.4167C299.933 72.2188 295.5 69.7031 290.813 70.0364C286.125 70.3646 282.089 73.4791 280.584 77.9323C278.006 85.4635 273.245 92.063 266.912 96.8803C260.573 101.698 252.948 104.526 245 105C238.557 105 233.333 110.224 233.333 116.667V153.651C233.333 172.213 240.708 190.02 253.833 203.145C266.963 216.276 284.766 223.651 303.334 223.651ZM256.667 127.287V127.282C272.282 124.043 285.943 114.673 294.584 101.266C311.548 110.782 330.558 116.063 350 116.667V154.115C350 170.787 341.105 186.194 326.667 194.532C312.23 202.87 294.438 202.87 280 194.532C265.563 186.193 256.667 170.786 256.667 154.115V127.287Z\" fill=\"white\"/>

                           <path d=\"M688.334 314.998H595.001V291.665H676.667C679.761 291.665 682.73 290.436 684.917 288.248C687.105 286.061 688.334 283.092 688.334 279.998V151.665C688.334 148.571 687.105 145.602 684.917 143.415C682.73 141.227 679.761 139.998 676.667 139.998H490.001C483.558 139.998 478.334 145.222 478.334 151.665V279.998C478.334 283.092 479.563 286.061 481.751 288.248C483.938 290.435 486.907 291.665 490.001 291.665H571.667V314.998H455.001C452.464 283.378 435.173 254.801 408.334 237.883V104.998C408.334 67.4873 388.323 32.8207 355.834 14.066C323.345 -4.68867 283.323 -4.68867 250.834 14.066C218.345 32.8207 198.334 67.4873 198.334 104.998V237.883C171.719 254.93 154.657 283.482 152.251 314.998H128.334V291.665C128.334 288.571 127.105 285.602 124.917 283.415C122.73 281.227 119.761 279.998 116.667 279.998H115.032V274.165C115.006 264.654 111.651 255.451 105.563 248.143C99.4692 240.836 91.0216 235.888 81.6669 234.149V233.331C81.6669 226.888 76.4429 221.664 70.0003 221.664C63.5576 221.664 58.3336 226.888 58.3336 233.331V234.149C48.9795 235.888 40.5309 240.836 34.4376 248.143C28.3491 255.451 24.9949 264.654 24.9688 274.165V279.998H23.3333C16.8907 279.998 11.6667 285.222 11.6667 291.665V314.998C5.224 314.998 0 320.222 0 326.665V373.331C0 376.425 1.22917 379.394 3.41667 381.581C5.60416 383.769 8.57293 384.998 11.6667 384.998H23.3333V688.331C23.3333 691.425 24.5625 694.394 26.75 696.581C28.9375 698.769 31.9063 699.998 35 699.998H665C668.094 699.998 671.063 698.769 673.25 696.581C675.437 694.394 676.667 691.425 676.667 688.331V384.998H688.333C691.427 384.998 694.396 383.769 696.583 381.581C698.771 379.394 700 376.425 700 373.331V326.665C700 323.571 698.771 320.602 696.583 318.415C694.396 316.227 691.428 314.998 688.334 314.998ZM501.667 163.331H665.001V268.331H501.667V163.331ZM430.85 314.998H315.001V280.695C324.797 278.201 333.517 272.591 339.85 264.717L355.366 244.998C367.105 245.529 378.611 248.425 389.199 253.514C390.34 254.54 391.699 255.3 393.168 255.732C414.575 268.232 428.61 290.311 430.85 314.998ZM221.663 104.998C221.663 75.8207 237.231 48.862 262.497 34.274C287.762 19.686 318.898 19.686 344.163 34.274C369.429 48.862 384.997 75.8207 384.997 104.998V227.029C373.668 223.471 361.866 221.664 349.997 221.664C349.226 221.544 348.434 221.544 347.663 221.664C346.944 221.831 346.241 222.065 345.564 222.362C344.955 222.669 344.372 223.024 343.814 223.414L341.95 225.05L322.699 249.08H322.694C318.111 254.419 311.418 257.492 304.382 257.492C297.34 257.492 290.653 254.419 286.065 249.08L266.814 225.05L264.949 223.534L264.944 223.529C264.418 223.06 263.83 222.669 263.194 222.362C262.564 222.06 261.897 221.826 261.215 221.664C260.402 221.555 259.574 221.555 258.762 221.664H256.663C244.793 221.664 232.991 223.472 221.663 227.029L221.663 104.998ZM213.497 255.971C214.965 255.534 216.325 254.779 217.465 253.753C228.054 248.664 239.559 245.763 251.299 245.237L266.815 264.721C273.148 272.596 281.867 278.205 291.664 280.7V315.002H175.815C178.127 290.404 192.153 268.423 213.497 255.971ZM48.2965 274.169C48.2965 264.502 56.1299 256.669 65.7965 256.669H74.1976H74.1924C83.8591 256.669 91.6924 264.502 91.6924 274.169V280.002H48.2964L48.2965 274.169ZM34.9944 303.335H104.994V315.002H34.9944V303.335ZM653.328 676.669H46.6611V385.002H653.328V676.669ZM676.661 361.669H23.3277V338.335H676.661V361.669Z\" fill=\"white\"/>

                        </svg>

                        Booth No : C113

                     </h4>

                     <h4 class=\"text-white\">

                        <svg class=\"mr-2\" xmlns=\"http://www.w3.org/2000/svg\" width=\"25\" height=\"25\" fill=\"currentColor\" class=\"bi bi-geo-alt\" viewBox=\"0 0 16 16\">

                           <path d=\"M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z\"/>

                           <path d=\"M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z\"/>

                        </svg>

                        Pragati Maidan, New Delhi

                     </h4>

                     <h4 class=\"text-white\">

                        <svg class=\"mr-2\" xmlns=\"http://www.w3.org/2000/svg\" width=\"25\" height=\"25\" fill=\"currentColor\" class=\"bi bi-calendar2-check\" viewBox=\"0 0 16 16\">

                           <path d=\"M10.854 8.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L7.5 10.793l2.646-2.647a.5.5 0 0 1 .708 0z\"/>

                           <path d=\"M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM2 2a1 1 0 0 0-1 1v11a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V3a1 1 0 0 0-1-1H2z\"/>

                           <path d=\"M2.5 4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5H3a.5.5 0 0 1-.5-.5V4z\"/>

                        </svg>

                        27th March to 29th March 2023

                     </h4>

                     <div class=\"row row-2 text-left\">

                        <div class=\"d-flex mt-4 uk-ban\">

                           <div class=\"pull-left mr-20 mb-3\">

                              <a href=\"https://calendly.com/cdn-indiasoft/meet-us-at-indiasoft-new-delhi-india-2023\" target=\"_blank\" class=\"contactus\">Schedule a Meeting Now</a>

                           </div>

                           <div class=\"pull-left\">

                              <a href=\"/wp-assets/events/indiasoft-cdn-solution-group/index.html\" target=\"_blank\" class=\"ourwork2\">Know More</a>

                           </div>

                        </div>

                     </div>

                  </div>

               </div>

            </div>

         </div>

         <div class=\"swiper-slide\" data-swiper-autoplay=\"15000\">

            <div id=\"aus-banner\">

               <div class=\"aus-banner container\">

                  <div class=\"row row-1 text-left\">

                     <h1 class=\"w-100\">Australia Business Trip</h1>

                     <p>Australia, Are you ready to explore new tech innovations?

                        <br /> Embrace future-ready technology solutions to bring revolution to your industry.

                     </p>

                  </div>

                  <div class=\"row row-2 text-left\">

                     <h5>

                        <span>Meet Team Technorizen In Australia</span>

                     </h5>

                     <h4 class=\"text-white\">

                        <svg class=\"mr-2\" xmlns=\"http://www.w3.org/2000/svg\" width=\"25\" height=\"25\" fill=\"currentColor\" class=\"bi bi-geo-alt\" viewBox=\"0 0 16 16\">

                           <path d=\"M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z\"/>

                           <path d=\"M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z\"/>

                        </svg>

                        Sydney - Melbourne - Adelaide - Brisbane

                     </h4>

                     <h4 class=\"text-white\">

                        <svg class=\"mr-2\" xmlns=\"http://www.w3.org/2000/svg\" width=\"25\" height=\"25\" fill=\"currentColor\" class=\"bi bi-calendar2-check\" viewBox=\"0 0 16 16\">

                           <path d=\"M10.854 8.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L7.5 10.793l2.646-2.647a.5.5 0 0 1 .708 0z\"/>

                           <path d=\"M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM2 2a1 1 0 0 0-1 1v11a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V3a1 1 0 0 0-1-1H2z\"/>

                           <path d=\"M2.5 4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5H3a.5.5 0 0 1-.5-.5V4z\"/>

                        </svg>

                        10th April to 20th April 2023

                     </h4>

                     <div class=\"row row-2 text-left\">

                        <div class=\"d-flex mt-4 uk-ban\">

                           <div class=\"pull-left mr-20 mb-3\">

                              <a href=\"https://calendly.com/business-trip/australia?month=2023-04\" target=\"_blank\" class=\"contactus\">Schedule a Meeting Now</a>

                           </div>

                           <div class=\"pull-left\">

                              <a href=\"/wp-assets/events/au/index.html\" target=\"_blank\" class=\"ourwork2\">Know More</a>

                           </div>

                        </div>

                     </div>

                  </div>

               </div>

            </div>

         </div>

         <div class=\"swiper-slide\" data-swiper-autoplay=\"20000\">

            <div class=\"over-lay\"></div>

            <!-- <div id=\"banner-video-wrapper\">

               <video id=\"video\" autoplay=\"autoplay\" unmuted=\"true\" loop>

                  <source src=\"/wp-assets/video/banner-video1.mp4\" type=\"video/mp4\">

                  <source src=\"/wp-assets/video/banner-video1.mp4.ogg\" type=\"video/ogg\">

               </video>

               </div> -->

            <!-- <div class=\"cd-video-controls\">

               <button type=\"button\" id=\"video-play-button\" class=\"cd-video-icons\"></button>

               <button class=\"mute-bt cd-video-icons\"></button>

               </div> -->

            <div id=\"slider_1\">

               <div class=\"slider_1 container\">

                  <div class=\"row\">

                     <div class=\"row-1 text-left mb-0\">

                        <h1>We Help You To</h1>

                        <div class=\"type-wrap\">

                           <div id=\"typed-strings\">

                              <span>Create Future.</span>

                              <span>Make Life Easier.</span>

                              <!--  <span>Uplift Your Business.</span>

                                 <span>Deliver Beyond Expectation.</span> -->

                              <!-- <span>Imagine Possibilities.</span> -->

                              <span>Inspire The Next.</span>

                           </div>

                           <span id=\"typed\" style=\"white-space: pre;\"></span>

                        </div>

                     </div>

                  </div>

                  <div class=\"row row-1\">

                     <div class=\"w-50\">

                        <p class=\"text-left\">We are shaping your dreams into reality as your dreams are special to us. We develop apps, website and software in your budget & as per your timeline.</p>

                     </div>

                  </div>

                  <div class=\"row hide-banner-icon justify-content-around mb-2\">

                     <div>

                        <img src=\"/wp-assets/images/aiml-micon.svg\" alt=\"\" />

                     </div>

                     <div>

                        <img src=\"/wp-assets/images/blockchain-micon.svg\" alt=\"\" />

                     </div>

                     <div>

                        <img src=\"/wp-assets/images/prototype-micon.svg\" alt=\"\" />

                     </div>

                     <div>

                        <img src=\"/wp-assets/images/uiux-micon.svg\" alt=\"\" />

                     </div>

                     <div>

                        <img src=\"/wp-assets/images/mobile-apps-micon.svg\" alt=\"\" />

                     </div>

                  </div>

                  <div class=\"row hide-banner-icon justify-content-around\">

                     <div>

                        <img src=\"/wp-assets/images/software-micon.svg\" alt=\"\" />

                     </div>

                     <div>

                        <img src=\"/wp-assets/images/arvr-micon.svg\" alt=\"\" />

                     </div>

                     <div>

                        <img src=\"/wp-assets/images/cloud-micon.svg\" alt=\"\" />

                     </div>

                     <div>

                        <img src=\"/wp-assets/images/wbsite-micon.svg\" alt=\"\" />

                     </div>

                     <div>

                        <img src=\"/wp-assets/images/iot-micon.svg\" alt=\"\" />

                     </div>

                  </div>

                  <div class=\"row row-2 text-left bottom-banner-button w-100\">

                     <div class=\"d-flex mt-4\">

                        <div class=\"pull-left mr-20\">

                           <a href=\"/wp-assets/contact.html\" class=\"contactus\">Contact Us</a>

                        </div>

                        <div class=\"pull-left\">

                           <a href=\"/wp-assets/our-work.html\" class=\"ourwork2\">Our Work</a>

                        </div>

                     </div>

                  </div>

               </div>

               <div class=\"banner-shape position-absolute\">

                  <div class=\"banner-hexa\">

                     <div class=\"icons-hexa icons-hexa-1\"><img src=\"/wp-assets/images/website.svg\" alt=\"icons\" />

                     </div>

                     <div class=\"icons-hexa icons-hexa-2\"><img src=\"/wp-assets/images/mobile_app.svg\" alt=\"icons\" />

                     </div>

                     <div class=\"icons-hexa icons-hexa-3\"><img src=\"/wp-assets/images/software.svg\" alt=\"icons\" />

                     </div>

                     <div class=\"icons-hexa icons-hexa-4\"><img src=\"/wp-assets/images/prototype.svg\" alt=\"icons\" />

                     </div>

                     <div class=\"icons-hexa icons-hexa-5\"><img src=\"/wp-assets/images/cloud.svg\" alt=\"icons\" />

                     </div>

                     <div class=\"icons-hexa icons-hexa-6\"><img src=\"/wp-assets/images/ai_ml.svg\" alt=\"icons\" />

                     </div>

                     <div class=\"icons-hexa icons-hexa-7\"><img src=\"/wp-assets/images/blockchain.svg\" alt=\"icons\" />

                     </div>

                     <div class=\"icons-hexa icons-hexa-8\"><img src=\"/wp-assets/images/ar_vr.svg\" alt=\"icons\" />

                     </div>

                     <div class=\"icons-hexa icons-hexa-9\"><img src=\"/wp-assets/images/iot.svg\" alt=\"icons\" />

                     </div>

                     <div class=\"icons-hexa icons-hexa-10\"><img src=\"/wp-assets/images/ui_ux.svg\" alt=\"icons\" />

                     </div>

                  </div>

               </div>

               <svg class=\"svg-banner\" xmlns=\"http://www.w3.org/2000/svg\" x=\"0px\" y=\"0px\" viewBox=\"0 0 288 288\">

                  <linearGradient id=\"PSgrad_0\" x1=\"70.711%\" x2=\"0%\" y1=\"70.711%\" y2=\"0%\">

                     <stop offset=\"0%\" stop-color=\"rgb(237 32 123 / 5%)\" stop-opacity=\"1\" />

                     <stop offset=\"100%\" stop-color=\"rgb(0 175 239 / 5%)\" stop-opacity=\"1\" />

                  </linearGradient>

                  <path fill=\"url(#PSgrad_0)\">

                     <animate repeatCount=\"indefinite\" attributeName=\"d\" dur=\"5s\"

                        values=\"M37.5,186c-12.1-10.5-11.8-32.3-7.2-46.7c4.8-15,13.1-17.8,30.1-36.7C91,68.8,83.5,56.7,103.4,45 c22.2-13.1,51.1-9.5,69.6-1.6c18.1,7.8,15.7,15.3,43.3,33.2c28.8,18.8,37.2,14.3,46.7,27.9c15.6,22.3,6.4,53.3,4.4,60.2 c-3.3,11.2-7.1,23.9-18.5,32c-16.3,11.5-29.5,0.7-48.6,11c-16.2,8.7-12.6,19.7-28.2,33.2c-22.7,19.7-63.8,25.7-79.9,9.7 c-15.2-15.1,0.3-41.7-16.6-54.9C63,186,49.7,196.7,37.5,186z; M51,171.3c-6.1-17.7-15.3-17.2-20.7-32c-8-21.9,0.7-54.6,20.7-67.1c19.5-12.3,32.8,5.5,67.7-3.4C145.2,62,145,49.9,173,43.4 c12-2.8,41.4-9.6,60.2,6.6c19,16.4,16.7,47.5,16,57.7c-1.7,22.8-10.3,25.5-9.4,46.4c1,22.5,11.2,25.8,9.1,42.6 c-2.2,17.6-16.3,37.5-33.5,40.8c-22,4.1-29.4-22.4-54.9-22.6c-31-0.2-40.8,39-68.3,35.7c-17.3-2-32.2-19.8-37.3-34.8 C48.9,198.6,57.8,191,51,171.3z; M37.5,186c-12.1-10.5-11.8-32.3-7.2-46.7c4.8-15,13.1-17.8,30.1-36.7C91,68.8,83.5,56.7,103.4,45 c22.2-13.1,51.1-9.5,69.6-1.6c18.1,7.8,15.7,15.3,43.3,33.2c28.8,18.8,37.2,14.3,46.7,27.9c15.6,22.3,6.4,53.3,4.4,60.2 c-3.3,11.2-7.1,23.9-18.5,32c-16.3,11.5-29.5,0.7-48.6,11c-16.2,8.7-12.6,19.7-28.2,33.2c-22.7,19.7-63.8,25.7-79.9,9.7 c-15.2-15.1,0.3-41.7-16.6-54.9C63,186,49.7,196.7,37.5,186z  \" />

                  </path>

               </svg>

            </div>

         </div>

         <div class=\"swiper-slide\" data-swiper-autoplay=\"15000\">

            <div id=\"slider_2\">

               <div class=\"slider_2 container\">

                  <div class=\"row row-1 text-left\">

                     <h1 class=\"w-100\">Software Development Company</h1>

                     <p>Leverage our 22+ years of experience in developing top-notched custom software solutions and make your organization future-ready.

                     </p>

                  </div>

                  <div class=\"row row-2 text-left\">

                     <h5>Services</h5>

                     <div class=\"row icons\">

                        <div class=\"icons-tech d-flex align-items-center\">

                           <div class=\"icon-img\"><img src=\"/wp-assets/images/hc-soft-cons.svg\" alt=\"Software Consulting\">

                           </div>

                           <div>Software Consulting</div>

                        </div>

                        <div class=\"icons-tech d-flex align-items-center\">

                           <div class=\"icon-img\"><img src=\"/wp-assets/images/hc-erp.svg\" alt=\"ERP\">

                           </div>

                           <div>ERP</div>

                        </div>

                        <!-- </div>

                           <div class=\"row icons\"> -->

                        <div class=\"icons-tech d-flex align-items-center\">

                           <div class=\"icon-img\"><img src=\"/wp-assets/images/hc-qa.svg\" alt=\"QA & Testing<\">

                           </div>

                           <div> QA & Testing</div>

                        </div>

                        <div class=\"icons-tech d-flex align-items-center\">

                           <div class=\"icon-img\"><img src=\"/wp-assets/images/hc-uxpin.svg\" alt=\"UX/UI Design\">

                           </div>

                           <div>UX/UI Design</div>

                        </div>

                     </div>

                     <div class=\"row row-2 text-left w-100\">

                        <div class=\"d-flex mt-4\">

                           <div class=\"pull-left mr-20\">

                              <a href=\"/wp-assets/contact.html\" class=\"contactus\">Contact Us</a>

                           </div>

                           <div class=\"pull-left\">

                              <a href=\"/wp-assets/our-work.html\" class=\"ourwork2\">Our Work</a>

                           </div>

                        </div>

                     </div>

                  </div>

               </div>

            </div>

         </div>

         <div class=\"swiper-slide\" data-swiper-autoplay=\"15000\">

            <div id=\"slider_3\">

               <div class=\"slider_3 container\">

                  <div class=\"row row-1 text-left\">

                     <h1 class=\"w-100\">Mobile App Development</h1>

                     <p>We provide scalable mobile app development solutions that add value to your business and make it the driving force of your business.

                     </p>

                  </div>

                  <div class=\"row row-2 text-left\">

                     <h5>Services</h5>

                     <div class=\"row icons\">

                        <div class=\"icons-tech d-flex align-items-center\">

                           <div class=\"icon-img\"><img src=\"/wp-assets/images/hc-ios.svg\" alt=\"iOS\">

                           </div>

                           <div>iOS</div>

                        </div>

                        <div class=\"icons-tech d-flex align-items-center\">

                           <div class=\"icon-img\"><img src=\"/wp-assets/images/hc-android.svg\" alt=\"Android\">

                           </div>

                           <div>Android</div>

                        </div>

                        <div class=\"icons-tech d-flex align-items-center\">

                           <div class=\"icon-img\"><img src=\"/wp-assets/images/hc-xamrin.svg\" alt=\"Xamrin\">

                           </div>

                           <div>Xamarin</div>

                        </div>

                        <!-- </div>

                           <div class=\"row icons\"> -->

                        <div class=\"icons-tech d-flex align-items-center\">

                           <div class=\"icon-img\"><img src=\"/wp-assets/images/hc-reactnative.svg\" alt=\"React Native\">

                           </div>

                           <div>React Native</div>

                        </div>

                        <div class=\"icons-tech d-flex align-items-center\">

                           <div class=\"icon-img\"><img src=\"/wp-assets/images/hc-phonegape.svg\" alt=\"Cross Platform\">

                           </div>

                           <div>Cross Platform</div>

                        </div>

                     </div>

                     <div class=\"row row-2 text-left w-100\">

                        <div class=\"d-flex mt-4\">

                           <div class=\"pull-left mr-20\">

                              <a href=\"/wp-assets/contact.html\" class=\"contactus\">Contact Us</a>

                           </div>

                           <div class=\"pull-left\">

                              <a href=\"/wp-assets/our-work.html\" class=\"ourwork2\">Our Work</a>

                           </div>

                        </div>

                     </div>

                  </div>

               </div>

            </div>

         </div>

         <div class=\"swiper-slide\" data-swiper-autoplay=\"15000\">

            <div id=\"slider_4\">

               <div class=\"slider_4 container\">

                  <div class=\"row row-1 text-left\">

                     <h1 class=\"w-100\">Web Design and Development</h1>

                     <p>Avail easy navigation and a seamless user experience with our web solutions to bridge the gap between you and your customer.</p>

                  </div>

                  <div class=\"row row-2 text-left\">

                     <h5>Services</h5>

                     <div class=\"row icons\">

                        <div class=\"icons-tech d-flex align-items-center\">

                           <div class=\"icon-img\"><img src=\"/wp-assets/images/hc-angularjs.svg\" alt=\"AngularJS\">

                           </div>

                           <div>AngularJS</div>

                        </div>

                        <div class=\"icons-tech d-flex align-items-center\">

                           <div class=\"icon-img\"><img src=\"/wp-assets/images/hc-python.svg\" alt=\"Python\">

                           </div>

                           <div>Python</div>

                        </div>

                        <div class=\"icons-tech d-flex align-items-center\">

                           <div class=\"icon-img\"><img src=\"/wp-assets/images/hc-php.svg\" alt=\"PHP\">

                           </div>

                           <div>PHP</div>

                        </div>

                        <!-- </div>

                           <div class=\"row icons\"> -->

                        <div class=\"icons-tech d-flex align-items-center\">

                           <div class=\"icon-img\"><img src=\"/wp-assets/images/hc-reactjs.svg\" alt=\"ReactJS\">

                           </div>

                           <div>ReactJS</div>

                        </div>

                        <div class=\"icons-tech d-flex align-items-center\">

                           <div class=\"icon-img\"><img src=\"/wp-assets/images/hc-ror.svg\" alt=\"ROR\">

                           </div>

                           <div>ROR</div>

                        </div>

                        <div class=\"icons-tech d-flex align-items-center\">

                           <div class=\"icon-img\"><img src=\"/wp-assets/images/hc-java.svg\" alt=\"Java\">

                           </div>

                           <div>Java</div>

                        </div>

                     </div>

                     <div class=\"row row-2 text-left w-100\">

                        <div class=\"d-flex mt-4\">

                           <div class=\"pull-left mr-20\">

                              <a href=\"/wp-assets/contact.html\" class=\"contactus\">Contact Us</a>

                           </div>

                           <div class=\"pull-left\">

                              <a href=\"/wp-assets/our-work.html\" class=\"ourwork2\">Our Work</a>

                           </div>

                        </div>

                     </div>

                  </div>

               </div>

            </div>

         </div>

         <div class=\"swiper-slide\" data-swiper-autoplay=\"15000\">

            <div id=\"slider_5\">

               <div class=\"slider_5 container\">

                  <div class=\"row row-1 text-left\">

                     <h1 class=\"w-100\">IT Consultancy</h1>

                     <p>Avail IT Consultation for emerging technologies with the help of which you can boost business productivity.</p>

                  </div>

                  <div class=\"row row-2 text-left\">

                     <h5>Services</h5>

                     <div class=\"row icons\">

                        <div class=\"icons-tech d-flex align-items-center\">

                           <div class=\"icon-img\"><img src=\"/wp-assets/images/hc-blockchain.svg\" alt=\"Blockchain\">

                           </div>

                           <div>Blockchain</div>

                        </div>

                        <div class=\"icons-tech d-flex align-items-center\">

                           <div class=\"icon-img\"><img src=\"/wp-assets/images/hc-ibeacon.svg\" alt=\"iBeacon\">

                           </div>

                           <div>iBeacon</div>

                        </div>

                        <div class=\"icons-tech d-flex align-items-center\">

                           <div class=\"icon-img\"><img src=\"/wp-assets/images/hc-iot.svg\" alt=\"IoT\">

                           </div>

                           <div>IoT</div>

                        </div>

                        <!-- </div>

                           <div class=\"row icons\"> -->

                        <div class=\"icons-tech d-flex align-items-center\">

                           <div class=\"icon-img\"><img src=\"/wp-assets/images/hc-arvr.svg\" alt=\"AR/VR\">

                           </div>

                           <div>AR/VR</div>

                        </div>

                        <div class=\"icons-tech d-flex align-items-center\">

                           <div class=\"icon-img\"><img src=\"/wp-assets/images/hc-cloudc.svg\" alt=\"Cloud Computing\">

                           </div>

                           <div>Cloud Computing</div>

                        </div>

                     </div>

                     <div class=\"row row-2 text-left w-100\">

                        <div class=\"d-flex mt-4\">

                           <div class=\"pull-left mr-20\">

                              <a href=\"/wp-assets/contact.html\" class=\"contactus\">Contact Us</a>

                           </div>

                           <div class=\"pull-left\">

                              <a href=\"/wp-assets/our-work.html\" class=\"ourwork2\">Our Work</a>

                           </div>

                        </div>

                     </div>

                  </div>

               </div>

            </div>

         </div>

         <div class=\"swiper-slide\" data-swiper-autoplay=\"15000\">

            <div id=\"slider_6\">

               <div class=\"slider_6 container\">

                  <div class=\"row row-1 text-left\">

                     <h1 class=\"w-100\">E-commerce Development</h1>

                     <p>We provide an entire suite of E-commerce development solutions for various business models to boost conversion.

                     </p>

                  </div>

                  <div class=\"row row-2 text-left\">

                     <h5>Services</h5>

                     <div class=\"row icons\">

                        <div class=\"icons-tech col-md-6 d-flex align-items-center\">

                           <div class=\"icon-img\"><img src=\"/wp-assets/images/android.svg\" alt=\"Magento\">

                           </div>

                           <div>Magento</div>

                        </div>

                        <div class=\"icons-tech col-md-6 d-flex align-items-center\">

                           <div class=\"icon-img\"><img src=\"/wp-assets/images/hc-cartd.svg\" alt=\"Cart Development\">

                           </div>

                           <div>Cart Development</div>

                        </div>

                        <div class=\"icons-tech col-12 d-flex align-items-center\">

                           <div class=\"icon-img\"><img src=\"/wp-assets/images/hc-cpmd.svg\" alt=\"Custom Plug-in & Module Development\">

                           </div>

                           <div class=\"ban-icon\">Custom Plug-in & Module Development</div>

                        </div>

                        <!-- </div>

                           <div class=\"row icons\"> -->

                        <div class=\"icons-tech col-12 d-flex align-items-center\">

                           <div class=\"icon-img\"><img src=\"/wp-assets/images/hc-pgi.svg\" alt=\"Python Gateway Integration\">

                           </div>

                           <div>Python Gateway Integration</div>

                        </div>

                     </div>

                     <div class=\"row row-2 text-left w-100\">

                        <div class=\"d-flex mt-4\">

                           <div class=\"pull-left mr-20\">

                              <a href=\"/wp-assets/contact.html\" class=\"contactus\">Contact Us</a>

                           </div>

                           <div class=\"pull-left\">

                              <a href=\"/wp-assets/our-work.html\" class=\"ourwork2\">Our Work</a>

                           </div>

                        </div>

                     </div>

                  </div>

               </div>

            </div>

         </div>

         <div class=\"swiper-slide\" data-swiper-autoplay=\"15000\">

            <div id=\"slider_7\">

               <div class=\"slider_7 container\">

                  <div class=\"row row-1 text-left\">

                     <h1 class=\"w-100\">Ongoing Solutions</h1>

                     <p>We identify and forestall problems before they may affect your business processes. Stay agile with us.

                     </p>

                  </div>

                  <div class=\"row row-2 text-left\">

                     <h5>Services</h5>

                     <div class=\"row icons\">

                        <div class=\"icons-tech d-flex align-items-center\">

                           <div class=\"icon-img\"><img src=\"/wp-assets/images/hc-support.svg\" alt=\"Bug fixes\">

                           </div>

                           <div>Bug fixes</div>

                        </div>

                        <div class=\"icons-tech d-flex align-items-center\">

                           <div class=\"icon-img\"><img src=\"/wp-assets/images/hc-support1.svg\" alt=\"Enhancements\">

                           </div>

                           <div>Enhancements</div>

                        </div>

                        <div class=\"icons-tech d-flex align-items-center\">

                           <div class=\"icon-img\"><img src=\"/wp-assets/images/hc-support2.svg\" alt=\"MIS Report\">

                           </div>

                           <div>MIS Report</div>

                        </div>

                        <!-- </div>

                           <div class=\"row icons\"> -->

                        <div class=\"icons-tech  d-flex align-items-center\">

                           <div class=\"icon-img\"><img src=\"/wp-assets/images/hc-support.svg\" alt=\"android\">

                           </div>

                           <div>Support</div>

                        </div>

                        <div class=\"icons-tech  d-flex align-items-center\">

                           <div class=\"icon-img\"><img src=\"/wp-assets/images/hc-support1.svg\" alt=\"Migrations/Porting\">

                           </div>

                           <div>Migrations/Porting</div>

                        </div>

                        <div class=\"icons-tech  d-flex align-items-center\">

                           <div class=\"icon-img\"><img src=\"/wp-assets/images/hc-support2.svg\" alt=\"Root Cause Analysis\">

                           </div>

                           <div>Root Cause Analysis</div>

                        </div>

                        <!-- </div>

                           <div class=\"row icons\"> -->

                        <div class=\"icons-tech w-75 d-flex align-items-center\">

                           <div class=\"icon-img\"><img src=\"/wp-assets/images/hc-support.svg\" alt=\"Technical, Functional & Operational Support\">

                           </div>

                           <div class=\"ban-icon\">Technical, Functional & Operational Support</div>

                        </div>

                     </div>

                     <div class=\"row row-2 text-left w-100\">

                        <div class=\"d-flex mt-4\">

                           <div class=\"pull-left mr-20\">

                              <a href=\"/wp-assets/contact.html\" class=\"contactus\">Contact Us</a>

                           </div>

                           <div class=\"pull-left\">

                              <a href=\"/wp-assets/our-work.html\" class=\"ourwork2\">Our Work</a>

                           </div>

                        </div>

                     </div>

                  </div>

               </div>

            </div>

         </div>

         <!-- <a href=\"#why-choose\" id=\"mouse\" class=\"mouse\">

            <div><img src=\"/wp-assets/images/down_arrow.png\" class=\"m-auto\" alt=\"Scroll\" /></div>

            <div><span>Scroll</span></div>

            </a>-->

      </div>

      <div class=\"swiper-pagination swiper-pagV\"></div>

   </div>

   <div class=\"swiper-pagination swiper-pagV\"></div>

</section>";



?>