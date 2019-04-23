<?php

	$conexao = mysqli_connect("localhost","root","","sistema");
	mysqli_set_charset($conexao, 'utf8');

	$cpfcnpj = $_POST['cpf-cpnj'];

	$query = myqsli_query("DELETE FROM `cadastro` WHERE `cpf-cpnj` = '$cpfcnpj' ");

	mysqli_close($conexao);

	header('Location:../pgs/home.html');

?>