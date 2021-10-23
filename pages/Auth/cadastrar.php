<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar</title>
</head>

<body>
    <!-- BOOTSTRAPS PRO SITE FICAR RESPONSIVO-->
    <link rel="stylesheet" type="text/css" href="../../css/bootstrap.min.css">
    <script type="text/javascript" src="../../js/jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="bootstrap.min.js"></script>
    <!-- ---------------------------------- -->
    <link rel="stylesheet" href="cadastro_styles.css">
    <script src="cadastro.js"></script>

    <div class="main">
        <div class="container-fluid header">
            <div class="row align-items-center topo">
                <aside class="col-md-6 text-center" onClick="">Doador</aside>
                <aside class="col-md-6 text-center">ONG</aside>
            </div>
        </div>

        <div class="form-donate"> 
            <form action="" method="post">
                <p>
                    <label for="email">Email: </label>
                    <input type="text" name="email" placeholder="Digite seu Email" class="form-control" required>
                </p>
                <p>
                    <label for="password">Senha: </label>
                    <input type="password" name="password" class="form-control" placeholder="Digite sua senha" required>
                </p>
                <p class="col-md-12 text-center">
                    <input type="submit" value="Enviar" name="submit" class="btn-group-sm">
                </p>
            </form>
        </div>

    </div>

</body>

</html>

<?php
    if(isset($_POST["submit"])){
        $email = $_POST["email"];
        $id = sha1(uniqid(rand(), true));
        $senha = sha1($_POST["password"]);
        


       // echo "<div class='col-md-6'>email: $email | senha: $senha| id: $id')</div>";
    };
