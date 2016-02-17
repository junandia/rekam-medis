<?php

/* 
 * Ujikom 2016 SMK Pasim
 * Rismawan Junandia  * 
 */


if ($_GET['hal']) {
	$hal = $_GET['hal'];
	if ($hal == "index") {
		include 'home.php';
	}
        elseif ($hal == "tpasien") {
                include 'pasien/tambah.php';
        }
        elseif ($hal == "lpasien") {
                include 'pasien/lihat.php';
        }
        elseif ($hal == "EditPasien") {
                include 'pasien/edit.php';
        }
        elseif ($hal == "lpoli") {
                include 'poliklinik/lihat.php';
        }
        elseif ($hal == "tpoli") {
                include 'poliklinik/tambah.php';
        }
        elseif ($hal == "EditPoli") {
                include 'poliklinik/edit.php';
        }
        elseif ($hal == "lpetugas") {
                include 'petugas/lihat.php';
        }
        elseif ($hal == "tpetugas") {
                include 'petugas/tambah.php';
        }
        elseif ($hal == "EditPetugas") {
                include 'petugas/edit.php';
        }
        elseif ($hal == "ldokter") {
                include 'dokter/lihat.php';
        }
        elseif ($hal == "tdokter") {
                include 'dokter/tambah.php';
        }
        elseif ($hal == "EditDokter") {
                include 'dokter/edit.php';
        }
        elseif ($hal == "lkunjungan") {
                include 'kunjungan/lihat.php';
        }
        elseif ($hal == "tkunjungan") {
                include 'kunjungan/tambah.php';
        }
        elseif ($hal == "EditKunjungan") {
                include 'kunjungan/edit.php';
        }
        elseif ($hal == "rekamedis") {
                include 'rekamedis/index.php';
        }
        elseif ($hal == "rekamdata") {
                include 'rekamedis/tambah.php';
        }
        elseif ($hal == "lihatrekam") {
                include 'rekamedis/lihat.php';
        }
        elseif ($hal == "detailrekam") {
                include 'rekamedis/detail.php';
    }
	else {
		echo "<script>window.location='index.php?hal=index';</script>";
	}
}
else {
		echo "<script>window.location='index.php?hal=index';</script>";
	}
?>