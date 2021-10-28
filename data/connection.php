<?php
// header('Access-Control-Allow-Origin: *');
// header('Access-Control-Allow-Credentials: true');
// header('Access-Control-Allow-Methods: POST, GET, OPTIONS');
// header('Access-Control-Allow-Headers: Content-Type, Authorization, X-Requested-With');
// header('Content-Type: application/json; charset=utf-8');

$banco = 'allgive';
$host = 'localhost';
$usuario = 'root';
$senha = '';

$conexao = mysqli_connect($host, $usuario, $senha, $banco) or die("Erro ao conectar");
