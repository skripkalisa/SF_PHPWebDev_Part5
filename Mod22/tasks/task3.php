<?php
$year = readline();

$answer = 
($year % 4 === 0 && $year % 100 !== 0)
? "YES":
(
  ($year % 100 === 0 && $year % 400 === 0)
  ? "YES" : "NO")
  ;

echo $answer;