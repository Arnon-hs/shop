<?php include ROOT . '/views/layouts/header.php'; ?>
    <div class="container">
        <div class="crumbs">Главная>>Кофе>>Зерновой</div>
        <div class="row mt-4 mb-4">
            <div class="col-2 category ">
                    <h4>Каталог</h4>
                        <?php foreach ($categories as $categoryItem): ?>
                                    <h5 class="catalog-item">
                                        <a href="/category/<?php echo $categoryItem['id'];?>">
                                            <?php echo $categoryItem['name'];?>
                                        </a>
                                    </h5>
                        <?php endforeach; ?>
            </div>

            <div class="col-10 productList">
                <h2 class="text-center">Последние товары</h2>
                <div class="row mb-4 mt-4 mr-4 ml-4">
                    <?php foreach ($latestProducts as $product): ?>
                        <div class="col-sm-3">
                            <div class="product-image-wrapper">
                                <div class="single-products">
                                    <div class="productinfo text-center">
                                        <img src="/template/images/product-details/lavazza Rossa.jpg" alt="" />
                                        <h2><?php echo $product['price'];?>р</h2>
                                        <p>
                                            <a href="/product/<?php echo $product['id'];?>">
                                                <?php echo $product['name'];?>
                                            </a>
                                        </p>
                                        <a href="#" class="btn btn-primary add-to-cart">В корзину</a>
                                    </div>
                                    <?php if ($product['is_new']): ?>
                                        <img src="/template/images/home/new.png" class="new" alt="" />
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    <?php endforeach;?>                   

                </div>


            </div>
        </div>
    </div>

<?php include ROOT . '/views/layouts/footer.php'; ?>