<?php

require("conectarbd.php");

function absolut_url($page = 'index.php'){
	$url = 'http//' . $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF']);
	$url = rtrim($url,'/\\');
	$url = '/' . $page;

	return $url;
}

function check_login($conexao,$usuario,$senha){

	$errors = array();

	  if(empty($usuario)){
	  	$errors[] = 'nao foi figitado o usuario';
	  }else{
	  	$e = mysqli_real_escape_string($conexao, trim($usuario));
	  }

	  if (empty($senha)) {
	  	$errors[] = 'Nao foi digitada a senha';
	  }else{
	  	$p = mysqli_real_escape_string($conexao, trim($senha));
	  }

	  if(empty($errors)){
	  	$senha = sha1(md5(hash('sha256', $senha)));
	  	$q = "SELECT * FROM `usuario` WHERE `usuario` = '$e' AND `senha` = '$senha'";
	  	$r = @mysqli_query($conexao, $q);

	  	if (mysqli_num_rows($r) == 1) {

	  		$row = mysqli_fetch_array ($r, MYSQLI_ASSOC);

	  		$ssid = '';
			$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
		    $charactersLength = strlen($characters);
		    for ($i = 0; $i < 256; $i++) {
		        $ssid .= $characters[rand(0, $charactersLength - 1)];
		    }

		    $q = "UPDATE `usuario` SET `ssid`='$ssid' WHERE `usuario`='$e'";
		    $r = @mysqli_query($conexao, $q);

		    setcookie('ssid', $ssid, time()+60*10, '/');

	  		return array(true, $row);
	  	}else{
	  		$errors = 'o usuario e a senha sao invalidas';
	  		
	  	}
	  }
	  return array(false, $errors);



}
