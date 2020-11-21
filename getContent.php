
<?php

$servername="localhost";
$username="root";
$password="";
$database="fullstackeletro_bd";

$tabela = $_GET['table'];

//criando a conaxão
$conn=mysqli_connect($servername, $username, $password, $database);

//correção do erro de acentuação trabahando com bd
$conn->query("set names utf8");

//Verificando a conexão
if(!$conn){
    die("A conexão ao BD falhou". mysqli_connect_error());
}

setlocale(LC_MONETARY, 'pt_BR');

$sql= "select * from $tabela";
$result= $conn->query($sql);

//echo $result->fetch_all();

print_r( json_encode( $result->fetch_all(MYSQLI_ASSOC)) );

?>