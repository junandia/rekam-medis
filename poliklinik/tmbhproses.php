<?php

/* 
 * Ujikom 2016 SMK Pasim
 * Rismawan Junandia  * 
 */
include '../koneksi.php';
$NmPoli       = $_POST['NmPoli'];


$query = mysql_query("INSERT INTO poliklinik VALUES('','$NmPoli')") or die(mysql_error());

if ($query) {
    echo "<script>alert('Poliklinik Berhasil Ditambahkan'); window.location='../index.php?hal=lpoli';</script>";
}
?>