<!-- Berikut adalah halaman yang menampilkan form, untuk penerapan form_validation -->

<!DOCTYPE html>
<html>
<head>
	<title>Membuat form validation dengan Codeigniter | MalasNgoding.com</title>
</head>
<body>
	<h1>Membuat Form Validation dengan CodeIgniter | MalasNgoding.com</h1>
	<!-- Berikut adalah baris kode yang memiliki tugas membuat form menggunakan helper form -->
	<?php echo form_open('form/aksi'); ?>
		<!-- Berikut adalah baris kode yang merfungsi untuk membuat label dan input serta button pada form -->
		<label>Nama</label><br/>
		<input type="text" name="nama"><br/>
		<?php echo form_error('nama'); ?>
		<label>Email</label><br/>
		<input type="text" name="email"><br/>
		<?php echo form_error('email'); ?>
		<label>Konfirmasi Email</label><br/>
		<input type="text" name="konfir_email"><br/>
		<?php echo form_error('konfir_email'); ?>
		<input type="submit" value="Simpan">
	</form>
</body>
</html>