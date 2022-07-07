<?php
$servername = "localhost";
$database = "ngoro";
$username = "root";
$password = "";
 

// membuat koneksi
$conn = mysqli_connect($servername, $username, $password, $database);
// mengecek koneksi
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

mysqli_close($conn);
?>