<?php

/* 
 * Ujikom 2016 SMK Pasim
 * Rismawan Junandia  * 
 */
include 'koneksi.php';
$normq = mysql_query("SELECT * FROM petugas") or die(mysql_error());
$cekq = mysql_num_rows($normq);
$norm = $cekq+01;
?>
<form name="Tambah_Petugas" action="petugas/tmbhproses.php" method="POST" enctype="multipart/form-data">
    <table border="0" width="30%" cellspacing="1" cellpadding="3">
        <tbody>
            <tr>
                <td>Kode Petugas</td>
                <td>:</td>
                <td><input type="text" name="Kd_Petugas" value="<?php ; ?>" required /></td>
            </tr>
            <tr>
                <td>Nama Petugas</td>
                <td>:</td>
                <td><input type="text" name="Nm_Petugas" value="" required /></td>
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
                <td>Username</td>
                <td>:</td>
                <td><input type="text" name="username" value="" /></td>
            </tr>
            <tr>
                <td>Password</td>
                <td>:</td>
                <td><input type="password" name="password" value="" /></td>
            </tr>
            <tr>
                <td><input type="submit" value="Tambah" name="tambah" /></td>
                <td></td>
                <td><input type="reset" value="Reset" name="reset" /></td>
            </tr>
        </tbody>
    </table>

</form>