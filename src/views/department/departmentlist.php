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
      <h2>Таблица Департаментов</h2>
      <p>Красивые стили из моего самого любимого HTML/CSS/JS фреймворка</p>            
      <table class="table table-borderless">
        <thead>
          <tr>
            <th>id Департамента</th>
            <th>Имя Департамента</th>
            <th><a href="/users/">Юзеры?</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($departmentList as $department) { ?>
              <tr>                
                <th><?= $department['id']; ?></th>
                <th><?= $department['name']; ?></th>
                <th><a href="/department/<?= $department['id'];?>">Просмотр</a></th>
                <th><a href="/department/update/<?= $department['id'];?>">Редактировать</a></th>
                <th><a href="/department/delete/<?= $department['id'];?>">Удалить</a></th>

                <th></th>
              </tr>
          <?php } ?>
        </tbody>
      </table>
      <br/><button type="button" class="btn btn-dark"><a href="/department/create">Создать</a></button>
    </div>
  
</html>
