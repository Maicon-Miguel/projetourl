<?php
    $dns = "mysql:host=localhost;dbname=urlfatec;charset=utf8";
    $user = "root";
    $pass = "";

    try {
        $conexao = new PDO($dns, $user, $pass);
        //echo("Banco conectado!");
        // $conexao = null;
    } catch (PDOException $erro) {
        echo("Erro ao conectar com Banco Dados");
       //echo("Código erro: ".$erro->getCode());
        //echo("Mensagem erro".$erro->getMessage());
        exit();
    }
