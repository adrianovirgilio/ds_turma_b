<?php
/*
 # Etec Tenente Aviador Gustavo Klug
 # Curso: Informática Para Internet
 # 3º Módulo -Turma B
 # Disciplina: Desenvolvimento de Software II
 # Competências: Analisar a orientação a objetos e sua aplicação em sistemas web; Integrar sistemas web com sistemas gerenciadores de banco de dados.
 # Prof. Adriano Virgílio
 # Data: 23/04/2019
*/
	$usuario = "root";
	$senha = "usbw";
	$host = "localhost";
	$banco = "bd_escolinha_turmab";		
	try{		
		$conexao = new PDO('mysql:host='. $host . ':3307;dbname='.$banco, $usuario, $senha);
				
		/*$stmt = $conexao->prepare('INSERT into tb_time(id_turma,data_inicial)VALUES(:id,:data_inicial)');
		$stmt->execute(array(
							':id' => null,
							':data_inicial' => '2019-03-29')
						);
		echo $stmt->rowCount(); */
	}catch(PDOException $e){
		echo "Erro:" . $e->getMessage();	
		
	}
?>


