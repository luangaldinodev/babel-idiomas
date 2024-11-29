<?php

$nome = $_POST['nome'];
$mensagem = $_POST['mensagem'];

$novaMensagem = str_replace(' ', '%20', $mensagem);

$mensagemComNome = "Meu nome é ".$nome.",".$mensagem;

$link = "https://api.whatsapp.com/send?phone=5512982827309&text=".$mensagemComNome;

header('Location: '.$link.'');

?>