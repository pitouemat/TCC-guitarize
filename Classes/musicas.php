<?php

class musicas
{   

    private $pdo;
    public $msgErro = "";

    public function conectar($nome, $host, $usuario, $senha)
    {
        global $pdo;
        //verificar se já existe o email cadastrado
        global $msgErro;
        try
        { 
            $pdo = new PDO("mysql:dbname=".$nome.";host=".$host, $usuario, $senha);
        } catch (PDOException $e) {
            $msgErro = $e->getMessage();
        }   
    }

}
?>