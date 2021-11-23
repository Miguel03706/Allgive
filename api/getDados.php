<?php
require_once '../data/connection.php';

$id = $_GET["id"];

$query = "SELECT * FROM usuarios WHERE id = '$id'";
$executa =  mysqli_query($conexao, $query);
$achei = mysqli_num_rows($executa);

if ($achei  >= 1) {
    while ($dados = mysqli_fetch_array($executa)) {
        $resultado[] = array(
            'nome' => $dados["nome"],
            'email' => $dados["email"],
        );
    }
    $result = json_encode(array('success'=>true,'result'=>$resultado));
} else {

    $queryOng = "SELECT * FROM ong WHERE id = '$id'";
    $executaOng =  mysqli_query($conexao, $queryOng);
    $acheiOng = mysqli_num_rows($executaOng);

    if ($acheiOng  >= 1) {
        while ($dados = mysqli_fetch_array($executaOng)) {
            $resultado[] = array(
                'nome' => $dados["nome"],
                'cpf' => $dados["cpf"],
                'numero' => $dados["numero"],
                'email' => $dados["email"],
                'cep' => $dados["cep"],
            );
        };
    $result = json_encode(array('success'=>true,'result'=>$resultado));

    } else {
        echo "<script>alert('usuario não encontrado');</script>";
    }
}

echo $result;