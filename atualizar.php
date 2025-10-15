<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar</title>
    <link rel="stylesheet" href="./css/estilo.css">

    <style>
        .mens_erro{
            display: none; 
            color: red;
        }
    </style>

</head>
<body>

    <?php require_once("./_menu.php"); ?>

    <div class="conteudo">
        <h1 class="titulo">EDITAR FAVORITO</h1>

        <?php require_once("./atualizar-view.php"); ?>

        <form action="atualizarbd.php" method="post" enctype="multipart/form-data">
            <input 
                type="hidden" 
                name="id" 
                id="id" 
                value="<?=$dados['idURL'];?>">

            <input 
                type="hidden" 
                name="foto-anterior" 
                id="foto-anterior" 
                value="<?=$dados['capaURL'];?>">

            <div class="row">
                <div class="col">
                    <label for="dominio">URL</label>
                    <input 
                        type="text" 
                        name="dominio" 
                        id="dominio"
                        value="<?=$dados["urlURL"];?>">
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <label for="descricao">DESCRIÇÃO</label>
                    <input 
                        type="text" 
                        name="descricao" 
                        id="descricao"
                        value="<?=$dados['descricaoURL'];?>">
                </div>

                <div class="col">
                    <label for="categoria">CATEGORIA</label>
                    <input 
                        type="text" 
                        name="categoria" 
                        id="categoria"
                        value="<?=$dados['categoriaURL'];?>">
                </div>
            </div>

           
            <div class="row">
                <div class="col">
                    <label for="foto">CAPA</label>
                    <input type="file" name="foto" id="foto">
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <input type="reset" value="LIMPAR">
                    <input type="submit" id="submit" value="GUARDAR">
                </div>
            </div>
        </form>
    </div>


</body>
</html>