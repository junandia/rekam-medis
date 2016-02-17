<?php

/* 
 * Ujikom 2016 SMK Pasim
 * Rismawan Junandia  * 
 */
include '../koneksi.php';
$KdDokter = $_GET['KdDokter'];
$cekKd = mysql_query("SELECT * FROM tbdokter");
$r = mysql_fetch_array($cekKd);
$Kd_User = $r['Kd_User'];
$query = "DELETE FROM tbdokter WHERE Kd_Dokter='$KdDokter'";
$aksi = mysql_query($query);
$query2 = mysql_query("DELETE FROM login WHERE Kd_User='$Kd_User'");

if ($aksi && $query2) {
    echo "<script>alert('Data Berhasil Di Hapus'); window.location='../index.php?hal=ldokter';</script>";
}