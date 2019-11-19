<?php

class SiteController
{

    public function actionIndex()
    {
        $categories = array();
        $categories = Category::getCategoriesList();

        $latestProducts = array();
        $latestProducts = Product::getLatestProducts(6);
        
        $sliderProducts = Product::getRecommendedProducts();
        require_once(ROOT . '/views/site/index2.php');//

        return true;
    }

}
