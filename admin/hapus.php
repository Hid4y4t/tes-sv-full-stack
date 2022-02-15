<?php
include 'koneksi.php'; //menghubungkan ke file koneksi untuk ke database
$id = $_GET['id']; //menampung id

//query hapus
$data = mysqli_query($sambungan, "delete from posts where id ='$id'") or die(mysqli_error($sambungan));

//alert dan redirect ke index.php
echo "<script>alert('data berhasil dihapus.');window.location='dashboard.php';</script>";