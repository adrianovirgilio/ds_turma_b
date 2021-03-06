﻿<?php
	include("conecta.php");
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Cadastro de Aluno</title>
<link href="css/estilo.css" rel="stylesheet" type="text/css">
</head>
<body>
    <div id="todoconteudo">
    
        <div id="cabecalho">    
        </div>
        
        <div id="menu">    
        </div>
        
        <div id="corpo">
        <fieldset>
        	<form action="#" method="get">            
     		<!-- Select que vai buscar as turma disponíveis para cadastro-->
            <label>Seleciona o código de uma turma:</label>
            <select name="turma" required>
            	<option></option>
            	<?php
					$busca = $conexao->query("SELECT * FROM tb_turma"); 
					while ($linha = $busca->fetch(PDO::FETCH_ASSOC)) {
    					echo "<option value={$linha['id_turma']}>{$linha['id_turma']}</option>";
					}
                 ?>             
            </select>
            <!-- fim do select -->                
            	<p><input type="submit" name="cadastrar" value="Cadastrar Aluno"> </p>        
            
            </form>
           </fieldset>         
        </div>
        
        <div id="rodape">
        </div>
    
    </div><!-- Fim da div todoconteudo -->
</body>
</html>