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

if($conexao === false){

    die("ERROR: não foi possível conectar o bando de dados:  " . $conexao->connect_error);

}else{

  try {


      $insertPessoa = "INSERT INTO pessoa (email, nome, numCel, cpf)
      VALUES ('$emailEmpresario', '$nomeEmpresario', '$numCel', '$cpf')";

      $insertCategoria = "INSERT INTO categoria (tipo)
      VALUES ('$categoria')";

      if ($cidade == "" || $estado == "" || $categoria == "") {

        echo "Erro: informar os dados corretamente.";

      }else {


        mysqli_query($conexao, $insertCategoria);



        $insertEmpresa = "INSERT INTO empresa (nome, CEP, cidade, estado, emailEmpresa, id_categoria)
        VALUES ('$nomeEmpresa', '$cep', '$cidade', '$estado', '$emailEmpresa', '')";

        mysqli_query($conexao, $insertEmpresa);

        //echo $insertEmpresa."<br>";

        mysqli_query($conexao, $insertPessoa);

        //echo $insertPessoa."<br>";

        //echo $insertCategoria."<br>";


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
