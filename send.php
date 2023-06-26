<?php header('Content-Type: text/html; charset=utf-8');

if(isset($_POST['name']) && !empty($_POST['name'])) {
$to = '5565486@mail.ru';
$subject = 'Сообщение с сайта '.$_SERVER['SERVER_NAME'];
$charset = "utf-8";
$headerss ="Content-type: text/html; charset=$charset\r\n";
$headerss.="Date: ".date('D, d M Y h:i:s')."\r\n";
$msgotprav = 'Name: '.$_POST['name'].'<br>Phone: '.$_POST['phone'].'<br>Email: '.$_POST['email'].'<br>City: '.$_POST['city'].'<br>Feedback: '.$_POST['feedback'];
$msgotprav .= '<br><br>Отправлено со страницы: '.$_SERVER['HTTP_REFERER'];
mail($to, $subject, $msgotprav, $headerss);
echo 'MF000';
}
?>