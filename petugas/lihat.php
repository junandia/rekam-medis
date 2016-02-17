<?php

/* 
 * Ujikom 2016 SMK Pasim
 * Rismawan Junandia  * 
 */
$level = $_SESSION['level'];

include 'koneksi.php';
$query = mysql_query("SELECT * FROM petugas");
?>

    <table id="table" border="1" width="50%" cellspacing="1" cellpadding="3">
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
            <td><button onclick="window.location='index.php?hal=EditPetugas&KdPetugas=<?php echo $kd; ?>'">Edit</button> <button onclick="window.location='petugas/hapus.php?KdPetugas=<?php echo $kd; ?>'">Hapus</button></td>
            <?php
            }
            ?>
        </tr>
<?php 
}
?>
</tbody>
    </table>