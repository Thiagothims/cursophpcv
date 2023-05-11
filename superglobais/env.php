<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Método ENV</title>
</head>
<body>
  <h1>Método ENV e sua funcionalidade</h1>
<h2>Uso</h2>
<p>Exibe todas as variáveis de ambiente, com todas as rotas e ambientes adicionados ao servidor</p>
<main>
  <pre>
    <?php 
    var_dump($_ENV);
    //teste
    echo "<p>Teste para mostrar no ambiente de testes ou dev</p>";
    foreach(getenv() as $c => $v) {
      echo "<br>$c -> $v ";
    }
    ?>
  </pre>
</main>
  <a href="./index.html">Voltar para lista</a>
</body>
</html>