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
  <title>Guitarize - Profile</title>
  <script src="https://kit.fontawesome.com/da688ad7ee.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="css/profile.css">

  <script src="https://unpkg.com/scrollreveal"></script>

  <style>
    <?php 
      include 'css/profile.css';
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


</div>
  <div class="box-2">


  
<?php
  $id = $_SESSION['id_usuario'];
  $query = "SELECT * FROM usuarios where id_usuario =$id";
  $result = $conn->prepare($query);
  $result->execute();

  while($row = $result->fetch(PDO::FETCH_BOTH)){
    if($row['rock'] == '1' )
{

  
  $sth = $conn->prepare('SELECT * FROM `musicas` WHERE `estilo` = "rock"' );

  $sth->execute();

  $resultado = $sth->fetchAll(PDO::FETCH_ASSOC);
  ?>
<h2>Rock</h2>
  <div class="cards">

  <?php
 

  if (count($resultado)){
   
    foreach($resultado as $resultados){
    

      ?>


      <div class="card" >


      <div class="card-image">
        <a href="cifra.php?id=<?php echo $resultados['id_musica']?>">
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
  }
  ?>
  </div>

  <?php
}if($row['mpb'] == '1')
{
  $sth = $conn->prepare('SELECT * FROM `musicas` WHERE `estilo` = "mpb"' );

  $sth->execute();

  $resultado = $sth->fetchAll(PDO::FETCH_ASSOC);
  ?>
  <h2>MPB</h2>
  <div class="cards">

  <?php
  if (count($resultado)){
   
    foreach($resultado as $resultados){
    

      ?>


      <div class="card" >


      <div class="card-image">
        <a href="cifra.php?id=<?php echo $resultados['id_musica']?>">
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
  }
?>
</div>
<?php
}if($row['metal'] == '1')
{
  $sth = $conn->prepare('SELECT * FROM `musicas` WHERE `estilo` = "metal"' );

  $sth->execute();

  $resultado = $sth->fetchAll(PDO::FETCH_ASSOC);
  ?>
  <h2>MPB</h2>
  <div class="cards">

  <?php
  if (count($resultado)){
   
    foreach($resultado as $resultados){
    

      ?>


      <div class="card" >


      <div class="card-image">
        <a href="cifra.php?id=<?php echo $resultados['id_musica']?>">
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
  
?>

<?php
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

  
	<div id="modal-promocao" class="modal-container">
		<div class="modal">
			<button class="fechar">x</button>
			<h3 class="subtitulo">Conheça nosso Curso!</h3>
      <h4>Um curso de violão totalmente gratuito, onde você aprenderá o básico sobre o instrumento e 
        tocará sua primeira música hoje mesmo!
      </h4>
			<a>Acessar</a>
		</div>
	</div>

  <script src="js/app.js"></script>
</body>

</html>



