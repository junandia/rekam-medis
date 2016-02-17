<?php

/* 
 * Ujikom 2016 SMK Pasim
 * Rismawan Junandia  * 
 */
include '../koneksi.php';
$Kd_Petugas         = $_POST['Kd_Petugas'];
$Nm_Petugas         = $_POST['Nm_Petugas'];
$Bagian             = $_POST['Bagian'];
$password           = md5($_POST['password']);
$username           = $_POST['username'];
$cekKdq = mysql_query("SELECT * FROM login ORDER BY Kd_User ASC");
while ($cekLKd = mysql_fetch_array($cekKdq)) {
$Kd = $cekLKd['Kd_User'];
$Kd_User = $Kd+1;
}

$query = mysql_query("INSERT INTO petugas VALUES('$Kd_Petugas','$Nm_Petugas','$Bagian','$Kd_User')") or die(mysql_error());
$login = mysql_query("INSERT INTO login VALUES('$Kd_User','$username','$password','$Bagian','Y')"); 

if ($query && $login) {
    echo "<script>alert('Petugas Berhasil Ditambahkan'); window.location='../index.php?hal=lpetugas';</script>";
}
?>