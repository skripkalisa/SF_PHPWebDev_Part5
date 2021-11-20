<?php
require_once 'name_full.php';

function getShortName($fullName){
  
  $name_split = getPartsFromFullname($fullName);
  $s_name = mb_substr($name_split['surname'], 0, 1);
  
  $name_short = 
  $name_split['name']
  .' '.
  $s_name
  .'.';
  
  return mb_convert_case($name_short, MB_CASE_TITLE_SIMPLE);
}