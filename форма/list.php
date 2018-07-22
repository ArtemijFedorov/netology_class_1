<!DOCTYPE html>
<html lang="en-ru">
<head>
    <meta charset="UTF-8">
    <title>Форма для отправки</title>
</head>
<?php
$url = $_FILES;
var_dump($_FILES);
$json = file_get_contents($url);
$qestions = json_decode($json,true);
foreach ($qestions as $qestion => $qest){
    var_dump($qest);
}?>
<body>
    <form action="test.php" method="POST">
        <fieldset>
            <legend>Каким символом объявляется переменная?</legend>
            <label><input type="radio" name="q1"> <?php echo $qest ['qest1'];?></label>
            <label><input type="radio" name="q1"> <?php echo $qest ['qest2'];?></label>
            <label><input type="radio" name="q1"> <?php echo $qest ['qest3'];?></label>
            <label><input type="radio" name="q1"> <?php echo $qest ['qest4'];?></label>
        </fieldset>
        <fieldset>
            <legend>Каким символом объявляется переменная?</legend>
            <label><input type="radio" name="q2"> <?php echo $qest ['qest1'];?></label>
            <label><input type="radio" name="q2"> <?php echo $qest ['qest2'];?></label>
            <label><input type="radio" name="q2"> <?php echo $qest ['qest3'];?></label>
            <label><input type="radio" name="q2"> <?php echo $qest ['qest4'];?></label>
        </fieldset>
        <fieldset>
            <legend>Какая функция возвращает длинну строки?</legend>
            <label><input type="radio" name="q3"> <?php echo $qest ['qest1'];?></label>
            <label><input type="radio" name="q3"> <?php echo $qest ['qest2'];?></label>
            <label><input type="radio" name="q3"> <?php echo $qest ['qest3'];?></label>
            <label><input type="radio" name="q3"> <?php echo $qest ['qest4'];?></label>
        </fieldset>
        <input type="submit" value="Отправить">
</body>
</html>
