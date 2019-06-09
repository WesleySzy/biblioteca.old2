<?php
$host="localhost";
$user="root";
$banco="biblioteca";
$conexao=mysqli_connect("localhost", "root", "") or die ("Banco de Dados Off_line"); //mysql_error()
mysqli_select_db($conexao, $banco) or die ("Banco de Dados não conectado");
?>

<?php
$nome_funcionario=$_POST['nome_funcionario'];
$endereco_funcionario=$_POST['endereco_funcionario'];
$telefone_funcionario=$_POST['telefone_funcionario'];

$sql=mysqli_query($conexao, "INSERT INTO funcionarios (nome_funcionario, endereco_funcionario,telefone_funcionario) VALUES
('$nome_funcionario', '$endereco_funcionario','$telefone_funcionario')");
echo"<script>window.location='formulario_cadastro_func.php';alert('$nome Sua mensagem foi enviada com sucesso! Estaremos retornando em breve');</script>";
?>