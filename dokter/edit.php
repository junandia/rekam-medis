<?php

/* 
 * Ujikom 2016 SMK Pasim
 * Rismawan Junandia  * 
 */
include 'koneksi.php';
$query = mysql_query("SELECT * FROM tbdokter WHERE Kd_Dokter='$_GET[KdDokter]'");
$r = mysql_fetch_array($query);
?>

<form name="Edit_Pasien" action="dokter/editproses.php" method="POST" enctype="multipart/form-data">
    <table border="0" width="30%" cellspacing="1" cellpadding="3">
        <tbody>
            <tr>
                <td>Kode Dokter</td>
                <td>:</td>
                <td><input type="text" name="Kd_Dokter" value="<?php echo $r['Kd_Dokter']; ?>" readonly /></td>
            </tr>
            <tr>
                <td>Nama Dokter</td>
                <td>:</td>
                <td><input type="text" name="NmDokter" value="<?php echo $r['NmDokter']; ?>" required /></td>
            </tr>
            <tr>
                <td>Tempat Lahir</td>
                <td>:</td>
                <td><input type="text" name="TmpLahir" value="<?php echo $r['TmpLahir']; ?>" required /></td>
            </tr>
            <tr>
                <td>Tanggal Lahir</td>
                <td>:</td>
                <td><input type="date" name="TglLahir" value="<?php echo $r['TglLahir']; ?>" required /></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>:</td>
                <td><textarea name="Alamat" rows="4" cols="20" required>
                    <?php echo $r['Alamat']; ?></textarea></td>
            </tr>
            <tr>
                <td>No Telpon</td>
                <td>:</td>
                <td><input type="number" name="NoTelp" value="<?php echo $r['NoTelp']; ?>" required /></td>
            </tr>
            <tr>
                <td>Kode Poli</td>
                <td>:</td>
                <td><select name="Kd_Poli">
                        <?php
                        $query = mysql_query("SELECT * FROM poliklinik");
                        while ($ro = mysql_fetch_array($query)) {
                        ?>
                        <option value="<?php echo $ro['KdPoli']; ?>"><?php echo $ro['NmPoli']?></option>
                        <?php
                        }
                        ?>
                </select></td>
            </tr>   
            <tr>
                <td><input type="submit" value="Ubah" name="Ubah" /></td>
                <td></td>
                <td><input type="reset" value="Reset" name="reset" /></td>
            </tr>
        </tbody>
    </table>

</form>