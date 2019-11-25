<?php include ROOT . '/views/layouts/header_admin.php'; ?>

<section>
    <div class="container">
        <div class="row">

            <br/>

            <div class="breadcrumbs">
                <ol class="breadcrumb">
                    <li><a href="/admin" >Админпанель</a></li>
                    <li><a href="/admin/product">Управление товарами</a></li>
                    <li class="active">Редактировать товар</li>
                </ol>
            </div>


            <div class="col-12">
                <h4>Редактировать товар #<?php echo $id; ?></h4>
            </div>
            

            <div class="col-lg-5">
                <div class="login-form">
                    <form action="#" method="post" enctype="multipart/form-data">

                        <p>Название товара</p>
                        <input type="text" name="name" placeholder="" value="<?php echo $product['name']; ?>" class="form-control mb-2">

                        <p>Артикул</p>
                        <input type="text" name="code" placeholder="" value="<?php echo $product['code']; ?>" class="form-control mb-2">

                        <p>Стоимость, Р</p>
                        <input type="text" name="price" placeholder="" value="<?php echo $product['price']; ?>" class="form-control mb-2">

                        <p>Категория</p>
                        <select name="category_id" class="form-control mb-2">
                            <?php if (is_array($categoriesList)): ?>
                                <?php foreach ($categoriesList as $category): ?>
                                    <option value="<?php echo $category['id']; ?>" 
                                        <?php if ($product['category_id'] == $category['id']) echo ' selected="selected"'; ?>>
                                        <?php echo $category['name']; ?>
                                    </option>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </select>

                        <p>Производитель</p>
                        <input type="text" name="brand" placeholder="" value="<?php echo $product['brand']; ?>" class="form-control mb-2">

                        <p>Изображение товара</p>
                        <img src="<?php echo Product::getImage($product['id']); ?>" width="200" alt="" />
                        <input type="file" name="image" placeholder="" value="<?php echo $product['image']; ?>" class="form-control mb-2 mt-2">

                        <p>Детальное описание</p>
                        <textarea name="description" class="form-control mb-2"><?php echo $product['description']; ?></textarea>
                        
                        

                        <p>Наличие на складе</p>
                        <select name="availability" class="form-control mb-2">
                            <option value="1" <?php if ($product['availability'] == 1) echo ' selected="selected"'; ?>>Да</option>
                            <option value="0" <?php if ($product['availability'] == 0) echo ' selected="selected"'; ?>>Нет</option>
                        </select>
                        
                        
                        
                        <p>Новинка</p>
                        <select name="is_new" class="form-control mb-2">
                            <option value="1" <?php if ($product['is_new'] == 1) echo ' selected="selected"'; ?>>Да</option>
                            <option value="0" <?php if ($product['is_new'] == 0) echo ' selected="selected"'; ?>>Нет</option>
                        </select>
                        
                        

                        <p>Рекомендуемые</p>
                        <select name="is_recommended" class="form-control mb-2">
                            <option value="1" <?php if ($product['is_recommended'] == 1) echo ' selected="selected"'; ?>>Да</option>
                            <option value="0" <?php if ($product['is_recommended'] == 0) echo ' selected="selected"'; ?>>Нет</option>
                        </select>
                        
                        

                        <p>Статус</p>
                        <select name="status" class="form-control mb-2">
                            <option value="1" <?php if ($product['status'] == 1) echo ' selected="selected"'; ?>>Отображается</option>
                            <option value="0" <?php if ($product['status'] == 0) echo ' selected="selected"'; ?>>Скрыт</option>
                        </select>
                        
                        
                        
                        <input type="submit" name="submit" class="btn btn-primary mb-5" value="Сохранить">
                        
                      
                        
                    </form>
                </div>
            </div>

        </div>
    </div>
</section>

<?php include ROOT . '/views/layouts/footer_admin.php'; ?>

