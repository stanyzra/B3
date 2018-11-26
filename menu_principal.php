<?php
// conecta no banco

$conexao = new mysqli("localhost", "root", "mysql", "agenda"); //conectando com o bd

if($conexao === false){

    die("ERROR: não foi possível conectar o bando de dados:  " . $conexao->connect_error);

  }

// faz um select na categoria

$sqlCat = "SELECT id_categoria, tipo FROM categoria";

$sqlInscricao = "SELECT id_inscricao, id_evento, id_empresa, data, nomeApresentacao
 FROM inscricao";



// armazena em uma lista

$idCategoria = $conexao->query($sqlCat);
// $idEvento = $conexao->query($sqlEvento);
$idInscricao = $conexao->query($sqlInscricao);
// $idPessoa = $conexao->query($sqlPessoa);
// $idEmpresa = $conexao->query($sqlEmpresa);
 ?>

<div class="menuPrincipal">
  <table border="1" id="dadosCadastrados">

    <?php
    // for pra listar as opcoes/categorias
    if ($idInscricao->num_rows > 0) {
      echo "<tr>
      <th>Nome da empresa</th>
      <th>Nome do empresário</th>
      <th>Nome da Apresentação</th>
      <th>Evento</th>
      <th>Horário</th>
      </tr>";
        while($inscr = $idInscricao->fetch_assoc()) {

          $sqlEmpresa = "SELECT id_empresa, nome, cep, cidade, estado, emailEmpresa, id_categoria,
          id_pessoa FROM empresa WHERE id_empresa = {$inscr['id_empresa']}";
          $idEmpresa = $conexao->query($sqlEmpresa);
          $empresa = $idEmpresa->fetch_assoc();

          $sqlPessoa = "SELECT id_pessoa, email, nome, numCel, cpf FROM pessoa WHERE id_pessoa = {$empresa['id_pessoa']}";
          $idPessoa = $conexao->query($sqlPessoa);
          $pessoa = $idPessoa->fetch_assoc();

          $sqlEvento = "SELECT id_evento, nome, dataEvento FROM evento";
          $idEvento = $conexao->query($sqlEvento);
          $evento = $idEvento->fetch_assoc();

          echo "<tr>";
          echo "<td><a href='#' id='clickAlterar'>{$empresa['nome']}</td>";
          echo "<td><a href='#' id='clickAlterar'>{$pessoa['nome']}</td>";
          echo "<td><a href='#' id='clickAlterar'>{$inscr['nomeApresentacao']}</td>";
          echo "<td><a href='#' id='clickAlterar'>{$evento['nome']}</td>";
          echo "<td><a href='#' id='clickAlterar'>{$inscr['data']}</td>";
          echo '<td><button type="button" class="w3-button w3-gray botaoExcluir" url="excluir.php?id={$id}">Excluir</button>
          </td>';
          echo "</tr>";
        }
    } else {
        echo '<tr>
        <th>nenhum dado cadastrado</th>
        </tr>';
    }
    $conexao->close();
     ?>
              <thead>
                  <!-- Criando uma linha -->

              </thead>


          </table>

</div>
