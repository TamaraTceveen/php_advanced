<?php

use app\models\{Catalog, User, Model, Basket, Image, Order};
use app\models\example\{Product, Digital, Bulk};

use app\engine\Db;

include "../engine/Autoload.php";

spl_autoload_register([new Autoload(), 'loadClass']);

function loader($className) {
    (new Autoload())->loadClass($className);
}


$product = new Catalog(new Db());
$user = new User(new Db());
$order = new Order(new Db());
$basket = new Basket(new Db());

$product->getOne(5);
$product->getAll();
$user->getOne(8);
$user->getAll();
$order->getAll();
$basket->getOne(7);

$test = new Product();
$test->price = 200;
$test->count = 1;
$test->showPrice();

$digital = new Digital();
$digital->price = 200;
$digital->count = 1;
$digital->showPrice();

$bulk = new Bulk();
$bulk->price = 20;
$bulk->weight = 1004;
$bulk->showPrice();

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