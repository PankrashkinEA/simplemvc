<?php

class DepartmentController extends BaseController
{
    public function actionIndex()
    {   
        $departmentList = [];
        $departmentList = Department::getDepartmentList();

        
        require ROOT . '/views/department/departmentlist.php';
        
    }

    public function actionView($id)
    {
        if ($id) {
            $departmentItems = Department::getDepartmentById($id);
            require ROOT . '/views/department/departmentview.php';
        }
        
        return true;
    }

    public function actionCreate()
    {   
        if($_POST){
        $createDepartment = Department::createDepartment();
        $this->redirect('/departments/');
        }   
        require ROOT . '/views/department/departmentcreate.php';
        
        
    }
    
    public function actionUpdate($id)
    {
            $departmentItems = Department::getDepartmentById($id);
            if($_POST){
                Department::updateDepartment($id);
                $this->redirect('/departments/');
            }
            require_once(ROOT. '/views/department/departmentupdate.php');
    }

    public function actionDelete($id)
    {   
        if ($id) {
            $deleteDepartment = Department::deleteDepartment($id);
            $this->redirect('/departments/');
        }
    }

   
}