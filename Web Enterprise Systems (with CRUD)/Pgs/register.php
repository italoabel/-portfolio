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
		<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
		<script src="https://code.jquery.com/ui/1.12.0/jquery-ui.min.js"></script>

		
		<script type="text/javascript">
			var paginaAtual = 1;
			var tipoCadastro = 0;

			//MOVEIMENTAÇAO DO BLOCO
			$(document).ready(function() {
				$('#first-form-div').css('display', 'block');
				setTimeout(function() {
					$('#first-form-div').css('left', 'calc(50% - 200px)');
				}, 150);

				//SELECIONAR O TIPO DE CADASTRO
				$('.tipo-cadastro').on('click', function(e) {
					if(tipoCadastro == 0) {
						tipoCadastro = $(e.target).attr('tipo-pessoa');
						$('#pessoa-'+tipoCadastro).css('width', '80%');
						$('#pessoa-'+tipoCadastro).css('color', '#333');
						$('#pessoa-'+tipoCadastro).css('text-align', 'center');
						$('#pessoa-'+tipoCadastro).css('border-bottom-width', '2px');
						$('#pessoa-'+tipoCadastro).css('font-size', '18px');
						$('#form #first-form-div input').css('background', 'transparent');
						$('#form #first-form-div input').attr('readonly', false);
						$('#form #first-form-div input:first-child').focus();
						if(tipoCadastro == 'fisica') {
							$('#tipo').prop('checked', true);
							$('.cpf-cnpj').attr('placeholder', 'Insira o CPF');
							$('.nome-razao').attr('placeholder', 'Nome completo');
							$('.rg-municipal').attr('placeholder', 'RG');

							$('#pessoa-juridica').text('');
							$('#pessoa-juridica').css('border-bottom', 'none');
						} else if(tipoCadastro == 'juridica') {
							$('#tipo').prop('checked', false);
							$('.cpf-cnpj').attr('placeholder', 'Insira o CNPJ');
							$('.nome-razao').attr('placeholder', 'Razão Social');
							$('.rg-municipal').attr('placeholder', 'Inscrição Municipal');

							$('#inscricao-estadual').css('display', 'block');

							$('#pessoa-fisica').text('');
							$('#pessoa-fisica').css('border-bottom', 'none');
						}
					} else if(tipoCadastro != 0) {
						$('#pessoa-'+tipoCadastro).css('width', '40%');
						$('#pessoa-'+tipoCadastro).css('color', '#777');
						$('#pessoa-'+tipoCadastro).css('border-bottom-width', '1px');
						$('#pessoa-'+tipoCadastro).css('font-size', '16px');

						$('#form #first-form-div input').attr('placeholder', 'Selecione o tipo de cadastro');
						$('#form #first-form-div input').attr('readonly', true);
						$('#form #first-form-div input').css('background', '#ccc');
						$('#form #first-form-div #inscricao-estadual').attr('placeholder', 'Inscrição Municipal');
						$('#form #first-form-div #inscricao-estadual').css('display', 'none');

						$('#form #first-form-div input').val('');

						if(tipoCadastro == 'fisica') {
							$('#pessoa-fisica').css('text-align', 'left');
							$('#pessoa-juridica').text('Pessoa Jurídica');
							$('#pessoa-juridica').css('border-bottom', '1px solid rgb(194,54,22)');
						} else if(tipoCadastro == 'juridica') {
							$('#pessoa-juridica').css('text-align', 'right');
							$('#pessoa-fisica').text('Pessoa Física');
							$('#pessoa-fisica').css('border-bottom', '1px solid rgb(39,174,96)');
						}
						tipoCadastro = 0;
					}
				});
				
				//MOVIMENTAÇÃO DO BOTAO NEXT E PROX
				$('.next-page, .previous-page').on('click', function(e) {
					var pagina = parseInt($(e.target).attr('pagina'));
					if(pagina > paginaAtual) {
						if(pagina == 2) {
							$('#first-form-div').css('left', '-450px');
							$('#second-form-div').css('left', 'calc(50% - 200px)');
						} else if(pagina == 3) {
							$('#second-form-div').css('left', '-450px');
							$('#third-form-div').css('left', 'calc(50% - 200px)');
						} else if(pagina == 4) {
							$('#third-form-div').css('left', '-450px');
							$('#fourth-form-div').css('left', 'calc(50% - 200px)');
						}
						paginaAtual++;
					} else if(pagina < paginaAtual) {
						if(pagina == 1) {
							$('#first-form-div').css('left', 'calc(50% - 200px)');
							$('#second-form-div').css('left', 'calc(100% + 50px)');
						} else if(pagina == 2) {
							$('#second-form-div').css('left', 'calc(50% - 200px)');
							$('#third-form-div').css('left', 'calc(100% + 50px)');
						} else if(pagina == 3) {
							$('#third-form-div').css('left', 'calc(50% - 200px)');
							$('#fourth-form-div').css('left', 'calc(100% + 50px)');
						}
						paginaAtual--;
					}
				});
			});
		</script>
		
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
			<div id="form">
				<form method="post" action="../php/conexao.php">
					
					<!--PRIMEIRA PARTE-->
					<div id="first-form-div">
						<span class="title">Cadastro 1/3</span>
						<br/><br/>
						<span id="pessoa-fisica" class="tipo-cadastro" tipo-pessoa="fisica">Pessoa Física</span>
						<span id="pessoa-juridica" class="tipo-cadastro" tipo-pessoa="juridica">Pessoa Jurídica</span>
						<br/><br/>
						<input type="checkbox" id="tipo" name="tipo" value="true" style="display: none;">
						<input type="number" name="cpf-cnpj" id="cpf-cnpj" class="cpf-cnpj" placeholder="Selecione o tipo de cadastro" readonly="true">
						<br/>
						<input type="text" name="nome-razao" id="nome-razao" class="nome-razao" placeholder="Selecione o tipo de cadastro" readonly="true">
						<br/>
						<input type="number" name="rg-municipal" id="rg-municipal" class="rg-municipal" placeholder="Selecione o tipo de cadastro" readonly="true">
						<br/>
						<input type="number" name="inscricao-estadual" id="inscricao-estadual" class="municipal" placeholder="Inscrição Estadual" readonly="true" style="display: none;"/>

						<a pagina="2" class="next-page">Próxima </a>
					</div>
					
					<!--SEGUNDA PARTE-->
					<div id="second-form-div">
						<span class="title">Cadastro 2/3</span>
						<br/><br/>
						<input type="text" name="endereco" id="endereco" class="box-text" placeholder="Endereço"/>
						<br/>
						<input type="number" name="cep" id="cep" class="box-text" placeholder="CEP"/>
						<br/>
						<input type="text" name="cidade" id="cidade" class="box-text" placeholder="Cidade"/>
						<br/>
						<select class="box-text" name="uf">
							<option value="none" selected>Estado</option>
							<?php
								require_once("../php/conectarbd.php");
								
								$sql = "SELECT * FROM `estados`";
								$estados = mysqli_query($conexao,$sql);
								while($rowEstados = mysqli_fetch_assoc($estados)){
									echo '<option value="' . $rowEstados['sigla'] . '">' . $rowEstados['sigla'] . '</option>';
								}
							?>
						</select>
						
						<a pagina="1" class="previous-page"> Voltar</a>
						<a pagina="3" class="next-page">Próxima </a>
					</div>
					
					<!--TERCEIRA PARTE--> 
					<div id="third-form-div">
						<span class="title">Cadastro 3/3</span>
						<br/><br/>
						<input type="email" name="email" id="register-email" class="box-text" placeholder="Email"/>
						<br/>
						<input type="number" name="tel1" id="tel1" class="box-text" placeholder="Telefone 1"/>
						<br/>
						<input type="number" name="tel2" id="tel2" class="box-text" placeholder="Telefone 2"/>
		
						<a pagina="2" class="previous-page"> Voltar</a>
						<input type="reset" value="Limpar"/>
						<input type="submit" name="submit" id="register-form" value="Cadastrar"/>
					</div>
					
					
				</form>
			</div>
		</div>
		
		
	</body>
</html>
