<?php

class conectar{
    private $servidor = "localhost";
    private $user = "root";
    private $password = "";
    private $bd = "db_poo";

    public function conexao(){

        $conexao = mysqli_connect($this->servidor, $this->user, $this->password, $this->bd);

        if(!$conexao){
            die("Conexao Falhou!: " . mysqli_connect_error());
        }


        return $conexao;

    }
}

?>