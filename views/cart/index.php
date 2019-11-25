<?php include ROOT . '/views/layouts/header.php'; ?>
    <div class="container">
        <!-- <div class="crumbs">Главная>>Кофе>><?php echo $categoryList[$categoryId]['name']; ?></div> -->
        <div class="row mt-4 mb-4">
            <div class="col-2 category ">
                    <h4>Каталог</h4>
                        <?php foreach ($categories as $categoryItem): ?>
                            <?php if($categoryItem['groups']==1): ?>
                                    <h5 class="catalog-item">
                                        <a href="/category/<?php echo $categoryItem['id'];?>" class="<?php if($categoryId == $categoryItem['id']) echo 'catalog-item-active'; ?>">
                                            <?php echo $categoryItem['name'];?>
                                        </a>
                                    </h5>
                            <?php endif; ?>
                        <?php endforeach; ?>
            </div>

            <div class="col-9 offset-md-1">
                <div class="features_items">
                    <h2 class="title text-center">Корзина</h2>
                    
                    <?php if ($productsInCart): ?>
                        <p>Вы выбрали такие товары:</p>
                        <table class="table-bordered table-striped table">
                            <tr>
                                <th>Код товара</th>
                                <th>Название</th>
                                <th>Количество, шт</th>
                                <th>Стомость, р</th>
                                <th>Удалить</th>
                            </tr>
                            <?php foreach ($products as $product): ?>
                                <tr>
                                    <td><?php echo $product['code'];?></td>
                                    <td>
                                        <a href="/product/<?php echo $product['id'];?>">
                                            <?php echo $product['name'];?>
                                        </a>
                                    </td>
                                    <td><?php echo $productsInCart[$product['id']];?></td> 
                                    <td><?php echo $product['price'];?></td>    
                                    <td>
                                        <a class="btn btn-default checkout h_m" href="/cart/delete/<?php echo $product['id'];?>">
                                            <img src="/template/images/icons/icons8-delete-50.png">
                                        </a>
                                    </td>                    
                                </tr>
                            <?php endforeach; ?>
                                <tr>
                                    <td colspan="3">Общая стоимость:</td>
                                    <td><?php echo $totalPrice;?></td>
                                </tr>
                            
                        </table>
                        <a class="btn btn-primary checkout h_m" href="/cart/checkout"><img src="/template/images/icons/icons8-purchase-order-50.png"> Оформить заказ</a>
                    <?php else: ?>
                        <p>Корзина пуста</p>
                        
                        <a class="btn btn-primary checkout" href="/"><i class="fa fa-shopping-cart"></i> Вернуться к покупкам</a>
                    <?php endif; ?>

                </div>

            </div>
    </div>
            
<!-- <?php include ROOT . '/views/layouts/footer.php'; ?> -->