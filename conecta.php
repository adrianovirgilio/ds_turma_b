<?php
	$usuario = "root";
	$senha = "usbw";
	$host = "localhost";
	$banco = "bd_escolinha_turmab";		
	try{		
		$conexao = new PDO('mysql:host='. $host . ':3307;dbname='.$banco, $usuario, $senha,
						 		array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
	}catch(PDOException $e){
		echo "Erro:" . $e->getMessage();	
		
	}
?>


