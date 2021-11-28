<?php
require_once "Vehicle.php";

class SpecialVehicle extends Vehicle{
  
  protected string $description;

  public function __construct(){ 
    $this->type = "specialized machinery";
    $this->action = "do chores";
  }


  public function work(){
    echo "This {$this->type} is working. \n";
  }
}