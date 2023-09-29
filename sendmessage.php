<?php


$to = "9104007600@mail.ru";


$umane =  $_POST['uname'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$desire = $_POST['desire'];
$forma = $_POST['forma'];


$subject  = "Заявка с сайта";	
$headers  = "From: <info@dohouse.ru>" . "\r\n";
$headers .= "Reply-To: info@dohouse.ru".  "\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html;charset=utf-8 \r\n";
// Формирование тела письма
$msg  = "<html><body>";
$msg .= "<p><strong>ФИО:</strong> ".$uname."</p>\r\n";
$msg .= "<p><strong>Телефон:</strong> ".$phone."</p>\r\n";
$msg .= "<p><strong>Почта:</strong> ".$email."</p>\r\n";
$msg .= "<p><strong>Пожелания:</strong> ".$desire."</p>\r\n";
$msg .= "<p><strong>Форма:</strong> ".$forma ."</p>\r\n";
$msg .= "</body></html>";


// отправка сообщения
@mail($to, $subject, $msg, $headers);

?>