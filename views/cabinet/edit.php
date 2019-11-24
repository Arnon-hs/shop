<?php include ROOT . '/views/layouts/header.php'; ?>

<form method="post" action="#" class="reg mt-3 mb-3">
<?php if ($result): ?>
    <div class="row justify-content-center">
        <div class="col text-center">
            <h3>Данные успешно изменены!</h3>
        </div>
        <!-- <div class="w-100"></div>
        <div class="col text-center">
            <!-- <input type="button" class="btn btn-primary " onclick="showWindow();" value="Войти"> -->
            <!-- <a href="/user/login/">Логин</a> 
        </div> -->
    </div>
<?php else: ?>
    <h3 class="text-center">Редактирование данных пользователя</h3>
    <div class="row">
        <?php if(isset($errors)&& is_array($errors)): ?>
            <ul>
                <?php foreach ($errors as $error): ?>
                <li> - <?php echo $error; ?> </li>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>
        
        
        <div class="col-md-12 mb-3">
            <label>Имя</label>
            <input type="text" class="form-control" value="<?php echo $firstname;?>" name="firstname">
            
        </div>
         <div class="col-md-12 mb-3">
            <label>Фамилия</label>
            <input type="text" class="form-control" value="<?php echo $secondname;?>" name="secondname">
            
        </div>
        <div class="col-md-12 mb-3">
            <label>Отчество</label>
            <input type="text" class="form-control" value="<?php echo $lastname;?>" name="lastname" >
            
        </div>
    
    
        <!-- <div class="col-md-12 mb-3">
            <label >Email</label>
            <input type="text" class="form-control" placeholder="qwerty12345@mail.ru" value="" name="email">
            
        </div>  -->
    
    
        <div class="col-md-12 mb-3">
                <label>Пароль</label>
                <input type="password" class="form-control" value="<?php echo $password;?>" name="password">
                
        </div>
        
    <input type="submit" name="submit" class="btn btn-primary mb-2 ml-3" value="Сохранить">
    
    </div> 
    <?php endif ?>
</form>
<!-- <?php include ROOT . '/views/layouts/footer.php'; ?> -->