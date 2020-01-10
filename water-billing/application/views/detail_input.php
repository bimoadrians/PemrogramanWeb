<!DOCTYPE html>
<html>
<head>
	<title>Input Data</title>
	    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        <link href="<?= base_url('assets/'); ?>css/sb-admin-2.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	<div class="container mx-auto text-center my-5">
		<h1>Input Data</h1>
		<h4>Tambah data baru</h4>
		<hr>
	<form action="<?php echo base_url(). 'crud_detail/tambah_aksi'; ?>" method="post">
		<table style="margin:20px auto;">
			<tr>
				<td>ID Detail</td>
				<td><input class="form-control form-control-sm mt-2 ml-3" type="text" name="id_detail"></td>
			</tr>
			<tr>
				<td>ID Transaksi</td>
				<td><input class="form-control form-control-sm mt-2 ml-3" type="text" name="id_mst"></td>
			</tr>
			<tr>
				<td>ID Pelanggan</td>
				<td><input class="form-control form-control-sm mt-2 ml-3" type="text" name="id_plnggn"></td>
			</tr>
			<tr>
				<td>Jumlah Bulan Lalu</td>
				<td><input class="form-control form-control-sm mt-2 ml-3" type="text" name="jml_bulan_lalu"></td>
			</tr>
			<tr>
				<td>Jumlah Bulan Ini</td>
				<td><input class="form-control form-control-sm mt-2 ml-3" type="text" name="jml_bulan_ini"></td>
			</tr>
			<tr>
				<td>Harga Satuan</td>
				<td><input class="form-control form-control-sm mt-2 ml-3" type="text" name="harga_satuan"></td>
			</tr>
			<tr>
				<td>Tanggal Bayar</td>
				<td><input class="form-control form-control-sm mt-2 ml-3" type="text" name="tgl_bayar"></td>
			</tr>
			<tr>
				<td>Status</td>
				<td><input class="form-control form-control-sm mt-2 ml-3" type="text" name="status_bayar"></td>
			</tr>
			<tr>
				<td>Jumlah</td>
				<td><input class="form-control form-control-sm mt-2 ml-3" type="text" name="jml_bayar"></td>
			</tr>
			<tr>
				<td></td>
				<td><input class="mt-2 btn btn-success " type="submit" value="&#xf055 Tambah"></td>
			</tr>
			<tr>
				<td></td>
				<td><a href="index" class="btn btn-danger mt-2" name="back"><i class="fa fa-reply"></i> Kembali
                    </a></td>
			</tr>
		</table>
	</form>	
	</div>
</body>
</html>