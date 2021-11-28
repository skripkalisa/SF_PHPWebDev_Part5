<?php
require_once "Vehicle.php";

class MilitaryVehicle extends Vehicle{
  
    protected string $description;

    public function __construct(){ 
    $this->type = "military vehicle";
    $this->action = "utilize ammunition";
  }

  public function combat(){
    echo "This {$this->type} is fighting the enemy. \n";
  }
}