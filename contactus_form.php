<?php
require("./partials/header.php");
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

     <div class="container" width="500px">
          <center>
               <h3>Get In Touch</h3>
          </center>
          <form action="#" class="col-md-6">
               <div class="row form-group">
                    <div class="col-md-6">
                         <!-- <label for="fname">First Name</label> -->
                         <input type="text" id="fname" class="form-control" placeholder="Your firstname" />
                    </div>
                    <div class="col-md-6">
                         <!-- <label for="lname">Last Name</label> -->
                         <input type="text" id="lname" class="form-control" placeholder="Your lastname" />
                    </div>
               </div>

               <div class="row form-group">
                    <div class="col-md-12">
                         <!-- <label for="email">Email</label> -->
                         <input type="text" id="email" class="form-control" placeholder="Your email address" />
                    </div>
               </div>

               <div class="row form-group">
                    <div class="col-md-12">
                         <!-- <label for="subject">Subject</label> -->
                         <input type="text" id="subject" class="form-control"
                              placeholder="Your subject of this message" />
                    </div>
               </div>

               <div class="row form-group">
                    <div class="col-md-12">
                         <!-- <label for="message">Message</label> -->
                         <textarea name="message" id="message" cols="30" rows="10" class="form-control"
                              placeholder="Say something about us"></textarea>
                    </div>
               </div>
               <div class="form-group col-md-12">
                    <input type="submit" value="Send Message" class="btn btn-primary col-md-6" />
                    <a href="contact.php"><input type="button" value="Exit" class="btn btn-danger col-md-6" /></a>
               </div>
          </form>
     </div>
</div>
</div>

<?php
require("./partials/footer.php");
?>