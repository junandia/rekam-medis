<?php

/* 
 * Ujikom 2016 SMK Pasim
 * Rismawan Junandia  * 
 */
include 'koneksi.php';
$normq = mysql_query("SELECT * FROM tbdokter") or die(mysql_error());
$cekq = mysql_num_rows($normq);
$norm = $cekq+01;
?>
<form name="Tambah_Pasien" action="dokter/tmbhproses.php" method="POST" enctype="multipart/form-data">
    <table border="0" width="30%" cellspacing="1" cellpadding="3">
        <tbody>
            <tr>
                <td>Kode Dokter</td>
                <td>:</td>
                <td><input type="text" name="Kd_Dokter" value="<?php echo "DR0".$norm; ?>" readonly=""/></td>
            </tr>
            <tr>
                <td>Nama Dokter</td>
                <td>:</td>
                <td><input type="text" name="NmDokter" value="" required /></td>
            </tr>
            <tr>
                <td>Tempat Lahir</td>
                <td>:</td>
                <td><input type="text" name="TmpLahir" value="" required /></td>
            </tr>
            <tr>
                <td>Tanggal Lahir</td>
                <td>:</td>
                <td><input type="date" name="TglLahir" value="" required /></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>:</td>
                <td><textarea name="Alamat" rows="4" cols="20" required>
                    </textarea></td>
            </tr>
            <tr>
                <td>No Telpon</td>
                <td>:</td>
                <td><input type="number" name="NoTelp" value="" required /></td>
            </tr>
            <tr>
                <td>Poli</td>
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
                <td>Username</td>
                <td>:</td>
                <td><input type="text" name="username" required></td>
            </tr>
            <tr>
                <td>Password</td>
                <td>:</td>
                <td><input type="password" name="password" value="" required /></td>
            </tr>            
            <tr>
                <td><input type="submit" value="Tambah" name="tambah" /></td>
                <td></td>
                <td><input type="reset" value="Reset" name="reset" /></td>
            </tr>
        </tbody>
    </table>

</form>