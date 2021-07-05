<?php
include_once ROOT . '/components/Db.php';
class User
{
    public static function getUserItemById($id)
    {
        $id = intval($id);

        if($id){
            
            $db = Db::getConnection();
        
            $result = $db->query('SELECT id, name,(SELECT name from department 
                                                   WHERE department.id = users.department_id) 
                                                   AS department_name, birthday, createted_at 
                                  FROM users 
                                  WHERE id = '. $id
                                  );
            $result->setFetchMode(PDO::FETCH_ASSOC);
            $usersItem = $result->fetch();

            return $usersItem;

        }
    }

    public static function getUserList()
    {
        try {
            
            $usersList = array();
            $db = Db::getConnection();
            $result = $db->query('SELECT id, name,(SELECT name from department 
                                                   WHERE department.id = users.department_id) 
                                                   AS department_name, birthday, createted_at 
                                  FROM users ORDER BY id LIMIT 100');

            $i = 0;
            while($row = $result->fetch()){
                $usersList[] = $row;
            }

            return $usersList;


        } catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br />";
        }

    }

    public static function createUser()
    {
        // Метод создания юзера

        // Инициализируем подключение
        $db = Db::getConnection();
        // Создаём переменные полей ввода
        $name = $_POST['name'];
        $department_id = $_POST['department_id'];
        $birthday = $_POST['birthday'];
        // Запрос к бд
        // $result = $db->query("INSERT INTO users (name,department_id, birthday) VALUES ('{$name}',{$department_id},'{$birthday}');");
        $result = $db->prepare("INSERT INTO users
            (name, (SELECT name from department WHERE department.id = users.department_id) AS department_name, birthday)
             VALUES(?, ?, ?);");
        $execute = $result->execute([$name, $department_id, $birthday]);
        return $execute;
        

    }

    public static function updateUser($id)
    {
        $id = intval($id);


            $db = Db::getConnection();
            
            $name = $_POST['name'];
            $department_id = $_POST['department_id'];
            $birthday = $_POST['birthday'];
            $result = $db->prepare("UPDATE users 
            SET name=?, department_id=?, birthday=?
            WHERE id = {$id};");
            $execute = $result->execute([$name, $department_id, $birthday]);
            return $execute;


    }

    public static function deleteUser($id)
    {
        $id = intval($id);

        if($id){
            
            $db = Db::getConnection();
        
            $result = $db->query("DELETE FROM users WHERE id = {$id}");
            
        }
    }

}