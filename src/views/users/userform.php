<!doctype html>
<html class="no-js" lang="">

<head>
  <meta charset="utf-8">
  <title>Имя сотрудника</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
</head>

<body>
  <form class="card" style="width: 18rem;">
    <h1>Имя</h1>
    <div><?= $usersItems['name']; ?></div>
    <h2>Отдел</h2>
    <div><?= $usersItems['department_name']; ?></div>
    <h2>Днюха</h2>
    <div><?= $usersItems['birthday']; ?></div>
    <h2>Создан</h2>
    <div><?= $usersItems['createted_at']; ?></div>
    <a href="/users/">Посмотреть всех</a>

  </form>

</body>

</html>