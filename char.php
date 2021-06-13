<?php

class Char
{
    public $nickname;
    public $sex;
    public $level;
    public $health;
    public $attac;
    public $defence;

    public function __construct($nickname, $sex, $level = 1, $health = 100, $attac = 5, $defence = 3)
    {
        $this->nickname = $nickname;
        $this->sex = $sex;
        $this->level = $level;
        $this->health = $health;
        $this->attac = $attac;
        $this->defence = $defence;
    }

    public function newChar(){
        echo "Персонаж {$this->nickname} создан<br>";
    }
}