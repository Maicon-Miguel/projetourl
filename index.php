<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Início</title>
    <link rel="stylesheet" href="./css/estilo.css">
</head>
<style>
        body{
            overflow: hidden;
        }

        .conteudo-redirect{
            width: 100vw;            
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items:center;
            flex-direction: column;            
        }
        
        h1{
            font-family: 'Segoe UI';
            font-weight: 100;
            font-size: 3rem;
            background-color: #f3f3f3;
            padding: 20px 40px;
        }
        input[type=submit]{
            background-color:black;
            color: white;
            
        }
        input[type=submit]:hover{
            background-color:gray;
            color: white;
            transform: scale(1.1);
            transition: background-color 0.5s ease-in-out, transform 0.2s;
        }

    </style>
<body>
<div class="conteudo-redirect">
        <h1>CADASTRO DE URL</h1>
        <form action="visualizar.php" method="post">

            <div class="row">
                <div class="col">
                    <input type="submit" value="VISUALIZAR">  

                    <form action="cadastrar.php" method="post">  
                    <input type="submit" value="CADASTRAR">     
                    </form>       
                </div>
            </div>
        </form>           
    </div>
    
</body>
</html>