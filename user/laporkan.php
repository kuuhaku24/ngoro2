<?php
include_once ('pengaturan.php');
?>
<!DOCTYPE html>
<html lang="zxx">
  <head>
    <!-- Required meta tags -->
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Pengaduan </title>
    <!-- plugin css for this page -->
    <link
      rel="stylesheet"
      href="assets/vendors/mdi/css/materialdesignicons.min.css"
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
      <!-- partial:partials/_navbar.html -->
      <header id="header">
          <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light">
              <div class="navbar-top">
                <div class="d-flex justify-content-between align-items-center">
                  
               
                </div>
              </div>
              <div class="navbar-bottom">
                <div class="d-flex justify-content-between align-items-center">
                  <div>
                    <a class="navbar-brand" href="#"
                      ><img src="assets/images/logo.png" alt=""
                    /></a>
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
     
      
      <div class="content-wrapper">
        <div class="container">
          <div class="row">
            <div class="col-sm-12">
              <div class="card" data-aos="fade-up">
                <div class="card-body">
                  <div class="aboutus-wrapper">
                    <h1 class="mt-5 text-center mb-5">
                      Form Pengaduan
                    </h1>
                    <form action="aksi.php" method="POST">
  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Nama Pengadu</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="nama" name="nama" placeholder="Contoh : Pak Badri">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="email" name="email" placeholder="lorem@lorem.com">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Isi Pengaduan</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="pengaduan" name="pengaduan" placeholder="Pak antok mencuri mangga saya ketika saya tidur, dan selingkuh dengan istri saya">
    </div>
  </div>
  <div class="form-group row">
    <div class="col-sm-10">
      <button type="submit" name="submit" id="submit" class="btn btn-primary">Laporkan!</button>
    </div>
  </div>
</form>
                       
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
    <!-- container-scroller ends -->
    <!-- partial:partials/_footer.html -->
    <footer>
          <div class="footer-top">
            <div class="container">
              <div class="row">
                <div class="col-sm-5">
                  <img src="assets/images/logo.png" class="footer-logo" alt="" width="60%" />
                  <h5 class="font-weight-normal mt-4 mb-5">
                  Web  ini dibuat untuk  memenuhi  kebutuhan smart village ,  pada  kabupaten  nganjuk
                  </h5>
                  <ul class="social-media mb-3">
                    <li>
                      <a href="#">
                        <i class="mdi mdi-facebook"></i>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <i class="mdi mdi-youtube"></i>
                      </a>
                    </li>
                    <li>
                      <a href="#">
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
                      ?? 2020 @ <a href="https://www.bootstrapdash.com/" target="_blank" class="text-white"> BootstrapDash</a>. All rights reserved.
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
    <!-- inject:js -->
    <script src="assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- plugin js for this page -->

    <script src="assets/vendors/aos/dist/aos.js/aos.js"></script>
    <!-- End plugin js for this page -->
    <!-- Custom js for this page-->
    <script src="assets/js/demo.js"></script>
    <script src="assets/js/jquery.easeScroll.js"></script>
    <!-- End custom js for this page-->
  </body>
</html>
