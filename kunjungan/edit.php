<?php

/* 
 * Ujikom 2016 SMK Pasim
 * Rismawan Junandia  * 
 */
include 'koneksi.php';
$now = date_default_timezone_get('Asia/Jakarta');
$tgl = date("Y-m-d");
$query = mysql_query("SELECT * FROM tbkunjungan WHERE IdKunjungan = '$_GET[IdKunjungan]'");
$r = mysql_fetch_array($query);
?>
<form name="Tambah_Poliklinik" action="kunjungan/editproses.php" method="POST" enctype="multipart/form-data">
    <input type="hidden" name="IdKunjungan" value="<?php echo $_GET['IdKunjungan']; ?>">
    <table border="0" width="30%" cellspacing="1" cellpadding="3">
        <tbody>
            <tr>
                <td>Tanggal Kunjungan</td>
                <td>:</td>
                <td><input type="text" name="TglKunjungan" value="<?php echo $r['TglKunjungan']; ?>" readonly=""/></td>
            </tr>
            <tr>
                <td>No Pasien</td>
                <td>:</td>
                <td><input type="number" name="NoPasien" value="<?php echo $r['NoPasien']; ?>" required /></td>
            </tr>
            <tr>
                <td>Poliklinik</td>
                <td>:</td>
                <td><select name="Kd_Poli">
                        <?php
                        $query = mysql_query("SELECT * FROM poliklinik");
                        while ($row = mysql_fetch_array($query)) {
                        ?>
                        <option value="<?php echo $row['KdPoli']; ?>"><?php echo $row['NmPoli']?></option>
                        <?php
                        }
                        ?>
                </select></td>
            </tr>
            <tr>
                <td>Jam Kunjungan</td>
                <td>:</td>
                <td><input type="time" name="JamKunjungan" value="<?php echo $r['JamKunjungan']; ?>" required /></td>
            </tr>
            <tr>
                <td>No Antrian</td>
                <td>:</td>
                <td><input type="text" name="No_Antrian" value="<?php echo $r['No_Antrian']; ?>" readonly="" /></td>
            </tr>
            <tr>
                <td><input type="submit" value="Ubah" name="Ubah" /></td>
                <td></td>
                <td><input type="reset" value="Reset" name="reset" /></td>
            </tr>
        </tbody>
    </table>

</form>