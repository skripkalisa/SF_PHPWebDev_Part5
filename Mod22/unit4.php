<!-- Оператор цикла WHILE -->

<?php
echo "Оператор цикла WHILE <br />";

$i = 1; // задать начальное значение 1 переменной $i 


// выполнять код ниже до тех пор пока значение $i будет меньше или равно 10
while ($i <= 10) {
    echo $i . PHP_EOL; // вывести текущее значение $i и сделать переход на следующую строчку
    $i++; // увеличить значение $i на 1
}

echo "<br/>";
echo "Оператор цикла DO-WHILE <br/>";

// Оператор цикла DO-WHILE

/*
Синтаксис:

do {
  код для выполнения;
} while (условие);

Пример использования:

<?php
*/

$i = 1; // задать начальное значение 1 переменной $i


// сперва выполнить код в блоке do, а потом проверить условие $i <= 10
do {
  echo $i . PHP_EOL; // вывести текущее значение $i и сделать переход на следующую строчку
  $i++; // увеличить $i на 1
} while ($i <= 10);

echo "<br/>";
echo "Оператор цикла FOR <br/>";
/* 
Оператор цикла FOR

Синтаксис:

for (инициализация; условие; инкремент) {
  код для выполнения;
}
*/


// $i = 1 начальное значение переменной $i
// $i <= 10 условие
// $i++ увеличивает $i на один после выполнения каждого шага цикла
for ($i = 1; $i <= 10; $i++) {
  echo $i; // выводит текущее значение $i
}

echo "<br/>";
echo "Оператор BREAK <br/>";
/* 
Оператор BREAK

break завершает выполнение текущей структуры for, foreach, while, do-while или switch.

Пример использования:

<?php
*/
$array = ['один', 'два', 'три', 'стоп', 'четыре'];

for ($i = 0; $i < sizeof($array); $i++) {
  if ($array[$i] == 'стоп') {
    break; // Выйти из цикла
  }
  
  echo $array[$i] . PHP_EOL;
}



echo "<br/>";
echo "Оператор CONTINUE <br/>";


/* 
Оператор CONTINUE

Оператор continue не завершает выполнение текущей структуры, но пропускает текущую итерацию. А также принимает необязательный числовой аргумент, который сообщает, сколько уровней замкнутых циклов следует пропустить до конца. Значение по умолчанию равно 1, что позволяет перейти к концу текущего цикла.

Пример использования:

<?php */

$array = [1, 2, 3, 4, 5, 6, 7];

for ($i = 0; $i < sizeof($array); $i++) {
    if (!($array[$i] % 2)) {
    echo "Пропускаем четное $array[$i]\n <br />";
        continue; // Пропустить текущий шаг цикла
    }
    
    echo "Берем нечетное $array[$i]\n <br />";
}