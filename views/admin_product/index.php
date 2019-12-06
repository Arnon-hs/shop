<?php include ROOT . '/views/layouts/header_admin.php'; ?>

<section>
    <div class="container mb-4">
        <div class="row">

            <div class="breadcrumbs">
                <ol class="breadcrumb">
                    <li><a href="/admin">Админпанель</a></li>
                    <li class="active">Управление товарами</li>
                </ol>
            </div>

            <a href="/admin/product/create"><i class="fa fa-plus"></i>
            <input type="button" class="mt-1 ml-2 btn btn-primary" value="Добавить товар"></a>
            
            <div class="col-12">
                <h4>Список товаров</h4>
            </div>
            
            <table class="table-bordered table-striped table h_m">
                <tr>
                    <th>ID товара</th>
                    <th>Артикул</th>
                    <th>Название товара</th>
                    <th>Цена</th>
                    <th>Редактировать</th>
                    <th>Удалить</th>
                </tr>
                <?php foreach ($productsList as $product): ?>
                    <tr>
                        <td><?php echo $product['id']; ?></td>
                        <td><?php echo $product['code']; ?></td>
                        <td><?php echo $product['name']; ?></td>
                        <td><?php echo $product['price']; ?></td>  
                        <td><a href="/admin/product/update/<?php echo $product['id']; ?>" title="Редактировать"><img src="/template/images/icons/icons8-edit-50.png"> </a></td>
                        <td><a href="/admin/product/delete/<?php echo $product['id']; ?>" title="Удалить"><img src="/template/images/icons/icons8-delete-50.png"> </a></td>
                    </tr>
                <?php endforeach; ?>
            </table>

        </div>
    </div>
</section>

<?php include ROOT . '/views/layouts/footer_admin.php'; ?>

