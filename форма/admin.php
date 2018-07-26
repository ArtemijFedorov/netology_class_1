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
if (!empty($_FILES) || array_key_exists('test', $_FILES)) {//Проверяет наличее ключа в суперглобальной переменной
    move_uploaded_file($_FILES['test']['tmp_name'], 'PHPtest.json');//Загружает и переименовывает файл на сервер
    echo "<pre>";
    echo '<b>Файл загружен</b>';
} else {
    echo 'Файл не загружен';
}
?>
</body>
</html>

