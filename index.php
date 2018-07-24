<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Lesson_FORM</title>
</head>
<body>
<form action="form.php" method="POST" enctype="multipart/form-data">
    <div>Имя</div>
    <div><input type="text" name="name"></div>

    <div>Фамилия</div>
    <div><input type="text" name="surname"></div>

    <div>Возраст</div>
    <div><input type="text" name="age"></div>

  <div>Аватар</div>
   <div><input type="file" name="avatar"></div>

    <input type="submit" value="Отправить">

</form>
<?php
if (!empty($_POST)){
    echo 'Имя: '.htmlspecialchars($_POST['name']).'<br/>';

    echo 'Фамилия: '.$_POST['surname'].'<br/>';

    if (array_key_exists('age', $_POST)) {
        $options = [
            'options' => [
                'min_range' => 18,
                'max_range' => 150
            ]
        ];

        $validate = filter_input(INPUT_POST, 'age', FILTER_VALIDATE_INT, $options);

        if ($validate) {
            echo 'Возраст: '.$validate.'<br/>';
        } else {
            echo 'Данные возраста введены не верно'.'<br/>';
        }
    }
}

if (!empty($_FILES) || array_key_exists('avatar', $_FILES)) {
    move_uploaded_file($_FILES['avatar']['tmp_name'], '1.jpg');
    echo '<img src= "1.jpg"/>';
} else {
    echo 'Проблема здесь';
}
?>

</body>

</html>