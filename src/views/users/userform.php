<!doctype html>
<html class="no-js" lang="">
    <head>
      <meta charset="utf-8">
      <title>Имя сотрудника</title>
      <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
    <form>
        <h1>Имя</h1>
        <div><?= $usersItems['name']; ?></div>
        <h2>Отдел</h2>
        <div><?= $usersItems['department_id']; ?></div>
        <h2>Днюха</h2>
        <div><?= $usersItems['birthday']; ?></div>
        <h2>Создан</h2>
        <div><?= $usersItems['createted_at']; ?></div>
        <a href="/users/">Посмотреть всех</a>
        
      </form>
    </body>
</html>

