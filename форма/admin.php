<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Форма для отправки</title>
</head>
<body>
<form enctype="multipart/form-data" action="admin.php" method="POST">
    <div>Ты начинаешь свой путь в бездну! Ты готов пройти тест по PHP?</div>
    <div><input type="file" name="test"></div>
<!--    <img src="http://university.netology.ru/u/fedorov/FedorovAO/test.json">-->

    <input type="submit" value="Отправить">

</form>

<?php
if (!empty($_FILES) || array_key_exists('test', $_FILES)) {
    move_uploaded_file($_FILES['test']['tmp_name'], 'test1.json');
//    var_dump( '<img src= "test1.json"/>');
    $download = file_get_contents(__DIR__ . '/test1.json');
    echo '<pre>';
    var_dump($download);
} else {
    echo 'Проблема в том, что тест не загружен';
}
$fileDecode = json_decode($download,true);
//if (!empty(is_array($fileDecode))) {
//    echo 'Всё ок!';
//} else {
//    echo 'Ты что-то сделал не так';
//}
var_dump($fileDecode);

foreach ($qestions as $qestion => $qest){
}
//var_dump($qest);
var_dump($qestions);

?>
<form action="test.php" method="POST">
    <fieldset>
        <legend><?php echo $qest ['legend'];?><</legend>
        <label><input type="radio" name="q1"> <?php echo $qest ['qest1'];?></label>
        <label><input type="radio" name="q1"> <?php echo $qest ['qest2'];?></label>
        <label><input type="radio" name="q1"> <?php echo $qest ['qest3'];?></label>
        <label><input type="radio" name="q1"> <?php echo $qest ['qest4'];?></label>
    </fieldset>
    <fieldset>
        <legend><?php echo $qest ['legend'];?></legend>
        <label><input type="radio" name="q2"> <?php echo $qest ['qest1'];?></label>
        <label><input type="radio" name="q2"> <?php echo $qest ['qest2'];?></label>
        <label><input type="radio" name="q2"> <?php echo $qest ['qest3'];?></label>
        <label><input type="radio" name="q2"> <?php echo $qest ['qest4'];?></label>
    </fieldset>
    <fieldset>
        <legend><?php echo $qest ['legend'];?></legend>
        <label><input type="radio" name="q3"> <?php echo $qest ['qest1'];?></label>
        <label><input type="radio" name="q3"> <?php echo $qest ['qest2'];?></label>
        <label><input type="radio" name="q3"> <?php echo $qest ['qest3'];?></label>
        <label><input type="radio" name="q3"> <?php echo $qest ['qest4'];?></label>
    </fieldset>
    <input type="submit" value="Отправить">
</form>
</body>
</html>


