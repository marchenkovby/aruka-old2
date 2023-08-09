<?php

// Подключает файлы с константами
require_once dirname(__DIR__) . '/config/constants.php';

// Подключает файл с маршрутами
require_once CONFIG . '/routes.php';

// Подключает файл с данными для БД
require_once CONFIG . '/credentials.php';

// Подключает файл с функциями-помощниками
require_once FRAMEWORK . '/utils.php';
