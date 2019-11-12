<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"></script>
  <!-- <link rel="stylesheet" href="/template/css/main.css"> -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="/template/css/style.css">
  <link rel="shortcut icon" href="/template/images/product-details/tea-coffee-logo.png" type="image/png">
  <title>SHOP</title>

  <script src="/template/js/script.js"></script>
</head>

<body>
  <div class="wrapper">
    <header>
      <div class="header-top">
        <div class="about_us container">
          <div class="menu navbar-nav-scroll row">
            <ul class="navbar-nav bd-navbar-nav flex-row col-12 col-md-8">
              <li class="mr-4"><a href="/views/site/about.php">О нас</a></li>
              <li class="mr-4"><a href="/views/site/oplata.php">Оплата</a></li>
              <li class="mr-4"><a href="delivery.php">Доставка</a></li>
              <li class="mr-4"><a href="contact.php">Контакты</a></li>
            </ul>
            <div class="number col-6 col-md-4 ">+79258605436</div>
          </div>
        </div>
      </div>
      <hr />
      <div class="header-middle">
        <div class="container">
          <div class="row">
            <div class="col-md-2 ml-2">
              <div class="logo pull-left">
                <a href="/"><img src="/template/images/product-details/tea-coffee-logo.png"></a>
              </div>
            </div>
            <div class="col">
              <div class="div-search">
                <nav class="navbar nav_search">
                  <form class="form-inline">
                    <input class="form-control mr-sm-2 search" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Поиск</button>
                  </form>
                </nav>
              </div>
            </div>
            <!-- <div class="login icons">
              <!-- <div id="btn" onclick="showWindow()"><img src="/template/images/product-details/log.png"></div>
              <div id="content_window">
                <?php include_once(ROOT."/views/login/login.php") ?>
              </div> -->
              <!-- <a href="/user/login/"><img src="/template/images/product-details/log.png" alt="login"></a>
            </div>
            <div class="profile icons">
              <a href="/cabinet/"> 
                <img src="/template/images/product-details/login.png">
              </a>
            </div>
            <div class="logout"><a href="/user/logout/">Выход</a></div>
            <div class="cart icons"><a href=""><img src="/template/images/product-details/cart.png"></a></div>
              -->
            <div class="col-md-4 mt-2 mr-2">
              <div class="shop-menu">
                <ul class="nav navbar-nav float-right">
                  <li><a href=""><i class="fa"></i>Корзина</a></li> 
                  <?php if(User::isGuest()): ?>
                  <li><a href="/user/login/"><i class="fa"></i>Вход</a></li> 
                  <?php else: ?>
                  <li><a href="/cabinet/"><i class="fa"></i>Аккаунт</a></li> 
                  <li><a href="/user/logout/"><i class="fa"></i>Выход</a></li> 
                  <?php endif ?>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <hr />
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
              <a class="dropdown-item" href="#">Зеленый</a>
              <a class="dropdown-item" href="#">Черный</a>
              <a class="dropdown-item" href="#">Фруктовый</a>
              <a class="dropdown-item" href="#">Пуэр</a>
              <a class="dropdown-item" href="#">Улун</a>
              <a class="dropdown-item" href="#">Травяной</a>
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