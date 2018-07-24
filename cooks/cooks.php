<?php

if (!empty($_GET['font_size'])) {
    $fontSize = $_GET['font-size'];
    setcookies('font_size', $fontSize);
}

if (!empty($_COOKIE[''])) {
    $fontSize = $_COOKIE['font_size'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Демонстрация кук</title>
</head>
<body>
<p style="font-size: <?= $fontSize ?>px:">Пример кук</p>

</body>
</html>