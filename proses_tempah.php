<?php
include('sambungdb.php');
if (!isset($_SESSION['username'])) {
  header("Location:tempah.php");
  exit();
}

if(isset($_POST['submit'])){
    $idfood = $_POST['idfood'];
    $nama = $_POST['nama'];
    $nohp = $_POST['nohp'];
    $jumlah = $_POST['jumlah'];

    $query = "INSERT INTO tempahan (idfood, nama_pelanggan, nohp, jumlah)
              VALUES ('$idfood', '$nama', '$nohp', '$jumlah')";
    $result = mysqli_query($db, $query);

    if($result){
        echo "<script>alert('Tempahan berjaya dibuat!'); window.location='senaraimenu.php';</script>";
    } else {
        echo "<script>alert('Gagal membuat tempahan.'); window.location='senaraimenu.php';</script>";
    }
}
?>