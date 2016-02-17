<?php

/* 
 * Ujikom 2016 SMK Pasim
 * Rismawan Junandia  * 
 */

?>
<form name="Tambah_Poliklinik" action="poliklinik/tmbhproses.php" method="POST" enctype="multipart/form-data">
    <table border="0" width="30%" cellspacing="1" cellpadding="3">
        <tbody>
            <tr>
                <td>No Pasien</td>
                <td>:</td>
                <td><input type="text" name="NmPoli" value="" readonly="" /></td>
            </tr>
            <tr>
                <td>Nama Poliklinik</td>
                <td>:</td>
                <td><input type="text" name="NmPoli" value="" required /></td>
            </tr>
            <tr>
                <td><input type="submit" value="Tambah" name="tambah" /></td>
                <td></td>
                <td><input type="reset" value="Reset" name="reset" /></td>
            </tr>
        </tbody>
    </table>

</form>