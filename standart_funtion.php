
<div class="slide-result">
    <?php
    $key = '20113cf214aeddf376ff03e5dde39062';
    $city_id = '529334';
    $lang ='ru';
    $units = 'metric';
    $json = file_get_contents('http://api.openweathermap.org/data/2.5/weather?'."id=$city_id&lang=$lang&units=$units&APPID=$key");
    $data = json_decode($json, true);
    $opisanie = $data['weather'][0]['description'];
    $gorod = $data['name'];
    $temp = $data['main']['temp'];
    $speed = $data['wind']['speed'];
    $napr = $data['wind']['deg'];
    $humidity = $data['main']['humidity'];
    $pressure = $data['main']['pressure'];
    $iconka = $data['weather'][0]['icon'];
    ?>
    <div class="weatherItem even day" style="background-image: url(/icon/<?php echo $iconka;?>.png); background-repeat: no-repeat;">
        <div class="weatherCity"><?php echo $gorod;?></div>
        <div class="weatherTemp"><?php echo $temp;?></div>
        <div class="weatherDesc"><?php echo $opisanie;?></div>
        <div class="weatherRange">Вет: <?php echo $speed;?> Напр: <?php echo $napr;?>°</div>
        <div class="weatherPressure">Атмосферное давление: <?php echo $pressure;?></div>
        <div class="weatherHumidity">Влажность воздуха: <?php echo $humidity;?> % </div>
    </div>

    <style>
        .even {
            background-color: rgba(0,0,0,0.4);
        }
        .weatherItem {
            padding: 0.8em;
            text-align: right;
            color: #fff;
            float: left;
            width: 15%;
            margin-right: 10px;
        }
        .weatherDesc, .weatherCity, .weatherForecastDay {
            font-weight: 600;
        }
        .weatherCity {
            text-transform: uppercase;
        }
        .weatherTemp {
            font-size: 28px;
            font-weight: 900;
        }
        .weatherDesc {
            margin-bottom: 0.4em;
        }
        .weatherRange, .weatherWind, .weatherLink, .weatherForecastItem {
            font-size: 0.8em;
        }
        .weatherLink, .weatherForecastItem {
            margin-top: 0.5em;
            text-align: left;
        }
    </style>
