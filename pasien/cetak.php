<?php
		include '../koneksi.php';
        $nopasien = $_GET['no'];
        $query = mysql_query("SELECT * FROM tbpasien WHERE NoPasien = '$nopasien'") or die(mysql_error());
        $r = mysql_fetch_array($query);
?>
<meta http-equiv="refresh" content="3;URL= ../index.php?page=./pasien/index">
<table border="0" width="100%">
	<tr align="center">
		<td colspan="4" align="center"><font size="5px">RS Pasim Sukabumi<br/>Jl. Prana No 8A</font></td>
	</tr>
	<tr align="center">
		<td rowspan="10"><img src="foto/<?php echo $r['Foto']; ?>" width="150" height="150"></td>
	</tr>
	<tr align="center">
		<td align="left">Kode Pasien</td>
		<td>:</td>
		<td align="left"><?php echo $r['NoPasien']; ?></td>
	</tr>
	<tr align="center">
		<td align="left">Nama</td>
		<td>:</td>
		<td align="left"><?php echo $r['NmPasien']; ?></td>
	</tr>
	<tr align="center">
		<td align="left">Jenis Kelamin</td>
		<td>:</td>
		<td align="left"><?php echo $r['J_Kel']; ?></td>
	</tr>
	<tr align="center">
		<td align="left">Agama</td>
		<td>:</td>
		<td align="left"><?php echo $r['Agama']; ?></td>
	</tr>
	<tr align="center">
		<td align="left">Alamat</td>
		<td>:</td>
		<td align="left"><?php echo $r['Alamat']; ?></td>
	</tr>
	<tr align="center">
		<td align="left">Tempat Lahir</td>
		<td>:</td>
		<td align="left"><?php echo $r['Tmp_Lahir']; ?></td>
	</tr>
	<tr align="center">
		<td align="left">Tanggal Lahir</td>
		<td>:</td>
		<td align="left"><?php echo $r['Tgl_Lahir']; ?></td>
	</tr>
	<tr align="center">
		<td align="left">No Telpon</td>
		<td>:</td>
		<td align="left">+62<?php echo $r['No_Telp']; ?></td>
	</tr>
	<tr align="center">
		<td align="left">Tanggal Daftar</td>
		<td>:</td>
		<td align="left"><?php echo $r['Tgl_Registrasi']; ?></td>
	</tr>
</table>

<script>
		window.load = print_d();
		function print_d(){
			window.print();
		}
	</script>