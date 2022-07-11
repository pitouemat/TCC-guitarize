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
    <title>Tela de Login - Guitarize</title>

    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="Tela-Login">
        <h1>Login</h1>
        <br><br>
        <form method = "POST">
            <h4>Seja Bem-Vindo ao Guitarize</h4>
            <br><br>
            <input type="email" name="email" placeholder="Email" maxlength="40">
            <br><br>
            <input type="Password" name="senha" placeholder="Senha" maxlength="32">
            <br><br>
            <button input type="submit" value="ACESSAR">acessar</button>
        </form>
    </div>

    <?php
if(isset($_POST['email']))
{
    $email = addslashes($_POST['email']);
    $senha = addslashes($_POST['senha']);

    $u->conectar("projeto_login", "localhost", "root", "");
    if($msgErro == "")
    {
        
    
    if(!empty($email) && !empty($senha))
    {
        if($u->logar($email, $senha))
        {
            header("location: profile.php");
        }
        else
        {
            echo "Usuário/Senha Incorretos!";
        }
        }
    }
    else
    {
        echo "Erro: ".$u->msgErro;
    }
    
    
    
}
else
    {
        echo 'Preencha todos os campos!';
    }


?>
</body>

</html>