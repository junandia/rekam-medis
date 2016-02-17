<?php

/* 
 * Ujikom 2016 SMK Pasim
 * Rismawan Junandia  * 
 */

include '../koneksi.php';
$Kd_Petugas = $_POST['Kd_Petugas'];
$Nm_Petugas = $_POST['Nm_Petugas'];
$Bagian = $_POST['Bagian'];
$Kd_User = $_POST['Kd_User'];

$query = "UPDATE `rekamedis`.`petugas` SET `Nm_Petugas` = '$Nm_Petugas', `Bagian` = '$Bagian ', `Kd_User` = '$Kd_User'  WHERE `petugas`.`Kd_Petugas` = '$Kd_Petugas'";
$aksi = mysql_query($query);

if ($aksi) {
    echo "<script>alert('Data Berhasil Di Ubah'); window.location='../index.php?hal=lpetugas';</script>";
}