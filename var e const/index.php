<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Var e Const</title>
</head>

<body>

  <div id="intro">
    <h1>Variáveis e Constantes</h1>
    <p>Variáveis podem ser alteradas durante su vida, já Constantes não sofrem alterações ao longo do seu ciclo de vida.</p>
    <h2>Declaração de variáveis</h2>
    <p><span>$var</span> => declação com '$' na frente</p>
    <p>Não necessita de linha de declaração, pois a linguagem ja identifica que é uma variável.</p>
    <h2>Declaração de constantes</h2>
    <p><span>const</span> => declaração com a palavra reservada 'const'</p>
    <p>Constantes não sofrem alteração durante seu código.</p>
    <p>É uma boa prática não utilizar acentos nas variáveis e constantantes</p>
    <h3>Onde são alocadas as variáveis e constantes?</h3>
    <p>Como o PHP é server-side as variáveis e constantes são alocadas no servidor, processadas e depois enviadas para o cliente.</p>
  </div>

  <div id="regras-var">
    <h2>Regras para nomes de var e const</h2>
    <ol>
      <li>Variáveis sempre começam com '$';</li>
      <li>O segundo caracter pode ser _ ou otro simbolo;</li>
      <li>Após o segundo caracter é aceito qual quer caracter de 'a - z ou A - Z ou 0 - 9';</li>
      <li>Aceita caracteres da tabela ASCII a partir do caracter 128;</li>
      <li>Aceita caracteres acentuados;</li>
      <li>Não é permitido espaços entre palavras de uma variável ou constante;</li>
      <li>O PHP é case sensitive, ou seja, letras minúsculas e mauiúsculas são diferenciadas;</li>
      <li>Palavras reservadas não podem ser variáveis ou constantes. Exemplo: $this.</li>
    </ol>
  </div>


  <div id="exemplos">
    <h2>Testes e exemplos</h2>
    <?php
    $nome = "Thiago";
    echo "Seu nome é $nome";
    const pi = 3.14;
    echo "<br/>A constante PI é " . pi
    ?>
  </div>

  <div id="recomendacoes">
    <h3>Recomendações para nomeação de variáveis e constantes</h3>
    <ul>
      <li>Dê nomes claros e objetivos que sejam faceis de identificar;</li>
      <li>Evite nomes muito curtos ou muito longos;</li>
      <li>Defina um padrão para nomeação das uas variáveis e constantes;</li>
      <li>Para variáveis, dê preferência para letras minúsculas;</li>
      <li>Para constantes, dê preferenência para letras maiúsculas;</li>
      <li>Use 'camelCase' para métodos e atributos;</li>
      <li>use SNAKE_CASE para constantes;</li>
    </ul>
  </div>

</body>

</html>