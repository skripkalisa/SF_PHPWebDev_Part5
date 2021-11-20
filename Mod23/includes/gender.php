<?php

require_once 'name_full.php';

function getGenderFromName($fullName) {
  $name_split = getPartsFromFullname($fullName);
  $surname = $name_split['surname'];
  $name = $name_split['name'];
  $patronymic = $name_split['patronymic'];

  $gender_flag = 0;
  
  mb_substr($surname, -2) === 'ва' ? 
  $gender_flag -= 1 :
  (mb_substr($surname, -1) === 'в' ? 
  $gender_flag += 1 : 
  false);
  
  in_array(mb_substr($name, -1),  array('а', 'я')) ? 
  $gender_flag -= 1 :
  (in_array(mb_substr($name, -1) , array('й', 'н')) ? 
  $gender_flag += 1 : 
  false);
  
  mb_substr($patronymic, -3) === 'вна' ? 
  $gender_flag -= 1 :
  (mb_substr($patronymic, -2) === 'ич' ? 
  $gender_flag += 1 : 
  false);

  return $gender_flag <=> 0;
}