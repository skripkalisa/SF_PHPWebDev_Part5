<?php

$randomInt = random_int(0, 2); // Функция random_int возвращает случайное int число в заданном диапазоне

if ($randomInt === 0) {
    $result = 'Выполнить блок А';
} elseif ($randomInt === 1) {
    $result = 'Выполнить блок Б';
} else {
    $result = 'Выполнить блок В';
}

echo $result;

$test = 'true';

if ($test) {
    echo 'Это сообщение выведется.';
}

if ($test === true) {
    echo 'Это сообщение нет.';
}