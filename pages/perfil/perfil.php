<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <title>Perfil</title>
</head>

<body>
    <!-- BOOTSTRAPS PRO SITE FICAR RESPONSIVO-->
    <link rel="stylesheet" type="text/css" href="../../css/bootstrap.min.css">
    <!-- ---------------------------------- -->
    <link rel="stylesheet" href="perfil_styles.css">
    <link rel="stylesheet" href="../../styles/styles.css">
    <!-- ---------------------------------- -->
    <header>
        <ul>
            <li>
                <a href="/Giveall/pages/inicio/inicio.php">

                    <image src="../../public/icons/home.png"> Inicio
                </a>
            </li>
            <li>
                <a href="#">
                    <image src="../../public/icons/group.png"> Organizações
                </a>
            </li>
            <li>
                <a href="#">
                    <image src="../../public/icons/favorit.png"> Favoritos
                </a>
            </li>
            <li>
                <a href="#">
                    <image src="../../public/icons/bell.png"> Notificações
                </a>
            </li>
            <li>
                <a href="/Giveall/pages/perfil/perfil.php">
                    <image src="../../public/icons/perfil.png"> Perfil
                </a>
            </li>
        </ul>
    </header>

    <div class="container mt-4">
        <div class="text-center mt-4 mb-4">
            <h2>Perfil</h2>
        </div>
        <div class="container-fluid">
            <div class="row align-items-center">
                <aside class="col-md-4 text-centerpy-2">
                    <img src="../../public/images/img_saude.jpg" alt="img_de_usuario" class="img_user" />
                </aside>
                <aside class="col-md-8 py-2">
                    <form action="" class="form-donate">
                        <label for="name" class="text-left">Nome: </label>
                        <input type="text" class="form-control" name="name" disabled>
                        <label for="cpf" class="text-left mt-4">CPF: </label>
                        <input type="text" class="form-control" name="cpf" disabled>
                        <label for="numero" class="text-left mt-4">Número: </label>
                        <input type="text" class="form-control" name="numero" disabled>
                        <label for="email" class="text-left mt-4">Email: </label>
                        <input type="text" class="form-control" name="email" disabled>
                        <label for="cep" class="text-left mt-4">Cep: </label>
                        <input type="text" class="form-control" name="cep" disabled>
                    </form>
                </aside>
            </div>
        </div>
    </div>

    <footer class="footer">
        <div class="container-fluid ">
            <div class="row align-items-center">
                <aside class="col-md-4 text-center py-2">Trabalho realizado na Etec de Itaquaquecetuba</aside>
                <aside class="col-md-4 text-center py-2">
                    &copy; Matheus | Miguel | Niely | Ryan
                </aside>
                <aside class="col-md-4 text-center py-2">
                    3º ETIM DS
                </aside>
            </div>
        </div>
    </footer>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.0/jquery.mask.js"></script>
    <script>
        $(document).ready(function() {
            let $id = "37a5de8611f32d48cb51d0b9d7beb7f1146621c5";
            let $nome = $("input[name='nome']");
            let $cpf = $("input[name='cpf']");
            let $numero = $("input[name='numero']");
            let $email = $("input[name='email']");
            let $cep = $("input[name='cep']");

            $.getJSON(`http://localhost/Giveall/api/getDados.php?id=${$id}`, function(json) {
                $nome.val(json.result[0].nome)
                console.log(json.result[0])
            }).then().catch(error => {
                alert("ERRO: volte a página inicial");
            });
        });
    </script>
</body>

</html>