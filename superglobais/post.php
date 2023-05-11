<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Método POST</title>
</head>
<body>
  <h1>Método POST e sua funcionalidade</h1>
  <h2>Uso</h2>
  <p>Método para envio de dados, criando um vetor ou array com os dados no modelo chave valor conforme form</p>
  <main>
    <pre>
      <?php 
      echo "\$_POST";
      var_dump($_POST);
      ?>
    </pre>
    <p>Para encontrar a senha e o usuário é posivel inspecionado a page após o post, na aba network, doc, acessar o Payload. Abaixo aparece os dados enviado pela super global POST</p>
    <p>É possivel passar dados pelo 'action' do form, da seguinte forma: <br><br> 'action="./post.php?tipo=Cliente&status=Ativo'<br><br>Assim o método GET também é alimentado.</p>
  </main>
  
  <a href="./index.html">Voltar para lista</a>
</body>
</html>