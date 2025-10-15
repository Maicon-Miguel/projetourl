<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id           = filter_input(INPUT_POST, "id", FILTER_SANITIZE_NUMBER_INT);
    $dominio      = filter_input(INPUT_POST, "dominio", FILTER_SANITIZE_SPECIAL_CHARS);
    $descricao    = filter_input(INPUT_POST, "descricao", FILTER_SANITIZE_SPECIAL_CHARS);
    $fotoAnterior = filter_input(INPUT_POST, "foto-anterior", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $categoria    = filter_input(INPUT_POST, "categoria", FILTER_SANITIZE_SPECIAL_CHARS);

    require_once("./conexao/conexao.php");

   
    if (!empty($_FILES["foto"]["name"])) {
       
        $foto = uniqid(rand(), false) . "-" . basename($_FILES["foto"]["name"]);
        $pasta = "./upload/";
        $flag = true;  
    } else {
        
        $foto = $fotoAnterior;
        $flag = false; 
    }

    try {
        
        if ($flag) 
        {
            $sql = "UPDATE tabela SET 
            urlURL = :dominio,
            descricaoURL = :descricao,
            categoriaURL = :categoria,
            capaURL = :foto
            WHERE idURL = :id";
        } else 
        {
            $sql = "UPDATE tabela SET 
            urlURL = :dominio,
            descricaoURL = :descricao,
            categoriaURL = :categoria
            WHERE idURL = :id";
        }

        
        $comandoSQL = $conexao->prepare($sql);

        
        $comandoSQL->bindParam(':dominio', $dominio);
        $comandoSQL->bindParam(':descricao', $descricao);
        $comandoSQL->bindParam(':categoria', $categoria);
        $comandoSQL->bindParam(':id', $id, PDO::PARAM_INT);

        
        if ($flag) 
        {
            $comandoSQL->bindParam(':foto', $foto);
        }

        
        $comandoSQL->execute();

        
        if ($comandoSQL->rowCount() > 0)
         {
            
            if ($flag)
             {
                
                unlink($pasta . $fotoAnterior);
                
                move_uploaded_file($_FILES["foto"]["tmp_name"], $pasta . $foto);
            }
            header("location:./visualizar.php");
            exit();
        }
        else
        {
            //echo "Nenhuma alteração";
            header("location:./visualizar.php");
        }
    } 
    catch (PDOException $erro) 
    {
        echo "Erro ao atualizar os dados: " . $erro->getMessage();
    }
} 
else 
{
    echo "Erro no envio das informações!";
}
