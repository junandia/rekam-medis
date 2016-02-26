<?php

/* 
 * Ujikom 2016 SMK Pasim
 * Rismawan Junandia  * 
 */

include 'koneksi.php';
$now = date_default_timezone_get('Asia/Jakarta');
$tgl = date("Y-m-d");
if($_SESSION['level'] == "3" || $_SESSION['level'] == "2"){
$query = mysql_query("SELECT * FROM tbkunjungan JOIN tbpasien ON tbkunjungan.NoPasien = tbpasien.NoPasien JOIN poliklinik ON tbkunjungan.KdPoli = poliklinik.KdPoli WHERE TglKunjungan = '$tgl'") or die(mysql_error());    
}
 else {
$cekpoliq = mysql_query("SELECT Kd_Poli FROM tbdokter WHERE Kd_User = '$_SESSION[Kd_User]'");
$ro = mysql_fetch_array($cekpoliq);
$kd_poli = $ro['Kd_Poli'];
$query = mysql_query("SELECT * FROM tbkunjungan JOIN tbpasien ON tbkunjungan.NoPasien = tbpasien.NoPasien JOIN poliklinik ON tbkunjungan.KdPoli = poliklinik.KdPoli WHERE tbkunjungan.TglKunjungan = '$tgl' AND tbkunjungan.KdPoli = '$kd_poli'") or die(mysql_error());    

}
?>

    <table class="dataTable table cell-hovered border bordered" data-role="datatable" data-searching="true">
    <thead>
        <tr>
            <td>Nama Pasien</td>
            <td>Poliklinik</td>
            <td>Jam Kunjungan</td>
            <td>No Antrian</td>
            <?php
            if ($level == "3" || $level == "2"){
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
            <td><?php echo $r['NmPasien']; ?></td>
            <td><?php echo $r['NmPoli']; ?></td>
            <td><?php echo $r['JamKunjungan']; ?></td>
            <td><?php echo $r['No_Antrian']; ?></td>
            <?php
            if ($level == "3" || $level == "2"){
            ?>
            <td><button class="button danger" onclick="window.location='kunjungan/hapus.php?IdKunjungan=<?php echo $r['IdKunjungan']; ?>'">Hapus</button></td>
            <?php
            }
            ?>
            

        </tr>
<?php 
}
?>
</tbody>
    </table>
