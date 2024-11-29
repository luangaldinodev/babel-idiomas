<?php
session_start();
require_once 'conexao.php';

if (isset($_POST['submit'])) {
    $nome = mysqli_real_escape_string($con, $_POST['nome']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $senha = mysqli_real_escape_string($con, $_POST['senha']);
    $id = $_SESSION['usuario'];
    
    $sql = "UPDATE usuarios SET nome = '$nome', email = '$email', senha = '$senha' WHERE id = '$id'";
    
    if (mysqli_query($con, $sql)) {
        $_SESSION['mensagem'] = "<script>alert('Atualização realizada com sucesso!');</script>";
        header('Location: ../../index-atualizar.php');
    }else {
        $_SESSION['mensagem'] = "<script>alert('Falha na atualização!');</script>";
        header('Location: ../../index-atualizar.php');
    }
    
    mysqli_close($con);
}



?>