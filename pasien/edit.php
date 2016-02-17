<?php

/* 
 * Ujikom 2016 SMK Pasim
 * Rismawan Junandia  * 
 */
include 'koneksi.php';
$query = mysql_query("SELECT * FROM tbpasien WHERE NoPasien='$_GET[NoPasien]'");
$r = mysql_fetch_array($query);
?>

<form name="Edit_Pasien" action="pasien/editproses.php" method="POST" enctype="multipart/form-data">
    <table border="0" width="30%" cellspacing="1" cellpadding="3">
        <tbody>
        <input type="hidden" name="NoPasien" value="<?php echo $r['NoPasien']; ?>" readonly="">
            <tr>
                <td>Nama Pasien</td>
                <td>:</td>
                <td><input type="text" name="NmPasien" value="<?php echo $r['NmPasien']; ?>" required /></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>:</td>
                <td>
                    <?php
                    $jk =  $r['J_Kel'];
                    if ($jk == "L") {
                    ?>
                    <input type="radio" name="J_Kel" value="L" checked="checked" />L <input type="radio" name="J_Kel" value="P" />P
                    <?php
                    }
                    else {
                    ?>
                    <input type="radio" name="J_Kel" value="L"  />L <input type="radio" name="J_Kel" value="P" checked="checked" />P
                    <?php
                    }
                    ?>
                </td>
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
                <td><textarea name="Alamat" rows="4" cols="20" required><?php echo $r['Alamat']; ?>
                    </textarea></td>
            </tr>
            <tr>
                <td>Tempat Lahir</td>
                <td>:</td>
                <td><input type="text" name="Tmp_Lahir" value="<?php echo $r['Tmp_Lahir']; ?>" required /></td>
            </tr>
            <tr>
                <td>Tanggal Lahir</td>
                <td>:</td>
                <td><input type="date" name="Tgl_Lahir" value="<?php echo $r['Tgl_Lahir']; ?>" required /></td>
            </tr>
            <tr>
                <td>No Telpon</td>
                <td>:</td>
                <td><input type="number" name="No_Telp" value="<?php echo $r['No_Telp']; ?>" required /></td>
            </tr>
            <tr>
                <td>Foto</td>
                <td>:</td>
                <td><input type="file" name="Foto" value=""  /> </td>
            </tr>
            <tr>
                <td>Tanggal Registrasi</td>
                <td>:</td>
                <td><input type="date" name="Tgl_Registrasi" value="<?php echo $r['Tgl_Registrasi']; ?>" required /></td>
            </tr>
            <tr>
                <td><input type="submit" value="Ubah" name="Ubah" /></td>
                <td></td>
                <td><input type="reset" value="Reset" name="reset" /></td>
            </tr>
        </tbody>
    </table>

</form>