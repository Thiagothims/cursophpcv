<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Exercício 2</title>
</head>

<body>
  <header>
    <h1>Exercício 2</h1>
    <p>Criar gerador de número aleatório de 0 a 100</p>
  </header>

  <section>
    <h3>Resultado</h3>
    <div>
      <h3>Número gerado</h3>
      <p>(0 a 100)</p>
      <?php
      // gerar numeros aleatórios
      // rand() (1951- LCG ou Linear Congrentil Generator) não muito confiável v7 para tras
      // mt_rand() (mais novo 1997 - Mersenne Twister)
      // depois PHP 7.1 rand() é apontamento para mt_rand()
      // random_int() (numeros aleatorios criptograficamente mais seguros) - mais lento
      $num_random = mt_rand(0, 100);

      echo "<strong><h1>$num_random</h1></strong></p>";
      ?>
      <a href="./desafio_2.html">Voltar</a>
    </div>
  </section>
  <div>
    <a href="./index.html"><button>Lista de Exercícios</button></a>
    <a href="./desafio_3.html"><button>Próximo</button></a>
    <a href="./desafio_1.html"><button>Anterior</button></a>
  </div>
  <footer>
    <p>Analise o resultado desde exercício</p>
  </footer>
</body>

</html>