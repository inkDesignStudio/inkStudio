<?php
$name = htmlspecialchars($_POST["name"]);
$tel = htmlspecialchars($_POST["phone"]);
$email = htmlspecialchars($_POST["email"]);
$message = htmlspecialchars($_POST["comments"]);
$file = $_FILES['file'];

/* Ваш адрес и тема сообщения */
//$address = "coyotstyle@ukr.net";
$address = "mihail.shik@gmail.com";
$sub = "Сообщение с сайта kulikandpartners.com";

/* Формат письма */
$mes = "Сообщение с сайта kulikandpartners.com.\n
Имя отправителя: $name
Электронный адрес отправителя: $email
Телефон отправителя: $tel
Текст сообщения:
$message";
//Get uploaded file data using $_FILES array
$tmp_name    = $_FILES['file']['tmp_name']; // get the temporary file name of the file on the server
$name        = $_FILES['file']['name'];  // get the name of the file
$size        = $_FILES['file']['size'];  // get size of the file for size validation
$type        = $_FILES['file']['type'];  // get type of the file
$error       = $_FILES['file']['error']; // get the error (if any)




      /* Отправляем сообщение, используя mail() функцию */
      $from = "From: $name <$email> \r\n Reply-To: $email \r\n";
      mail($address, $sub, $mes, $from);

