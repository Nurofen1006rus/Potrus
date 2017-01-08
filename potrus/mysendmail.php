
<?php

require_once 'SendMailSmtpClass.php';
$mailSMTP = new SendMailSmtpClass('tarasov-alek-job@yandex.ru', 'c8qhbnre', 'ssl://smtp.yandex.ru', 'Новый ', 465);

// заголовок письма
$headers= "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset=utf-8\r\n"; // кодировка письма
$headers .= "From: POTRUS.RU <tarasov-alek-job@yandex.ru>\r\n"; // от ко$


$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$find_inc = $_POST['find_inc'];
$find_control = $_POST['find_control'];
$find_nastil = $_POST['find_nastil'];

//$message = $_POST['message'];

$new_message = 'Данные о заказе клиента: <br>Имя: '.$name. '<br>Телефон: '.$phone. '<br>Email: ' .$email. '<br>Тип ограждения: '.$find_inc.'<br> Cпособ управления: '.$find_control.'<br>Настил: '.$find_nastil;

$result =  $mailSMTP->send('polovinkin1962@mail.ru', 'Новый заказ с сайта POTRUS.RU', $new_message, $headers); // отправляем письмо
if($result === true){
    echo "send success";
}else{
    echo "send error" . $result;
}
/*
$result1 =  $mailSMTP->send('ilyasvistunov@yandex.ru', 'Письмо с сайта lss-dom.ru', $new_message, $headers); // отправляем письмо
if($result1 === true){
    echo "send access";
}else{
    echo "send error" . $result1;
}
*/

// заголовок письма
/*$headers= "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset=utf-8\r\n"; // кодировка письма
$headers .= "From: Site belkit.ru <Новый заказ на сайте>\r\n"; // от ко

$name = $_POST['name'];
$phone = $_POST['phone'];

//$message = $_POST['message'];




$new_message = 'Имя: '.$name. ',<br>телефон: '.$phone;

$result = mail('lexa@lapastilla.ru', "Сообщение с сайта ЛСС-Дом.ru", $new_message, $headers);

if($result) {
	echo "Письмо успешно отправлено";
} else {
	echo "Письмо не отправлено. Ошибка: " . $result;
}*/
