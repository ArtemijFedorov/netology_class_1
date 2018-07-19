<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Домашняя работа по теме стандартные функции PHP</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
<div class="slide-result">
    <?php
    $key = '20113cf214aeddf376ff03e5dde39062';
    $city_id = '529334';
    $lang ='ru';
    $units = 'metric';
    $link = 'http://api.openweathermap.org/data/2.5/weather?';
    $json = file_get_contents("$link" ."id=$city_id&lang=$lang&units=$units&APPID=$key");
    if ($json === false) {
        exit('Не удалось получить данные');
    }
    $data = json_decode($json, true)or exit('Ошибка декодирования json');
    $opisanie = $data['weather'][0]['description'];
    $gorod = $data['name'];
    $temp = $data['main']['temp'];
    $speed = $data['wind']['speed'];
    $napr = $data['wind']['deg'];
    $humidity = $data['main']['humidity'];
    $pressure = $data['main']['pressure'];
    $iconka = $data['weather'][0]['icon'];
    function checkData($data) { if (empty($data)) {
        return 'не удалось получить данные'; }

        return $data;
    }
    ?>
    <div class="weatherItem even day" style="background-image: url(/icon/<?php echo $iconka;?>.png); background-repeat: no-repeat;">
        <div class="weatherCity"><?php echo $gorod;?></div>
        <div class="weatherTemp"><?php echo $temp;?></div>
        <div class="weatherDesc"><?php echo $opisanie;?></div>
        <div class="weatherRange">Вет: <?php echo $speed;?> Напр: <?php echo $napr;?>°</div>
        <div class="weatherPressure">Атмосферное давление: <?php echo $pressure;?></div>
        <div class="weatherHumidity">Влажность воздуха: <?php echo $humidity;?> % </div>
    </div>

</body>
</html>
