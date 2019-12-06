<?php include ROOT . '/views/layouts/header.php'; ?>

<section>
    <div class="container mt-2">
        <div class="row">       
            <div class="breadcrumbs">
                <ol class="breadcrumb">
                    <li><a href="/cabinet">Кабинет</a></li>
                    <li class="active">Просмотр заказов</li>
                </ol>
            </div>

            <div class="col-12">
                <h4>История заказов</h4>
            </div>
            <table class="table-bordered table-striped table">
                <tr>
                    <th>ID заказа</th>
                    <th>Имя покупателя</th>
                    <th>Телефон покупателя</th>
                    <th>Дата оформления</th>
                    <th>Статус</th>
                    <th>Комментарий</th>
                    <th>Товары</th>
                    <th>Количество</th>
                    <th>Цена</th>
                </tr>
                
                <?php foreach ($ordersList as $order): ?>
                <?php $sum=0;?>
                    
                    <tr>
                        <td><?php echo $order['id']; ?></td>
                        <td><?php echo $order['user_name']; ?></td>
                        <td><?php echo $order['user_phone']; ?></td>
                        <td><?php echo $order['date']; ?></td>
                        <td><?php echo Order::getStatusText($order['status']); ?></td>    
                        <td><?php echo $order['user_comment'];?></td>
                        <td colspan="3">
                        <table>
                            <?php foreach ($products as $product):?>
                            <!-- выводит последние товары!!! -->
                                <tr rowspan="<?php echo (count($products));?>">
                                    <td><?php echo $product['name']; ?></td>
                                    <td><?php echo $productsQuantity[$product['id']];?>
                                    <td><?php echo $product['price']; ?></td>
                                    <?php 
                                    $sum=$sum+($product['price']*$productsQuantity[$product['id']])?>
                                </tr>
                            <?php endforeach;?>
                        </table>
                    </td>
                            <tr>
                                <td colspan="8">Общая стоимость:</td>
                                <td><?php echo $sum?>р</td>
                            </tr>
                    </tr>
                    
                    
                <?php endforeach; ?>
                
            </table>

        </div>
    </div>
</section>

<?php include ROOT . '/views/layouts/footer.php'; ?>

