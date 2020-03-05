<!-- Berikut adalah halaman user yang berfungsi untuk menampilkan data dari database tabel user -->

<!DOCTYPE html>
<html>
<head>
	<title>Menghubungkan codeigniter dengan database mysql</title>
</head>
<body>
	<h1>Mengenal Model Pada Codeigniter | MalasNgoding.com</h1>
	<!-- Berikut adalah tabel yang menampilkan data dari database -->
	<table border="1">
		<tr>
			<th>Nama</th>
			<th>Alamat</th>
			<th>Pekerjaan</th>
		</tr>
		<!-- Berikut adalah perulangan yang mendefinisikan data dari array $user menjadi $u dan diulang sebanyak baris data yang ada di database tabel user -->
		<?php foreach($user as $u){ ?>
		<tr>
			<td><?php echo $u->nama ?></td>
			<td><?php echo $u->alamat ?></td>
			<td><?php echo $u->pekerjaan ?></td>
		</tr>
		<?php } ?>
	</table>
</body>
</html>