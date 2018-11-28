<?php
// conecta no banco
$conexao = new mysqli("localhost", "root", "mysql", "agenda"); //conectando com o bd

if($conexao === false){

  die("ERROR: não foi possível conectar o bando de dados:  " . $conexao->connect_error);
}
include "menu_principal.php";

$id = $_GET['id'];

if(isset($id)){

    $query = "DELETE FROM inscricao WHERE id=".$id;
    mysqli_query($conexao,$query);
    echo 1;

}else {
  echo 0;
}
$conexao->close();
?>
