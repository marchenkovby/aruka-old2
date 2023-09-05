<?php

echo 1;

exit;

use Aruka\App;
use Aruka\Routing\Route;

echo date(DATE_RSS);

exit;

// Подключает автозагрузчик
require_once dirname(__DIR__) . '/vendor/autoload.php';

// Создает объект приложения
// new App();

var_dump(get_class_vars(Route::class));

exit;
