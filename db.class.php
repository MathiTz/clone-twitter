<?php

class db {

    //host
    private $host = 'localhost';
    //usuario
    private $usuario = 'root';
    //senha
    private $senha = 'Denise280600';
    //banco de dados
    private $database = 'twitter_clone';


    public function conecta_mysql()
    {
        //criar a conexão
        $con = mysqli_connect($this->host, $this->usuario, $this->senha, $this->database);//localizacação do bd, usuario de acesso, senha, banco de dados


        //ajusta charset de comunicação entre a aplicação e o db
        mysqli_set_charset($con, 'utf8');

        //verificação de erro
        if(mysqli_connect_errno())
        {
            echo 'erro ao tentar conectar com DB MySQL: '.mysqli_connect_error();
        }

        return $con;

    }

}


?>