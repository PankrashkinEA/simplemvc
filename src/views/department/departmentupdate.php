<!DOCTYPE html>
<html class="no-js" lang="">
<head>
    <meta charset="utf-8">
    <title>Редактировать пользователя</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<body>
    <h1>Редактировать</h1>
    <form action="" method="post">
        <label for="name">Имя:</label>
        <input type="text" name="name" value="<?= $departmentItems['name']; ?>">
        <br>
        <br>
        <button type="submit">Редактировать</button>
    </form>
    <a href="/departments/"><button>Назад</button></a>
</body>
</html>