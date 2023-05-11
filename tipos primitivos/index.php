<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tipo Primitivos</title>
</head>

<body>
  <h1>Tipos Primitivos do PHP</h1>
  <p>PHP é uma linguagem de programação fracamente tipada. Mas há 3 classes diferentes de tipos para ela:</p>

  <h2>Classes/Categorias</h2>
  <ul>
    <li>ESCALARES</li>
    <ul>
      <li>string</li>
      <li>int ou integer</li>
      <li>float ou double</li>
      <li>boll ou boolean</li>
    </ul>
    <p>Exemplos:<br>
      $sobrenome = "Mattos"; <i>string</i><br>
      $nome = "Thiago"; <i>string</i><br>
      $peso = 72.5 <i>float ou double</i><br>
      $idade = 30; <i>int ou integer</i><br>
      $casado = true; <i>bool ou boolean</i>
    </p>
    testes... <br><br>
    <?php
    echo "0x = Hexadecimal - 0b = Binário - 0 = Octal <br>";

    $num = 300;
    echo "O valor da variável é $num <br>";
    $num = 0x1A;
    echo "O valor da variável é $num <br>";
    $num = 0b1011;
    echo "O valor da variável é $num <br>";
    $num = 010;
    echo "O valor da variável é $num <br><br>";
    echo "função para identificar o tipo da variável: 'var_dump' <br> var = 300 ===> var_dump(var)<br>";
    $v = 300;
    var_dump($v);

    $num = 3e2;
    echo "<br><br>O valor da variável é $num";
    echo "<br><br>Atribuindo o valor 3e2 a uma variável equivale à 3 x 10 elevado na 2 <br> var = 3e2 <br><br>";
    echo "Coerção é o metodo de atribuir um outro tipo, forçando outro tipo<br>Exemplo: var = (int) 3e2<br>forçando um tipo padrão floar a se tornar integer"

    ?>

    <br><br>
    <li>COMPOSTOS</li>
    <ul>
      <li>array</li>
      <li>object</li>
    </ul>
    <p></p>
    
    <br>
    <li>ESPECIAIS</li>
    <ul>
      <li>null</li>
      <li>resource</li>
      <li>callabe</li>
      <li>mixed</li>
    </ul>
    <p></p>
  </ul>
</body>

</html>