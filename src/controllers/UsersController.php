<?php 

class UsersController extends BaseController
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

    public function actionFilter($id)
    {
        $usersList = User::getDepUserList($id);
        $departmentList = Department::getDepartmentById($id);
        require ROOT . '/views/users/userfilter.php';
    }
    public function actionCreate()
    {   
        $departmentList = Department::getDepartmentList();
        if($_POST){
        $createUser = User::createUser();
        $this->redirect('/users/');
        }   
        require ROOT . '/views/users/usercreate.php';
    }

    public function actionUpdate($id)
    {
            $userItems = User::getUserItemById($id);
            $departmentList = Department::getDepartmentList();
            if($_POST){
                User::updateUser($id);
                $this->redirect('/users/');
            }
            require_once(ROOT. '/views/users/userupdate.php');
    }

    public function actionDelete($id)
    {
        if ($id) {
            $deleteUser = User::deleteUser($id);
            $this->redirect('/users/');
        }
        
    }
}