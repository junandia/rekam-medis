<?php

/* 
 * Ujikom 2016 SMK Pasim
 * Rismawan Junandia  * 
 */
include 'koneksi.php';
$now = date_default_timezone_get('Asia/Jakarta');
$tgl = date("Y-m-d");

?>
<form name="Tambah_Poliklinik" action="kunjungan/tmbhproses.php" method="POST" enctype="multipart/form-data">
    <table border="0" width="30%" cellspacing="1" cellpadding="3">
        <tbody>
            <tr>
                <td>Tanggal Kunjungan</td>
                <td>:</td>
                <td><input type="text" name="TglKunjungan" value="<?php echo $tgl; ?>" readonly=""/></td>
            </tr>
            <tr>
                <td>Kode Pasien</td>
                <td>:</td>
                <td><input type="text" name="NoPasien" value="" required /></td>
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
                <td><input type="submit" value="Tambah" name="tambah" /></td>
                <td></td>
                <td><input type="reset" value="Reset" name="reset" /></td>
            </tr>
        </tbody>
    </table>

</form>

