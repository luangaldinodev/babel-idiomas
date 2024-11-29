<?php
include_once 'assets/database/protecao.php';
protecao();


// session_start();

include 'assets/conteudo/head-cliente.php';
include 'assets/conteudo/navbar-login.php';
include 'assets/conteudo/hero-babel.php';
include 'assets/conteudo/videos.php';
// include 'assets/conteudo/escola.php';
// include 'assets/conteudo/contato.php';
include 'assets/conteudo/footer-cliente.php';

if(isset($_SESSION['mensagem'])){
    echo $_SESSION['mensagem'];
    unset($_SESSION['mensagem']);
}


?>