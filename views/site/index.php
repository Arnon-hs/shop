<?php include ROOT . '/views/layouts/header.php'; ?>
<div class="wrapper mt-4">
    <div class="main">
        <div class="container slider mx-auto">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="/template/images/slider/9.jpeg" alt="Первый слайд">
                        <p>Свежие пионы</p>
                        <span>Мы собрали специально для вас лучшие бутоны.</span>
                        
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="/template/images/slider/12.jpg" alt="Второй слайд">
                        <p>Акция на букеты</p>
                        <span>Скидки до 30%. Следите за ценами, новые акции каждую неделю!</span>
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="/template/images/slider/11.jpg" alt="Третий слайд">
                        <p>Составим композицию</p>
                        <span>Наши флористы подберут лучшие цветы для вашей композиции.</span>
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
        <div class="wrapper">
            <div class="container box_wrapper mt-4">
                <div class="row justify-content-between">
                    <div class="col-8 tea_box ">
                        <a href="/category/11">
                            <img src="/template/images/home/13.jpg">
                            <div class="banner-long-cveti banner">
                                <a href="/category/11">Цветы</a>
                                <br>
                                <span>Большой выбор свежих цветов</span>
                            </div>
                        </a>
                    </div>
                    <div class="col-4 aks_box">
                        <a href="/category/24">
                            <img src="/template/images/home/3.jpg" alt="">
                            <div class="banner-short-igr banner">
                                <a href="/category/24">Игрушки</a>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="container box_wrapper mt-4">
                <div class="row justify-content-between">
                    <div class="col-4 sladkoe_box " >
                        <a href="/category/22">
                            <img src="/template/images/home/4.jpg" alt="">
                            <div class="banner-short-shok banner ">
                                <a href="/category/22"> Сладкое </a>
                            </div>
                        </a>
                    </div>
                    <div class="col-8 coffee_box">
                        <a href="/category/15">
                            <img src="/template/images/home/14.jpg" alt="">
                            <div class="banner-long-buket banner">
                                <a href="/category/15"> Букеты </a>
                                <br>
                                <span>Лучшие композиции от наших флористов</span>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="container box_wrapper mt-4">
                <div class="row">
                    <div class="col-12 sale_box">
                        <a href="/category/17">
                            <img src="/template/images/home/5-1.jpg" alt="">
                        </a>
                    </div>
                </div>
            </div>
            <div class="recomend_Items mt-4 mb-2 container">
                    <h2 class="title text-center">Рекомендуемые товары</h2>
                    
                    <div class="cycle-slideshow" 
                         data-cycle-fx=carousel
                         data-cycle-timeout=5000
                         data-cycle-carousel-visible=5
                         data-cycle-carousel-fluid=true
                         data-cycle-slides="div.item"
                         data-cycle-prev="#prev"
                         data-cycle-next="#next"
                         
                         >                        
                            <?php foreach ($sliderProducts as $sliderItem): ?>
                            <div class="item mr-4 ml-4 mt-2">
                                <div class="product-image-wrapper">
                                    <div class="single-products">
                                        <div class="productinfo text-center">
                                            <a href="/product/<?php echo $sliderItem['id'];?>">
                                                <img src="<?php echo Product::getImage($sliderItem['id']); ?>" alt="" />
                                                <h2><?php echo $sliderItem['price'];?>р</h2>
                                                <p>
                                                    <?php echo $sliderItem['name'];?>
                                                </p>
                                            </a>
                                            <a href="/cart/add/<?php echo $sliderItem['id']; ?>/1" data-id="<?php echo $sliderItem['id']; ?>" class="btn btn-primary add-to-cart">В корзину</a>
                                        </div>
                                        <?php if ($sliderItem['is_new']): ?>
                                            <img src="/template/images/home/new.png" class="new" alt="" />
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                            <?php endforeach; ?>
                    </div>

                    <a class="left recommended-item-control " id="prev" href="#recommended-item-carousel" data-slide="prev">
                        <img src="/template/images/icons/icons8-back-32.png">
                    </a>
                    <a class="right recommended-item-control " id="next"  href="#recommended-item-carousel" data-slide="next">
                            <img src="/template/images/icons/icons8-forward-32.png">
                    </a>

                </div>
            </div>
        </div>
    </div>
    
    <?php include_once(ROOT."/views/layouts/footer.php"); ?> 
</div>
