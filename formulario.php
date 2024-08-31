<?php
echo "O código PHP está funcionando!<br>";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $servico = filter_input(INPUT_POST, 'servico', FILTER_SANITIZE_STRING);
    $barbeiro = filter_input(INPUT_POST, 'barbeiro', FILTER_SANITIZE_STRING);
    $data_hora = filter_input(INPUT_POST, 'data_hora', FILTER_SANITIZE_STRING);

    // Enviar email
    $to = "orariotemp991@gmail.com";
    $subject = "Novo Agendamento";
    $message = "Nome: {$nome}\nEmail: {$email}\nServiço: {$servico}\nBarbeiro: {$barbeiro}\nData e Hora: {$data_hora}";
    $headers = "From: orariotemp991@gmail.com";

    if (mail($to, $subject, $message, $headers)) {
        echo "Agendamento enviado para $to com sucesso!";
    } else {
        echo "Erro ao enviar agendamento.";
    }
}
?>