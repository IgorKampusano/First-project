<?php

require_once('form-lesson/phpmailer/PHPMailerAutoload.php');
require_once('controller.php');
$mail = new PHPMailer;
$mail->CharSet = 'utf-8';

$name = $_POST['Имя'];
$phone = $_POST['Телефон'];
$width = $_POST["ширина"];
$height = $_POST["высота"];
$type = $_POST["полотно"];
$gateSmall = $_POST["калитка"];
$automatic = $_POST["автоматизация"];
$_POST["работы-1"];
$_POST["работы-2"];
$_POST["работы-3"];
//$email = $_POST['user_email'];

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.mail.ru';  																							// Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'igor.kampusano@mail.ru'; // Ваш логин от почты с которой будут отправляться письма
$mail->Password = 'microsoft3'; // Ваш пароль от почты с которой будут отправляться письма
$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 465; // TCP port to connect to / этот порт может отличаться у других провайдеров

$mail->setFrom('igor.kampusano@mail.ru'); // от кого будет уходить письмо?
$mail->addAddress('kampusano.igor@mail.ru');     // Кому будет уходить письмо
//$mail->addAddress('ellen@example.com');               // Name is optional
//$mail->addReplyTo('info@example.com', 'Information');
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');
//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Заявка с тестового сайта';
$mail->Body    = "" .$name . " оставил заявку, его телефон " .$phone . ".<br> Размеры ворот: " .$width . "x" .$height . ".<br> Полотно: " .$type . ".<br> Встроенная калитка: " .$gateSmall . ".<br> Автоматизация: " .$automatic . ".<br> Необходимые работы: <br>" .$works[0] . "<br>" .$works[1] . "<br>" .$works[2] . ".<br> Стоимость заказа: " .$sum;// '<br>Почта этого пользователя: ' .$email;
$mail->AltBody = '';

if(!$mail->send()) {
    echo 'Error';
} else {
    header('location: form-lesson/thank-you.html');
}
?>