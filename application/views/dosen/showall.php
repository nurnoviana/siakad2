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
<h1>Data Dosen</h1>
<br>
<br>
<table class="table table-bordered">
<tr>
	<th>ID Dosen</th>
	<th>NAMA Dosen</th>
	<th>Alamat Dosen</th>
	<th>Nomor Telepon</th>
	<th>Gender</th>
	<th>ACTION</th>
</tr>
<?php
	foreach ($dosen as $x) {
		echo "<tr>";
		echo "<td>".$x->iddosen."</td>";
		echo "<td>".$x->namadosen."</td>";
		echo "<td>".$x->alamatdosen."</td>";
		echo "<td>".$x->notlpdosen."</td>";
		echo "<td>".$x->genderdosen."</td>";
		echo "<td> ".anchor("dosen/edit/".$x->iddosen, 'Edit')." | ".anchor("dosen/del/".$x->iddosen, "Hapus")."</td>";
		echo "</tr>";
	}
?>
</table>
<button class="btn btn-gradient-primary btn-rounded btn-fw" onclick="location.href='<?php echo site_url("dosen/input"); ?>'">Tambah Data</button>
<br>
