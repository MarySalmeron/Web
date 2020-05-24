<?php
    $host= "localhost";
    $user= "root";
    $password= "";
    $db= "preinscripcion";   
    
    $connection= mysqli_connect($host, $user, $password, $db, "3306");

	if(!$connection){
		die('Problemas con la conexi&oacute;n al servidor MySQL: '.mysqli_error());
	}else{
		mysqli_query($connection, "SET NAMES 'utf8'"); //Esta instrucción permite guardar eñes y acentos en la BD ;)
	}
?>

