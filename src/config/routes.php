<?php
    return array(
        'users/([0-9]+)' => 'users/view/$1',  // actionView - Просмотр одного пользователя
        'update/([0-9]+)' => 'users/update/$1', // actionDelete - Изменяем
        'users/delete/([0-9]+)' => 'users/delete/$1', // actionDelete - Удаляем
        'users' => 'users/index', //actionIndex в NewsCOntroller
        'create' => 'users/create', //actionCreate - Создаём нового
        // 'products' => 'product/list', // actionList в ProductController
    );