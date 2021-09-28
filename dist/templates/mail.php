<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>

<body>
    <p style="font-size:20px; font-family:sans-serif; margin:0px; background-color:#0176bc; color:white; padding: 12px 15px;"><b></b><?= $data['form-title'] ?></b></p>
    <div style="background-color:#e7e7e8; padding:20px 15px;">
        <p style="font-size:20px; margin:0;"><b>Имя: </b><?= $data['name'] ?></p>
        <p style="font-size:20px;margin:0;margin-top:20px;"><b>Телефон: </b><?= $data['phone'] ?></p>
        <p style="font-size:20px;margin:0;margin-top:20px;"><b>Электронная почта: </b><a style="color: blue; font-weight: bold; text-decoration: none" href="mailto:<?= $data['email'] ?>"><?= $data['email'] ?></a></p>
        <?php if(!empty($data['message'])): ?>
        <p style="font-size:20px;margin:0;margin-top:20px;"><b>Сообщение: </b><?= $data['message'] ?></p>
        <?php endif ?>
        <p style="font-size:20px; margin:0;margin-top:20px;">
            Клиент ждет звонка в ближайшее рабочее время!
        </p>
    </div>
</body>
