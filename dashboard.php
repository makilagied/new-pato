<?php
include "dbconfig.php";




?>

<?php
function generateRandomSoilConditions()
{
  $pH_level = mt_rand(60, 70) / 10;  // random float between 6.0 and 7.0
  $nutrient_content = mt_rand(80, 120);
  $organic_matter = mt_rand(20, 40) / 10;  // random float between 2.0 and 4.0
  $soil_texture_options = array("clayey", "sandy", "loamy");
  $soil_texture = $soil_texture_options[array_rand($soil_texture_options)];
  $soil_moisture = mt_rand(18, 30);  // random integer between 18 and 30
  $soil_temp = mt_rand(15, 25);  // random integer between 15 and 25

  return array(
    "pH_level" => $pH_level,
    "nutrient_content" => $nutrient_content,
    "organic_matter" => $organic_matter,
    "soil_texture" => $soil_texture,
    "soil_moisture" => $soil_moisture,
    "soil_temp" => $soil_temp
  );
}
$farm_condition = generateRandomSoilConditions();
?>



<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>PATO | Dashboard</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="robots" content="all,follow">
  <!-- Google fonts - Roboto -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700">
  <!-- Choices CSS-->
  <link rel="stylesheet" href="vendor/choices.js/public/assets/styles/choices.min.css">
  <!-- Custom Scrollbar-->
  <link rel="stylesheet" href="vendor/overlayscrollbars/css/OverlayScrollbars.min.css">
  <!-- theme stylesheet-->
  <link rel="stylesheet" href="css/style.default.css" id="theme-stylesheet">
  <!-- Custom stylesheet - for your changes-->
  <link rel="stylesheet" href="css/custom.css">
  
  <!-- <link rel="stylesheet" href="css/bootstrap.min.css"> -->
      <!-- style css -->
  <link rel="stylesheet" href="css/style.css">
      <!-- Responsive-->
  <link rel="stylesheet" href="css/responsive.css">
  <!-- Favicon-->
  <link rel="shortcut icon" href="img/favicon.ico">
</head>

