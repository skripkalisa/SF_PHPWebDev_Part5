<?php

/* 
* Задание 24.7.4
* 
Создайте интерфейс радиоприемника. У него должна быть регулировка громкости и поиск радиостанций. Реализуйте этот интерфейс.
* 
*/

interface reciever{
  public function setVolume(int $volume);
  public function tune():string;
}