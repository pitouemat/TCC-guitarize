<?php
    $host = "localhost";
    $user = "root";
    $senha = "";
    $nome = "projeto_login";
    $port = "127.0.0.1";

    $conn = new PDO("mysql:dbname=".$nome.";host=".$host, $user, $senha);

    
?>