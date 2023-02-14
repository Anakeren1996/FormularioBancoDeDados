<?php

$dbHost = 'Localhost';
$dbUsername = 'root';
$dbPassword = ''; // AQUI VAI A SUA SENHA DO BANCO DE DADOS
$dbName = 'formulario-cliente';

$conexao = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

// if($conexao->connect_errno) {
//     echo "Erro";
// } else {
//     echo "Conexão efetuada";
// }

?>