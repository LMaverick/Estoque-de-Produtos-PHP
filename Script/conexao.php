<?php 
$servername = "localhost";
$database = "trabalho_php";
$username = "root";
$password = "";

$conexao = mysqli_connect($servername, $username, $password, $database);
if ($conexao -> connect_errno) {
    echo "Falha ao conectar: (" . $conexao -> connect_errno . ")" . $conexao -> connect_errno;
}
?>