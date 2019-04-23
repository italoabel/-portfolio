<?php
require_once('../php/checarlogin.php');
?>
<!doctype html>
	<html>
	<head>	
		<title>Cadastro</title>
		<meta charset="utf-8">
		<meta name="author" content="#"/>
		<meta name="Keywords" content="#"/>
		<meta name="Description" content="#"/>
		<link href="../Css/style.css" rel="stylesheet"/>
		<script type="text/javascript" src="../Js/funcoes.js"></script>
	</head>
<body>
		<!--MENU-->
		<div id="loginpage">
			<div id="menu">
				<table>
					<tr>
						<td><a href="home.php" target="_self">Home</a></td>
						<td><a href="cadastrarusuario.php">Sistema</a></td>
						<td><a href="register.php" target="_self">Cadastro</a></td>
						<td><a href="buscar.php">Buscar</a></td>
						<td><a href="../php/logout.php" target="_self">Logout</a></td>
					</tr>
				</table>
			</div>
			<!--FORMULARIO-->
				<form method="post" action="../php/inserirusuario.php" name="cadastro" onsubmit="return teste_senha(cadastro.senha.value, cadastro.confirmar.value);">
					<div id="resultado-busca">
						<input type="text" name="nome" class="box-text" placeholder="Nome" required />
						<br/>
						<input type="number" name="cpf" class="box-text" placeholder="CPF" required/>
						<br/>
						<input type="email" name="email" class="box-text" placeholder="Email"/>
						<br/>
						<input type="text" name="cargo" class="box-text" placeholder="Cargo"/>
						<br/>
						<input type="text" name="usuario" class="box-text" placeholder="Usuario" required/>
						<br/>
						<input type="password" name="senha" class="box-text" placeholder="Senha" required/>
						<br/>
						<input type="password" name="confirmar" class="box-text" placeholder="Confirmar Senha" required/>
						<br/>
						<input type="submit" name="submit" value="Cadastrar" />
					</div>
				</form>
	</div>
</body>