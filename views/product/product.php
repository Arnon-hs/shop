<?php include ROOT . '/views/layouts/header.php'; ?>
    <div class="container mt-4">
            <div class="content_product row">
                <div class="col-7 ">
                    <div class="img_photo">
                        <img src="<?php echo Product::getImage($product['id']); ?>">
                    </div>
                </div>
                <div class="col-5">
                    <p>Артикул:<?php echo $product['code'];?> </p>
                    <h1><?php echo $product['name'];?></h1>
                    <div class="row">
                        <div class="price col-3">
                            <label for="price_product" class="col-form-label">Цена:</label>
                            <h3 id="price_product" ><?php echo $product['price'];?></h3>
                            <script>
                              var price=<?php echo $product['price']; ?>;
                            </script>
                        </div>
                        <div class="count-product col-3 ">
                                <div class="form-group">
                                        <label for="example-number-input" class="col-form-label">Количество:</label>
                                        <input class="form-control" type="number" value="1" min="1" id="example-number-input" onchange=" countPrice(); addhref();">
                                </div>
                        </div>
                        <!-- <div class="ves-product col-4">
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
                        </div> -->
                    </div>
                    <div class="row">
                        <a id="buttonAdd" href="/cart/add/<?php echo $product['id']; ?>/1" class="col-6 mt-2">
                            <button type="button" class="btn btn-primary" style="width:100%;">В корзину</button>
                        </a>
                    </div>
                    <hr />
                    <div class="advantages pr-4 pl-4 pt-4 pb-4">
                        <p><img src="/template/images/icons/icons8-delivery-50.png" alt=""> <span>Доставка</span><br />   Доставка осуществляется в течении 3 дней курьерской службой</p>
                        <p><img src="/template/images/icons/icons8-open-envelope-love-64.png" alt=""><span>Подарочный конверт</span><br /> В комплекте открытка, средство для ухода за цветами, инструкция</p>
                        <p><img src="/template/images/icons/icons8-guarantee-64.png" alt=""><span>Гарантия качества</span><br /> Замена букета или возврат денег</p>
                    </div>
                </div>
            </div>
        <hr />
        <div class="row mb-4">
            <div class="description col-8">
                    <h4>Описание:</h4>
                    <p><?php echo $product['description'];?></p>
                    <p><b>Страна производитель:</b> <?php echo $product['brand'];?></p>
            </div>
            <div class="col-4 pohojie">
                <h4>Похожие товары</h4>
                <div class="row">
                <?php foreach ($sliderProducts as $sliderItem): ?>
                            <div class="item col-6 mb-5">
                                <div class="product-image-wrapper">
                                    <div class="single-products">
                                        <div class="productinfo text-center ">
                                            <a href="/product/<?php echo $sliderItem['id'];?>">
                                                <div class="img_photo">
                                                    <img src="<?php echo Product::getImage($sliderItem['id']); ?>" alt="" />
                                                </div>
                                                <h2><?php echo $sliderItem['price'];?>р</h2>
                                                <p>
                                                    <?php echo $sliderItem['name'];?>
                                                </p>
                                            </a>
                                            <a href="/cart/add/<?php echo $sliderItem['id']; ?>/1" data-id="<?php echo $sliderItem['id']; ?>" class="btn btn-primary add-to-cart">В корзину</a>
                                            <script>
                                            
                                            function addhref(){
                                                var href="/cart/add/<?php echo $product['id']; ?>/";
                                                var kolvo= document.getElementById("example-number-input").value;
                                                var add = document.getElementById("buttonAdd");
                                                add.href=href;
                                                console.log(href);
                                                href+=kolvo;
                                                console.log(href);
                                                add.href=href;
                                            }
                                            </script>
                                        </div>
                                        <?php if ($sliderItem['is_new']): ?>
                                            <img src="/template/images/home/new.png" class="new" alt="" />
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
            <?php endforeach; ?>
            </div>
            </div>
        </div>
    </div>
    <?php include_once(ROOT."/views/layouts/footer.php"); ?>

