<?php

class AuthController
{
    public function actionLogin()
    {
        User::loginUser();

        if (isset($_SESSION['user']) && $_SESSION['user'][0] === $_POST['name']) {
            header('Location: /users');
        }

        require ROOT . '/views/login.php';
    }

    public function actionLogout()
    {
        session_destroy();
        header('Location: /login');
    }
}
