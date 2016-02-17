<?php

/* 
 * Ujikom 2016 SMK Pasim
 * Rismawan Junandia  * 
 */
include 'koneksi.php';
include 'session.php';
$waktu = $_GET['waktu'];
$now = date('Y-m-d');
$level = $_SESSION['level'];
if ($waktu == "today") {
    $sql = mysql_query("SELECT * FROM tbkunjungan JOIN tbpasien ON tbkunjungan.NoPasien = tbpasien.NoPasien JOIN poliklinik ON tbkunjungan.KdPoli = poliklinik.KdPoli WHERE TglKunjungan = '$now' ") or die(mysql_error());
}
elseif ($waktu == "alldata") {
     $sql = mysql_query("SELECT * FROM tbkunjungan JOIN tbpasien ON tbkunjungan.NoPasien = tbpasien.NoPasien JOIN poliklinik ON tbkunjungan.KdPoli = poliklinik.KdPoli");
}
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Sistem Informasi Rekam Medis</title>
        <link href="style.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="jquery.dataTables.min.css">
        <script type="text/javascript" src="jquery.dataTables.min.js"></script>

    </head>
    <body>
        <header>
            <?php
            $level = $_SESSION['level'];
            if ($level == "3"){
                include 'head/admin.php';
            }
            elseif ($level == "2") {
                include 'head/petugas.php';
            }
            else {
                include 'head/dokter.php';
            }
            ?>
        </header>
        <section id="content">

<table id="table" border="1"  cellspacing="1" cellpadding="3">
    <thead>
        <tr>
            <td>Tanggal Kunjungan</td>
            <td>Nama Pasien</td>
            <td>Poliklinik</td>
            <td>Jam Kunjungan</td>
            <td>No Antrian</td>
            <td>Aksi</td>
        </tr>
    </thead>
    <tbody>
<?php
while ($r = mysql_fetch_array($sql)) {
?>
        <tr>
            <td><?php echo date('d M Y', strtotime($r['TglKunjungan'])); ?></td>
            <td><?php echo $r['NmPasien']; ?></td>
            <td><?php echo $r['NmPoli']; ?></td>
            <td><?php echo $r['JamKunjungan']; ?></td>
            <td><?php echo $r['No_Antrian']; ?></td>
            <?php
            if ($level == "3"){
            ?>
            <td><button onclick="window.location='kunjungan/hapus.php?IdKunjungan=<?php echo $r['IdKunjungan']; ?>'">Hapus</button></td>
            <?php
            }
            elseif ($level == "2") {
            ?>
            <td><button onclick="window.location='kunjungan/hapus.php?IdKunjungan=<?php echo $r['IdKunjungan']; ?>'">Hapus</button></td>
            <?php
            }
            else {
            ?>
            <td><button onclick="window.location = 'index.php?hal=lihatrekam&pasien=<?php echo $r['NoPasien']; ?>'">REKAM MEDIS</button> <button onclick="window.location = 'index.php?hal=rekamdata&pasien=<?php echo $r['NoPasien']; ?>'">TAMBAH</button></td>
            <?php
            }
            ?>
            

        </tr>
<?php 
}
?>
</tbody>
    </table>
            </section>

        <script type="text/javascript">
    $(document).ready(function(){
    $('#table').DataTable();
});
    </script>
        <footer>
            © 2016 RS Pasim Sukabumi - <a href="about.html">Junandia Group</a>
        </footer>
    </body>
</html>
