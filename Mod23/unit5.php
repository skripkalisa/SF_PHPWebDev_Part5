<?php
// Массивы
// 
// Числовые массивы
/*
*
* В PHP можно определить несколько характеристик отдельных массивов:
*
* числовые (индексированные) массивы — массивы, в которых ключами являются числа;
* ассоциативные массивы — массивы, в которых ключами являются строки;
* одномерные массивы — массивы, которые не содержат в себе других массивов;
* многомерные массивы — массивы, которые содержат в себе другие массивы;
* рекурсивные массивы — массивы, которые содержат в себе ссылку на самих себя.
*
*/

$array = [1, 34, 'any'];

print_r ($array);

$fruits = ['apple', 'banana', 'orange'];

$fruits[0] = 'pineapple';
$fruits[13] = 'grape';

$fruits[] = 'coconut';

print_r ($fruits);

// -> Array
// -> (
// ->     [0] => pineapple
// ->     [1] => banana
// ->     [2] => orange
// ->     [13] => grape
// ->     [14] => coconut
// -> )


// Ассоциативные массивы

$favorite_fruits = ['Mike'=>'banana', 'Andrew'=>'orange', 'Ann'=>'grape'];

$favorite_fruits['MIKE'] = 'pineapple';

print_r($favorite_fruits);

// -> Array
// -> (
// ->     [Mike] => banana
// ->     [Andrew] => orange
// ->     [Ann] => grape
// ->     [MIKE] => pineapple
// -> )

// Многомерные массивы

$vacancies = [
    'developer'=> [
        'frontend-developer' => [
            'Junior Frontend разработчик (Яндекс)',
            'Middle Frontend разработчик (Авито)',
        ],
        'backend-developer' => [],
    ], 
    'tester' => [],
];

print_r($vacancies);

// -> Array
// -> (
// ->     [developer] => Array
// ->         (
// ->             [frontend-developer] => Array
// ->                 (
// ->                     [0] => Junior Frontend разработчик (Яндекс)
// ->                     [1] => Middle Frontend разработчик (Авито)
// ->                 )
// ->             [backend-developer] => Array()
// ->         )
// ->     [tester] => Array()
// -> )


// Операции над массивами

// count($array)

$names = [
    'Mike', 
    'Andrew', 
    'Alex', 
];

print_r(count($names));
// -> 3

// array_merge($a,$b)

$male_favorite_fruits = [
    'Mike' => 'banana', 
    'Andrew' => 'pineapple', 
    'Alex' => 'orange', 
];
$female_favorite_fruits = [
    'Alex' => 'cherry', 
    'Ann' => 'grape', 
];

print_r(array_merge($male_favorite_fruits, $female_favorite_fruits));

// -> Array
// -> (
// ->     [Mike] => banana
// ->     [Andrew] => pineapple
// ->     [Alex] => cherry
// ->     [Ann] => grape
// -> )

// Для числовых массивов произойдёт просто объединение массивов:

// array_combine($a,$b)

$persons = [
    'Mike', 
    'Andrew', 
    'Alex', 
];
$fruits = [
    'cherry', 
    'grape', 
    'banana', 
];

print_r(array_combine($persons, $fruits));

// -> Array
// -> (
// ->     [Mike] => cherry
// ->     [Andrew] => grape
// ->     [Alex] => banana
// -> )

// array_values($array)

$favorite_fruits = [
    'Mike' => 'banana', 
    'Andrew' => 'pineapple', 
    'Alex' => 'orange', 
];

print_r(array_values($favorite_fruits));

// -> Array
// -> (
// ->     [0] => banana
// ->     [1] => pineapple
// ->     [2] => orange
// -> )


// array_keys($array)

$favorite_fruits = [
    'Mike' => 'banana', 
    'Andrew' => 'pineapple', 
    'Alex' => 'orange', 
];

print_r(array_keys($favorite_fruits));

// -> Array
// -> (
// ->     [0] => Mike
// ->     [1] => Andrew
// ->     [2] => Alex
// -> )

// Работает и с числовыми массивами, и со смешанными

// array_flip($array)

$favorite_fruits = [
    'Mike' => 'banana', 
    'Andrew' => 'pineapple', 
    'Alex' => 'orange', 
];

print_r(array_flip($favorite_fruits));

// -> Array
// -> (
// ->     [banana] => Mike
// ->     [pineapple] => Andrew
// ->     [orange] => Alex
// -> )


// array_filter($array, $function)
// $function (должна возвращать true или false)


$student_marks = [
    'Alex' => [3, 5, 4, 3],
    'Ben' => [5, 5, 4, 5],
    'Helen' => [3, 5, 5, 5],
];

function markIsBad($mark)
{
    return $mark < 4;
}

function checkMarks($marks)
{
    $bad_marks = array_filter($marks, 'markIsBad');
    return !$bad_marks;
}

$excellentStudents = array_filter($student_marks, 'checkMarks');

print_r(array_keys($excellentStudents));

// -> Array
// -> (
// ->     [0] => [Ben]
// -> )

