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
    $cekpoliq = mysql_query("SELECT Kd_Poli FROM tbdokter WHERE Kd_User = '$_SESSION[Kd_User]'");
$ro = mysql_fetch_array($cekpoliq);
$kd_poli = $ro['Kd_Poli'];

    $sql = mysql_query("SELECT * FROM tbkunjungan JOIN tbpasien ON tbkunjungan.NoPasien = tbpasien.NoPasien JOIN poliklinik ON tbkunjungan.KdPoli = poliklinik.KdPoli WHERE TglKunjungan = '$now' AND tbkunjungan.KdPoli = '$kd_poli' ") or die(mysql_error());
}
else {
    $cekpoliq = mysql_query("SELECT Kd_Poli FROM tbdokter WHERE Kd_User = '$_SESSION[Kd_User]'");
$ro = mysql_fetch_array($cekpoliq);
$kd_poli = $ro['Kd_Poli'];

     $sql = mysql_query("SELECT * FROM tbkunjungan JOIN tbpasien ON tbkunjungan.NoPasien = tbpasien.NoPasien JOIN poliklinik ON tbkunjungan.KdPoli = poliklinik.KdPoli AND tbkunjungan.KdPoli = '$kd_poli'");
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
            if ($level == "3" || $level == "2"){
            ?>
            <td><button class="button danger" onclick="window.location='kunjungan/hapus.php?IdKunjungan=<?php echo $r['IdKunjungan']; ?>'">Hapus</button></td>
            <?php
            }else {
            ?>
            <td><button class="button primary" onclick="window.location = 'index.php?page=./rekamedis/lihat&pasien=<?php echo $r['NoPasien']; ?>'">DATA</button> <button class="button primary" onclick="window.location = 'index.php?page=./rekamedis/tambah&pasien=<?php echo $r['NoPasien']; ?>'">TAMBAH</button></td>
            <?php
            }
            ?>
            

        </tr>
<?php 
}
?>
</tbody>
    </table>