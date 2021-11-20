<?php

function getPartsFromFullname($fullName){
  $name_keys = [
    'surname',
    'name',
    'patronymic',
  ];

  $name_values = explode(' ', $fullName);
  
  $name_split = array_combine($name_keys, $name_values);

  return $name_split;
}

function getFullnameFromParts($surname, $name, $patronymic){
  $fullName = $surname . ' ' . $name . ' ' . $patronymic;

  return $fullName;
}