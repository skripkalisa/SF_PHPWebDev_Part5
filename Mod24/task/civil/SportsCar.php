<?php
require_once "task/models/Civil.php";

class SportsCar extends CivilVehicle{
  private string $color;
  private int $maxSpeed;

  public function __construct(){ 
    parent::__construct();
    $this->description = "Sports car";
    $this->action = "drive fast";
  }

  public function setProperties(string $color, int $maxSpeed){
    $this->color = $color;
    $this->maxSpeed = $maxSpeed;
  }

  public function getDetails(){
    echo "Details of this {$this->description}: \n";
    echo "Color: {$this->color}\n";
    echo "Speed limit: {$this->maxSpeed} km/h\n";
  }
}