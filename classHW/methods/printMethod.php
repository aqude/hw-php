<?php

class printMethod
{
    function printInformation(): void {
        system('cls');
        echo 'Откуда ходите получить данные? (1-3)'.PHP_EOL;
        echo '1. Машины'.PHP_EOL;
        echo '2. Студенты'.PHP_EOL;
        echo '3. Телепередачи'.PHP_EOL;
        echo '0. Выход'.PHP_EOL;
    }
}