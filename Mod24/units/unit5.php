<?php

class ExampleStatic 
{
  public static $variable = "this is a static property ExampleStatic\n";
  
  public static function selfAccessProperty()
  {
    echo self::$variable;
  }
  
  public static function staticAccessPropety()
  {
    echo static::$variable;
  }
}

class ExStaticChild extends ExampleStatic
{
  public static $variable = "this is a static property ExStaticChild\n";    
}

// this is a static property ExampleStatic
ExStaticChild::selfAccessProperty(); 
// this is a static property ExStaticChild
ExStaticChild::staticAccessPropety();

// при использовании self у нас выводится значение из свойства родительского класса, а при использовании static — дочернего.
/* 
Задание 24.5.5

Предположим у нас есть ноутбуки, у них есть какие-то общие признаки — монитор, клавиатура, разъемы. Но есть и разные, такие как бренд процессора, видеокарты и так далее. Постройте систему классов ноутбуков трех разных производителей, с разными характеристиками, используйте наследование. Также добавьте методы включения и выключения ноутбуков (реализовывать их необязательно), куда их выносить (в абстрактный или конкретный классы) решайте сами.

 */

abstract class Laptop{
  protected $display;
  protected $keyboard;
  protected $sockets;

  protected $cpu;
  protected $videoChip;

  protected function getInfo(){ 
    return $this->display . " " . $this->keyboard .  " " . $this->sockets . " " . $this->cpu . " " . $this->videoChip;
  }
  protected function powerOn(){
    echo "Power On\n";
  }
  protected function powerOff(){
    echo "Power Off\n";
  }
}

class DellLaptop extends Laptop{
  public function setCPU(string $cpu){
    $this->cpu = $cpu;
  }
  public function setVideoChip(string $videoChip){
    $this->videoChip = $videoChip;
  }
}
class HPLaptop extends Laptop{
  public function setCPU(string $cpu){
    $this->cpu = $cpu;
  }
  public function setVideoChip(string $videoChip){
    $this->videoChip = $videoChip;
  }
}
class AsusLaptop extends Laptop{
  public function setCPU(string $cpu){
    $this->cpu = $cpu;
  }
  public function setVideoChip(string $videoChip){
    $this->videoChip = $videoChip;
  }
}