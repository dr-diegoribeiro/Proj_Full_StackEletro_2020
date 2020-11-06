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

if(isset($_POST['nome']) && isset($_POST['email']) && isset($_POST['motivo']) && isset($_POST['mensagem'])){
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $motivo = $_POST['motivo'];
    $mensagem = $_POST['mensagem'];

    $sql = "insert into mensagens (nome, email, motivo, mensagem) values ('$nome', '$email', '$motivo', '$mensagem')";
    $result = $conn->query($sql);
}

?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Contato - Full Stack Eletro</title>
    <link rel="stylesheet" href="./css/estilo.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <!-- Início do Menu -->
    <header>
        <?php 
        include('menu.html');      
        ?>
    </header>
    <!-- Fim do Menu -->

    <hr>
 

<!-- Formulário da aba de Contatos (Utilização de Bootstrap - Classes em Tabelas e Formulários ) -->

<div class="container">
        <div class="row">
            <div class="col-sm"> </div>
            <div class="col-sm">

                <form action="" method="POST">

                    <div class="form-group, col-sm-20 my-1">
                        <h1>Fale Conosco</h1>

                        <label for="nome">Nome</label>
                        <input type="text" class="form-control" id="nome" name="nome">
                    </div>

                    <div class="form-group, col-sm-20 my-1">
                        <label for="email">Endereço de email</label>
                        <input type="text" class="form-control" id="email" name="email" placeholder="nome@exemplo.com">
                    </div>

                    <div class="form-group, col-sm-20 my-1">
                        <label for="mensagem">Digite aqui sua mensagem</label>
                        <textarea class="form-control" id="mensagem" name="mensagem" rows="3"></textarea>
                    </div>

                    <div class="form-group, col-sm-20 my-1">
                        <label for="motivo">Selecione o motivo do seu contato: </label>
                        <select multiple class="form-control" name="motivo" id="motivo">
                            <option>Dúvidas</option>
                            <option>Reclamação</option>
                            <option>Elogios</option>
                            <option>Problemas com Entrega</option>
                            <option>Problemas Técnicos (site)</option>
                            <option>Outros</option>
                        </select>
                    </div>

                    <button type="submit" class="btn btn-danger">Enviar</button>

                </form>
            </div>
            <div class="col-sm">

                <table>
                    <tr>
                        <a href="http://api.whatsapp.com/send?1=pt_BR&phone=5511962441455" target="_blank">
                            <img src="./imagens/whatsapp-icone-1.png" alt="contato" width="50px"
                                title="Whatsapp - Fale Conosco"></a>
                        </td>
                        <div class="contatos">
                            <a href="mailto:contato@fullstackeletro.com.br">
                                <img src="./imagens/mail 12.png" alt="contato" width="50px">
                                <i class="far fa-envelope fa-2x"></i></a>
                        </div>
                        </td>
                </table>

            </div>
        </div>

        <!-- FIM do Formulário da aba de Contatos -->

    <hr>

    <?php 

        $sql= "select * from mensagens";
        $result= $conn->query($sql);

    if($result->num_rows > 0){
    while($rows = $result->fetch_assoc()){
        echo "Data:", $rows['data'],"<br>";
        echo "Nome:", $rows['nome'],"<br>";
        echo "Mensagem:", $rows['mensagem'],"<br><br>";
    }
}else{
    echo "Nenhum comentário cadastrado ainda!";
}

?>

<hr>

    <footer>
        <p id="copy">&copy; Recode Pro</p>
    </footer>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</head>

</html>