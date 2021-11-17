<!-- Перехват исключений -->

<!-- Пример использования: -->

<?php

$dividend = 10; // делимое
$divisor = 0; // делитель

try {
    $result = intdiv($dividend, $divisor);
    echo "$dividend / $divisor = $result";
} catch (DivisionByZeroError $error) {
    throw new Exception("Отловили: $error\n\n Немедленная остановка программы.");
    echo '-> Это сообщение никогда не будет выведено.';
}

echo "\n Программа завершена успешно.";