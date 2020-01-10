<!DOCTYPE html>
<html>
<head>
	<title>Login Admin</title>
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
    <link href="<?= base_url('assets/'); ?>css/sb-admin-2.min.css" rel="stylesheet">
</head>
<body>
	<!-- <h1>Login Admin</h1>
	<form action="<?php echo base_url('login/aksi_login'); ?>" method="post">		
		<table>
			<tr>
				<td>Username</td>
				<td><input type="text" name="username"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="password" name="password"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Login"></td>
			</tr>
		</table>
	</form>-  -->
	<div class="container login-container my-5 mx-auto">
                <div class="col-md-6 login-form-2">
                    <h3>Login Admin</h3>
                    <form action="<?php echo base_url('login/aksi_login'); ?>" method="post">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Masukkan Username *" name="username" />
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="Masukkan Password*" name="password" />
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btnSubmit btn btn-primary" value="Login" />
                        </div>
                    </form>
                </div>
    </div>
</body>
</html>