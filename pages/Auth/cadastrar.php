<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>


    <title>Cadastrar</title>

</head>

<body>
    <!-- BOOTSTRAPS PRO SITE FICAR RESPONSIVO-->
    <link rel="stylesheet" type="text/css" href="../../css/bootstrap.min.css">
    <script type="text/javascript" src="../../js/jquery-3.4.1.min.js"></script>
    <!-- ---------------------------------- -->
    <link rel="stylesheet" href="cadastro_styles.css">
    <script src="cadastro.js"></script>

    <div class="main">
        <div class="container-fluid header">
            <div class="row align-items-center topo">
                <aside class="col-md-6 text-center" onClick="exibir()" id="doador">Doador</aside>
                <aside class="col-md-6 text-center" onClick="ocultar()" id="ong">ONG</aside>
            </div>
        </div>

        <div class="form-donate" id="form_donate">
            <form action="" method="post">
                <p>
                    <label for="email">Email: </label>
                    <input type="text" name="emailUser" placeholder="Digite seu Email" class="form-control emailUser" required>
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

        <div class="form-ong" id="form_ong">
            <form action="" method="post">
                <p>
                    <label for="email">Email: </label>
                    <input type="text" name="emailOng" placeholder="Digite seu Email" class="form-control emailOng" required>
                </p>
                <p>
                    <label for="password">Senha: </label>
                    <input type="password" name="password" class="form-control" placeholder="Digite sua senha" required>
                </p>
                <p>
                    <label for="organizacao">Nome da organização: </label>
                    <input type="text" name="organizacao" class="form-control" placeholder="Digite o nome de sua ONG" required>

                </p>
                <p>
                    <label for="cep">CEP: </label>
                    <input type="text" name="cep" class="form-control cep" placeholder="Digite seu CEP" autocomplete="off" required>
                </p>
                <p>
                <div class="container-fluid">
                    <div class="row">
                        <aside class="col-md-4">
                            <label for="membros">Quantidade de membros: </label>
                            <input type="number" name="membros" class="form-control" placeholder="Quantidade de membros" min="5" required>
                        </aside>
                        <aside class="col-md-4">
                            <label for="estado">Estado: </label>
                            <input type="select" name="estado" class="form-control" disabled required>
                        </aside>
                        <aside class="col-md-4">
                            <label for="cidade">Cidade: </label>
                            <input type="select" name="cidade" class="form-control" disabled required>
                        </aside>

                    </div>
                </div>
                </p>
                <p>
                    <label for="cnpj">CNPJ: </label>
                    <input type="text" name="cnpj" class="form-control cnpj" placeholder="Digite seu CNPJ" required>
                </p>
                <p>
                    <label for="cpf">CPF: </label>
                    <input type="text" name="cnpj" class="form-control cpf" placeholder="Digite seu CPF" required>
                </p>
                <p class="col-md-12 text-center">
                    <input type="submit" value="Enviar" name="submit" class="btn-group-sm">
                </p>
            </form>
        </div>


    </div>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.0/jquery.mask.js"></script>
    <script>
        $(document).ready(function() {
            $(".cep").mask('00000-000');
            $(".cnpj").mask('00.000.000/0000-00');
            $(".cpf").mask('000.000.000-00');

            $("input[name='emailUser']").blur(function() {
                let reg = /^[a-z0-9.]+@[a-z0-9]+\.[a-z]+(\.[a-z]+)?$/i;
                let $email = $("input[name='emailUser']");

            if (reg.test($email.val())) {
                $(".emailUser").removeClass("is-invalid")
                $(".emailUser").addClass("is-valid")
                $("input[type='submit']").attr("disabled", false);


            } else {
                $(".emailUser").addClass("is-invalid")
                $("input[type='submit']").attr("disabled", true);
            }
            });

            $("input[name='emailOng']").blur(function() {
                let reg = /^[a-z0-9.]+@[a-z0-9]+\.[a-z]+(\.[a-z]+)?$/i;
                let $email = $("input[name='emailOng']");

            if (reg.test($email.val())) {
                $(".emailOng").removeClass("is-invalid")
                $(".emailOng").addClass("is-valid")
                $("input[type='submit']").attr("disabled", false);
            } else {
                $(".emailOng").addClass("is-invalid")
                $("input[type='submit']").attr("disabled", true);

            }
            });
            
            $("input[name='cep']").blur(function() {
                let $cep = $("input[name='cep']").val();
                let $cidade = $("input[name='cidade']");
                let $estado = $("input[name='estado']");
                $.getJSON(`https://cep.awesomeapi.com.br/json/${$cep}`, function(json) {
                    $cidade.val(json.city);
                    $estado.val(json.state);
                }).then().catch(error => {
                    alert("CEP inválido, tente outro");
                });
            });
        });
    </script>

</body>

</html>

<?php
//https://docs.awesomeapi.com.br/api-cep
if (isset($_POST["submit"])) {
    $email = $_POST["email"];
    $id = sha1(uniqid(rand(), true));
    $senha = sha1($_POST["password"]);



    // echo "<div class='col-md-6'>email: $email | senha: $senha| id: $id')</div>";
};
