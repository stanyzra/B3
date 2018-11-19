<style>
*{
  padding: 0;
  margin: 0;
}
#menu-centro{
  background-color: white;
  padding: 0;
}
#botaoInicio{
  margin-top: 200px;
  margin-bottom: 50px;
  margin-left: 250px ;
}
#botaoMenu{
  margin-bottom: 16px;
  margin-left: 250px ;
  margin-bottom: 200px;

}
#formCadastro{
  padding: 0;
  margin: 0;
}

</style>

<button id="botaoInicio" class="w3-button w3-black w3-half w3-section" type="submit">Comece Aqui</button>
<a href="#" id="botaoInicio"></a>

<button id="botaoMenu" class="w3-button w3-black w3-half w3-section" type="submit">Caso já tenha cadastrado algo</button>
<a href="#" id="botaoMenu"></a>


<?php
include("formulario.php");
 ?>

 <button id="botaoCadastrar" class="w3-button w3-blue w3-section" type="submit">Novo cadastro</button>
 <a href="#" id="botaoCadastrar"></a>

 <button id="botaoExcluir" class="w3-button w3-red w3-section" type="submit">Excluir cadastro</button>
 <a href="#" id="botaoExcluir"></a>

 <button id="botaoAtualizar" class="w3-button w3-black w3-section" type="submit">Atualizar lista</button>
 <a href="#" id="botaoAtualizar"></a>
<div id="tabelaDados">

</div>

<script>
$(document).ready(function() {

  $("#formCadastroPessoais").hide();
  $("#botaoCadastrar").hide();
  $("#botaoAtualizar").hide();
  $("#botaoExcluir").hide();

  $("#botaoInicio").click(function(){
    $("#botaoInicio").hide();
    $("#botaoMenu").hide();
    $("#formCadastroPessoais").fadeIn();
  });

  $("#botaoMenu").click(function(){
    $("#tabelaDados").load("http://localhost/BE3/menu_principal.php");
    $("#botaoCadastrar").fadeIn();
    $("#botaoAtualizar").fadeIn();
    $("#botaoExcluir").fadeIn();
    $("#botaoMenu").hide();
    $("#botaoInicio").hide();
    $("#dadosCadastrados").fadeIn();
  });

  $("#botaoAtualizar").click(function() {
    $("#tabelaDados").load("http://localhost/BE3/menu_principal.php");
  });

  $("#botaoCadastrar").click(function(event) {
    $("#formCadastroPessoais").fadeIn();
    $("#botaoCadastrar").hide();
    $("#botaoAtualizar").hide();
    $("#botaoExcluir").hide();

  });

});
</script>
