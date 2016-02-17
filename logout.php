<?php

/* 
 * Ujikom 2016 SMK Pasim
 * Rismawan Junandia  * 
 */
session_start();
session_destroy();
echo "<script>alert('Berhasil Logout'); window.location='login.php';</script>";
?>