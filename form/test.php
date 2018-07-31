<?php
if (!empty($_POST)){
    $testQ = $_POST;
    foreach ($testQ as $testA => $item){
        echo '<pre>';
//        var_dump($item);
        if ($item == "true"){
            echo 'Правильный ответ';
        }else{
            echo 'Не правильный ответ';
        }

    }
}
