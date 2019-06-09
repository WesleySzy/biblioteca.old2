<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<title>Cadastro de Livros</title>
		<link rel="stylesheet" href="css/bootstrap.css" />
		<link rel="stylesheet" href="css/style.css" />
		<link rel="stylesheet" href="css/normalize.css" />
		<style type="text/css" media="screen">
			body {
				background: #34495e;
			}
		</style>
	</head>
	<body>
		<h2 align="center" class="well">Cadastrar Livro</h2>
		<form class="form-horizontal well span6 offset5" action="home.php" method="POST" >
			<input type="hidden" name="acao" value="insere_processa" />
			<?php
            require_once ('formulario_cadastro.php');
			?>
		</form>
		<h2 align="center" class="well">Cadastrar Livro</h2>
		<form class="form-horizontal well span6 offset5" action="home.php" method="POST" >
			<input type="hidden" name="acao" value="insere_processa" />
			<?php
            require_once ('formulario_cadastro_aluno.php');
			?>
		</form>
	</body>
</html>