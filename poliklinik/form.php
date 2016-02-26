<?php

/* 
 * Ujikom 2016 SMK Pasim
 * Rismawan Junandia  * 
 */
if ($_SESSION['level'] == "3" || $_SESSION['level'] == "2"){
    if (isset($_GET['KdPoli'])){
$query = mysql_query("SELECT * FROM poliklinik WHERE KdPoli='$_GET[KdPoli]'");
$r = mysql_fetch_array($query);
$a = $r['NmPoli'];
$ac = "poliklinik/editproses.php";
$nm = "Ubah";
$x = "required";
}  else {
$a = '';    
$ac = "poliklinik/tmbhproses.php";
$nm = "Tambah";
$x = "";
}
}else{
    $a = "";
    $x = "disabled";
}
?>
<form name="Tambah_Poliklinik" action="<?php echo $ac; ?>" method="POST" enctype="multipart/form-data">
    <table class="table border" cellspacing="1" cellpadding="3">
        <tbody>
            <?php if (isset($_GET['KdPoli'])) {?>
            <input type="hidden" name="KdPoli" value="<?php echo $r['KdPoli']; ?>">
            <?php } ?>
            <tr>
                <td>Nama Poliklinik</td>
                <td>:</td>
                <td>
                    <div class="input-control text">
                    <input type="text" name="NmPoli" value="<?php echo $a; ?>" <?php echo $x; ?> />
                    </div>
                </td>
            </tr>
            <?php if ($_SESSION['level'] == "3" || $_SESSION['level'] == "2") { ?>
            <tr>
                <td><input type="submit" value="<?php echo $nm; ?>" name="tambah" /></td>
                <td></td>
                <td><input type="reset" value="Kosongkan" name="reset" /></td>
            </tr>
                
            <?php } ?>
            
        </tbody>
    </table>

</form>