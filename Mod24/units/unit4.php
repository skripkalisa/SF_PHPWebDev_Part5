<?php

class Car{
  protected $chassis;
  private $engine;
  protected $wheels;
  public function getEngine() { return $this->engine;}

  public function changeWheels($wheels){
    $this->wheels = $wheels;
  }

}