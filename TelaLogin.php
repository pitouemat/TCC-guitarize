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
    <script src="https://kit.fontawesome.com/da688ad7ee.js" crossorigin="anonymous"></script>

    <style>
        <?php
            include 'css/style.css';
        ?>
    </style>
</head>
<body>

    <nav class="navbar">
        <div class="logo">
            <a href="index.php"><img src="imgs/logo.png" alt="" width="100"></a>
        </div>

        <div class="icons">
            <button class="light-mode" onclick="darkMode()"><i class=" fa-2x fa-regular fa-sun"></i></button>
        </div>

      

    </nav>
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
            <button input type="submit" value="ACESSAR">Acessar</button>
            <br><br>
            <a href="cadastro.php">Ainda não tem um cadastro?</a>
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
        ?>
            <script>
                window.alert("Preencha todos os campos");
            </script>
        <?php

    }


?>
 <script>
        function darkMode() {
        var element = document.body;
        let loginForm= document.querySelector('.Tela-Login')
        element.classList.toggle("dark");
        loginForm.classList.toggle("darkLogin")


        console.log(element)
        console.log(loginForm)
        }
    </script>
</body>

</html>