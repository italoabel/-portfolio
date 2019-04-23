<?php
	
	$conexao = mysqli_connect("localhost","root","","sistema");
	mysqli_set_charset($conexao, 'utf8');

	$cpfcnpj = $_POST['buscar'];

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

		/*
		echo '<p>CPF/CNPJ: ' . $cpfcnpj . '</p>';
		echo '<p>Nome/Razao Social: ' . $nomerazao . '</p>';
		echo '<p>RG/Inscrição Municipal: ' . $rgmunicipal . '</p>';
		echo '<p>Inscrição Estadual: ' . $inscricaoestadual . '</p>';
		echo '<p>:Endereço: ' . $endereco . '</p>';
		echo '<p>CEP: ' . $cep . '</p>';
		echo '<p>UF: ' . $uf . '</p>';
		echo '<p>Email: ' . $email . '</p>';
		echo '<p>Telefone 1: ' . $tel1 . '</p>';
		echo '<p>Telefone 2: ' . $tel2 . '</p>';
		*/
			
	}
	mysqli_close($conexao);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Buscar</title>
	<link href="../Css/style.css" rel="stylesheet"/>
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

	<!--IMPRIMIR BUSCA-->
			<div id="resultado-busca">
				<form method="post" action="atualizar.php" id="form-buscar">
				<input type="hidden" name="atualizar" value="<?php  echo($cpfcnpj) ?>"/>

				<p>CPF/CNPJ:  <?php echo "$cpfcnpj"; ?> </p>
				<p>Nome/Razao Social:   <?php echo "$nomerazao" ?>  </p>
				<p>RG/Inscrição Municipal:   <?php echo "$rgmunicipal" ?>  </p>
				<p>Inscrição Estadual:   <?php echo "$inscricaoestadual"; ?>  </p>
				<p>Endereço:   <?php echo "$endereco"; ?>  </p>
				<p>CEP:   <?php echo "$cep"; ?>  </p>
				<p>UF:  <?php echo "$uf"; ?>  </p>
				<p>Email:  <?php echo "$email"; ?>  </p>
				<p>Telefone 1:  <?php echo "$tel1"; ?>  </p>
				<p>Telefone 2:   <?php echo "$tel2"; ?>  </p>
				<input type="submit" value="atualizar" id="submit-buscar">

				</form>
			</div>
			

		</div>

</body>
</html>

