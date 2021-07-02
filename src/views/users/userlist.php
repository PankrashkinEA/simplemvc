<!doctype html>
<html class="no-js" lang="">
    <head>
      <meta charset="utf-8">
      <title>Список сотрудников</title>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" type="text/css" href="style.css" media="screen">
    </head>
    <body>
      <table>
        <thead>
          <tr>
            <th>id Сотрудника</th>
            <th>Имя Сотрудника</th>
            <th>Отдел сотрудника</th>
            <th>Дата рождения</th>
            <th>Создан</th>
            <th>Что делаем?</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($usersList as $user) { ?>
              <tr>                
                <th><?= $user['id']; ?></th>
                <th><?= $user['name']; ?></th>
                <th><?= $user['department_id']; ?></th>
                <th><?= $user['birthday']; ?></th>
                <th><?= $user['createted_at']; ?></th>
                <th><a href="/users/<?= $user['id'];?>">Просмотр</a></th>
                <th><a href="/update/<?= $user['id'];?>">Редактировать</a></th>
                <th><a href="/users/delete/<?= $user['id'];?>">Удалить</a></th>
                <th></th>
              </tr>
          <?php } ?>
        </tbody>
      </table>
      <br/><a href="/create">Создать</a>
</html>
