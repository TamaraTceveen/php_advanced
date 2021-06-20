<?php

use app\models\{Catalog, User, Model, Basket, Image, Order};

use app\engine\Db;

include "../config/config.php";
include "../engine/Autoload.php";

spl_autoload_register([new Autoload(), 'loadClass']);

function loader($className) {
    (new Autoload())->loadClass($className);
}

$product = new Catalog('test', 'description', 100, 'test', 0);
$user = new User('user1', 456, 'ffff');
// $order = new Order();
// $basket = new Basket();

$product->getOne(3);
$product->insert();
// $product->getAll();
// var_dump($user->getOne(1));
$user->insert();


// $order->getAll();
// $basket->getOne(7);



/*
// CREATE
$product = new Product();
$product->name = '1984';
$product->price = 300;
$product->insert();

// READ
$product = new Product();
$product->getOne(5);
$product->getAll();

// UPDATE
$product = new Product();
$product->getOne(5);
$product->price = 350;
$product->update();

// DELETE
$product = new Product();
$product->getOne(5);
$product->delete();
*/