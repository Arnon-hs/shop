<?php include ROOT . '/views/layouts/header.php'; ?>
    <div class="container">
        <div class="crumbs">Главная>>Кофе>>Зерновой</div>
        <div class="row mt-4 mb-4">
            <div class="col-2 category ">
                <p>Категории</p>
                <?php foreach ($categories as $categoryItem): ?>
                    <?php echo $categoryItem['name'];?><br />
                <?php endforeach; ?>
            </div> 
            <div class="col-10 productList ">
                    <div class="row mb-4 mt-4 mr-4 ml-4">
                            <div class="item_box col mr-4">
                                <a href="http://shop/product">
                                    <img src="/template/images/product-details/te_guan_in.jpg" >
                                </a>
                                <div class="name_product">
                                    <p>Те Гуань Инь</p>
                                    <h5>300р</h5>
                                </div>
                            </div> 
                            <div class="item_box col mr-4">
                                <a href="http://shop/product">
                                    <img src="/template/images/product-details/puer.jpg" >
                                </a>
                                <div class="name_product">
                                    <p> Шу Пуэр</p>
                                    <h5>200р</h5>
                                </div> 
                            </div>
                            <div class="item_box col mr-4">
                                <a href="http://shop/product">
                                    <img src="/template/images/product-details/karkade.jpg" >
                                </a>
                                <div class="name_product">
                                        <p>Каркаде</p>
                                        <h5>150р</h5>
                                </div>
                                
                            </div>
                            <div class="item_box col ">
                                <a href="http://coffee/products">
                                    <img src="/template/images/product-details/earl_grey.jpg" >
                                </a>
                                <div class="name_product">
                                        <p> Earl gray</p>
                                        <h5>170р</h5>
                                </div>
                            </div>      
                            <!-- <div class="item_box col">
                                <a href="http://coffee/products">
                                    <img src="/template/images/product-details/da_hun_pao.jpg" >
                                </a>
                                <div class="name_product">
                                    <p> Да хун Пао</p>
                                </div>
                            </div>      -->
                        </div>
            </div>
        </div>  
        <!-- <?php include_once(ROOT."/views/layouts/footer.php"); ?> -->

