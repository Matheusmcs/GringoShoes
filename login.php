<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>LOGIN</title>
  <link rel="stylesheet" href="style.css">
</head>

<body class="fundo">
  <div class="form">
    <img src="Imagens/Login.png" alt="">
    <form action="ProcessarLogin.php" method="post">
      <input class="campo" type="email" name="email" placeholder="Seu email" required id="email">
      <input class="campo" type="password" name="senha" placeholder="Sua senha" required id="senha">
      <input class="campo" type="submit" id="submit" value="Logar">
      <p>
      <h4>Não possui login?</h4><a class="campo" href="cadastro.html">Faça seu cadastro</a></p>
    </form>
  </div>
</body>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
  integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
  </script>

</html>