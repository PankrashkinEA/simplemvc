<?php
spl_autoload_register('myAutoLoader');

function getFullPath($path, $className)
{
    $fullPath = $path . $className . '.php';
    if (file_exists($fullPath)) {
        return $fullPath;
    }
    return false;
}

function myAutoLoader($className)
{

    if (strpos($className, 'Controller')) {
        $path = ROOT . "/controllers/";
        $fullPath = getFullPath($path, $className);
        if ($fullPath) {
            include_once $fullPath;
            return;
        }
        throw new Exception('File Not Found', 404);
    }
    $folders = ['components', 'models'];
    foreach ($folders as $folder) {
        $path = ROOT . "/$folder/";
        if ($fullPath = getFullPath($path, $className)) {
            include_once $fullPath;
            return;
        }
    }
    throw new Exception('File Not Found', 404);
}
