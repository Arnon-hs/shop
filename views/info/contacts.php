<?php include ROOT . '/views/layouts/header.php'; ?>
<div class="container">
    <div class="row ">
    <form action="#" method="post" style="width: 100%">
        
            <div class="col-md-6 offset-md-3 mb-3 mt-3 text-center">
                <h5>Свяжитесь с нами</h5>
                <?php if($result):?>
                    <p>Сообщение отправлено, мы ответим вам на указанный email</p>
                <?php else:?>
                    <?php if(isset($errors)&& is_array($errors)): ?>
                    <ul class="mt-2">
                        <?php foreach ($errors as $error): ?>
                            <li> - <?php echo $error; ?> </li>
                        <?php endforeach; ?>
                    </ul>
                <?php endif; ?>
            </div>
            
            <div class="col-md-6 offset-md-3 mb-3">
                <label>Ваш E-mail</label>
                <input type="email"  name="userEmail" placeholder="qwerty12345@mail.ru" value="" class="form-control">
            </div>
            <div class="col-md-6 offset-md-3 mb-3">
                <label>Сообщение</label>
                <input type="text" name="userText" value="" class="form-control">
                
            </div>
            <div class="col-md-6 offset-md-3">
                <input type="submit" name="submit" class="btn btn-primary mb-2" type="submit" value="Отправить">
            </div>
                <?php endif;?>
    </form>

    </div>
</div>
<?php include ROOT . '/views/layouts/footer.php'; ?>