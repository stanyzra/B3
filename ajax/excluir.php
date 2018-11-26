<?php
// conecta no banco

include("menu_principal.php");

$conexao = new mysqli("localhost", "root", "mysql", "agenda"); //conectando com o bd

if($conexao === false){

  die("ERROR: não foi possível conectar o bando de dados:  " . $conexao->connect_error);
}

$sqlInsc = "SELECT id_inscricao FROM inscricao";

$idInsc = $conexao->query($conexao, $sqlInsc);

$sqlDrop = "DROP TABLE inscricao";

$conexao->close();
?>

<script>
$(document).ready(function() {

  $(".botaoExcluir").click(function() {
    alert("a");
  });
});

</script>
