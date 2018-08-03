<?php
if (empty($_POST['username'])) {
    http_response_code(400);
    echo 'Укажите ваше имя';}
    $name = 'Привет '. $_POST['username']. ' !';
if (!empty($_POST)){
//    $testQ = $_POST;
    foreach ($_POST as $testA){
        echo '<pre>';
//        for ($i; $qes = count($testA['true']); $qes > 2, ++$i){
//            echo 'Вы не прощли этот тест!';
//        }
//        var_dump($_POST);
        if ($testA == "true"){
            echo 'Ответ: ' . ' +';
        }elseif ($testA == $_POST['username']){
            echo "<b>$name</b>";
        }else{

            echo 'Ответ: ' . ' -';
        }

    }

}
//echo '<pre>';
//var_dump($_POST);
//echo '<pre>';
//var_dump($testA);
//for ($i; $qes = count($_POST['true']); $qes !== 2, ++$i){
//    echo 'Вы не прощли этот тест!';
//}
//
?>
<html>
<body>
