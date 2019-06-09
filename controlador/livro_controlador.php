<?php
require_once ('modelo/livro.php');
class livro_controlador {

    function lista() {
        $livro = new Livro();
        $livros = $livro -> listar();
        require_once ('visao/livro_lista.php');
    }

    function deleta() {
        $livro = new Livro();
        if (isset($_GET['id'])) {
            $livro -> setId($_GET['id']);
            $livro -> deleta();
        }
        header('Location: home.php?controlador=livro&acao=lista');
    }

    function insere() {
        require_once ('visao/cadastrar.php');
    }

    function insere_processa() {
        $isbn = isset($_POST['isbn']) ? $_POST['isbn'] : null;
        $titulo = isset($_POST['titulo']) ? $_POST['titulo'] : null;
        $autor = isset($_POST['autor']) ? $_POST['autor'] : null;
        $categoria = isset($_POST['categoria']) ? $_POST['categoria'] : null;

        $livro = new Livro();
        $livro -> setIsbn($isbn);
        $livro -> setTitulo($titulo);
        $livro -> setAutor($autor);
        $livro -> setCategoria($categoria);
        $livro -> insere();
        header('Location: home.php?controlador=livro&acao=lista');

    }

    function altera() {
        $livro = new Livro();
        $livro -> busca_livro($_GET['id']);
        require_once 'visao/update_livro.php';
    }

    function altera_processa() {
        $id = isset($_REQUEST['id']) ? $_REQUEST['id'] : null;
        $isbn = isset($_POST['isbn']) ? $_POST['isbn'] : null;
        $titulo = isset($_POST['titulo']) ? $_POST['titulo'] : null;
        $autor = isset($_POST['autor']) ? $_POST['autor'] : null;
        $categoria = isset($_POST['categoria']) ? $_POST['categoria'] : null;

        $livro = new Livro();
        $livro -> setId($id);
        $livro -> setIsbn($isbn);
        $livro -> setTitulo($titulo);
        $livro -> setAutor($autor);
        $livro -> setCategoria($categoria);
        $livros = $livro -> altera($id);
        header('Location: home.php?controlador=livro&acao=lista');
    }

}
?>