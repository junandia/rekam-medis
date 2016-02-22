<?php

/* 
 * Ujikom 2016 SMK Pasim
 * Rismawan Junandia  * 
 */
include '../koneksi.php';
$NoPasien = $_GET['NoPasien'];

$query = "DELETE FROM tbpasien WHERE NoPasien='$NoPasien'";
$aksi = mysql_query($query);

if ($aksi) {
    echo "<script>alert('Data Berhasil Di Hapus'); window.location='../index.php?page=./pasien/index';</script>";
}