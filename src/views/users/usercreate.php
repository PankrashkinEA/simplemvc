<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <title>Имя сотрудника</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
    <form action="" method="post">

        <h2>Имя</h2>

        <div class="form-group">
            <input type="text" class="form-control" id="name" name="name">
        </div>

        <h2>Отдел</h2>

        <select name="department_id">
            <?php foreach ($departmentList as $department) : ?>
                <option value="<?= $department['id'] ?>">
                    <?= $department['name'] ?>
                </option>
            <?php endforeach; ?>
        </select>

        <h2>Днюха</h2>

        <div class="form-group">
            <input type="date" class="form-control" id="birthday" name="birthday">
        </div>
        <button type="submit">Создаём?</button>
        <a href="/users">Передумал</a>
    </form>
</body>

</html>