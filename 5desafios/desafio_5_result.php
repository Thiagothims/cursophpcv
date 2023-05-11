<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Exercício 5</title>
</head>

<body>
  <header>
    <h1>Exercício 5</h1>
    <p>Analisador de número real - dividir parte inteira e parte fracionária</p>
  </header>

  <section>
    <h3>Resultado</h3>
    <main>
      <h4>Analise do número</h4>
      <?php 
        $numberReal = $_GET["numberReal"] ?? 0;
        echo "<p>Número digitado: <strong>". number_format($numberReal, 4, ",", ".") ."</strong></p>";

        $int = (int) $numberReal;
        $float = $numberReal - $int;

        echo "<ul><li>A parte inteira é: <strong>". number_format($int, 0, ",", ".") ."</strong></li></ul>";
        echo "<ul><li>A parte fracionária é: <strong>". number_format($float, 4, ",", ".") ."</strong></li></ul>";
      ?>
    </main>
    <a href="./desafio_5.html">Voltar</a>
  </section>
  <div>
    <a href="./index.html">
      <button>Lista de Exercícios</button>
    </a>
    <a href="./desafio_4.html">
      <button>Anterior</button>
    </a>
  </div>
  <footer>
    <p>Analise o resultado desde exercício</p>
  </footer>
</body>

</html>