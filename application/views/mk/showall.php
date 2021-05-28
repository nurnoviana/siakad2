<?php
	if ($this->session->login_status != True) {
		redirect('login');
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Data Mata Kuliah</title>
</head>
<body>

</body>
</html>
<h1>Data Mata Kuliah</h1>
<br>
<br>
<table class="table table-bordered">
<tr>
	<th>Kode Mata Kuliah</th>
	<th>Nama Mata Kuliah</th>
	<th>Semester</th>
	<th>SKS</th>
	<th>ACTION</th>
</tr>
<?php
	foreach ($makul as $x) {
		echo "<tr>";
		echo "<td>".$x->kodemakul."</td>";
		echo "<td>".$x->namamakul."</td>";
		echo "<td>".$x->smt."</td>";
		echo "<td>".$x->sks."</td>";
		echo "<td> ".anchor("makul/edit/".$x->kodemakul, 'Edit')." | ".anchor("makul/del/".$x->kodemakul, "Hapus")."</td>";
		echo "</tr>";
	}
?>
</table>
<br>
<button class="btn btn-gradient-primary btn-rounded btn-fw" onclick="location.href='<?php echo site_url("makul/input"); ?>'">Tambah Data</button>
<br>
<br>
