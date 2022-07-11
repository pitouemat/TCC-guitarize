<?php

class usuario
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
    public function cadastrar($nome, $telefone, $email, $senha)
    {
        global $pdo;
        //verificar se já existe email cadastrado
        $sql = $pdo->prepare("SELECT id_usuario FROM usuarios WHERE email = :e");
        $sql->bindValue(":e", $email);
        $sql->execute();
        if($sql->rowCount() > 0)
        {
            return false; //já está cadastrado
        }
        //caso, não cadastrar
        else
        {   
            $sql = $pdo -> prepare ("INSERT INTO usuarios (nome, telefone, email, senha) VALUES (:n, :t, :e, :s)");
            $sql->bindValue(":n", $nome);
            $sql->bindValue(":t", $telefone);
            $sql->bindValue(":e", $email);
            $sql->bindValue(":s", md5($senha));
            $sql->execute();
            return true; //tudo ok
        }
    }
    public function logar($email, $senha)
    {
        global $pdo;
        //verificar se o email e senha estão cadastrados, se sim
        $sql = $pdo -> prepare("SELECT id_usuario FROM usuarios WHERE email = :e AND senha =:s");
        $sql->bindValue(":e", $email);
        $sql->bindValue(":s", md5($senha));

        $sql->execute();
        if($sql->rowCount() > 0)
        {
            //entrar no sistema(sessão)
            $dado = $sql->fetch();
            session_start();
            $_SESSION["id_usuario"] = $dado["id_usuario"];
            return true; //cadastrado com sucesso
        }
        else 
        {
            return false;//não conseguiu logar
        }

        

        


    }
    public function recomendar($dados)
    {
        global $pdo;

        $sql = $pdo -> prepare("INSERT INTO usuarios (rock, jazz, blues, mbp, metal, gospel, bossa_nova) 
        VALUES (:r, :j, :b, :mpb, :m, :g, :b_n)");
      

        $sql->bindValue(":r", $dados['rock'], PDO::PARAM_INT);
        $sql->bindValue(":j", $dados['jazz'], PDO::PARAM_INT);
        $sql->bindValue(":b", $dados['blues'], PDO::PARAM_INT);
        $sql->bindValue(":mpb", $dados['mpb'], PDO::PARAM_INT);
        $sql->bindValue(":m", $dados['metal'], PDO::PARAM_INT);
        $sql->bindValue(":g", $dados['gospel'], PDO::PARAM_INT);
        $sql->bindValue(":b_s", $dados['bossa'], PDO::PARAM_INT);

        $sql->execute();
        return true; //tudo ok
        
        if($sql->rowCount() > 0)
        {
            echo"TESTE";
        }
        else{

        }
    }
}


?>