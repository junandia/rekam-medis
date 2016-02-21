<?php

/* 
 * Ujikom 2016 SMK Pasim
 * Rismawan Junandia  * 
 */
include '../koneksi.php';
date_default_timezone_set('Asia/Jakarta');
$tgl = date('Y-m-d');
$NoPasien       = $_POST['NoPasien'];
$NmPasien       = strtoupper($_POST['NmPasien']);
$J_Kel          = $_POST['J_Kel'];
$Agama          = $_POST['Agama'];
$Alamat         = $_POST['Alamat'];
$Tmp_Lahir      = $_POST['Tmp_Lahir'];
$Tgl_Lahir      = $_POST['Tgl_Lahir'];
$No_Telp        = $_POST['No_Telp'];
$Foto           = $_FILES['Foto']['name'];
$Tgl_Registrasi = $tgl;

$query = mysql_query("INSERT INTO tbpasien VALUES('$NoPasien','$NmPasien','$J_Kel','$Agama','$Alamat','$Tmp_Lahir','$Tgl_Lahir','$No_Telp','$Foto','$Tgl_Registrasi')") or die(mysql_error());

if ($query) {
    echo "<script>alert('Pasien Berhasil Ditambahkan'); window.location='../index.php?hal=lpasien';</script>";
    move_uploaded_file($_FILES['Foto']['tmp_name'], "foto/".$_FILES['Foto']['name']);    
}
?>