<?php
  $headers = 'From: baza@homely.mx' . "\r\n" .
  'Reply-To: hola@homely.mx' . "\r\n" .
  'X-Mailer: PHP/' . phpversion();
  $to_Email       = "hola@homely.mx"; //Replace with recipient email address
  $subject        = 'Contacto Proconvenciones'; //Subject line for emails
  $name = $_POST['name'];
  $email = $_POST['mail'];
  $phone = $_POST['phone'];
  $days = $_POST['days'];
  $hours = $_POST['hours'];
  $mensaje = "Nuevo mensaje de contacto " . $name ." \r\n";
  $mensaje .= "Empresa: " . $company . " \r\n";
  $mensaje .= "Tel.: " . $phone . " \r\n";
  $mensaje .= "Mail: " . $email . " \r\n\n";
  $mensaje .= "- - - " . $message . " \r\n\n";
  $mensaje .= "Enviado el " . date('d/m/Y', time());
  echo "$mensaje";
  $sentMail = @mail($to_Email, $subject, $mensaje, $headers);
?>