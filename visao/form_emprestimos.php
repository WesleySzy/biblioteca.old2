<html>
<head>	
		<title>Cadastro De Emprestimos</title>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<link rel="stylesheet" href="css/bootstrap.css" />
		<link rel="stylesheet" href="css/style.css" />
		<link rel="stylesheet" href="css/normalize.css" />
		<style type="text/css" media="screen">
			body {
				background: #fff;
			}
		</style>
	</head>

<body>

<div class="navbar">
   <div class="navbar-inner">
      <div class="container">
      
    <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
    </a>
 
      
      <a class="brand" href="../home.php"><b>Home</b></a>
      
      
      <a class="brand" href="../visao/cadastrar_aluno.php">Cadastrar Aluno</a>
      <a class="brand" href="../visao/formulario_cadastro_func.php">Cadastrar Funcionário</a>
      <a class="brand" href="../visao/form_emprestimos.php">Cadastrar Empréstimos</a>
      
	  </div>
   </div>
</div>

<fieldset>
	<center><h1>Cadastrar Emprestimos</h1></center>
<center><form name="signup" method="post" action="cadastrar_emprestimos.php">
	<div class="control-group">
<label class="control-label"> Isbn : </label><input type="text" placeholder="Type something…" name="isbn" />
<div class="controls">

<br />

<div class="control-group">
<label class="control-label"> Nome Do Aluno: </label><input type="text" placeholder="Type something…" name="nome_aluno" /><br />
<div class="controls">

<div class="control-group">

<br />

<label class="control-label"> Numero Emprestimo: </label><input type="text" placeholder="Type something…" name="num_emprestimo" />

<br />

<div class="controls">

<br />

<div class="control-group">
<label class="control-label"> Data e Hora Emprestimo: </label><input type="datetime-local" placeholder="Type something…" name="dt_hora_emprestimo" /><br />
<div class="controls">

<br />

<div class="control-group">
<label class="control-label"> Data e Hora Devolucao: </label><input type="datetime-local" placeholder="Type something…" name="dt_hora_devolucao" />
<div class="controls">

<br />

<div class="control-group">
<label class="control-label"> Prioridade de Devolucao: </label><input type="text" placeholder="Type something…" name="prioridade_itens_emprestimo" />
<div class="controls">

<br />

<input type="submit" value="Cadastrar">
<input type="reset" value="Novo Cadastro">
<a href="../home.php" class="btn btn-small btn-primary">Voltar</a>

   </fieldset>
  </form>
 </center>
</body>
</html>