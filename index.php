<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// ENV and global vars
//require_once('./app/env.php');

if (strpos(__DIR__, 'C:') !== false) {
    putenv("BASE_DIR=/php-mf-docs/");
} else {
    putenv("BASE_DIR=/");
}

require_once('./app/globals.php');

// Autoload Classes
spl_autoload_register(
    function ($class) {
        if (file_exists('./app/core/' . $class . '.php')) {
            require_once './app/core/' . $class . '.php';
        } else if (file_exists('./app/controllers/' . $class . '.php')) {
            require_once './app/controllers/' . $class . '.php';
        } else if (file_exists('./app/models/' . $class . '.php')) {
            require_once './app/models/' . $class . '.php';
        }
    }
);

// Include DB connection once, use dependency injection with class object constructors for DB usage
//$db = new DB();

// Invoke the site
$site = new SiteController();
$site->invoke();

var_dump(__DIR__);