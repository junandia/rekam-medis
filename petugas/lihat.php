<?php

/* 
 * Ujikom 2016 SMK Pasim
 * Rismawan Junandia  * 
 */
$level = $_SESSION['level'];

include 'koneksi.php';
$query = mysql_query("SELECT * FROM petugas");
?>

    <table class="dataTable table cell-hovered border bordered" data-role="datatable" data-searching="true">
    <thead>
        <tr>
            <td>Kode Petugas</td>
            <td>Nama Petugas</td>
            <td>Bagian</td>
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
            <td><?php echo $kd = $r['Kd_Petugas']; ?></td>
            <td><?php echo $r['Nm_Petugas']; ?></td>
            <td>
            <?php 
            $b = $r['Bagian'];
            if ($b == "3") {
                echo 'Admin';
            }
            else {
                echo 'Petugas';
            }
            ?></td>
            <?php
            if ($level == "3"){
            ?>
            <td><button class="button warning" onclick="window.location='index.php?page=./petugas/index&KdPetugas=<?php echo $kd; ?>'">Edit</button> <button class="button danger" onclick="window.location='petugas/hapus.php?KdPetugas=<?php echo $kd; ?>'">Hapus</button></td>
            <?php
            }
            ?>
        </tr>
<?php 
}
?>
</tbody>
    </table>