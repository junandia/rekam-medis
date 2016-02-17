<?php

/* 
 * Ujikom 2016 SMK Pasim
 * Rismawan Junandia  * 
 */
include 'koneksi.php';
$query = mysql_query("SELECT * FROM petugas WHERE Kd_Petugas='$_GET[KdPetugas]'");
$r = mysql_fetch_array($query);
?>

<form name="Edit_Petugas" action="petugas/editproses.php" method="POST" enctype="multipart/form-data">
        <table border="0" width="30%" cellspacing="1" cellpadding="3">
        <tbody>
            <tr>
                <td>Kode Petugas</td>
                <td>:</td>
                <td><input type="text" name="Kd_Petugas" value="<?php echo $r['Kd_Petugas']; ?>" readonly="" /></td>
            </tr>
            <tr>
                <td>Nama Petugas</td>
                <td>:</td>
                <td><input type="text" name="Nm_Petugas" value="<?php echo $r['Nm_Petugas']; ?>" required /></td>
            </tr>
            <tr>
                <td>Bagian</td>
                <td>:</td>
                <td><select name="Bagian">
                        <option value="2">Petugas</option>
                        <option value="3">Admin</option>
                    </select></td>
            </tr>
            <tr>
                <td><input type="hidden" name="Kd_User" value="<?php echo $r['Kd_User']; ?>" /></td>
            </tr>
            <tr>
                <td><input type="submit" value="Ubah" name="Ubah" /></td>
                <td></td>
                <td><input type="reset" value="Reset" name="reset" /></td>
            </tr>
        </tbody>
    </table>

</form>