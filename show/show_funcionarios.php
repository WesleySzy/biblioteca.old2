<?php
$host="localhost";
$user="root";
$banco="biblioteca";
$pass="";
$conexao=mysqli_connect("localhost", "root", "") or die ("Banco de Dados Off_line"); //mysql_error()
mysqli_select_db($conexao, $banco) or die ("Banco de Dados não conectado");
?>
<?php
$consulta =mysqli_query($conexao, "SELECT * FROM funcionarios");
?>
<!DOCTYPE html>
<html>
<head>
    
    <link rel="stylesheet" href="css/bootstrap.css" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/normalize.css" />
    <script src="js/jquery-1.10.2.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <meta charset="UTF-8">
  
  <title>Relatorio De Funcionarios</title>
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
      
 
 
 
        
                <ul class="nav navbar-nav">
                    <li class="dropdown"><a href="" class="dropdown-toggle"
                        data-toggle="dropdown" role="button" aria-haspopup="true"
                        aria-expanded="false">Relatorios<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="show_livro.php">Relatório De Livros</a></li>
                            <li><a href="show_alunos.php">Relatório De Alunos</a></li>
                            <li><a href="show_funcionarios.php">Relatório De Funcionários</a></li>
                    
                        </ul> 
					</li>
                </ul>
			
		</div>
   </div>
</div>
<table class="table table-bordered">
    <tr>
      <td>Nome Funcionario</td>
      <td>Endereço Do Funcionario</td>
      <td>Telefone do Funcionario</td>
     
    </tr>
    <?php while($dado = $consulta->fetch_array()) { ?>
    <tr>
      <td><?php echo $dado['nome_funcionario']; ?></td>
      <td><?php echo $dado['endereco_funcionario']; ?></td>
      <td><?php echo $dado['telefone_funcionario']; ?></td>
     
  
      </td>
    </tr>
    <?php } ?>
  </table>
  <a href="../home.php" class="btn btn-large btn-block" type="button">Voltar</a>
</body>
</html>