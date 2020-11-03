
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


?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Produtos - Full Stack eletro</title>
    <link rel="stylesheet" href="css/estilo.css">
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
    
    <h2>Produtos </h2>
    <h4>compra protegida<br><img width="10%" src="./imagens/site-blindado-logo.png" alt="site blindado"></h4>
    <button style="margin-left: 90%;" type="button" onclick='cumpomdedesconto()'>#cupom<br>desconto</button>
    <hr>

    <div id="principal">
        <nav id="menu-lateral">
            <h3 style="color: white;">Categoria</h3>
            <ul>
                <li onclick="exibir_todos()">Todos (12)</li>
                <li onclick="exibir_categoria('geladeira')">Geladeiras (3)</li>
                <li onclick="exibir_categoria('fogao')">Fogões (2)</li>
                <li onclick="exibir_categoria('microondas')">Microondas (3)</li>
                <li onclick="exibir_categoria('lavaroupas')">Lava Roupas (2)</li>
                <li onclick="exibir_categoria('lavaloucas')">Lava Louças (2)</li>
            </ul>
        </nav>
        <section id="Produtos">

    <?php 

        $sql= "select * from produtos";
        $result= $conn->query($sql);

    if($result->num_rows > 0){
    while($rows = $result->fetch_assoc()){
        ?>

<div class="produto" style="display:block" id="box_<?php echo $rows["categoria"];?>">
                <img src="<?php echo $rows["imagem"];?>" alt="Geladeira">
                <p><?php echo $rows["descricao"];?></p>
                <hr>
                <p class="valorProduto">R$ <?php echo $rows["preco"];?></p>
                <p class="promocao">R$ <?php echo $rows["precoVenda"];?></p>
                <button title="clique aqui para comprar">Comprar</button>

            </div>

<?php
    }   
}else{
    echo"Nenhum Produto cadastrado!";
}

?>


        </section>
    </div>
    </main>
    <br>
    <br>
    <br>
 
    <center>
        <img src="./imagens/forma de pagamento daten - logos-cartoes_.jpg" alt="Formas de Pagamento">
    </center>
    <hr>

    <footer>
        <p id="copy">&copy; Recode Pro</p>
    </footer>

</body>

</html>