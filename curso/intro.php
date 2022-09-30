<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guitarize</title>
    <script src="https://cdn.rawgit.com/citronneur/onlinetuner.co/master/js/onlinetuner.min.js"></script>


    <style>
        <?php 
            include '../css/intro.css';
        ?>
    </style>
</head>
<body>
    <nav>
        <div class="log">
            <img src="../imgs/logo.png" alt="" width="100">
        </div>
        <?php



    session_start();
    if(!isset($_SESSION['id_usuario']))
    {
        ?>
         <div class="links">
            <a href="cadastro.php">Criar Conta</a>
            <a href="TelaLogin.php">Logar</a>

            <a href="">Explorar</a>
        </div>

        <?php
    }
    else{
        ?>
        <div class="links">
        <a href="">Logout</a>
        <a href="">Configurções</a>
        </div>

        <?php
    }
    
?>
    </nav>
    <div class="circle"></div>
    <div class="circle-2"></div>
    <main>
        <div class="title">
            <h1>Boas-Vindas ao Curso</h1>
        </div>


        <div class="text">
            <div class="text-p">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad magni eius odit hic dolor exercitationem, accusantium consequuntur eveniet voluptatibus unde adipisci temporibus quos culpa! Minus dicta quas ad cupiditate odit!
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Maiores, est consequatur sapiente accusantium aut enim praesentium ab ipsa aspernatur molestiae natus sint in, repudiandae reiciendis, consectetur recusandae cum voluptates voluptatibus!
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis error temporibus labore voluptatem. Unde tenetur suscipit minima amet sit consequuntur tempora numquam. Iusto ipsam vero explicabo, aspernatur provident laborum possimus!
                </p>
            </div>
        </div>

        <div class="wrapper">
            <div class="box a"><a href="aulas/aula-1.php">Aula 1</a></div>
            <div class="box b">B</div>
            <div class="box c">C</div>
            <div class="box d">D</div>
        </div>


    </main>
</body>
</html>