<?php

/* 
 * Ujikom 2016 SMK Pasim
 * Rismawan Junandia  * 
 */
include 'koneksi.php';
$query = mysql_query("SELECT * FROM tbpasien") or die(mysql_error());
$cekq = mysql_num_rows($query);
$norm = $cekq+01;
if ($_SESSION['level'] == "3" || $_SESSION['level'] == "2") {
    $x = "required";
}
else {
    $x = "disabled";
}
?>
    <div class="grid">
        <div class="row cells5">
            <div class="cell colspan2">

<form name="Tambah_Pasien" action="pasien/tmbhproses.php" method="POST" enctype="multipart/form-data">
    <table class="table border" cellspacing="1" cellpadding="3">
        <tbody>
            <tr>
                <td colspan="3">Tambah Data Pasien</td>
            </tr>
            <tr>
                <td>No Pasien</td>
                <td>:</td>
                <td>
                    <div class="input-control text">
                    <input type="text" name="NoPasien" value="<?php echo "PSN0".$norm; ?>" readonly <?= $x ?> />
                    </div>
                </td>
            </tr>
            <tr>
                <td>Nama Pasien</td>
                <td>:</td>
                <td>
                <div class="input-control text">
                    <input type="text" name="NmPasien" value="" <?= $x ?>  />
                </div>
                </td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>:</td>
                <td>
                <input type="radio" name="J_Kel" value="L" checked="checked" <?= $x ?>  /><span class="check"></span><span class="caption">L</span> <input type="radio" name="J_Kel" value="P" <?= $x ?>  /><span class="check"></span><span class="caption">P</span></td>
            </tr>
            <tr>
                <td>Agama</td>
                <td>:</td>
                <td>
                <div class="input-control select">
                    <select name="Agama" <?= $x ?> >
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
                <textarea name="Alamat" rows="4" cols="20" <?= $x ?> ></textarea>
                </div>
                </td>
            </tr>
            <tr>
                <td>Tempat Lahir</td>
                <td>:</td>
                <td>
                <div class="input-control text">
                <input type="text" name="Tmp_Lahir" value="" <?= $x ?>  />
                </div>
                </td>
            </tr>
            <tr>
                <td>Tanggal Lahir</td>
                <td>:</td>
                <td>
                    <div class="input-control text" data-role="datepicker">
                        <input type="text" <?= $x ?> >
                        <button class="button"><span class="mif-calendar"></span></button>
                    </div>
                </td>
            </tr>
            <tr>
                <td>No Telpon</td>
                <td>:</td>
                <td><div class="input-control text">
                <input type="number" name="No_Telp" value="" <?= $x ?>  maxlength="13" />
                </div></td>
            </tr>
            <tr>
                <td>Foto</td>
                <td>:</td>
                <td><div class="input-control file" data-role="input">
                <input type="file" name="Foto" value="" <?= $x ?>  /><button class="button"><span class="mif-folder"></span></button>
                </div></td>
            </tr>
            <tr>
                <td><input type="submit" value="Tambah" name="tambah" /></td>
                <td></td>
                <td><input type="reset" value="Kosongkan" name="reset" /></td>
            </tr>
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
while ($r = mysql_fetch_array($query)) {
?>
        <tr>
            <td><?php echo $nopasien = $r['NoPasien']; ?></td>
            <td><?php echo $r['NmPasien']; ?></td>
            <td><?php echo $r['J_Kel']; ?></td>
            <td><img src="pasien/foto/<?php echo $r['Foto']; ?>" width="50" height="50"></td>
            <td><?php echo date('d F Y', strtotime($r['Tgl_Registrasi'])); ?></td>
            <?php
            if ($_SESSION['level'] == "3" || $_SESSION['level'] == "2"){
            ?>
            <td><button onclick="window.location='index.php?hal=EditPasien&NoPasien=<?php echo $nopasien; ?>'">Edit</button> <button onclick="window.location='pasien/hapus.php?NoPasien=<?php echo $nopasien; ?>'">Hapus</button></td>
            <?php
            }
            ?>
        </tr>
        </tr>
<?php 
}
?>
</tbody>
    </table>
        </div>
    </div>
</div>