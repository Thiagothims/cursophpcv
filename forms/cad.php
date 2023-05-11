<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Resultado PHP</title>
</head>

<body>
  <header>
    <h1>Resultado do cadastro</h1>
  </header>
  <main>
    <?php
    //variaveis globais
    //$_GET - pegar dados
    //$_POST - postar dados (inserir)
    //$_REQUEST - junção de $_GET + $_POST $_COOKIES
    
    $nomeUsuario = $_GET["nome"] ?? "Nome não informado";
    $sobreNomeUsuario = $_GET["sobreNome"] ?? "sobrenome não informado";

    echo "<p>Prazer em conhece-lo <strong>$nomeUsuario $sobreNomeUsuario</strong>.<br> Bem vindo ao curso de PHP!</p>";

    ?>

    <p><a href="javascript:history.go(-1)">Voltar</a></p>
  </main>

</body>

</html>