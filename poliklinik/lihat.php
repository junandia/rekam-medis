<?php

/* 
 * Ujikom 2016 SMK Pasim
 * Rismawan Junandia  * 
 */
$level = $_SESSION['level'];

include 'koneksi.php';
$query = mysql_query("SELECT * FROM poliklinik");
?>

    <table class="dataTable table cell-hovered border bordered" data-role="datatable" data-searching="true">
    <thead>
        <tr>
            <td>Nama Poliklinik</td>
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
    $kd = $r['KdPoli'];
?>
        <tr>
            <td><?php echo $r['NmPoli']; ?></td>
            <?php
            if ($level == "3"){
            ?>
            <td><button class="button warning" onclick="window.location='index.php?page=./poliklinik/index&KdPoli=<?php echo $kd; ?>'">Edit</button> <button class="button danger" onclick="window.location='poliklinik/hapus.php?KdPoli=<?php echo $kd; ?>'">Hapus</button></td>
            <?php
            }
            ?>
        </tr>
<?php 
}
?>
</tbody>
    </table>
