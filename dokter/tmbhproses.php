<?php

/* 
 * Ujikom 2016 SMK Pasim
 * Rismawan Junandia  * 
 */
include '../koneksi.php';
$Kd_Dokter          = $_POST['Kd_Dokter'];
$NmDokter           = strtoupper($_POST['NmDokter']);
$TmpLahir           = $_POST['TmpLahir'];
$TglLahir           = $_POST['TglLahir'];
$Alamat             = $_POST['Alamat'];
$NoTelp             = $_POST['NoTelp'];
$Kd_Poli            = $_POST['Kd_Poli'];
$password           = md5($_POST['password']);
$username           = $Kd_Dokter;
$cekKdq = mysql_query("SELECT * FROM login ORDER BY Kd_User ASC");
while ($cekLKd = mysql_fetch_array($cekKdq)) {
$Kd = $cekLKd['Kd_User'];
$Kd_User = $Kd+1;
}


$query = mysql_query("INSERT INTO tbdokter VALUES('$Kd_Dokter','$NmDokter','$TmpLahir','$TglLahir','$Alamat','$NoTelp','$Kd_Poli','$Kd_User')") or die(mysql_error());
$login = mysql_query("INSERT INTO login VALUES('$Kd_User','$username','$password','1','Y')") or die(mysql_error()); 

if ($query && $login) {
   echo "<script>alert('Dokter Berhasil Ditambahkan'); window.location='../index.php?page=./dokter/index';</script>";
}
?>