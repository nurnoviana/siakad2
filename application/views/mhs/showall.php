<?php
	if ($this->session->login_status != True) {
		redirect('login');
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

</body>
</html>
<h1>Data Mahasiswa</h1>
<br>
<br>
<table class="table table-bordered">
<tr>
	<th>NIM</th>
	<th>NAMA MHS</th>
	<th>ALAMAT</th>
	<th>TGL LAHIR</th>
	<th>GENDER</th>
	<th>ACTION</th>
</tr>
<?php
	foreach ($mahasiswa as $x) {
		echo "<tr>";
		echo "<td>".$x->nim."</td>";
		echo "<td>".$x->nama."</td>";
		echo "<td>".$x->alamat."</td>";
		echo "<td>".$x->tgllhr."</td>";
		echo "<td>".$x->gender."</td>";
		echo "<td> ".anchor("mahasiswa/edit/".$x->nim, 'Edit')." | ".anchor("mahasiswa/del/".$x->nim, "Hapus")."</td>";
		echo "</tr>";
	}
?>
</table>
<button class="btn btn-gradient-primary btn-rounded btn-fw" onclick="location.href='<?php echo site_url("mahasiswa/input"); ?>'">Tambah Data</button>
<br>
