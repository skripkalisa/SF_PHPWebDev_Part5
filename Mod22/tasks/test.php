<?php

// $n = readline();
$result = false;

function checkPrime($n){

  for ($i = 2, $s = round(sqrt($n)); $i <= $s; $i++){
    if($n % $i === 0){
      return false;
    }
  }
  return true;
}

if($n <= 2000000000 && $n > 1)
{
  $result = checkPrime($n);
  echo $result ?  "prime" :  "composite";
}

for ($n = 0; $n < 1000; $n++){
  if($n <= 2000000000 && $n > 1)
  {
    $result = checkPrime($n);
    // echo $result ?  "prime" :  "composite";
    // echo $result ?  $n . " prime\n" :  $n . " composite\n";
  }
  if ($result) {
    echo $n. "\n";
  }
  // $result = checkPrime($n);

}