<?php

/* 
 * Ujikom 2016 SMK Pasim
 * Rismawan Junandia  * 
 */
$level = $_SESSION['level'];

include 'koneksi.php';
$query = mysql_query("SELECT * FROM tbpasien");
?>

    <table id="table" border="1" width="100%" cellspacing="1" cellpadding="3">
    <thead>
        <tr>
            <td>No Pasien</td>
            <td>Nama Pasien</td>
            <td>Jenis Kelamin</td>
            <td>Agama</td>
            <td>Alamat</td>
            <td>Tempat Lahir</td>
            <td>Tanggal Lahir</td>
            <td>No Telpon</td>
            <td>Foto</td>
            <td>Tanggal Registrasi</td>
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
            <td><?php echo $nopasien = $r['NoPasien']; ?></td>
            <td><?php echo $r['NmPasien']; ?></td>
            <td><?php echo $r['J_Kel']; ?></td>
            <td><?php echo $r['Agama']; ?></td>
            <td><?php echo $r['Alamat']; ?></td>
            <td><?php echo $r['Tmp_Lahir']; ?></td>
            <td><?php echo date('d F Y', strtotime($r['Tgl_Lahir'])); ?></td>
            <td><?php echo $r['No_Telp']; ?></td>
            <td><img src="pasien/foto/<?php echo $r['Foto']; ?>" width="100" height="150"></td>
            <td><?php echo date('d F Y', strtotime($r['Tgl_Registrasi'])); ?></td>
            <?php
            if ($level == "3"){
            ?>
            <td><button onclick="window.location='index.php?hal=EditPasien&NoPasien=<?php echo $nopasien; ?>'">Edit</button> <button onclick="window.location='pasien/hapus.php?NoPasien=<?php echo $nopasien; ?>'">Hapus</button></td>
            <?php
            }
            elseif ($level == "2") {
            ?>
            <td><button onclick="window.location='index.php?hal=EditPasien&NoPasien=<?php echo $nopasien; ?>'">Edit</button> <button onclick="window.location='pasien/hapus.php?NoPasien=<?php echo $nopasien; ?>'">Hapus</button></td>
            <?php
            }
            ?>
        </tr>
        </tr>
<?php 
}
?>
</tbody>
    </table>