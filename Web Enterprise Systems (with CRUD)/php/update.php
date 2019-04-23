<?php

	require_once('../php/checarlogin.php');

	include('funcoes.php');
	$conexao = mysqli_connect("localhost","root","","sistema");
	mysqli_set_charset($conexao, 'utf8');

		$cpfcnpj = $_POST['cpf-cnpj'];
		$nomerazao = $_POST['nome-razao'];
		$rgmunicipal = $_POST['rg-municipal'];
		$endereco = $_POST['endereco'];
		$cep = $_POST['cep'];
		$cidade = $_POST['cidade'];
		$uf = $_POST['uf'];
		$email = $_POST['email'];
		$tel1 = $_POST['tel1'];
		$tel2 = $_POST['tel2'];

		switch (get_post_action('deletar','atualizar')){

			case 'atualizar':
				$query = "UPDATE `cadastro` SET `cpf-cnpj`='$cpfcnpj' , `nome-razao`='$nomerazao' ,`rg-municipal`='$rgmunicipal' ,`endereco`='$endereco' ,`cep`='cep' ,`cidade`='$cidade' ,`uf`='$uf' ,`email`='$email' ,`tel1`='$tel1' ,`tel2`='$tel2' WHERE `cpf-cnpj` = '$cpfcnpj' ";

				$atualizar = mysqli_query($conexao, $query);
				break;

			case 'deletar':
				$query = "DELETE FROM `cadastro` WHERE `cpf-cnpj`='$cpfcnpj' ";
				var_dump($query);
				$deletar = mysqli_query($conexao, $query);
				break;


		}

	
	mysqli_close($conexao);

	header('Location:../pgs/sucesso.html');
	
?>

