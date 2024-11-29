<?php
session_start();
require_once 'conexao.php';


$id = $_SESSION['usuario'];

$sql = "DELETE FROM usuarios WHERE id = '$id'";

if (mysqli_query($con, $sql)) {
    $_SESSION['mensagem'] = "<script>alert('conta deletada realizada com sucesso!');</script>";
    header('Location: ../../index-cadastro.php');
}else {
    $_SESSION['mensagem'] = "<script>alert('Falha ao deletar a conta!');</script>";
    header('Location: ../../index-atualizar.php');
}

mysqli_close($con);




?>