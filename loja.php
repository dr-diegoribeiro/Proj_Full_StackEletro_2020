<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Nossas Lojas - Full Stack eletro</title>
    <link rel="stylesheet" href="./css/estilo.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="funcoes.js"></script>

</head>

<body>
    <!-- Início do Menu -->
    <header>
        <?php 
        include('menu.html');      
        ?>
    </header>
    <!-- Fim do Menu -->

   <!--Jumbotron - caixa cinza -->
   <div class="container">
    <div class="row">

      <div class="col 6">
        <div class="jumbotron jumbotron-fluid">
          <div class="container">
            <h1 class="display-4">Nossas Lojas</h1>
            <p class="lead">Em decorrência da COVID-19 o horário de atendimento nas lojas físicas está diferenciado:
            <br>de segunda a sexta-feiras, das 10h às 17h e aos sábados, das 10 às 14h.</p>
            <p>Por questões de segurança será permitido o acesso as lojas físicas apenas clientes com o uso da máscara!</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--Jumbotron - fim da caixa cinza -->


  <div class="container">
    <div class="row">

        <div class="col 6">

          <div class="container">
            <div class="row">
              <div class="col">
                <div class="card" style="width: 18rem;">
                  <img class="card-img-top" src="./imagens/loja 1.png" alt="Card image cap">
                  <div class="card-body">
                    <h5 class="card-title">São Paulo</h5>
                    <p class="card-text">Av. Penha, 15 - São Paulo <br>Tel: (11) 3333-3333</p>
                    <a href="#" class="btn btn-dark">como chegar</a>
                  </div>
                </div>
              </div>
              <div class="col order-12">
                <div class="card" style="width: 18rem;">
                  <img class="card-img-top" src="./imagens/loja 2.png" alt="Card image cap">
                  <div class="card-body">
                    <h5 class="card-title">Rio de Janeiro</h5>
                    <p class="card-text">R. Cubas, 50 - Centro - RJ<br>Tel: (21) 3333-3333
                      </p>
                    <a href="#" class="btn btn-dark">como chegar</a>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card" style="width: 18rem;">
                  <img class="card-img-top" src="./imagens/loja 3.png" alt="Card image cap">
                  <div class="card-body">
                    <h5 class="card-title">Maranhão</h5>
                    <p class="card-text">R. Dors, 13 - São Luís - MA <br>Tel: (71) 3333-333
                    </p>
                    <a href="#" class="btn btn-dark">como chegar</a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          
        </div>
    </div>
</div>


<br>
<center>
    <img src="./imagens/forma de pagamento daten - logos-cartoes_.jpg" alt="Formas de Pagamento">

    <br><br><br>
  <hr><br><br>
  
<footer>
    <p id="copy">&copy; Recode Pro</p>
</footer>

</center>
</body>

</html>

</html>