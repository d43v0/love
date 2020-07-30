<?php
include ("config.php");
session_start();

	if (isset($_POST['log'])) {

			$usuario = $_POST['usuario'];
			$password = $_POST['password'];
					$md5_pass = md5($password);
			$sql = "SELECT id, tipo FROM admin WHERE usuario = '$usuario' AND password = '$md5_pass'";
			$result=$mysqli->query($sql);
			$rows = $result->num_rows;

			if($rows > 0) {
				$row = $result->fetch_assoc();
				$_SESSION['id_usuario'] = $row['id'];
				$_SESSION['nombre_usuario'] = $_POST['usuario'];			
				$_SESSION['tipo_usuario'] = $row['tipo'];

					header("location: subir.php");
			} else {
			echo '<script> alert("El nombre o password son incorrectos"); </script>' ;
							header("location: login.php");

		}

		}

	?>
	<!DOCTYPE html>
	<html>
	<head>


		<title>Administrador</title>
		<link rel="stylesheet" type="text/css" href="log.css">
		
	</head>
	<body>
	<div class="login">
		<div class="login-screen">
			<div class="app-title">
					<form action="" method="POST" class="form_log">
						<center><h1>Administrador</h1></center>

			</div>

			<div class="login-form">
				<div class="control-group">
				<input type="text" class="login-field" value="" placeholder="username"  name="usuario">
				<label class="login-field-icon fui-user" for="login-name"></label>
				</div>

				<div class="control-group">
				<input type="password" name="password" class="login-field" value="" placeholder="password"  id="login-pass">
				<label class="login-field-icon fui-lock" for="login-pass"></label>
				</div>
				<input type="submit" name="log" value="Entrar">
					<a  class="btn btn-primary btn-large btn-block" href="index.php">Regresar</a>
			</div>
		</div>
	</div>
</body>
<!--
	<body>
		<div class="todo">
		<table>
			<tr>
				<td><label>Usuario</label></td>
				<td></td>
			</tr>

			<tr>
				<td><label>Password</label></td>
				<td></td>
			</tr>
			<tr>
				<td></td>
				<td></td>
			</tr>
		</table>
	</form>
	</div>
	</body>-->
	</html>
