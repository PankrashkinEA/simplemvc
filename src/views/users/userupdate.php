<!DOCTYPE html>
<html class="no-js" lang="">
<head>
    <meta charset="utf-8">
    <title>Редактировать пользователя</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href='http://fonts.googleapis.com/css?family=Arvo' rel='stylesheet' type='text/css'>
    <link href="/templates/css/style.css" rel="stylesheet" type="text/css" media="screen" />
</head>
<body>
<h1>Редактировать</h1>
<form action="" method="post">
    <label for="name">Имя:</label>
    <input type="text" name="name" value="<?= $userItems['name'];?>">
    <br>
    <br>
    <label for="department">Департамент:</label>
    <input type="number" name="department_id" value="<?= $userItems['department_id'];?>">
    <br>
    <br>
    <label for="birthday">День Рождения:</label>
    <input type="date" name="birthday" value="<?= $userItems['birthday'];?>">
    <button type="submit">Редактировать</button>
</form>
<a href="/users"><button>Назад</button></a>
</body>
</html>