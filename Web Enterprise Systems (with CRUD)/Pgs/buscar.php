<?php
require_once('../php/checarlogin.php');
?>
<!doctype html>
<html>
<head>
	<title>Buscar</title>
	<meta charset="utf-8">
	<meta name="author" content="#"/>
	<meta name="Keywords" content="#"/>
	<meta name="Description" content="#"/>
	<link href="../Css/style.css" rel="stylesheet"/>
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
						<td><a href="../index.html" target="_self">Logout</a></td>
					</tr>
				</table>
			</div>


		<div id="busca-div">
			<legend>Buscar</legend>
			<form method="post" action="../php/buscar.php" name="busca" >
				<input type="text" name="buscar" placeholder="DIGITE O CPF/CNPJ" id="campo-buscar" />
			</br>
				<input type="submit" value="buscar"/>
			</form>
		</div>



</body>
</html>