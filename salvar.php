<?php 

	error_reporting(E_ALL);    
	ini_set("display_errors", "on");
	
	
	
	require_once "database.php";
	
	function salvar($cli){		
		$pdo = getPdo();
		
		extract($cli);
		
		/*$stm = $pdo->prepare("INSERT INTO cliente(nome, email, rua, bairro, num) VALUES(?, ?, ?, ?, ?)");
		$stm->bindValue(1, $nome);
		$stm->bindValue(2, $email);
		$stm->bindValue(3, $rua);
		$stm->bindValue(4, $bairro);
		$stm->bindValue(5, $numero);
		$stm->execute();
		
		$id = $pdo->lastInsertId();*/
		$id = 23;
			
		return $id;
		}
		
	}
	
	
?>