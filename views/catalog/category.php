<?php include ROOT . '/views/layouts/header.php'; ?>
    <div class="container">
        <div class="row mt-4 mb-4">
            <div class="col-lg-2 col-sm-3 category ">
                <div class="cat pt-2 pb-2 pl-2">   
                    <h4>Каталог</h4>
                        <?php foreach ($categories as $categoryItem): ?>
                            <?php if($categoryItem['groups']==$group): ?>
                            <hr />
                                    <h5 class="catalog-item">
                                        <a href="/category/<?php echo $categoryItem['id'];?>" class="<?php if($categoryId == $categoryItem['id']) echo 'catalog-item-active'; ?>">
                                            <?php echo $categoryItem['name'];?>
                                        </a>
                                    </h5>
                                    
                            <?php endif; ?>
                        <?php endforeach; ?>
                </div>
            </div>

            <div class="col-sm-9 col-lg-10 productList">
                <h2 class="text-center">Последние товары</h2>
                <div class="row mb-4 mt-4 mr-4 ml-4">
                    <?php foreach ($categoryProducts as $product): ?>
                        <div class="col-lg-3 col-sm-6">
                            <div class="product-image-wrapper">
                                <div class="single-products">
                                    <div class="productinfo text-center">
                                        <img src="<?php echo Product::getImage($product['id']); ?>" alt="" />
                                        <h2><?php echo $product['price'];?>р</h2>
                                        <p>
                                            <a href="/product/<?php echo $product['id'];?>">
                                                <?php echo $product['name'];?>
                                            </a>
                                        </p>
                                        <a href="/cart/add/<?php echo $product['id']; ?>/1" data-id="<?php echo $product['id']; ?>" class="btn btn-primary add-to-cart">В корзину</a>
                                    </div>
                                    <?php if ($product['is_new']): ?>
                                        <img src="/template/images/home/new.png" class="new" alt="" />
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    <?php endforeach;?>            
                           
                </div>
                <!-- Постраничная навигация -->
                <div class="pag">
                    <?php echo $pagination->get(); ?>
                </div>

            </div>
        </div>
    </div>

<?php include ROOT . '/views/layouts/footer.php'; ?>