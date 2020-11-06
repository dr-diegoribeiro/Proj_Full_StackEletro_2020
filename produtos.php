
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
    
    <h2>Produtos </h2>
    <h6 style ="font-size: 12px">compra protegida<br><img width="10%" src="./imagens/site-blindado-logo.png" alt="site blindado"></h6>
    <button style="margin-left: 90%;" type="button" class="btn btn-danger" onclick='cumpomdedesconto()'>#desconto</button>
    <hr>

    <div class="container mt-3">
  <p>Filtro por categorias:</p>
  <div class="d-flex p-3 bg-dark text-white">
    <div class= "p-1 bg-danger; col-2" onclick="exibir_todos()">Todos___(12)</div>
    <div class="p-1 bg-danger; col-2" onclick="exibir_categoria('geladeira')">Geladeiras</div>
    <div class=" p-1 bg-danger; col-2" onclick="exibir_categoria('fogao')">Fogões</div>
    <div class="p-1 bg-danger; col-2" onclick="exibir_categoria('microondas')">Microondas</div>
    <div class="p-1 bg-danger; col-2" onclick="exibir_categoria('lavaroupas')">Lava Roupas</div>
    <div class="p-1 bg-danger; col-2" onclick="exibir_categoria('lavaloucas')">Lava Louças</div>
  </div>
</div>
<br>

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
                <button class="btn btn-danger">Comprar</button>

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
    <hr>
    <br>
   
    <center>
        <img src="./imagens/forma de pagamento daten - logos-cartoes_.jpg" alt="Formas de Pagamento">
        <br><br>
        <h6 style ="font-size: 12px">compra protegida<br><img width="10%" src="./imagens/site-blindado-logo.png" alt="site blindado"></h6>
    </center>
    <hr>

    <footer>
        <p id="copy">&copy; Recode Pro</p>
    </footer>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>

</html>