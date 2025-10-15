<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Excluir</title>
    <link rel="stylesheet" href="./css/estilo.css">
</head>
<body>

    <?php require_once("./_menu.php"); ?>

    <div class="conteudo">
        <h1 
            class="titulo" 
            style="color:red; ">EXCLUIR FAVORITO</h1>

        <?php require_once("./excluir-view.php"); ?>

        <form action="excluirbd.php" method="post">
            <input 
                type="hidden" 
                name="id" 
                id="id" 
                value="<?=$dados['idURL'];?>">

            <div class="row">
                <div class="col">
                    <label for="dominio">URL</label>
                    <input 
                        type="text" 
                        name="dominio" 
                        id="dominio"
                        value="<?=$dados["urlURL"];?>"
                        disabled>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <label for="descricao">DESCRIÇÃO</label>
                    <input 
                        type="text" 
                        name="descricao" 
                        id="descricao"
                        value="<?=$dados['descricaoURL'];?>"
                        disabled>
                </div>

                <div class="col">
                    <label for="categoria">CATEGORIA</label>
                    <input 
                        type="text" 
                        name="categoria" 
                        id="categoria"
                        value="<?=$dados['categoriaURL'];?>"
                        disabled>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <label for="foto">CAPA</label>
                    <input 
                        type="file"
                        name="foto" 
                        id="foto" 
                        disabled>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <input type="reset" value="LIMPAR">
                    <input 
                        type="submit" 
                        value="DELETAR"
                        style="background-color: red; border: 1px solid red;">
                </div>
            </div>
        </form>
    </div>
</body>
</html>