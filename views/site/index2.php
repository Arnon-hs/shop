<?php include ROOT . '/views/layouts/header.php'; ?>
<div class="wrapper">
    <div class="main">
        <div class="slider mx-auto">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="/template/images/slider/6.jpg" alt="Первый слайд">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="/template/images/slider/7.jpg" alt="Второй слайд">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="/template/images/slider/8.jpg" alt="Третий слайд">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    
        <!-- <div class="category col-2">
            <ul class="list-group list-group-flush ">
                <li class="list-group-item"><a href="">Чай</a></li>
                <li class="list-group-item"><a href="">Кофе</a></li>
                <li class="list-group-item"><a href="">Сладкое</a></li>
                <li class="list-group-item"><a href="">Аксессуары</a></li>
            </ul>
        </div> -->
        <div class="wrapper">
            <div class="container box_wrapper mt-4">
                <div class="row justify-content-between">
                    <div class="col-8 tea_box " >
                        Чай
                    </div>
                    <div class="col-4 aks_box">
                        Аксессуары
                    </div>
                </div>
            </div>
            <div class="container box_wrapper mt-4">
                <div class="row justify-content-between">
                    <div class="col-4 sladkoe_box " >
                        Сладкое
                    </div>
                    <div class="col-8 coffee_box">
                        Кофе
                    </div>
                </div>
            </div>
            <div class="container box_wrapper mt-4">
                <div class="row">
                    <div class="col-12 sale_box">
                        Акция
                    </div>
                </div>
            </div>
            <div class="recomend_Items mt-4 mb-2 container">
                <div class="h1_items">  
                        <h1>Рекомендуемые товары </h1>
                </div>
                <div class="row mb-4 ">
                <?php foreach ($latestProducts as $product): ?>
                <!-- сделать ровное количество и слайдер+is_recomented -->
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
    
    <?php include_once(ROOT."/views/layouts/footer.php"); ?> 
</div>
