<?php
session_start();

    @$opt1 = ($_POST['perg1']);
    @$opt2 = ($_POST['perg2']);
    @$opt3 = ($_POST['perg3']);
    @$opt4 = ($_POST['perg4']);
    @$opt5 = ($_POST['perg5']);
    // echo $opt1.$opt2.$opt3 ; 

    $resposta = 0;

    if (!isset($opt1) or !isset($opt2) or !isset($opt3) or !isset($opt4) or !isset($opt5)) {
        header('Location: ../../../index-quiz-medio.php');
        $_SESSION['mensagem-quiz']="<script>alert('Algum campo ficou vazio! 😢 Tente novamente!');</script>";
        exit();
    }

    else {
        // pergunta 01
        if ($opt1 == "opt2") {
            $resposta01="<p class='form-card--resposta-certa'>Você acertou a pergunta 01</p>";
            $resposta = $resposta + 1 ;
            // echo $resposta ;
        }
        else {
            $resposta01="<p class='form-card--resposta-errada'>Você errou a pergunta 01</p>";
        }
        
        // pergunta 02
        if ($opt2 == "opt2") {
            $resposta02="<p class='form-card--resposta-certa'>Você acertou a pergunta 02</p>";
            $resposta = $resposta + 1 ;
        }
        else {
            $resposta02="<p class='form-card--resposta-errada'>Você errou a pergunta 02</p>";
        }

        // pergunta 03
        if ($opt3 == "opt2") {
            $resposta03="<p class='form-card--resposta-certa'>Você acertou a pergunta 03</p>";
            $resposta = $resposta + 1 ; 
        }
        else {
            $resposta03="<p class='form-card--resposta-errada'>Você errou a pergunta 03</p>";
        }

        // pergunta 04
        if ($opt4 == "opt3") {
            $resposta04="<p class='form-card--resposta-certa'>Você acertou a pergunta 04</p>";
            $resposta = $resposta + 1 ; 
        }
        else {
            $resposta04="<p class='form-card--resposta-errada'>Você errou a pergunta 04</p>";
        }

        // pergunta 05
        if ($opt5 == "opt2") {
            $resposta05="<p class='form-card--resposta-certa'>Você acertou a pergunta 05</p>";
            $resposta = $resposta + 1 ; 
        }
        else {
            $resposta05="<p class='form-card--resposta-errada'>Você errou a pergunta 05</p>";
        }
    }
    // echo "Você acertou ".$resposta." perguntas";
    header('Location: ../../../index-quiz-medio.php');
    $_SESSION['mensagem-quiz']="<script>alert('Parabéns! Você acertou ".$resposta." perguntas.');</script>";
    $_SESSION['acertos']= $resposta01.$resposta02.$resposta03.$resposta04.$resposta05;
    exit();

?>