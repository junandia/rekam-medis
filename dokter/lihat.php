<?php

/* 
 * Ujikom 2016 SMK Pasim
 * Rismawan Junandia  * 
 */
$level = $_SESSION['level'];
include 'koneksi.php';
$query = mysql_query("SELECT * FROM tbdokter JOIN poliklinik ON tbdokter.Kd_Poli = poliklinik.KdPoli");
?>

    <table id="table" border="1" width="100%" cellspacing="1" cellpadding="3">
    <thead>
        <tr>
            <td>Kode Dokter</td>
            <td>Nama Dokter</td>
            <td>Tempat Lahir</td>
            <td>Tanggal Lahir</td>
            <td>Alamat</td>
            <td>No Telpon</td>
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
            <td><?php echo $r['TmpLahir']; ?></td>
            <td>
            <?php echo date('d-F-Y', strtotime($r['TglLahir'])); ?>
            </td>
            <td><?php echo $r['Alamat']; ?></td>
            <td><?php echo $r['NoTelp']; ?></td>
            <td><?php echo $r['NmPoli']; ?></td>
            <?php
            if ($level == "3"){
            ?>
            <td><button onclick="window.location='index.php?hal=EditDokter&KdDokter=<?php echo $kd; ?>'">Edit</button> <button onclick="window.location='dokter/hapus.php?KdDokter=<?php echo $kd; ?>'">Hapus</button></td>
            <?php
            }
            ?>
        </tr>
<?php 
}
?>
</tbody>
    </table>