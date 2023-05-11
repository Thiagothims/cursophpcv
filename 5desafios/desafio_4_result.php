<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Exercício 4</title>
</head>

<body>
  <header>
    <h1>Exercício 4</h1>
    <p>Conversor de moedas(Reais para Dolar) v2.0</p>
  </header>

  <section>
    <h3>Resultado</h3>
    <div>
      <?php
      $real = $_GET["real"] ?? 0;
      // data do sistema, interpolar na url
      $dateInit = date("m-d-Y", strtotime("-7 days"));
      $dateFinal = date("m-d-Y");

      // cotação do do dolar - busca na API do Banco Central
      $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\'' . $dateInit . '\'&@dataFinalCotacao=\'' . $dateFinal . '\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';

      $dados = json_decode(file_get_contents($url), true);

      // var_dump($dados); // mostra o array ou objeto da API

      $dolar = $dados["value"][0]["cotacaoCompra"];

      // variavel com resultado da conversão
      $convert = $real / $dolar;

      //padrão de formatação - internacionalização
      $padrao = numfmt_create("pt-BR", NumberFormatter::CURRENCY); // lib intl(Internallization)

      echo "<p>Valor em Reais: " . numfmt_format_currency($padrao, $real, "BRL") . "<br>Valor em Dolares:<strong> " . numfmt_format_currency($padrao, $convert, "USD") . "</strong>*</p>";
      echo "<br><p>Cotação atual do Dolar <em>$dolar</em></p>";
      echo "<p>*Cotação atual segundo <a href='https://www.bcb.gov.br/' target='_blank'>Banco Central do Brasil</a></p>"
      ?>
    </div>
    <a href="./desafio_4.html">Voltar</a>
  </section>
  <div>
    <a href="./index.html"><button>Lista de Exercícios</button></a>
    <a href="./desafio_5.html"><button>Próximo</button></a>
    <a href="./desafio_3.html"><button>Anterior</button></a>
  </div>
  <footer>
    <p>Analise o resultado desde exercício</p>
  </footer>
</body>

</html>