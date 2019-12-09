<?php
class ContactsController
{

    public function actionIndex()
    {
        $userEmail='';
        $userText='';
        $result=false;
        if(isset($_POST['submit'])){
            $userEmail=$_POST['userEmail'];
            $userText=$_POST['userText'];
            $errors=false;
            //валидация
            if(!User::checkEmail($userEmail)){
                $errors[]='Неправильный email';
            }
            if($errors==false){
                $adminEmail="anyaflorist2019@mail.com";
                $subject= 'Тема письма';
                $message='Текст: {$userText}. От {$userEmail}';
                $result=mail($adminEmail,$subject,$message);
                $result=true;
            }
        }
        require_once(ROOT . '/views/info/contacts.php');
        return true;
    }

}
?>