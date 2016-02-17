<?php

/* 
 * Ujikom 2016 SMK Pasim
 * Rismawan Junandia  * 
 */
include 'koneksi.php';
$query = mysql_query("SELECT * FROM poliklinik WHERE KdPoli='$_GET[KdPoli]'");
$r = mysql_fetch_array($query);
?>

<form name="Edit_Poli" action="poliklinik/editproses.php" method="POST" enctype="multipart/form-data">
    <table border="0" width="30%" cellspacing="1" cellpadding="3">
        <tbody>
              <input type="hidden" name="KdPoli" value="<?php echo $r['KdPoli']; ?>">
            <tr>
                <td>Nama Poli</td>
                <td>:</td>
                <td><input type="text" name="NmPoli" value="<?php echo $r['NmPoli']; ?>" required /></td>
            </tr>
            <tr>
                <td><input type="submit" value="Ubah" name="Ubah" /></td>
                <td></td>
                <td><input type="reset" value="Reset" name="reset" /></td>
            </tr>
        </tbody>
    </table>

</form>