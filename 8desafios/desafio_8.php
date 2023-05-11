<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Desafio 8</title>
</head>

<body>
  <?php
  $number = $_GET["number"] ?? 0;
  $raiz2 = sqrt($number);
  $raiz3 = $number ** (1 / 3);
  ?>
  <h1>Desafio 8</h1>
  <main>
    <form action="<?= $_SERVER["PHP_SELF"] ?>" method="get">
      <h2>Principais Raizes</h2>
      <label for="number">Digite um número:</label>
      <input type="number" name="number" id="number" value="<?= $number ?>">
      <input type="submit" value="Calcular as Raízes">
    </form>
  </main>
  <a href="./index.html"><button>Voltar</button></a>
  <br>
  <section>
    <h2>Resultado</h2>
    <ul>
      <li>Raiz quadrada do número <?=$number?> = <?= number_format($raiz2, 2, ",", ".") ?></li>
      <li>Raiz cúbica do número <?=$number?> = <?= number_format($raiz3, 2, ",", ".") ?></li>
    </ul>
  </section>

</body>

</html>