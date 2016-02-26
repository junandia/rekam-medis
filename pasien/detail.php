<?php
	include 'koneksi.php';
        $nopasien = $_GET['no'];
        $query = mysql_query("SELECT * FROM tbpasien WHERE NoPasien = '$nopasien'") or die(mysql_error());
        $r = mysql_fetch_array($query);
?>
<br/><br/>
<table border="1" align="center" width="50%">
    <tr> 
        <td>
<table border="0" width="100%" align="center">
	<tr align="center">
            <td rowspan="10"><img src="pasien/foto/<?php echo $r['Foto']; ?>" width="250" height="250"></td>
	</tr>
	<tr align="center">
		<td align="left">Kode Pasien</td>
		<td>:</td>
		<td align="left"><?php echo $r['NoPasien']; ?></td>
	</tr>
	<tr align="center">
		<td align="left">Nama Pasien</td>
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
		<td align="left"><?php echo date('d-M-Y', strtotime($r['Tgl_Lahir'])); ?></td>
	</tr>
	<tr align="center">
		<td align="left">No Telpon</td>
		<td>:</td>
		<td align="left"><?php echo $r['No_Telp']; ?></td>
	</tr>
	<tr align="center">
		<td align="left">Tanggal Registrasi</td>
		<td>:</td>
		<td align="left"><?php echo date('d-M-Y', strtotime($r['Tgl_Registrasi'])); ?></td>
	</tr>
	<?php
                if ($_SESSION['level'] == "2" || $_SESSION['level'] == "3") {
            ?>
             <tr>
		<td align="right"><a href="index.php?page=./pasien/index" class="button primary">Kembali</a></td>
		<td></td>
		<td align="right"><a href="./pasien/cetak.php?no=<?php echo $nopasien;?>" target='_blank'  class="button info">Cetak</a></td>
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
        </td>
    </tr>
</table>

<?php
$level = $_SESSION['level'];
$nopasien = $_GET['no'];
$query = mysql_query("SELECT * FROM rekammedis WHERE No_Pasien = '$nopasien'");
?>
<a class="button warning" href="index.php?page=./rekamedis/tambah&pasien=<?php echo $nopasien;?>" target='_blank' >REKAM DATA BARU</a>
    <table class="dataTable table cell-hovered border bordered" data-role="datatable" data-searching="true">
    <thead>
        <tr align="center">
            <td>Tanggal Pemeriksaan</td>
            <td>Rekam Medis</td>
        </tr>
    </thead>
    <tbody>
        <?php
            while ($r = mysql_fetch_array($query)) {
        ?>
        <tr align="center">
            <td><?php echo date('d F Y', strtotime($r['Tgl_Pemeriksaan'])); ?></td>
            <td><button class="button warning" onclick="window.location='index.php?page=./rekamedis/detail&norm=<?php echo $r['No_Rm']; ?>'"><?php echo $r['No_Rm']; ?></button></td>
        </tr>
        <?php
            }
        ?>
        
    </tbody>
    </table>

