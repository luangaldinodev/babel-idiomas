<?php
include_once 'assets/database/protecao.php';
protecao();


// session_start();

include 'assets/conteudo/head-quiz.php';
include 'assets/conteudo/navbar-login.php';
include 'assets/conteudo/quiz/nivel-facil.php';
include 'assets/conteudo/footer-cliente.php';

if(isset($_SESSION['mensagem-quiz'])){
    echo $_SESSION['mensagem-quiz'];
    unset($_SESSION['mensagem-quiz']);
}


?>