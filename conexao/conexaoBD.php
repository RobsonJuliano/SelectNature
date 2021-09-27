<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "selectNature";
    $porta = 3307;
    $conexao = new mysqli($servername, $username, $password, $dbname, $porta);
    if ($conexao->connect_error) {
        die("Connection failed: " . $conexao->connect_error);
    }
?>