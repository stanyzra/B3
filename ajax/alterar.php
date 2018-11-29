<?php
// conecta no banco
$conexao = new mysqli("localhost", "root", "mysql", "agenda"); //conectando com o bd

if($conexao === false){

  die("ERROR: não foi possível conectar o bando de dados:  " . $conexao->connect_error);
}

// $data = $_GET['data'];
$nomeEmpresa = $_GET["nome_empresa"];

// if (isset($data)) {
//
//   $query = "UPDATE inscricao SET ('$data') WHERE data=".$data;
//   mysqli_query($conexao, $query);
//   echo 1;
//
// }else {
//   echo 0;
// }
if (isset($nomeEmpresa)) {

  $query = "UPDATE empresa SET ('$nomeEmpresa') WHERE nome=".$nomeEmpresa;
  mysqli_query($conexao, $query);
  echo 1;

}else {
  echo 0;
}
$conexao->close();
?>
