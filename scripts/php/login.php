<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>El Laboratorio de Jose</title>
		<link rel="stylesheet" href="../../css/estiloPagina.css">
	</head>
<body>
<?php
	$host_db = "localhost";
	$user_db = "root";
	$pass_db = "";
	$db_name = "proyecto";
	$tbl_name = "Usuarios";
	$form_pass = $_POST['password'];
	$hash = password_hash($form_pass, PASSWORD_BCRYPT); 

	$conexion = mysqli_connect($host_db, $user_db, $pass_db, $db_name);
	

	$buscarUsuario = "SELECT * FROM $tbl_name WHERE nombre_usuario = '$_POST[username]'";	
	$busqueda = mysqli_query($conexion, $buscarUsuario);
	$datoUser = mysqli_fetch_array($busqueda);


    if (password_verify($_POST['password'], $datoUser['password'])) {	
				echo "<p>encontrado</p>";
				session_start();
				$_SESSION['contador'] = 0;
				$_SESSION['username'] = $datoUser['nombre_usuario'];
				header('Location: ../../sitio.php');					
				
			
			} else {
				echo "<p>contraseña o usario incorrectos vuelva a <a href='../../index.html'>logearse</a></p>";		
			}	

?>
</body>
</html>
