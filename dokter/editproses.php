<?php

/* 
 * Ujikom 2016 SMK Pasim
 * Rismawan Junandia  * 
 */

include '../koneksi.php';
$Kd_Dokter          = $_POST['Kd_Dokter'];
$NmDokter           = strtoupper($_POST['NmDokter']);
$TmpLahir           = $_POST['TmpLahir'];
$TglLahir		    = date('Y-m-d', strtotime($_POST['TglLahir']));
$Alamat             = $_POST['Alamat'];
$NoTelp             = $_POST['NoTelp'];
$Kd_Poli            = $_POST['Kd_Poli'];

$query = "UPDATE `rekamedis`.`tbdokter` SET `NmDokter` = '$NmDokter', `TmpLahir` = '$TmpLahir ',`Kd_Poli` = '$Kd_Poli ', `TglLahir` = '$TglLahir ', `Alamat` = '$Alamat ', `NoTelp` = '$NoTelp' WHERE `tbdokter`.`Kd_Dokter` = '$Kd_Dokter'";
$aksi = mysql_query($query);

if ($aksi) {
    echo "<script>alert('Data Berhasil Di Ubah'); window.location='../index.php?page=./dokter/index';</script>";
}