<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Método SESSION</title>
</head>
<body>
  <h1>Método SESSION e sua funcionalidade</h1>
<h2>Uso</h2>
<main>
  <pre>
    <?php 
    session_start();
    $_SESSION["teste"] = "Funcionou";
    var_dump($_SESSION)
    ?>
  </pre>
</main>
  <a href="./index.html">Voltar para lista</a>
</body>
</html>