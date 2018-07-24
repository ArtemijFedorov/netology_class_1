<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Форма для отправки</title>
</head>
<body>
<form enctype="multipart/form-data" action="list.php" method="POST">
    <div>Ты начинаешь свой путь в бездну! Ты готов пройти тест по PHP?</div>
    <div><input type="file" name="test"></div>

    <input type="submit" value="Отправить">

</form>
</body>
