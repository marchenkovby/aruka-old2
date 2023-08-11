<?php

xdebug_info();
exit;

use Aruka\App;
use Aruka\Routing\Route;

// Подключает автозагрузчик
require_once dirname(__DIR__) . '/vendor/autoload.php';

// Создает объект приложения
// new App();

var_dump(get_class_vars(Route::class));

exit;
