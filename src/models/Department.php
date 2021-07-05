<?php


class Department
{
    public static function getDepartmentList(){
        $db = Db::getConnection();

        $departmentsList = array();

        $result = $db->query("SELECT * FROM department ORDER BY id");

        while($row = $result->fetch()){
            $departmentList[] = $row;
        }

        return $departmentList;
    }
}