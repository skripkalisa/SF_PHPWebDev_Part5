<!-- 
Рекурсия
Существует два типа рекурсии: прямая и косвенная.

Прямая рекурсия представляет собой функцию вызывающую саму себя.

Косвенная рекурсия — функция в цикле вызовов функций, которая в конечном итоге вызывает себя. Важно их отличать, но мы
не будем заострять внимание на косвенной рекурсии.

-->

<!-- Пример использования прямой рекурсии: -->

<?php
echo "Пример использования прямой рекурсии: <br/>";
function echoRepeat($text, $count) {
  if ($count <= 0) {
    return false; // Остановить выполнение функции
  }
  
  echo "$text ($count) \n <br />";
  
  $count--; // Это то же самое что и “$count = $count - 1;”
  echoRepeat($text, $count);
}

echoRepeat("Текст\n", 3);
/* 
Пример использования косвенной рекурсии:

<?php
*/
echo "<br/>";
echo "Пример использования косвенной рекурсии: <br/>";

callA(20);

function callA(int $n)
{
  if ($n > 0) {
    echo($n . PHP_EOL);
    callB($n - 1);
  }
}

function callB(int $n)
{
    if ($n > 1) {
      echo($n . PHP_EOL);
      callA($n / 2);
    }
  }
  /* 
  Пример использования прямой рекурсии для бинарного поиска:
  
  <?php
  */
  echo "<br/>";
  echo "Пример использования прямой рекурсии для бинарного поиска: <br/>";
  
  function binarySearch(Array $arr, $start, $end, $x) {
    if ($end < $start) {
      return false;
    }
    
  $mid = floor(($end + $start) / 2);

  if ($arr[$mid] == $x) {
  return true;
  } elseif ($arr[$mid] > $x) {
  return binarySearch($arr, $start, $mid - 1, $x);
  } else {
  return binarySearch($arr, $mid + 1, $end, $x);
  }
}



$arr = ['cat', 'car', 'home', 'coffee', 'movies'];
$arrSize = count($arr); // Посчитать размер массива для задания количества повторении рекурсии


// Вывести массив из которого будет происходить поиск на экран
echo('$arr = ');
print_r($arr);

$valueToFind = 'home';
// $valueToFind = readline('Какое значение вы хотите найти в "$arr"? ');

if (binarySearch($arr, 0, $arrSize - 1, $valueToFind) === true) {
    echo "$valueToFind найдено в \$arr";
} else {
    echo "$valueToFind не найдено в \$arr";
}