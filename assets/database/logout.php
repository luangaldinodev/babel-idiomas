<?php

include 'conexao.php';
session_destroy();
// close datebase php mysql
$con -> close();


header("Location: ../../index.php");

?>