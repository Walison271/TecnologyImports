<?php
$usuario = 'Walison';
$senha = '1234';
$database = 'signup';
$host = 'localhost';

$mysqli = new mysqli("localhost", "Walison", "1234", "signup");

if($mysqli ->error){
  die("Falha ao conectar ao banco de dados: ". $mysqli -> error);
}
?>