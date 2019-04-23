<?php
require_once('funcoes.php');
include_once('verifica_login.php');

$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

$resultlogin = check_login($conexao, $usuario, $senha);

if($resultlogin[0] == true){
	session_start();
	$_SESSION['id'] = $r['id'];
	$_SESSION['nameUser'] = $resultlogin[1]['nameUser'];
	$_SESSION['mensagem'] = "Seja bem vindo!";

	header('Location: ../pgs/home.php');
}else{
	$_SESSION['mensagem'] = "Falha no login!";
	echo '<script type="text/javascript" >';
	echo 'alert("Login invalido!!")';
	echo 'document.location.href= "../Index.html";';
	echo '</script>';


}




?>
