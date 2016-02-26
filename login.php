<?php
	include 'koneksi.php';
	if (isset($_POST['login'])) {
		$u = mysql_real_escape_string($_POST['username']);
		$p = md5($_POST['password']);
		$cekq = mysql_query("SELECT * FROM login WHERE Username='$u' AND Password='$p' AND aktif='Y'");
		$cek = mysql_num_rows($cekq);
                $level = mysql_fetch_array($cekq);
                $l = $level['level'];
                $kd = $level['Kd_User'];
		if ($cek) {
			session_start();
			$_SESSION['username'] = $u;
			$_SESSION['password'] = $p;
            $_SESSION['level'] = $l;
            $_SESSION['Kd_User'] = $kd;
			header("location:index.php?hal=index");
		}
		else {
			echo "<script>alert('AKUN ANDA TIDAK DITEMUKAN / BELUM AKTIF'); windows.location='login.php'</script>";
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="description" content="Metro, a sleek, intuitive, and powerful framework for faster and easier web development for Windows Metro Style.">
    <meta name="keywords" content="HTML, CSS, JS, JavaScript, framework, metro, front-end, frontend, web development">
    <meta name="author" content="Sergey Pimenov and Metro UI CSS contributors">

    <link rel='shortcut icon' type='image/x-icon' href='../favicon.ico' />

    <title>Rekam Medis Login</title>

    <link rel="stylesheet" type="text/css" href="asset/css/metro.css">
    <link rel="stylesheet" type="text/css" href="asset/css/metro-icons.css">
    <link rel="stylesheet" type="text/css" href="asset/css/metro-responsive.css">
    <script type="text/javascript" src="asset/js/jquery-2.1.3.min.js"></script>
    <script type="text/javascript" src="asset/js/metro.js"></script>
 
    <style>
        .login-form {
            width: 25rem;
            height: 18.75rem;
            position: fixed;
            top: 50%;
            margin-top: -9.375rem;
            left: 50%;
            margin-left: -12.5rem;
            background-color: #ffffff;
            opacity: 0;
            -webkit-transform: scale(.8);
            transform: scale(.8);
        }
    </style>

    <script>

        /*
        * Do not use this is a google analytics fro Metro UI CSS
        * */
        $(function(){
            var form = $(".login-form");

            form.css({
                opacity: 1,
                "-webkit-transform": "scale(1)",
                "transform": "scale(1)",
                "-webkit-transition": ".5s",
                "transition": ".5s"
            });
        });
    </script>
</head>
<body class="bg-darkTeal">
    <div class="login-form padding20 block-shadow">
        <form method="POST">
            <h1 class="text-light">Masuk Rekam Medis</h1>
            <hr class="thin"/>
            <br />
            <div class="input-control text full-size" data-role="input">
                <label for="user_login">Nama Pengguna:</label>
                <input type="text" name="username" id="user_login">
                <button class="button helper-button clear"><span class="mif-cross"></span></button>
            </div>
            <br />
            <br />
            <div class="input-control password full-size" data-role="input">
                <label for="user_password">Kata Sandi:</label>
                <input type="password" name="password" id="user_password">
                <button class="button helper-button reveal"><span class="mif-looks"></span></button>
            </div>
            <br />
            <br />
            <div class="form-actions">
                <button type="submit" name="login" class="button primary">Masuk</button>
            </div>
        </form>
    </div>



</body>
</html>