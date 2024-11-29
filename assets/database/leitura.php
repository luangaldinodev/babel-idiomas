<?php

include 'conexao.php';

$sql = "SELECT senha, email, nome FROM usuarios WHERE id = '$_SESSION[usuario]'";
$result = mysqli_query($con,$sql);
$leitura = mysqli_fetch_array($result);

?>