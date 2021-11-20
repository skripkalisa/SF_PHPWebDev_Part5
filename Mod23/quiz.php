<?php
// echo false == '00X00';
// echo true == NAN;
// echo 1 !== true;
// echo true && 1;
// echo !false != !true;
// echo true == '0b0000001';


// $authBtn = 'authBtn'; echo "<button class = "$authBtn">";
// $authBtn = 'authBtn'; echo "<button class = ". $authBtn . ">";
// $authBtn = 'authBtn'; echo '<button class = "$authBtn">';
// echo str_replace('.class', 'authBtn', '<button class = ".class">');
// echo str_replace('class', 'authBtn', '<button class = "class">');
// echo str_replace('$authBtn', 'authBtn', '<button class = "$authBtn">'); 

// $top = [
//     ['item' => 'home'],
//     ['item' => 'service'],
//     ['item' => 'about'],
//     ['item' => 'also'],
//     ['item' => 'job'],
//     ['item' => 'map']
// ];

// for ($i = 0; $i < 3; $i += 1) {
//     $top[$i]['isTop3'] = true;
// }

// var_dump($top);

$data = [1, 2, 3, 4, 5, 6, 7, 8, 9];
foreach($data as $key=>$value){
    $value = $value*$key;
}
foreach($data as $value){
    if($value % 2 == 0){
        var_dump('odd');
    }
}

for ($i = 0; $i < 3; $i += 1) {
    $top[$i]['isTop3'] = true;
}

var_dump($top);

echo "\n";


$arr = ["a" => "b", "c" =>"d", "e" =>"f", "f" =>"b"];

$values = array_values($arr);
$keys = array_keys($arr);

$merged = array_merge($values, $keys);
$unique = array_unique($merged);

echo (implode(array_values($unique)));