<?php

/* 
 * Ujikom 2016 SMK Pasim
 * Rismawan Junandia  * 
 */
include 'koneksi.php';
$waktu = $_GET['waktu'];
$now = date('Y-m-d');
$level = $_SESSION['level'];
if ($waktu == "today") {
    $sql = mysql_query("SELECT * FROM tbkunjungan JOIN tbpasien ON tbkunjungan.NoPasien = tbpasien.NoPasien JOIN poliklinik ON tbkunjungan.KdPoli = poliklinik.KdPoli WHERE TglKunjungan = '$now' ") or die(mysql_error());
}
else {
     $sql = mysql_query("SELECT * FROM tbkunjungan JOIN tbpasien ON tbkunjungan.NoPasien = tbpasien.NoPasien JOIN poliklinik ON tbkunjungan.KdPoli = poliklinik.KdPoli");
}
?>
    <table class="dataTable table cell-hovered border bordered" data-role="datatable" data-searching="true">
    <thead>
        <tr>
            <td>Tanggal Kunjungan</td>
            <td>Nama Pasien</td>
            <td>Poliklinik</td>
            <td>Jam Kunjungan</td>
            <td>No Antrian</td>
            <td>Aksi</td>
        </tr>
    </thead>
    <tbody>
<?php
while ($r = mysql_fetch_array($sql)) {
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
            <td><button onclick="window.location='kunjungan/hapus.php?IdKunjungan=<?php echo $r['IdKunjungan']; ?>'">Hapus</button></td>
            <?php
            }
            else {
            ?>
            <td><button onclick="window.location = 'index.php?hal=lihatrekam&pasien=<?php echo $r['NoPasien']; ?>'">REKAM MEDIS</button> <button onclick="window.location = 'index.php?hal=rekamdata&pasien=<?php echo $r['NoPasien']; ?>'">TAMBAH</button></td>
            <?php
            }
            ?>
            

        </tr>
<?php 
}
?>
</tbody>
    </table>