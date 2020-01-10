<!DOCTYPE html>
<html>
<head>
	<title>Detail Transaksi</title>
	<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        <link href="<?= base_url('assets/'); ?>css/sb-admin-2.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body> 
	<div class="container my-5">
	<center><h1>Detail Transaksi</h1></center>
	<br>
	<a href="<?php echo base_url('crud_detail/tambah'); ?>" class="btn btn-primary mb-3"><i class="fa fa-plus-circle"></i> Tambah Data</a>
	<table class="table table-striped border border-dark shadow-sm p-3 mb-5 bg-white rounded text-center">
		  <thead class="thead-dark">
		    <tr>
		    	<!-- <th scope="col">#</th> -->
		    	<th scope="col">ID Detail</th>
				<th scope="col">ID Transaksi</th>
				<th scope="col">ID Pelanggan</th>
				<th scope="col">Jumlah Bulan Lalu</th>
				<th scope="col">Jumlah Bulan Ini</th>
				<th scope="col">Harga per Kubik</th>
				<th scope="col">Tanggal</th>
				<th scope="col">Status Pembayaran</th> 
				<th scope="col">Jumlah Tagihan</th>
				<th scope="col"></th>
		    </tr>
		  </thead>
		  <tbody>
		    <?php 
			$no = 1;
			foreach($detail_transaksi as $d){ 
			?>
			<tr>
				<td><?php echo $d->id_detail ?></td>
				<td><?php echo $d->id_mst ?></td>
				<td><?php echo $d->id_plnggn ?></td>
				<td><?php echo $d->jml_bulan_lalu ?></td>
				<td><?php echo $d->jml_bulan_ini ?></td>
				<td><?php echo $d->harga_satuan ?></td>
				<td><?php echo $d->tgl_bayar ?></td>
				<td><?php echo $d->status_bayar ?></td>
				<td><?php echo $d->jml_bayar ?></td>
				<td>
					<form action="<?= base_url(). 'crud_detail/update'; ?>" method="post" class="badge badge-success"><i class="fa fa-cogs"></i> Update</form>
					<a href="<?= base_url('crud_detail/hapus/'.$d->id_detail); ?>" class="badge badge-danger"><i class="fa fa-times"></i> Hapus</a>
				</td>
			</tr>
			<?php } ?>
		  </tbody>
		</table>

	<!-- <table style="margin:20px auto;" border="1">
		<tr>
			<th>Id_detail</th>
			<th>Id_mst</th>
			<th>Id_plnggn</th>
			<th>Jml_bulan_lalu</th>
			<th>Jml_bulan_ini</th>
			<th>Harga_satuan</th>
			<th>Tgl_bayar</th>
			<th>Status</th> 
			<th>Jml_bayar</th>
		</tr>
		<?php 
		$no = 1;
		foreach($detail_transaksi as $d){ 
		?>
		<tr>
			<td><?php echo $d->id_detail ?></td>
			<td><?php echo $d->id_mst ?></td>
			<td><?php echo $d->id_plnggn ?></td>
			<td><?php echo $d->jml_bulan_lalu ?></td>
			<td><?php echo $d->jml_bulan_ini ?></td>
			<td><?php echo $d->harga_satuan ?></td>
			<td><?php echo $d->tgl_bayar ?></td>
			<td><?php echo $d->status_bayar ?></td>
			<td><?php echo $d->jml_bayar ?></td>
			<td><form action="<?php echo base_url(). 'crud_detail/update'; ?>" method="post">
				<button>Update</button>
			</form>
				<button class="btn-warning"><?php echo anchor('crud_detail/hapus/'.$d->id_detail,'Hapus'); ?></button>
			</td>
		</tr>
		<?php } ?>
	</table> -->

	<a href="<?php echo base_url('login/logout'); ?>" class="btn btn-danger mb-4"><i class="fa fa-reply"></i> Logout</a>
	</div>
	<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
 
</body>
</html>