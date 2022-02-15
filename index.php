<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="ilmu-detil.blogspot.com">
    <title>Membuat Daftar Artikel Berita</title>
    <!-- Bagian css -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/ilmudetil.css">
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">
    </style>
</head>

<body>


    <div class="container-fluid bg-success text-white">
        <div class="col-md-1">
            <h1>Artikel</h1>
        </div>
    </div>
    <button class="btn btn-danger btn-block"><a href="admin/dashboard.php"> isi Berita</a></button>
    <div class="container" style="margin-top:40px">
        <div class="row">
            <div class="col-md-9">
                <div class="panel panel-default">
                    <?php
include "admin/koneksi.php";
$no = 1;
$data = mysqli_query($sambungan, "select * from posts");
while ($d = mysqli_fetch_array($data)) {
    ?>
                    <div class="container">
                        <h3><?php echo $d['title']; ?></h3>

                        <h6><?php echo $d['category']; ?></h6>
                        <div class="info-meta">

                            <i class="fa fa-clock-o">
                                <h6><?php echo $d['created_date']; ?></h6>
                            </i>

                        </div>
                        <div class="media">
                            <p><?php echo $d['content']; ?>
                            </p>


                        </div>
                        <hr>


                    </div>
                </div>
                <?php
}
?>
            </div>
        </div>
    </div>

    <script src='assets/js/jquery.js'></script>
    <script src="assets/js/bootstrap.min.js"></script>
</body>

</html>