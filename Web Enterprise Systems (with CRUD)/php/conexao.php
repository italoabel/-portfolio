<?php

	require_once('funcoes.php');

	$conexao = mysqli_connect("localhost","root","","sistema");
	mysqli_set_charset($conexao, 'utf8');

	if (mysqli_connect_errno()){
		printf("Conexao falhou: %s \n", mysqli_connect_errno());
	}
	$aux = 0;
	$inserir = "INSERT INTO `cadastro`(`tipo`,`cpf-cnpj`,`nome-razao`,`rg-municipal`,`inscricao-estadual`,`endereco`,`cep`,`cidade`,`uf`,`email`,`tel1`,`tel2`,`senha`) VALUE (?,?,?,?,?,?,?,?,?,?,?,?,?)";

	if(isset($_POST['tipo'])) {
		$tipo = 'fisico';	
	} else {
		$tipo = 'juridico';
	}

	$stmt = mysqli_prepare($conexao,$inserir);

	if(strlen($_POST['cpf-cnpj']) == 11 && isset($_POST['tipo'])){
		if (verificarCpf($_POST['cpf-cnpj'])) {
			$cpfcnpj = $_POST['cpf-cnpj'];
			$aux = 1; 
			
		}

	} elseif (strlen($_POST['cpf-cnpj']) == 14) {
		if (verificarCnpj($_POST['cpf-cnpj'])) {
			$cpfcnpj = $_POST['cpf-cnpj'];
			$aux = 1;
		}
	}


	$nomerazao = $_POST['nome-razao'];
	$rgmunicipal = $_POST['rg-municipal'];
	$inscricaoestadual = $_POST['inscricao-estadual'];
	$endereco = $_POST['endereco'];
	$cep = $_POST['cep'];
	$cidade = $_POST['cidade'];
	$uf = $_POST['uf'];
	$email = $_POST['email'];
	$tel1 = $_POST['tel1'];
	$tel2 = $_POST['tel2'];
	$senha = sha1(md5(hash('sha256', $_POST['password'])));

	mysqli_stmt_bind_param($stmt,"sssssssssssss",$tipo,$cpfcnpj,$nomerazao,$rgmunicipal,$inscricaoestadual,$endereco,$cep,$cidade,$uf,$email,$tel1,$tel2,$senha);
	mysqli_stmt_execute($stmt);

	mysqli_stmt_close($stmt);
	mysqli_close($conexao);

	if($aux == 1){
		header('Location:../pgs/sucesso.php');
	}else{
		header('Location:../pgs/register.php');
	}
?>