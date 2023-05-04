<?php
if(isset($_POST['submit'])) {
    // Define o endereço de e-mail para o qual o formulário será enviado
    $to = "atendimento.sigcon@gmail.com";
    
    // Define o assunto do e-mail
    $subject = "Novo contato enviado pelo site";

    // Captura os dados do formulário
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['number'];
    $has_cnpj = $_POST['cnpj'];
    $best_time = $_POST['horario'];
    $contact_preference = $_POST['whats'];
    $message = $_POST['mensagem'];
    
    // Cria o corpo da mensagem do e-mail
    $body = "Nome: $name\n";
    $body .= "E-mail: $email\n";
    $body .= "Número do Whatsapp: $phone\n";
    $body .= "Possui CNPJ: $has_cnpj\n";
    $body .= "Melhor horário para entrar em contato: $best_time\n";
    $body .= "Preferência de contato: $contact_preference\n\n";
    $body .= "Mensagem:\n$message";
    
    // Define os cabeçalhos do e-mail
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    
    // Envia o e-mail
    if(mail($to, $subject, $body, $headers)) {
        echo "Mensagem enviada com sucesso!";
    } else {
        echo "Ocorreu um erro ao enviar a mensagem.";
    }
}
?>