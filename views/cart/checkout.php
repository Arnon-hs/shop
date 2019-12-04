<?php include ROOT . '/views/layouts/header.php'; ?>
    <div class="container">
        <!-- <div class="crumbs">Главная>>Кофе>><?php echo $categoryList[$categoryId]['name']; ?></div> -->
        <div class="row mt-4 mb-4">
            <div class="col-2 category ">
                <div class="cat pt-2 pb-2 pl-2">
                    <h4>Каталог</h4>
                        <?php foreach ($categories as $categoryItem): ?>
                            <?php if($categoryItem['groups']==1): ?>
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
            <div class="col-md-9 offset-md-1">
                <div class="features_items ">
                    
                    <h2 class="title text-center mb-4">Корзина</h2>


                    <?php if ($result): ?>

                        <p>Ваш заказ оформлен. Мы Вам перезвоним.</p>

                    <?php else: ?>

                        <div class="col-sm-8 offset-md-2">
                            <p>Выбрано товаров: <?php echo $totalQuantity; ?>, на сумму: <?php echo $totalPrice; ?>, р.</p><br/>
                        </div>
                        <div class="col-sm-8 offset-md-2">
                            <?php if (isset($errors) && is_array($errors)): ?>
                                <ul>
                                    <?php foreach ($errors as $error): ?>
                                        <li> - <?php echo $error; ?></li>
                                    <?php endforeach; ?>
                                </ul>
                            <?php endif; ?>

                            <p>Для оформления заказа заполните форму. Мы свяжемся с Вами.</p>

                            <div class="login-form">
                                <form action="#" method="post">
                                    <p>Ваша фамилия</p>
                                    <input type="text" class="form-control mb-2" name="secondName" placeholder="Иванов" value="<?php echo $secondName; ?>"/>
                                    <p>Ваше имя</p>
                                    <input type="text" class="form-control mb-2" name="userName" placeholder="Иван" value="<?php echo $userName; ?>"/>
                                    <p>Ваше отчество</p>
                                    <input type="text" class="form-control mb-2" name="lastName" placeholder="Иванович" value="<?php echo $lastName; ?>"/>

                                    <p>Номер телефона</p>
                                    <input type="text" class="form-control mb-2" name="userPhone" placeholder="81234567890" value="<?php echo $userPhone; ?>"/>

                                    <p>Комментарий к заказу</p>
                                    <input type="text" class="form-control mb-2" name="userComment" placeholder="Сообщение" value="<?php echo $userComment; ?>"/>

                                    
                                    <input type="submit" name="submit" class="btn btn-primary mb-2 mt-4" value="Оформить" />
                                </form>
                            </div>
                        </div>

                    <?php endif; ?>

                </div>

            </div>
        </div>
    </div>
<?php include ROOT . '/views/layouts/footer.php'; ?>