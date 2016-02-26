<?php
		include '../koneksi.php';
        $nopasien = $_GET['no'];
        $query = mysql_query("SELECT * FROM tbpasien WHERE NoPasien = '$nopasien'") or die(mysql_error());
        $r = mysql_fetch_array($query);
$date1 = new DateTime(date('Y-m-d', strtotime($r['Tgl_Lahir'])));
$date2 = new DateTime(date('Y-m-d'));
$interval = $date1->diff($date2);
?>

<html>
 <head>
 <style type="text/css">
 .head
 {
 margin-left:18em;
 margin-top:4em;
 margin-right:18em;
 padding-left:18pt;
 padding-top:10pt;
 background:orange;
 height:4em;
 border-radius:25px 25px 0px 0px;
 }
 #body
 {
 padding-left:18pt;
 padding-top:18pt;
 margin-left:18em;
 margin-right:18em;
 padding-left:18pt;
 background:skyblue;
 height:16em;
 border-radius:0px 0px 25px 25px;
 }
 </style>
 </head>
 <body>
 <div class="head">
 <table border='0'align='center'>
 <tr><td><h3>KARTU PASIEN RS PASIM PLUS</h3></td><td><img style='padding-left:8em'src='../images/pasim1.png'width='70'height='70'/></td></tr>
 </table>
  </div>
 <div id="body">
<form name='octav'>
 <table border='0' align='center'>
 <tr><td rowspan='10'><img src='foto/<?php echo $r['Foto']; ?>' width='125'height='150'></td></tr>
 <tr><td><b>Kode Pasien</td><td><b>:</td><td><b><?php echo $r['NoPasien']; ?></td></tr>
 <tr><td><b>Nama</td><td><b>:</td><td><b><?= $r['NmPasien']; ?></td></tr>
 <tr><td><b>Alamat</td><td><b>:</td><td><b><?= $r['Alamat'] ?></td></tr>
 <tr><td>Tempat Lahir</td><td>:</td><td><?= $r['Tmp_Lahir'] ?></td></tr>
 <tr><td>Tanggal Lahir</td><td>:</td><td><?= date('d F Y', strtotime($r['Tgl_Lahir'])) ?></td></tr>
 <tr><td>Usia</td><td>:</td><td><?php echo $interval->y . " Tahun, " . $interval->m." Bulan, ".$interval->d." Hari "; ?></td></tr>
 <tr><td>No Telpon</td><td>:</td><td><?= $r['No_Telp'] ?></td></tr>
 <tr><td>Tanggal Daftar</td><td>:</td><td><?= date('d F Y', strtotime($r['Tgl_Registrasi'])) ?></td></tr>
 </form>
 
 
 </div>
 </body>
</html>

<script>
		window.load = print_d();
		function print_d(){
			window.print();
		}
	</script>

	       <meta http-equiv="refresh" content="3;URL= ../index.php?page=./pasien/index">
