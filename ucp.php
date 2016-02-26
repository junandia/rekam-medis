<?php
include 'koneksi.php';
    if (isset($_POST['Ubah'])) {
        $kd = $_POST['kd'];
        $passlama  = md5($_POST['passlama']);
        $passbaru  = md5($_POST['passbaru']);
        $upassbaru = md5($_POST['upassbaru']);

        $cekpasslamaq = mysql_query("SELECT password FROM login WHERE Kd_User='$kd'") or die(mysql_error());
        $cekpasslama = mysql_num_rows($cekpasslamaq);
        if ($cekpasslama == "0") {
            echo "<script>alert('Password lama salah'); window.location='index.php?page=./ucp&kd=".$kd."'</script>";
        }
        else{
            if ($passbaru == $upassbaru) {
                $query = mysql_query("UPDATE `rekamedis`.`login` SET `Password` = '$passbaru' WHERE `login`.`Kd_User` = '$kd' ");
                echo "<script>alert('Password Berhasil di ubah'); window.location='index.php?page=./ucp&kd=".$kd."'</script>";
            }
        }
    }
?>
<form method="POST" enctype="multipart/form-data">
    <input type="hidden" name="kd" value="<?php echo  $_GET['kd']; ?>"></input>
    <table class="table border" cellspacing="1" cellpadding="3">
        <tbody>
            <tr>
                <td>Kata Sandi Lama</td>
                <td>:</td>
                <td>
                    <div class="input-control password">
                    <input type="password" name="passlama" placeholder="Kata Sandi Lama" />
                    </div>
                </td>
            </tr>
            <tr>
                <td>Kata Sandi Baru</td>
                <td>:</td>
                <td>
                    <div class="input-control password">
                    <input type="password" name="passbaru" placeholder="Kata Sandi Baru"/>
                    </div>
                </td>
            </tr>
            <tr>
                <td>Ulangi Kata Sandi Baru</td>
                <td>:</td>
                <td>
                    <div class="input-control password">
                    <input type="password" name="upassbaru" placeholder="Ulangi Kata Sandi Baru" />
                    </div>
                </td>
            </tr>
            <tr>
                <td><input type="submit" value="Ubah" name="Ubah" /></td>
                <td></td>
                <td><input type="reset" value="Kosongkan" name="reset" /></td>
            </tr>            
        </tbody>
    </table>

</form>