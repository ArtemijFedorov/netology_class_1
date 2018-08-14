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
    echo "<a href='test.php'><i>Тест №1</i></a>";
} else {
    echo 'Ты что-то сделал не так';
}
//var_dump($qestions);
?>
<p>Загрузить ещё тест?</p>
<form enctype="multipart/form-data" action ="list.php" method="POST">
    <div><input type="file" name="test1"></div>
    <input type="submit" value="Отправить">
</form>
<?php
if (!empty($_POST) || array_key_exists('test', $_POST)) {//Проверяет наличее ключа в суперглобальной переменной
    var_dump($_POST);
    move_uploaded_file($_POST['test1']['tmp_name'], 'PHPtest1.json');//Загружает и переименовывает файл на сервер
    echo "<pre>";
    echo '<b>Файл загружен</b>';

//    header("Location: list.php");
} else {
    echo 'Файл не загружен';
}
?>

</body>
</html>
