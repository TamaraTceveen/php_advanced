<?php
include "char.php";
include "warrior.php";
include "mage.php";

$char1 = new Char('Pear', 'female');
$char1->newChar();

$char2 = new Char('Peter', 'male');
$char2->newChar();


$warrior1 = new Warrior('Barbarian', 'male');

$warrior1->newChar();
$warrior1->attac($char2);

$mage1 = new Mage('Amagus', 'male');
$mage1->newChar();
$mage1->attac($warrior1);

// 3 задание
// class A {
//     public function foo() {
//         static $x = 0;
//         echo ++$x;
//     }
// }
// $a1 = new A();
// $a2 = new A();
// $a1->foo();
// $a2->foo();
// $a1->foo();
// $a2->foo();

// метод foo() один для всех созданных классов, 
// поэтому при последовательном вызове мы получаем 1234
// вне зависимости от того, какие имеенно объекты вызывают метод 

class A {
    public function foo() {
        static $x = 0;
        echo ++$x;
    }
}
class B extends A {
}
$a1 = new A();
$b1 = new B();
$a1->foo(); 
$b1->foo(); 
$a1->foo(); 
$b1->foo();

// вывод 1122, При наследовании класса создается новый метод
// поэтому значения $x для класса А и В разные