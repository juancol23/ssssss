<?php
 
$para      = 'valdcolra@gmail.com';
$titulo    =  $_POST['title'];
$mensaje   = 'Hola';
$cabeceras = 'From: ricarda@riva.com' . "\r\n" .
    'Reply-To: ricarda@riva.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($para, $titulo, $mensaje, $cabeceras);

echo "Enviando"
?>