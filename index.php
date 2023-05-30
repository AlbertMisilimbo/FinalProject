 <?php
  $page_title = 'public annoucements ';
  require_once('includes/load.php');
  // Checkin What level user has permission to view this page
  
  $public = join_public_table();


?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>UDSM NoticeBoard - Index</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
     

  <!-- Favicons -->
  <link href="https://www.udsm.ac.tz/web/themes/udsm/layouts/main/img/logo_ud.png" rel="icon">
  <link href="https://www.udsm.ac.tz/web/themes/udsm/layouts/main/img/logo_ud.png">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
 <link href="assets/vendor/aos/aos.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">


 <style media="screen">
    p img{
      width: 100%
    }
  </style>
  <link rel="stylesheet" href="https://www.aru.ac.tz/site/css/master.min.css">


<style>

    .event-main-div{
      border:1px solid #D55E1C;
    }

    .event-main-title{
      border-bottom:1px solid #D55E1C;
    }
    
    .event-main-title a:hover{ 
      color:#36454F !important;
    }

    .event-div:hover{
      background-color: #f5f5f5;
    }

    .project-main-div{
      border:1px solid #2752A1;
    }

    .project-main-title{
      border-bottom:1px solid #2752A1;
    }
    
    .project-main-title a:hover{ 
      color:#36454F !important;
    }

    .project-div:hover{
      background-color: #f5f5f5;
    }

  </style>
  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top bg-danger ">
    <div class="container d-flex align-items-center">

     
      <!-- Uncomment below if you prefer to use an image logo -->
      <a href="index.html" class="logo me-auto"><img src="https://www.udsm.ac.tz/web/themes/udsm/layouts/main/img/logo_ud.png" alt="" class="img-fluid"></a>

     
<nav class="bg-white dark:bg-gray-900 fixed w-full z-20 top-0 left-0 border-b border-gray-200 dark:border-gray-600">
  <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
  <a href="https://flowbite.com/" class="flex items-center">
      <img  src="https://www.udsm.ac.tz/web/themes/udsm/layouts/main/img/logo_ud.png" class="h-8 mr-3" alt="Flowbite Logo">
      <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">NOTICE BOARD</span>
  </a>
  <div class="flex md:order-2">
      <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 text-center mr-3 md:mr-0 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"> <a href="login_v2.php" >Login</a></button>
      <button data-collapse-toggle="navbar-sticky" type="button" class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-sticky" aria-expanded="false">
        <span class="sr-only">Open main menu</span>
        <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
      </button>
  </div>
  <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
    
  </div>
  </div>
</nav>
<!-- .navbar -->

    </div>
  </header><!-- End Header -->


     <div class="home-page row my-20">
    
    <div class="container max-1920" >
        <div id="myCarousel" class="carousel slide carousel-fade" data-ride="carousel">
            <div class="carousel-inner">
                                                    
                                       <div class="carousel-item active" style="background: #2752A1">
                     <div class="row">
                         <div class="col-md-4 my-auto ">
                             <div class="slider-content px-4 px-xs-0 text-white">
                                                               
                                   <h4><b>UDSM-Notice Board</b></h4>
                                   <hr class="bg-white">
                                   <h6 class="text-justify">  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
              magna aliqua.
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
              magna aliqua.

Ardhi... </h6>
                                 
                                                                                           </div>
                         </div>
                         <div class="col-md-8 bg-white px-0">
                             <!-- aspect ration on cropper for image is 16/7-->

                                                            <img class="d-block w-100" src="uploads/image/UNIT14_Hongera sana Prof. Carolyne Nombo.jpeg" alt="">
                                                      </div>

                          <div class="col-md-12">
                            <div class="row px-3 w-100">
                              <div class="col-md-4">  </div>
                              <div class="col-md-8 text-justify text-white py-3 px-4">
                                     
                              </div>
                            </div>
                          </div>
                         
                     </div>

                   </div>
                                                          
                                       <div class="carousel-item " style="background: #2752A1">
                     <div class="row">
                         <div class="col-md-4 my-auto ">
                             <div class="slider-content px-4 px-xs-0 text-white">
                                                               
                                   <h4><b>UDSM-Notice Board</b></h4>
                                   <hr class="bg-white">
                                   <h6 class="text-justify">  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
              magna aliqua.

Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
              magna aliqua.
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
              magna aliqua.
