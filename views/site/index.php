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
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="/template/images/slider/10.jpg" alt="Второй слайд">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="/template/images/slider/11.jpg" alt="Третий слайд">
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
                    <div class="col-8 tea_box ">
                        <img src="/template/images/home/1.jpg">
                    </div>
                    <div class="col-4 aks_box">
                        <img src="/template/images/home/3.jpg" alt="">
                    </div>
                </div>
            </div>
            <div class="container box_wrapper mt-4">
                <div class="row justify-content-between">
                    <div class="col-4 sladkoe_box " >
                        <img src="/template/images/home/4.jpg" alt="">
                    </div>
                    <div class="col-8 coffee_box">
                        <img src="/template/images/home/2.jpg" alt="">
                    </div>
                </div>
            </div>
            <div class="container box_wrapper mt-4">
                <div class="row">
                    <div class="col-12 sale_box">
                        <img src="/template/images/home/5.jpg" alt="">
                    </div>
                </div>
            </div>
            <div class="recomend_Items mt-4 mb-2 container">
                    <h2 class="title text-center">Рекомендуемые товары</h2>
                    
                    <div class="cycle-slideshow" 
                         data-cycle-fx=carousel
                         data-cycle-timeout=5000
                         data-cycle-carousel-visible=4
                         data-cycle-carousel-fluid=true
                         data-cycle-slides="div.item"
                         data-cycle-prev="#prev"
                         data-cycle-next="#next"
                         
                         >                        
                            <?php foreach ($sliderProducts as $sliderItem): ?>
                            <div class="item">
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
