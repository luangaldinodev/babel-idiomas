<?php

include 'conexao.php';

if(isset($_POST['email']) && strlen($_POST['email']) > 0){
    if (!isset($_SESSION)) {
        session_start();
        // session_destroy();

        $_SESSION['email'] = $_POST['email'];
        $_SESSION['senha'] = $_POST['senha'];

        $sql = "SELECT senha, email, id, nome FROM usuarios WHERE email = '$_SESSION[email]'";
        $result = mysqli_query($con,$sql);
        $dados = mysqli_fetch_array($result);

        if ($dados['email'] == $_SESSION['email'] && $dados['senha'] == $_SESSION['senha']) {
            $_SESSION['usuario'] = $dados['id'];
            $_SESSION['mensagem'] = "<script>alert('Login efetuado com sucesso!');</script>";
            header('Location: ../../index-cliente.php');
        } else {
            header('Location: ../../index-entrar.php');
            $_SESSION['mensagem'] = "<script>alert('Falha no login! E-mail ou senha incorretos!');</script>";
        }
    }
}






?>
