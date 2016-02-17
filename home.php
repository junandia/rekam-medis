<?php

/* 
 * Ujikom 2016 SMK Pasim
 * Rismawan Junandia  * 
 */
    include 'koneksi.php';

?>

<table border="0" align="center">
    <tr align="center">
        <td><font size="5"><b>R.S PASIM SUKABUMI</b></font></td>
    </tr>
    <tr align="center">
    	<td><img src="pasim.jpg" width="250" height="250"></td>
    </tr>
    <?php
    if ($_SESSION['level'] == "3" || $_SESSION['level'] == "2") {
    ?>
    <tr align="center">
        <td><font size="5">SELAMAT DATANG DI SISTEM INFORMASI REKAM MEDIS</font></td>
    </tr>

    <tr align="center">
    	<td>Apakah Pasien Pernah Berobat Disini?</td>
    </tr>
    <tr align="center">
    	<td><button onclick="window.location='index.php?hal=tkunjungan';">Pernah</button> <button onclick="window.location='index.php?hal=tpasien';">Belum Pernah</button></td>
    </tr>
    <?php
    }
    else {
        $cekq = mysql_query("SELECT * FROM tbdokter WHERE Kd_User = $_SESSION[Kd_User]");
        $level = mysql_fetch_array($cekq);
    ?>
        <tr align="center">
        <td><font size="5">SELAMAT DATANG <b><i><?php  echo $level['NmDokter']; ?></i></b></font></td>
    </tr>
    <?php
    }
    ?>
</table>