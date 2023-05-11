<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Strings</title>
</head>

<body>
  <h1>Introdução a Strings</h1>
  <h2>
    <ol>
      <li>Double quoted <span>" "</span></li>
      <li>Single quoted <span>' '</span></li>
      <li>Heredoc</li>
      <li>Nowdoc</li>
    </ol>
  </h2>

  <h3>Double quoted <span>(" ")</span> e Single quoted <span>(' ')</span></h3>
  <p>Usar aspas duplas para escrever qualquer coisa dentro.</p>
  <p>Exemplo: "Olá Mundo!"</p>
  <h4>Concatenação de string === . (ponto)</h4>
  <p>Exemplo: "Olá Mundo!"."Prazer em conhece-lo"</p>
  <p>Resultado: "Olá Mundo! Prazer em conhece-lo"</p>
  <p>Com o uso de aspas duplas há a interpretação dentro da string, podem apresentar o resultado de variáveis ou contantes</p>

  <?php
  echo "PHP \u{1F418} <br>";
  echo 'PHP \u{1F418}';
  // exemplos:
  $nome = "Rodrigo";
  $snome = "Nogueira";

  echo "<br>$nome 'Minotauro' $snome"; // usar aspas simples
  echo "<br>$nome \"Minotauro\" $snome"
  ?>

  <h3>Escape Sequences</h3>
  <ul>
    <li>\n</li>
    <p>Para uma nova linha</p>
    <li>\t</li>
    <p>Para tabulação</p>
    <li>\\</li>
    <p>Para mostrar barra invertida(\)</p>
    <li>\$</li>
    <p>Para mostrar o cifrão ($)</p>
    <li>\u{}</li>
    <p>Para inserir um Codepoint Unicode</p>
  </ul>

  <h3>Heredoc</h3>
  <p>Metodo para escrever várias linhas interpretando o conteudo se necessário</p>

  <?php
  $curso = "PHP";
  $ano = date("Y");
  echo <<< FRASE
    Estou estudando $curso no Curso em Vídeo no ano de $ano.
    FRASE;
  ?>

  <h3>Nowdoc</h3>
  <p>Semelhante a Heredoc, no entando não interpreta variaveis ou contantes internamente.</p>

  <?php 
  $curso = "PHP";
  $ano = date("Y");
  echo <<< 'FRASE'
    Estou estudando $curso no Curso em Vídeo no ano de $ano.
    FRASE;
  ?>

</body>

</html>