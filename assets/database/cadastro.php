<?php

include_once 'conexao.php';
session_start();

$nome = $_POST['nome'];
$email = $_POST['email'];
$mensagem = $_POST['senha'];

if (isset($_POST['submit'])) { //Verifica se o usuario apertou o botão.
    $nome = mysqli_real_escape_string($con, $nome); //Recebe o nome.
    $email = mysqli_real_escape_string($con, $email); //Recebe o Email.
    $senha = mysqli_real_escape_string($con, $mensagem); //Recebe a senha.
    // mysqli_real_escape_string = Escapa caracteres especiais em uma string para uso em uma instrução SQL, levando em consideração o conjunto de caracteres atual da conexão.
    
    $sql = "INSERT INTO usuarios (nome, email, senha) VALUES ('$nome', '$email', '$senha')"; //Variavel $sql recebe a instrução de inserir os dados no banco, insere na tabela usuario nos campos (nome, email, senha) onde os valores são as variaveis ($nome, $email, $senha)
    
    if (mysqli_query($con, $sql)) { //Realiza uma aquisição no banco de dados e verifica se o cadastro foi realizado com sucesso.
        $_SESSION['mensagem'] = "<script>alert('Cadastro realizado com sucesso!');</script>";
        header('Location: ../../index-entrar.php'); //Retorna para a pagina/arquivo de leitura da tebela.
    }else {
        $_SESSION['mensagem'] = "<script>alert('Falha no cadastro! Por favor tente outra vez.');</script>";
        header('Location: ../../index-cadastro.php'); //Retorna para a pagina/arquivo de leitura da tebela.
    }
    
    mysqli_close($con); //Finaliza a conexão ao banco de dados.
}

?>