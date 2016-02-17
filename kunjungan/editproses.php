<?php

/* 
 * Ujikom 2016 SMK Pasim
 * Rismawan Junandia  * 
 */

include '../koneksi.php';
$IdKunjungan        = $_POST['IdKunjungan'];
$TglKunjungan       = date('Y-m-d', strtotime($_POST['TglKunjungan']));
$NoPasien           = $_POST['NoPasien'];
$Kd_Poli            = $_POST['Kd_Poli'];
$JamKunjungan       = $_POST['JamKunjungan'];
$No_Antrian         = $_POST['No_Antrian'];


$query = "UPDATE `rekamedis`.`tbkunjungan` SET `NoPasien` = '02', `KdPoli` = '2', `JamKunjungan` = '$JamKunjungan' WHERE `tbkunjungan`.`IdKunjungan` = $IdKunjungan";
$aksi = mysql_query($query) or die(mysql_error());

if ($aksi) {
    echo "<script>alert('Data Berhasil Di Ubah'); window.location='../index.php?hal=lkunjungan';</script>";
}