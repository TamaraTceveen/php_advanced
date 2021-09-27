<?php

namespace app\controllers;

use app\engine\Request;
use app\models\User;

class AuthController extends Controller
{

    public function actionLogin(){
        // action="/auth/login"
        
        $login = (new Request())->getParams()['login'];
        $pass = (new Request())->getParams()['pass'];

        if (User::auth($login, $pass)) {
            header("Location:" . $_SERVER['HTTP_REFERER']);
            die();
        } else {
            die('Не верный логин или пароль');
        }
    }

    //auth/register

    public function actionLogout(){
        session_regenerate_id();
        session_destroy();
        setcookie("hash");
        header("Location:" . $_SERVER['HTTP_REFERER']);
        die();
    }
}