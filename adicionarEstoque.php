<html>
    <head>
        <meta charset="utf-8">
        <title>Controle de Estoque</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <style>
            .container{
                width: 50%;
                height: 65%;
                margin-top: 5%;
                border-radius: 10px 10px 10px;
                border: 1px solid #1E90FF;
                box-shadow: 5px 5px 5px #9932CC;
            }
            .div{
                text-align: center;
                margin-top: 3%;
            }
            .alert alert-info{
                width: 100%;
            }
            .title{
                padding: 3%;
            }
            .link:link{
                text-decoration: none;
            }
            .forme{
                margin-top: 5%;
            }
            body{
                background: url(imagens/fundo.gif);
                background-repeat:initial;
            }
        </style>
    </head>

    <body>

        <div class="container bg-info">
        <div class="div bg-info" >
            <span class="bg-info" class="title">Controle de Estoque</span>
        </div>
        <form class="forme" action="adicionarNoEstoque.php" method="post">
        <label for="produtos"></label>
        Escolha um produto:
            <select class="form-control" name="produtos" >
                <option value="Selecione" >Selecione</option>
                <option value="Arroz(5kg)">Arroz(5kg)</option>
                <option value="Bolacha">Bolacha</option>
                <option value="Feijão(2kg)">Feijão(2kg)</option>
            </select><br><br>
            Quantidade:
        <input type="text" class="form-control" name="adicionar" placeholder="Quantidade a ser adicionada"><br><br>
        <?php
            if(isset($_GET['is_numeric']) && $_GET['is_numeric'] = 'no'){?>

                <div class="text-danger">
                    <center>O valor Digitado não é um número inteiro!</center>
                </div>
                
        <?php } ?>
        <input class="btn btn-primary btn-block" type="submit" value="Adicionar"><br>
        
        </form>
        <a class="link" href="frontEstoque.php"><button class="btn btn-default btn-block">Comprar Produto</button></a>
        </div>
    </body>
</html>