<!DOCTYPE html>
<html lang="en-ru">
<head>
    <meta charset="UTF-8">
    <title>Форма для отправки</title>
</head>
<?php
if (!empty($_FILES) || array_key_exists('test', $_FILES)) {//Проверяет наличее ключа в суперглобальной переменной
    move_uploaded_file($_FILES['test']['tmp_name'], 'PHPtest.json');//Загружает и переименовывает файл на сервер
    echo "<pre>";
    echo '<b>Файл загружен</b>';
} else {
    echo 'Файл не загружен';
}
?>
<body>
</body>
</html>
