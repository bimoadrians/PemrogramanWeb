<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Hitung Tagihan</title>
    <link rel="icon" href="assets/img/ico.png" type="image/ico">
    <!-- Custom fonts for this template-->
    <link href="<?= base_url('assets/'); ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?= base_url('assets/'); ?>css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-light">

    <div class="table-responsive-xl">
        <table class="table-striped table-bordered text-center mx-auto my-5" style="width: 80%;">
            <h1 class="text-center mx-auto pt-5">Riwayat Tagihan</h1>
            <thead class="thead-dark">
                <tr class="table-primary">
                    <td class="table-primary" scope="col"><strong>Jumlah Bulan Lalu</strong></td>
                    <td class="table-primary" scope="col"><strong>Jumlah Bulan Ini</strong></td>
                    <td class="table-primary" scope="col"><strong>Tanggal Bayar</strong></td>
                    <td class="table-primary" scope="col"><strong>Status Bayar</strong></td>
                    <td class="table-primary" scope="col"><strong>Jumlah Bayar</strong></td>
                </tr>
            </thead>
            <tbody class="table-primary">
                <?php foreach ($detail_transaksi as $d): ?>
                    <tr>
                        <td><?=$d->jml_bulan_lalu;?></td>
                        <td><?=$d->jml_bulan_ini;?></td>
                        <td><?=$d->tgl_bayar;?></td>
                        <td><?=$d->status_bayar;?></td>
                        <td><?=$d->jml_bayar;?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
        

        <script src="<?= base_url('assets/'); ?>vendor/jquery/jquery.min.js"></script>
        <script src="<?= base_url('assets/'); ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="<?= base_url('assets/'); ?>vendor/jquery-easing/jquery.easing.min.js"></script>
        <script src="<?= base_url('assets/'); ?>js/sb-admin-2.min.js"></script>
</body>

</html>