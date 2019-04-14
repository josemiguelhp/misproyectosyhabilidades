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
    require_once '../../recursos/securimage/securimage.php';
    // Code Validation
    $image = new Securimage();
    if ($image->check($_POST['captcha_code']) == false) {
    echo "<p>Codigo captcha  incorrecto <a href='../../registrar-usuario.html'>vuelve</a> a intentarlo.</p>";
    exit();
    }

	$host_db = "localhost";
	$user_db = "root";
	$pass_db = "";
	$db_name = "proyecto";
	$tbl_name = "Usuarios";
  
	$form_pass = $_POST['password'];
	$hash = password_hash($form_pass, PASSWORD_BCRYPT); 

	$conexion = mysqli_connect($host_db, $user_db, $pass_db, $db_name);
	

	$buscarUsuario = "SELECT * FROM $tbl_name WHERE nombre_usuario = '$_POST[username]' ";	
	$result = mysqli_query($conexion, $buscarUsuario);	
	$count = mysqli_num_rows($result);

	if ($count == 1) {
		echo "<p> Este usuario ya existe <a href='../../registrar-usuario.html'>Por favor escoga otro Nombre</a></p>";
	}
	else{
		$query = "INSERT INTO Usuarios (nombre_usuario, password)
		VALUES ('$_POST[username]', '$hash')";

		if (mysqli_query($conexion, $query) === TRUE) {
			echo "<p>Usuario Creado Exitosamente!</p>";
			echo "<p>Bienvenido:".$_POST['username']."</p>";
			echo "<p><a href='../../index.html'>Logearme</a></p>";
		}
 		else {
			echo "Error al crear el usuario." . $query . "<br>"; 
		}
 	}

	mysqli_close($conexion);
?>

</body>
</html>
