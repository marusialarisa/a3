<?php

session_start();
require ('config.php');

//autenticacion de usuario
if(isset($_POST['submit'])){
	if(!empty($_POST['user'])&&!empty($_POST['pwd'])){
		$user=$_POST['user'];
		$pwd=$_POST['pwd'];
		
	}


//abrir conexion
		//PDO conexion
		try{
$dbh = new PDO('mysql:host=localhost;dbname=db_inmuebles', $config['user'], $config['pwd']); //mysql origen de dato
//dbmane=db_inmuebles el nombre de la base de datos y localhost servidor
//config extraemos el valor de la base de datos user y pwd
}
catch(PDOException $e){ //extraemos con cath la captura con  la variable e

	echo $e->getMessage(); 
}

//hacer una consulta 

$stmt=$dbh->prepare("SELECT user,pwd FROM users WHERE user =:user AND pwd=:pwd"); 
//prepare lansamos la consulta 
//preparar consulta y lifar parametros
$stmt->bindParam(':user',$user); //el parametro user equivale a user
$stmt->bindParam(':pwd',$pwd);
//ejecutar la consula
$result=$stmt->execute();

$arr=$stmt->fetchAll();
//echo $arr[0]['user'];
//contabilizar resultados - filas
if($stmt->rowCount()==1){ //si hay un usuario
	//hemos encontrado el usuario
	///establecer variables de sesion  y redirigir
	$_SESSION['user']=$user; //guardamos user con el nombre de usuario
	header("Location: public/index2.php"); //redirection a otro script
		setcookie('user','$user',time()+365*24*60*60,'/','localhost',0); 
}
}

?>



<!DOCTYPE html>
<html>
<head>
	<title>Autenticacion</title>
	<style type="text/css">
		*{margin: 0px; padding: 0px;}
		body{margin: 0px;}
		.container{width: 100%;height: 100%;}
		.formulario{margin-left: 430px; position: absolute;background-color: lavender;top:100px;opacity: 0.9;font-family: sans-serif;}
		.imagen1{width: 100%;height: 100%;}
		form{height: 200px;text-align: right;margin-right: 140px;margin-top: 50px;}
		label{margin: 20px;}
	
		h1{margin: 50px;}
		p{margin-left: 40px;}
	</style>
</head>
<body>
	<div class="container">
		<img class="imagen1" src="header-bg4.jpg">
	
	<div class="formulario">
	<h1>Autenticacion de usuarios</h1>
	
	<form method="POST" action="<?= $_SERVER['config.php'] ?>">
		<label for="nom">Nombre</label>
		<input type="text" name="user" placeholder="Introduce tu nombre.."><br><br>
		<label for="pasw">Contraseña</label><input type="password" name="pwd" placeholder="Introduce la contraseña.."><br><br>
		<input type="submit" name="submit" value="Entra"><br>

		<p><br>No tienes una cuenta?<a href="registrar.php">Registrate aqui!</p>


	</form>
	</div>
	</div>
</body>
</html>