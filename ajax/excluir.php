<?php
// conecta no banco
$conexao = new mysqli("localhost", "root", "mysql", "agenda"); //conectando com o bd

if($conexao === false){

  die("ERROR: não foi possível conectar o bando de dados:  " . $conexao->connect_error);
}
include "menu_principal.php";

$id = $_POST['id'];

if($id > 0){

  // Check record exists
  $checkRecord = mysqli_query($conexao,"SELECT * FROM inscricao WHERE id=".$id);
  $totalrows = mysqli_num_rows($checkRecord);

  if($totalrows > 0){
    // Delete record
    $query = "DELETE FROM inscricao WHERE id=".$id;
    mysqli_query($conexao,$query);
    echo 1;
    exit;
  }
}

echo 0;
exit;
$conexao->close();
?>
