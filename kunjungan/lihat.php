<?php

/* 
 * Ujikom 2016 SMK Pasim
 * Rismawan Junandia  * 
 */

include 'koneksi.php';
$now = date_default_timezone_get('Asia/Jakarta');
$tgl = date("Y-m-d");
$query = mysql_query("SELECT * FROM tbkunjungan JOIN tbpasien ON tbkunjungan.NoPasien = tbpasien.NoPasien JOIN poliklinik ON tbkunjungan.KdPoli = poliklinik.KdPoli WHERE TglKunjungan = '$tgl'") or die(mysql_error());
?>

    <table id="table" border="1"  cellspacing="1" cellpadding="3">
    <thead>
        <tr>
            <td>Tanggal Kunjungan</td>
            <td>Nama Pasien</td>
            <td>Poliklinik</td>
            <td>Jam Kunjungan</td>
            <td>No Antrian</td>
            <?php
            if ($level == "3"){
            ?>
            <td>Aksi</td>
            <?php
            }
            elseif ($level == "2") {
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
            <td><?php echo date('d M Y', strtotime($r['TglKunjungan'])); ?></td>
            <td><?php echo $r['NmPasien']; ?></td>
            <td><?php echo $r['NmPoli']; ?></td>
            <td><?php echo $r['JamKunjungan']; ?></td>
            <td><?php echo $r['No_Antrian']; ?></td>
            <?php
            if ($level == "3"){
            ?>
            <td><button onclick="window.location='kunjungan/hapus.php?IdKunjungan=<?php echo $r['IdKunjungan']; ?>'">Hapus</button></td>
            <?php
            }
            elseif ($level == "2") {
            ?>
            <td> <button onclick="window.location='kunjungan/hapus.php?IdKunjungan=<?php echo $r['IdKunjungan']; ?>'">Hapus</button></td>
            <?php
            }
            ?>
            

        </tr>
<?php 
}
?>
</tbody>
    </table>
