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
  $anoAtual = $_GET["anoAtual"] ?? date("Y"); 
  
  // $anoAtual = date("Y");      // ano atual por função, fazer como acima, colocando a data atual como opção caso não receba o ano pelo input              

  $idade = $anoAtual - $anoNasc;

  ?>
  <h1>Desafio 10</h1>
  <main>
    <h2>Calculando idades</h2>
    <form action="<?= $_SERVER["PHP_SELF"] ?>" method="get">
      <label for="anoNasc">Ano de Nascimento</label>
      <input type="number" name="anoNasc" id="anoNasc" max="2100" min="1850" value="<?= $anoNasc ?>">
      <label for="anoAtual">Ano Atual ou Escolhido</label>
      <input type="number" name="anoAtual" id="anoAtual" max="2100" min="1850" value="<?= $anoAtual ?>">
        <h6>*Padrão: ano atual 2023</h6>
      <input type="submit" value="Verificar">
    </form>
    <a href="./index.html"><button>Voltar</button></a>
  </main>
  <section>
    <h2>Resultado</h2>
    <?= "<p>No ano de <strong>$anoAtual</strong>, nascidos em<strong> $anoNasc</strong> tem ou terão<strong> $idade</strong> de idade.</p>"?>
  </section>
</body>

</html>