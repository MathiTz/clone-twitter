<?php

require_once('db.class.php');

$usuario = $_POST['usuario'];

$email = $_POST['email'];

$senha = md5($_POST['senha']);

$objDb = new db();
$link = $objDb->conecta_mysql();

//verificar se o usurário já existe

$sql = "select * from usuarios where usuario = '$usuario'";
if($resultado_id = mysqli_query($link, $sql))
{
    $dados_usuario = mysqli_fetch_array($resultado_id);
    
    if(isset($dados_usuario['usuario']))
    {
        echo 'Usuário já cadastrado';
    } else
    {
        echo 'Usuário cadastrado com sucesso!';
    }

}else
{
    echo 'Erro ao tentar localizar o registro de usuário';
};

//verificar se o email já existe

$sql = "select * from usuarios where email = '$email'";
if($resultado_id = mysqli_query($link, $sql))
{
    $dados_usuario = mysqli_fetch_array($resultado_id);
    
    if(isset($dados_usuario['email']))
    {
        echo '<br>Email já cadastrado';
    } else
    {
        echo 'Email cadastrado com sucesso!';
    }

}else
{
    echo 'Erro ao tentar localizar o registro de usuário';
};

die();
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