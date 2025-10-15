<?php

/*
    echo("<pre>");
        print_r($_POST);
    echo("</pre>");
    
    */
    echo("<pre>");
        print_r($_FILES);
    echo("</pre>");

    // exit();

    if($_SERVER["REQUEST_METHOD"]=="POST"){

        $dominio       = filter_input(INPUT_POST, "dominio", FILTER_SANITIZE_SPECIAL_CHARS);
        $descricao     = filter_input(INPUT_POST, "descricao", FILTER_SANITIZE_SPECIAL_CHARS);
        $foto          = filter_input(INPUT_POST, "foto", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $categoria     = filter_input(INPUT_POST, "categoria", FILTER_SANITIZE_SPECIAL_CHARS);
        

        if(!empty($_FILES["foto"]["name"])){
            $foto = uniqid(rand(), false)."-".basename($_FILES["foto"]["name"]);
        
            $pasta = "./upload/";
        }
        else{
            $foto = "sem-foto.jpg";
        }

        try {
            require_once("./conexao/conexao.php");

            $comandoSQL = $conexao->prepare(
                "INSERT INTO tabela (
                    urlURL, 
                    descricaoURL, 
                    capaURL, 
                    categoriaURL) 
                    VALUES (
                        :dominio, 
                        :descricao, 
                        :foto,  
                        :categoria)"
            );

            //$comandoSQL->bindParam(":nome", $nome, PDO::PARAM_STR);

            $comandoSQL->execute(array(
                ":dominio"     => $dominio, 
                ":descricao"   => $descricao, 
                ":foto"        => $foto,
                ":categoria"   => $categoria));        
        
            // echo("<pre>");
            //     $comandoSQL->debugDumpParams();
            // echo("</pre>");
            // exit();

            if($comandoSQL->rowCount() > 0)
            {
                move_uploaded_file($_FILES["foto"]["tmp_name"], $pasta.$foto);
                header("location:./visualizar.php");
                exit();
            }
            else{
                echo("Erro na gravação dos dados.");
            }
            
        } catch (PDOException $erro) {
            echo("Erro na gravação dos dados.");
        }
    }
    else{
        echo("Erro na gravação dos dados.");
    }
