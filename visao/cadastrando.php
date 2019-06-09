<?php
$host="localhost";
$user="root";
$banco="biblioteca";
$conexao=mysqli_connect("localhost", "root", "") or die ("Banco de Dados Off_line"); //mysql_error()
mysqli_select_db($conexao, $banco) or die ("Banco de Dados não conectado");
?>

<?php
$nomeC=$_POST['nomeC'];
$endereco=$_POST['endereco'];
$telefone=$_POST['telefone'];

$sql=mysqli_query($conexao, "INSERT INTO aluno (nomeC, endereco, telefone) VALUES
('$nomeC', '$endereco','$telefone')");
echo"<script>window.location='cadastrar_aluno.php';alert('$nome Sua mensagem foi enviada com sucesso! Estaremos retornando em breve');</script>";

?>