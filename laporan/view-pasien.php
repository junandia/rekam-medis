<?php
include '../koneksi.php';
$tawal = $_GET['Tawal'];
$takhir = $_GET['Takhir'];
$all = mysql_query("SELECT * FROM tbpasien WHERE Tgl_Registrasi BETWEEN '$tawal' AND '$takhir'") or die(mysql_error());
$row = mysql_fetch_array($all);

?>
       <meta http-equiv="refresh" content="3;URL= ../index.php?page=./pasien/index">

<html>
<head>
	<title>REKAM MEDIS PASIEN</title>
	<meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
   
     <style type="text/css">
  body{background:#efefef;font-family:arial;}
  #wrapshopcart{width:70%;margin:3em auto;padding:30px;background:#fff;box-shadow:0 0 15px #ddd;}
  h1{margin:0;padding:0;font-size:2.5em;font-weight:bold;}
  p{font-size:1em;margin:0;}
  table{margin:2em 0 0 0; border:1px solid #eee;width:100%; border-collapse: separate;border-spacing:0;}
  table th{background:#fafafa; border:none; padding:20px ; font-weight:normal;text-align:left;}
  table td{background:#fff; border:none; padding:12px  20px; font-weight:normal;text-align:left; border-top:1px solid #eee;}
  table tr.total td{font-size:1.5em;}
  .btnsubmit{display:inline-block;padding:10px;border:1px solid #ddd;background:#eee;color:#000;text-decoration:none;margin:2em 0;}
  form{margin:2em 0 0 0;}
  label{display:inline-block;width:auto;}
  input[type=text]{border:1px solid #bbb;padding:10px;width:30em;}
  textarea{border:1px solid #bbb;padding:10px;width:30em;height:5em;vertical-align:text-top;margin:0.3em 0 0 0;}
  .submitbtn{font-size:1.5em;display:inline-block;padding:10px;border:1px solid #ddd;background:#eee;color:#000;text-decoration:none;margin:0.5em 0 0 8em;};
  
  </style>
  <body>
 <div id="wrapshopcart">
<center><p align='center'><img src="../pasim.jpg" width="100" height="100"><h2>LAPORAN DATA PASIEN <BR/>RS PASIM PLUS KOTA SUKABUMI</h2><h4>Tanggal daftar antara <?php echo $tawal." dan ".$takhir; ?></h4></p>
<table width="100%" border="0">
<thead>
        <tr>
            <td>No Pasien</td>
            <td>Nama Pasien</td>
            <td>Jenis Kelamin</td>
            <td>Foto</td>
            <td>Tanggal Registrasi</td>
    </thead>
    <tbody>
<?php
while ($r = mysql_fetch_array($all)) {
    $no = $r['NoPasien'];

?>
        <tr>
            <td><a onclick="window.location='index.php?page=./pasien/detail&no=<?php echo $no; ?>'"><?php echo $no; ?></a></td>
            <td><?php echo $r['NmPasien']; ?></td>
            <td><?php echo $r['J_Kel']; ?></td>
            <td><img src="../pasien/foto/<?php echo $r['Foto']; ?>" width="50" height="50"></td>
            <td><?php echo date('d F Y', strtotime($r['Tgl_Registrasi'])); ?></td>
        </tr>
<?php 
}
?>
</tbody>
    </table>
</body>
</html>

<script>
    window.load = print_d();
    function print_d(){
      window.print();
    }
  </script>