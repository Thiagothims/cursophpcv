<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Desafio 9</title>
</head>

<body>
  <?php
  $nota1 = $_GET["nota1"] ?? 0;
  $nota2 = $_GET["nota2"] ?? 0;
  $pesoNota1 = $_GET["pesoNota1"] ?? 1;
  $pesoNota2 = $_GET["pesoNota2"] ?? 1;

  if ($nota1 > 0 && $nota2 > 0) {
    $mediaSimples = ($nota1 + $nota2) / 2;
  } else {
    $mediaSimples = 0;
  }

  $mediaPonderada = (($nota1 * $pesoNota1) + ($nota2 * $pesoNota2)) / ($pesoNota1 + $pesoNota2);

  ?>

  <h1>Desafio 9</h1>
  <main>
    <h3>Calculo de Médias Aritiméticas</h3>
    <form action="<?= $_SERVER["PHP_SELF"] ?>" method="get">
      <label for="nota1">1ª Nota</label>
      <input type="number" name="nota1" id="nota1" step="0.1" max="10" min="0" value="<?= $nota1 ?>" required>
      <label for="pesoNota1">Peso da 1ª Nota</label>
      <input type="number" name="pesoNota1" id="pesoNota1" step="0.1" max="10" min="0" value="<?= $pesoNota1 ?>" required>
      <label for="nota2">2ª Nota</label>
      <input type="number" name="nota2" id="nota2" step="0.1" max="10" min="0" value="<?= $nota2 ?>" required>
      <label for="pesoNota2">Peso da 2ª Nota</label>
      <input type="number" name="pesoNota2" id="pesoNota2" step="0.1" max="10" min="0" value="<?= $pesoNota2 ?>" required>
      <input type="submit" value="Calcular">
    </form>
    <a href="./index.html"><button>Voltar</button></a>
  </main>

  <section>
    <h3>Resultado das médias</h3>
    <ul>
      <li>
        <h5>Simples: </h5><?= number_format($mediaSimples, 1, ",", ".") ?>
      </li>
      <li>
        <h5>Ponderada: </h5><?= number_format($mediaPonderada, 1, ",", ".")  ?>
      </li>
    </ul>
  </section>

</body>

</html>