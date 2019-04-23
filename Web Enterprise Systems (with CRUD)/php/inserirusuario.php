<?php

	require_once('funcoes.php');

	$conexao = mysqli_connect("localhost","root","","sistema");
	mysqli_set_charset($conexao, 'utf8');

	if (mysqli_connect_errno()){
		printf("Conexao falhou: %s \n", mysqli_connect_errno());
	}
	
	$inserir = "INSERT INTO `usuario`(`nome`,`cpf`,`email`,`cargo`,`usuario`,`senha`) VALUE (?,?,?,?,?,?)";

	$stmt = mysqli_prepare($conexao,$inserir);

	
	$nome = $_POST['nome'];
	$cpf = $_POST['cpf'];
	$email = $_POST['email'];
	$cargo = $_POST['cargo'];
	$usuario = $_POST['usuario'];
	$senha = sha1(md5(hash('sha256', $_POST['senha'])));
	

	mysqli_stmt_bind_param($stmt,"ssssss",$nome,$cpf,$email,$cargo,$usuario,$senha);
	mysqli_stmt_execute($stmt);

	mysqli_stmt_close($stmt);
	mysqli_close($conexao);

	header('Location:../pgs/sucesso.php');
	

?>