<?php
	session_start();
	$user = $_POST['login'];
    $password = $_POST['senha'];
    include("conecta.php");
    $comando_sql = "SELECT * FROM tb_professor  WHERE   login=? and senha=?;";
    $busca = $conexao->prepare($comando_sql);
    $busca->bindParam(1,$user);
    $busca->bindParam(2,$password);
    $busca->execute();
    if($busca->rowCount()>0)
	{
		$_SESSION['login'] = $login;
		$_SESSION['senha'] = $senha;
		header('location:index.php');			
	}
	else
	{
		unset ($_SESSION['login']);
  		unset ($_SESSION['senha']);
  		header('location:index.html');
    }

?>
