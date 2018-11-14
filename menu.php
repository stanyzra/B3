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

<script>
$(document).ready(function() {

  $("#formCadastroPessoais").hide();

  $("#botaoInicio").click(function(){
    $("#botaoInicio").hide();
    $("#botaoMenu").hide();
    $("#formCadastroPessoais").fadeIn();
  });

  $("#botaoMenu").click(function(){
    $("#botaoMenu").hide();
    $("#botaoInicio").hide();
    $("#dadosCadastrados").fadeIn();
  });
});
</script>
