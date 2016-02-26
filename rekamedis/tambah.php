<?php

/* 
 * Ujikom 2016 SMK Pasim
 * Rismawan Junandia  * 
 */
include 'koneksi.php';
$normq = mysql_query("SELECT * FROM rekammedis");
$cekq = mysql_num_rows($normq);
$norm = $cekq+1;

$nopasien = $_GET['pasien'];
?>

<form name="Tambah_Rekamedis" action="rekamedis/tmbhproses.php" method="POST" enctype="multipart/form-data">
    <table class="table border" cellspacing="1" cellpadding="3">
        <tbody>
            <tr>
                <td>No Rekam Medis</td>
                <td>:</td>
                <td><input type="text" name="No_Rm" value="<?php echo "RM0".$norm; ?>" readonly="" /></td>
            </tr>
            <tr>
                <td>No Pasien</td>
                <td>:</td>
                <td><input type="text" name="No_Pasien" value="<?php echo $nopasien; ?>" readonly="" /></td>
            </tr>
            <tr>
                <td>Diagnosa</td>
                <td>:</td>
                <td><textarea class="ckeditor" id="Diagnosa" name="Diagnosa" rows="5" cols="100" required=""></textarea></td>
            </tr>
            <tr>
                <td>Keluhan</td>
                <td>:</td>
                <td><textarea class="ckeditor" id="Keluhan" name="Keluhan" rows="5" cols="100" required=""></textarea></td>
            </tr>
            <tr>
                <td>Keterangan</td>
                <td>:</td>
                <td><textarea class="ckeditor" id="Ket" name="Ket" rows="5" cols="100" required=""></textarea></textarea></td>
            </tr>
            <tr>
                <td><input type="submit" value="Tambah" name="tambah" /></td>
                <td></td>
                <td><input type="reset" value="Kosongkan" name="reset" /></td>
            </tr>
        </tbody>
    </table>

</form>
