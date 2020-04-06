<!DOCTYPE html>
<html lang="pr">
    <head>
    	<title>Inscrições com CEP Automatico</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<link rel="shortcut icon" href="img/favicon.png" />
		<link rel="stylesheet" href="css/style.css">
		<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;700&display=swap" rel="stylesheet"> 
		<!-- Adicionando Javascript -->
    	<script src="js/app.js"></script>
    </head>
	<body>
		<div class="container">
			<div class="row">
				<h4>INSCRIÇÕES COM CEP AUTOMATICO</h4>
				<p>Preencha todos os dados abaixo para fazer o registro</p>	
				<!-- Inicio do formulario -->
				<form method="post" action="php/registro.php">
					<div class="input-div">
						<label>Nome: </label>
						<input name="nome" type="text"  size="8" required placeholder="Nome" />
					</div>
					<div class="input-div">
						<label>CPF: </label>
						<input name="cpf" type="text" pattern="\d{3}\.\d{3}\.\d{3}-\d{2}" size="8" required placeholder="nnn.nnn.nnn-nn" />
					</div>
					<div class="input-div">
						<label>E-mail: </label>
						<input name="mail" type="email"  size="8" required placeholder="meunome@exemplo.com" />
					</div>
					<div class="input-div">
						<label>Conferir E-mail: </label>
						<input name="mail2" type="email"  size="8" required placeholder="meunome@exemplo.com" />
					</div>
					<div class="input-div">
						<label>Telefone: </label>
						<input name="telefone" type="text"  size="8" required placeholder="(xx) xxxxx-xxxx"/>
					</div>
					<div class="input-div">
						<label>CEP: </label>
						<input name="cep" type="text" id="cep" value="" size="10" maxlength="9" required placeholder="nnnnn-nnn" onblur="pesquisacep(this.value);" />
					</div>
					<div class="input-div">
						<label>Rua: </label>
						<input name="rua" type="text" id="rua" size="60" required placeholder="Rua"  />
					</div>
					<div class="input-div">
						<label>Bairro: </label>
						<input name="bairro" type="text" id="bairro" size="40" required placeholder="Bairro" />
					</div>
					<div class="input-div">
						<label>Cidade: </label>
						<input name="cidade" type="text" id="cidade" size="40" required placeholder="Cidade" />
					</div>
					<div class="input-div">
						<label>Estado: </label>
						<input name="uf" type="text" id="uf" size="2" required placeholder="Estado" />
					</div>
					<div class="input-div">
						<label>Cidade Seminário: </label>
						<select name="cidadesem" id="">
							<option>São Paulo</option>
							<option>Rio de Janeiro</option>
							<option>Concordia</option>
							<option>Brasilia</option>
							<option>Acre</option>
							<option>Porto Velho</option>
							<option>Belo Horizonte</option>
							<option>Salvador</option>
						</select>
					</div>
					<div style="clear: both;"></div>
					<div class="boton">
						<button type="submit" >Enviar</button>
					</div>
				</form>
			</div>
		</div>
	</body>
</html>