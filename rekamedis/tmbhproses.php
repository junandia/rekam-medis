<?php

/* 
 * Ujikom 2016 SMK Pasim
 * Rismawan Junandia  * 
 */
date_default_timezone_set('Asia/Jakarta');
include '../koneksi.php';
include '../session.php';
$tgl = date('Y-m-d');
$No_Rm              = $_POST['No_Rm'];
$Kd_User            = $_SESSION['Kd_User'];
$No_Pasien          = $_POST['No_Pasien'];
$Diagnosa           = $_POST['Diagnosa'];
$Keluhan            = $_POST['Keluhan'];
$Tgl_Pemeriksaan    = $tgl;
$Ket                = $_POST['Ket'];

$query = "INSERT INTO `rekamedis`.`rekammedis` VALUES ('$No_Rm', '$No_Pasien', '$Kd_User', '$Diagnosa', '$Keluhan', '$Tgl_Pemeriksaan', '$Ket')";
$aksi = mysql_query($query) or die(mysql_error());
if ($aksi) {
    echo "<script>alert('Data Berhasil Di Rekam'); window.location='../index.php?page=./rekamedis&waktu=today'</script>";
}
?>