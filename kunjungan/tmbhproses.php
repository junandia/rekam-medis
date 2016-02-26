<?php

/* 
 * Ujikom 2016 SMK Pasim
 * Rismawan Junandia  * 
 */
include '../koneksi.php';
date_default_timezone_set('Asia/Jakarta');
$TglKunjungan = date('Y-m-d');
$JamKunjungan = date('H:i:s');
$NoPasien           = $_POST['NoPasien'];
$Kd_Poli            = $_POST['Kd_Poli'];
$query = mysql_query("SELECT * FROM tbkunjungan WHERE TglKunjungan ='$TglKunjungan'");
$cek = mysql_num_rows($query);
if ($cek == "0") {
    $No_Antrian = 1;
}
 else {
while ($cekLAntiran = mysql_fetch_array($query)) {
$No = $cekLAntiran['No_Antrian'];
$No_Antrian = $No+1;

}    
}


$query = mysql_query("INSERT INTO `rekamedis`.`tbkunjungan` VALUES (NULL, '$TglKunjungan', '$NoPasien', '$Kd_Poli', '$JamKunjungan', '$No_Antrian');
") or die(mysql_error());

if ($query) {
    echo "<script>alert('Kunjungan Berhasil Ditambahkan'); window.location='../index.php?page=./kunjungan/index';</script>";
}
?>