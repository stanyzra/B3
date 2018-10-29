<?php

$conecta = mysqli_connect('localhost', 'root', '', 'futebol');

$sqlinsert = "INSERT INTO campeonato (nomeCamp, dtInicio) VALUES".
                 "('Libertadores', '2018-05-05')";

$resultado = mysqli_query($conecta, $sqlinsert);

if ($resultado) {
  echo "Campeonato inserido com sucesso!!!";

} else {
  echo "Deu problema - Verifique onde está o erro!! :((()";
}

 ?>
