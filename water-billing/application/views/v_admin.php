<!DOCTYPE html>
<html>
<head>
	<title>Admin Page</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        <link href="<?= base_url('assets/'); ?>css/sb-admin-2.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div class="container my-5 text-center">
	   <h1>Login Succeded</h1>
	   <h2>Hai, <?php echo $this->session->userdata("nama"); ?></h2>
        <a href="<?php echo base_url('crud_detail'); ?>">
        <button type="submit" class="btn btn-warning mt-3" name="hitung">
        Cek Transaksi
        </button>
        </a>
        <br>
        <a href="<?php echo base_url('login/logout'); ?>" class="btn btn-danger mt-3"><i class="fa fa-reply"></i> Logout</a>
    </div>
	
</body>
</html>