<?php

use LDAP\Result;

    require_once 'conexao.php';

    session_start();
    if(!isset($_SESSION['id_usuario']))
    {
        header("location: TelaLogin.php");
        exit;
    }

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <script src="https://kit.fontawesome.com/da688ad7ee.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="css/profile.css">
  <style>
    <?php 
      include 'css/profile.css';
    ?>
  </style>
</head>

<body>


  <div class="circle">

  </div>
  <div class="box-1">
  <form action="busca.php">
        <input type="text" placeholder="O que você quer aprender?" name="search">
        <button><img src="https://icones.pro/wp-content/uploads/2021/06/icone-loupe-noir.png" alt="" width="30"></button>
      </form>

  </div>

  <div class="circle-2"></div>

<div class="title">
<h2>Rock</h2>

</div>
  <div class="box-2">
  <div class="cards">

  
<?php
  $id = $_SESSION['id_usuario'];
  $query = "SELECT * FROM usuarios where id_usuario =$id";
  $result = $conn->prepare($query);
  $result->execute();

  while($row = $result->fetch(PDO::FETCH_ASSOC)){
    if($row['rock'] == '1')
{
  $sth = $conn->prepare('SELECT * FROM `musicas` WHERE `estilo` = "rock"' );

  $sth->execute();

  $resultado = $sth->fetchAll(PDO::FETCH_ASSOC);

  if (count($resultado)){
    foreach($resultado as $resultados){

      ?>


      <div class="card" >


      <div class="card-image">
        <a href="cifra.php?musica=<?php echo $resultados['nome']?>">
           <img src="imgs/<?php echo $resultados['imagem'] ?>" alt="">
        </a>
      </div>

      <div class="card-text">

        <h3><?php echo $resultados['nome']?></h3>

        <br>
        <h4><?php echo $resultados['autor']?></h4>

   
        <h6><?php echo $resultados['estilo']?></h6>

      </div>


      <div class="icons" data-image="imgs/<?php echo $resultados['imagem'];  ?>"data-artist="<?php echo $resultados
        ['autor'] ?>"data-song="<?php echo $resultados['nome'] ?>" data-file="assets/<?php echo 
        $resultados['nome'] ?>.mp3">
        <a href="#"><i class="fa-solid fa-circle-play fa-2x"></i></a>
      </div>
    </div>

    

<?php
}
}else 
{
 echo('Non-VIP');
}

  }
}
?>
  

</div>



<div class="player">
        <div class="player_artist" id="player_artist">

        </div>

        <audio id="audioPlayer" controls="" style="width: 80%; margin-left: 10px;"  ></audio>

    </div>
  </div>
  <script src="js/tocarMusic.js"></script>
</body>

</html>



