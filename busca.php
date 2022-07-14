<?php
require_once 'conexao.php';

if(!isset($_GET['search'])){
    header('location: profile.php');
    exit;
}

$src = "%".trim($_GET['search'])."%";

$sth = $conn->prepare('SELECT * FROM `musicas` WHERE `nome` LIKE :nome  OR `autor` LIKE :nome  OR `estilo` LIKE :nome ORDER BY `nome` ASC'  );

$sth->bindParam(':nome', $src, PDO::PARAM_STR);


$sth->execute();

$result = $sth->fetchAll(PDO::FETCH_ASSOC);



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://kit.fontawesome.com/da688ad7ee.js" crossorigin="anonymous"></script>

    <style>
        <?php
            include 'css/busca.css';
        ?>
    </style>
</head>

<body>
<div class="circle"></div>
<div class="box-1">
  <form action="busca.php">
        <input type="text" placeholder="O que você quer aprender?" name="search">
        <button><img src="https://icones.pro/wp-content/uploads/2021/06/icone-loupe-noir.png" alt="" width="30"></button>
      </form>

  </div>
<div class="results">
<h1>Resultados</h1>
<div class="cards">

<?php
if (count($result)){
    foreach($result as $results){

?>

 
    <div class="card">


      <div class="card-image">
        <img src="imgs/<?php echo $results['imagem'] ?>" alt="">
      </div>

      <div class="card-text">

        <h3><?php echo $results['nome']?></h3>

        <br>
        <h4><?php echo $results['autor']?></h4>

   
        <h6><?php echo $results['estilo']?></h6>

      </div>

      <div class="icons" data-image="imgs/<?php echo $results['imagem'];  ?>"data-artist="<?php echo $resuls
        ['autor'] ?>"data-song="<?php echo $results['nome'] ?>" data-file="assets/<?php echo 
        $results['nome'] ?>.mp3">
        <a href="#"><i class="fa-solid fa-circle-play fa-2x"></i></a>
      </div>
    </div>
  

    

<?php
}
}
?>
</div>

<div class="circle-2"></div>
<audio id="audioPlayer" controls="" style="position: absolute; top: 0; left: 0; z-index: 0; opacity: 0;">
</audio>

<div class="player">
        <div class="player_artist" id="player_artist">

        </div>

        <div class="player_control">
            <div class="player_control_buttons">
                <a href=""><i class="fas fa-backward"></i></a>
                <a id="pauseBtn" href="#" style="display: none;"> <i class="far fa-pause-circle"></i></a>
                <a id="playBtn" href="#"><i class="far fa-play-circle"></i></a>
                <a href=""><i class="fas fa-forward"></i></a>
            </div>

            <div class="player_control_progress">
                <div class="player_control_progress_2">

                </div>
            </div>
        </div>
    </div>
  <script src="js/tocarMusica.js"></script>





</body>
</html>