<?php

$n = readline();

function fib($n){
  // return round(pow((sqrt(5)+1)/2, $n) / sqrt(5));
    if ($n == 0)
        return 0;    
    else if ($n == 1)
        return 1;    

    else
        return (fib($n-1) + 
                fib($n-2));
}

if($n <= 30)
{
  $result = fib($n);
  echo $result;
}