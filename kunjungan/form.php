<?php

/* 
 * Ujikom 2016 SMK Pasim
 * Rismawan Junandia  * 
 */
include 'koneksi.php';
$now = date_default_timezone_set('Asia/Jakarta');
$tgl = date("Y-m-d");
if ($_SESSION['level'] == "3" || $_SESSION['level'] == "2"){
    $x = "required";
}else{
    $x = "disabledd";
}
?>
<form name="Tambah_Poliklinik" action="kunjungan/tmbhproses.php" method="POST" enctype="multipart/form-data">
    <table class="table border" cellspacing="1" cellpadding="3">
        <tbody>
            <tr>
                <td>Kode Pasien</td>
                <td>:</td>
                <td><input type="text" name="NoPasien" value="" <?php echo $x; ?> /></td>
            </tr>
            <tr>
                <td>Poliklinik</td>
                <td>:</td>
                <td><select name="Kd_Poli" <?php echo $x; ?>>
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
                <td><input type="reset" value="Kosongkan" name="reset" /></td>
            </tr>
        </tbody>
    </table>

</form>

