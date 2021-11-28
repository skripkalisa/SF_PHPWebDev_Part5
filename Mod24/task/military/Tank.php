<?php
require_once "task/models/Military.php";

class T34 extends MilitaryVehicle{
  private string $forces;
  private int $fuelReserve;

  public function __construct(){ 
    parent::__construct();
    $this->description = "Tank T-34";
  }

  public function setProperties(string $forces, int $fuelReserve){
    $this->forces = $forces;
    $this->fuelReserve = $fuelReserve;
  }


  public function getDetails(){
    echo "Details of this {$this->description}: \n";
    echo "Forces: {$this->forces}\n";
    echo "Fuel reserve: {$this->fuelReserve} litres\n";
  }
}