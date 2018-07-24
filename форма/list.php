<!DOCTYPE html>
<html lang="en-ru">
<head>
    <meta charset="UTF-8">
    <title>Форма для отправки</title>
</head>
<?php
//$url = $_FILES;
////echo "<pre>";
////var_dump($_FILES);
//$json = file_get_contents($url);
//$qestions = json_decode($json,true);
if (!empty($_FILES) || array_key_exists('test', $_FILES)) {
    move_uploaded_file($_FILES['test']['tmp_name'], 'PHPtest.json');
    echo "<pre>";

   // var_dump(file_get_contents("PHPtest.json"));
} else {
    echo 'Файл не загружен';
}
$url = "PHPtest.json";
$json = file_get_contents($url);
$qestions = json_decode($json,true);
//var_dump($qestions);
foreach ($qestions as $qestion => $qest){
    var_dump($qest);
}
//var_dump($qestions);
?>
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
            <legend>Каким символом осуществляется конкотинация?</legend>
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
</html>
