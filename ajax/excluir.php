<?php
// conecta no banco
$conexao = new mysqli("localhost", "root", "mysql", "agenda"); //conectando com o bd

if($conexao === false){

  die("ERROR: não foi possível conectar o bando de dados:  " . $conexao->connect_error);
}
include "config.php";

$id = $_POST['id'];

$sqlInsc = "SELECT id_inscricao FROM inscricao";

$idInsc = $conexao->query($conexao, $sqlInsc);

$sqlDrop = "DROP TABLE inscricao";

$conexao->close();
?>
