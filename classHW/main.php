<?php
require __DIR__ . '/methods/autoload.php';
$car = new car();$tw = new tw();$student = new student();$method = new methods();$pri = new printMethod();
do {
    $pri->printInformation();
    $answer = trim(fgets(STDIN));
    switch ($answer) {
        case 1:
            $method->getInfo($car->properties);
            break;
        case 2:
            $method->getarr($student->properties);
            break;
        case 3:
            $method->getarr($tw->properties);
            break;
        case 0:
            echo 'До свидания!';
            break;
        default:
            echo 'Неверный ввод!'.PHP_EOL;
            break;
    }
} while ($answer != 0);
?>
