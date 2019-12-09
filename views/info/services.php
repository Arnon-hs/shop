<?php include ROOT . '/views/layouts/header.php'; ?>
<div class="container">
    <div class="row">
        <div class="container slider mx-auto mt-4">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="/template/images/slider/16.jpg" alt="Первый слайд">
                            <p>Оформление свадеб</p>
                            <span>Наши специалисты профессионалы своего дела.</span>
                            
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="/template/images/slider/17.jpg" alt="Второй слайд">
                            <p>Конкурентные цены</p>
                            <span>договорная цена в зависимости от сложности работы</span>
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="/template/images/slider/18.jpg" alt="Третий слайд">
                            <p>Оформление услуги</p>
                            <span>осуществляется по номеру: +79689114453</span>
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
        </div>
    </div>
</div>
<?php include ROOT . '/views/layouts/footer.php'; ?>