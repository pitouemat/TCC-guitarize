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
            include 'css/home.css';
        ?>
    </style>
</head>
<body>
    <nav>
        <div class="log">
            <img src="imgs/logo.png" alt="" width="100">
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
          }else{

            ?>
            <div class="links">
            <a href="profile.php">Meu Perfil</a>
            <a href="curso/intro.php">Acessar Curso</a>

            <a href="">Configurações</a>
        </div>


            <?php

          }


        ?>
        
    </nav>

    <div class="circle"></div>

    <div class="circle-2"></div>


    <div class="banner">

        <div class="imgs">
            <div class="img_guitarize">
                <img src="imgs/banner.png" alt="">
            </div>

        <div class="img_guitarize_2">
            <div class="img_column">
                <img src="imgs/banner2.png" alt="">
                <img src="imgs/banner2.png" alt="">

            </div>
        </div>
    </div>
    </div>

    <main>
        <div class="text">
            <center><h1>Aprenda Diversas Músicas. </h1></center>
            <center><h3>(as que você sempre amou)</h3></center>
        </div>

        <div class="img-main">
            <img src="imgs/cifra.png" alt="" >
        </div>
    </main>


    

    <div class="tuner">
        <div class="title">
            <h1>Afinador - Guitarize</h1>
        </div>

      <div class="canvas">

        <!-- Create a canvas where the tuner will be rendered -->
        <canvas id="guitar-tuner" height="300"></canvas>

        <!-- Create a canvas where the second tuner will be rendered -->
        <canvas id="second-guitar-tuner" height="300"></canvas>

            <div class="notes">
                <p> 1ª corda na frequência de 330 Hz. </p></br>
                <p> 2ª corda na frequência de 247 Hz. </p></br>
                <p> 3ª corda na frequência de 196 Hz. </p></br>
                <p> 4ª corda na frequência de 146 Hz. </p></br>
                <p> 5ª corda na frequência de 110 Hz. </p></br>
                <p> 6ª corda na frequência de 87 Hz. </p></br>
                <br>
                <br>
                <p>(A contagem das cordas é feita de baixo para cima)</p>
            </div>

        </div>
    </div>
    



</body>
<script>
    var Settings = {
        container: document.getElementById("guitar-tuner"),
        backgroundColor: "#232C2B", // or hex colors "#ffffff"
        notOkayColor: "#414B4D",
        okayColor: "#69934d",
        fontColor: "white",
        textAlign: "center"
    };

    var SettingsSecondTuner = {
        container: document.getElementById("guitar-tuner"),
        backgroundColor: "#232C2B", // or hex colors "#ffffff"
        notOkayColor: "#414B4D",
        okayColor: "#69934d",
        fontColor: "white",
        textAlign: "center"

    };

    function initializeTuners() {
        // Create a single or multiple instance of tuners at time
        var tuners = [
            // First tuner

            // Second Tuner
            new OnlineTuner.Controller.GuitareTuner(
                new OnlineTuner.Widget.CircleWidget(
                    SettingsSecondTuner.container,
                    SettingsSecondTuner.backgroundColor,
                    SettingsSecondTuner.notOkayColor,
                    SettingsSecondTuner.okayColor,
                    SettingsSecondTuner.fontColor
                )
            )
        ];

        // Initialize the tuner with the callbacks
        new OnlineTuner.Analyser(tuners).install(function () {
            console.log("Funfou");

        }, function (errorMessage) {
            console.error("Teste", errorMessage);
        });
    }

    // Render the guitar tuner on the canvas by running the function
    initializeTuners();
</script>
</html>