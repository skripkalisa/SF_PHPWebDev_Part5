<?php
require_once "task/models/Civil.php";

class MiniVan extends CivilVehicle{
  private string $brand;
  private int $seats;

  public function __construct(){ 
    parent::__construct();
    $this->description = "Mini Van";
    $this->action = "make a loud beep";
  }


  public function setProperties(string $brand, int $seats){
    $this->brand = $brand;
    $this->seats = $seats;
  }

  public function getDetails(){
    echo "Details of this {$this->description}: \n";
    echo "Brand: {$this->brand}\n";
    echo "Number of seats: {$this->seats}\n";
  }
}