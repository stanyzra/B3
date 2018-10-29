
<style>
*{
  padding: 0;
  margin: 0;
}
</style>
<body>
  <div class="container">
    <form id="contact" action="" method="post">
      <h3 style="">Cadastro</h3>
      <h4>Nos informe seus dados cadastrais</h4>
      <fieldset>
      <h4>Primeiramente nos diga onde você mora:</h4>

          <p>
            <select class="budget" v-model="selection.member">
              <option value="PVI">Paranavaí</option>
  						<option value="GRC">Guairaçá</option>
              <option value="MGA">Maringá</option>
  						<option value="CTB">Curitiba</option>
              <option value="LND">Londrina</option>
  						<option value="CSC">Cascavel</option>
              <option value="CL">Campo Largo</option>
  						<option value="7">União da Vitória</option>
            </select>
            </fieldset>


        <fieldset>
        <p><input class="campos" placeholder="Email" type="text" tabindex="1" required autofocus></p>
      </fieldset>
      <fieldset>
        <input class="campos" placeholder="Nome da empresa" type="text" tabindex="2" required>
      </fieldset>
        <fieldset>
        <input  class="campos" placeholder="CNPJl" type="text" tabindex="2" required>
      </fieldset>
      <fieldset>
        <input class="campos" placeholder="Categoria" type="text" tabindex="4" required>
      </fieldset>
      <fieldset>
        <input class="campos" placeholder="URL da empresa" type="text" tabindex="4" required>
      </fieldset>
      <fieldset>
        <button name="submit" type="submit" class="enviar" data-submit="...enviano...">Enviar</button>
      </fieldset>
    </form>


  </>
</body>
