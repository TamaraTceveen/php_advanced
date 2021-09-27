<?php

namespace app\models;

class User extends DBModel
{

    public $id;
    public $login;
    public $pass;
    public $hash;

    protected $props = [
        'login' => false,
        'pass' => false
    ];

    public function __construct($login = null, $pass = null, $hash = null)
    {
        $this->login = $login;
        $this->pass = $pass;
        $this->hash = $hash;
    }

    protected static function getTableName() {
        return 'users';
    }

    public static function auth($login, $pass) {
        $user = User::getOneWhere('login', $login);

        if (hash('sha256', $pass, false) == $user->hash){
            $_SESSION['login'] = $login;
            setcookie("hash", $user->hash, time() + 3600);
            return true;
        }
        return true;
         
    }

    public static function isAuth() {
        return isset($_SESSION['login']);
    }

    public static function isAdmin() {
        return $_SESSION['login'] == 'admin';
    }

    public static function getName() {
        return $_SESSION['login'];
    }
}