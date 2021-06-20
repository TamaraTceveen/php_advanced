<?php

namespace app\models;

class User extends Model
{

    public $id;
    public $login;
    public $pass;
    public $hash;

    public function __construct($login = '', $pass = '', $hash = '')
    {
        $this->login = $login;
        $this->pass = $pass;
        $this->hash = $hash;
    }

    protected function getTableName() {
        return 'users';
    }
}