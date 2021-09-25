<?php

namespace app\controllers;


use app\models\Catalog;

class ProductController extends Controller
{
    
    public function actionIndex() {
        
        echo $this->render('index');
    }

    public function actionCatalog() {
        // $catalog = Catalog::getAll();
        $page = $_GET['page'] ?? 0;
        $catalog = Catalog::getLimit(($page + 1) * PRODUCT_PER_PAGE);
        
        echo $this->render('catalog', [
            'catalog' => $catalog,
            'page' => ++$page
        ]);
    }

    public function actionCard() {
        $id = $_GET['id'];
        
        $good = Catalog::getOne($id);
        echo $this->render('card', [
            'good' => $good
        ]);
    }

    
}
