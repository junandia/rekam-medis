<?php

/* 
 * Ujikom 2016 SMK Pasim
 * Rismawan Junandia  * 
 */
$level = $_SESSION['level'];
include 'koneksi.php';
$query = mysql_query("SELECT * FROM tbdokter JOIN poliklinik ON tbdokter.Kd_Poli = poliklinik.KdPoli");
?>

    <table class="dataTable table cell-hovered border bordered" data-role="datatable" data-searching="true">
    <thead>
        <tr>
            <td>Kode Dokter</td>
            <td>Nama Dokter</td>
            <td>Nama Poli</td>
            <?php
            if ($level == "3"){
            ?>
            <td>Aksi</td>
            <?php
            }
            ?>
            
        </tr>
    </thead>
    <tbody>
<?php
while ($r = mysql_fetch_array($query)) {
?>
        <tr>
            <td><?php echo $kd = $r['Kd_Dokter']; ?></td>
            <td><?php echo $r['NmDokter']; ?></td>
            <td><?php echo $r['NmPoli']; ?></td>
            <?php
            if ($_SESSION['level'] == "3" || $_SESSION['level'] == "2"){
            ?>
            <td><button class="button warning" onclick="window.location='index.php?page=./dokter/index&KdDokter=<?php echo $kd; ?>'">Ubah</button> <button class="button danger" onclick="window.location='dokter/hapus.php?KdDokter=<?php echo $kd; ?>'">Hapus</button></td>
            <?php
            }
            ?>

        </tr>
<?php 
}
?>
</tbody>
    </table>