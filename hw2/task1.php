<?php
$stdin = fopen('php://stdin', 'r');
// проверить на int stdin
$inputA = fgets($stdin);
$inputB = fgets($stdin);
if (is_numeric($inputA) && is_numeric($inputB))
    if ($inputA != 0 && $inputB != 0)
    {
        $a = (int)$inputA;
        $b = (int)$inputB;
        $c = $a / $b;
        echo $c;
    }
    else
    {
        echo "Деление на 0";
    }
else
    echo "Введите, пожалуйста, число!";

fclose($stdin);
