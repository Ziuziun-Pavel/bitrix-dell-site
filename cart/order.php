<?php

// получаем данные заказа из POST-запроса
// Когда будут реальные данные
//$name = $_POST['name'];
//$phone = $_POST['phone'];
//$email = $_POST['email'];
//$products = $_POST['products'];
//$total = $_POST['total'];

$name = 'Заглушка';
$phone = 'Заглушка';
$email = 'Заглушка';
$data = $_POST['data'];

// формируем текст письма с информацией о заказе
$message = "Имя: $name\n";
$message .= "Телефон: $phone\n";
$message .= "Email: $email\n\n";
$message .= "Товары:\n";

// отправляем письмо на указанный email
$to = 'zuzunpavel@mail.com'; // адрес, на который будет отправлен заказ
$subject = 'Новый заказ'; // тема письма
$headers = "From: $email\r\n" .
    "Reply-To: $email\r\n" .
    "X-Mailer: PHP/" . phpversion(); // заголовки письма
mail($to, $subject, $message, $headers);

// отправляем ответ клиенту
echo 'success';

