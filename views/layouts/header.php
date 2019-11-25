<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <!-- <script
			  src="https://code.jquery.com/jquery-3.4.1.js"
			  integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
			  crossorigin="anonymous"></script> -->
  
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"></script>
    <!-- include Cycle2 -->
  <script src="/template/js/jquery.cycle2.js"></script>

  <!-- include one or more optional Cycle2 plugins -->
  <script src="/template/js/jquery.cycle2.carousel.js"></script>
  <!-- <link rel="stylesheet" href="/template/css/main.css"> -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="/template/css/style.css">
  <link rel="shortcut icon" href="/template/images/shop/logo.jpg" type="image/png">
  <title>Интернет магазин</title>

  <script src="/template/js/script.js"></script>
</head>

<body>
  <div class="wrapper">
    <header>
      <div class="header-top mt-2">
        <div class="about_us container">
          <div class="menu navbar-nav-scroll row">
            <ul class="navbar-nav bd-navbar-nav flex-row col-12 col-md-8 h_m">
              <li class="mr-4"><a href="/about/"><img src="/template/images/icons/icons8-about-50.png">О нас</a></li>
              <li class="mr-4"><a href="/about/"><img src="/template/images/icons/icons8-wallet-50.png">Оплата</a></li>
              <li class="mr-4"><a href="/about/"><img src="/template/images/icons/icons8-delivery-50.png"> Доставка</a></li>
              <li class="mr-4"><a href="/contacts/"><img src="/template/images/icons/icons8-contact-us-50.png"> Контакты</a></li>
            </ul>
            <div class="number h_m col-6 col-md-4">+79258605436<img class="ml-2" src="/template/images/icons/icons8-phone-50.png"> </div>
          </div>
        </div>
      </div>
      <div class="header-middle">
        <div class="container">
          <div class="row justify-content-between">
            <div class="col-md-2 ml-2">
              <div class="logo pull-left">
                <a href="/"><img src="/template/images/shop/logo.jpg"></a>
              </div>
            </div>
            <div class="col">
              <div class="div-search">
                <nav class="navbar nav_search">
                  <form class="form-inline">
                    <input class="form-control mr-sm-2 search" type="search" placeholder="Поиск" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Поиск</button>
                  </form>
                </nav>
              </div>
            </div>
          
            <div class="col-md-4 mt-2 mr-2 pull-right">
              <div class="shop-menu">
                <ul class="nav navbar-nav float-right h_m">
                  <li><a href="/cart/">
                    <img src="/template/images/icons/icons8-shopping-cart-50.png">
                    Корзина
                      (<span id="cart-count"><?php echo Cart::countItems();?></span>)
                    </a></li> 
                  <?php if(User::isGuest()): ?>
                  <li><a href="/user/login/"><img src="/template/images/icons/icons8-login-50.png"> Вход</a></li> 
                  <?php else: ?>
                  <li><a href="/cabinet/"><img src="/template/images/icons/icons8-account-50.png"> Аккаунт</a></li> 
                  <li><a href="/user/logout/"><img src="/template/images/icons/icons8-login-rounded-50.png"> Выход</a></li> 
                  <?php endif ?>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="menu_header">
        <ul class="nav nav-tabs nav-fill menu_ul ">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button"
              aria-haspopup="true" aria-expanded="false">Кофе</a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="/category/1">Зерновой</a>
              <a class="dropdown-item" href="/category/4">Молотый</a>
              <a class="dropdown-item" href="/category/2">Растворимый</a>
              <a class="dropdown-item" href="/category/3">В капсулах</a>
              <a class="dropdown-item" href="/catalog">Полный каталог</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true"
              aria-expanded="false">Чай</a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="/category/5">Зеленый</a>
              <a class="dropdown-item" href="/category/6">Черный</a>
              <a class="dropdown-item" href="/category/7">Фруктовый</a>
              <a class="dropdown-item" href="/category/8">Пуэр</a>
              <a class="dropdown-item" href="/category/9">Улун</a>
              <a class="dropdown-item" href="/category/10">Травяной</a>
              <a class="dropdown-item" href="/catalog">Полный каталог</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true"
              aria-expanded="false">Сладкое</a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="#">Сиропы</a>
              <a class="dropdown-item" href="#">Приправы</a>
              <a class="dropdown-item" href="#">Сахар</a>
              <a class="dropdown-item" href="#">Топпинги</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true"
              aria-expanded="false">Аксессуары </a>
            <div class="dropdown-menu">
              <h5>Для чая</h5>
              <a class="dropdown-item" href="#">Аксессуары для чайной церемонии</a>
              <a class="dropdown-item" href="#">Чайный сервиз</a>
              <a class="dropdown-item" href="#">Банки для хранения</a>
              <a class="dropdown-item" href="#">Чайники</a>
              <div class="dropdown-divider"></div>
              <h5>Для кофе</h5>
              <a class="dropdown-item" href="#">Турки</a>
              <a class="dropdown-item" href="#">Кофемолки</a>
              <a class="dropdown-item" href="#">Кофемашины</a>
              <div class="dropdown-divider"></div>
              <h5>Общее</h5>
              <a class="dropdown-item" href="#">Термосы</a>
              <a class="dropdown-item" href="#">Френч-прессы</a>
            </div>
          </li>
        </ul>
      </div>
    </header>
    