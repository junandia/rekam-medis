<?php

/* 
 * Ujikom 2016 SMK Pasim
 * Rismawan Junandia  * 
 */
include 'koneksi.php';
$norm = $_GET['norm'];
$query = mysql_query("SELECT * FROM rekammedis WHERE No_Rm = '$norm'") or die(mysql_error());
$row = mysql_fetch_array($query);
?>

<table>
    <tr>
        <td>No Rekam Medis</td>
        <td>:</td>
        <td><?php echo $row['No_Rm']; ?></td>
    </tr>
    <tr>
        <td>No Pasien</td>
        <td>:</td>
        <td><?php echo $row['No_Pasien']; ?></td>
    </tr>
    <tr>
        <td>Diagnosa</td>
        <td>:</td>
        <td><?php echo $row['Diagnosa']; ?></td>
    </tr>
    <tr>
        <td>Keluhan</td>
        <td>:</td>
        <td><?php echo $row['Keluhan']; ?></td>
    </tr>
    <tr>
        <td>Tanggal Pemerikasaan</td>
        <td>:</td>
        <td><?php echo date('d M Y', strtotime($row['Tgl_Pemeriksaan'])); ?></td>
    </tr>
    <tr>
        <td>Keterangan</td>
        <td>:</td>
        <td><?php echo $row['Ket']; ?></td>
    </tr>
    <tr>
        <td colspan="3"><button onclick="window.location = 'index.php?hal=lihatrekam&pasien=<?php echo $row['No_Pasien']; ?>'">Kembali</button></td>
    </tr>
</table>