<?php

require_once('db.class.php');

$usuario = $_POST['usuario'];

$email = $_POST['email'];

$senha = md5($_POST['senha']);

$objDb = new db();
$link = $objDb->conecta_mysql();

$sql = " insert into usuarios (usuario, email, senha) values ('$usuario', '$email', '$senha')";

//execução da query

if(mysqli_query($link, $sql))
{
    echo 'Usuário registrado com sucesso!';

} else {
    echo 'Erro ao registrar o usuario';
}


//conexão, query

?>