<?php

$arr = [];
function check(array $arr) {
    if (count($arr)) {
        echo 'Ваш список покупок: ' . PHP_EOL;
        echo implode("\n", $arr) . "\n";
    } else {
        echo 'Ваш список покупок пуст.' . PHP_EOL;
    }
}
function add(array $arr)
{
    do {
        check($arr);
        echo 'Введите число: ';
        $num = trim(fgets(STDIN));
        if ($num == 0) {
            break;
        }
        $arr[] = $num;
    } while (is_numeric($num));
}
do {
    system('cls');
    add($arr);

} while ($num = 0);