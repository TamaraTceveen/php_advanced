<?php
session_start();

use app\models\{Catalog, User, Model, Basket, Image, Order};

use app\engine\{Db, Render, TwigRender, Request, Autoload};

include "../config/config.php";
include "../engine/Autoload.php";
include "../vendor/autoload.php";

spl_autoload_register([new Autoload(), 'loadClass']);

$request = new Request();


$controllerName = $request->getControllerName() ?: 'product';
$actionName = $request->getActionName();

$controllerClass = CONTROLLER_NAMESPACE . ucfirst($controllerName) . "Controller";


if(class_exists($controllerClass)) {
    $controller = new $controllerClass(new Render());
    $controller->runAction($actionName);
} else {
    echo "404";
}



die();
$product = Catalog::getOne(3);
$product->price = 403;
$product->name = 'Властелин колец: Трилогия';
$product->save();



// оптимально написать апдейт только для сет прайс (в данном случае) магмческие геттеры и сеттеры
// $product->update();

