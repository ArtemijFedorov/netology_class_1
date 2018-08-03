<!DOCTYPE html>
<html lang="en-ru">
<head>
    <meta charset="UTF-8">
    <title>Тест по PHP</title>
</head>

<?php

$download = file_get_contents(__DIR__ . '/PHPtest.json');
$qestions = json_decode($download,true);
if (!empty(is_array($qestions))) {
    echo 'Всё ок!';
} else {
    echo 'Ты что-то сделал не так';
}
//var_dump($qestions);
?>
<body>
<form action="test.php" method="POST">
    Имя:
    <input name="username">
    <?php  foreach ($qestions as $qestion => $qest){
        foreach ($qest as $item => $value )
//        echo '<pre>';
//        var_dump($value);
            ?>
            <fieldset>
            <legend><?php echo $qest ['legend'];?></legend>
        <label><input type="radio" name="<?php echo $qest ['qest5'];?>" value="<?php echo $value['answer1'];?>"> <?php echo $qest ['qest1'];?></label>
        <label><input type="radio" name="<?php echo $qest ['qest5'];?>" value="<?php echo $value['answer2'];?>"> <?php echo $qest ['qest2'];?></label>
        <label><input type="radio" name="<?php echo $qest ['qest5'];?>" value="<?php echo $value['answer3'];?>"> <?php echo $qest ['qest3'];?></label>
        <label><input type="radio" name="<?php echo $qest ['qest5'];?>" value="<?php echo $value['answer4'];?>"> <?php echo $qest ['qest4'];?></label>
        </fieldset>
    <?php } ?>
    <input type="submit" value="Отправить">
</form>
</body>
</html>