Ardhi... </h6>
                                   

                                                                                           </div>
                         </div>
                         <div class="col-md-8 bg-white px-0">
                             <!-- aspect ration on cropper for image is 16/7-->

                                                            <img class="d-block w-100"  src="uploads/image/coict2.JPG"" alt="">
                                                      </div>

                          <div class="col-md-12">
                            <div class="row px-3 w-100">
                              <div class="col-md-4">  </div>
                              <div class="col-md-8 text-justify text-white py-3 px-4">
                                     
                              </div>
                            </div>
                          </div>
                         
                     </div>

                   </div>
                                                          
                                       <div class="carousel-item " style="background: #2752A1">
                     <div class="row">
                         <div class="col-md-4 my-auto ">
                             <div class="slider-content px-4 px-xs-0 text-white">
                                                               
                                   <h4><b>UDSM-Notice Board</b></h4>
                                   <hr class="bg-white">
                                   <h6 class="text-justify">  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
              magna aliqua.

Ardhi... </h6>
                                 

                                                                                           </div>
                         </div>
                         <div class="col-md-8 bg-white px-0">
                             <!-- aspect ration on cropper for image is 16/7-->

                                                            <img class="d-block w-100" src="uploads/image/UNIT14_Hongera sana Prof. Carolyne Nombo.jpeg" alt="">
                                                      </div>

                          <div class="col-md-12">
                            <div class="row px-3 w-100">
                              <div class="col-md-4">  </div>
                              <div class="col-md-8 text-justify text-white py-3 px-4">
                                     
                              </div>
                            </div>
                          </div>
                         
                     </div>

                   </div>
                                                          
                                       <div class="carousel-item " style="background: #2752A1">
                     <div class="row">
                         <div class="col-md-4 my-auto ">
                             <div class="slider-content px-4 px-xs-0 text-white">
                                                               
                                   <h4><b>UDSM-Notice Board</b></h4>
                                   <hr class="bg-white">
                                   <h6 class="text-justify">  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
              magna aliqua.

