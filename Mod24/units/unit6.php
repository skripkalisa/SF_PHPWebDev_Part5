<?php
/* 
*
Задание 24.6.4
* 
* Представим, что у нас куча принтеров..
* Каждый из них может что-то печатать. Реализуйте пару классов с принтерами, которые будут передаваться другому объекту на вход. Он же в свою очередь будет заставлять эти принтеры выводить документы на печать.
* 
Вот так выглядит класс, который будет запускать печать:
* 
<?php
* 
class Example
* {
*   public function print(Interface $printer) 
*   {
* 	$printer>print();
*   }
* }
* 
Добавьте к нему статическую типизацию. Задание должно быть реализовано с помощью полиморфизма.
*/

interface PrinterInterface
{
    public function print(string $text);
}

class PrinterOne implements PrinterInterface
{
    public function print(string $text)
    {
        echo $text;
    }
}

class PrinterTwo implements PrinterInterface
{
    public function print(string $text)
    {
        echo $text . "\r\n";
    }
}

class PrinterController
{
    public function print(PrinterInterface $printer)
    {
        $printer->print("");
    }
}

$printer = new PrinterOne();
$printerController = new PrinterController();
$printerController->print($printer);