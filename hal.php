<?php

/* 
 * Ujikom 2016 SMK Pasim
 * Rismawan Junandia  * 
 */


if(isset($_GET['page'])){
                    $page=$_GET['page'];
                    $halaman="$page.php";
                    if(!file_exists($halaman) || empty($page)){
                        include "home.php";
                    }else{
                        include "$halaman";
                        }           
                }else{
                    include "home.php";
                    }
?>