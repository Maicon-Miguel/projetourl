<?php
    require_once("./conexao/conexao.php");

    $id = filter_input(INPUT_GET, "id", FILTER_SANITIZE_NUMBER_INT);

    try {
        // comando SQL para ser executado no banco de dados 
        $sql = "SELECT * FROM tabela WHERE idURL=".$id;
        // a variável irá receber os dados vindos do query
        $dadosSelecionados = $conexao->query($sql);
        // a variável DADOS é uma matriz com todos os dados da tabela
        $dados = $dadosSelecionados->fetch(PDO::FETCH_ASSOC);
    } catch (PDOException $erro) {
        echo("Erro ao conectar com o banco.");
        exit();
    }    