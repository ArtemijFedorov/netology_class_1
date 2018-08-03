<?php
//Код генерации картинки
$image = imagecreatetruecolor(300, 300);

//RGB
$backColor = imagecolorallocate($image, random_int(1, 255), 254, 221);
$textColor = imagecolorallocate($image, 0, 255, 50);

$boxFile = __DIR__ . '/present1.png';
if (!file_exists($boxFile)) {
    echo 'Файл с картинкой не найден';
    exit;
}
$imBox = imagecreatefrompng($boxFile);

imagefill($image, 0, 0, $backColor);
imagecopy($image, $imBox, 10, 10, 0, 0, 256, 256);
imagepng($image); //после этой строки в браузер уходит картинка
// не имеет никакого значения что происходит тут
imagedestroy($image);
