<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Favoritos</title>
    <link rel="stylesheet" href="./css/estilo.css">
</head>
<body>

    <?php require_once("./_menu.php"); ?>

    <div class="conteudo">
        <h1 class="titulo">LINKS FAVORITOS</h1>
        <table>
            <thead>
                <tr>
                    
                    <th width="150">CAPA</th>
                    <th width="300">URL</th>
                    <th>DESCRIÇÃO</th>
                    <th>CATEGORIA</th>
                    <th width="150">DATA</th>
                    <th width="45">ATU</th>
                    <th width="45">EXC</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    require_once("./visualizarbd.php");
                    if($totalRegistros > 0){

                        foreach($dados as $linha){
                ?>
                <tr>
                    
                    <td align="center">
                        <img 
                            src="./upload/<?=$linha['capaURL'];?>" 
                            alt=""
                            width="150">
                    </td>
                    <td><a href="<?=$linha["urlURL"];?>" target="_blank"><?=$linha["urlURL"];?></a></td>
                    <td><?=$linha["descricaoURL"];?></td>
                    <td><?=$linha["categoriaURL"];?></td>
                    <td><?=$linha["dataCadastroURL"];?></td>

                    <td align="center">
                        <a href="./atualizar.php?id=<?=$linha['idURL'];?>">
                            <img src="./img/atualizar.png" alt="Atualizar" width="21">
                        </a>
                    </td>

                    <td align="center">
                        <a href="./excluir.php?id=<?=$linha['idURL'];?>">
                            <img src="./img/excluir.png" alt="Excluir">
                        </a>
                    </td>

                </tr>
                <?php
                        }
                    }
                    else
                    {
                        echo("<tr><td colspan=8> NÃO HÁ REGISTROS </td><tr>");
                    }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>