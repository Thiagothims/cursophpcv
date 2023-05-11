<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Exercício 3</title>
</head>

<body>
  <header>
    <h1>Exercício 3</h1>
    <p>Conversor de moedas(Reais para Dolar) v1.0</p>
  </header>

  <section>
    <h3>Resultado</h3>
    <div>
      <?php
      $real = $_GET["real"] ?? 0;
      // cotação do do dolar - busca manual no google
      $dolar = 5.03;

      $convert = $real / $dolar;
      $padrao = numfmt_create("pt-BR", NumberFormatter::CURRENCY); // lib intl(Internallization)
      
      echo "<p>Valor em Reais: " . numfmt_format_currency($padrao, $real, "BRL") . "<br>Convertido em Dolares:<strong> " . numfmt_format_currency($padrao, $convert, "USD") . "</strong></p>";


      // MODO SIMPLES
      // $real = $_GET["real"] ?? 0;
      // // cotação do do dolar - busca manual no google
      // $dolar = 5.03;

      // $convert = $real / $dolar;
      // echo "<p>Valor em Reais: R\$" . number_format($real, 2, ',', '.') . "<br>Convertido em Dolares:<strong> US$" . number_format($convert, 2, ',', '.'). "</strong></p>";
      ?>
    </div>
    <a href="./desafio_3.html">Voltar</a>
  </section>
  <div>
    <a href="./index.html"><button>Lista de Exercícios</button></a>
    <a href="./desafio_4.html"><button>Próximo</button></a>
    <a href="./desafio_2.html"><button>Anterior</button></a>
  </div>
  <footer>
    <p>Analise o resultado desde exercício</p>
  </footer>
</body>

</html>