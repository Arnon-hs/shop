<?php include ROOT . '/views/layouts/header.php'; ?>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-12 mt-4">
            <h2 class="">Кабинет пользователя <?php echo $user['firstname']; ?></h2>
        </div>

        <div class="col-12 ">
            <ul class=" list-unstyled h_m">
                <li><a href="/cabinet/edit"><img src="/template/images/icons/icons8-edit-50.png">Редактировать личные данные</a></li>
                <li><a href="/user/history"><img src="/template/images/icons/icons8-order-history-50.png"> История заказов</a></li>
            </ul>
        </div>
        
    </div>
</div>


<!-- <?php include ROOT . '/views/layouts/footer.php'; ?> -->