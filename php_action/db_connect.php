<?php 

//Conexão com banco de dados para
$severname = "localhost";
$username = "root";
$password = "wab12345678";
$db_name = "crud";

$connect = mysqli_connect($severname, $username, $password, $db_name);
//mysqli_set_charset($connect, "utf8");

if(mysqli_connect_error()):
    echo "Erro na conexão:" .$msqli_connect_error();
endif;

?>