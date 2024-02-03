,<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $celular = $_POST["celular"];
    $mensagem = $_POST["mensagem"];

    // Monta o corpo do e-mail
    $corpo_email = "Nome: $nome\n";
    $corpo_email .= "E-mail: $email\n";
    $corpo_email .= "Celular: $celular\n";
    $corpo_email .= "Mensagem:\n$mensagem";

    // Envia o e-mail
    $destinatario = "eletrosete.info@gmail.com";
    $assunto = "Formulário de Contato";

    // O cabeçalho Content-Type é importante para quebras de linha funcionem corretamente
    $headers = "From: $email\r\nReply-To: $email\r\nContent-Type: text/plain; charset=utf-8\r\n";

    mail($destinatario, $assunto, $corpo_email, $headers);
}
?>