// array_unique($array)

$boysOfMaria = [
    'Alex',
    'Andy',
    'Alex',
    'Tony',
    'Alex',
    'Alex',
    'Tony',
    'Tony',
    'Tony',
    'Abdula',
    'Tony',
    'Tony',
];

$boys_names = array_unique($boysOfMaria);

print_r(count($boys_names));

// -> 4


// array_diff($a, $b)

$a = ['a' => '1', 'b' => '2', 'c' => '3'];
$b = ['a' => '1', 'b' => '3', 'D' => '3'];

print_r(array_diff($a, $b));

// -> Array
// -> (
// ->     [b] => 2
// -> )

// sort($a, $flags)

/* 
* функция сортирует переданный массив $a в соответствии с флагами из $flags и помещает результат в $a.
* 
* Эта функция присваивает новые ключи элементам array. Она удалит все существующие ключи, а не просто переупорядочит их.
* 
* Вторым параметром передаются флаги сортировки:
* 
*         SORT_REGULAR — обычное сравнение элементов; подробности описаны в разделе «Операторы сравнения», флаг по умолчанию;
*         SORT_NUMERIC — числовое сравнение элементов;
*         SORT_STRING — строковое сравнение элементов;
*         SORT_LOCALE_STRING — сравнивает элементы, как строки с учётом текущей локали. Используется локаль, которую можно изменять с помощью функции setlocale();
*         SORT_NATURAL — сравнение элементов как строк, используя естественное упорядочение;
 *        SORT_FLAG_CASE — может быть объединен (через побитовое ИЛИ) с SORT_STRING или SORT_NATURAL для сортировки строк без учета регистра.
* 
*/

$images = [
    'img12.png', 
    'img10.png', 
    'img2.png', 
    'img24.png',
    'IMG23.png', 
    'img1.png',
];

sort($images);
echo "SORT_REGULAR\n";
print_r($images);

// -> SORT_REGULAR
// -> Array
// -> (
// ->     [0] => IMG23.png
// ->     [1] => img1.png
// ->     [2] => img10.png
// ->     [3] => img12.png
// ->     [4] => img2.png
// ->     [5] => img24.png
// -> )

sort($images, SORT_NATURAL);
echo "\nSORT_NATURAL\n";
print_r($images);

// -> SORT_NATURAL
// -> Array
// -> (
// ->     [0] => IMG23.png
// ->     [1] => img1.png
// ->     [2] => img2.png
// ->     [3] => img10.png
// ->     [4] => img12.png
// ->     [5] => img24.png
// -> )

sort($images, SORT_STRING | SORT_FLAG_CASE );
echo "\nSORT_STRING with SORT_FLAG_CASE\n";
print_r($images);

// -> SORT_STRING with SORT_FLAG_CASE
// -> Array
// -> (
// ->     [0] => img1.png
// ->     [1] => img10.png
// ->     [2] => img12.png
// ->     [3] => img2.png
// ->     [4] => IMG23.png
// ->     [5] => img24.png
// -> )

sort($images, SORT_NATURAL | SORT_FLAG_CASE );
echo "\nSORT_NATURAL with SORT_FLAG_CASE\n";
print_r($images);

// -> SORT_NATURAL with SORT_FLAG_CASE
// -> Array
// -> (
// ->     [0] => img1.png
// ->     [1] => img2.png
// ->     [2] => img10.png
// ->     [3] => img12.png
// ->     [4] => IMG23.png
// ->     [5] => img24.png
// -> )

// Обход массива
/*
* 
* Чтобы пройти по всем элементам массива, стоит прибегнуть к циклам. Наиболее правильным в отношении массива будет использовать конструкцию foreach:
* 
*   Не требует вычисления длины массива
*   Не требует заведомо выделять ключи массива
*   Работает одинаково с числовыми и ассоциативными массивами
*
*/

$array = [1, 2, 4, 8, 16];

foreach ($array as $key => $value) {
	print_r("2 ^ $key = $value");
}


// Если необходимо изменить элементы массива в процессе перебора, то следует читать их не по значению, а по ссылке, для этого используется &.  Уничтожайте ссылку функцией unset, если планируете повторное использование переменной, иначе по ссылке будет доступно последнее прочитанное значение из перебора:

$array = [1, 1, 2, 3, 5, 8, 13];

foreach ($array as $key => &$value) {
    $value *= 2;
}

// $value указывает на 26(13*2)

unset($value);

print_r($array);

$favorite_fruits = [
    'Mike' => 'banana',
    'Andrew' => 'orange',
    'Ann' => 'grape'
];

foreach($favorite_fruits as $user => $fruit){
    echo("$user likes $fruit <br/>");
}


$top = [
    ['item' => 'home'],
    ['item' => 'service'],
    ['item' => 'about'],
    ['item' => 'also'],
    ['item' => 'job'],
    ['item' => 'map']
];

for ($i = 0; $i < 3; $i += 1) {
    $top[$i]['isTop3'] = true;
}

var_dump($top);




// 