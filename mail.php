<?php
  $headers = 'From: baza@tortas-juan.com' . "\r\n" .
  'Reply-To: baza@tortas-juan.com' . "\r\n" .
  'X-Mailer: PHP/' . phpversion();
  $to_Email       = "baza@tortas-juan.com"; //Replace with recipient email address
  $subject        = 'Contacto Proconvenciones'; //Subject line for emails
  $name     = $_POST['name'];
  $email    = $_POST['mail'];
  $phone    = $_POST['phone'];
  $days     = $_POST['days'];
  $hours    = $_POST['hours'];
  $mensaje  = "Nuevo mensaje de contacto " . $name ." \r\n";
  $mensaje .= "Empresa: " . $company . " \r\n";
  $mensaje .= "Tel.: " . $phone . " \r\n";
  $mensaje .= "Mail: " . $email . " \r\n\n";
  $mensaje .= "- - - " . $message . " \r\n\n";
  $mensaje .= "Enviado el " . date('d/m/Y', time());
  echo "$mensaje";
  $sentMail = @mail($to_Email, $subject, $mensaje, $headers);

  // require_once('../class.phpmailer.php');
  // $mail = new PHPMailer();
  // //indico a la clase que use SMTP
  // $mail­>IsSMTP();
  // //permite modo debug para ver mensajes de las cosas que van ocurriendo
  // $mail­>SMTPDebug = 2;
  // //Debo de hacer autenticación SMTP
  // $mail­>SMTPAuth = true;
  // $mail­>SMTPSecure = "ssl";
  // //indico el servidor de Gmail para SMTP
  // $mail­>Host = "smtp.gmail.com";
  // //indico el puerto que usa Gmail
  // $mail­>Port = 465;
  // //indico un usuario / clave de un usuario de gmail
  // $mail­>Username = "homely.mexico@gmail.com";
  // $mail­>Password = "Homely1234";
  // $mail­>SetFrom('tu_correo_electronico_gmail@gmail.com', 'Nombre completo');
  // $mail­>AddReplyTo("tu_correo_electronico_gmail@gmail.com","Nombre completo");
  // $mail­>Subject = "Envío de email usando SMTP de Gmail";
  // $mail­>MsgHTML("Hola que tal, esto es el cuerpo del mensaje!");
  // //indico destinatario
  // $address = "baza@homely.mx";
  // $mail­>AddAddress($address, "Nombre completo");
  // if(!$mail­>Send()) {
  // echo "Error al enviar: " . $mail­>ErrorInfo;
  // } else {
  // echo "Mensaje enviado!";
  // }
?>

