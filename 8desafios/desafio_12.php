<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Desafio 12</title>
</head>

<body>
  <?php
    $inputSeg = $_GET["seg"] ?? 0;

    $semana = intdiv($inputSeg % 3153600, 604800);
    $dia = intdiv($inputSeg % 604800, 86400);
    $hora = intdiv($inputSeg % 86400, 3600);
    $minuto = intdiv($inputSeg % 3600, 60);
    $seg = ($inputSeg % 60);

  ?>

  <h1>Desafio 12</h1>
  <main>
    <h3>Calculadora de tempo em segundos</h3>
    <form action="<?= $_SERVER["PHP_SELF"] ?>">
      <label for="seg">Segundos</label>
      <input type="number" name="seg" id="seg" value="<?= $inputSeg ?>">
      <input type="submit" value="Verificar">
    </form>
    <a href="./index.html"><button>Voltar</button></a>
  </main>

  <section>
    <h3>Quantidade de Tempo</h3>
    <ul>
      <li><?= $semana ?> Semana(s)</li>
      <li><?= $dia ?> Dia(s)</li>
      <li><?= $hora ?> h</li>
      <li><?= $minuto ?> min</li>
      <li><?= $seg ?> s</li>
    </ul>
  </section>
</body>

</html>