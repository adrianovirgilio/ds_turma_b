﻿<?php
 if(isset($_GET['cadastrar']))
  {
	$id = 0;
	$data_inicio = $_GET['data_inicio'];
	include("conecta.php");//chamando conexão
	$sql = "INSERT INTO
   			tb_turma(id_turma,data_inicial)
   			VALUES(:id_turma, :data_inicial)";
$stmt = $conexao->prepare($sql);
$stmt->bindParam(':id_turma',$id);
$stmt->bindParam(':data_inicial',$data_inicio);
$rs = $stmt->execute();
if($rs)
{
 echo "<script>alert('Dados Gravados!')</script>";
}
else
{
	echo "<script>alert('".
	 var_dump($stmt->errorInfo()) .
	 					"');</script>";
}
}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Cadastro de Turma/Time</title>
<link href="css/estilo.css" rel="stylesheet" type="text/css">
</head>
<body>
<div id="todoconteudo">
	<div id="cabecalho">    
    </div>
    
    <div id="menu">    
    </div>
    
<div id="corpo">  
 <!--Criando formulário -->  	
 <form action="#" method="get">
 <p><label>Data início:</label> </p>
 <p><input type="date" name="data_inicio"></p>
 <p><input type="submit" value="Cadastrar" id="gravar"	name="cadastrar" ></p></form>   
    </div>
    
    <div id="rodape">
    </div>
 </div>
</body>
</html>