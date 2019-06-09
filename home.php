<?php
if (isset($_REQUEST['controlador'])) {
    $controlador = $_REQUEST['controlador'];
} else {
    $controlador = 'livro';
}
if (isset($_REQUEST['acao'])) {
    $acao = $_REQUEST['acao'];
} else {
    $acao = 'lista';
}
$controlador = $controlador . '_controlador';
require_once ('controlador/' . $controlador . '.php');
$obj = new $controlador;
call_user_func(array($obj, $acao));

echo '<a href="index.php?token='.md5(session_id()).'"><center><button class="btn btn-danger btn-large" type="button">Sair</button></center></a>';

session_unset();
$token = md5(session_id());
if(isset($_GET['token']) && $_GET['token'] === $token) {
   // limpe tudo que for necessário na saída.
   // Eu geralmente não destruo a seção, mas invalido os dados da mesma
   // para evitar algum "necromancer" recuperar dados. Mas simplifiquemos:
   session_destroy();
   header("location: index.php");
   exit();
} else {
   echo '<a href="index.php?token='.$token.'>Confirmar logout</a>';
}

?>

