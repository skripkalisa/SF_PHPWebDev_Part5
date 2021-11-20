<?php

function getGenderDescription($gender_stats) {

  $male = 0;
  $female = 0;
  $unknown = 0;

  $total = count($gender_stats);

  foreach ($gender_stats as $key => $value){
    switch ($value <=> 0){
      case '1':
        $male++;
        break;
      case '-1':
        $female++;
        break;
      case '0':
        $unknown++;
        break;
    }
  }

  $round = 'round';
  $percentage = 100/ $total;

  $stats = <<< GENDERSTATS
  Гендерный состав аудитории:
  ---------------------------
  Мужчины - {$round($male * $percentage, 2)}%
  Женщины - {$round($female * $percentage, 2)}%
  Не удалось определить - {$round($unknown * $percentage, 2)}%
  GENDERSTATS;

  // echo $stats;
  // echo "\n";
  return $stats;
}