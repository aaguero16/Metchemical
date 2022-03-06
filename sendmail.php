<?php
if(isset($_POST['email'])) {


$email_to = " comercializacion@metchemical.com";
$email_subject = "Contacto desde el sitio web";


if(!isset($_POST['name']) ||
!isset($_POST['email']) ||
!isset($_POST['phone']) ||
!isset($_POST['empresa']) ||
!isset($_POST['mensaje'])) {

echo "<b>Ocurrió un error y el formulario no ha sido enviado. </b><br />";
echo "Por favor, vuelva atrás y verifique la información ingresada<br />";
die();
}

$email_message = "Detalles del formulario de contacto:\n\n";
$email_message .= "Nombre: " . $_POST['name'] . "\n";
$email_message .= "E-mail: " . $_POST['email'] . "\n";
$email_message .= "Teléfono: (+51)" . $_POST['phone'] . "\n";
$email_message .= "Empresa: " . $_POST['empresa'] . "\n";
$email_message .= "Mensaje: " . $_POST['mensaje'] . "\n\n";



$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers);

echo "¡El formulario se ha enviado con éxito!";
}
?>