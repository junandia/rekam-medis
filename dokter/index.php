<?php

/* 
 * Ujikom 2016 SMK Pasim
 * Rismawan Junandia  * 
 */
include 'koneksi.php';

$level = $_SESSION['level'];
$query = mysql_query("SELECT * FROM tbdokter JOIN poliklinik ON tbdokter.Kd_Poli = poliklinik.KdPoli");
if ($level == "3" || $level == "2") {
    if (!isset($_GET['KdDokter'])) {
    $normq = mysql_query("SELECT * FROM tbdokter") or die(mysql_error());
    $cekq = mysql_num_rows($normq);
    $norm = $cekq+01;
    $title = "Tambah Data Dokter";
    $action = "dokter/tmbhproses.php";
    $x = "required";
    $a = "DR0".$norm; 
    $b = '';
    $c = '';
    $d = '';
    $e = '';
    $f = '';
    $v = 'Tambah';
    }else{
    $kd = $_GET['KdDokter'];
    $q = mysql_query("SELECT * FROM tbdokter JOIN poliklinik ON tbdokter.Kd_Poli = poliklinik.KdPoli WHERE Kd_Dokter = '$kd'") or die(mysql_error());
    $row = mysql_fetch_array($q);
    $title = "Ubah Data Dokter";
<<<<<<< HEAD
    $action = "dokter/editproses.php";
=======
    $action = "dokter/tmbhproses.php";
>>>>>>> origin/master
    $x = "";
    $a = $kd;
    $b = $row['NmDokter'];
    $c = $row['TmpLahir'];
    $d = $row['TglLahir'];
    $e = $row['Alamat'];
    $f = $row['NoTelp'];
    $v = 'Ubah';
    }
}else{
    $x = "disabled";
    $a = ''; 
    $b = '';
    $c = '';
    $d = '';
    $e = '';
    $f = '';
<<<<<<< HEAD

=======
>>>>>>> origin/master
}

?>

<div class="grid">
    <div class="row cells5">
        <div class="cell colspan2">
<form name="Tambah_Pasien" action="<?php echo $action;?>" method="POST" enctype="multipart/form-data">
    <table class="table border" cellspacing="1" cellpadding="3">
        <tbody>
                <?php
                if ($_SESSION['level'] == "2" || $_SESSION['level'] == "3") {
            ?>
             <tr>
                <td colspan="3"><input type="button" class="button primary" onclick="window.location='index.php?page=./dokter/index';" value="Tambah Dokter"><br/><font size="5px"><b>Form <?php echo $title; ?></b><font></td>
            </tr>
            <?php
                }
            ?>

            <tr>
                <td>Kode Dokter</td>
                <td>:</td>
                <td>
                <div class="input-control text">
<<<<<<< HEAD
                <input type="text" name="Kd_Dokter" value="<?php echo $a; ?>" <?php echo $x;?> readonly=""/>
=======
                <input type="text" name="Kd_Dokter" value="<?php echo $a; ?>" readonly=""/>
>>>>>>> origin/master
                </div>
                </td>
            </tr>
            <tr>
                <td>Nama Dokter</td>
                <td>:</td>
                <td>
                <div class="input-control text">
                <input type="text" name="NmDokter" value="<?php echo $b; ?>" <?php echo $x; ?> />
                </div></td>
            </tr>
            <tr>
                <td>Tempat Lahir</td>
                <td>:</td>
                <td>
                <div class="input-control text">
                <input type="text" name="TmpLahir" value="<?php echo $c; ?>" <?php echo $x; ?> />
                </div></td>
            </tr>
            <tr>
                <td>Tanggal Lahir</td>
                <td>:</td>
                <td>
<<<<<<< HEAD
                    <div class="input-control text" data-role="datepicker" data-date="1972-12-21" data-format="yyyy-mm-dd">
=======
                <div class="input-control text" data-role="datepicker">
>>>>>>> origin/master
                <input type="text" name="TglLahir" value="<?php echo $d; ?>" <?php echo $x; ?> /><button class="button"><span class="mif-calendar">
                </div></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>:</td>
                <td>
                <div class="input-control textarea" data-role="input" data-text-auto-resize="true">
<<<<<<< HEAD
                    <textarea name="Alamat" <?php echo $x; ?>>
=======
                    <textarea name="Alamat" rows="4" cols="20" <?php echo $x; ?>>
>>>>>>> origin/master
                    <?php echo $e; ?>
                    </textarea>
                </div></td>
            </tr>
            <tr>
                <td>No Telpon</td>
                <td>:</td>
                <td>
                <div class="input-control text">
<<<<<<< HEAD
                <input type="number" name="NoTelp" maxlength="14" value="<?php echo $f; ?>" <?php echo $x; ?>  />
=======
                <input type="number" name="NoTelp" value="<?php echo $f; ?>" <?php echo $x; ?> />
>>>>>>> origin/master
                </div></td>
            </tr>
            <tr>
                <td>Poli</td>
                <td>:</td>
<<<<<<< HEAD
                <td><div class="input-control select"><select name="Kd_Poli" <?php echo $x; ?>>
=======
                <td><div class="input-control select"><select name="Kd_Poli">
>>>>>>> origin/master
                        <?php
                        $query = mysql_query("SELECT * FROM poliklinik");
                        while ($row = mysql_fetch_array($query)) {
                        ?>
                        <option value="<?php echo $row['KdPoli']; ?>"><?php echo $row['NmPoli']?></option>
                        <?php
                        }
                        ?>
                </select></div></td>
            </tr>
            <?php if (!isset($_GET['KdDokter'])) { ?>
            <tr>
                <td>Password</td>
                <td>:</td>
                <td><div class="input-control password">
                <input type="password" name="password" value="" <?php echo $x; ?> />
                </div></td>
            </tr> 
<<<<<<< HEAD
            <?php }
                if ($level == "3" || $level == "2"){ ?>
                    <tr>
=======
            <?php } ?>
                       
            <tr>
>>>>>>> origin/master
                <td><input type="submit" value="<?php echo $v; ?>" name="tambah" /></td>
                <td></td>
                <td><input type="reset" value="Kosongkan" name="reset" /></td>
            </tr>
<<<<<<< HEAD
            <?php
                }
            ?>
                       
            
=======
>>>>>>> origin/master
        </tbody>
    </table>

</form>
        </div>

        <div class="cell colspan3">
            <?php include 'dokter/lihat.php'; ?>
        </div>
    </div>
</div>