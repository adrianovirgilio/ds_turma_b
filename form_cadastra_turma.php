<?php
 if(isset($_GET['cadastrar']))
  {
	$id = 0;
	$data_inicio = $_GET['data_inicio'];
	$data_termino = $_GET['data_termino'];
	$hora_inicio = $_GET['hora_inicio'];
	$hora_termino = $_GET['hora_termino'];
	include("conecta.php");//chamando conexão
	$sql = "INSERT INTO tb_turma(id_turma,data_inicial,data_final,hora_inicial,hora_final)VALUES(:valor1,:valor2,:valor3,:valor4,:valor5)";
$stmt = $conexao->prepare($sql);
$stmt->bindParam(':valor1',$id);
$stmt->bindParam(':valor2',$data_inicio);
$stmt->bindParam(':valor3',$data_termino);
$stmt->bindParam(':valor4',$hora_inicio);
$stmt->bindParam(':valor5',$hora_termino);
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
     <fieldset>	
         <form action="#" method="get">
         <p><label>Data início:</label> </p>
         <p><input type="date" name="data_inicio"></p>
         
         <p><label>Data término:</label> </p>
         <p><input type="date" name="data_termino"></p>
         
         <p><label>Horário de início:</label> </p>
         <p><input type="time" name="hora_inicio"></p>
         
         <p><label>Horário de término:</label> </p>
         <p><input type="time" name="hora_termino"></p>
         
         <p><input type="submit" value="Cadastrar Turma" name="cadastrar" ></p>
         </form> 
     </fieldset>  
    </div>
    
    <div id="rodape">
    </div>
 </div>
</body>
</html>