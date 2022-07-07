<!DOCTYPE html>
<html lang="zxx">
  <head>
    <!-- Required meta tags -->
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Ngoro Online</title>
    <!-- plugin css for this page -->
    <link
      rel="stylesheet"
      href="./assets/vendors/mdi/css/materialdesignicons.min.css"
    />
    <link rel="stylesheet" href="assets/vendors/aos/dist/aos.css/aos.css" />

    <!-- End plugin css for this page -->
    <link rel="shortcut icon" href="assets/images/favicon.png" />

    <!-- inject:css -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- endinject -->
  </head>

  <body>
    
    <div class="container-scroller">
      <div class="main-panel">
        <!-- partial:partials/_navbar.html -->
        <header id="header">
          <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light">
              <div class="navbar-top">
                  
              <div class="navbar-bottom">
                <div class="d-flex justify-content-between align-items-center">
                  <div>
                    <h1 class="navbar-brand" 
                      >
                    Ngoro News</h1>
                  </div>
                  <div>
                    <button
                      class="navbar-toggler"
                      type="button"
                      data-target="#navbarSupportedContent"
                      aria-controls="navbarSupportedContent"
                      aria-expanded="false"
                      aria-label="Toggle navigation"
                    >
                      <span class="navbar-toggler-icon"></span>
                    </button>
                    <div
                      class="navbar-collapse justify-content-center collapse"
                      id="navbarSupportedContent"
                    >
                      <?php 
                      include 'atas.php';
                      ?>
                    </div>
                  </div>
                </div>
              </div>
            </nav>
          </div>
        </header>

        <!-- partial --> 
        <div class="flash-news-banner">
          <div class="container">
            <div class="d-lg-flex align-items-center justify-content-between">
              <div class="d-flex">
                <span class="mr-3 text-danger"><?php echo  date("d-m-Y") ?></span>
                <span class="mr-3 text-danger"><?php echo  date("H:i:s") ?></span>
                
              </div>
            </div>
          </div>
        </div>
        <div class="content-wrapper">
          <div class="container">
            <?php
            include 'banner.php';
            ?>
            <div class="row" data-aos="fade-up">
              <div class="col-lg-3 stretch-card grid-margin">
                <?php 
                // include 'pinggir.php';
                ?> 
              </div>
              <div class="col-lg-9 stretch-card grid-margin">
                <div class="card">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-sm-4 grid-margin">
                        <div class="position-relative">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31641.309264925912!2d112.6043313428528!3d-7.557127608120153!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7df7f963f3097%3A0xfe19779c98fbe4ed!2sNgoro%2C%20Kec.%20Ngoro%2C%20Kabupaten%20Mojokerto%2C%20Jawa%20Timur!5e0!3m2!1sid!2sid!4v1657000380171!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                          
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row" data-aos="fade-up">
              <div class="col-sm-12 grid-margin">
                
                </div>
              </div>
            </div>
            <div class="row" data-aos="fade-up">
              <div class="col-sm-12">
                <div class="card">
                  
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- main-panel ends -->
        <!-- container-scroller ends -->

        <!-- partial:partials/_footer.html -->
        <footer>
          <div class="footer-top">
            <div class="container">
              <div class="row">
                <div class="col-sm-5">
                  <!-- <img src="assets/images/logo.png" class="footer-logo" alt="" width="60%"   /> -->
                  <h1 class="font-weight-normal mt-4 mb-5">
                   Info Seputar Ngoro
                  </h1>
                  <br>
                  <ul class="social-media mb-3">
                    <li>
                      <a href="https://www.facebook.com/NganjukKotaBayu/"  target="_blank">
                        <i class="mdi mdi-facebook"></i>
                      </a>
                    </li>
                    <li>
                      <a href="https://www.youtube.com/channel/UCcx03f4pKd40WwpdoRwNBmQ"  target="_blank">
                        <i class="mdi mdi-youtube"></i>
                      </a>
                    </li>
                    <li>
                      <a href="https://twitter.com/nganjukkotabayu?lang=en"  target="_blank">
                        <i class="mdi mdi-twitter"></i>
                      </a>
                    </li>
                  </ul>
                </div>
             
               
              </div>
            </div>
          </div>
          <div class="footer-bottom">
            <div class="container">
              <div class="row">
                <div class="col-sm-12">
                  <div class="d-sm-flex justify-content-between align-items-center">
                    <div class="fs-14 font-weight-600">
                      © 2022 </a>
                    </div>
                    <div class="fs-14 font-weight-600">
                      Handcrafted by <a href="https://www.bootstrapdash.com/" target="_blank" class="text-white">BootstrapDash</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </footer>

        <!-- partial -->
      </div>
    </div>
    <!-- inject:js -->
    <script src="assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- plugin js for this page -->
    <script src="assets/vendors/aos/dist/aos.js/aos.js"></script>
    <!-- End plugin js for this page -->
    <!-- Custom js for this page-->
    <script src="./assets/js/demo.js"></script>
    <script src="./assets/js/jquery.easeScroll.js"></script>
    <!-- End custom js for this page-->
  </body>
</html>
