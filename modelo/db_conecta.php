<?php
//require_once ('modelo/criptografia.php');

    try {
        //Para funcionar deve-se configurar com a senha do seu banco de dados MYSQL
        //$senha = base64_decode($senhaCodificada);
        $conexao = new PDO ('mysql:host=localhost;dbname=biblioteca',
              'root');
    } catch (PDOException $exception) {
        echo $exception -> getMessages();
        die();
    }
?>