<?php

//Dados do cliente e sua mensagem
$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$mensagem = $_POST['mensagem'];

//se telefone não for preenchido
if($telefone == ""){
    $telefone = "não preenchido";
}

//Email para onde será encaminhada a mensagem
$to = "falecomleonardomacedo@gmail.com";

//Assunto que aparecerá no email
$subject = "Meu site - Fale conosco";

//O conteudo que irei receber no email
$conteudo = "<b><u><h3>Dados do usuário:</u></b></h3>";
$conteudo .= "&emsp;<b>Nome: </b>" . $nome . "<br>";
$conteudo .= "&emsp;<b>Email: </b>" . $email . "<br>";
$conteudo .= "&emsp;<b>Telefone: </b>" . $telefone . "<br>";
$conteudo .= "<b><u><h3>Mensagem do usuário:</u></b></h3>";
$conteudo .=  "&emsp;" . $mensagem;

//cabeçalho
$headers = "MIME-Version: 1.1\r\n";
$headers .= "Content-type: text/html; charset=UTF-8\r\n";

//configuração do envio para email
$envio = mail($to, $subject, $conteudo, $headers);
 
if($envio){
    ?>
        <script>
            alert("Sua mensagem foi enviada com sucesso!");
            window.location.assign("https://leonardomacedocano.github.io/site/");
        </script>
    <?php
}else{
    ?>
        <script>
            alert("Falha no envio. Tente novamente!");
            window.location.assign("https://leonardomacedocano.github.io/site/");
        </script>
    <?php
}