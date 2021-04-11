
    <!-- Start Hero Seciton -->
    <div class="st-hero-wrap st-gray-bg st-dynamic-bg overflow-hidden st-fixed-bg" data-src="assets/img/hero-bg.jpg">
        <div class="st-hero st-style1">
          <div class="container">
            <div class="st-hero-text">
              <div class="st-height-b40 st-height-lg-b40"></div>
              <h1 class="st-hero-title cd-headline slide">
                With Medica Recruit <br>
                Everything is 
                <span class="cd-words-wrapper">
                  <b class="is-visible">Easy.</b>
                  <b>Quickly.</b>
                  <b>Comfortable.</b>
                 
                  
                </span>
              </h1>
  
            </div>
          </div>
          <div class="st-hero-social-group">
            <div class="container">
              <ul class="st-social-btn st-style1 st-mp0">
                <li><a href="https://www.facebook.com/"><i class="fab fa-facebook-square"></i></a></li>
                <li><a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a></li>
                <li><a href="https://www.youtube.com/"><i class="fab fa-youtube"></i></a></li>
                
              </ul>
            </div>
          </div>
        </div>
        <div class="st-slider st-style1 st-hero-slider1" id="home">
          <div class="slick-container" data-autoplay="1" data-loop="1" data-speed="800" data-autoplay-timeout="1000"
            data-center="0" data-slides-per-view="1" data-fade-slide="1">
            <div class="slick-wrapper">
              <div class="slick-slide-in">
                <div class="st-hero-img">
                  <img src="assets/img/hero-img.png" alt="Hero img">
                </div>
              </div>
              <div class="slick-slide-in">
                <div class="st-hero-img">
                  <img src="assets/img/hero-img1.png" alt="Hero img">
                </div>
              </div>
              <div class="slick-slide-in">
                <div class="st-hero-img">
                  <img src="assets/img/hero-img2.png" alt="Hero img">
                </div>
              </div>
            </div>
          </div><!-- .slick-container -->
          <div class="pagination st-style1 container"></div> <!-- If dont need Pagination then add class .st-hidden -->
          <div class="swipe-arrow st-style1 st-hidden">
            <!-- If dont need navigation then add class .st-hidden -->
            <div class="slick-arrow-left"><i class="fa fa-angle-left"></i></div>
            <div class="slick-arrow-right"><i class="fa fa-angle-right"></i></div>
          </div>
        </div><!-- .st-slider -->
        <div class="st-hero-shape"><img src="assets/img/shape/hero-shape.png" alt="hero shape"></div>
      </div>
      <!-- End Hero Seciton -->
<?php
      if(isset($_GET['p']) && $_GET['p']=="candidat") 
      echo"<style>
      #vues
      {
        background-image:url('assets/img/bg14.jpg');
        background-size:cover;
        
      }
      </style>";
      else
      echo"<style>
      #vues
      {
      background-image: url('assets/img/before-after-bg.jpg');
      background-size: cover;
     }
     </style>";
?>     