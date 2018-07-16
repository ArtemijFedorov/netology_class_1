<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Форма для отправки</title>
</head>
<body>
<?php
//$url = ;
//$test = file_get_contents($url);
//var_dump($test);
?>
<form action="list.php" method="post" enctype="multipart/form-data">
    <div>Ты начинаешь свой путь в бездну! Ты готов пройти тест по PHP?</div>
    <div><input type="hidden" name="test_yes" value="<?= $test?>">Давай рискнём<Br></div>
   <div><input type="radio" name="test_no">Нет, давай лучше в PUBG<Br></div>

    <input type="submit" value="Отправить">

</form>
<?php
//$array = [
//'compilerOptions'=>[
//'module'=> "commonjs",
//"target": "es5",
//"sourceMap": true
//],
//"exclude": [
//"node_modules"
//];
//echo $array;
////"http://university.netology.ru/u/fedorov/FedorovAO/test.json"
//?>
</body>


