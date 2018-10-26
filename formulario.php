
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
      <div>
          <h4>Ṕrimeiramente nos diga onde você mora:
  </h4>
          <p style="color: DAA520;"class="select">
            <select class="budget" v-model="selection.member">
              <option value="PVI">Paranavaí</option>
  						<option value="GRC">Guairaçá</option>
              <option value="MGA">Maringá</option>
  						<option value="CTB">Curitiba</option>
              <option value="LND">Londrina</option>
  						<option value="CSC">Cascavel</option>
              <option value="CL">Campo Largo</option>
  						<option value="7">União da Vitória</option>
              </div>
      <fieldset>
        <input placeholder="Email " type="text" tabindex="1" required autofocus>
      </fieldset>
      <fieldset>
        <input type="email" tabindex="2" required>
      </fieldset>
        <fieldset>
        <input  type="email" tabindex="2" required>
      </fieldset>
      <fieldset>
        <input type="url" tabindex="4" required>
      </fieldset>
      <fieldset>
        <textarea tabindex="5" required></textarea>
      </fieldset>
      <fieldset>
        <button name="submit" type="submit" class="enviar" data-submit="...enviano...">Enviar</button>
      </fieldset>
    </form>


  </>
</body>
