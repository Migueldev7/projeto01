<?php

$mysqli_connection = new MySQLi('localhost:8889', 'admin', 'poiuytrewq', 'loja');
if($mysqli_connection->connect_error){
   echo "Desconectado! Erro: " . $mysqli_connection->connect_error;
}else{
   echo "Conectado!";
}
?>