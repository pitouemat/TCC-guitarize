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
    <title>Document</title>

    <style>
        <?php
            include 'css/cifra.css';
        ?>
    </style>
</head>
<body>


    <div class="box">
    <div class="image-cover">
            <img src="imgs/<?php echo $results['imagem']?>" alt="">

            <h2><?php echo $results['nome'];  ?></h2>

            <div class="box-chords">

            </div>
        </div>

        <div class="box-cifra">
            <p style="white-space: wrap">
        "Underneath the bridge
 F#5               D5
Tarp has sprung a leak
        F#5            D5
And the animals Ive trapped
     F#5            D5
Have all become my pets
         F#5            D5
And Im living off of grass
          F#5              D5
And the drippings from my ceiling
F#5               D5
Its okay to eat fish
             F#5            D5
Cause they dont have any feelings

 F#5      A5      D5  A5
Something in the way
F#5  A5  D5  E5
Hmm
 F#5      A5      D5   A5
Something in the way, yeah
F#5  A5  D5
Hmm

 F#5      A5      D5  A5
Something in the way
F#5  A5  D5  E5
Hmm
 F#5      A5      D5   A5
Something in the way, yeah
F#5  A5  D5
Hmm

 F#5      A5      D5  A5
Something in the way
F#5  A5  D5  E5
Hmm
 F#5      A5      D5   A5
Something in the way, yeah
F#5  A5  D5
Hmm"
            </p>

        </div>
    </div>



</body>
</html>