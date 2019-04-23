<?php
	$conexao = mysqli_connect("localhost","root","","sistema");
	mysqli_set_charset($conexao, 'utf8');

	if (mysqli_connect_errno()){
		printf("Conexao falhou: %s \n", mysqli_connect_errno());
	}
?>