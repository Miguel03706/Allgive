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
    <link rel="stylesheet" href="cadastro_styles.css">
    <script src="cadastro.js"></script>
    <!-- ---------------------------------- -->
    <header>
        
    </header>

</body>

</html>

<?php
// if (isset($_POST["deslogar"])) {
//     session_destroy();
// }
?>