<?php
class ProductController
{
    
    public function actionList()
    {
        $categories= array();
        $categories= Category:: getCategoriesList();
        require_once(ROOT . '/views/product/productList.php');
        return true;
    }
    
    public function actionView($productId)
    {
        $sliderProducts = Product::getRecommendedProducts();
        array_splice($sliderProducts,4);
        $categories = array();
        $categories = Category::getCategoriesList();
        
        $product = Product::getProductById($productId);

        require_once(ROOT . '/views/product/product.php');

        return true;
    }

}