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
  <script src="https://kit.fontawesome.com/669bcf34d7.js" crossorigin="anonymous"></script>

  <link rel="stylesheet" href="css/profile.css">
  <style>
    <?php 
      include 'css/profile.css';
    ?>
  </style>
</head>

<body>

<h1>Rock: </h1>

  <div class="circle">

  </div>
  <div class="box-1">
  <form action="busca.php">
        <input type="text" placeholder="O que você quer aprender?" name="search">
        <button><img src="https://icones.pro/wp-content/uploads/2021/06/icone-loupe-noir.png" alt="" width="30"></button>
      </form>

  </div>

  <div class="circle-2"></div>


<?php
  $id = $_SESSION['id_usuario'];
  $query = "SELECT * FROM usuarios where id_usuario =$id";
  $result = $conn->prepare($query);
  $result->execute();

  while($row = $result->fetch(PDO::FETCH_ASSOC)){
    if($row['rock'] == '1')
{

  echo('  <div class="box-2">

    
  <div class="cards">
    <div class="card">


      <div class="card-image">
        <img src="imgs/something.jpg" alt="" width="200" height="200">
      </div>

      <div class="card-text">

        <h3>Something in the way</h3>

      </div>
    </div>

    <div class="card">




      <div class="card-image">
        <img src="imgs/jude.jpg" alt="" width="200" height="200">
      </div>

      <div class="card-text">

        <h3>Something in the way</h3>

      </div>
    </div>

    <div class="card">




      <div class="card-image">
        <img src="imgs/let it be.jpg" alt="" width="200" height="200">
      </div>

      <div class="card-text">

        <h3>Something in the way</h3>

      </div>
    </div>

    <div class="card">




      <div class="card-image">
        <img src="imgs/cash.jpg" alt="" width="200" height="200">
      </div>

      <div class="card-text">

        <h3>Something in the way</h3>

      </div>
    </div>
</div>');
}
else 
{
 echo('Non-VIP');
}

  }

?>



</body>

</html>



