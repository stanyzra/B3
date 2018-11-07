<?php
include '../bd/conectabd.php';
// $emailEmpresa = $_POST["email"];
// $nomeEmpresa = $_POST["nomeEmpresa"];
// $cnpj = $_POST["cnpj"];
// $categoria = $_POST["categoria"];
// $url = $_POST["url"];
// $emailEmpresario = $_POST["emailEmpresario"];
// $nomeEmpresario = $_POST["nomeEmpresario"];
// $cpf = $_POST["cpf"];
// $cidade = $_POST["cidade"];
// $estado = $_POST["estado"];

$conexao = new mysqli('localhost', 'root', 'mysql', 'agenda');

if ($conexao->connect_error) {
  echo "falha ao conectar ao banco: ".mysqli_connection_error();
}else {
    $sql="";
    if ($conexao->query($sql) === TRUE) {
      # code...
      echo "ok";
    }else {
      echo "erro ao inserir: ".$conexao->error;
    }
}
$conexao->close();
 ?>
