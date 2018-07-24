<!DOCTYPE html>
<html lang="en-ru">
<head>
    <meta charset="UTF-8">
    <title>Форма для отправки</title>
</head>
<?php
$url = "$_POST";
$json = file_get_contents($url);
$qestions = json_decode($json,true);
foreach ($qestions as $qestion => $qest){
    var_dump($qest);
}?>
<body>

<div>
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
</div>
</body>
</html>

<?php
if (!empty($_FILES) || array_key_exists('test', $_FILES)) {
    move_uploaded_file($_FILES['te']['tmp_name'], '1.jpg');
    var_dump($_FILES);
} else {
    echo 'Проблема здесь';

}
//    if (array_key_exists('test_PHP', $_POST)) {
//        $options = [
//            'options' => [
//                'min_range' => 18,
//                'max_range' => 150
//            ]
//        ];
//
//        $validate = filter_input(INPUT_POST, 'age', FILTER_VALIDATE_INT, $options);
//
//        if ($validate) {
//            echo 'Возраст: ' .$validate;
//        } else {
//            echo 'Данные введены не верно';
//        }
//    }
//}
//
//echo htmlspecialchars($_POST['name']);
//echo "<pre>";
//echo $_POST['surname'];
//var_dump($_FILES);