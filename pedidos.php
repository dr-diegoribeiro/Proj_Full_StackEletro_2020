<?php

$servername="localhost";
$username="root";
$password="";
$database="fullstackeletro_bd";

//criando a conaxão

$conn=mysqli_connect($servername, $username, $password, $database);

//correção do erro de acentuação trabahando com bd
$conn->query("set names utf8");

//Verificando a conexão
if(!$conn){
    die("A conexão ao BD falhou". mysqli_connect_error());
}

if(isset($_POST['nomeCliente']) && isset($_POST['endereco']) && isset($_POST['telefone']) && isset($_POST['produto']) && isset($_POST['quantidade'])){

    $nomeCliente = $_POST['nomeCliente'];
    $endereco = $_POST['endereco'];
    $telefone = $_POST['telefone'];
    $produto = $_POST['produto'];
    $quantidade = $_POST['quantidade'];
    
    $sql = "insert into enviopedidos (nomeCliente, endereco, telefone, produto, quantidade) values ('$nomeCliente', '$endereco', '$telefone', '$produto', '$quantidade')";
    $result = $conn->query($sql);
}

?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Envio de Pedidos</title>
    <link rel="stylesheet" href="./css/estilo.css">
    <script src="js/funcoes.js"></script>
</head>

<body>
    <!-- Início do Menu -->
    <header>
        <?php 
        include('menu.html');      
        ?>
    </header>
    <!-- Fim do Menu -->

    <h2>Contato</h2>
    <hr>
    <center>

        <h1>Solicitação de Envio de Pedidos</h1>

        <form div class="formedition" action="" method="POST" onsubmit="analisePedido()">
           

            <b><label for="nomeCliente">Cliente:</label></b>
            <input style="color:white; background-color: red; width: 400px;" type="text" id="nomeCliente" name="nomeCliente">
            <br>
            <b><label for="endereco">Endereço Completo:</label></b>
            <input style="color:white; background-color: red; width: 400px;" type="text" id="endereco" name="endereco">
            <br>
            <b><label for="telefone">Telefone:</label></b>
            <input style="color:white; background-color: red; width: 400px;" type="text" id="telefone" name="telefone">
            <br>
            <p id=contact-msg>Produtos:</p>

            <input type="radio" id="geladeira" name="produto" value="geladeira">
            <label for="geladeira">Geladeira</label>
            <br>
            <input type="radio" id="microndas" name="produto" value="microondas">
            <label for="microondas">Microondas</label>
            <br>
            <input type="radio" id="fogao" name="produto" value="fogao" checked>
            <label for="fogao">Fogão</label>
            <br><br>

            <b><label for="quantidade">Quantidade:</label></b>
            <input style="color:white; background-color: red; width: 400px;" type="text" id="quantidade" name="quantidade">
            <br>
  
            <input type="submit">

            </div>
            <br><br><br>


        </form>

    </center>
    <hr>

    <?php 

        $sql= "select * from enviopedidos";
        $result= $conn->query($sql);

    if($result->num_rows > 0){
    while($rows = $result->fetch_assoc()){
        echo "Cód_Pedido:", $rows['id'],"<br>";
        echo "Cliente:", $rows['nomeCliente'],"<br>";
        echo "Endereço:", $rows['endereco'],"<br>";
        echo "Telefone:", $rows['telefone'],"<br>";
        echo "Produto:", $rows['produto'],"<br>";
        echo "Quantidade:", $rows['quantidade'],"<br><hr>";
    }
}else{
    echo "Nenhum comentário cadastrado ainda!";
}

?>

<hr>

    <footer>
        <p id="copy">&copy; Recode Pro</p>
    </footer>

</body>
</head>

</html>