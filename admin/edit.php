<html>

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>
        edit
    </title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no'
        name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <!-- CSS Files -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="../assets/css/now-ui-dashboard.css?v=1.5.0" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="../assets/demo/demo.css" rel="stylesheet" />
</head>
<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

<body>


    <?php
include 'koneksi.php';
$id = $_GET['id'];
$data = mysqli_query($sambungan, "select * from posts where id='$id'");
while ($d = mysqli_fetch_array($data)) {
    ?>
    <div class="container col-md-6 mt-4">
        <div class="card-header bg-success text-white">
            Edit Article
        </div>
        <form action="edit_aksi.php" method="POST">
            <?php $tgl = date('l, d-m-Y');?>
            <div class="form-group">
                <label>Judul</label>
                <input type="hidden" name="id" value="<?php echo $d['id']; ?>">
                <input type="text" name="title" required="" class="form-control" value="<?php echo $d['title']; ?>">
            </div>
            <div class="form-group">
                <label>Isi Konten </label>
                <input class="form-control" name="content" value="<?php echo $d['content']; ?>"></iput>
            </div>

            <div class="form-group">
                <label>Deskripsi</label>
                <input class="form-control" name="category" value="<?php echo $d['category']; ?>"></input>
            </div>

            <select name='status'>
                <option> <?php echo $d['status']; ?> </option>
                <option value='draft'>draft</option>
                <option value='post'>post</option>
            </select>


            <button type="submit" class="btn btn-primary" name="submit" value="simpan">Simpan data</button>
        </form>
        <?php
}
?>
    </div>
</body>

</html>