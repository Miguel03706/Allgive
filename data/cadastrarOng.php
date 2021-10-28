<?php

$id = sha1(uniqid(rand(), true));
$senha = sha1($_POST["password"]);
$email = $_POST["emailOng"];
$nome = $_POST["organizacao"];
$membros = $_POST["membros"];
$estado = $_POST["estado"];
$cidade = $_POST["cidade"];
$cep = str_replace("-", '', $_POST["cep"]);
$cnpj = str_replace(array("/", ".", "-"), '', $_POST["cnpj"]);
$cpf = str_replace(array("/", ".", "-"), '', $_POST["cpf"]);


$querychecar = "SELECT * FROM ong WHERE cnpj = '$cnpj'";
$executar =  mysqli_query($conexao, $querychecar);
$achei = mysqli_num_rows($executar);

if ($achei  >= 1) {
    echo "<script> alert('cnpj já está em uso, coloque outro e tente novamente'); </script>";
} else {
    $query = "INSERT INTO `ong`(`id`, `email`, `senha`, `nome`, `cep`, `membros`, `estado`, `cidade`, `cnpj`, `cpf`)
              VALUES ('$id','$email','$senha','$nome','$cep',$membros,'$estado','$cidade','$cnpj','$cpf')";
    $executa = mysqli_query($conexao, $query);
    if ($executa) {
        echo "<script>alert('Dados inseridos com sucesso');
        location.href = 'http://localhost/Giveall/pages/Auth/entrar.php';
              </script>";
    } else {
        echo "<script>alert('Falha ao inserir dados, tente novamente mais tarde');</script>";
    };
};
