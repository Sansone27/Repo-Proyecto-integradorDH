<?php 
if ($_POST) {
	$user = $_POST['usuario'];
	$pass = $_POST['password'];
	$usuarios = [$user , $pass];
	foreach ($usuarios as $key => $value) {
		if ($user== $value) {
			echo "usuario correcto";
		}else{echo "usuario incorrecto <br>";}
		if ($pass== $value) {
			echo "contra correct";
		}else{echo "password incorrecta";}
			
	}


 }
?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Login</title>
	<link rel="stylesheet" href="login.css">
</head>
<body>
	<div class="container">
		<div class="logo-login">
			<img src="logo.png" alt="">
		</div><!--cierre logo-login-->
	<div class="form-login">
		<form action="login.php" method="POST">
			<label id="user" for="">Usuario</label>
			<input type="text" name="usuario" value="">
			<br>
			<label id="pass" for="">Contraseña</label>
			<input type="password" name="pass" value="">
			<br>
			<button>Aceptar</button>
			<br>
			<button>Olvide mi contraseña</button> 
		
		</form>
		<a href="registro.php">¿No estas registrado? <br> Registrate aqui!</a>

	</div>
	</div><!--CIERRE CONTAINER-->
</body>
</html>