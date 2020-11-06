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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
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
 

        

        <div class="container">
        <div class="row">
        
        <div class="col-sm">
            
                        <form action="" method="POST" onsubmit="analisePedido()">

                        <div class="form-group, col-sm-20 my-1">
                        <h1>Solicitação de Envio de Pedidos</h1>
                            <label for="nomeCliente">Cliente:</label>
                            <input type="text" class="form-control" id="nomeCliente" name="nomeCliente">
                        </div>

                        <div class="form-group, col-sm-20 my-1">
                            <label for="endereco">Endereço Completo:</label>
                            <input type="text" class="form-control" id="endereco" name="endereco">
                        </div>

                        <div class="form-group, col-sm-20 my-1">
                            <label for="telefone">Telefone:</label>
                            <input type="text" class="form-control" id="telefone" name="telefone">
                        </div>


                        <div class="form-group, col-sm-5 my-1">
                            <label for="motivo">Selecione o produto desejado: </label>
                            <select multiple class="form-control" name="produto" id="produto">
                                <option>Geladeira</option>
                                <option>Fogão</option>
                                <option>Microondas</option>
                                <option>Lava Roupas</option>
                                <option>Lava Louças</option>
                            </select>
                        </div>

                        <div class="form-group, col-sm-1 my-1">

                            <label for="quantidade">Quantidade:</label>
                            <input type="text" class="form-control" id="quantidade" name="quantidade">
                        </div>
                        <br>

                        <input type="submit">


                    </form>
                </div>
            </div>
        </div>

 
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

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>


</body>
</head>

</html>