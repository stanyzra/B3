<style>
*{
  padding: 0;
  margin: 0;
}
</style>

<form id="formCadastro" class="" action="" method="post">

      <label for="">Nome:</label><br>
      <input type="text" name="nome" value="" required placeholder="Digite seu nome"><br>

      <label for="">E-mail:</label><br>
      <input type="email" name="email" value="" required><br>

      <label for="">Cidade:</label><br>
      <select name="cidade">
        <option value="">Selecione uma cidade</option>

        <option value="1">Alto Paraná</option>
        <option value="2">Guairaçá</option>
        <option value="3">Paranavaí</option>
        <option value="4">São João do Caiuá</option>
      </select>
      <br>

      <label for="">Senha:</label><br>
      <input type="password" name="senha" value=""><br>

      <br>
      <input id="btnEnviar" type="button" value="Enviar">
      <input type="reset"  value="Limpar">

    </form>
