<?php

/* 
 * Ujikom 2016 SMK Pasim
 * Rismawan Junandia  * 
 */
include 'koneksi.php';

if ($_SESSION['level'] == "3"){

if (!isset($_GET['KdPetugas'])){
$normq = mysql_query("SELECT * FROM petugas") or die(mysql_error());
$cekq = mysql_num_rows($normq);
$norm = $cekq+01;
$Kd_Petugas = "PTG0".$norm;
$x = "required";
$nm = "Tambah";
$a = "";
$ac = "petugas/tmbhproses.php";
}
else{
$Kd_Petugas = $_GET['KdPetugas'];
$query = mysql_query("SELECT * FROM petugas WHERE Kd_Petugas = '$Kd_Petugas'") or die(mysql_error());
$r = mysql_fetch_array($query);
$x = "";
$nm = "Ubah";
$a = $r['Nm_Petugas'];
$ac = "petugas/editproses.php";
}
}
 else {
$Kd_Petugas = "";
$x = "disabled";
$a = "";
$nm = "";
}

?>
<form name="Tambah_Petugas" action="<?php echo $ac; ?>" method="POST" enctype="multipart/form-data">
    <table class="table border" cellspacing="1" cellpadding="3">
        <tbody>
            <?php
            if (!isset($_GET['KdPetugas'])){
            ?>
            <tr>
                <td>Kode Petugas</td>
                <td>:</td>
                <td><div class="input-control text"><input type="text" name="Kd_Petugas" value="<?php echo $Kd_Petugas; ?>" <?php echo $x; ?> /></div></td>
            </tr>
            <?php
            }else{
            ?>
                <input type="hidden" name="Kd_Petugas" value="<?php echo $Kd_Petugas; ?>">
            <?php
            }
            ?>
            <tr>
                <td>Nama Petugas</td>
                <td>:</td>
                <td><div class="input-control text"><input type="text" name="Nm_Petugas" value="<?php echo $a; ?>" <?php echo $x; ?> /></div></td>
            </tr>
            <tr>
                <td>Bagian</td>
                <td>:</td>
                <td><div class="input-control select"><select name="Bagian" <?php echo $x; ?>>
                        <option value="2">Petugas</option>
                        <option value="3">Admin</option>
                        </select></div></td>
            </tr>
            <tr>
                <td>Password</td>
                <td>:</td>
                <td>
                    <?php if (isset($_GET['KdPetugas'])){?>
                    <a class="button danger" onclick="alert('COMMING SOON');">RESET PASSWORD</a>
                    <?php
                    }else{
                        ?>
                    <div class="input-control password"><input type="password" name="password" value="" <?php echo $x; ?>/></div>
                    <?php
                    } ?>
                </td>
            </tr>
            <?php if ($_SESSION['level'] == "3"){ ?>
              <tr>
                <td><input type="submit" value="<?php echo $nm; ?>" name="tambah" /></td>
                <td></td>
                <td><input type="reset" value="Kosongkan" name="reset" /></td>
            </tr>   
            <?php } ?>
           
        </tbody>
    </table>

</form>