<?php
 
$para      = 'oasis.spa.pucallpa@gmail.com';
$titulo    =  $_POST['email'];
$mensaje   = $_POST['mensaje'];
$cabeceras = 'From: webspa@riva.com' . "\r\n" .
    'Reply-To: webspa@riva.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($para, $titulo, $mensaje, $cabeceras);

echo "Enviado"
?>


