<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Desafio 11</title>
  <script>
    const perc = document.getElementById('#perc')
    const display = document.getElementById('#display')

    function onMove() {
      display.textContent = perc.value
    }
  </script>
</head>

<body>
  <?php
  $preco = $_GET["preco"] ?? 0;
  $perc = $_GET["perc"] ?? 0;

  if ($preco > 0) {
    $precoFinal = $preco + ($preco * ($perc / 100));
  } else {
    $precoFinal = 0;
  }

  ?>

  <h1>Desafio 11</h1>
  <main>
    <form action="<?= $_SERVER["PHP_SELF"] ?>" method="get">
      <label for="preco">Preço atual</label>

      <input type="number" name="preco" id="preco" value="<?= $preco ?>">

      <label for="perc">Percentual de Ajuste <span id="display"><?= $perc ?></span>%</label>

      <input type="range" name="perc" id="perc" value=<?= $perc ?> min="0" max="100" step="1" onmousemove="onMove()">

      <input type="submit" value="Calcular">
    </form>
    <a href="./index.html"><button>Voltar</button></a>
  </main>

  <section>
    <h3>Resultado do Ajuste de Preço</h3>
    <?php
    echo "<ul><li>Preço ajustado em<strong> $perc% </strong> </li><br><li>Preço Final: <strong>R$ " . number_format($precoFinal, 2, ",", ".") . "</strong></li></ul>";
    ?>
  </section>
</body>

</html>