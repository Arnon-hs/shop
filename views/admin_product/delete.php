<?php include ROOT . '/views/layouts/header_admin.php'; ?>

<section>
    <div class="container mb-4">
        <div class="row">


            <div class="breadcrumbs">
                <ol class="breadcrumb">
                    <li><a href="/admin">Админпанель</a></li>
                    <li><a href="/admin/product">Управление товарами</a></li>
                    <li class="active">Удалить товар</li>
                </ol>
            </div>


            <div class="col-12">
                <h4>Удалить товар #<?php echo $id; ?></h4>
            </div>
            <div class="col-6">
                <p>Вы действительно хотите удалить этот товар?</p>

                <form method="post">
                    <input type="submit" name="submit" value="Удалить" class="btn btn-primary"/>
                </form>
            </div>
        </div>
    </div>
</section>

<?php include ROOT . '/views/layouts/footer_admin.php'; ?>

