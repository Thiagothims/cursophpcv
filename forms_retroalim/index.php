<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Form 2 PHP</title>
</head>

<body>
  <header>
    <h1>Calculadora PHP v1.0</h1>
  </header>

  <main>
    <?php 
      $valor1 = $_GET['valor1'] ?? 0;
      $valor2 = $_GET['valor2'] ?? 0;
    ?>

    <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
      <label for="valor1">Digite um número</label>
      <input type="number" name="valor1" id="valor1" value="<?=$valor1?>">
      <label for="valor2">Digite outro número</label>
      <input type="number" name="valor2" id="valor2" value="<?=$valor2?>">
      <input type="submit" value="Somar">
    </form>
  </main>
  <section>
    <h2>Resultado da Soma</h2>
    <?php 
    echo $valor1 + $valor2 ?? " "
    ?>
  </section>

</body>

</html>