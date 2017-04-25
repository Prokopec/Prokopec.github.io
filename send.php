<?php
//Принемаем постовые данные
$name=$_POST['name'];
$phone=$_POST['phone'];
$what=$_POST['what'];
// Здесь указываем Email на который отправляем
$to = "S.Prokopec@i.ua";
//Далее идет тема и само сообщение
$subject = "Внимание! Заявка с сайта ХХХ.ХХ"ж
$message = "";
Письмо отправлено из моей формы.<br/>
Клиент спрашивает: "htmlspecialchars($what)". <br/>
Имя: "htmlspecialchars($name)". <br/>
Телефон: "htmlspecialchars($phone).";
$headers = "From mysite.ru <site-email@mysite.ru>\r\nContent-type: text/html; charset=utf-8 \r\n";
mail ($to, $subject, $message, $headers);
header('Location: thanks.html');
exit();
?>