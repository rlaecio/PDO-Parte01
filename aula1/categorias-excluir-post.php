<?php 
    // require_once 'classes/Categoria.php' 
    require_once 'global.php';
?>
<?php
    try {
        $id = $_GET['id'];
        $categoria = new Categoria($id);
        $categoria->excluir();
    } catch (Exception $e) {
        Erro::trataErro($e);
    }

    header('Location: categorias.php');