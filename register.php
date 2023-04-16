<?php
include "dbconfig.php";
?>

<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>PATO | pricing</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" href="css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
   </head>
   <!-- body -->
   <body class="main-layout">
      <!-- loader  -->
      <!-- <div class="loader_bg">
         <div class="loader"><img src="images/loading.gif" alt="#"/></div>
      </div> -->
      <!-- end loader -->
      <!-- header -->
      <header class="sticky-top fixed-top">
         <!-- header inner -->
         <div class="header">
            <div class="container-fluid">
               <div class="row">
                  <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                     <div class="full">
                        <div class="center-desk">
                           <div class="logo">
                              <a href="index.html"><img src="images/logo.png" alt="#" /></a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-7 col-lg-7 col-md-9 col-sm-9">
                     <nav class="navigation navbar navbar-expand-md navbar-dark ">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarsExample04">
                           <ul class="navbar-nav mr-auto">
                              <li class="nav-item ">
                                 <a class="nav-link" href="index.html">Home</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="about.html">About</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="we-do.html">Services</a>
                              </li>
                              <li class="nav-item active">
                                 <a class="nav-link" href="pricing.html">Invest</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="contact.html">Contact Us</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="signin.php">User</a>
                              </li>
                           </ul>
                        </div>
                     </nav>
                  </div>
                  <div class="col-md-2">
                     <ul class="social_icon">
                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="https://twitter.com/PatoSpace2?t=x3U5COBgivHGoustWfWCtQ&s=08"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                        <li><a href="https://instagram.com/patospace_101?igshid=ZDdkNTZiNTM="><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </header>
      <!-- end header inner -->
      <!-- end header -->
      <!-- banner -->
      <div class="back_re">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="title">
                     <h2>register here</h2>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- our pricing -->
      <div  class="pricing slin">
         <div class="container">
            <div class="container-fluid text-center col-xl-6 col-lg-6">
              <!-- <div class="text-center col-xl-6 col-lg-6 "> -->
           
               <form method="post" action="process_registration.php">
                    <div class=" mb-4">
                      <div class="form-outline">
                        <input type="text" id="first_name" name="first_name" placeholder="First Name" class="form-control" />
                        <!-- <label class="form-label"  for="firstName">First Name</label> -->
                      </div>
                    </div>

                    <!-- <div class=" mb-4">
                      <div class="form-outline">
                        <input type="text" id="midName" placeholder="Middle Name" class="form-control" />
                        <label class="form-label"  for="firstName">First Name</label>
                      </div>
                    </div> -->

                    <div class=" mb-4">
                      <div class="form-outline">
                        <input type="text" id="surname" name="surname"  placeholder="Surname" class="form-control" />
                        <!-- <label class="form-label" for="lastName">Last Name</label> -->
                      </div>
                    </div>

                    <div class=" mb-4">
                      <div class="form-outline datepicker">
                        <input type="text" class="form-control" id="dob" name="dob" placeholder="Birthday date"/>
                        <!-- <label for="birthdayDate" class="form-label">Birthday</label> -->
                      </div>
                    </div>

                    <div class="justify-content-center text-center  mb-4">
                        <label for="gender" class="form-label" id="gender" >Choose Gender</label>
                           <div class=" form-check-inline">
                              <label class="form-check-label" for="inlineCheckbox1">
                                 <input class="form-check-input" type="radio" id="inlineCheckbox1" name="gender" value="male">
                                 male</label>

                              <label class="form-check-label" for="inlineCheckbox2">
                                 <input class="form-check-input" type="radio" id="inlineCheckbox2" name="gender" value="female">
                                 female</label>
                           </div>
                        <!-- <div class=" form-check-inline">
                          
                        </div> -->
                    </div>

                    <!-- <div class="justify-content-center text-center  mb-4">
                        <label for="gender" class="form-label">Martial status</label>
                        <div class=" form-check-inline">
                          <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                          <label class="form-check-label" for="inlineCheckbox1">married</label>
                        </div>
                        <div class=" form-check-inline">
                          <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                          <label class="form-check-label" for="inlineCheckbox2">single</label>
                        </div>
                    </div> -->

                    <div class=" mb-4">
                      <div class="form-outline">
                        <input type="email" id="email" name="email" placeholder="Email" class="form-control" />
                        <!-- <label class="form-label" for="emailAddress">Email</label> -->
                      </div>
                    </div>

                    <div class=" mb-4">
                      <div class="form-outline">
                        <input type="tel" id="phone" name="phone" placeholder="Mobile Number" class="form-control" />
                        <!-- <label class="form-label" for="phoneNumber">Phone Number</label> -->
                      </div>
                    </div>

                    <div class=" mb-4">
                      <div class="form-outline">
                        <input type="password" id="password" name="password" placeholder="password" class="form-control" />
                        <!-- <label class="form-label" for="password">password</label> -->
                      </div>
                    </div>

                    <div class=" mb-4">
                      <div class="form-outline">
                        <input type="password" id="conf_password" name="conf_password" placeholder="confirm password" class="form-control" />
                        <!-- <label class="form-label" for="cpassword">confirm password</label> -->
                      </div>
                    </div>

                  <div class="col-12">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                      <label class="form-check-label" for="invalidCheck">
                        Agree to terms and conditions
                      </label>
                      <div class="invalid-feedback">
                        You must agree before submitting.
                      </div>
                    </div>
                  </div>

                    <div class="col-12">
                      <div class="col-md-4 mb-4">    
                        <div class="mt-4">
                          <input class="btn btn-warning btn-lg" type="submit" value="Submit" />
                        </div>     
                      </div>
                    </div>

                </form>
               <!-- </div> -->
            </div>
         </div>
      </div>
      <!-- end our pricing -->
     
      <!--  footer -->
      <footer>
         <div class="footer">
            <div class="container">
               <div class="row">
                  <div class="col-md-12">
                     <ul class="conta">
                        <li><i class="fa fa-map-marker" aria-hidden="true"></i> Passages of Lorem Ipsum available</li>
                        <li><i class="fa fa-phone" aria-hidden="true"></i> Call : +012334567890</li>
                        <li> <i class="fa fa-envelope" aria-hidden="true"></i><a href="www.patospace2022@gmail.com"> Patospace 2022</a></li>
                     </ul>
                  </div>
                  <div class=" col-md-3 col-sm-6">
                     <h3>About </h3>
                     <p class="variat">Currently, P.A.T.O has more than 50 members who study in different universities in Tanzania sharing the same mission, vision and goals.</p>
                  </div>
                  <div class=" col-md-3 col-sm-6">
                     <h3>Team </h3>
                     <p class="variat" >We are a well equipped team of not only educated but also motivated youths who would stop at nothing to ensure that the set goals and objectives are seen through with in the planned window.</p>
                  </div>
                  <!-- <div class="col-md-2 col-sm-6">
                     <h3>Useful Link</h3>
                     <ul class="link_menu">
                        <li><a href="index.html">Home</a></li>
                        <li><a href="about.html"> About</a></li>
                        <li><a href="we-do.html">Services</a></li>
                        <li class="active"><a href="pricing.html">Invest</a></li>
                        <li><a href="contact.html">Contact Us</a></li>
                     </ul>
                  </div> -->
                  <div class="col-md-4 col-sm-6">
                     <h3>Subscribe</h3>
                     <form class="bottom_form">
                        <a class="right_btn" href="Javascript:void(0)"> <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                        <input class="enter" placeholder="Enter your email" type="text" name="Enter your email">
                        <!-- <p >There are many variations of passages </p> -->
                     </form>
                  </div>
               </div>
            </div>
            <div class="copyright">
               <div class="container">
                  <div class="row">
                     <div class="col-md-10 offset-md-1">
                     <p>© 2023 Pato Space.
                            <!-- Design by   -->
                           <!-- <a href="https://html.design/"> Free Html Templates</a> -->
                            <!-- Customised by makilagied -->
                        </p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </footer>
      <!-- end footer -->
      <!-- Javascript files-->
      <script src="js/jquery.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
   </body>
</html>

