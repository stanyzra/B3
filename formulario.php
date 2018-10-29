<style>
*{
  padding: 0;
  margin: 0;
}
#dadosEmpresa{

}
#textoCentral{
  text-align: center;
}
</style>
<body>

  <div class="container">
    <form id="cadastro" action="" method="post">
<div id="textoCentral">

      <h3 style="">Cadastro</h3>
      <h4>Nos informe seus dados cadastrais</h4>

</div>

        <label for="">Cidade:</label><br>
            <select class="cidade" v-model="selection.member">
              <option value="PVI">Paranavaí</option>
  						<option value="GRC">Guairaçá</option>
              <option value="MGA">Maringá</option>
  						<option value="CTB">Curitiba</option>
              <option value="LND">Londrina</option>
  						<option value="CSC">Cascavel</option>
              <option value="CL">Campo Largo</option>
  						<option value="7">União da Vitória</option>
            </select>
<br>
<div id="dadosEmpresa">
        <label for=""></label><br>
       <input class="w3-input w3-border" placeholder="Email" type="email" tabindex="1" required autofocus>

      <label for=""></label><br>
        <input class="w3-input w3-border" placeholder="Nome da empresa" type="text" tabindex="2" required>

    <label for=""></label><br>
        <input  class="w3-input w3-border" placeholder="CNPJ" type="text" tabindex="3" required>

      <label for=""></label><br>
        <input class="w3-input w3-border" placeholder="Categoria" type="text" tabindex="4" required>

      <label for=""></label><br>
        <input class="w3-input w3-border" placeholder="URL da empresa" type="text" tabindex="5" required>

      <label for=""></label><br>

</form>

<button name="submit" type="submit" class="enviar" data-submit="enviando">Enviar</button>

</div>
