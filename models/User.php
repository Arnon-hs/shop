<?php

class User
{
    public static function register($name,$secondName,$lastName, $email, $password) {
        
        $db = Db::getConnection();
        
        $sql = 'INSERT INTO user (firstName, secondName, lastName, email, password) '
                . 'VALUES (:firstName, :secondName, :lastName, :email, :password)';
        
        $result = $db->prepare($sql);
        $result->bindParam(':firstName', $name, PDO::PARAM_STR);
        $result->bindParam(':secondName', $secondName, PDO::PARAM_STR);
        $result->bindParam(':lastName', $lastName, PDO::PARAM_STR);
        $result->bindParam(':email', $email, PDO::PARAM_STR);
        $result->bindParam(':password', $password, PDO::PARAM_STR);
        
        return $result->execute();
    }
    
    /**
     * Проверяет имя: не меньше, чем 2 символа
     */
    public static function checkName($name,$lastName,$secondName) {
        if ((strlen($name)>=2) && (strlen($secondName)>=2) && (strlen($lastName)>= 2)) {
            return true;
        }
        return false;
    }
    
    /**
     * Проверяет имя: не меньше, чем 6 символов
     */
    public static function checkPassword($password) {
        if (strlen($password) >= 6) {
            return true;
        }
        return false;
    }
    public static function checkPasswordConfirm($password,$password_confirm){
        if($password==$password_confirm) return true;
        return false;
    }
    /**
     * Проверяет email
     */
    public static function checkEmail($email) {
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return true;
        }
        return false;
    }
    public static function checkPhone($phone)
    {
        if ((strlen($phone) >= 10)&((ctype_digit($phone)==true))) {
            return true;
        }
        return false;
    }
    public static function checkEmailExists($email) {
        
        $db = Db::getConnection();
        
        $sql = 'SELECT COUNT(*) FROM user WHERE email = :email';
        
        $result = $db->prepare($sql);
        $result->bindParam(':email', $email, PDO::PARAM_STR);
        $result->execute();

        if($result->fetchColumn())
            return true;
        return false;
    }
    
    public static function checkUserData($email,$password)
    {
        $db=DB::getConnection();
        $sql= 'SELECT * FROM user WHERE email = :email AND password = :password';
        $result= $db->prepare($sql);
        $result->bindParam(':email',$email, PDO::PARAM_STR);
        $result->bindParam(':password',$password, PDO::PARAM_STR);    
        $result->execute();

        $user= $result->fetch();
        if($user) return $user['id'];

        return false;
    }

    public static function auth($userId)
    {
        $_SESSION['user']=$userId;
    }

    public static function checkLogged()
    {
        //если есть сессия вернем id
        if(isset($_SESSION['user'])) return $_SESSION['user'];
        header("Location: /user/login/");
    }
    public static function isGuest()
    {
        if(isset($_SESSION['user'])) return false;
        return true;
    }
    public static function getUserById($id)
    {

        if ($id) {                        
            $db = Db::getConnection();
            $sql='SELECT * FROM user WHERE id= :id';
            $result = $db->prepare($sql);
            $result->bindParam(':id', $id, PDO::PARAM_INT);
            //получаем данные(массив)
            $result->setFetchMode(PDO::FETCH_ASSOC);
            $result->execute();

            return $result->fetch();
        }
    }
    public static function edit($id, $firstname,$secondname,$lastname, $password)
    {       
            $db = Db::getConnection();
            $sql="UPDATE user SET firstname= :firstname, secondname= :secondname, lastname= :lastname, password= :password WHERE id= :id";
            $result = $db->prepare($sql);
            $result->bindParam(':id', $id, PDO::PARAM_INT);
            $result->bindParam(':firstname', $firstname, PDO::PARAM_STR);
            $result->bindParam(':secondname', $secondname, PDO::PARAM_STR);
            $result->bindParam(':lastname', $lastname, PDO::PARAM_STR);
            $result->bindParam(':password', $password, PDO::PARAM_STR);
            //получаем массив
            $result->setFetchMode(PDO::FETCH_ASSOC);
            return $result->execute();

            
    }
    
}