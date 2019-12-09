<?php include ROOT . '/views/layouts/header_admin.php'; ?>

<section>
    <div class="container">
        <div class="row">

            

            <div class="breadcrumbs">
                <ol class="breadcrumb">
                    <li><a href="/admin">Админпанель</a></li>
                    <li><a href="/admin/category">Управление категориями</a></li>
                    <li class="active">Редактировать категорию</li>
                </ol>
            </div>


            <div class="col-12">
                <h4>Редактировать категорию "<?php echo $category['name']; ?>"</h4>
            </div>
            <br/>

            <div class="col-lg-5">
                <div class="login-form">
                    <form action="#" method="post">

                        <p>Название</p>
                        <input type="text" name="name" placeholder="" value="<?php echo $category['name']; ?>" class="form-control mb-2">

                        <p>Порядковый номер</p>
                        <input type="text" name="sort_order" placeholder="" value="<?php echo $category['sort_order']; ?>" class="form-control mb-2">
                        
                        <p>Статус</p>
                        <select name="status" class="form-control mb-2">
                            <option value="1" <?php if ($category['status'] == 1) echo ' selected="selected"'; ?>>Отображается</option>
                            <option value="0" <?php if ($category['status'] == 0) echo ' selected="selected"'; ?>>Скрыта</option>
                        </select>
                        
                        <p>Группа категорий</p>
                        <select name="groups" class="form-control mb-2">
                            <option value="1" <?php if ($category['groups'] == 1) echo ' selected="selected"'; ?>>1</option>
                            <option value="2" <?php if ($category['groups'] == 2) echo ' selected="selected"'; ?>>2</option>
                            <option value="3" <?php if ($category['groups'] == 3) echo ' selected="selected"'; ?>>3</option>
                            <option value="4" <?php if ($category['groups'] == 4) echo ' selected="selected"'; ?>>4</option>
                        </select>

                        <input type="submit" name="submit" class="btn btn-primary" value="Сохранить">
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include ROOT . '/views/layouts/footer_admin.php'; ?>

