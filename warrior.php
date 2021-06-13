<?php

class Warrior extends Char
{
    public $skill = [];

    public function __construct($nickname, $sex, $class = 'Воин', $level = 1, $health = 200, $attac = 30, $defence = 40, array $skill = ['defence' => 'Блок щитом',
    'attac' => 'Удар мечом'])
    {
        parent::__construct($nickname, $sex, $level, $health, $attac, $defence);
        $this->skill = $skill;
        $this->class = $class;
    }

    public function newChar(){
        echo "Создан новый {$this->class} {$this->nickname}<br>";
    }

    public function attac(Char $target){
        $damage=$this->attac-$target->defence;
        $target->health -= $damage;
        echo "{$this->class} {$this->nickname} наносит {$this->skill['attac']} {$target->nickname} на {$damage} урона. <br>";
        echo "У {$target->nickname} осталось {$target->health} здоровья <br>";
    }
}