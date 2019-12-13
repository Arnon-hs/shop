<?php

class UserController
{

    public function actionRegister()
    {
        $name = '';
        $lastName='';
        $secondName='';
        $email = '';
        $password = '';
        $password_confirm='';
        $result = false;
        
        if (isset($_POST['submit'])) {
            $name = $_POST['firstName'];
            $secondName = $_POST['secondName'];
            $lastName = $_POST['lastName'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $hashPass=crypt($password,'$2a$07$usesomesillystringforsalt$');
            $password_confirm=$_POST['password_confirm'];
            $hashPassConfirm=crypt($password_confirm,'$2a$07$usesomesillystringforsalt$');
            $errors=false;
            
            if (!User::checkName($name,$lastName,$secondName)) {
                $errors[] = 'Имя не должно быть короче 2-х символов';
            }
            
            if(!User::checkPasswordConfirm($hashPass,$hashPassConfirm)){
                $errors[] = 'Пароли не совпадают';
            }

            if (!User::checkEmail($email)) {
                $errors[] = 'Неправильный email';
            }
            
            if (!User::checkPassword($password)) {
                $errors[] = 'Пароль не должен быть короче 6-ти символов';
            }
            
            if (User::checkEmailExists($email)) {
                $errors[] = 'Такой email уже используется';
            }
            
            if ($errors == false) {
                $result = User::register($name,$secondName,$lastName, $email, $hashPass);
            }

        }

        require_once(ROOT . '/views/login/register.php');

        return true;
    }

    public function actionLogin()
    {
        $email='';
        $password='';
        if (isset($_POST['submit'])) {
            $email = $_POST['email'];
            $password = $_POST['password'];
            $hashPass=crypt($password,'$2a$07$usesomesillystringforsalt$');
            $errors=false;
            
            //Валидация полей
            if(!User::checkEmail($email)){
                $errors[]='Неправильный email';
            }
            if (!User::checkPassword($password)) {
                $errors[] = 'Пароль не должен быть короче 6-ти символов';
            }
            //Проверка существует ли пользователь
            $userId=User::checkUserData($email,$hashPass);
            //если неправильные данные то показываем ошибку
            if($userId==false) $errors[]='Неправильные данные для входа на сайт';
            else{
                //если все окей то запоминаем пользователя в сессию 
                User::auth($userId);
                //перенаправляем в кабинет
                header("Location: /cabinet/");
            }
        }

        require_once(ROOT.'/views/login/log.php');
        return true;
    }
    public function actionLogout()
    {
        unset($_SESSION["user"]);//удаление пользователя из сессии если он был
        header("Location: /");
    }
    public function actionHistory()
    {
        $userId= User::checkLogged();
        
        // Получаем данные о конкретном заказе
        $ordersList=array();
        $ordersList = Order::getOrdersListById($userId);
        // $productsInOrder=array();
        foreach($ordersList as $order){
            // print_r($order);
            // echo '<br />';
            // Получаем массив с идентификаторами и количеством товаров
            $productsQuantity = json_decode($order['products'], true);

            // Получаем массив с индентификаторами товаров
            $productsIds = array_keys($productsQuantity);
            
            
            // Получаем список товаров в заказе
            $products = Product::getProductsByIds($productsIds);
            // array_push($productsInOrder, $products);
            // echo '<br />';
            // print_r($productsInOrder);
            // echo '<br />';
            // echo '<br />';
            // print_r($order['products']);
        }

        // print_r($ordersList);
        require_once(ROOT.'/views/cabinet/history.php');
        return true;
    }
}
