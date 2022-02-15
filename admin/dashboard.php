<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />

    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>
        Article
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

<body class="">
    <div class="wrapper ">
        <div class="sidebar" data-color="blue">
            <div class="sidebar-wrapper" id="sidebar-wrapper">
                <ul class="nav">

                    <li class="active ">
                        <a href="./dashboard.php">
                            <i class="now-ui-icons design_app"></i>
                            <p>Dashboard</p>
                        </a>
                    </li>

                    <div class=" container-fluit dropdown">
                        <button class="btn btn-danger btn-block dropdown-toggle" type="button" id="dropdownMenuButton"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Posts
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="allpost.php">All Posts</a>
                            <a class="dropdown-item" href="addnew.php">Add New</a>
                            <<a class="dropdown-item" href="preview.php">Preview</a>

                        </div>
                    </div>
                    <li>
                        <button class="btn  btn-block"><a href="../index.php" class="text-primary">
                                keluar</a></button>
                    </li>
                </ul>
            </div>
        </div>

        <div class="main-panel" id="main-panel">
            <div class="panel-header panel-header-sm">
            </div>
            <div class="content">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">

                            <div class="card-header bg-success text-white ">
                                artikel <a href="tambah.php" class="btn btn-sm btn-primary float-right">Tambah</a>
                            </div>

                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead class=" text-primary">
                                            <th>
                                                no
                                            </th>
                                            <th>
                                                title
                                            </th>
                                            <th class="text-left">
                                                content
                                            </th>
                                            <th>
                                                catagory
                                            </th>
                                            <th>
                                                date
                                            </th>
                                            <th>
                                                Status
                                            </th>
                                            <th>
                                                opsi
                                            </th>
                                        </thead>
                                        <tbody>
                                            <?php
include "koneksi.php";
$no = 1;
$data = mysqli_query($sambungan, "select * from posts");
while ($d = mysqli_fetch_array($data)) {
    ?>
                                            <tr>
                                                <td><?php echo $no++; ?></td>
                                                <td><?php echo $d['title']; ?></td>
                                                <td><?php echo $d['content']; ?></td>
                                                <td><?php echo $d['category']; ?></td>
                                                <td><?php echo $d['created_date']; ?></td>
                                                <td><?php echo $d['status']; ?></td>
                                                <td>
                                                    <a href="edit.php?id=<?php echo $d['id']; ?>">EDIT</a>
                                                    <a href="hapus.php?id=<?php echo $d['id']; ?>">HAPUS</a>
                                                </td>
                                            </tr>
                                            <?php
}
?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                    <footer class="footer">
                        <div class=" container-fluid ">

                        </div>
                    </footer>
                </div>
            </div>
            <!--   Core JS Files   -->
            <script src="../assets/js/core/jquery.min.js"></script>
            <script src="../assets/js/core/popper.min.js"></script>
            <script src="../assets/js/core/bootstrap.min.js"></script>
            <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
            <!--  Google Maps Plugin    -->
            <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
            <!-- Chart JS -->
            <script src="../assets/js/plugins/chartjs.min.js"></script>
            <!--  Notifications Plugin    -->
            <script src="../assets/js/plugins/bootstrap-notify.js"></script>
            <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
            <script src="../assets/js/now-ui-dashboard.min.js?v=1.5.0" type="text/javascript"></script>
            <!-- Now Ui Dashboard DEMO methods, don't include it in your project! -->
            <script src="../assets/demo/demo.js"></script>


            <script>
            $(document).ready(function() {
                // Javascript method's body can be found in assets/js/demos.js
                demo.initDashboardPageCharts();

            });
            </script>
</body>

</html>