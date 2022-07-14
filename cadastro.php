<!DOCTYPE html>
<?php
    require_once'Classes/usuarios.php';
    $u = new usuario;
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="Tela-Login">
        <h1>Cadastrar</h1>
        <br><br>
        <form method = "POST">
            <br><br>
            <input type="Text" name="nome" placeholder="Nome Completo" maxlength="30">
            <br><br>
            <input type="text" name="telefone" placeholder="Telefone" maxlength="30">
            <br><br>
            <input type="email" name="email" placeholder="Email" maxlength="40">
            <br><br>
            <input type="Password" name="senha" placeholder="Senha" maxlength="32">
            <br><br>
            <input type="password" name="confSenha" placeholder="Confirmar Senha" maxlength="40">
            <br><br>
            <button input type="submit" value="cadastrar">Enviar</button>
        </form>
    </div>
    <?php
//verificar se clicou no botão
    if (isset($_POST['nome']))
    {
        $nome2 = addslashes ($_POST['nome']);
        $telefone2 = addslashes ($_POST['telefone']);
        $email2 = addslashes ($_POST['email']);
        $senha2 = addslashes ($_POST['senha']);
        $confirmarSenha = addslashes ($_POST['confSenha']);
        //verificar se esta preenchido
        if(!empty($nome2) && !empty($telefone2) && !empty($email2) && !empty($senha2) && !empty($confirmarSenha))
        {
            $u->conectar("projeto_login","localhost","root","");
            if($u->msgErro == "")//Se esta tudo ok
            {
                if($senha2 == $confirmarSenha)
                {
                    if ($u->cadastrar($nome2, $telefone2, $email2, $senha2))
                    {
                        echo "Cadastrado com sucesso! Acesse para entrar!";
                        header('location: recomendacao.php');
                    } 
                    else
                    {
                        echo "email ja cadastrado!";
                    }
                }
                else
                {
                    echo "Senha e confirmar senha não correspondem!";
                }
                
            }
            else
            {
                echo "Erro: ".$u->msgErro;
            }
        }else
        {
            echo "Preencha todos os campos!";
        }
    }



?>
</body>
</html>