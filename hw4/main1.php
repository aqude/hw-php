<?php
declare(strict_types=1);
const OPERATION_EXIT = 0;
const OPERATION_ADD = 1;
const OPERATION_DELETE = 2;
const OPERATION_PRINT = 3;
$operations = [
    OPERATION_EXIT => OPERATION_EXIT . '. Завершить программу.',
    OPERATION_ADD => OPERATION_ADD . '. Добавить товар в список покупок.',
    OPERATION_DELETE => OPERATION_DELETE . '. Удалить товар из списка покупок.',
    OPERATION_PRINT => OPERATION_PRINT . '. Отобразить список покупок.',
];
$items = [];
function checkItems(array $items): void
{
//    system('cls');
    if (count($items)) {
        echo 'Ваш список покупок: ' . PHP_EOL;
        echo implode("\n", $items) . "\n";
    } else {
        echo 'Ваш список покупок пуст.' . PHP_EOL;
    }
}
function operationSelect(array $operations, array $items): string
{
    do {
        checkItems($items);
        echo 'Выберите операцию для выполнения: ' . PHP_EOL;
        // Проверить, есть ли товары в списке? Если нет, то не отображать пункт про удаление товаров
        echo implode(PHP_EOL, $operations) . PHP_EOL . '> ';
        $operationNumber = trim(fgets(STDIN));

        if (!array_key_exists($operationNumber, $operations)) {
            system('cls');

            echo '!!! Неизвестный номер операции, повторите попытку.' . PHP_EOL;
        }

    } while (!array_key_exists($operationNumber, $operations));
    return $operationNumber;
}
function operationAdd(array &$items): array {
    echo "Введение название товара для добавления в список: \n> ";
    $itemName = trim(fgets(STDIN));
    $items[] = $itemName;
    return $items;
    echo "Товар $itemName добавлен в список покупок.\n";
}
function operationDelete(array &$items): array {
    if (!count(array($items))) {
        echo "Ваш список покупок пуст.\n";
    } else {
        echo "Введите название товара для удаления из списка: \n> ";
        $itemName = trim(fgets(STDIN));
        $key = array_search($itemName, $items);
        if ($key !== false) {
            unset($items[$key]);
        } else {
            echo "Товара с таким названием нет в списке.\n";
        }
    }
    return $items;
}
function operationPrint(array $items): void {
    checkItems($items);
}



do {
    $operationNumber = operationSelect($operations, $items);
        echo 'Выбрана операция: ' . $operations[$operationNumber] . PHP_EOL;
        switch ($operationNumber) {
            case OPERATION_ADD:
                operationAdd($items);
                break;

            case OPERATION_DELETE:
                operationDelete($items);
                break;

            case OPERATION_PRINT:
                operationPrint($items);
                break;
        }
        echo "\n ----- \n";
    } while ($operationNumber > 0);
echo 'Программа завершена' . PHP_EOL;