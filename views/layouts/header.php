<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"></script>
    <!-- include Cycle2 -->
  <script src="/template/js/jquery.cycle2.js"></script>
  <script src="/template/js/jquery-ui.js"></script>
  <!-- include one or more optional Cycle2 plugins -->
  <script src="/template/js/jquery.cycle2.carousel.js"></script>
  <link rel="stylesheet" href="/template/css/jquery-ui.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="/template/css/style.css">
  <link rel="shortcut icon" href="/template/images/shop/logo.jpg" type="image/jpg">
  <title>Интернет магазин</title>

  <script src="/template/js/script.js"></script>
  <script>
      window.onload = function () {
        document.body.classList.add('loaded_hiding');
        window.setTimeout(function () {
          document.body.classList.add('loaded');
          document.body.classList.remove('loaded_hiding');
        }, 500);
      }
    </script>
</head>

<body>
    <div class="preloader">
        <svg class="preloader__image" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
          <path fill="currentColor"
            d="M304 48c0 26.51-21.49 48-48 48s-48-21.49-48-48 21.49-48 48-48 48 21.49 48 48zm-48 368c-26.51 0-48 21.49-48 48s21.49 48 48 48 48-21.49 48-48-21.49-48-48-48zm208-208c-26.51 0-48 21.49-48 48s21.49 48 48 48 48-21.49 48-48-21.49-48-48-48zM96 256c0-26.51-21.49-48-48-48S0 229.49 0 256s21.49 48 48 48 48-21.49 48-48zm12.922 99.078c-26.51 0-48 21.49-48 48s21.49 48 48 48 48-21.49 48-48c0-26.509-21.491-48-48-48zm294.156 0c-26.51 0-48 21.49-48 48s21.49 48 48 48 48-21.49 48-48c0-26.509-21.49-48-48-48zM108.922 60.922c-26.51 0-48 21.49-48 48s21.49 48 48 48 48-21.49 48-48-21.491-48-48-48z">
          </path>
        </svg>
      </div>
  <div class="wrapper pb-4">
    <header>
      <div class="header-top pt-2 pb-2">
        <div class="about_us container">
          <div class="menu navbar-nav-scroll row justify-content-center align-items-center">
            <ul class="navbar-nav bd-navbar-nav flex-row col-sm-8 offset-sm-2 col-lg-8 offset-lg-0 h_m">
              <li class="mr-4"><a href="/about/"><img src="/template/images/icons/icons8-about-50.png">О нас</a></li>
              <li class="mr-4"><a href="/about/"><img src="/template/images/icons/icons8-wallet-50.png">Оплата</a></li>
              <li class="mr-4"><a href="/about/"><img src="/template/images/icons/icons8-delivery-50.png"> Доставка</a></li>
              <li class="mr-4"><a href="/about/"><img src="/template/images/icons/icons8-contact-us-50.png"> Контакты</a></li>
            </ul>
            <div class="number h_m col-sm-8 offset-sm-2 offset-lg-0 col-lg-4 ">
              <img class="ml-2" src="/template/images/icons/icons8-phone-50.png"> 
              <span>+79689114453</span>
              <a href="/contacts/"><img class="ml-2" src="/template/images/icons/icons8-email-50.png">Обратная связь</a>
            </div>
          </div>
        </div>
      </div>
      <div class="header-middle">
        <div class="container">
          <div class="row justify-content-between align-items-center">
            <div class="col-lg-2 col-sm-2 ml-2 logo">
                <a href="/"><img src="/template/images/shop/logo.jpg"></a>
            </div>
            <div class="col ">
              <div class="div-search">
                <nav class="navbar nav_search">
                  <form class="form-inline">
                    <input class="form-control mr-sm-2 search" type="text" placeholder="Поиск" name="search" id="search"  />
                    
                  </form>
                  <a href="" class="searchLink"><img src="/template/images/icons/icons8-search-32.png" alt="Поиск" class="img-search"></a>
                  <!-- <p>Suggestions: <span id="txtHint"></span></p> -->
                </nav>
              </div>
            </div>
            
            <script>
              $(function(){
                $("#search").autocomplete({
                source:'/components/Search.php',
                minLength: 3,
                });
              });

              var searchLink=$(".searchLink");
              $(".ui-menu-item-wrapper").on(click, function(){
                searchLink.attr("href","/product/11 ");
              });
            </script>

            <div class="col-lg-4 col-sm-12 mb-2 mt-2 mr-2 pull-right">
              <div class="shop-menu ">
                <ul class="nav navbar-nav h_m ">
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
        <ul class="nav nav-tabs nav-fill menu_ul container">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button"
              aria-haspopup="true" aria-expanded="false">Цветы</a>
            <div class="dropdown-menu pl-2">
              <a class="dropdown-item" href="/category/13">Роза кустовая</a>
              <a class="dropdown-item" href="/category/11">Розы</a>
              <a class="dropdown-item" href="/category/12">Хризантемы</a>
              <a class="dropdown-item" href="/category/14">Лилии</a>
              <a class="dropdown-item" href="/category/9">Гвоздики</a>
              <a class="dropdown-item" href="/category/10">Экзотические</a>
              <a class="dropdown-item" href="/category/8">Зелень</a>
              <a class="dropdown-item" href="/catalog">Полный каталог</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true"
              aria-expanded="false">Букеты и композиции</a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="/category/15">Мужские</a>
              <a class="dropdown-item" href="/category/16">Женские</a>
              <a class="dropdown-item" href="/category/17">Детские</a>
              <a class="dropdown-item" href="/catalog">Полный каталог</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true"
              aria-expanded="false">Горшочные растения</a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="/category/19">В подарок</a>
              <a class="dropdown-item" href="/category/20">Комнатные</a>
              <a class="dropdown-item" href="/catalog">Полный каталог</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true"
              aria-expanded="false">Сопутствующие товары </a>
            <div class="dropdown-menu pl-2">
              <h5>Гелевые шарики</h5>
              <a class="dropdown-item" href="/category/22">Латексные</a>
              <a class="dropdown-item" href="/category/23">Фольгированные</a>
              <div class="dropdown-divider"></div>
              <h5>Игрушки</h5>
              <a class="dropdown-item" href="/category/24">Плюшевые</a>
              <a class="dropdown-item" href="/category/25">Сувениры</a>
              <div class="dropdown-divider"></div>
              <h5>Открытки</h5>
              <a class="dropdown-item" href="/category/26">Ручной работы</a>
              <a class="dropdown-item" href="/category/27">Оригинальные</a>
              <div class="dropdown-divider"></div>
              <h5>Сопутствующие товары</h5>
              <a class="dropdown-item" href="/category/26">Коробки</a>
              <a class="dropdown-item" href="/category/27">Сувениры</a>
              <a class="dropdown-item" href="/category/27">Корзины</a>
              <a class="dropdown-item" href="/category/27">Кашпо</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="/catalog">Полный каталог</a>
            </div>
          </li>
          <li class="nav-item">
          <a class="nav-link " href="/services/" role="button" aria-haspopup="true"
              aria-expanded="false">Оформление торжеств</a>
          </li>
        </ul>
      </div>
    </header>
    