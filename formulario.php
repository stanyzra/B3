<?php
// conecta no banco

// <tbody>
// <tr>
//     <!-- Criando colunas de título -->
//       <th>Nome</th>
//     <th>Email</th>
//     <th>Fone</th>
// </tr>
//     <tr>
//         <!-- Colunas de conteúdo -->
//         <td>Rafael Zottesso</td>
//         <td>rafael.zottesso@ifpr.edu.br</td>
//         <td>(44) 99999-9999</td>
//     </tr>
//
//     <tr>
//         <!-- Colunas de conteúdo -->
//         <td>Fulano de Tal</td>
//         <td>fulano@ifpr.edu.br</td>
//         <td>(44) 99999-8888</td>
//     </tr>
//
//     <tr>
//         <!-- Colunas de conteúdo -->
//         <td>Beltrano de tal</td>
//         <td>beltrano@ifpr.edu.br</td>
//         <td>(44) 99999-5555</td>
//     </tr>
//
//     <tr>
//         <!-- Colunas de conteúdo -->
//         <td>Ciclano de Tal</td>
//         <td>ciclano@ifpr.edu.br</td>
//         <td>(44) 99999-1234</td>
//     </tr>
// </tbody>

$conexao = new mysqli("localhost", "root", "mysql", "agenda"); //conectando com o bd

if($conexao === false){

    die("ERROR: não foi possível conectar o bando de dados:  " . $conexao->connect_error);

}

// faz um select na categoria

$sqlCat = "SELECT id_categoria, tipo FROM categoria";
$sqlEvento = "SELECT id_evento, nome, dataEvento FROM evento";
// armazena em uma lista

$idCategoria = $conexao->query($sqlCat);
$idEvento = $conexao->query($sqlEvento);

 ?>

<style>
*{
  padding: 0;
  margin: 0;
}

#textoCentral{
  text-align: center;
}

</style>
<body>

  <div class="container">
    <form id="formCadastroPessoais" action="" method="post">
<div id="textoCentral">

      <h3 style="">Cadastro</h3>
      <h4>Nos informe seus dados</h4>

</div>
<div id="dadosEmpresa">
            <select name="cidade" class="cidade" v-model="selection.member">
              <option value="">Selecione uma cidade</option>
              <option value="PVI">Paranavaí</option>
  						<option value="GRC">Guairaçá</option>
              <option value="MGA">Maringá</option>
  						<option value="CTB">Curitiba</option>
              <option value="LND">Londrina</option>
  						<option value="CSC">Cascavel</option>
              <option value="CL">Campo Largo</option>
  						<option value="UV">União da Vitória</option>
            </select>
<br>

      <label for=""></label><br>
        <input name="email" class="w3-input w3-border limpar" placeholder="Email da empresa" type="email" tabindex="1" required autofocus>

      <label for=""></label><br>
        <input name="nomeEmpresa" class="w3-input w3-border limpar" placeholder="Nome da empresa" type="text" tabindex="2" required>

      <label for=""></label><br>
        <input name="cep" class="w3-input w3-border limpar" placeholder="CEP" type="text" tabindex="3" required>

      <label for=""></label><br>
        <input name="apresentacao" class="w3-input w3-border limpar" placeholder="Nome da apresentação" type="text" tabindex="4" required>
<br>

        <select name="categoria" class="categoria" v-model="selection.member">

          <?php
          // for pra listar as opcoes/categorias
          if ($idCategoria->num_rows > 0) {

            echo '<option value="">Selecione uma categoria</option>';

              while($cat = $idCategoria->fetch_assoc()) {
                  echo "<option value=\"{$cat['id_categoria']}\">{$cat['tipo']}</option>";

              }
          } else {
              echo '<option value="">Nenhuma categoria cadastrada</option>';
          }
          $conexao->close();
           ?>

        </select>

      <label for=""></label><br>

</div>

<div id="dadosEmpresario">

      <select name="estado" class="estado" v-model="selection.member">
        <option value="">Selecione um estado</option>
        <option value="PR">PR</option>
        <option value="SP">SP</option>
        <option value="MG">MG</option>
      </select>
<br>
  <label for=""></label><br>
 <input name="emailEmpresario" class="w3-input w3-border limpar" placeholder="Email do empresário" type="email" tabindex="6" required autofocus>

<label for=""></label><br>
  <input name="nomeEmpresario" class="w3-input w3-border limpar" placeholder="Nome do empresário" type="text" tabindex="7" required>

  <label for=""></label><br>
    <input name="numCel" class="w3-input w3-border limpar" placeholder="Número de celular" type="text" tabindex="8" required>

<label for=""></label><br>
  <input name="cpf" class="w3-input w3-border limpar" placeholder="CPF" type="text" tabindex="9" required>
<br>
  <select name="evento" class="evento" v-model="selection.member">

    <?php
    // for pra listar as opcoes/eventos
    if ($idEvento->num_rows > 0) {

      echo '<option value="">Selecione o evento</option>';

        while($eve = $idEvento->fetch_assoc()) {
            echo "<option value=\"{$eve['id_evento']}\">{$eve['dataEvento']} - {$eve['nome']}</option>";

        }
    } else {
        echo '<option value="">Nenhum evento cadastrado</option>';
    }
    $conexao->close();
     ?>

  </select>
<label for=""></label><br>

</div>
<button id="botaoSalvar" name="submit" type="submit" class="w3-button w3-black w3-half w3-section" data-submit="salvando">Salvar</button>
<a href="#" id="botaoSalvar"></a>


</form>

<?php
include("menu_principal.php");
 ?>

<script>
$(document).ready(function() {

  $("#dadosCadastrados").hide();

    $("#formCadastroPessoais").submit(function(event){

      event.preventDefault();

      $.post("ajax/cadastrar.php", $("#formCadastroPessoais").serialize(), function(data){

        if (data == "ok") {
          alert("Cadastro realizado com sucesso!");

        // $(".limpar").each(function(){
        //   $(this).val("");
        // });
        }else{
          alert("Há algo de errado. Por favor, corriga os campos.")
        }
      }); //fim do post

      $("#formCadastroPessoais").hide();

        $("#dadosCadastrados").fadeIn(function() {

        });

});
});
</script>
