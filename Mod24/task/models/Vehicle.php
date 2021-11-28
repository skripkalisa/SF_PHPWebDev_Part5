<?php
require_once "IVehicle.php";

abstract class Vehicle implements IVehicle{
  protected string $type;
  protected string $action;
  
  public function startEngine()
  {
    echo "Engine started. \n";
  }

  public function stopEngine()
  {
    echo "Engine stopped. \n";
  }
  
  public function getType(){
    echo "This is a {$this->type}\n";
  }

  public function drive(int $code = 1)
  {
    if($code == 1) echo "This {$this->description} is moving forward. \n";

    if($code == -1) echo "This {$this->description} is moving backwards. \n";
    
    if($code == 0) echo "This {$this->description} has stopped. \n";
  }
  
  public function turn(int $code = 1){
    if($code == 1) echo "This {$this->description} has turned right. \n";

    if($code == -1) echo "This {$this->description} has turned left. \n";
    
    if($code == 0) echo "This {$this->description} has turned around. \n";
  }

  public function getAction(){
    echo "This {$this->type} can {$this->action}\n";
  }
}