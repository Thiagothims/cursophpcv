<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Método COOKIES</title>
</head>
<body>
  <h1>Método COOKIES e sua funcionalidade</h1>
<h2>Uso</h2>
  <p>Guarda em uma variável no navegador do cliente por um tempo determinado pelo desenvolvedor. Assim pode ser reutilizado.</p>
  <main>
    <pre>
      <?php 
      setcookie("dia-da-semana", "SEGUNDA", time() + 3600);
      var_dump($_COOKIE)
      ?>
    </pre>
  </main>
  <a href="./index.html">Voltar para lista</a>
</body>
</html>