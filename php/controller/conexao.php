<?php
$host = 'localhost';
$user = 'root';
$password = '';
$database = 'moeda_estudantil';

try {
    $conexao = new PDO("mysql:dbname=" . $database . ";host=" . $host, $user, $password);
} catch (PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();
} catch (Exception $e) {
    echo 'GENERIC ERROR: ' . $e->getMessage();
}






//$conexao = mysqli_connect($host, $user, $password, $database);

//if (mysqli_connect_error()) :
//    echo "Falha na conexão: " . mysqli_connect_error();
//endif;
