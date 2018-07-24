<?php
if (!empty($_POST)){
    if (array_key_exists('age', $_POST)) {
        $options = [
            'options' => [
                'min_range' => 18,
                'max_range' => 150
            ]
        ];

        $validate = filter_input(INPUT_POST, 'age', FILTER_VALIDATE_INT, $options);

        if ($validate) {
            echo 'Возраст: ' .$validate;
        } else {
            echo 'Данные введены не верно';
        }
    }
}

echo htmlspecialchars($_POST['name']);
echo "<pre>";
echo $_POST['surname'];