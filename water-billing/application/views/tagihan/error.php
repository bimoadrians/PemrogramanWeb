<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Hitung Tagihan</title>

    <!-- Custom fonts for this template-->
    <link href="<?= base_url('assets/'); ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?= base_url('assets/'); ?>css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-light">

    <div class="text-center" style="padding-top:15%;">
        <div class="text-center">
            <img src="assets\img\sad.jpg" alt="Error" style="height:150px">
        </div>
        <h4 class="text-danger pt-4">Nomor Pelanggan Tidak Ditemukan</h4>
        <script>
            var timeleft = 4;
            var redirectTimer = setInterval(function() {
                document.getElementById("countdown").innerHTML = "akan dialihkan kembali dalam " + timeleft + " detik";
                timeleft -= 1;
            }, 1000);
        </script>
        <div id="countdown"></div>
        </p>
    </div>


    <!-- Bootstrap core JavaScript-->
    <script src="<?= base_url('assets/'); ?>vendor/jquery/jquery.min.js"></script>
    <script src="<?= base_url('assets/'); ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?= base_url('assets/'); ?>vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?= base_url('assets/'); ?>js/sb-admin-2.min.js"></script>
    <script>
        var delay = 5000;
        setTimeout(function() {
            window.location = 'auth';
        }, delay);
    </script>

</body>

</html>