<?php include ROOT . '/views/layouts/header_admin.php'; ?>

<section>
    <div class="container">
        <div class="row">

            <div class="breadcrumbs">
                <ol class="breadcrumb">
                    <li><a href="/admin">Админпанель</a></li>
                    <li><a href="/admin/product">Управление товарами</a></li>
                    <li class="active">Редактировать товар</li>
                </ol>
            </div>


            <div class="col-12">
                <h4>Добавить новый товар</h4>
            </div>

            <?php if (isset($errors) && is_array($errors)): ?>
                <ul>
                    <?php foreach ($errors as $error): ?>
                        <li> - <?php echo $error; ?></li>
                    <?php endforeach; ?>
                </ul>
            <?php endif; ?>

            <div class="col-lg-5">
                <div class="login-form">
                    <form action="#" method="post" enctype="multipart/form-data">

                        <p>Название товара</p>
                        <input type="text" name="name" placeholder="" value="" class="form-control mb-2">

                        <p>Артикул</p>
                        <input type="text" name="code" placeholder="" value="" class="form-control mb-2">

                        <p>Стоимость, Р</p>
                        <input type="text" name="price" placeholder="" value="" class="form-control mb-2">

                        <p>Категория</p>
                        <select name="category_id" class="form-control mb-2">
                            <?php if (is_array($categoriesList)): ?>
                                <?php foreach ($categoriesList as $category): ?>
                                    <option value="<?php echo $category['id']; ?>">
                                        <?php echo $category['name']; ?>
                                    </option>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </select>

                        <p>Производитель</p>
                        <input type="text" name="brand" placeholder="" value="" class="form-control mb-2">

                        <p>Изображение товара</p>
                        <input type="file" name="image" placeholder="" value="" class="form-control mb-2">

                        <p>Детальное описание</p>
                        <textarea name="description" class="form-control mb-2"></textarea>


                        <p>Наличие на складе</p>
                        <select name="availability" class="form-control mb-2">
                            <option value="1" selected="selected">Да</option>
                            <option value="0">Нет</option>
                        </select>

                      

                        <p>Новинка</p>
                        <select name="is_new" class="form-control mb-2">
                            <option value="1" selected="selected">Да</option>
                            <option value="0">Нет</option>
                        </select>

                        

                        <p>Рекомендуемые</p>
                        <select name="is_recommended" class="form-control mb-2">
                            <option value="1" selected="selected">Да</option>
                            <option value="0">Нет</option>
                        </select>

                        

                        <p>Статус</p>
                        <select name="status" class="form-control mb-4">
                            <option value="1" selected="selected">Отображается</option>
                            <option value="0">Скрыт</option>
                        </select>

                       

                        <input type="submit" name="submit" class="btn btn-primary mb-4" value="Сохранить">

                    </form>
                </div>
            </div>

        </div>
    </div>
</section>

<?php include ROOT . '/views/layouts/footer_admin.php'; ?>

