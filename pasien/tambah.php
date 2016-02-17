<?php

/* 
 * Ujikom 2016 SMK Pasim
 * Rismawan Junandia  * 
 */
include 'koneksi.php';
$normq = mysql_query("SELECT * FROM tbpasien") or die(mysql_error());
$cekq = mysql_num_rows($normq);
$norm = $cekq+01;

?>
<form name="Tambah_Pasien" action="pasien/tmbhproses.php" method="POST" enctype="multipart/form-data">
    <table border="0" width="30%" cellspacing="1" cellpadding="3">
        <tbody>
            <tr>
                <td>No Pasien</td>
                <td>:</td>
                <td><input type="text" name="NoPasien" value="<?php echo "PSN0".$norm; ?>" readonly /></td>
            </tr>
            <tr>
                <td>Nama Pasien</td>
                <td>:</td>
                <td><input type="text" name="NmPasien" value="" required /></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>:</td>
                <td><input type="radio" name="J_Kel" value="L" checked="checked" />L <input type="radio" name="J_Kel" value="P" />P</td>
            </tr>
            <tr>
                <td>Agama</td>
                <td>:</td>
                <td><select name="Agama" required>
                        <option value="Islam">Islam</option>
                        <option value="Kristen Katolik">Kristen Katolik</option>
                        <option value="Kristen Protestan">Kristen Protestan</option>
                        <option value="Hindu">Hindu</option>
                        <option value="Budha">Budha</option>
                        <option value="Kong Hu Chu">Kong Hu Chu</option>
                    </select></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>:</td>
                <td><textarea name="Alamat" rows="4" cols="20" required>
                    </textarea></td>
            </tr>
            <tr>
                <td>Tempat Lahir</td>
                <td>:</td>
                <td><input type="text" name="Tmp_Lahir" value="" required /></td>
            </tr>
            <tr>
                <td>Tanggal Lahir</td>
                <td>:</td>
                <td><input type="date" name="Tgl_Lahir" value="" required /></td>
            </tr>
            <tr>
                <td>No Telpon</td>
                <td>:</td>
                <td><input type="number" name="No_Telp" value="" required /></td>
            </tr>
            <tr>
                <td>Foto</td>
                <td>:</td>
                <td><input type="file" name="Foto" value="" required /></td>
            </tr>
            <tr>
                <td><input type="submit" value="Tambah" name="tambah" /></td>
                <td></td>
                <td><input type="reset" value="Reset" name="reset" /></td>
            </tr>
        </tbody>
    </table>

</form>