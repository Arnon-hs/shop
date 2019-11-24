<?php include ROOT . '/views/layouts/header.php'; ?>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-12">
            <h2 class="text-center">Кабинет пользователя <?php echo $user['firstname']; ?></h2>
        </div>

        <div class="col-12 ">
            <ul class="text-center">
                <li><a href="/cabinet/edit">Редактировать личные данные</a></li>
                <li><a href="/user/history">История заказов</a></li>
            </ul>
        </div>
        
    </div>
</div>


<!-- <?php include ROOT . '/views/layouts/footer.php'; ?> -->