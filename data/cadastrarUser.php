<?php

$id = sha1(uniqid(rand(), true));
$email = $_POST["emailUser"];
$senha = sha1($_POST["password"]);

$querychecar = "SELECT * FROM usuarios WHERE email = '$email'";
$executa =  mysqli_query($conexao, $querychecar);
$achei = mysqli_num_rows($executa);

if ($achei  >= 1) {
    echo "<script> alert('email já está em uso, coloque outro e tente novamente'); </script>";
} else {
    $query = "INSERT INTO usuarios(`id`, `email`, `senha`) VALUES('$id','$email','$senha')";
    $executa = mysqli_query($conexao, $query);
    if ($executa) {
        echo "<script>alert('Dados inseridos com sucesso!')
              </script>";
    } else {
        echo "<script>alert('Falha ao inserir dados!');</script>";
    };
};
