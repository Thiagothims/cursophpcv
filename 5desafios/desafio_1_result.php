<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Exercício 1</title>
</head>

<body>
  <header>
    <h1>Exercício 1</h1>
    <p>Peça um número ao usuário e informe o sucessor e o antecessor</p>
  </header>

  <section>
    <div>
      <?php
      $num = $_GET["num"] ?? 0;

      $antec = $num - 1;
      $suces = $num + 1;

      echo "Número gerado: <strong> $num </strong>";
      echo "<p>O antecessor: <strong> $antec </strong></p>";
      echo "<p>O sucessor: <strong> $suces </strong></p>";
      ?>
    </div>


  </section>
  <div>
  <a href="./index.html"><button>Lista de Exercícios</button></a>
  <a href="./desafio_2.html"><button>Próximo</button></a>
  </div>
  <footer>
    <p>Analise o resultado desde exercício</p>
  </footer>
</body>

</html>