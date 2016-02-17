<?php

/* 
 * Ujikom 2016 SMK Pasim
 * Rismawan Junandia  * 
 */
$level = $_SESSION['level'];

include 'koneksi.php';
$query = mysql_query("SELECT * FROM poliklinik");
?>

    <table id="table" border="1" width="40%" cellspacing="1" cellpadding="3">
    <thead>
        <tr>
            <td>Kode Poliklinik</td>
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
?>
        <tr>
            <td><?php echo $kd = $r['KdPoli']; ?></td>
            <td><?php echo $r['NmPoli']; ?></td>
            <?php
            if ($level == "3"){
            ?>
            <td><button onclick="window.location='index.php?hal=EditPoli&KdPoli=<?php echo $kd; ?>'">Edit</button> <button onclick="window.location='poliklinik/hapus.php?KdPoli=<?php echo $kd; ?>'">Hapus</button></td>
            <?php
            }
            ?>
        </tr>
<?php 
}
?>
</tbody>
    </table>
