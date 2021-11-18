<?php
session_start();
require_once "../../data/connection.php";
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <title>Entrar</title>
</head>

<body>

    <!-- BOOTSTRAPS PRO SITE FICAR RESPONSIVO-->
    <link rel="stylesheet" type="text/css" href="../../css/bootstrap.min.css">
    <!-- ---------------------------------- -->
    <link rel="stylesheet" href="cadastro_styles.css">
    <script src="cadastro.js"></script>
    <!-- ---------------------------------- -->
    <header>
        <a class="btn_return" href="http://localhost/Giveall/">Voltar</a>
    </header>

    <div class="form-donate" id="form_donate">
        <form action="" method="post">
            <p class="col-md-12">
                <label for="email">Email: </label>
                <input type="email" name="emailUser" placeholder="Digite seu Email" class="form-control emailUser" required>
            </p>
            <p class="col-md-12">
                <label for="password">Senha: </label>
                <input type="password" name="password" class="form-control" placeholder="Digite sua senha" required>
            </p>
            <p class="col-md-12 text-center">
                <input type="submit" value="Enviar" name="submitUser" class="btn-group-sm btnUser">
            </p>
        </form>
    </div>

    <script>
        $(document).ready(function() {
            $("input[name='emailUser']").blur(function() {
                let reg = /^[a-z0-9.]+@[a-z0-9]+\.[a-z]+(\.[a-z]+)?$/i;
                let $email = $("input[name='emailUser']");

                if (reg.test($email.val())) {
                    $(".emailUser").removeClass("is-invalid")
                    $(".emailUser").addClass("is-valid")
                    $(".btnUser").attr("disabled", false);


                } else {
                    $(".emailUser").addClass("is-invalid")
                    $(".btnUser").attr("disabled", true);
                }
            });
        });
    </script>
</body>

</html>

<?php
if (isset($_POST["submitUser"])) {
    $email = $_POST["emailUser"];
    $password = sha1($_POST["password"]);

    $query = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$password'";
    $executa = mysqli_query($conexao, $query);
    $achei = mysqli_num_rows($executa);

    if ($achei == 1) {
        $dados = mysqli_fetch_array($executa);
        $_SESSION["id_usuario"] = $dados["id"];
        header("location: http://localhost/Giveall/pages/inicio/inicio.php");
    } else {
        $queryOng = "SELECT * FROM ong WHERE email = '$email' AND senha = '$password'";
        $executaOng = mysqli_query($conexao, $queryOng);
        $acheiOng = mysqli_num_rows($executaOng);
        if ($acheiOng == 1) {
            $dados = mysqli_fetch_array($executaOng);
            $_SESSION["id_usuario"] = $dados["id"];
            header("location: http://localhost/Giveall/pages/inicio/inicio.php");
        } else {
            echo "<script>alert('Usuario não encontrado')</script>";
        }
    }
};
?>