<?php

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
    <style>
        <?php
            include 'css/recomendacao.css';
        ?> 
    </style>

</head>
<body>
   
  <main>


    <div class="box">
        
        <div class="styles">
        <?php
        $dados = filter_input_array(INPUT_POST, FILTER_DEFAULT); // Receber todos os dados dos inputs da pagina

        if(!empty($dados['submit'])){

            if(!isset($dados['rock']))
            {
                $dados['rock'] = 2;
            }

            if(!isset($dados['jazz']))
            {
                $dados['jazz'] =2;
            }
            
            if(!isset($dados['blues']))
            {
                $dados['blues'] = 2;
            }
            
            if(!isset($dados['metal']))
            {
                $dados['metal'] =2;
            }
            
            if(!isset($dados['mpb']))
            {
                $dados['mpb'] = 2;
            }
            
            if(!isset($dados['gospel']))
            {
                $dados['gospel'] = 2;
            }
            
            if(!isset($dados['bossa']))
            {
                $dados['bossa'] = 2;
            }
             
            $dadosRock = $dados['rock'];
            $dadosJazz = $dados['jazz'];
            $dadosBlues = $dados['blues'];
            $dadosMpb = $dados['mpb'];
            $dadosMetal = $dados['metal'];
            $dadosGospel = $dados['gospel'];
            $dadosBossa = $dados['bossa'];
            $id = $_SESSION['id_usuario'];
            
            $query_add = "UPDATE usuarios SET rock= '$dadosRock', jazz = '$dadosJazz',
             blues = '$dadosBlues', mpb ='$dadosMpb', metal = '$dadosMetal', gospel = '$dadosGospel', bossa_nova = '$dadosBossa'
             WHERE id_usuario = '$id'";

           

            $sql = $conn->prepare($query_add);
            $sql->execute();

            if($sql -> rowCount()){
                echo "TESTE";
            }else{
                echo"erro";
                }
            } 
    ?>
            <form action="" name= "formRec" method="POST">

         
                <label for="jazz">
                    <img src="https://www.vagalume.com.br/14635148092037245616/default" alt="" srcset="" width="128">
                    <input type="checkbox" name="jazz" id="jazz" value="1">
                </label>

                <label for="blues">
                    <img src="https://www.vagalume.com.br/1470154942300080/default" alt="" srcset="" width="128">
                    <input type="checkbox" name="blues" id="blues" value="1">
                </label>
                <label for="gospel">
                    <img src="https://www.vagalume.com.br/14658544132100453351/default" alt="" srcset="" width="128">
                    <input type="checkbox" name="gospel" id="gospel" value="1">
                </label>
                <label for="metal">
                    <img src="https://www.vagalume.com.br/1479752883943544/default" alt="" srcset="" width="128">
                    <input type="checkbox" name="metal" id="metal" value="1">
                </label>
                <label for="rock">
                    <img src="https://www.vagalume.com.br/1464201608479108132/default" alt="" srcset="" width="128">
                    <input type="checkbox" name="rock" id="rock" value="1">
                </label>


                <label for="bossa">
                <img src="https://www.vagalume.com.br/1470154964926375/default" alt="" srcset="" width="128">
                    <input type="checkbox" name="bossa" id="bossa" value="1">

                </label>

                <label for="mpb">
                    <img src="https://www.vagalume.com.br/1470154983100588/default" alt="" srcset="" width="128">

                    <input type="checkbox" name="mpb" id="mpb" value="1">

                </label>

                <input type="submit" value="Prosseguir" name="submit">

            </form>

        </div>

        <div class="text">
            <div class="text-block">
            <h1>Para começar, nos diga quais são seus estilos musicais favoritos.</h1>
            </div>
        </div>

    </div>


  
  </main>
  <div class="circle"> </div>
  <div class="circle-2"></div>
    
</body>

</html>