<?php

/* 
 * Ujikom 2016 SMK Pasim
 * Rismawan Junandia  * 
 */

include '../koneksi.php';
$KdPoli       = $_POST['KdPoli'];
$NmPoli       = $_POST['NmPoli'];


$query = "UPDATE `rekamedis`.`poliklinik` SET `NmPoli` = '$NmPoli' WHERE `poliklinik`.`KdPoli` = '$KdPoli'";
$aksi = mysql_query($query) or die(mysql_error());

if ($aksi) {
    echo "<script>alert('Data Berhasil Di Ubah'); window.location='../index.php?hal=lpoli';</script>";
}