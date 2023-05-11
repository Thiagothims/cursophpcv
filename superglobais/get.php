<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Método GET</title>
</head>
<body>
  <h1>$_GET</h1>
  <h2>Uso</h2>
  <p>Método usado para "pegar" dados de um form ou input.<br>
    Apresenta os dados na 'Query String', ou seja, na barra de url, onde após '?' pode ser montado uma espécie de objeto chave valor.
  </p>
  <h2>Exemplo prático</h2>
  <main>
    <pre>
      <?php 
      echo "\$_GET<br>ver_dump(\$_GET)<br><br>";
      var_dump($_GET);
      echo "se adicionar valores pela url no modelo: <br>... ?nome=Thiago&idade=30 <br><br>";
      echo "<p>Dados vindos pela <strong>query string</strong> <br> Apresentando um array com duas pesições de chave e valor</p>"
      ?>
    </pre>
  </main>
  <a href="./index.html">Voltar para lista</a>
</body>
</html>