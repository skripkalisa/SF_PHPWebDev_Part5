<?php
require_once 'includes/name_full.php';
require_once 'includes/name_short.php';
require_once 'includes/gender.php';

function getPerfectPartner($s, $n, $p, $arr){
  $surname = correctCase($s);
  $name = correctCase($n);
  $patronymic = correctCase($p);
  $fullname = getFullnameFromParts($surname, $name, $patronymic);
  
  echo $fullname;
  echo "\n";

  do{
    $person = getPerson($arr); 
    $result = getMatch($fullname, $person);
  }while(!$result);
  
  return dispayMatch($fullname, $person);
  
}

function getMatch($fullname, $person){
  $gender = getGenderFromName($fullname);
  if(($gender + getGenderFromName($person) == 0)){
    return true;
  }
  return false;
}

function correctCase($str){
  return mb_convert_case($str, MB_CASE_TITLE_SIMPLE);
}

function getPerson($arr){
  return $arr[rand(0, count($arr) - 1)]['fullname'];
}

function dispayMatch($inquirer, $partner){
    $i = getShortName($inquirer);
    $p = getShortName($partner);
    $n = rand(50, 100) + rand(0, 100)/100;

    $match = <<< MATCH
    {$i} + {$p} =
    ♡ Идеально на {$n}% ♡ \n
    MATCH;

    return $match;
}