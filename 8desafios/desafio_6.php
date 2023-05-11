<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Desafio 6</title>
</head>

<body>
  <?php
  $dividendo = $_GET["dividendo"] ?? 0;
  $divisor = $_GET["divisor"] ?? 0;

  if ($dividendo > 0 && $divisor > 0) {
    $quociente = intdiv($dividendo, $divisor); // pode ser feita a divisão real, " a / b ", mas se faz necessário uma condição para validar apenas o número inteiro do resultado.
    $resto = $dividendo % $divisor;
  } else {
    $quociente = 0;
    $resto = 0;
  }

  ?>

  <h1>Desafio 6</h1>
  <main>
    <h2>Avaliando a estrutura de uma Divisão</h2>

    <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
      <label for="dividendo">Dividendo</label>
      <input type="number" name="dividendo" id="dividendo" value=<?= "$dividendo" ?>>
      <label for="divisor">Divisor</label>
      <input type="number" name="divisor" id="divisor" value=<?= "$divisor" ?>>
      <input type="submit" value="Analisar">
    </form>
    <br>
    <a href="./index.html"><button>Voltar</button></a>
    <br><br>
    <section>
      <table class="divisao">
        <h2>Estrutura da Divisão</h2>
        <tr>
          <td><?= "$dividendo" ?></td>
          <td><?= "$divisor" ?></td>
        </tr>
        <tr>
          <td><?= number_format("$resto", 0, ',', '.') ?></td>
          <td><?= number_format("$quociente", 0, ',', '.') ?></td>
        </tr>
      </table>
    </section>

    <section>
      <h2>Análise da Divisão</h2>
      <div>
        <ul>
          <li><strong>Dividendo: </strong><?= "$dividendo" ?></li>
          <li><strong>Divisor: </strong><?= "$divisor" ?></li>
          <li><strong>Quociente: </strong><?= number_format("$quociente", 0, ',', '.') ?></li>
          <li><strong>Resto: </strong><?= number_format("$resto", 0, ',', '.') ?></li>
        </ul>
      </div>
    </section>
  </main>

</body>

</html>