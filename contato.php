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
        <table border=0 width"100%" cellpadding="20">
            <tr>
                <td width "50%" align="center">
                    <a href="http://api.whatsapp.com/send?1=pt_BR&phone=5511962441455" target="_blank">
                        <img src="./imagens/whatsapp-icone-1.png" alt="contato" width="80px"
                            title="Whatsapp - Fale Conosco">
                        <div class="contatos">via Whats App</div>
                </td>
                <td width "50%" align="center">
                    <img src="./imagens/mail 12.png" alt="contato" width="80px">
                    <div class="contatos">contato@fullstackeletro.com.br</div>
                </td>
        </table>
        <br>

        <h1>Fale Conosco</h1>



        <form div class="formedition" action="" method="POST">
            <div class="quadroexterno"><img style="width: 100%;" src="imagens/Logo Maior.png">

            </div>
            </div>

            <b><label for="nome">Nome:</label></b>
            <input style="color:white; background-color: red; width: 400px;" type="text" id="nome" name="nome">
            <br>
            <b><label for="email">E-mail:</label></b>
            <input style="color:white; background-color: red; width: 400px;" type="text" id="nome" name="email">
            <br>
            <p id=contact-msg>Mensagem:</p>

            <input type="radio" id="duvidas" name="motivo" value="duvidas">
            <label for="masculino">Dúvidas</label>
            <br>
            <input type="radio" id="reclamação" name="motivo" value="reclamação">
            <label for="feminino">Reclamação</label>
            <br>
            <input type="radio" id="outros" name="motivo" value="outros" checked>
            <label for="feminino">Outros</label>

            <br><br>
            <textarea style="width: 400px; color:white; background-color:red" name="mensagem"></textarea>
            <br>
            <input type="submit">
            <br><br><br>


        </form>

        

    </center>
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

</body>
</head>

</html>