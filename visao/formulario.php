<div class="form-group">
    <input type="hidden" name="controlador" value="livro" />
    <input type="hidden" name="id"  value="<?= $livro -> getId()?>"  />
    <div class="control-group">
        <label for="isbn" class="control-label" ><strong>ISBN:</strong></label>
        <div class="controls">
            <input id="isbn" type="text" name="isbn" value="<?=  $livro -> getIsbn()?>"/>
        </div>
    </div>
    <div class="control-group">
        <label for="titulo" class="control-label"><strong>Titulo:</strong></label>
        <div class="controls">
            <input id="titulo" type="text" name="titulo" value="<?= $livro -> getTitulo() ?>"  />
        </div>
    </div>
    <div class="control-group">
        <label for="autor" class="control-label"><strong>Autor:</strong></label>
        <div class="controls">
            <input id="autor" type="text" name="autor" value="<?=$livro -> getAutor()?>"  />
        </div>
    </div>
    <div class="control-group">
        <label for="categoria" class="control-label"><strong>Categoria:</strong></label>
        <div class="controls">
            <input id="categoria" type="text" name="categoria" value="<?= $livro -> getCategoria() ?>"  />
        </div>
    </div>
    <div class="control-group">
        <div class="controls">
            <input type="submit" class="btn btn-primary" value="Gravar" />
            <a href="home.php?controlador=livro&acao=lista" class="btn btn-default">Voltar</a>
        </div>
    </div>
</div>