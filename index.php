<!DOCTYPE html>
<?php

/* 
 * Ujikom 2016 SMK Pasim
 * Rismawan Junandia  * 
 */
include 'session.php';
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Sistem Informasi Rekam Medis</title>
        <link href="style.css" rel="stylesheet">
        <link href="ckeditor/contents.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="jquery.dataTables.min.css">
        <script type="text/javascript" src="jquery.dataTables.min.js"></script>

    </head>
    <body>
        <header>
            <?php
            $level = $_SESSION['level'];
            if ($level == "3"){
                include 'head/admin.php';
            }
            elseif ($level == "2") {
                include 'head/petugas.php';
            }
            else {
                include 'head/dokter.php';
            }
            ?>
        </header>
        <section id="content"><?php  @include 'hal.php'; ?></section>

        <script type="text/javascript">
    $(document).ready(function(){
    $('#table').DataTable();
});
    </script>
    <script src="ckeditor/ckeditor.js" type="text/javascript"></script>
        <footer>
            © 2016 RS Pasim Sukabumi - <a href="about.html">Junandia Group</a>
        </footer>
    </body>
</html>
