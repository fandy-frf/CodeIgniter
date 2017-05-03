<!DOCTYPE html>
<html>
<head>
	<title>Form Tambah Data</title>
</head>
<body>
<h3>
	Form Tambah Data
</h3>
<?php echo form_open('komentar/add_komentar');?>
<table>
	<tr>
		<td>Nama</td>
		<td>:</td>
		<td>
			<?php
			$nama = array('name'=> 'nama',
				'maxlength' => '30',
				'value' => '',
				'size' => '30');
			echo form_input($nama);
			?>
		</td>
	</tr>
	<tr>
		<td>URL</td>
		<td>:</td>
		<td>
			<?php
			$url = array('name'=> 'url',
				'maxlength' => '30',
				'value' => '',
				'size' => '20');
			echo form_input($url);
			?>
		</td>
	</tr>
	<tr>
		<td>Pesan</td>
		<td>:</td>
		<td>
			<?php
			$pesan = array('name'=> 'pesan',
				'cols' => '30',
				'rows' => '3');
			echo form_textarea($pesan);
			?>
		</td>
	</tr>
	<tr>
		<td></td>
		<td></td>
		<td>
			<?php echo form_submit('submit','Simpan','id="Submit"');
			?>
		</td>
	</tr>
</table>
<?php echo form_close();?>
</body>
</html>