<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demanda</title>

    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">

    <link rel="stylesheet" href="css/demanda.css">

    
</head>

<body>
    <div class="container">

        <header id="titulo">

            <div class="desc-text">
                <h1>Insira as informações para efetuar sua Demanda!</h1>
            </div>

        </header>

        <div class="card-center">

            <div class="img-center-cad">
                <img src="../bpa/img/hands.png">
            </div>

            <form action="action" id="form1" method="post">

                <div class="titulo">
                    <h2>Preencha os Campos com os dados necessários para Concluir sua Demanda!</h2>
                </div>

                <div class="Demanda">

                    <input type="text" name="local" placeholder="Local" required>

                    <input type="text" name="urgencia" placeholder="Urgência" required>

                    <textarea name="descricao" cols="50" rows="4" form="form_demanda" placeholder="Descrição..." required></textarea>

                    <div class="button-enviar">
                        <input type="submit" value="Enviar" class="btn">
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>
</html>