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
        
        require_once(ROOT . '/views/site/index.php');

        return true;
    }
    public function actionAbout()
    {
        // Подключаем вид
        require_once(ROOT . '/views/info/about.php');
        return true;
    }
    public function actionServices()
    {
        require_once(ROOT. '/views/info/services.php');
        return true;
    }
}
