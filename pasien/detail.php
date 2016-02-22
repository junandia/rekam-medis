<?php
		include 'koneksi.php';
        $nopasien = $_GET['no'];
        $query = mysql_query("SELECT * FROM tbpasien WHERE NoPasien = '$nopasien'") or die(mysql_error());
        $r = mysql_fetch_array($query);
?>
<table border="0" width="25%" align="center">
	<tr align="center">
		<td colspan="3"><img src="pasien/foto/<?php echo $r['Foto']; ?>" width="150" height="150"></td>
	</tr>
	<tr align="center">
		<td align="left">NoPasien</td>
		<td>:</td>
		<td align="left"><?php echo $r['NoPasien']; ?></td>
	</tr>
	<tr align="center">
		<td align="left">NmPasien</td>
		<td>:</td>
		<td align="left"><?php echo $r['NmPasien']; ?></td>
	</tr>
	<tr align="center">
		<td align="left">J_Kel</td>
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
		<td align="left">Tmp_Lahir</td>
		<td>:</td>
		<td align="left"><?php echo $r['Tmp_Lahir']; ?></td>
	</tr>
	<tr align="center">
		<td align="left">Tgl_Lahir</td>
		<td>:</td>
		<td align="left"><?php echo $r['Tgl_Lahir']; ?></td>
	</tr>
	<tr align="center">
		<td align="left">No_Telp</td>
		<td>:</td>
		<td align="left">+62<?php echo $r['No_Telp']; ?></td>
	</tr>
	<tr align="center">
		<td align="left">Tgl_Registrasi</td>
		<td>:</td>
		<td align="left"><?php echo $r['Tgl_Registrasi']; ?></td>
	</tr>
	<?php
                if ($_SESSION['level'] == "2" || $_SESSION['level'] == "3") {
            ?>
             <tr>
		<td align="left"><a href="index.php?page=./pasien/index" class="button primary">Kembali</a></td>
		<td></td>
		<td align="right"><button onclick="window.location='./pasien/cetak.php?no=<?php echo $nopasien;?>';" class="button info">Cetak Kartu Pasien</a></td>
	</tr>
            <?php
                }
                else{
            ?>
	<tr>
		<td align="center" colspan="3"><a href="index.php?page=./pasien/index" class="button primary">Kembali</a></td>
	</tr>
	<?php
}
	?>
</table>