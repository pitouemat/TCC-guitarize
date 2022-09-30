<?php

use LDAP\Result;

    require_once 'conexao.php';

    session_start();
    if(!isset($_SESSION['id_usuario']))
    {
        header("location: TelaLogin.php");
        exit;
    }

    $id = $_GET['id'];

    $query = $conn->prepare('SELECT * FROM `musicas` WHERE `id_musica` = :id');
    $query->bindParam(':id', $id);

    $query->execute();
    $result = $query->fetchAll(PDO::FETCH_ASSOC);
    if (count($result)){
        foreach($result as $results){
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guitarize - Cifras</title>
    <script src="https://unpkg.com/scrollreveal"></script>

    <style>
        <?php
            include 'css/cifra.css';

           
        ?>
    </style>
</head>
<body>

    <div class="sidebar">

    </div>

    <div class="box-1">
  <form action="busca.php">
        <input type="text" placeholder="O que você quer aprender?" name="search">
        <button><img src="https://icones.pro/wp-content/uploads/2021/06/icone-loupe-noir.png" alt="" width="30"></button>
      </form>
    <div class="box">
    <div class="image-cover">
            <img src="imgs/<?php echo $results['imagem']?>" alt="">

            <h2><?php echo $results['nome'];  ?></h2>

            <div class="box-chords">

           
            </div>
        </div>

        <div class="box-cifra">
           <pre> <?php echo $results['cifra'] ?> </pre>

           
        </div>
    </div>

<script src="js/app.js"></script>

<script>
    let boxChord = document.querySelector('.box-chords')
    let listImage = <?php  echo $results['chords']?>

    function setImage(i){
        let img = document.createElement('img')
        img.setAttribute('src', i)

        boxChord.appendChild(img)
    }
    listImage.forEach(i => setImage(i))

</script>

</body>
</html>