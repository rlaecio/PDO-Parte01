<?php

    //require_once 'classes/Categoria.php';
    require_once 'global.php';
    
    try {
        $categoria = new Categoria();
        $nome = $_POST['nome'];
        $categoria->nome = $nome;
        $categoria->inserir();     
    } catch (Exception $e) {
        Erro::trataErro($e);
    }

    header('Location: categorias.php');