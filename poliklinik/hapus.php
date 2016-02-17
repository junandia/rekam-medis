<?php

/* 
 * Ujikom 2016 SMK Pasim
 * Rismawan Junandia  * 
 */
include '../koneksi.php';
$KdPoli = $_GET['KdPoli'];

$query = "DELETE FROM poliklinik WHERE KdPoli='$KdPoli'";
$aksi = mysql_query($query);

if ($aksi) {
    echo "<script>alert('Data Berhasil Di Hapus'); window.location='../index.php?hal=lpoli';</script>";
}