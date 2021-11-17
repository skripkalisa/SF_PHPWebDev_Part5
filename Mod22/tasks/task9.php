<?php

$a = readline();
$n = readline();

function power($a, $n) {
  if ($n == 0) {
    return 1;
  }
  if ($n == 1) {
    return $a;
  }
  return $a * power($a, $n-1);
}

$result = power($a,$n);

echo $result;