<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "babel-idiomas";
$con = new mysqli($host, $user, $pass, $db);
mysqli_set_charset($con, "utf8");

// if($conn->connect_error){
//     die("Conexão falhou!: " . $conn->connect_error);
// }
// else{
//     echo "conectado com sucesso!";
// }

?>