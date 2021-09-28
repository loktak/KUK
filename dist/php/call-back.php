<?php

require_once "../vendor/autoload.php";
require_once "init.php";

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    die('не пост');
}

if ($_POST['form-title'] === 'spam') {
    die('cпам');
}
try {
    $transport = (new Swift_SmtpTransport("smtp.yandex.ru", 465))
    ->setUsername("request-from-your-site@yandex.ru")
    ->setPassword('cqmsyloljhnybuqf')
    ->setEncryption('ssl');

$mailer = new Swift_Mailer($transport);

$data = [];

$data = $_POST;
foreach ($data as $key => $value) {
    $data[$key] = htmlspecialchars(trim($value));
}

$mail = include_template_2('mail.php', [
    'data' => $data
]);

$message = (new Swift_Message('Заявка с сайта: kraski.k-inver.ru'))
    ->setFrom(['request-from-your-site@yandex.ru' => 'Сайт kraski.k-inver.ru'])
    ->setTo(['spirinars@yandex.ru', 'kraski@k-inver.ru' => 'Менеджеру'])
    ->setBody($mail, 'text/html');

$result = $mailer->send($message);


} catch (Exception $e) {
    echo $e->getMessage();
  }
