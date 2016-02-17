<?php

/* 
 * Ujikom 2016 SMK Pasim
 * Rismawan Junandia  * 
 */
include '../koneksi.php';
$IdKunjungan = $_GET['IdKunjungan'];

$query = "DELETE FROM tbkunjungan WHERE IdKunjungan='$IdKunjungan'";
$aksi = mysql_query($query);

if ($aksi) {
    echo "<script>alert('Data Berhasil Di Hapus'); window.location='../index.php?hal=lkunjungan';</script>";
}