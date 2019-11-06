<?php include ROOT . '/views/layouts/header.php'; ?>
    <div class="wrapper container">
            <div class="crumbs">Главная>>Товар</div>
            <div class="content_product row">
                <div class="img_photo col-7 ">
                    <img src="/template/images/product-details/te_guan_in.jpg">
                </div>
                <div class="col-5">
                    <p>Артикул:<?php echo $product['code'];?> </p>
                    <h1><?php echo $product['name'];?></h1>
                    <div class="row">
                        <div class="price col-4">
                            <label for="price_product" class="col-form-label">Цена:</label>
                            <h3 id="price_product" ><?php echo $product['price'];?></h3>
                        </div>
                        <div class="count-product col-3">
                                <div class="form-group">
                                        <label for="example-number-input" class="col-form-label">Количество:</label>
                                        <input class="form-control" type="number" value="1" min="1" id="example-number-input" onchange=" countPrice();">
                                </div>
                        </div>
                        <div class="ves-product col-4">
                                <form class="form-inline">
                                        <label class="col-form-label" for="inlineFormCustomSelect">Вес продукта:</label>
                                        <select class="custom-select mb-2 mr-sm-2 mb-sm-0" id="inlineFormCustomSelect" onchange="countPrice();">
                                          <option selected value="1">50</option>
                                          <option value="2">100</option>
                                          <option value="3">150</option>
                                          <option value="4">200</option>
                                          <option value="5">250</option>
                                        </select>
                                </form>
                        </div>
                    </div>
                    <div class="row ">
                        <button type="button" class="btn btn-primary col-5 ml-4 mt-2">В корзину</button>
                    </div>
                    <hr />
                    <div class="delivery">Доставка осуществляется в течении 3 дней курьерской службой</div>
                </div>
            </div>
        <hr />
        <div class="row mb-4">
            <div class="description col-8">
                    <h4>Описание:</h4>
                    <p><?php echo $product['description'];?></p>
            </div>
            <div class="col-4 pohojie">
                <h4>Похожие товары</h4>
                <div class="row mt-4">
                    <div class="item_box col mr-2">
                            <a href="/views/site/product/product.php">
                                <img src="/template/images/product-details/da_hun_pao.jpg" >
                            </a>
                            <div class="name_product">
                                <p> Да хун Пао</p>
                            </div>
                    </div>    
                    <div class="item_box col">
                            <a href="/views/site/product/product.php">
                                <img src="/template/images/product-details/earl_grey.jpg" >
                            </a>
                            <div class="name_product">
                                <p> Earl gray</p>
                            </div>
                    </div>   
                </div>
                <div class="row mt-4">
                        <div class="item_box col mr-2">
                                <a href="/views/site/product/product.php">
                                    <img src="/template/images/product-details/karkade.jpg" >
                                </a>
                                <div class="name_product">
                                    <p> Каркаде</p>
                                </div>
                        </div>    
                        <div class="item_box col">
                                <a href="/views/site/product/product.php">
                                    <img src="/template/images/product-details/puer.jpg" >
                                </a>
                                <div class="name_product">
                                    <p> Шу пуэр</p>
                                </div>
                        </div>   
                </div>
            </div>
        </div>
    </div>
    <?php include_once(ROOT."/views/layouts/footer.php"); ?>

