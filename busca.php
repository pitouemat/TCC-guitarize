<?php
require_once 'conexao.php';

if(!isset($_GET['search'])){
    header('location: profile.php');
    exit;
}

$src = "%".trim($_GET['search'])."%";

$sth = $conn->prepare('SELECT * FROM `musicas` WHERE `nome` LIKE :nome ' );

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
    </div>

    

<?php
}
}
?>
</div>

<div class="circle-2"></div>





</body>
</html>