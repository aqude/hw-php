<?php
// Задание №2 - Знакомство с документацией.
echo "1: ";
echo "Name: " . basename(__FILE__, ".php") . " \n";
echo "String: " . __LINE__ . "\n";

echo "2: ";
$str = <<<EOD

h
    e
        l
            l
                o
                    !
                    
EOD;
echo $str;

echo "\n3: ";
$fish='Рыба';
$person='человек';
echo "$fish рыбою сыта, а $person человеком";