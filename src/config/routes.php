<?php
return array(
    //------------------------------------Users---------------------------------------------------
    'user/filter/([0-9]+)' => 'users/filter/$1', // actionFilter - фильтр по департаментам
    'user/([0-9]+)' => 'users/view/$1',  // actionView - Просмотр одного пользователя
    'user/update/([0-9]+)' => 'users/update/$1', // actionUpdate - Изменяем
    'user/delete/([0-9]+)' => 'users/delete/$1', // actionDelete - Удаляем
    'user/create' => 'users/create', //actionCreate - Создаём нового
    'users' => 'users/index', //actionIndex в UserController
    // ----------------------------------Department-----------------------------------------------
    'department/([0-9]+)' => 'department/view/$1',  // actionView - Просмотр одного департамента
    'department/update/([0-9]+)' => 'department/update/$1', // actionUpdate - Изменяем департамент
    'department/delete/([0-9]+)' => 'department/delete/$1', // actionDelete - Удаляем департамент
    'department/create' => 'department/create', //actionCreate - Создаём новый департамент
    'departments' => 'department/index', //actionIndex в DepartmentController

    'login' => 'auth/login', // actionLogin
    'logout' => 'auth/logout', // actionSign
);
