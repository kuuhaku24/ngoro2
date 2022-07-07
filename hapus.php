<?php 
    include 'koneksi.php';
    $id = $_POST['id_pengajuan'];
    $select = mysqli_query($conn, "DELETE FROM tb_pengajuan WHERE id_pengajuan = $id");
    if($select) {
        ?>
        <script>
            alert("Hapus Berhasil!");
            document.location = "datapengaduan.php";
        </script>
    <?php 
    }
?>