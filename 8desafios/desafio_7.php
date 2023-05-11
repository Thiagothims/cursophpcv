<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Desafio 7</title>
</head>

<body>
  <?php 
  $salario = $_GET["salario"] ?? 0;
  $sal_min = 1302;

  $padrao = numfmt_create("pt-BR", NumberFormatter::CURRENCY);

  $qtd_sal_min = $salario / $sal_min;
  $resto_sal = $salario % $sal_min;

  ?>

  <h1>Desafio 7</h1>
  <main>
    <h2>Informe seu salário</h2>
    <form action="<?= $_SERVER["PHP_SELF"] ?>" method="get">
      <label for="salario">Digite o salário:</label>
      <input type="number" name="salario" id="salario" value="<?="$salario"?>" step="0.01">
      <p>*Salário mínimo vigente: <?= numfmt_format_currency($padrao, $sal_min, "BRL") ?></p>
      <input type="submit" value="Enviar">
    </form>
    <a href="./index.html"><button>Voltar</button></a>
  </main><br>

  <section>
    <h2>Análise</h2>
    <?php 

    if ($qtd_sal_min >= 1) {
      echo "<p>O salário de " . numfmt_format_currency($padrao, $salario, "BRL") ."<br> equivale a " . number_format((int)$qtd_sal_min, 0, ",", ".")  . " salário(s) mínimo(s), mais " . numfmt_format_currency($padrao, $resto_sal, "BRL") . ".</p>";
    } else {
      echo "<p>O salário de " . numfmt_format_currency($padrao, $salario, "BRL") . " é menor que o salário mínimo vigente. Ou seja, equivale a menos de 1 salário mínimo.</p>";
    }
    
    ?>
  </section>
</body>

</html>