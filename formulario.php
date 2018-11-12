<?php
// conecta no banco

$conexao = new mysqli("localhost", "root", "mysql", "agenda"); //conectando com o bd

if($conexao === false){

    die("ERROR: não foi possível conectar o bando de dados:  " . $conexao->connect_error);

}

// faz um select na categoria

$sql = "SELECT id_categoria, tipo FROM categoria";

// armazena em uma lista

$IDcategoria = $conexao->query($sql);

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
    <form id="formCadastro" action="" method="post">
<div id="textoCentral">

      <h3 style="">Cadastro</h3>
      <h4>Nos informe seus dados cadastrais</h4>

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

<br>

        <select name="categoria" class="categoria" v-model="selection.member">

          <?php
          // for pra listar as opcoes/categorias
          if ($IDcategoria->num_rows > 0) {

            echo '<option value="">Selecione uma categoria</option>';

              while($cat = $IDcategoria->fetch_assoc()) {
                  echo "<option value=\"{$cat['id']}\">{$cat['tipo']}</option>";
              }
          } else {
              echo '<option value="">Nenhuma categoria cadastrada</option>';
          }
          $conn->close();
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


<label for=""></label><br>

</div>
<button id="botaoSalvar" name="submit" type="submit" class="w3-button w3-black w3-half w3-section" data-submit="salvando">Salvar</button>
<a href="#" id="botaoSalvar"></a>


</form>

<script>
$(document).ready(function() {

  $("#formCadastro").submit(function(event){

    event.preventDefault();

    $.post("ajax/cadastrar.php", $("#formCadastro").serialize(), function(data){

      if (data == "ok") {
        alert("Cadastro realizado com sucesso!");

        // $(".limpar").each(function(){
        //   $(this).val("");
        // });
      }else{
        alert("Há algo de errado. Por favor, corriga os campos.")
      }
    }); //fim do post

});
});
</script>
