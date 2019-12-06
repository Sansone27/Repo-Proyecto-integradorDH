<?php 
$user=[];
$pass=[];
$email=[];
$tel=[];
$usuarios=[$user,$pass,$email,$tel];
	if ($_POST) {
		if (strlen($_POST["usuario"]) == 0) {
			echo "Usuario invalido <br>";
			var_dump("usuario");

		}else{ $user[]="usuario";}
		if (strlen($_POST["password"]) <=8) {
			echo "su password es demasiado corta ";
		}else{$pass[]="password";}
		if (filter_var($_POST["email"],FILTER_VALIDATE_EMAIL)== false) {
			echo "su e-mail es incorrecto";
		}else{$email[]="email";}
		if (is_numeric($_POST["tel"]) == false) {
			echo "en este campo solo van numeros";
		}else{$tel[]="tel";}
	}
 ?>


<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Registrarse</title>
	<link rel="stylesheet" href="registro.css">
</head>
<body>
	
	<div class="container">
		<div class="logo-registro">
		<img src="logo.png" alt="">
	</div><!--cierre de logo registro-->
		<form action="registro.php" method="POST">
			<h3>Registrate!</h3>
			<label for="usuario">Usuario</label>
			<input type="text" name="usuario" value=""  > <br>
			<!--cierre de usuario-->
			<label for="password">Conraseña</label>
			<input type="password" name="password" value="" > <br>
			<!--Cierre de password-->
			<label for="email">Correo electronico</label>
			<input type="email" name="email" value="" ><br>
			<!--Cierre de Correo electronico-->
			<label for="fdn">Fecha de Nacimiento</label>
			<input type="date" value="" name="fdn">
			<!--cierre fecha de nacimiento-->
			<br>
			<label for="tel">Numero de telefono</label>
			<input type="tel" value="" name="tel" id="" >
			<br>
			<!--cierre de numero telefonico-->
			<label for="">¿Quien eres en nuestro club?</label>
			<br>
			<select name="s-p" id="s-p">
				<option value=""selected>Socio</option>
				<option value="">Tutor legal de un socio</option>
				<option value="">Simpatizante</option>
				<option value="">Visita</option>
			</select><!--cierre de select socios-->
			<br>
			<input class="enviar" type="submit"> <input class="enviar" type="reset">
		</form><!--cierre de form-->
		
	</div><!--cierre de container-->
	
</body>
</html>