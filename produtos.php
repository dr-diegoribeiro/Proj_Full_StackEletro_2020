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
    <h6 style="font-size: 12px">compra protegida<br><img width="10%" src="./imagens/site-blindado-logo.png"
            alt="site blindado"></h6>
    <button style="margin-left: 90%;" type="button" class="btn btn-danger"
        onclick='cumpomdedesconto()'>#desconto</button>
    <hr>



<!--Filtro de Produtos-->
    <div class="row">
  <div class="col-2">
    <div class="list-group" id="list-tab" role="tablist">
      <a class="list-group-item list-group-item-action active list-group-item-dark" id="list-home-list" data-toggle="list" onclick="exibir_todos()">Todos</a>
      <a class="list-group-item list-group-item-action list-group-item-dark" list-group-item-dark id="list-profile-list" data-toggle="list" onclick="exibir_categoria('geladeira')">Geladeiras</a>
      <a class="list-group-item list-group-item-action list-group-item-dark" id="list-messages-list" data-toggle="list" onclick="exibir_categoria('fogao')">Fogões</a>
      <a class="list-group-item list-group-item-action list-group-item-dark" id="list-settings-list" data-toggle="list" onclick="exibir_categoria('microondas')">Microondas</a>
      <a class="list-group-item list-group-item-action list-group-item-dark" id="list-settings-list" data-toggle="list" onclick="exibir_categoria('lavaroupas')">Lava Roupas</a>
      <a class="list-group-item list-group-item-action list-group-item-dark" id="list-settings-list" data-toggle="list" onclick="exibir_categoria('lavaloucas')">Lava Louças</a>
    </div>
  </div>
  <!--Filtro de Produtos-->

  <div class="col-8">
   
  <br>

<section id="Produtos">

    <?php
$dados_json = file_get_contents("http://localhost/Proj_Full_SackEletro_2020/getContent.php?table=produtos");

$dados = json_decode($dados_json, true);
// print_r( $dados ); foi apenas para testar

foreach ($dados as $key => $rows){
//print_r($rows);


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
?>

</section>
</div>
</main>
</div>
</div>


    <center>
        <img src="./imagens/forma de pagamento daten - logos-cartoes_.jpg" alt="Formas de Pagamento">
        <br><br>
        <h6 style="font-size: 12px">compra protegida<br><img width="10%" src="./imagens/site-blindado-logo.png"
                alt="site blindado"></h6>
    </center>
    <hr>

    <footer>
        <p id="copy">&copy; Recode Pro</p>
    </footer>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
    </script>

</body>

</html>