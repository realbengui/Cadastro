<?php

$servidor = "Localhost";
$usuario = "root";
$senha = "";
$dbname = "cadastro";


$conexao = mysqli_connect($servidor, $usuario, $senha, $dbname);

if(!$conexao){
    die("houve um erro: ".mysql_connect_error());

}

?>