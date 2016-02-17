<?php
	include 'koneksi.php';
	if (isset($_POST['login'])) {
		$u = $_POST['username'];
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
	<title>Login Page</title>
        <style>
        body {
            font-size: 20px;
            background-image: url('pasim.png');
            background-repeat: no-repeat;
            background-position: center top;
        }
        #button {
            background-color: #4CAF50; /* Green */
            border: none;
            color: black;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            float: right;
        }
        table {
            position: fixed;
            top: 250px;
            bottom: 100px;
            right: 560px;
            overflow: auto;
        }
        input{
            padding: 15px;
        }
        </style>
</head>
<body>
<form method="POST">
<table align="center">
	<tr align="center" bgcolor="green">
		<td colspan="2">Rekam Medis Login</td>
	</tr>
	<tr>
            <td><input type="text" name="username" placeholder="Username" required></td>
	</tr>
	<tr>
		<td><input type="password" name="password" placeholder="Password" requirder></td>
	</tr>
	<tr align="center" bgcolor="black">
            <td colspan="2"><input type="submit" id="button" value="Login" name="login"></td>
	</tr>
</table>
</form>
</body>
</html>