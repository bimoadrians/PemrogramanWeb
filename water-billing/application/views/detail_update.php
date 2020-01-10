<!DOCTYPE html>
<html>
<head>
	<title>Update Data</title>
</head>
<body>
	<center>
		<h1>Update Data</h1>
		<h3>Ganti Data</h3>
	</center>
	<form action="<?php echo base_url(). 'crud_detail/update_data'; ?>" method="post">
		<table style="margin:20px auto;">
			<tr>
				<td>Id_detail</td>
				<td><input type="text" name="id_detail"></td>
			</tr>
			<tr>
				<td>Id_mst</td>
				<td><input type="text" name="id_mst"></td>
			</tr>
			<tr>
				<td>Id_pelanggan</td>
				<td><input type="text" name="id_plnggn"></td>
			</tr>
			<tr>
				<td>Jml_bulan_lalu</td>
				<td><input type="text" name="jml_bulan_lalu"></td>
			</tr>
			<tr>
				<td>Jml_bulan_ini</td>
				<td><input type="text" name="jml_bulan_ini"></td>
			</tr>
			<tr>
				<td>Harga_satuan</td>
				<td><input type="text" name="harga_satuan"></td>
			</tr>
			<tr>
				<td>Tgl_bayar</td>
				<td><input type="text" name="tgl_bayar"></td>
			</tr>
			<tr>
				<td>Status</td>
				<td><input type="text" name="status_bayar"></td>
			</tr>
			<tr>
				<td>Jml_bayar</td>
				<td><input type="text" name="jml_bayar"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Update"></td>
			</tr>
		</table>
	</form>	
</body>
</html>