<?php

class Category
{

    /**
     * Returns an array of categories
     */
    public static function getCategoriesList()
    {

        $db = Db::getConnection();

        $categoryList = array();

        $result = $db->query('SELECT id, name, groups FROM category '
                . 'ORDER BY sort_order ASC');

        $i = 0;
        while ($row = $result->fetch()) {
            $categoryList[$i] = $row;
            $categoryList[$i]['groups'] = $row['groups'];
            $categoryList[$i]['name'] = $row['name'];
            $i++;
        }

        return $categoryList;
    }
    public static function getCategoriesListAdmin()
    {
        // Соединение с БД
        $db = Db::getConnection();

        // Запрос к БД
        $result = $db->query('SELECT id, name, sort_order, status FROM category ORDER BY id ASC');

        // Получение и возврат результатов
        $categoryList = array();
        $i = 0;
        while ($row = $result->fetch()) {
            $categoryList[$i] = $row;
            $categoryList[$i]['name'] = $row['name'];
            $categoryList[$i]['sort_order'] = $row['sort_order'];
            $categoryList[$i]['status'] = $row['status'];
            $i++;
        }
        return $categoryList;
    }
    public static function getStatusText($status)
    {
        switch ($status) {
            case '1':
                return 'Отображается';
                break;
            case '0':
                return 'Скрыта';
                break;
        }
    }
    public static function getCategoriesCase($category)
    {
        
            if($category>=11 && $category<=14)
            {
                $group=1;
                return $group;
            }
            if($category>=15 && $category<=17)
            {
                $group=2;
                return $group;
            }
            if($category>=19 && $category<=21)
            {
                $group=3;
                return $group;
            }
            if($category>=22 && $category<=27)
            {
                $group=4;
                return $group;
            }
        
    }
    public static function getCategoryById($id)
    {
        // Соединение с БД
        $db = Db::getConnection();

        // Текст запроса к БД
        $sql = 'SELECT * FROM category WHERE id = :id';

        // Используется подготовленный запрос
        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);

        // Указываем, что хотим получить данные в виде массива
        $result->setFetchMode(PDO::FETCH_ASSOC);

        // Выполняем запрос
        $result->execute();

        // Возвращаем данные
        return $result->fetch();
    }
    public static function createCategory($name, $sortOrder, $status)
    {
        // Соединение с БД
        $db = Db::getConnection();

        // Текст запроса к БД
        $sql = 'INSERT INTO category (name, sort_order, status) '
                . 'VALUES (:name, :sort_order, :status)';

        // Получение и возврат результатов. Используется подготовленный запрос
        $result = $db->prepare($sql);
        $result->bindParam(':name', $name, PDO::PARAM_STR);
        $result->bindParam(':sort_order', $sortOrder, PDO::PARAM_INT);
        $result->bindParam(':status', $status, PDO::PARAM_INT);
        return $result->execute();
    }
    public static function updateCategoryById($id, $name, $sortOrder, $status)
    {
        // Соединение с БД
        $db = Db::getConnection();

        // Текст запроса к БД
        $sql = "UPDATE category
            SET 
                name = :name, 
                sort_order = :sort_order, 
                status = :status
            WHERE id = :id";

        // Получение и возврат результатов. Используется подготовленный запрос
        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        $result->bindParam(':name', $name, PDO::PARAM_STR);
        $result->bindParam(':sort_order', $sortOrder, PDO::PARAM_INT);
        $result->bindParam(':status', $status, PDO::PARAM_INT);
        return $result->execute();
    }
    public static function deleteCategoryById($id)
    {
        // Соединение с БД
        $db = Db::getConnection();

        // Текст запроса к БД
        $sql = 'DELETE FROM category WHERE id = :id';

        // Получение и возврат результатов. Используется подготовленный запрос
        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        return $result->execute();
    }
}