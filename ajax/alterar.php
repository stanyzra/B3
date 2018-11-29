<?php
// conecta no banco
$conexao = new mysqli("localhost", "root", "mysql", "agenda"); //conectando com o bd

if($conexao === false){

  die("ERROR: não foi possível conectar o bando de dados:  " . $conexao->connect_error);
}

$entidade = $_GET['entidade'];
$id = $_GET['id'];
$valor = $_GET['valor'];
$campo = $_GET['campo'];
$entidade_id = $_GET['entidade_id'];

if (isset($id)) {

  $sql = "UPDATE $entidade SET $campo = '$valor' WHERE $entidade_id = $id";
  mysqli_query($conexao, $sql);
  echo "ok";

}else {
  echo "erro";
}
$conexao->close();
?>
