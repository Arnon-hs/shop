<?php
require_once(ROOT.'/components/Pagination.php');
class CatalogController
{

    public function actionIndex()
    {
        $categories = array();
        $categories = Category::getCategoriesList();

        $group= Category::getCategoriesCase($categories);
        print_r($group);
        $latestProducts = array();
        $latestProducts = Product::getLatestProducts(12);
        $page=1;
        $countLatestProduct=count($latestProducts);
        $pagination= new Pagination($countLatestProduct, $page, Product:: SHOW_BY_DEFAULT, 'page-');
        require_once(ROOT . '/views/catalog/catalog.php');

        return true;
    }
    
    public function actionCategory($categoryId, $page = 1)
    {
        $categories = array();
        $categories = Category::getCategoriesList();
        // print_r($categories);
        $group= Category::getCategoriesCase($categoryId);

        $categoryProducts = array();
        $categoryProducts = Product::getProductsListByCategory($categoryId, $page);
       
        $total= Product::getTotalProductsInCategory($categoryId);
        $pagination= new Pagination($total, $page, Product:: SHOW_BY_DEFAULT, 'page-'); 

        require_once(ROOT . '/views/catalog/category.php');

        return true;
    }
    
}
