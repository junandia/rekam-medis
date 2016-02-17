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

    <table id="table" border="1" width="40%" cellspacing="1" cellpadding="3">
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
            <td><button onclick="window.location='index.php?hal=detailrekam&norm=<?php echo $r['No_Rm']; ?>'"><?php echo $r['No_Rm']; ?></button></td>
        </tr>
        <?php
            }
        ?>
        
    </tbody>
    </table>
