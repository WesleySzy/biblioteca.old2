<?php
class Livro {
    private $id, $isbn, $titulo, $autor, $categoria;

    function Livro() {

    }

    function getId() {
        return $this -> id;
    }

    function setId($id) {
        $this -> id = $id;
    }

    function getIsbn() {
        return $this -> isbn;
    }

    function setIsbn($isbn) {
        $this -> isbn = $isbn;
    }

    function getTitulo() {
        return $this -> titulo;
    }

    function setTitulo($titulo) {
        $this -> titulo = $titulo;
    }

    function getAutor() {
        return $this -> autor;
    }

    function setAutor($autor) {
        $this -> autor = $autor;
    }

    function getCategoria() {
        return $this -> categoria;
    }

    function setCategoria($categoria) {
        $this -> categoria = $categoria;
    }

    function listar() {
        require_once ('modelo/db_conecta.php');
        $stmt = $conexao -> prepare("SELECT * FROM livro");
        $stmt -> execute();
        $livros = array();
        while ($item = $stmt -> fetch()) {
            $livro = new Livro();
            $livro -> setId($item['id_livro']);
            $livro -> setIsbn($item['isbn']);
            $livro -> setTitulo($item['titulo']);
            $livro -> setAutor($item['autor']);
            $livro -> setCategoria($item['categoria']);
            array_push($livros, $livro);
        }
        return $livros;

    }

    function insere() {
        require_once ('modelo/db_conecta.php');
        try {
            $sql = "INSERT INTO livro (isbn,titulo,autor,categoria)
                VALUES (:isbn,:titulo,:autor, :categoria) ";
            $stmt = $conexao -> prepare($sql);
            $stmt -> bindParam(':isbn', $this -> getIsbn());
            $stmt -> bindParam(':titulo', $this -> getTitulo());
            $stmt -> bindParam(':autor', $this -> getAutor());
            $stmt -> bindParam(':categoria', $this -> getCategoria());
            $stmt -> execute();

        } catch (Exception $error) {
            throw $error;
        }
    }

    function deleta() {
        require_once ('modelo/db_conecta.php');
        try {
            $sql = "DELETE FROM livro WHERE id_livro=:id_livro";
            $stmt = $conexao -> prepare($sql);
            $stmt -> bindParam(':id_livro', $this -> getId());
            $stmt -> execute();

        } catch (Exception $error) {
            throw $error;
        }
    }

    function altera($id_livro) {
        require_once ('modelo/db_conecta.php');
        try {
            $sql = "UPDATE livro SET isbn=:isbn,
                titulo=:titulo, autor=:autor, categoria=:categoria
                WHERE id_livro=$id_livro";
            $stmt = $conexao -> prepare($sql);
            $stmt -> bindParam(':isbn', $this -> getIsbn());
            $stmt -> bindParam(':titulo', $this -> getTitulo());
            $stmt -> bindParam(':autor', $this -> getAutor());
            $stmt -> bindParam(':categoria', $this -> getCategoria());
            $stmt -> execute();
        } catch (Exception $error) {
            throw $error;
        }
    }

    function busca_livro($id_livro) {
        require_once ('modelo/db_conecta.php');
        $stmt = $conexao -> prepare("SELECT * FROM livro where id_livro=:id_livro ");
        $stmt -> bindParam(':id_livro', $id_livro);
        $stmt -> execute();
        $resultado = $stmt -> fetch();
        $this -> setId($resultado['id_livro']);
        $this -> setIsbn($resultado['isbn']);
        $this -> setTitulo($resultado['titulo']);
        $this -> setAutor($resultado['autor']);
        $this -> setCategoria($resultado['categoria']);
    }

}
?>