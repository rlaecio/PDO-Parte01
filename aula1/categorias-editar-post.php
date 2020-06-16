<?php //require_once 'classes/Categoria.php' 
    require_once 'global.php';
?> 

<?php
    try {
        $id = $_POST['id'];
        $nome = $_POST['nome'];
        $categoria = new Categoria($id);
        $categoria->nome = $nome;
        $categoria->atualizar();     
    } catch (Exception $e) {
        Erro::trataErro($e);
    }


    header("Location: categorias.php");

