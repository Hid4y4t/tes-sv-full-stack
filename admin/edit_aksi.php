<?php
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$id = $_POST['id'];
$title = $_POST['title'];
$content = $_POST['content'];
$category = $_POST['category'];
$created_date = date("Y-m-d H:i:s");
$status = $_POST['status'];
// update data ke database
mysqli_query($sambungan, "update posts set title='$title', content='$content', category='$category',created_date='$created_date', status='$status'  where id='$id'");

// mengalihkan halaman kembali ke index.php
header("location:dashboard.php");