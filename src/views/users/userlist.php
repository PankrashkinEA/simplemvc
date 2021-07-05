<!doctype html>
<html class="no-js" lang="">
    <head>
      <meta charset="utf-8">
      <title>Список сотрудников</title>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
    </head>
    <body>
    <div class="container">
      <h2>Таблица работников</h2>
      <p>Красивые стили из моего самого любимого HTML/CSS/JS фреймворка</p>            
      <table class="table table-borderless">
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
                <th><?= $user['department_name']; ?></th>
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
    </div>
  <br/><a href="/create">Создать</a>
</html>
