<?php
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$title = $_POST['title'];
$content = $_POST['content'];
$category = $_POST['category'];
$created_date = date("Y-m-d H:i:s");
$status = $_POST['status'];

// menginput data ke database
mysqli_query($sambungan, "insert into posts values('','$title','$content', '$category','$created_date', '$status')");

// mengalihkan halaman kembali ke index.php
header("location:dashboard.php");