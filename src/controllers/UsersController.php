<?php 

include_once ROOT . '/models/User.php';

class UsersController
{
    public function actionIndex()
    {   
        $usersList = array();
        $usersList = User::getUserList();
        
        require ROOT . '/views/users/userlist.php';
        
    }

    public function actionView($id)
    {
        if ($id) {
            $usersItems = User::getUserItemById($id);
            require ROOT . '/views/users/userform.php';
        }

        return true;
    }

    public function actionCreate()
    {   
        if($_POST){
        $createUser = User::createUser();
        header('Location: http://localhost/users/');
        }   
        require ROOT . '/views/users/usercreate.php';
        
        
    }

    public function actionDelete($id)
    {
        $deleteUser = User::deleteUser($id);
    }

    public function actionUpdate($id)
    {
            $userItems = User::getUserItemById($id);
            if($_POST){
                User::updateUser($id);
                header('Location: /users/{$id}');
            }
            require_once(ROOT. '/views/users/userupdate.php');
    }
}