Ardhi... </h6>

                                                                                           </div>
                         </div>
                         <div class="col-md-8 bg-white px-0">
                             <!-- aspect ration on cropper for image is 16/7-->

                                                                        <img class="d-block w-100"  src="uploads/image/UNIT14_Hongera sana Prof. Carolyne Nombo.jpeg" alt="">                                                      </div>

                          <div class="col-md-12">
                            <div class="row px-3 w-100">
                              <div class="col-md-4">  </div>
                              <div class="col-md-8 text-justify text-white py-3 px-4">
                                     
                              </div>
                            </div>
                          </div>
                         
                     </div>

                   </div>
                                                       

            </div>

            
            <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>

  <main id="main">

   
        <div class="col-12 mt-5 main-content">
          <div class="main-content-inside">

            
              <div class="container px-0">
                    
                    <div class="row">

                                                       <?php foreach ($public as $publics):?>
                          
                          <div class="col-md-4 my-2">
                            <div class="row card-announcement">
                                 <img src="uploads/products/<?php echo $publics['image']; ?>" class="w-100" alt="">
                              <h5 class="title" style="background-color:#F6BE00" >
                                    <?php echo remove_junk($publics['title']); ?>
                              </h5>

                                                               
                                          <div class="col-md-12 px-0">
                                  
                                      <p class="text-secondary" style="color:#FFFF">
                                           <?php echo remove_junk($publics['description']); ?>
                                      </p>
                                      <p class="text-secondary">
                                          <?php echo read_date($publics['date']); ?>
                                      </p>
                                       <img src="https://www.aru.ac.tz/site/images/new_blinks.gif" class="w-30 blinkAnnouncment" alt="">
                                                                  </div>
                            </div>
                        </div>
                        
                    <?php endforeach; ?>
                    
                     
                                  </div>
                                  
                                
    </div>

            
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
             <a href="index.html" class="logo me-auto"><img src="https://www.udsm.ac.tz/web/themes/udsm/layouts/main/img/logo_ud.png" alt="" class="img-fluid"></a>
            <p>
              Main CAMPUS ,Changanyikeni <br>
              College COICT ,Sayansi <br>
              Dar Es Salaam, Wilaya Ya Ubungo<br>
              Tanzania <br><br>
              <strong>Phone:</strong> +255 789 #### # <br>
              <strong>Email:</strong> UDSMinfo@example.com<br>
            </p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4 class ="text-warning">Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4 class ="text-warning">Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4 class ="text-warning">Our Social Networks</h4>
            <p>UDSM the source of education #visit our sites at:</p>
            <div class="social-links mt-3">
              <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
              <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
           
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="container footer-bottom clearfix ">
      <div class="copyright">
        &copy; Copyright <strong><span>2023</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/ -->
        Designed by <a href="">UDSM</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center bg-danger"><i class="bi bi-arrow-up-short"></i></a>

 
  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

    <script src="https://www.aru.ac.tz/site/js/jquery.min.js"></script>
    <script src="https://www.aru.ac.tz/site/js/bootstrap.bundle.min.js"></script>
    <script src="https://www.aru.ac.tz/site/js/datatables.min.js"></script>
    <script src="https://www.aru.ac.tz/site/js/slick.min.js"></script>
    <script src="https://www.aru.ac.tz/site/js/owl.carousel.min.js"></script>
    <script src="https://www.aru.ac.tz/site/js/custom.min.js"></script>
    <script src="https://www.aru.ac.tz/admin/js/visitors-counter/client.min.js"></script>
    <script src="https://www.aru.ac.tz/admin/js/visitors-counter/visitors.logs.js"></script>

    <script src="https://www.aru.ac.tz/site/js/bootstrap.bundle.min.js"></script>
    <script src="https://www.aru.ac.tz/site/js/slick.min.js"></script>

    <script src="https://www.aru.ac.tz/site/js/custom.min.js"></script>

    <script src="https://www.aru.ac.tz/site/js/magnific-popup.min.js"></script>
    <script>

        $(document).ready(function() {


          /* Video - Magnific Popup */
          $('.popup-youtube, .popup-vimeo').magnificPopup({
              disableOn: 700,
              type: 'iframe',
              mainClass: 'mfp-fade',
              removalDelay: 160,
              preloader: false,
              fixedContentPos: false,
              iframe: {
                  patterns: {
                      youtube: {
                          index: 'youtube.com/',
                          id: function(url) {
                              var m = url.match(/[\\?\\&]v=([^\\?\\&]+)/);
                              if ( !m || !m[1] ) return null;
                              return m[1];
                          },
                          src: 'https://www.youtube.com/embed/%id%?autoplay=1'
                      },
                      vimeo: {
                          index: 'vimeo.com/',
                          id: function(url) {
                              var m = url.match(/(https?:\/\/)?(www.)?(player.)?vimeo.com\/([a-z]*\/)*([0-9]{6,11})[?]?.*/);
                              if ( !m || !m[5] ) return null;
                              return m[5];
                          },
                          src: 'https://player.vimeo.com/video/%id%?autoplay=1'
                      }
                  }
              }
          });

        });
    </script>

      <script type="text/javascript">
  $(".meeting-slider").owlCarousel({
        loop:true,
        autoplay:true,
        smartSpeed:3000,
        autoplayHoverPause:true,
        dots:true,
        nav:false,
        items:1,
        animateOut: 'fadeOut',
        navText: ["<i class='fas fa-angle-left fa-3x'></i> "," <i class='fas fa-angle-right fa-3x'></i>"]
    });
  </script>
</body>

</html>
