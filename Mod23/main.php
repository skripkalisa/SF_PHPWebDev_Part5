<?php
require_once 'includes/array.php';
require_once 'includes/gender.php';
require_once 'includes/gender_desc.php';
require_once 'includes/match.php';

$users = $example_persons_array;

$gender_stats = [];

foreach($users as $key => $value){
  $fullName = $value['fullname'];
  $gender_flag = getGenderFromName($fullName);
  echo $fullName . ': ';
  echo $gender_flag  === 1 ? 'male' : 
  (
    $gender_flag < 0 ? 'female' : 
    'unknown'
  );
    echo "\n";
    
    $gender_stats[] = $gender_flag;
  }
  
  echo "\n";
echo getGenderDescription($gender_stats);

echo "\n";
echo "\n";

echo getPerfectPartner("мАХнО", "чУлПаН", "БатьковНА", $users);

echo "\n";

echo getPerfectPartner("ИваНов", "Иван", "иванович", $users);

echo "\n";