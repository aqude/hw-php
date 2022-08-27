<?php
// Задание №3 - Определение типа переменной.
$arr = [3.14, 3, 'one', true, null, [], null, []];

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
    echo match ($i) {
        is_bool($i) => "bool\n",
        is_float($i) => "float\n",
        is_int($i) => "int\n",
        is_string($i) => "string\n",
        is_null($i) => "null\n",
        default => "other\n",
    };
}