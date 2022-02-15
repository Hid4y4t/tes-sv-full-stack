<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>
        tambah
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

    <!-- menentukan jumlah text -->
    <script language=JavaScript>
    function check_length(my_form) {
        maxLen = 200;
        if (my_form.content.value.length >= maxLen) {

            var msg = "data yang anda masukan melebihi data maksimum";
            alert(msg);

            my_form.content.value = my_form.content.value.substring(0, maxLen);
        } else {
            my_form.text_num.value = maxLen - my_form.content.value.length;
        }
    }
    </script>


    <div class="container col-md-6 mt-4">
        <h1>Article</h1>
        <div class="card">
            <div class="card-header bg-success text-white">
                Tambah Article
            </div>
            <div class="card-body">

                <form action="tambah_aksi.php" method="POST">
                    <?php $tgl = date('l, d-m-Y');?>

                    <div class="form-group">
                        <label>Judul</label>
                        <input type="text" name="title" required="" class="form-control">

                    </div>
                    <div class="form-group">
                        <label>Isi Konten </label>
                        <br>


                        <textarea onKeyPress=check_length(this.form); onKeyDown=check_length(this.form);
                            class="form-control" name="content" rows=4 cols=30></textarea> <input size=2 value=200
                            name=text_num>
                        <br>


                    </div>

                    <div class="form-group">
                        <label>Deskripsi</label>
                        <input class="form-control" name="category"></input>
                    </div>

                    <select name='status'>
                        <option value='draft'>draft</option>
                        <option value='post'>post</option>
                    </select>
                    <button type="submit" class="btn btn-primary" name="submit" value="simpan">Simpan data</button>
                </form>


            </div>
        </div>
    </div>

    <script type="text/javascript" src="assets/js/jquery-3.5.1.min.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
</body>

</html>