<?php
require_once("./partials/header.php");

?>
<div id="page">
     <nav class="fh5co-nav" role="navigation">
          <div class="top">
               <div class="container">
                    <div class="row">
                         <div class="col-xs-12 text-right">
                              <p class="site">www.educare.com</p>
                              <p class="num">Call: +01 123 456 7890</p>
                              <ul class="fh5co-social">
                                   <li><a href="www.facebook.com"><i class="icon-facebook2"></i></a></li>
                                   <li><a href="www.twitter.com"><i class="icon-twitter2"></i></a></li>
                                   <li><a href="www.dribble.com"><i class="icon-dribbble2"></i></a></li>
                                   <li><a href="www.github.com"><i class="icon-github"></i></a></li>
                              </ul>
                         </div>
                    </div>
               </div>
          </div>
          <div class="top-menu">
               <div class="container">
                    <div class="row">
                         <div class="col-xs-2">

                              <a href="index.php">
                                   <img src="./images/logo.png" width="70px" alt="">
                              </a>
                         </div>

                         <div class="col-xs-10 text-right menu-1">
                              <ul>
                                   <li><a href="welcome.php">Home</a></li>
                                   <li><a href="about.php">About Us</a></li>
                                   <li><a href="course.php">Courses</a></li>
                                   <li><a href="teacher.php">Teacher</a></li>
                                   <li><a href="primary.php">Primary</a></li>
                                   <li><a href="secondary.php">Secondary</a></li>
                                   <li><a href="blog.php">Summer Programs</a></li>
                                   <li class="active"><a href="contact.php">Contact</a></li>
                                   <li class="btn-cta"><a href="index.php"><span>Login</span></a></li>
                                   <li class="btn-cta"><a href="register.php"><span>Register</span></a></li>
                              </ul>
                         </div>
                    </div>

               </div>
          </div>
     </nav>

     <aside id="fh5co-hero">
          <div class="flexslider">
               <ul class="slides">
                    <li style="background-image: url(./images/SliderPhotos/slider1.jpg);">
                         <div class="overlay-gradient"></div>
                         <div class="container">
                              <div class="row">
                                   <div class="col-md-8 col-md-offset-2 text-center slider-text">
                                        <div class="slider-text-inner">
                                             <h1>The Roots of Education are Bitter, But the Fruit is Sweet</h1>
                                             <p><a class="btn btn-primary btn-lg" href="#">Start Learning Now!</a>
                                             </p>
                                        </div>
                                   </div>
                              </div>
                         </div>
                    </li>
                    <li style="background-image: url(./images/SliderPhotos/slider2.jpg);">
                         <div class="overlay-gradient"></div>
                         <div class="container">
                              <div class="row">
                                   <div class="col-md-8 col-md-offset-2 text-center slider-text">
                                        <div class="slider-text-inner">
                                             <h1>The Great Aim of Education is not Knowledge, But Action</h1>
                                             <p><a class="btn btn-primary btn-lg btn-learn" href="#">Start Learning
                                                       Now!</a></p>
                                        </div>
                                   </div>
                              </div>
                         </div>
                    </li>
                    <li style="background-image: url(./images/SliderPhotos/slider3.jpg);">
                         <div class="overlay-gradient"></div>
                         <div class="container">
                              <div class="row">
                                   <div class="col-md-8 col-md-offset-2 text-center slider-text">
                                        <div class="slider-text-inner">
                                             <h1>We Help You to Learn New Things</h1>
                                             <p><a class="btn btn-primary btn-lg btn-learn" href="#">Start Learning
                                                       Now!</a></p>
                                        </div>
                                   </div>
                              </div>
                         </div>
                    </li>
               </ul>
          </div>
     </aside>

     <div id="fh5co-contact">
          <div class="container">
               <div class="row">
                    <div class="col-md-3 col-md-push-1 animate-box">
                         <div class="fh5co-contact-info">
                              <h3>Contact Information</h3>
                              <ul>
                                   <li class="address">
                                        No ( 3 ), Chan Mya Yate Mon Street, <br /> Bahan Township, Yangon, Myanmar.

                                   </li>
                                   <li class="phone"><a href="tel://1234567920">+ +95 9742110221, 01 211 4321</a></li>
                                   <li class="email">
                                        <a href="mailto:info@yoursite.com">info@educaremm.com</a>
                                   </li>
                              </ul>
                         </div>
                    </div>
                    <br>

               </div>
               <div class="contact-btn">
                    <button class="btn btn-dark"><a href="contactus_form.php">To Contact Us Form</a></button>
               </div>
          </div>
     </div>
     <!-- <div id="map" class="fh5co-map"></div> -->

</div>

<?php
require("./partials/footer.php");
?>