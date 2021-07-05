<?php

class BaseController
{
    public function redirect($route)
    {
        header('Location: '.$route);
    }
}