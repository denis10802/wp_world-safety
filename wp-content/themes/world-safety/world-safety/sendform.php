<?php
$name = trim($_POST['username']);
$phone = trim($_POST['phone']);
$email = trim($_POST['email']);
$massage = trim($_POST['message']);
$fromMail = 'world-safety@xn--90anlr.xn--p1ai'; //Почта отправителя
$fromName = 'Поступила заявка с сайта'; //Заголовок письма
$emailTo = 'Mir-BezopasnostiRB@yandex.ru'; //Ваша почта
$subject = 'Форма обратной связи с сайта мирб.рф';
$subject = '=?utf-8?b?'. base64_encode($subject) .'?=';
$headers = "Content-type: text/plain; charset=\"utf-8\"\r\n";
$headers .= "From: ". $fromName ." <". $fromMail ."> \r\n";

// Содержимое письма
$body = "Получено письмо с сайта \nИмя: $name\nТелефон: $phone\nПочта: $email\nСообщение от заказчика: $massage";

// сообщение будет отправлено в случае, если поле с номером телефона не пустое
if (strlen($email) > 0 || strlen($phone) > 0) {
    $mail = mail($emailTo, $subject, $body, $headers, '-f'. $fromMail );
    return;
}