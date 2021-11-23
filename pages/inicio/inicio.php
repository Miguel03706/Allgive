<?php
session_start();
require_once "../../data/connection.php";

if (isset($_SESSION["id_usuario"])) {
    $id = $_SESSION["id_usuario"];
} else {
    header("location: http://localhost/Giveall/");
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Allgive</title>
</head>

<body>

    <!-- BOOTSTRAPS PRO SITE FICAR RESPONSIVO-->
    <link rel="stylesheet" type="text/css" href="../../css/bootstrap.min.css">
    <!-- ---------------------------------- -->
    <link rel="stylesheet" href="inicio_styles.css">
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


    <!-- BARRA DE PESQUISA -->



    <!-- CARROSSEIS -->

    <div>

    <!-- <?php
        $query = "SELECT * FROM "
    ?> -->

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


</body>

</html>

<?php
// if (isset($_POST["deslogar"])) {
//     session_destroy();
// }
?>