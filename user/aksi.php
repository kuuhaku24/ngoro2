<?php
$servername = "localhost";
$username = "root";
$password = "mysql";
$dbname = "nganjukportal";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
if(isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $pengajuan = $_POST['pengaduan'];
$sql = "INSERT INTO tb_pengajuan (nama_pengirim, isi_pengajuan, email)
VALUES ('$nama','$email','$pengajuan')";

if (mysqli_query($conn, $sql)) { 
  
  header("location:berhasil.php");
  echo '<script language="javascript">';
  echo 'alert(message successfully sent)';  //not showing an alert box.
  echo '</script>';
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
}

?>

</body>
</html>
