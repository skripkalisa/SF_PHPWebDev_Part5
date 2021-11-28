<?php
require_once "task/models/Special.php";

class Caterpillar extends SpecialVehicle{
  private string $equipment;
  private int $enginePower;

  public function __construct(){ 
    parent::__construct();
    $this->description = "Cat D11";
  }

  public function setProperties(string $equipment, int $enginePower){
    $this->equipment = $equipment;
    $this->enginePower = $enginePower;
  }


  public function getDetails(){
    echo "Details of this {$this->description}: \n";
    echo "Equipped with: {$this->equipment}\n";
    echo "Estimate engine power: {$this->enginePower} kW\n";
  }
}