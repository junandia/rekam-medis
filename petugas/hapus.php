<?php

/* 
 * Ujikom 2016 SMK Pasim
 * Rismawan Junandia  * 
 */
include '../koneksi.php';
$KdPetugas = $_GET['KdPetugas'];
$cekKd = mysql_query("SELECT * FROM petugas");
$r = mysql_fetch_array($cekKd);
$Kd_User = $r['Kd_User'];
$query = "DELETE FROM petugas WHERE Kd_Petugas='$KdPetugas'";
$aksi = mysql_query($query);
$query2 = mysql_query("DELETE FROM login WHERE Kd_User='$Kd_User'");

if ($aksi && $query2) {
    echo "<script>alert('Data Berhasil Di Hapus'); window.location='../index.php?hal=lpetugas';</script>";
}