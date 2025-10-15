<?php
    require_once("./conexao/conexao.php");

    try {
        // comando SQL para ser executado no banco de dados 
        $sql = "SELECT * FROM tabela";
        // a variável irá receber os dados vindos do query
        $dadosSelecionados = $conexao->query($sql);
        // a variável DADOS é uma matriz com todos os dados da tabela
        $dados = $dadosSelecionados->fetchAll();
        // TOTALREGISTROS é a quantidade de registros selecionados
        $totalRegistros = $dadosSelecionados->rowCount();
    } catch (PDOException $erro) {
        echo("Erro ao conectar com o banco.");
        exit();
    }