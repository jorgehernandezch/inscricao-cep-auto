<!DOCTYPE html>
<html lang="pr">
    <head>
		<title>Inscrições com CEP Automatico</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<link rel="shortcut icon" href="../img/favicon.png" />
		<link rel="stylesheet" href="../css/style.css">
		<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;700&display=swap" rel="stylesheet"> 
	</head>
	<body>
		<div class="container">
			<div class="row">
				<h4>INSCRIÇÕES COM CEP AUTOMATICO</h4>
				<div>
					<?php
						include 'conexao.php';
						$link = Conectarse();
						include 'inscricao.php';
					?>
				</div>		
			</div>
		</div>
	</body>
</html>
