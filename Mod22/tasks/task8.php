<?php

$n = readline();


function checkPrime($n){

  for ($i = 2, $s = sqrt($n); $i <= $s; $i++){
    if($n % $i == 0){
      return false;
    }
  }
  return true;
}

if($n <= 20000000000 && $n >= 1)
{
  $result = checkPrime($n);
  echo $result ?  "prime" :  "composite";

}