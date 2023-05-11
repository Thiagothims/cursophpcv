<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Desafio 10</title>
</head>

<body>
  <?php
  $anoNasc = $_GET["anoNasc"] ?? 2000;
  // $ano = $_GET["ano"] ?? date("Y"); // ou

  $anoAtual = date("Y");
  $ano = $_GET["ano"] ?? $anoAtual;

  ?>
  <h1>Desafio 10</h1>
  <main>
    <h2>Calculando idades</h2>
    <form action="<?= $_SERVER["PHP_SELF"] ?>" method="get">
      <label for="anoNasc">Ano de Nascimento</label>
      <input type="number" name="anoNasc" id="anoNasc" max="<?= $anoAtual ?>" min="1850" value="<?= $anoNasc ?>">
      <label for="ano">Ano Atual ou Escolhido</label>
      <input type="number" name="ano" id="ano" max="2100" min="1850" value="<?= $ano ?>">
      <h6>*Padrão: ano atual <?= $anoAtual ?></h6>
      <input type="submit" value="Verificar">
    </form>
    <a href="./index.html"><button>Voltar</button></a>
  </main>
  <section>
    <?php
    $idade = $ano - $anoNasc;

    if ($anoNasc > $ano) {
      echo "<h2>Verifique</h2>";
      echo "<p>O ano de nascimento não pode ser menor que o ano atual<p>";
      echo "<h3>Em $ano você ainda não era nascido!</h3>";
    } else {
      echo "<h2>Resultado</h2>";
      echo "<p>No ano de <strong>$ano</strong>, nascidos em<strong> $anoNasc</strong> tem ou terão<strong> $idade</strong> anos(s) de idade.</p>";
    }
    ?>
    
  </section>
</body>

</html>