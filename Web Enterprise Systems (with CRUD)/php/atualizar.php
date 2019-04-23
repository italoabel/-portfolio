<?php

	$conexao = mysqli_connect("localhost","root","","sistema");
	mysqli_set_charset($conexao, 'utf8');

	$cpfcnpj = $_POST['atualizar'];
	
	$query = "SELECT * FROM `cadastro` WHERE `cpf-cnpj` LIKE '$cpfcnpj'";

	$resultado_dados = mysqli_query($conexao, $query);

	while ($row_dados = mysqli_fetch_assoc($resultado_dados)) {
		
		$cpfcnpj = $row_dados['cpf-cnpj'];
		$nomerazao = ucwords($row_dados['nome-razao']);
		$rgmunicipal = $row_dados['rg-municipal'];
		$inscricaoestadual = $row_dados['inscricao-estadual'];
		$endereco = $row_dados['endereco'];
		$cep = $row_dados['cep'];
		$cidade = $row_dados['cidade'];
		$uf = $row_dados['uf'];
		$email = $row_dados['email'];
		$tel1 = $row_dados['tel1'];
		$tel2 = $row_dados['tel2'];
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Atualizar</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css"/>
</head>
<body>
	<!--MENU-->
		<div id="loginpage">
			<div id="menu">
				<table>
					<tr>
						<td><a href="../pgs/home.php">Home</a></td>
						<td><a href="#">Sistema</a></td>
						<td><a href="../pgs/Register.php">Cadastro</a></td>
						<td><a href="../pgs/buscar.php">Buscar</a></td>
						<td><a href="#">Logout</a></td>
					</tr>
				</table>
			</div>
	<!--IMPRIMIR BUSCA E FORMULARIO-->
			<div id="resultado-busca">
				<form method="post" action="update.php" id="form-atualizar">
					<label>CPF/CNPJ:</label></>
					<input type="text" name="cpf-cnpj" value="<?php echo ($cpfcnpj) ?>" readonly/></br>
					<label>Nome/Razão:</label>
					<input type="text" name="nome-razao" value="<?php echo ($nomerazao) ?>"/></br>
					<label>RG/Inscrição Municipal: </label>
					<input type="number" name="rg-municipal" value="<?php echo ($rgmunicipal) ?>"/></br>
					<label>Endereço:</label>
					<input type="text" name="endereco" value="<?php echo ($endereco) ?>"/></br>
					<label>CEP:</label>
					<input type="number" name="cep" value="<?php echo($cep) ?>"/><br/>
					<label>Cidade: </label>
					<input type="text" name="cidade" value="<?php echo ($cidade) ?>"/></br>
					<label>Estado:</label>
					<select name="uf" id="select-option">
						<option value="<?php echo($uf) ?>" selected><?php echo($uf) ?></option>
						<option value="go">GO</option>
						<option value="df">DF</option>
						<option value="sp">SP</option>
						<option value="mg">MG</option>	
						<option value="rj">RJ</option>
						<option value="rs">RS</option>
					</select></br>
					<label>Email: </label>
					<input type="email" name="email" value="<?php echo ($email) ?>"/></br>
					<label>Telefone 1: </label>
					<input type="number" name="tel1" value="<?php echo ($tel1) ?>"/></br>
					<label>Telefone 2: </label>
					<input type="number" name="tel2" value="<?php echo ($tel2) ?>"/></br>

					<input type="submit" name="atualizar" value="Atualizar" id="submit-atualizar" /><br/>
					<input type="submit" name="deletar" value="Deletar Usuario" id="submit-atualizar"/>
				</form>
			</div>
		</div>

</body>
</html>

