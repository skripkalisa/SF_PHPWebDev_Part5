<?php
require_once "Vehicle.php";

class CivilVehicle extends Vehicle{

  protected string $description;

  public function __construct(){ 
    $this->type = "civil vehicle";
  }

  public function cleanWindscreen(){
    echo "This {$this->description} has just cleaned the windshield \n";
  }
}