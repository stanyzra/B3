<?php
include '../bd/conectabd.php';

$conexao = new mysqli("localhost", "root", "mysql", "agenda"); //conectando com o bd

//dados informados (empresa)
$nomeEmpresa = $_POST["nomeEmpresa"];
$cep = $_POST["cep"];
$cidade = $_POST["cidade"];
$estado = $_POST["estado"];
$emailEmpresa = $_POST["email"];

//dados categoria (categoria)
$categoria = $_POST["categoria"];

//dados informados (pessoa)
$emailEmpresario = $_POST["emailEmpresario"];
$nomeEmpresario = $_POST["nomeEmpresario"];
$numCel = $_POST["numCel"];
$cpf = $_POST["cpf"];

//dados informados (evento)
$evento = $_POST["evento"];

//dados informados (inscricao)
$nomeApresentacao = $_POST["apresentacao"];

if($conexao === false){

  die("ERROR: não foi possível conectar o bando de dados:  " . $conexao->connect_error);

}else{

  try {

    //inserindo dados da pessoa
    $insertPessoa = "INSERT INTO pessoa (email, nome, numCel, cpf)
    VALUES ('$emailEmpresario', '$nomeEmpresario', '$numCel', '$cpf')";

    if ($cidade == "" || $estado == "" || $categoria == "" || $evento == "") {

      echo "Erro: informar os dados corretamente.";

    }else {

      mysqli_query($conexao, $insertPessoa);

      // retornar id inserido
      $id_pessoa = mysqli_insert_id($conexao);

      //inserindo dados da empresa
      $insertEmpresa = "INSERT INTO empresa (nome, CEP, cidade, estado, emailEmpresa, id_categoria, id_pessoa)
      VALUES ('$nomeEmpresa', '$cep', '$cidade', '$estado', '$emailEmpresa', $categoria, $id_pessoa)";

      mysqli_query($conexao, $insertEmpresa);

      // retornar id inserido
      $id_empresa = mysqli_insert_id($conexao);

      $id_evento = $_POST["evento"];

      //inserindo dados da inscricao
      $insertInscricao = "INSERT INTO inscricao (id_evento, id_empresa, nomeApresentacao)
      VALUES ('$id_evento', '$id_empresa', '$nomeApresentacao')";

      mysqli_query($conexao, $insertInscricao);

      echo "ok";
    }

  } catch (Exception $e) {

    echo "Erro: ".$e->getMessage();

  }

  // echo $insert;

}

$conexao->close();

// if ($conexao->connect_error) {
//   echo "falha ao conectar ao banco: " . mysqli_connection_error();
// }else {
//     $sql="";
//     if ($conexao->query($sql) === TRUE) {
//       # code...
//       echo "ok";
//     }else {
//       echo "erro ao inserir: ".$conexao->error;
//     }
// }
// $conexao->close();
?>
