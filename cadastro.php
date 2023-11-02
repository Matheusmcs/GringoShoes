<?php
if(isset($_POST['submit'])){
    include_once('conexao.php');
}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CADASTRO</title>
    <link rel="stylesheet" href="style.css">
</head>

<body class="fundo">
    <div class="form">
        <script>
            function validar_senha() {
                var senha = document.getElementById("senha").value;
                var Confirmar_senha = document.getElementById("Confirmar_senha").value;
                if (senha !== Confirmar_senha) {
                    alert("Senhas incompátiveis");
                    return false; 
                }
                else{return true;}
            }
        </script>
        <img src="Imagens/Login.png" alt="">
        <form onsubmit="return validar_senha()" action="ProcessarCadastro.php" method="post">
            <input class="campo" type="text" name="nome" placeholder="Seu nome completo" required id="nome">
            <input class="campo" type="email" name="email" placeholder="Insira seu email" required id="email">
            <input class="campo" type="tel" name="telefone" placeholder="Insira seu telefone" required>
            <input class="campo" type="password" name="senha" placeholder="Crie sua senha" required id="senha">
            <input class="campo" type="password" id="Confirmar_senha" placeholder="Confirme sua senha">
            <input class="campo" type="submit" id="submit" href="login.html" value="Cadastrar">
        </form>
    </div>
</body>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>

</html>