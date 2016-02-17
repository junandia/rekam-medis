<?php

/* 
 * Ujikom 2016 SMK Pasim
 * Rismawan Junandia  * 
 */

include '../koneksi.php';
$NoPasien       = $_POST['NoPasien'];
$NmPasien       = $_POST['NmPasien'];
$J_Kel          = $_POST['J_Kel'];
$Agama          = $_POST['Agama'];
$Alamat         = $_POST['Alamat'];
$Tmp_Lahir      = $_POST['Tmp_Lahir'];
$Tgl_Lahir      = $_POST['Tgl_Lahir'];
$No_Telp        = $_POST['No_Telp'];
$Foto           = $_FILES['Foto']['name'];
$Tgl_Registrasi = $_POST['Tgl_Registrasi'];

$query1 = "UPDATE `rekamedis`.`tbpasien` SET `NmPasien` = '$NmPasien', `J_Kel` = '$J_Kel', `Agama` = '$Agama ', `Alamat` = '$Alamat ', `Tmp_Lahir` = '$Tmp_Lahir ', `Tgl_Lahir` = '$Tgl_Lahir', `No_Telp` = '$No_Telp', `Tgl_Registrasi` = '$Tgl_Registrasi' WHERE `tbpasien`.`NoPasien` = '$NoPasien'";
$query2 = "UPDATE `rekamedis`.`tbpasien` SET `NmPasien` = '$NmPasien', `J_Kel` = '$J_Kel', `Agama` = '$Agama ', `Alamat` = '$Alamat ', `Tmp_Lahir` = '$Tmp_Lahir ', `Tgl_Lahir` = '$Tgl_Lahir', `No_Telp` = '$No_Telp', `Foto` = '$Foto', `Tgl_Registrasi` = '$Tgl_Registrasi' WHERE `tbpasien`.`NoPasien` = '$NoPasien'";
if (empty($Foto)) {
    $aksi1 = mysql_query($query1) or die(mysql_error());
    echo "<script>alert('Data Berhasil Di Ubah'); window.location='../index.php?hal=lpasien';</script>";
}
 elseif (!empty($Foto)) {
    $aksi2 = mysql_query($query2);
    move_uploaded_file($_FILES['Foto']['tmp_name'], "foto/".$_FILES['Foto']['name']);    
    echo "<script>alert('Data Berhasil Di Ubah'); window.location='../index.php?hal=lpasien';</script>";
}