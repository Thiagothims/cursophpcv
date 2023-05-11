<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Operadores</title>
</head>
<body>
  <h1>Operadores - Praticando</h1>

  <h3>Qual o resultado?</h3>
  <p>"2" + "2" =</p>

  <?php 
  $result = "2" + "2";
  echo $result;
  echo "<p>Resultado de tipo para a soma \"2\" + \"2\" = 4</p>";
  var_dump($result);
  echo "<p>Faz a mudança de string para integer. <br>PHP faz a conversão sem ser solicitado ao contrario de outras linguagens de programação.</p>"
  ?>
  <br><br>
  <h4>Concatenação = .</h4>
  <h4>Soma = +</h4>
</body>
</html>