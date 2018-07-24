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
<<<<<<< HEAD
    $json = file_get_contents("{$link}id=$city_id&lang=$lang&units=$units&APPID=$key");
=======
    $json = file_get_contents("$link" ."id=$city_id&lang=$lang&units=$units&APPID=$key");
>>>>>>> c6b3aae004f5f86cee6ff883a80c64fb0c775762
    if ($json === false) {
        exit('Не удалось получить данные');
    }
    $data = json_decode($json, true)or exit('Ошибка декодирования json');
<<<<<<< HEAD
    $description = $data['weather'][0]['description'];
    $gorod = checkData($data['name']);
    $temp = checkData($data['main']['temp']);
    $speed = checkData($data['wind']['speed']);
    $napr = checkData($data['wind']['deg']);
    $humidity = checkData($data['main']['humidity']);
    $pressure = checkData($data['main']['pressure']);
    $icon = checkData($data['weather'][0]['icon']);
=======
    $opisanie = $data['weather'][0]['description'];
    $gorod = $data['name'];
    $temp = $data['main']['temp'];
    $speed = $data['wind']['speed'];
    $napr = $data['wind']['deg'];
    $humidity = $data['main']['humidity'];
    $pressure = $data['main']['pressure'];
    $iconka = $data['weather'][0]['icon'];
>>>>>>> c6b3aae004f5f86cee6ff883a80c64fb0c775762
    function checkData($data) { if (empty($data)) {
        return 'не удалось получить данные'; }

        return $data;
    }
    ?>
<<<<<<< HEAD
    <div class="weatherItem even day" style="background-image: url(/icon/<?php echo $icon;?>.png); background-repeat: no-repeat;">
        <div class="weatherCity"><?php echo $gorod;?></div>
        <div class="weatherTemp"><?php echo $temp;?></div>
        <div class="weatherDesc"><?php echo $description;?></div>
=======
    <div class="weatherItem even day" style="background-image: url(/icon/<?php echo $iconka;?>.png); background-repeat: no-repeat;">
        <div class="weatherCity"><?php echo $gorod;?></div>
        <div class="weatherTemp"><?php echo $temp;?></div>
        <div class="weatherDesc"><?php echo $opisanie;?></div>
>>>>>>> c6b3aae004f5f86cee6ff883a80c64fb0c775762
        <div class="weatherRange">Вет: <?php echo $speed;?> Напр: <?php echo $napr;?>°</div>
        <div class="weatherPressure">Атмосферное давление: <?php echo $pressure;?></div>
        <div class="weatherHumidity">Влажность воздуха: <?php echo $humidity;?> % </div>
    </div>

</body>
</html>
