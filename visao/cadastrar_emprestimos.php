<?php
$host="localhost";
$user="root";
$banco="biblioteca";
$conexao=mysqli_connect("localhost", "root", "") or die ("Banco de Dados Off_line"); //mysql_error()
mysqli_select_db($conexao, $banco) or die ("Banco de Dados não conectado");
?>

<?php
$isbn=$_POST['isbn'];
$nome_aluno=$_POST['nome_aluno'];
$num_emprestimo=$_POST['num_emprestimo'];
$dt_hora_emprestimo=$_POST['dt_hora_emprestimo'];
$dt_hora_devolucao=$_POST['dt_hora_devolucao'];
$prioridade_itens_emprestimo=$_POST['prioridade_itens_emprestimo'];

$sql=mysqli_query($conexao, "INSERT INTO controle_emprestimo (isbn, nome_aluno, num_emprestimo, dt_hora_emprestimo,dt_hora_devolucao,prioridade_itens_emprestimo) VALUES
('$isbn','$nome_aluno', '$num_emprestimo','$dt_hora_emprestimo','$dt_hora_devolucao','$prioridade_itens_emprestimo')");
echo"<script>window.location='form_emprestimos.php';alert('$nome Sua mensagem foi enviada com sucesso! Estaremos retornando em breve');</script>";

?>