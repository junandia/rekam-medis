<?php

/* 
 * Ujikom 2016 SMK Pasim
 * Rismawan Junandia  * 
 */
include 'koneksi.php';
<<<<<<< HEAD
$all = mysql_query("SELECT * FROM tbpasien WHERE tampil='1'") or die(mysql_error());
=======
$all = mysql_query("SELECT * FROM tbpasien") or die(mysql_error());
>>>>>>> origin/master
if ($_SESSION['level'] == "3" || $_SESSION['level'] == "2") {
    $query = mysql_query("SELECT * FROM tbpasien") or die(mysql_error());
    $cekq = mysql_num_rows($query);
    $norm = $cekq+01;
    if (!isset($_GET['NoPasien'])) {
        $title = "Tambah Data Pasien";
        $action = "pasien/tmbhproses.php";
        $a = 'PSN0'.$norm;
        $b = '';
        $c = '';
        $d = '';
        $e = '';
        $f = '';
        $agm = '';
        $x = "required";
        $name = "Tambah";
    }
    else{
        $nopasien = $_GET['NoPasien'];
        $query = mysql_query("SELECT * FROM tbpasien WHERE NoPasien = '$nopasien'") or die(mysql_error());
        $row = mysql_fetch_array($query);
        $title = "Ubah Data Pasien";
        $action = "pasien/editproses.php";
        $a = $nopasien;
        $b = $row['NmPasien'];
        $c = $row['Alamat'];
        $d = $row['Tmp_Lahir'];
        $e = $row['Tgl_Lahir'];
        $f = $row['No_Telp'];
        $agm = $row['Agama'];
        $x = "";
        $name = "Ubah";
    }
}

else {
    $title = "Tambah Data Pasien";
        $action = "pasien/tmbhproses.php";
        $a = '';
        $b = '';
        $c = '';
        $d = '';
        $e = '';
        $f = '';
        $agm = '';
        $name = "Tambah";
    $x = "disabled";
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
                <td colspan="3"><input type="button" class="button primary" onclick="window.location='index.php?page=./pasien/index';" value="Tambah Pasien"><br/><font size="5px"><b>Form <?php echo $title; ?></b><font></td>
            </tr>
            <?php
                }
            ?>
           
            <tr>
                <td>No Pasien</td>
                <td>:</td>
                <td>
                    <div class="input-control text">
                    <input type="text" name="NoPasien" value="<?php echo $a; ?>" readonly <?= $x ?> />
                    </div>
                </td>
            </tr>
            <tr>
                <td>Nama Pasien</td>
                <td>:</td>
                <td>
                <div class="input-control text">
                    <input type="text" name="NmPasien" value="<?php echo $b; ?>" <?= $x ?>  />
                </div>
                </td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>:</td>
                <td>
                <?php
                if (!isset($_GET['NoPasien'])) {
                ?>
                <input type="radio" name="J_Kel" value="L" checked="checked" <?= $x ?>  /><span class="check"></span><span class="caption">L</span> <input type="radio" name="J_Kel" value="P" <?= $x ?>  /><span class="check"></span><span class="caption">P</span>
                <?php
                }else{
                    $jk =  $row['J_Kel'];
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
                }
                ?>

                </td>
            </tr>
            <tr>
                <td>Agama</td>
                <td>:</td>
                <td>
                <div class="input-control select">
                    <select name="Agama" <?= $x ?> >
                    <?php
                        if (isset($_GET['NoPasien'])) {
                    ?>
                        <option value="<?php echo $agm; ?>"><?php echo $agm; ?></option>
                    <?php
                        }
                    ?>
                        <option value="Islam">Islam</option>
                        <option value="Kristen Katolik">Kristen Katolik</option>
                        <option value="Kristen Protestan">Kristen Protestan</option>
                        <option value="Hindu">Hindu</option>
                        <option value="Budha">Budha</option>
                        <option value="Kong Hu Chu">Kong Hu Chu</option>
                    </select>
                </div>
                </td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>:</td>
                <td>
                <div class="input-control textarea" data-role="input" data-text-auto-resize="true">
                <textarea name="Alamat" rows="4" cols="20" <?= $x ?> ><?php echo $c; ?></textarea>
                </div>
                </td>
            </tr>
            <tr>
                <td>Tempat Lahir</td>
                <td>:</td>
                <td>
                <div class="input-control text">
                <input type="text" name="Tmp_Lahir" value="<?php echo $d; ?>" <?= $x ?>  />
                </div>
                </td>
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
                        <input type="text" name="Tgl_Lahir" <?= $x ?> value="<?php echo $e; ?>" >
                        <button class="button"><span class="mif-calendar"></span></button>
                    </div>
                </td>
            </tr>
            <tr>
                <td>No Telpon</td>
                <td>:</td>
                <td><div class="input-control text">
<<<<<<< HEAD
                <input type="number" name="No_Telp" value="<?php echo $f; ?>" <?= $x ?>  maxlength="14" />
=======
                <input type="number" name="No_Telp" value="<?php echo $f; ?>" <?= $x ?>  maxlength="13" />
>>>>>>> origin/master
                </div></td>
            </tr>
            <tr>
                <td>Foto</td>
                <td>:</td>
                <td><div class="input-control file" data-role="input">
                <input type="file" name="Foto" value="" <?= $x ?>  /><button class="button"><span class="mif-folder"></span></button>
                </div></td>
            </tr>
            <?php
                if ($_SESSION['level'] == "2" || $_SESSION['level'] == "3") {
            ?>
            <tr>
                <td><input type="submit" value="<?php echo $name; ?>" name="tambah" /></td>
                <td></td>
                <td><input type="reset" value="Kosongkan" name="reset" /></td>
            </tr>
            <?php
                }
            ?>
            
        </tbody>
    </table>

</form>
</div>
        <div class="cell colspan3">
    <table class="dataTable table cell-hovered border bordered" data-role="datatable" data-searching="true">
    <thead>
        <tr>
            <td>No Pasien</td>
            <td>Nama Pasien</td>
            <td>Jenis Kelamin</td>
            <td>Foto</td>
            <td>Tanggal Registrasi</td>
            <?php
            if ($_SESSION['level'] == "3" || $_SESSION['level'] == "2"){
            ?>
            <td>Aksi</td>
            <?php
            }
            ?>
        </tr>
    </thead>
    <tbody>
<?php
while ($r = mysql_fetch_array($all)) {
    $no = $r['NoPasien'];

?>
        <tr>
            <td><a onclick="window.location='index.php?page=./pasien/detail&no=<?php echo $no; ?>'"><?php echo $no; ?></a></td>
            <td><?php echo $r['NmPasien']; ?></td>
            <td><?php echo $r['J_Kel']; ?></td>
            <td><img src="pasien/foto/<?php echo $r['Foto']; ?>" width="50" height="50"></td>
            <td><?php echo date('d F Y', strtotime($r['Tgl_Registrasi'])); ?></td>
            <?php
            if ($_SESSION['level'] == "3" || $_SESSION['level'] == "2"){
            ?>
            <td><button class="button warning" onclick="window.location='index.php?page=./pasien/index&NoPasien=<?php echo $no; ?>'">Ubah</button> <button class="button danger" onclick="window.location='pasien/hapus.php?NoPasien=<?php echo $no; ?>'">Hapus</button></td>
            <?php
            }
            ?>
        </tr>
<?php 
}
?>
</tbody>
    </table>
        </div>
    </div>
</div>