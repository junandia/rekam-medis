<?php

/* 
 * Ujikom 2016 SMK Pasim
 * Rismawan Junandia  * 
 */
$level = $_SESSION['level'];

include 'koneksi.php';
$nopasien = $_GET['pasien'];
$query = mysql_query("SELECT * FROM rekammedis WHERE No_Pasien = '$nopasien'");
?>
<button class="button warning" onclick="window.location='index.php?page=./rekamedis/tambah&pasien=<?php echo $nopasien;?>'">REKAM DATA BARU</button>
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
