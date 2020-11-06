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

    <!--ALERT-->
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>Atenção!</strong> Em decorrênia da COVID-19, para o acesso as nossas lojas físicas, lembre-se de levar a sua máscara!
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
  </div>
   <!-- FIM ALERT-->

    <center>

        <img style="margin-left: 0%;" ; width="40%" src="imagens/mapa.OK.png">


        <div class="container">
            <h2>Nossas Lojas</h2>
            <p>Horário de funcionamento: de segunda a sexta-feira, das 10h às 17h e aos sábados, das 10h às 15h. </p>
            <div class="d-flex p-6 bg-dark text-white">
            <div class="d-flex p-4 bg-danger text-white">  
                <div class="p-3 bg-dark">Av. Pereira Barth, 115 <br>  Centro - SP <br> Tell: (11) 3333-3333</div>
                <div class="p-3 bg-secondary">Rua Cubas, 50 <br>  Centro - RJ<br> Tell: (21) 3333-3333</div>
                <div class="p-3 bg-dark">Av. Keneddy, 50 <br>  Centro BH<br> Tell: (71) 3333-3333</div>
                <div class="p-3 bg-secondary">Rua Benedito Ó, 13 <br>  São Luís - MA<br> Tell: (71) 3333-333</div>
                <div class="p-3 bg-dark">Av.  Barreto, 115 <br>  Centro - SP <br> Tell: (11) 3333-3333</div>
                <div class="p-3 bg-secondary">Av. Pereira, 115 <br>  Centro - SP <br> Tell: (11) 3333-3333</div>
                </div>
            </div>
        </div>

        
    </center>

    <hr>
   
    <br>
    <center>
        <img src="./imagens/forma de pagamento daten - logos-cartoes_.jpg" alt="Formas de Pagamento">
    </center>


    <hr><br><hr>

    <footer>
        <p id="copy">&copy; Recode Pro</p>
    </footer>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>

</html>