<?php 
    include("koneksi.php");
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Login Admin pengaduan</title>
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="bg-primary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Login</h3></div>
                                    <div class="card-body">
                                        <form action="" method="POST">
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="inputEmail" name="inputEmail" type="email" placeholder="name@example.com" />
                                                <label for="inputEmail">Email address</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="inputPassword" name="inputPassword" type="password" placeholder="Password" />
                                                <label for="inputPassword">Password</label>
                                            </div>
                                            
                                        <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                            
                                            <button type="submit" id="submitData" name="submitData" class="btn btn-primary">Login</button>
                                        </div>
                                        </form>
                                    </div>
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            <?php
                if (isset($_POST['submitData'])) {

                    $email = $_POST['inputEmail'];
                    $password = $_POST['inputPassword'];
                    $result = mysqli_query($conn, "SELECT * FROM tb_login WHERE username = '$email' AND password = '$password'");
                    $num = mysqli_num_rows($result);
                    if ($num == 0) {
                        ?>
                            <script>
                                alert("Alamat Email atau Sandi Salah !");
                                document.location = "login.php";
                            </script>
                        <?php 
                    } else {
                        while ($data = mysqli_fetch_array($result)) {
                            $_SESSION["nama_admin"] = $data["nama_admin"];
                        }
                        ?>
                            <script>
                                document.location = "index.php";
                            </script>
                        <?php 
                    }
                  }
            ?>
            <div id="layoutAuthentication_footer">
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">kelompok Smart City</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>
