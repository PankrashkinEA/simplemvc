<?php
include_once ROOT . '/components/Db.php';

class Department
{
    public static function getDepartmentList()
    {
        $db = Db::getConnection();

        $departmentList = [];

        $result = $db->query("SELECT * FROM department ORDER BY id");

        while ($row = $result->fetch()) {
            $departmentList[] = $row;
        }

        return $departmentList;
    }

    public static function getDepartmentById($id)
    {
        $id = intval($id);

        if ($id) {

            $db = Db::getConnection();

            $result = $db->query(
                'SELECT id, name
                                  FROM department 
                                  WHERE id = ' . $id
            );
            $result->setFetchMode(PDO::FETCH_ASSOC);
            $departmentItem = $result->fetch();

            return $departmentItem;
        }
    }

    public static function createDepartment()
    {
        // Метод создания департамента

        // Инициализируем подключение
        $db = Db::getConnection();
        // Создаём переменные полей ввода
        $name = $_POST['name'];
        // Запрос к бд
        $result = $db->prepare("INSERT INTO department
                              (name) 
                               VALUES(?);");
        $execute = $result->execute([$name]);
        return $execute;
    }

    public static function updateDepartment($id)
    {
        $id = intval($id);


        $db = Db::getConnection();

        $name = $_POST['name'];
        $result = $db->prepare("UPDATE department 
            SET name=?
            WHERE id = {$id};");
        $execute = $result->execute([$name]);
        return $execute;
    }

    public static function deleteDepartment($id)
    {
        $id = intval($id);

        if ($id) {

            $db = Db::getConnection();

            $result = $db->query("DELETE FROM department WHERE id = {$id}");
        }
    }
}
