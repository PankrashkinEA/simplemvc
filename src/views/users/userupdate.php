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
    <input type="text" name="name" value="<?= $userItems['name'];?>">
    <br>
    <br>
    <label for="department">Департамент:</label>
    <select name="department_id">
        <?php foreach($departmentList as $department) :?>
            <option value="<?=$department['id']?>"
                <?php if ($userItems['department_name'] == $department['name']):?>
                selected
                <?php endif; ?>
            >
                <?=$department['name']?>
            </option>
        <?php endforeach; ?>
    </select>
    <br>
    <br>
    <label for="birthday">День Рождения:</label>
    <input type="date" name="birthday" value="<?= $userItems['birthday'];?>">
    <button type="submit">Редактировать</button>
</form>
<a href="/users"><button>Назад</button></a>
</body>
</html>