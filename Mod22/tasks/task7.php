<?php

$n = readline();

while ($n > 2){
  $n /= 2;
  // echo $n . "\n";
}

echo 
$n == 1 ||
($n % 2 === 0 && $n > 0 )
? "YES" 
: "NO";