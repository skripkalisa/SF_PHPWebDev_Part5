<?php
require_once "./task/civil/MiniVan.php";
require_once "./task/civil/SportsCar.php";
require_once "./task/military/Tank.php";
require_once "./task/special/Dozer.php";

$minivan = new MiniVan();
$minivan->setProperties("Mercedes", 8);

$minivan->getType();
$minivan->getAction();
$minivan->getDetails();
$minivan->startEngine();
$minivan->drive();
$minivan->cleanWindscreen();
$minivan->stopEngine();

echo "\n\n";

$sportsCar = new SportsCar();
$sportsCar->setProperties("red", 310);

$sportsCar->getType();
$sportsCar->getAction();
$sportsCar->getDetails();
$sportsCar->startEngine();
$sportsCar->drive();
$sportsCar->turn();
$sportsCar->turn(0);
$sportsCar->drive(-1);
$sportsCar->drive(0);
$sportsCar->stopEngine();

echo "\n\n";

$tank = new T34();
$tank->setProperties("troops", 240);

$tank->getType();
$tank->getAction();
$tank->getDetails();
$tank->startEngine();
$tank->drive();
$tank->combat();
$tank->turn();
$tank->turn(-1);
$tank->turn(0);
$tank->drive(-1);
$tank->drive(0);
$tank->combat();
$tank->stopEngine();

echo "\n\n";

$dozer = new Caterpillar();
$dozer->setProperties("blade", 1100);

$dozer->getType();
$dozer->getAction();
$dozer->getDetails();
$dozer->startEngine();
$dozer->drive();
$dozer->work();
$dozer->turn();
$dozer->turn(-1);
$dozer->work();
$dozer->turn(0);
$dozer->drive(-1);
$dozer->drive(0);
$dozer->stopEngine();