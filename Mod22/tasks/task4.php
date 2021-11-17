<?php
// echo "
// Вводится символ.\n
// D - дуб\n
// O - орех\n
// P - пшено\n
// N - ничего\n
// ";

$input = readline();

switch ($input){
  case 'O':
    echo "Na kogo greh?";
    break;
  case 'P':
    echo "Mi s tobou za odno!";
    break;
  case 'D':
    echo "Tri raza v zub!";
    break;
  case 'N':
    echo "Viberay!";
    break;
  default:
    echo "Viberay!";

}