<body>
  <!-- Side Navbar -->
  <nav class="side-navbar">
    <div class="side-navbar-inner">
      <!-- Sidebar Header    -->
      <div class="sidebar-header d-flex align-items-center justify-content-center p-3 mb-3">
        <!-- User Info-->
        <div class="sidenav-header-inner text-center"><img id="logo" class="dashlog" src="images/logo.png" alt="#" />
          <!-- <h2 class="h5 text-white text-uppercase mb-0">Nathan Andrews</h2>
            <p class="text-sm mb-0 text-muted">Web Developer</p> -->
        </div>
        <!-- Small Brand information, appears on minimized sidebar--><a class="brand-small text-center" href="index.html">
          <p class="h1 m-0">P</p>
        </a>
      </div>
      <!-- Sidebar Navigation Menus--><span class="text-uppercase text-center text-gray-500 text-sm fw-bold letter-spacing-0 mx-lg-2 heading">Tabs</span>
      <ul class="list-unstyled">
        <li class="sidebar-item"><a class="sidebar-link" href="dashboard.php">
            <svg class="svg-icon svg-icon-sm svg-icon-heavy me-2">
              <use xlink:href="#real-estate-1"> </use>
            </svg>Profile </a></li>

        <li class="sidebar-item"><a class="sidebar-link" href="soil_management.php">
            <svg class="svg-icon svg-icon-sm svg-icon-heavy me-2">
              <use xlink:href="#sales-up-1"> </use>
            </svg>Track Progress </a></li>
        <li class="sidebar-item"><a class="sidebar-link" href="crop_survey.php">
            <svg class="svg-icon svg-icon-sm svg-icon-heavy me-2">
              <use xlink:href="#portfolio-grid-1"> </use>
            </svg>Start A project </a></li>
      </ul>
    </div>
  </nav>
  <div class="page">
    <!-- navbar-->
    <header class="header  pb-3">
      <nav class="nav navbar fixed-top">
        <div class="container-fluid">
          <div class="d-flex align-items-center justify-content-between w-100">
            <div class="d-flex align-items-center">
              <a class="menu-btn d-flex align-items-center justify-content-center p-2 bg-gray-900" id="toggle-btn" href="#">
                <svg class="svg-icon svg-icon-sm svg-icon-heavy text-white">
                  <use xlink:href="#menu-1"> Dashboard </use>
                </svg>
              </a> 
              <a class="navbar-brand ms-2" href="index.html">
                <div class="brand-text d-md-inline-block d-sm-inline-block text-uppercase letter-spacing-0">
                  <span class="text-white fw-normal text-xs"> </span>
                  <strong class="text-primary text-sm">Dashboard</strong>
                </div>
              </a>
            </div>
            <ul class="nav-menu mb-0 list-unstyled d-flex flex-md-row align-items-md-center">

              <ul class="dropdown-menu dropdown-menu-end mt-sm-3 shadow-sm" aria-labelledby="notifications">
                <li><a class="dropdown-item py-3" href="#!">
                    <div class="d-flex">
                      <div class="icon icon-sm bg-blue">
                        <svg class="svg-icon svg-icon-xs svg-icon-heavy">
                          <use xlink:href="#envelope-1"> </use>
                        </svg>
                      </div>
                      <div class="ms-3"><span class="h6 d-block fw-normal mb-1 text-xs text-gray-600">You have 6 new messages </span><small class="small text-gray-600">4 minutes ago</small></div>
                    </div>
                  </a></li>
                <li><a class="dropdown-item py-3" href="#!">
                    <div class="d-flex">
                      <div class="icon icon-sm bg-green">
                        <svg class="svg-icon svg-icon-xs svg-icon-heavy">
                          <use xlink:href="#chats-1"> </use>
                        </svg>
                      </div>
                      <!-- <div class="ms-3"><span class="h6 d-block fw-normal mb-1 text-xs text-gray-600">New 2 WhatsApp messages</span><small class="small text-gray-600">4 minutes ago</small></div> -->
                    </div>
                  </a></li>
                <li><a class="dropdown-item py-3" href="#!">
                    <div class="d-flex">
                      <div class="icon icon-sm bg-orange">
                        <svg class="svg-icon svg-icon-xs svg-icon-heavy">
                          <use xlink:href="#checked-window-1"> </use>
                        </svg>
                      </div>
                      <!-- <div class="ms-3"><span class="h6 d-block fw-normal mb-1 text-xs text-gray-600">Server Rebooted</span><small class="small text-gray-600">8 minutes ago</small></div> -->
                    </div>
                  </a></li>
                <li><a class="dropdown-item py-3" href="#!">
                    <div class="d-flex">
                      <div class="icon icon-sm bg-green">
                        <svg class="svg-icon svg-icon-xs svg-icon-heavy">
                          <use xlink:href="#chats-1"> </use>
                        </svg>
                      </div>
                      <!-- <div class="ms-3"><span class="h6 d-block fw-normal mb-1 text-xs text-gray-600">New 2 WhatsApp messages</span><small class="small text-gray-600">10 minutes ago</small></div> -->
                    </div>
                  </a></li>
                <!-- <li><a class="dropdown-item all-notifications text-center" href="#!"> <strong class="text-xs text-gray-600">view all notifications  </strong></a></li> -->
              </ul>
              </li>

          </div>
        </div>
      </nav>
    </header>
    <!-- Counts Section -->
    <section class="py-3">
      <div class="container-fluid">
        <div class="row">
          <!-- Count item widget-->
          <div class="col-xl-7 col-md-7   col-sm-9"  style="box-shadow: 0 2px 8px rgba(0, 0, 0, 0.26);">
            <div class="row  " style="border-radius: 10%">
                  <div class="col-4">
                    <img src="images\profile.jpeg" class="img-fluid rounded-start"  alt="...">
                  </div>
                  <div class="col-8 sm-12 bg-light p-3">
                      <h5 class="card-title h1"> <?php echo $_SESSION['user_name'] ?></h5>
                      <p class="card-text h5"> Verified Pato Investor</p>
                      <p class="card-text py-3"><small class="text-muted">Last logged 3 mins ago</small></p>
                      <div class="offset-lg-9 offset-md-9 offset-sm-9 ">
                        <button class=" btn btn-primary " style=" border-radius: 5px;"> Edit </button>
                      </div>
                  </div>
            </div>
          </div>
        </div>
      </div>
      
          
    </section>
    <!-- Header Section-->
    <section class="bg-white py-5">
      <div class="container-fluid">
        <div class="row d-flex align-items-md-stretch">

          <!-- Line Chart -->
          <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="card shadow-0 text-center col-lg-5 col-sm-4 d-flex container-fluid justify-content-center ">
              <h2 class="h3 fw-normal" id="invest-heading"> Add Investments </h2>
                <button class=" btn btn-primary  " id="invest-btn" style="border-radius: 5px">Investment plans</button>
              <!-- <p class="text-sm text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor amet officiis</p> -->
              <!-- <canvas id="lineCahrt"></canvas> -->
            </div>
          </div>

          <!-- pricing starts here -->
        <form >
        <div  class="pricing1 " id="add-investment" >
        <div class="">
            <div class="">
              <div class="row">
              <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12  text-center">
                  <div class="">
                     <div class="card mb-4 rounded-3 shadow-sm">
                       <div class="card-header">
                         <h4 class="my-0 fw-normal"> Weekly Pack</h4>
                       </div>
                       <div class="card-body shadow-lg">
                         <h1 class="card-title pricing-card-title">3% return<small class="text-muted fw-light"></small></h1>
                         <ul class="list-unstyled mt-3 mb-4">
                           <li>Membership fee Tshs 3000/=</li>
                         </ul>
                         <button type="button" id="week-pack" class="w-50 btn btn-outline-primary" style="border-radius: 5px">Tshs 25,000/=</button>
                       </div>
                     </div>
                   </div>
               </div>
               <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 text-center">
                  <div class="col">
                     <div class="card mb-4 rounded-3 shadow-sm">
                       <div class="card-header ">
                         <h4 class="my-0 fw-normal"> Monthly Pack</h4>
                       </div>
                       <div class="card-body shadow-lg">
                         <h1 class="card-title pricing-card-title">15% return<small class="text-muted fw-light"></small></h1>
                         <ul class="list-unstyled mt-3 mb-4">
                           <li>Membership fee Tshs 5000/=</li>
                         </ul>
                         <button type="button" id="month-pack" class="w-50 btn  btn-outline-primary" style="border-radius: 5px">Tshs 50,000/=</button>
                       </div>
                     </div>
                   </div>
               </div>
               <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12  text-center">
                  <div class="col">
                     <div class="card mb-4 rounded-3 shadow-sm">
                       <div class="card-header ">
                         <h4 class="my-0 fw-normal"> Quarterly Pack</h4>
                       </div>
                       <div class="card-body shadow-lg">
                         <h1 class="card-title pricing-card-title">50% return<small class="text-muted fw-light"></small></h1>
                         <ul class="list-unstyled mt-3 mb-4">
                           <li>Membership fee Tshs 7000/=</li>
                         </ul>
                         <button type="button" id="quarter-pack" class="w-50 btn  btn-outline-primary " style="border-radius: 5px">Tshs 70,000/=</button>
                       </div>
                     </div>
                   </div>
               </div>
              </div>
               


               <div class="row justify-content-center">
               <div class="col-xl-5 col-lg-5 col-md-6 col-sm-12  text-center">
                  <div class="">
                     <div class="card mb-4 rounded-3 shadow-sm">
                       <div class="card-header ">
                         <h4 class="my-0 fw-normal"> half-yearly Pack</h4>
                       </div>
                       <div class="card-body shadow-lg">
                         <h1 class="card-title pricing-card-title">110% return<small class="text-muted fw-light"></small></h1>
                         <ul class="list-unstyled mt-3 mb-4">
                           <li>Membership fee Tshs 10,000/=</li>
                         </ul>
                         <button type="button" id="half-year-pack" class="w-50 btn btn-outline-primary " style="border-radius: 5px">Tshs 100,000/=</button>
                       </div>
                     </div>
                   </div>
               </div>
               <div class="col-xl-5 col-lg-5 col-md-6 col-sm-12 text-center">
                  <div class="col ">
                     <div class="card mb-4 rounded-3 shadow-sm">
                       <div class="card-header ">
                         <h4 class="my-0 fw-normal"> Yearly</h4>
                       </div>
                       <div class="card-body shadow-lg">
                         <h1 class="card-title pricing-card-title">200% return<small class="text-muted fw-light"></small></h1>
                         <ul class="list-unstyled mt-3 mb-4">
                           <li>Membership fee Tshs 15,000/=</li>
                         </ul>
                         <button type="button" id="year-pack" class="w-50 btn btn-outline-primary" style="border-radius: 5px">Tshs 300,000/=</button>
                       </div>
                     </div>
                   </div>
               </div>
               </div>
            </div>
         </div>
        </div>

        </form>




  <!-- JavaScript files-->
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="vendor/chart.js/Chart.min.js"></script>
  <script src="vendor/just-validate/js/just-validate.min.js"></script>
  <script src="vendor/choices.js/public/assets/scripts/choices.min.js"></script>
  <script src="vendor/overlayscrollbars/js/OverlayScrollbars.min.js"></script>
  <script src="js/charts-home.js"></script>
  <!-- Main File-->
  <script src="js/front.js"></script>
  <script>
    // ------------------------------------------------------- //
    //   Inject SVG Sprite - 
    //   see more here 
    //   https://css-tricks.com/ajaxing-svg-sprite/
    // ------------------------------------------------------ //
    function injectSvgSprite(path) {

      var ajax = new XMLHttpRequest();
      ajax.open("GET", path, true);
      ajax.send();
      ajax.onload = function(e) {
        var div = document.createElement("div");
        div.className = 'd-none';
        div.innerHTML = ajax.responseText;
        document.body.insertBefore(div, document.body.childNodes[0]);
      }
    }
    // this is set to BootstrapTemple website as you cannot 
    // inject local SVG sprite (using only 'icons/orion-svg-sprite.svg' path)
    // while using file:// protocol
    // pls don't forget to change to your domain :)
    injectSvgSprite('https://bootstraptemple.com/files/icons/orion-svg-sprite.svg');
  </script>
  <script src="pricing.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <!-- FontAwesome CSS - loading as last, so it doesn't block rendering-->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">


  <script>
    $(document).ready(function() {
      $("#lineCahrt").click(function() {
        $(".form-check").toggle(); // toggle visibility of all form-check elements
        $(".form-check:hidden").slice(2).show(); // show only the first 2 hidden form-check elements
      });

      // card -playlist
      // var cards = $(".green-card");
      // var currentCard = 0;

      // function nextCard() {
      //   cards.removeClass("active");
      //   cards.eq(currentCard).addClass("active");
      //   currentCard = (currentCard + 1) % cards.length;
      // }

      // // Show first card
      // cards.eq(currentCard).addClass("active");

      // // Set interval to change card every 3 seconds
      // 

      $(".green-card").hide();
      $(".green-card").eq(Math.floor(Math.random() * 6)).fadeIn();
      setInterval(() => {
        $(".green-card").hide();
        $(".green-card").eq(Math.floor(Math.random() * 6)).fadeIn();
      }, 3000);
    });
  </script>

</body>

</html>