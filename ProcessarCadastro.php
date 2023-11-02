<?php
if($_SERVER["REQUEST_METHOD"]== "POST"){
include_once ('conexao.php');
$nome = $_POST["nome"];
$email = $_POST["email"];
$senha = $_POST["senha"];
$senhacriptografada = password_hash($senha, PASSWORD_BCRYPT);
$telefone = $_POST["telefone"];
$sql = "INSERT INTO usuarios (nome, email, telefone, senha) VALUES (?,?,?,?)";
$stmt = $conexao-> prepare($sql);
if($stmt === FALSE) {
    die("erro" . $conexao->error);
} 
$stmt->bind_param("ssss",$nome, $email, $telefone, $senhacriptografada);
if($stmt->execute()){
    header("Location: login.php");
}else{
    die ("erro" . $conexao->error);
}
}
?>