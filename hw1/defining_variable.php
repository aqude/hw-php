<?php
// Задание №3 - Определение типа переменной.
$arr = [3.14, 3, 'one', true, null, []];

foreach ($arr as $i)
{
    if (is_bool($i))
    {
        echo "bool\n";
    }
    elseif (is_float($i))
    {
        echo "float\n";
    }
    elseif (is_int($i))
    {
        echo "int\n";
    }
    elseif (is_string($i))
    {
        echo "string\n";
    }
    elseif (is_null($i))
    {
        echo "null\n";
    }
    else
    {
        echo "other\n";
    }
}
echo "\n";
foreach ($arr as $i)
{
    switch ($i)
    {
        case is_bool($i):
            echo "bool\n";
            break;
        case is_float($i):
            echo "float\n";
            break;
        case is_int($i):
            echo "int\n";
            break;
        case is_string($i):
            echo "string\n";
            break;
        case is_null($i):
            echo "null\n";
            break;
        default:
            echo "other\n";
            break;
    }
}