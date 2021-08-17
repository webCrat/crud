<?php	
	//session_start();
	
	error_reporting(E_ALL);    
	ini_set("display_errors", "on");
	
	require_once "salvar.php";
	
	$nome = addslashes($_POST["nome"]);
	$email = addslashes($_POST["email"]);
	$rua =  addslashes($_POST["rua"]);
	$bairro = addslashes($_POST["bairro"]);
	$numero = addslashes($_POST["numero"]);
	
	$cliente = array(
		"nome" => $nome,
		"email" => $email,
		"rua" => $rua,
		"bairro" => $bairro,
		"num" => $numero	
	);
	
	
	$_SESSION["id"] = salvar($cliente);
	
	
?>	